<?php

namespace Modules\Gentelella\View\Components\Examples;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class MenuLevel2Page extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/menulevel2page');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesMenuLevel2Page;
    }
}
