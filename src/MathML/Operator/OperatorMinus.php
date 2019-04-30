<?php

namespace MercurySolutions\MathML\Operator;

use MercurySolutions\MathML\Exception\MathMLException;

class OperatorMinus extends Operator
{

    /**
     * @return \Closure
     */
    protected function getClosure()
    {
        return function (array $parameters) {
            if (count($parameters) !== 2) {
                throw new MathMLException('Minus operator requires 2 arguments, not ' . count($parameters));
            }
            $result = null;
            $first = array_shift($parameters);
            if ($first !== null) {
                $result = floatval($first);
            }
            foreach ($parameters as $parameter) {
                if ($parameter !== null) {
                    $result -= floatval($parameter);
                }
            }
            return $result;
        };
    }
}
