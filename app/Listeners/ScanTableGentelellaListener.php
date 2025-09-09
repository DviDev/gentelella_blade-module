<?php

namespace Modules\Gentelella\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\DBMap\Domains\ScanTableDomain;

class ScanTableGentelellaListener
{
    public function handle($event): void
    {
        new ScanTableDomain()->scan('gentelella');
    }
}
