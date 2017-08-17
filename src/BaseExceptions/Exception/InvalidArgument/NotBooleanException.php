<?php

namespace BaseExceptions\Exception\InvalidArgument;

use BaseExceptions\Enum\VariableType;

/**
 * Class NotBooleanException
 * @package BaseExceptions\Exception\InvalidArgument
 */
class NotBooleanException extends InvalidArgumentException
{
    /**
     * NotBooleanException constructor.
     *
     * @param string $name
     * @param mixed|null $variable
     */
    public function __construct($name, $variable = null)
    {
        parent::__construct(
            "Only boolean allowed for variable '{$name}'",
            new VariableType(VariableType::T_BOOLEAN),
            $variable
        );
    }
}
