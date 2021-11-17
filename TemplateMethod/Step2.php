<?php

require_once "TemplateMethod.php";

class Step2 extends TemplateMethod
{
    public function stepA()
    {
        return 'Class Step B: step a executing';
    }

    public function stepB()
    {
        return 'Class Step B: step b executing';
    }

    public function hook()
    {
        return 'Class Step B: hook executing';
    }
}
