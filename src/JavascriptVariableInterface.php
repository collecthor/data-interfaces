<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;

/**
 * This interface extends the variable interface and adds methods for doing the annotation on the client side.
 */
interface JavascriptVariableInterface extends VariableInterface
{
    /**
     * This creates a plain javascript object with the following structure:
     * {
     *     getName(): string,
     *     getTitle(string|null locale): string,
     *     getValue(dict record): TBD,
     *     getMeasure(): nominal|ordinal|scale
     *     getDisplayValue(dict record, string|null locale): string
     * }
     * @return string
     */
    public function getJavascriptRepresentation(): string;

}
