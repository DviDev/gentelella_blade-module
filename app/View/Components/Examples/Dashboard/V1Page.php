<?php

namespace Modules\Gentelella\View\Components\Examples\Dashboard;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

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
