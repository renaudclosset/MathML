<?php

namespace MercurySolutions\MathML\Operator;

use MercurySolutions\MathML\Exception\MathMLException;

class OperatorPower extends Operator
{

    protected function getClosure()
    {
        return function (array $parameters) {
            // validation
            if (count($parameters) !== 2) {
                throw new MathMLException('Power operator requires 2 arguments, not ' . count($parameters));
            }
            $p1 = array_shift($parameters);
            $p2 = array_shift($parameters);
            return pow($p1, $p2);
        };
    }
}
