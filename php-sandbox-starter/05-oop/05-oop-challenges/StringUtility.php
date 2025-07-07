<?php

class StringUtility{

   public static function shout($string){
    $stringUpper = strtoupper($string);
    return $stringUpper . '!';
   }

   public static function whisper($string){
    $stringLower = strtolower($string);
    return $stringLower . '.';
   }

   public static function repeat($string, $times = 2){
        return str_repeat($string, $times);
   }    
}

echo StringUtility::shout('Ola, mundo') . '<br>';
echo StringUtility::whisper('Ola, mundo') . '<br>';
echo ('Aqui é o método REPEAT: ' . '<br>') . StringUtility::repeat('Ola, mundo.' . '<br>', 5);