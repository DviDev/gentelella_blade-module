<?php

namespace Modules\Gentelella\View\Components\Layout\Footer;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class PageFooter extends Component
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
