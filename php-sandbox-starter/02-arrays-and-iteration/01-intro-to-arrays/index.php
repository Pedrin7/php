<?php

$names = array('pedro', 'maya', 'mae');
$number = [1, 2, 3];

function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

// inspect($names);
// inspect($number);

// print_r($number);

//add elemento no array
$number[3] = 4;
$number[] = 5;

inspect($number);

//mudando um valor no array 
$number[1] = 14;

inspect($number);

//deletando um elemento no array
unset($number[1]);

inspect($number);

$number = array_values($number);

inspect($number);
?>