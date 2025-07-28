<?php

namespace Modules\Gentelella\View\Components\Examples\UiElements;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class TypographyPage extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/uielements/typographypage');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesUiElementsTypographyPage;
    }
}
