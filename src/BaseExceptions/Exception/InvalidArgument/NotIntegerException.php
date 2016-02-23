<?php

namespace BaseExceptions\Exception\InvalidArgument;

/**
 * Class NotIntegerException
 * @package BaseExceptions\Exception\InvalidArgument
 */
class NotIntegerException extends \InvalidArgumentException
{
    public function __construct($name)
    {
        parent::__construct("Only integer allowed for variable '{$name}'");
    }
}
