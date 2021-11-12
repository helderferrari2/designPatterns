<?php

require_once './StrategyInterface.php';

class Correios implements StrategyInterface
{
    public function calculate(float $weight): float
    {
        return $weight * 0.1;
    }
}
