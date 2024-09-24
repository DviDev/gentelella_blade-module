<?php

namespace Modules\Gentelella\Listeners;

use Modules\Base\Events\UsingSpotlightEvent;

class UsingSpotlightListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UsingSpotlightEvent $event): void
    {
        if (str($event->uri)->startsWith(['gentelella', '/gentelella'])) {
            //if gentelella no using tailwind ...
            config(['livewire-ui-spotlight.include_css' => true]);
        }
    }
}
