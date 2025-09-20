<?php

declare(strict_types=1);

namespace Modules\Gentelella\View\Components\Layout\Footer;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class PageFooter extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('gentelella::components.layout/footer/footer');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::LayoutFooterPageFooter;
    }
}
