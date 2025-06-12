<?php
$output = null;

$ids = [10, 22, 36, 98];
$users = ['user1', 'user2', 'user3'];

//cont = retorna a quantidade e elementos no array 
$output = count($ids);

//sort = retorna o array em ordem crescente
sort($ids);

//rsort = retorna o array em ordem decrescente
rsort($ids);

//array_push = adiciona um elemento no final do array
array_push($users, "user4");

//array_pop = deleta o último elemento do array
array_pop($users);

//array_shift = deleta o primeiro elemento do array
array_shift($users);

//array_unshift = adiciona um elemento no inicio do array
array_unshift($users, "user5");

//array_slice = retorna parte de um array em um outro array
$ids2 = array_slice($ids, 1, 3);
// var_dump($ids2)

//array_splice = retorna uma parte do array e coloca outra coisa no lugar
array_splice($ids, 1, 1, 14);
array_splice($users, 0, 1, "novo user");

// array_sum = retorna a soma dos elementos do array
$output = 'Sum of ids: ' .array_sum($ids);

//array_search = retorna o index do determinado elemento do array
$output = 'Novo usuário está no index ' . array_search('novo user', $users);

//in_array = verifica se um valor existe em um array
$output = 'User2 existe' . in_array('user2', $users);

//explode = retorna uma string em um array
$tags = 'tech, code, php';
$tags_array = explode(',', $tags);

//implode = transforma um array em uma string
$output = implode('-' , $users);
var_dump($output);


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
            <p class="text-xl"><?= $output ?></p>
            <h2>Ids Array: </h2>
            <p>
                <pre>
                    <?php  print_r($ids) ?>
                </pre>
            </p>
            <h2>Users Array: </h2>
            <p>
                <pre>
                    <?php  print_r($users) ?>
                </pre>
            </p>
            <h2>O array abaixo era uma STRING, mas foi transformado em um array com o explode</h2>
            <br>
            <p>
                <pre>
                    <?php  print_r($tags_array) ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>