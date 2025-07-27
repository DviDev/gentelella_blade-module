<?php

namespace Modules\Gentelella\View\Components\Examples\UiElements;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class MediaGalleryPage extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/uielements/mediagallerypage');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesUiElementsMediaGalleryPage;
    }
}
