<?php

namespace MercurySolutions\MathML\Operator;

class OperatorMax extends Operator
{

    /**
     * @return \Closure
     */
    protected function getClosure()
    {
        return function ($parameters) {
            return max($parameters);
        };
    }
}
