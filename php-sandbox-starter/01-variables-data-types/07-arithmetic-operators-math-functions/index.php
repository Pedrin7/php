<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |

*/

$output = null;
$num1 = 10;
$num2 = 20;

// Basic Math
// $output = "$num1 + $num2 = " . $num1 + $num2;

// $output = "$num1 - $num2 = " . $num1 - $num2;

// $output = "$num1 * $num2 = " . $num1 * $num2;

// $output = "$num1 / $num2 = " . $num1 / $num2;

// $output = "$num1 % $num2 = " . $num1 % $num2;


// Assignment Operator
$num3 = 5;
// $num3 += 20;
// $num3 -= 20;
$num3 *= 20;
$num3 /= 20;
$output = $num3;

// Built in PHP functions
//rand() = gera um número aleatório

$output = rand();
$output = getrandmax();//retorna o valor máximo que a função rand gera
$output = rand(1, 10);

//round()
$output = round(3.7);//arredonda o número para o mais próximo

//ceil()
$output = ceil(2.4);//sempre arredonda o numero para cima

//floor()
$output = floor(2.8);//sempre arredonda o numero para baixo

// sqrt()
$output = sqrt(25);//a função sqrt retorna a raiz quadrada de um número

//pi
$output = pi();//retorna o numero PI

//abs()
$output = abs(-4.7);//retorna a forma absoluta do numero(ele positivo)

//max()
$output = max(13, 5, 7, 20, 60, 7);//retorna o valor mais alto em uma lista de numeros
$output = max([13, 5, 7, 20, 50, 7]);

//min()
$output = min(10, 20, 90, 75, 22, 1);//retorna o menor valor em uma lista
$output = min([10, 20, 90, 75, 22, 3]);

$output = number_format(1234569.8644289,2, '.', ',' );//função usada para formatar numeros com separadores de milhar e casas decimais


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
      <!-- Output -->
       <p class="text-line">
        <?= $output ?>
       </p>

    </div>
  </div>
</body>

</html>