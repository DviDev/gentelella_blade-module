<?php

namespace Modules\Gentelella\View\Components\Form\Check;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Check extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.form/check/check');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormCheck;
    }
}
