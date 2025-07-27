<?php

namespace Modules\Gentelella\View\Components\Examples\Charts;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class ChartTwoPage extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/charts/charttwopage');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesChartTwoPage;
    }
}
