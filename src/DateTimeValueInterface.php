<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;

use DateTime;
use DateTimeInterface;

/**
 * A datetime value
 */

interface DateTimeValueInterface extends ValueInterface
{
    public function getRawValue(): DateTimeInterface;
}
