<?php

require_once './StrategyInterface.php';

class Context {

    private $interface;

    public function __construct(StrategyInterface $interface) {
        $this->interface = $interface;
    }

    public function calculateShipping(float $weight)  : float
    {
        return $this->interface->calculate($weight);
    }

}