<?php

namespace Modules\Gentelella\View\Components\Form;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Input extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.form/input');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormInput;
    }
}
