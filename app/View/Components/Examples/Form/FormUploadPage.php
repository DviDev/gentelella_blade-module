<?php

declare(strict_types=1);

namespace Modules\Gentelella\View\Components\Examples\Form;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class FormUploadPage extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/form/formuploadpage');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesFormUploadPage;
    }
}
