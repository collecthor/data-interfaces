<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;

interface RecordInterface extends StoredRecordInterface
{
    /**
     * Retrieve a value given by path to the data.
     * @phpstan-param non-empty-list<string> $path
     * @return string|int|float|null|array<mixed>
     */
    public function getDataValue(array $path): string|int|float|null|array;

    /**
     * Return the data in the record
     * @return array<string, mixed>
     */
    public function allData(): array;
}
