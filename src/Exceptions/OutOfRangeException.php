<?php

namespace PT01\Exceptions;


use Throwable;

class OutOfRangeException extends \Exception
{
    public function __construct(int $i, int $j, int $code = 0, Throwable $previous = null)
    {
        parent::__construct("Cell [$i, $j] is out of range.", $code, $previous);
    }
}