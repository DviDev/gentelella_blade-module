<?php

declare(strict_types=1);

namespace Modules\Gentelella\View\Components\Examples;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Page404 extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.examples/404page');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ExamplesPage404;
    }
}
