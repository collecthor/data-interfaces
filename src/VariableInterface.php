<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;


interface VariableInterface
{
    /**
     * @return string A unique identifier for the variable
     */
    public function getName(): string;

    /**
     * @return string The title text in the default language
     * If a locale is given the display value should be returned using the given locale. If the locale is not available
     * a fallback MUST be used and an exeception MUST NOT be thrown
     */
    public function getTitle(null|string $locale = null): string;

    /**
     * Extracts the variable value from a record
     */
    public function getValue(RecordInterface $record): ValueInterface|ValueSetInterface;

    /**
     * Extract a display value from a record
     * If a locale is given the display value should be returned using the given locale. If the locale is not available
     * a fallback MUST be used and an exeception MUST NOT be thrown
     */
    public function getDisplayValue(RecordInterface $record, null|string $locale = null): StringValueInterface;

    /**
     * Return the type of measure for this variable
     */
    public function getMeasure(): Measure;

    public function getRawConfigurationValue(string $key): mixed;
}
