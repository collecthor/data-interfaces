<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;


interface ValueInterface
{
    public function getRawValue(): string|int|float|null;
}
