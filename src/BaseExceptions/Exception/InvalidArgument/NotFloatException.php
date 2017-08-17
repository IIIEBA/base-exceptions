<?php

namespace BaseExceptions\Exception\InvalidArgument;

use BaseExceptions\Enum\VariableType;

/**
 * Class NotFloatException
 * @package BaseExceptions\Exception\InvalidArgument
 */
class NotFloatException extends InvalidArgumentException
{
    /**
     * NotFloatException constructor.
     *
     * @param string $name
     * @param mixed|null $variable
     */
    public function __construct($name, $variable = null)
    {
        parent::__construct(
            "Only float allowed for variable '{$name}'",
            new VariableType(VariableType::T_FLOAT),
            $variable
        );
    }
}
