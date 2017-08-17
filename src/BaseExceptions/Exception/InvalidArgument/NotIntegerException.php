<?php

namespace BaseExceptions\Exception\InvalidArgument;

use BaseExceptions\Enum\VariableType;

/**
 * Class NotIntegerException
 * @package BaseExceptions\Exception\InvalidArgument
 */
class NotIntegerException extends InvalidArgumentException
{
    /**
     * NotIntegerException constructor.
     *
     * @param string $name
     * @param null $variable
     */
    public function __construct($name, $variable = null)
    {
        parent::__construct(
            "Only integer allowed for variable '{$name}'",
            new VariableType(VariableType::T_INT),
            $variable
        );
    }
}
