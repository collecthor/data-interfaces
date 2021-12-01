<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;

/**
 * Models a variable that has known upper and lower bounds.
 * The data type maybe any scalar type.
 */
interface BoundedVariableInterface extends VariableInterface
{
    /**
     * @return string|float|int the lowest allowable value (inclusive)
     */
    public function getLowerBound(): string|float|int;

    /**
     * @return string|float|int the highest allowable value (exclusive)
     */
    public function getUpperBound(): string|float|int;




}
