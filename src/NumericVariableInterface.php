<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;


interface NumericVariableInterface extends VariableInterface
{
    public function getValue(RecordInterface $record): NumericValueInterface|InvalidValueInterface;

    /**
     * Extract a display value from a record
     * If a locale is given the display value should be returned using the given locale. If the locale is not available
     * a fallback MUST be used and an exeception MUST NOT be thrown
     */
    public function getDisplayValue(RecordInterface $record, null|string $locale = null): StringValueInterface;

    /**
     * Return the type of measure for this variable
     * @return self::MEASURE_SCALE|self::MEASURE_ORDINAL|self::MEASURE_NOMINAL
     */
    public function getMeasure(): string;

}
