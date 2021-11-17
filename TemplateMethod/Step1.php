<?php

require_once "TemplateMethod.php";

class Step1 extends TemplateMethod
{
    public function stepA()
    {
        return 'Class Step A: step a executing';
    }

    public function stepB()
    {
        return 'Class Step A: step b executing';
    }
}
