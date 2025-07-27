<?php

namespace Modules\Gentelella\View\Components\Layout;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class V3 extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.layout/v3');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::LayoutV3;
    }
}
