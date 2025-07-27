<?php

namespace Modules\Gentelella\View\Components\Widget\Indicator;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Tile extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.widget/indicator/tile');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::WidgetIndicatorTile;
    }
}
