<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "Step1.php";
require_once "Step2.php";

/**
 * Template Method
 * 
 * 
 * https://refactoring.guru/pt-br/design-patterns/template-method
 */

//Execute template Step1 using default template TemplateMethod
$step1 = new Step1();
$responseStep1 = $step1->execute();

echo "<pre>";
print_r($responseStep1);
echo "</pre><br />";

//Execute template Step1 using default template TemplateMethod
$step2 = new Step2();
$responseStep2 = $step2->execute();

echo "<pre>";
print_r($responseStep2);
echo "</pre>";