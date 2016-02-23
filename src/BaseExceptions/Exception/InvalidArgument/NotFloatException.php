<?php

namespace BaseExceptions\Exception\InvalidArgument;

/**
 * Class NotFloatException
 * @package BaseExceptions\Exception\InvalidArgument
 */
class NotFloatException extends \InvalidArgumentException
{
    public function __construct($name)
    {
        parent::__construct("Only float allowed for variable '{$name}'");
    }
}
