<?php

declare(strict_types=1);

namespace App;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use DateTimeInterface;

final class ClassUsingCarbon
{
    public readonly CarbonInterface $time;

    public function __construct(
        DateTimeInterface $nativeTime,
    ) {
        $this->time = Carbon::parse($nativeTime);
    }
}
