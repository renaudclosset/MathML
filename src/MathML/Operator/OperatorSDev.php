<?php

namespace MercurySolutions\MathML\Operator;

class OperatorSDev extends OperatorPlus
{

    /**
     * @return \Closure
     */
    protected function getClosure()
    {
        return function (array $parameters) {
        
            $mean = array_sum($parameters) / count($parameters);
            $deviations = array();
            foreach ($parameters as $key => $parameter) {
                $deviations[$key] = pow($parameter - $mean, 2);
            }
            return sqrt(array_sum($deviations) / (count($deviations) - 1));
        };
    }
}
