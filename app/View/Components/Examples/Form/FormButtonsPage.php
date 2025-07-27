<?php

namespace Modules\Gentelella\View\Components\Examples\Form;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class FormButtonsPage extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/form/formbuttonspage');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesFormButtonsPage;
    }
}
