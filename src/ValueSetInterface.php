<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;

/**
 * Models a value that contains multiple ValueOptions.
 * This is used in multiple response variables.
 */
interface ValueSetInterface
{
    /**
     * @return ValueOptionInterface[] A list of value options
     */
    public function getValues(): array;

}
