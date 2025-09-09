<?php

namespace Modules\Gentelella\Providers;

use Event;
use Illuminate\Support\ServiceProvider;
use Modules\DBMap\Events\ScanTableEvent;
use Modules\Gentelella\Listeners\CreateMenuItemsListener;
use Modules\Gentelella\Listeners\ScanTableGentelellaListener;
use Modules\Project\Events\CreateMenuItemsEvent;

class GentelellaEventServiceProvider extends ServiceProvider
{
    public function register()
    {
        Event::listen(CreateMenuItemsEvent::class, CreateMenuItemsListener::class);
        Event::listen(ScanTableEvent::class, ScanTableGentelellaListener::class);
    }
}
