<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 3/20/2017
 * Time: 4:31 PM
 */


require 'autoload.php';

use app\classes\magicmethods\MagicMethods;
use app\classes\magicmethods\MagicMethods2;

// __construct and __destruct magic methods executed
$MagicMethods = new MagicMethods('Object has been created. Constructed.');

// magic method __set executed
$MagicMethods->name = 'Vilius';

// magic method __get executed
$MagicMethods->norbutas;

// magic method __call executed
$MagicMethods->myFood('bacon', 'chicken', 'potatoes');

// magic method __callStatic executed
$MagicMethods::myHobbies('football', 'handball');

// magic method __toString executed
$MagicMethods->setToString('String text<br>');
echo $MagicMethods;

// magic method __invoke executed
echo $MagicMethods(3);

// magic method __clone executed
$MagicMethodsClone = clone $MagicMethods;
$MagicMethodsClone->setMyAge('22');
$MagicMethodsClone->getMyAge();

// magic methods __unset executed
unset($MagicMethods->variable);

// magic method __isset executed
$MagicMethods->myName = 'Vilius';
isset($MagicMethods->variable);

// magic method __debugInfo executed
$MagicMethods->setMyAge(50);
var_dump($MagicMethods);

echo '<br>';


// sleep and wakeup magic methods executed with serialize
$MagicMethods2 = new MagicMethods2();
$MagicMethods2->setAge(12);
$MagicMethods2->setPersonalCode("45215421248");

$data = serialize($MagicMethods2);
var_dump(unserialize($data));