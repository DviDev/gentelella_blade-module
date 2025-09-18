<?php

namespace Modules\Gentelella\Listeners;

use Modules\Permission\Enums\Actions;
use Modules\Permission\Models\PermissionActionModel;
use Modules\Person\Enums\UserType;
use Modules\Project\Contracts\CreateMenuItemsListenerContract;
use Modules\Project\Entities\ProjectModuleMenuItem\ProjectModuleMenuItemEntityModel;
use Modules\Project\Events\CreateMenuItemsEvent;

class CreateMenuItemsListener extends CreateMenuItemsListenerContract
{
    protected function moduleName(): string
    {
        return 'Gentelella';
    }

    protected function createMenuItems(CreateMenuItemsEvent $event): void
    {
        $p = ProjectModuleMenuItemEntityModel::props();
        $event->menu->menuItems()->create([
            $p->label => __('Page Examples'),
            $p->num_order => 1,
            $p->title => __('Page Examples'),
            $p->icon => '<i class="nav-icon fas fa-circle fa-xs text-xs"></i>',
            $p->url => route('gentelella.layout.v1'),
            $p->active => true,
            $p->action_id => $this->getAction()->id,
        ]);
    }

    protected function getAction(): PermissionActionModel
    {
        $action = PermissionActionModel::query()->create([
            'name' => Actions::view->name,
            'title' => __('Page Examples'),
        ]);

        $action->firstOrCreateGroup()->createCondition(UserType::DEVELOPER);

        return $action;
    }
}
