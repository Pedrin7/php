<?php
$output = null;

$string = 'Hello world';

//strlen
$output = strlen($string);//retorna o tamanho da string

//str_world_count
$output = str_word_count($string);//retorna a quantidade de palavras

//strpos
$output = strpos($string, 'world');//retorna o index onde a palavra passada no segundo argumento começa

//Pegando um index em especifico
$output = $string[6];//retorna um char do index informado

//substr
$output = substr($string, 6, 5);//retorna uma parte de uma string, começando de um determinado índice.

//str_replace
$output = str_replace('world', 'Universe',$string);//substitui a palavra informada

//strtolower
$output = strtolower($string);//retorna toda a string em letras minusculas

// strtoupper
$output = strtoupper($string);//retorna toda a string em letras maiusculas

// ucwords
$output = ucwords($string);//a primeira letra de cada palavra retorna em letra maiuscula

$output = trim('            hello         ');//remove os espaços


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>