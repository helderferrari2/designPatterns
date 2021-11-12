<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Chain of Responsability
 *
 * https://refactoring.guru/pt-br/design-patterns/chain-of-responsibility
 */

require_once "Condition1.php";
require_once "Condition2.php";
require_once "Condition3.php";
require_once "DefaultCondition.php";

$request = 12;

//All conditions
$condition1 = new Condition1();
$condition2 = new Condition2();
$condition3 = new Condition3();
$defaultCondition = new DefaultCondition();

//Define execution chain
$condition1->setNext($condition2);
$condition2->setNext($condition3);
$condition3->setNext($defaultCondition);

//Start loop over all chains
$response = $condition1->handle($request);

echo "Response:" . $response;
