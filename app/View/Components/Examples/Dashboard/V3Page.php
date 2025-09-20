<?php

declare(strict_types=1);

namespace Modules\Gentelella\View\Components\Examples\Dashboard;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class V3Page extends Component
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
