<?php

namespace BaseExceptions\Exception\InvalidArgument;

/**
 * Class EmptyStringException
 * @package BaseExceptions\Exception\InvalidArgument
 */
class EmptyStringException extends \InvalidArgumentException
{
    public function __construct($name)
    {
        parent::__construct("Empty string was given for variable '{$name}'");
    }
}
