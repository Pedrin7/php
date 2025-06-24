<?php

// callbback function = um função onde outra função é passada de argumento

$numbers = [1,2,3,4,5];

$squaredNumbers = array_map(function($numbers){
    return $numbers * $numbers;
}, $numbers);

print_r($squaredNumbers);
