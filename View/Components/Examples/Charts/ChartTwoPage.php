<?php

namespace Modules\Gentelella\View\Components\Examples\Charts;

use Illuminate\View\Component;
use Illuminate\View\View;

class ChartTwoPage extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('gentelella::components.examples/charts/charttwopage');
    }
}
