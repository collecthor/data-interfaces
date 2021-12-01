<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;


interface StringValueInterface extends ValueInterface
{
    public function getRawValue(): string;
}
