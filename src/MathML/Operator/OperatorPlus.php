<?php

namespace MercurySolutions\MathML\Operator;

class OperatorPlus extends Operator
{

    /**
     * @return \Closure
     */
    protected function getClosure()
    {
        return function (array $parameters) {
            return array_sum($parameters);
        };
    }
}
