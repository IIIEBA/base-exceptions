<?php

namespace BaseExceptions\Exception\InvalidArgument;

/**
 * Class EmptyArrayException
 * @package BaseExceptions\Exception\InvalidArgument
 */
class EmptyArrayException extends \InvalidArgumentException
{
    public function __construct($name)
    {
        parent::__construct("Empty array was given for variable '{$name}'");
    }
}
