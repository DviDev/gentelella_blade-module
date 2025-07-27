<?php

namespace Modules\Gentelella\View\Components\Examples\Layout;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class FixedSidebarPage extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/layout/fixedsidebarpage');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesLayoutFixedSidebarPage;
    }
}
