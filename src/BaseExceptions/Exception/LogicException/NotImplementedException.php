<?php

namespace BaseExceptions\Exception\LogicException;

/**
 * Class NotImplementedException
 */
class NotImplementedException extends \LogicException
{
    /**
     * NotImplementedException constructor.
     */
    public function __construct()
    {
        parent::__construct("Not implemented action");
    }
}
