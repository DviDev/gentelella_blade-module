<?php

declare(strict_types=1);

namespace Modules\Gentelella\View\Components\Layout;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class SidebarLeft extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.layout.sidebarleft');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::layoutSidebarLeft;
    }
}
