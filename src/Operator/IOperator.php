<?php

namespace MercurySolutions\MathML\Operator;

interface IOperator
{

    /**
     * @param array $parameters
     * @return float $result
     */
    public function calculate(array $parameters);
}
