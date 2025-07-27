<?php

namespace Modules\Gentelella\View\Components\Examples\Tables;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class TableDynamicPage extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/tables/tabledynamicpage');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesTableDynamicPage;
    }
}
