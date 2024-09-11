<?php

namespace Modules\Gentelella\View\Components\Assets;

use Illuminate\View\Component;
use Illuminate\View\View;

class JQVMap extends Component
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
        return view('gentelella::components.assets/jqvmap');
    }
}
