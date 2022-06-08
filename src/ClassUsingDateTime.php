<?php

declare(strict_types=1);

namespace App;

use DateTimeImmutable;
use DateTimeInterface;

final class ClassUsingDateTime
{
    public readonly DateTimeInterface $time;

    public function __construct(
        DateTimeInterface $nativeTime,
    ) {
        $this->time = new DateTimeImmutable($nativeTime->format('Y-m-d'));
    }
}
