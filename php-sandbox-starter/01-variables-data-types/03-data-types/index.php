<?php


// PHP DATA TYPES:

// - String
$name = 'Pedro Paim';
$name2 = "pedro paim 2";
var_dump($name2);
echo '<br />';
echo gettype($name);
echo '<br />';

// - Integer
$age = 23;
var_dump($age);
echo '<br />';

//- Float
$nota = 7.5;
var_dump($nota);
echo '<br />';

// - Boolean
$carregou = true;
var_dump($carregou);
echo '<br />';

// - Array
$friends = ['pedro', 'maya', 80];
var_dump($friends);
echo '<br />';

// - Object
$pessoa = new stdClass();
var_dump($pessoa);
echo '<br />';

// - NULL
$car = null;
var_dump($car);
