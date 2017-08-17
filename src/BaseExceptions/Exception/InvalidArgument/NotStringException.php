<?php

namespace BaseExceptions\Exception\InvalidArgument;

use BaseExceptions\Enum\VariableType;

/**
 * Class NotStringException
 * @package BaseExceptions\Exception\InvalidArgument
 */
class NotStringException extends InvalidArgumentException
{
    /**
     * NotStringException constructor.
     *
     * @param string $name
     * @param mixed|null $variable
     */
    public function __construct($name, $variable = null)
    {
        parent::__construct(
            "Only string allowed for variable '{$name}'",
            new VariableType(VariableType::T_STRING),
            $variable
        );
    }
}
