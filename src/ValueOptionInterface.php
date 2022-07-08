<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;

interface ValueOptionInterface extends ValueInterface
{
    public const DEFAULT_LOCALE = 'default';
    public function getRawValue(): string|int|float;
    public function getDisplayValue(null|string $locale = null): string;

    /**
     * @return array<string, string> Display values for each available locale, indexed by locale
     */
    public function getDisplayValues(): array;

}
