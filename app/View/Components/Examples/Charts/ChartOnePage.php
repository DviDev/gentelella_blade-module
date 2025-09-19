<?php

declare(strict_types=1);

namespace Modules\Gentelella\View\Components\Examples\Charts;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class ChartOnePage extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/charts/chartonepage');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesChartsChartonepage;
    }
}
