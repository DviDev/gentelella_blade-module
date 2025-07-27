<?php

namespace Modules\Gentelella\View\Components\Examples\Tables;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class TableDefaultPage extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/tables/tabledefaultpage');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesTablesTableDefaultPage;
    }
}
