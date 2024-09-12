<?php

namespace Modules\Gentelella\View\Components\Examples\Dashboard;

use Illuminate\View\Component;
use Illuminate\View\View;

class V3Page extends Component
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
        return view('gentelella::components.examples/dashboard/v3page');
    }
}
