<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;

/**
 * A closed variable is a variable with a finite number of valid values
 */
interface ClosedVariableInterface extends VariableInterface
{
    /**
     * @return non-empty-list<ValueOptionInterface> A list of value options
     */
    public function getValueOptions(): array;

}
