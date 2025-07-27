<?php

namespace Modules\Gentelella\View\Components\Examples\Form;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class FormAdvancedPage extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/form/formadvancedpage');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesFormAdvancedPage;
    }
}
