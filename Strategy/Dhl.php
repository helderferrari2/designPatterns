<?php

require_once './StrategyInterface.php';

class Dhl implements StrategyInterface
{
    public function calculate(float $weight): float
    {
        return $weight * 0.7;
    }
}
