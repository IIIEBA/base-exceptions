<?php

namespace BaseExceptions\Exception\InvalidArgument;

/**
 * Class NotPositiveNumericException
 * @package BaseExceptions\Exception\InvalidArgument
 */
class NotPositiveNumericException extends InvalidArgumentException
{
    /**
     * NotPositiveNumericException constructor.
     *
     * @param string $name
     */
    public function __construct($name)
    {
        parent::__construct("Variable '{$name}' must be greater than zero");
    }
}
