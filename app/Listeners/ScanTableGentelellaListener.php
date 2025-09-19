<?php

declare(strict_types=1);

namespace Modules\Gentelella\Listeners;

use Modules\DBMap\Domains\ScanTableDomain;

final class ScanTableGentelellaListener
{
    public function handle($event): void
    {
        (new ScanTableDomain)->scan('gentelella');
    }
}
