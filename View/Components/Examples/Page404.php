<?php

namespace Modules\Gentelella\View\Components\Examples;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Page404 extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/404page');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesPage404;
    }
}
