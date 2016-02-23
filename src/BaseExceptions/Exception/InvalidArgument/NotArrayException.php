<?php

namespace BaseExceptions\Exception\InvalidArgument;

/**
 * Class NotArrayException
 * @package BaseExceptions\Exception\InvalidArgument
 */
class NotArrayException extends \InvalidArgumentException
{
    public function __construct($name)
    {
        parent::__construct("Only array allowed for variable '{$name}'");
    }
}
