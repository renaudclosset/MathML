<?php

namespace MercurySolutions\MathML\Exception;

class ParameterCountException extends MathMLException
{

    public function __construct($operator, $actualParameterCount, $expectedParameterCount)
    {
        $message = "Operator {$operator} expects {$expectedParameterCount} parameters, not {$actualParameterCount}.";
        parent::__construct($message);
    }
}
