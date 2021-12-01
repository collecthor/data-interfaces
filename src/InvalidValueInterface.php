<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;

/**
 * This models a value that is not valid according to the survey structure
 */
interface InvalidValueInterface extends MissingValueInterface
{

    public function getRawValue(): string|int|float|null;

    /**
     * @return true
     */
    public function isSystemMissing(): bool;


}
