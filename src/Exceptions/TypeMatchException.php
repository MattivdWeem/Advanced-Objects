<?php
namespace MattivdWeem\AdvancedObjects\Exceptions;
use Exception as BaseException;
class TypeMatchException extends Exception
{
    public function __construct($type, $expected, $code = 0, BaseException $previous = null)
    {
        parent::__construct('Expected: '.$expected.' Got '.$type.' ', $code, $previous);
    }


}