<?php

namespace Modules\Gentelella\View\Components\Examples\Charts;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

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
