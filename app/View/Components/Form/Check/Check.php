<?php

declare(strict_types=1);

namespace Modules\Gentelella\View\Components\Form\Check;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Check extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.form.check.check');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormCheck;
    }
}
