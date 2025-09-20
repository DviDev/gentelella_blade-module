<?php

declare(strict_types=1);

namespace Modules\Gentelella\View\Components\Examples\Form;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class GeneralFormPage extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/form/generalformpage');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesFormGeneralFormPage;
    }
}
