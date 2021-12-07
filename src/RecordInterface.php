<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;

use DateTimeInterface;

/**
 * Models a record that internally stores its data in an associative array
 */
interface RecordInterface
{
    /**
     * Retrieve a value given by path to the data.
     * @phpstan-param non-empty-list<string> $path
     * @return string|int|float|null|array<mixed>
     */
    public function getDataValue(array $path): string|int|float|null|array;

    /**
     * Return the unique ID of this record
     */
    public function getRecordId(): int;

    /**
     * Since there is no interface for immutable date times, implementations MUST return a fresh object every time.
     */
    public function getStarted(): DateTimeInterface;

    /**
     * Since there is no interface for immutable date times, implementations MUST return a fresh object every time.
     */
    public function getLastUpdate(): DateTimeInterface;
}
