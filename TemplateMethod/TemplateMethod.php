<?php

abstract class TemplateMethod
{
    public function execute()
    {
        return [
            'step A' => $this->stepA(),
            'hook' => $this->hook(),
            'step B' => $this->stepB(),
        ]; 
    }

    public abstract function stepA();

    public abstract function stepB();

    /**
     * Optional, child classes can overwrite this method
     *
     * @return string
     */
    public function hook()
    {
        //
    }
}
