<?php

namespace Modules\Gentelella\View\Components\Examples\UiElements;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class IconsPage extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/uielements/iconspage');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesUiElementsIconsPage;
    }
}
