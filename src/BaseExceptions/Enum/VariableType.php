<?php

namespace BaseExceptions\Enum;

use Enum\Lib\Enum;

/**
 * Class VariableType
 * @package BaseExceptions\Enum
 */
class VariableType extends Enum
{
    const T_ARRAY = "array";
    const T_STRING = "string";
    const T_INT = "integer";
    const T_FLOAT = "double";
    const T_BOOLEAN = "boolean";
    const T_OBJECT = "object";
}
