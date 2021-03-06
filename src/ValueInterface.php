<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;


interface ValueInterface
{
    /**
     * @return string|int|float|array<mixed>|null
     */
    public function getRawValue(): string|int|float|null|array;
}
