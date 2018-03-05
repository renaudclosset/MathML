<?php

namespace MercurySolutions\MathML\Exception;

class ParameterCountException extends Exception
{

    public function __construct($operator, $actualParameterCount, $expectedParameterCount)
    {
        $message = "Operator {$operator} expects {$expectedParameterCount} parameters, not {$actualParameterCount}.";
        parent::__construct($message);
    }
}
