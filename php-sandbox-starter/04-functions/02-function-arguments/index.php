<?php

// function add ($a, $b) {
//     return $a + $b;
// }

// echo add(2, 2);

function addAll(...$numbers){
    // com a linha de código acima, usando o OPERADOR DE DESEMPACOTAMENTO
    // todo valor passado é armazenado em um array, sendo ele o $numbers


    $total = 0;

    foreach($numbers as $number){
        $total += $number;
    }

    return $total;
}

echo addAll(1,2,3,4,5);