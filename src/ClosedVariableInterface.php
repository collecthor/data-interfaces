<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;

interface ClosedVariableInterface extends VariableInterface
{
    /**
     * @return ValueOptionInterface[] A list of value options
     */
    public function getValueOptions(): array;

}
