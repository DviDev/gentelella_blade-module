<?php

namespace Modules\Gentelella\View\Components\Examples\Dashboard;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class V3Page extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/dashboard/v3page');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesDashboardV3Page;
    }
}
