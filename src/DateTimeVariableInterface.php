<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;

/**
 * A variable to store DateTime values
 */

interface DateTimeVariableInterface extends VariableInterface
{
    public function getValue(RecordInterface $record): DateTimeValueInterface;
    
    public function getDisplayValue(RecordInterface $record, ?string $locale = null): StringValueInterface;

}
