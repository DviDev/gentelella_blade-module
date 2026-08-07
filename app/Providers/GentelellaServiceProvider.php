<?php

declare(strict_types=1);

namespace Modules\Gentelella\Providers;

use Event;
use Illuminate\Support\Facades\Blade;
use Modules\Base\Contracts\BaseServiceProviderContract;
use Modules\Base\Events\UsingSpotlightEvent;
use Modules\Base\Traits\PublishableComponents;
use Modules\Gentelella\Listeners\UsingSpotlightListener;
use Modules\Gentelella\View\Components\Assets\Icheck;
use Modules\Gentelella\View\Components\Assets\JQVMap;
use Modules\Gentelella\View\Components\Dev\Info;
use Modules\Gentelella\View\Components\Form\Check\Check;
use Modules\Gentelella\View\Components\Form\Input;
use Modules\Gentelella\View\Components\Widget\Indicator\Tile;

final class GentelellaServiceProvider extends BaseServiceProviderContract
{
    use PublishableComponents;







    public function provides(): array
    {
        return [
            RouteServiceProvider::class,
            GentelellaEventServiceProvider::class
        ];
    }

    public function getModuleName(): string
    {
        return 'Gentelella';
    }

    public function getModuleNameLower(): string
    {
        return 'gentelella';
    }

    protected function registerCommandSchedules(): void
    {
        // $this->app->booted(function () {
        //     $schedule = $this->app->make(Schedule::class);
        //     $schedule->command('inspire')->hourly();
        // });
    }

    protected function registerComponents(): void
    {
        $this->publishableComponent('assets.icheck', Icheck::class);
        $this->publishableComponent('assets.jqvmap', JQVMap::class);
        $this->publishableComponent('dev.info', Info::class);
        $this->publishableComponent('form.check.check', Check::class);
        $this->publishableComponent('form.input', Input::class);
        $this->publishableComponent('widget.indicator.tile', Tile::class);

        Blade::componentNamespace(
            'Modules\\Gentelella\\View\\Components',
            'gentelella' // Prefixo para os componentes
        );
    }

    protected function registerEvents(): void
    {
        Event::listen(UsingSpotlightEvent::class, UsingSpotlightListener::class);
    }

    protected function langPath(): string
    {
        return module_path($this->getModuleName(), 'resources/lang');
    }
}
