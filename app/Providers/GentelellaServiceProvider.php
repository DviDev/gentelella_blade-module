<?php

namespace Modules\Gentelella\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Modules\Base\Events\UsingSpotlightEvent;
use Modules\Gentelella\Listeners\UsingSpotlightListener;
use Modules\Gentelella\View\Components\Widget\Indicator\Tile;

class GentelellaServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'Gentelella';

    protected string $moduleNameLower = 'gentelella';

    /**
     * Boot the application events.
     */
    public function boot(): void
    {
        $this->registerCommands();
        $this->registerCommandSchedules();
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerComponents();
        $this->registerAssetPath();
        $this->loadMigrationsFrom(module_path($this->moduleName, 'Database/Migrations'));

        $this->registerEvents();
    }

    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register commands in the format of Command::class
     */
    protected function registerCommands(): void
    {
        // $this->commands([]);
    }

    /**
     * Register command Schedules.
     */
    protected function registerCommandSchedules(): void
    {
        // $this->app->booted(function () {
        //     $schedule = $this->app->make(Schedule::class);
        //     $schedule->command('inspire')->hourly();
        // });
    }

    /**
     * Register translations.
     */
    public function registerTranslations(): void
    {
        $langPath = resource_path('lang/modules/'.$this->moduleNameLower);

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, $this->moduleNameLower);
            $this->loadJsonTranslationsFrom($langPath);
        } else {
            $this->loadTranslationsFrom(module_path($this->moduleName, 'resources/lang'), $this->moduleNameLower);
            $this->loadJsonTranslationsFrom(module_path($this->moduleName, 'resources/lang'));
        }
    }

    /**
     * Register config.
     */
    protected function registerConfig(): void
    {
        $this->publishes([module_path($this->moduleName, 'Config/config.php') => config_path($this->moduleNameLower.'.php')], 'config');
        $this->mergeConfigFrom(module_path($this->moduleName, 'Config/config.php'), $this->moduleNameLower);
    }

    /**
     * Register views.
     */
    public function registerViews(): void
    {
        $viewPath = resource_path('views/modules/'.$this->moduleNameLower);
        $sourcePath = module_path($this->moduleName, 'resources/views');

        $this->publishes([$sourcePath => $viewPath], ['views', $this->moduleNameLower.'-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->moduleNameLower);

        $componentNamespace = str_replace('/', '\\', config('modules.namespace').'\\'.$this->moduleName.'\\'.config('modules.paths.generator.component-class.path'));
        Blade::componentNamespace($componentNamespace, $this->moduleNameLower);
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }

    private function getPublishableViewPaths(): array
    {
        $paths = [];
        $config = config('view.paths');
        foreach ($config as $path) {
            $path = $path.'/modules/'.$this->moduleNameLower;
            if (is_dir($path)) {
                $paths[] = $path;
            }
        }

        return $paths;
    }

    /**
     * Exemple php artisan vendor:publish --tag=public --force
     */
    private function registerAssetPath(): void
    {
        $assetVendorPath = public_path('assets/modules/'.$this->moduleNameLower);
        $sourceVendorPath = module_path($this->moduleName, 'resources/assets');
        $this->publishes([$sourceVendorPath => $assetVendorPath], 'gentelella-assets');
    }

    private function registerEvents(): void
    {
        \Event::listen(UsingSpotlightEvent::class, UsingSpotlightListener::class);
    }

    private function registerComponents(): void
    {
        // Registra componentes individualmente
        Blade::component('gentelella::widget.indicator.tile', Tile::class);
        // Registra automaticamente todos os componentes no namespace Components
        $componentNamespace = 'Modules\\Gentelella\\View\\Components';

        // Exemplo de como registrar o componente Info
        Blade::component('gentelella::dev.info', \Modules\Gentelella\View\Components\Dev\Info::class);

        // Para registrar automaticamente todos os componentes do diretório:
        $this->registerComponentsIn("app/View/Components");
    }
}
