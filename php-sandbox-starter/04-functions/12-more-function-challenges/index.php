<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

// EASY version
// function fahrenheitToCelsius($fahrenheit){
//   return 5/9 * ($fahrenheit - 32);
// }

$fahrenheitToCelsius = fn($fahrenheit) => 5/9 * ($fahrenheit - 32);

$fahrenheit = 68;

echo $fahrenheit . '&degF = ' . $fahrenheitToCelsius($fahrenheit) . '&degC';

// HARD version
echo '<br>';

$temp = 32;

$fahrenheitToCelsius = function($fahrenheit) use ($temp){
  return ($fahrenheit - $temp) * 5 / 9;
};

echo $fahrenheit . '&degF = ' . $fahrenheitToCelsius($fahrenheit) . '&degC';

echo '<br>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/
$array = ['pedro', 'maya', 'mari', 'rossano'];

function printNamesToUpperCase($array){
  foreach($array as $nome){
    echo strtoupper($nome) . '<br>';
  }
}
echo printNamesToUpperCase($array);

echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

$setence = 'O pedro e o cara mais lindo de sao Leopoldo';

function findLongestWord($setence){
  $arraySetence = explode(' ' , $setence);
  // var_dump($arraySetence);
  $longuesWord = ' ';

  foreach($arraySetence as $word){
    $word = trim($word);
    if(strlen($word) > strlen($longuesWord) || $longuesWord === ''){
      $longuesWord = $word;
    }   
  }

  return $longuesWord;
}

echo findLongestWord($setence);

