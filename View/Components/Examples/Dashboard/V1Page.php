<?php

namespace Modules\Gentelella\View\Components\Examples\Dashboard;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class V1Page extends Component
{
    use DevResources;
    public function render(): View|string
    {
        return view('gentelella::components.examples/dashboard/v1page');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesDashboardV1Page;
    }
}
