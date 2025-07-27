<?php

namespace Modules\Gentelella\View\Components\Examples\Layout;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class FixedFooterPage extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/layout/fixedfooterpage');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesLayoutFixedFooterPage;
    }
}
