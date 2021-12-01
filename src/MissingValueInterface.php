<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;

/**
 * This models a missing value
 */
interface MissingValueInterface extends ValueInterface
{

    /**
     * @return bool Whether the value is a system or a user missing value
     * A user missing value is an answer option like don't know, a system missing value can occur when the system
     * decides to not show a specific question to a user.
     * For variables that are not related to questions this should always be true.
     */
    public function isSystemMissing(): bool;


}
