<?php

namespace Modules\Gentelella\Listeners;

use Modules\Base\Entities\Actions\Actions;
use Modules\Permission\Models\PermissionActionModel;
use Modules\Person\Entities\User\UserType;
use Modules\Project\Entities\MenuItem\MenuItemEntityModel;
use Modules\Project\Listeners\CreateMenuItemsListenerContract;
use Modules\Project\Models\MenuModel;
use Modules\Project\Models\ProjectModuleEntityDBModel;

class CreateMenuItemsListener extends CreateMenuItemsListenerContract
{
    public function handle($event): void
    {
        if (MenuModel::query()->where('name', $this->moduleName())->exists()) {
            return;
        }

        $menu = $this->createMenu($this->moduleName(), $this->moduleName(), 1);

        $this->createMenuItem($menu);
    }

    public function moduleName(): string
    {
        return 'Gentelella';
    }

    protected function createMenu($name, $title, $order = 1): MenuModel
    {
        return MenuModel::firstOrCreate(
            ['name' => $name],
            ['title' => $title, 'num_order' => $order, 'active' => true]
        );
    }

    protected function createMenuItem(MenuModel $menuModel, ?ProjectModuleEntityDBModel $entity = null, $key = null): void
    {
        $p = MenuItemEntityModel::props();
        $menuModel->menuItems()->create([
            $p->label => __('Page Examples'),
            $p->num_order => 1,
            $p->title => trans('Page Examples'),
            $p->icon => '<i class="nav-icon fas fa-circle fa-xs text-xs"></i>',
            $p->url => route('gentelella.layout.v1'),
            $p->active => true,
            $p->action_id => $this->getAction()->id,
        ]);
    }

    protected function getAction(): PermissionActionModel
    {
        $action = PermissionActionModel::query()
            ->create(['name' => Actions::view->name, 'title' => __('Page Examples')]);
        $action->firstOrCreateGroup()
            ->createCondition(UserType::DEVELOPER);

        return $action;
    }
}
