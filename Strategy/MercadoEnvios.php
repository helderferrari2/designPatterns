<?php

require_once './StrategyInterface.php';

class MercadoEnvios implements StrategyInterface
{
    public function calculate(float $weight): float
    {
        return $weight * 0.05;
    }
}
