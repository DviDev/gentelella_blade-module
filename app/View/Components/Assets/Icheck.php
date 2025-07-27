<?php

namespace Modules\Gentelella\View\Components\Assets;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Icheck extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.assets/icheck');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::AssetIcheck;
    }
}
