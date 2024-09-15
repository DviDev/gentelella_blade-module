<?php

namespace Modules\Gentelella\View\Components\Layout\Footer;

use Illuminate\View\Component;
use Illuminate\View\View;

class PageFooter extends Component
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
        return view('gentelella::components.layout/footer/footer');
    }
}
