<?php

namespace Modules\Gentelella\View\Components\Examples;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Page403 extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/403page');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Examples403Page;
    }
}
