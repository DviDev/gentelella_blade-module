<?php

namespace Modules\Gentelella\View\Components\Layout;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class V2 extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.layout/v2');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::LayoutV2;
    }
}
