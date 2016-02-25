<?php

namespace BaseExceptions\Exception\InvalidArgument;

/**
 * Class NotBooleanException
 * @package BaseExceptions\Exception\InvalidArgument
 */
class NotBooleanException extends \InvalidArgumentException
{
    public function __construct($name)
    {
        parent::__construct("Only boolean allowed for variable '{$name}'");
    }
}
