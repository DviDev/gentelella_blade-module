<?php

namespace Modules\Gentelella\View\Components\Assets;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class JQVMap extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.assets/jqvmap');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::AssetJQVMap;
    }
}
