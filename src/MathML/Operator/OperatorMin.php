<?php

namespace MercurySolutions\MathML\Operator;

class OperatorMin extends Operator
{

    /**
     * @return \Closure
     */
    protected function getClosure()
    {
        return function (array $parameters) {
            return min($parameters);
        };
    }
}
