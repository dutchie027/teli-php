<?php

namespace dutchie027\Teli\Exceptions;

class TeliAPIRequestException extends TeliAPIException
{
    public function __construct($message = '', $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
