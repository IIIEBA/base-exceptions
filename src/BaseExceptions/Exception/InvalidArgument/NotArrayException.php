<?php

namespace BaseExceptions\Exception\InvalidArgument;

use BaseExceptions\Enum\VariableType;

/**
 * Class NotArrayException
 * @package BaseExceptions\Exception\InvalidArgument
 */
class NotArrayException extends InvalidArgumentException
{
    /**
     * NotArrayException constructor.
     *
     * @param string $name
     * @param mixed|null $variable
     */
    public function __construct($name, $variable = null)
    {
        parent::__construct(
            "Only array allowed for variable '{$name}'",
            new VariableType(VariableType::T_ARRAY),
            $variable
        );
    }
}
