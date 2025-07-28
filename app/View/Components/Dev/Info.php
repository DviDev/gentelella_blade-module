<?php

namespace Modules\Gentelella\View\Components\Dev;

use Illuminate\View\Component;
use Illuminate\View\View;

class Info extends Component
{
    public function render(): View|string
    {
        return view('gentelella::components.dev.info');
    }
}
