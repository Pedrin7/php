<?php

// lambda funcitons abaixo
// tem q colocar os dois pontos ao declarar

$square = function ($number){
    return $number * $number;
};

$result = $square(5);

echo $result . '<br>';

//Closures

function createCounter(){
    $count = 0;

    $counter = function() use (&$count){
        return ++ $count;
    };

    return $counter;
}

$counter = createCounter();

echo $counter() . '<br>';