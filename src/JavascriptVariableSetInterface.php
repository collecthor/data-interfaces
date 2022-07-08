<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;

use InvalidArgumentException;

/**
 * A javascript variable set guarantees that all variables can expose an object for annotating responses on the client
 * side
 */
interface JavascriptVariableSetInterface extends VariableSetInterface
{
    /**
     * @return iterable<string> Return a list of variable IDs
     */
    public function getVariableNames(): iterable;

    /**
     * @throws InvalidArgumentException when the given name is not valid
     */
    public function getVariable(string $name): JavascriptVariableInterface;

    /**
     * @return iterable<JavascriptVariableInterface> Returns an iterator that will yield the VariableInterface objects
     */
    public function getVariables(): iterable;

}
