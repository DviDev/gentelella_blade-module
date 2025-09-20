<?php

declare(strict_types=1);

namespace Modules\Gentelella\Listeners;

use Modules\Base\Events\UsingSpotlightEvent;

final class UsingSpotlightListener
{
    public function handle(UsingSpotlightEvent $event): void
    {
        if (str($event->uri)->startsWith(['gentelella', '/gentelella'])) {
            // if gentelella no using tailwind ...
            config(['livewire-ui-spotlight.include_css' => true]);
        }
    }
}
