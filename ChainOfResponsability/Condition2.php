<?php

require_once 'Handler.php';

class Condition2 extends Handler
{
    private $next;

    public function handle($request)
    {
        if ($request === 2) {
            return $request;
        }

        return $this->next->handle($request);
    }

    public function setNext($next)
    {
        $this->next = $next;
    }
}
