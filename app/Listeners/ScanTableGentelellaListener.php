<?php

namespace Modules\Gentelella\Listeners;

use Modules\DBMap\Domains\ScanTableDomain;

class ScanTableGentelellaListener
{
    public function handle($event): void
    {
        (new ScanTableDomain)->scan('gentelella');
    }
}
