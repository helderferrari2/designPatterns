<?php

require_once 'Handler.php';

class Condition1 extends Handler
{
    private $next;

    public function handle($request)
    {
        if ($request === 1) {
            return $request;
        }

        return $this->next->handle($request);
    }

    public function setNext($next)
    {
        $this->next = $next;
    }
}
