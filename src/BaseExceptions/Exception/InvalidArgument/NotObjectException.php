<?php

namespace BaseExceptions\Exception\InvalidArgument;

use BaseExceptions\Enum\VariableType;

/**
 * Class NotObjectException
 * @package BaseExceptions\Exception\InvalidArgument
 */
class NotObjectException extends InvalidArgumentException
{
    /**
     * NotObjectException constructor.
     *
     * @param string $name
     * @param mixed|null $variable
     */
    public function __construct($name, $variable = null)
    {
        parent::__construct(
            "Only object allowed for variable '{$name}'",
            new VariableType(VariableType::T_OBJECT),
            $variable
        );
    }
}
