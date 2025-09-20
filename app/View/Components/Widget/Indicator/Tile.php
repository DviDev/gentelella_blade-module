<?php

declare(strict_types=1);

namespace Modules\Gentelella\View\Components\Widget\Indicator;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Tile extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('gentelella::components.widget/indicator/tile');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::WidgetIndicatorTile;
    }
}
