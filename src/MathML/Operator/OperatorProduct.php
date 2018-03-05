<?php

namespace MercurySolutions\MathML\Operator;

class OperatorProduct extends Operator
{

    protected function getClosure()
    {
        return function (array $parameters) {
            $result = 1;
            foreach ($parameters as $parameter) {
                $result *= $parameter;
            }
            return $result;
        };
    }
}
