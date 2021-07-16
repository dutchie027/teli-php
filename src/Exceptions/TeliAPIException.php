<?php

namespace dutchie027\Teli\Exceptions;

class TeliAPIException extends \Exception
{
    public function __construct($message = '', $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
