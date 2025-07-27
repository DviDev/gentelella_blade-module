<?php

namespace Modules\Gentelella\View\Components\Layout\Header;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class TopNav extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.layout/header/topnav');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::LayoutTopNav;
    }
}
