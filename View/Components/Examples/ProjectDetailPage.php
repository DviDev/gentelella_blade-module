<?php

namespace Modules\Gentelella\View\Components\Examples;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class ProjectDetailPage extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/projectdetailpage');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesProjectDetailPage;
    }
}
