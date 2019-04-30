<?php

namespace MercurySolutions\MathML\Operator;

use Closure;

/**
 * Class OperatorMean
 * @package MercurySolutions\MathML\Operator
 */
class OperatorMean extends OperatorPlus
{

    /**
     * @return Closure
     */
    protected function getClosure(): Closure
    {
        return function (array $parameters) {
            $validParameters = array();

            // only keep parameters not equal to NULL
            foreach ($parameters as $parameter) {
                if ($parameter !== null) {
                    $validParameters[] = $parameter;
                }
            }

            // no valid parameters?
            $count = count($validParameters);
            if ($count === 0) {
                return null;
            }

            // take sum of parameters
            $sumClosure = parent::getClosure();
            $sum = $sumClosure($parameters);

            // return average
            return $sum/$count;
        };
    }
}
