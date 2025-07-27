<?php

namespace Modules\Gentelella\View\Components\Widget\Indicator;

use Illuminate\View\Component;
use Illuminate\View\View;

class Tile extends Component
{
//    use DevResources;

    public function render(): View
    {
        return view('gentelella::components.widget/indicator/tile');
    }

//    public function componentAlias(): DvuiComponentAlias
//    {
//        return DvuiComponentAlias::WidgetIndicatorTile;
//    }
}
