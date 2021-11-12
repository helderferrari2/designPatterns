<?php

require_once 'Handler.php';

class DefaultCondition extends Handler
{

    public function handle($request)
    {
        return $request;
    }

    public function setNext($next)
    {
        //
    }
}
