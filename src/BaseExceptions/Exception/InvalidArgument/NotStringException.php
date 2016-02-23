<?php

namespace BaseExceptions\Exception\InvalidArgument;

/**
 * Class NotStringException
 * @package BaseExceptions\Exception\InvalidArgument
 */
class NotStringException extends \InvalidArgumentException
{
    public function __construct($name)
    {
        parent::__construct("Only string allowed for variable '{$name}'");
    }
}
