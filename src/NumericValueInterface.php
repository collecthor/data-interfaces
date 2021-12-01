<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;

interface NumericValueInterface extends ValueInterface
{
    public function getRawValue(): int|float;
}
