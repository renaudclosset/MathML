<?php

namespace MercurySolutions\MathML\Exception;

use Throwable;

/**
 * Class DivisionByZeroException
 * @package MercurySolutions\MathML\Exception
 */
class DivisionByZeroException extends MathMLException
{
    public function __construct($code = 0, Throwable $previous = null)
    {
        $message = "Division by zero is no allowed";
        parent::__construct($message, $code, $previous);
    }
}
