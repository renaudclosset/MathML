<?php

namespace MercurySolutions\MathML\Operator;

use Closure;
use MercurySolutions\MathML\Exception\DivisionByZeroException;

/**
 * Class OperatorSDev
 * @package MercurySolutions\MathML\Operator
 */
class OperatorSDev extends OperatorPlus
{

    /**
     * @return Closure
     */
    protected function getClosure(): Closure
    {
        return function (array $parameters) {
            $mean = array_sum($parameters) / count($parameters);
            $deviations = [];
            foreach ($parameters as $key => $parameter) {
                $deviations[$key] = pow($parameter - $mean, 2);
            }
            $count = count($deviations);
            if ($count === 1) {
                throw new DivisionByZeroException();
            }
            return sqrt(array_sum($deviations) / ($count - 1));
        };
    }
}
