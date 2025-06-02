<?php
$number1 = 5;
$number2 = 15;
$number3 = '25';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

// Implicit conversion = é uma conversão automática de um tipo de dados para outro, que o compilador ou runtime realiza sem precisar de uma instrução explícita do programador
$result = $number1 + $number2; //int
$result = $number1 + $number3; //int (string to int)
$result = $number3 + $number3; //int (string to int)
$result = $number1 . $number2; //string (int to string)
// $result = $fruit + $number2; //error
$result = $number1 + $bool1; //int (bool to int) //resultado da 6 pois o PHP converte o true em 1
$result = $number1 + $bool2; //int (bool to int) //resultado da 5 pois o PHP converte o true em 0
$result = $number1 + $null; //int (null to int) // resulado da 5 pois o php converte o null em 0


//Explicit conversion = é uma conversão de tipo onde o programador indica de forma clara ao compilador que deseja alterar o tipo de uma variável ou valor
$result = (string) $number1;
$result = (int) $number3;
$result = (bool) $number1; //se a variável $number1 fosse 0, o resultado seria false


var_dump($result);

?>