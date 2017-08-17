<?php

namespace BaseExceptions\Exception\InvalidArgument;

use BaseExceptions\Enum\VariableType;

/**
 * Class InvalidArgumentException
 * @package BaseExceptions\Exception\InvalidArgument
 */
class InvalidArgumentException extends \InvalidArgumentException
{

    /**
     * InvalidArgumentException constructor.
     * @param string $message
     * @param VariableType $type
     * @param mixed|null $variable
     */
    public function __construct($message, VariableType $type = null, $variable = null)
    {
        if ($type !== null && $variable !== null) {
            $message .= ($message !== "" ? ". " : "")
                . ucfirst(gettype($variable)) . "was given instead of " . $type->getValue();
        }

        parent::__construct($message);
    }
}
