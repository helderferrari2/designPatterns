<?php

require_once './Correios.php';
require_once './MercadoEnvios.php';
require_once './Context.php';
require_once './Dhl.php';

/**
 *  Strategy - Padroes comportamentais
 * 
 *  Quando usar?
 *  Quando precisa encapsular algoritmos similares para tomada de decisao
 *  eg: Calcular impostos, calcular juros e etc ...
 * 
 *  Context - Consumo das classes concretas
 *  Strategy - Interface
 *  Concrete Strategy - Classes que implementam a interface
 * 
 * https://refactoring.guru/pt-br/design-patterns/strategy
 */

$weigth = 5.2;
$context = new Context(new Correios());
$totalShippingCorreios = $context->calculateShipping($weigth);

echo "Correios: " . $totalShippingCorreios . "<br />";

$context = new Context(new MercadoEnvios());
$totalShippingMercadoEnvios = $context->calculateShipping($weigth);

echo "Mercado Envios: " . $totalShippingMercadoEnvios . "<br />";

$context = new Context(new Dhl());
$totalShippingDhl = $context->calculateShipping($weigth);

echo "DHL: " . $totalShippingDhl . "<br />";
