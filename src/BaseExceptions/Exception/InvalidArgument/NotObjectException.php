<?php

namespace BaseExceptions\Exception\InvalidArgument;

/**
 * Class NotObjectException
 * @package BaseExceptions\Exception\InvalidArgument
 */
class NotObjectException extends \InvalidArgumentException
{
    public function __construct($name)
    {
        parent::__construct("Only object allowed for variable '{$name}'");
    }
}
