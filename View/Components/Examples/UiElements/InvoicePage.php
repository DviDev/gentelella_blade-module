<?php

namespace Modules\Gentelella\View\Components\Examples\UiElements;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class InvoicePage extends Component
{
    use DevResources;

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
        return view('gentelella::components.examples/uielements/invoicepage');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        // TODO: Implement componentAlias() method.
    }
}
