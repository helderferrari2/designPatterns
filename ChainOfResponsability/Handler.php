<?php

abstract class Handler
{
    abstract public function handle($request);
    abstract public function setNext($next);
}
