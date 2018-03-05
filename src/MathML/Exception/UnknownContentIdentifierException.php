<?php

namespace MercurySolutions\MathML\Exception;

class UnknownContentIdentifierException extends Exception
{

    public function __construct($contentIdentifier, $code = null, \Exception $previous = null)
    {
        $message = "Content Identifier \"{$contentIdentifier}\" is unknown.";
        parent::__construct($message, $code, $previous);
    }
}
