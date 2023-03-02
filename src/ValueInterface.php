<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;

use DateTimeInterface;

interface ValueInterface
{
    /**
     * @return string|int|float|bool|array<mixed>|null|DateTimeInterface
     */
    public function getRawValue(): string|int|float|bool|null|array|DateTimeInterface;
}
