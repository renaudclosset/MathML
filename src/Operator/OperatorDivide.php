<?php

namespace MercurySolutions\MathML\Operator;

use Closure;
use MercurySolutions\MathML\Exception\DivisionByZeroException;
use MercurySolutions\MathML\Exception\ParameterCountException;

/**
 * Class OperatorTimes
 * @package MercurySolutions\MathML\Operator
 */
class OperatorDivide extends Operator
{

    /**
     * @return Closure
     */
    protected function getClosure(): Closure
    {
        return function (array $parameters) {
            // validation
            if (count($parameters) < 2) {
                throw new ParameterCountException($this, count($parameters), 2);
            }

            $result = array_shift($parameters);
            while (!empty($parameters)) {
                $parameter = (float) array_shift($parameters);
                if ($parameter === 0.0) {
                    throw new DivisionByZeroException();
                }
                $result /= $parameter;
            }

            return $result;
        };
    }
}
