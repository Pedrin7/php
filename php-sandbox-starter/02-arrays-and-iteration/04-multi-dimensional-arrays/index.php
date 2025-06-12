<?php
$output = null;

$fruits = [
  ['Apple', 'Red'],
  ['Orange', 'orange'],
  ['Banana', 'yellow']
];

$fruits[] = ['Lemon', 'Green'];

// $output = $fruits[3][0];

$users = [
  ['name' => 'Pedro',
  'email' => 'teste@teste.com',
  'senha' => 123456],

  ['name' => 'Maya',
  'email' => 'teste@maya.com',
  'senha' => 123],

  ['name' => 'mari',
  'email' => 'teste@mari.com',
  'senha' => 456]
];

$users[] = ['name' => 'teste', 'email' => 'teste@teste2.com', 'senha' => 789];

array_push($users, ['name' => 'teste3', 'email' => 'teste@teste3.com', 'senha' => 987]);

$output = count($users);
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
      <h1>array das frutas</h1>
      <p>
        <pre>
          <?php var_dump($fruits) ?>
        </pre>
      </p>

      <h1>array dos usuários</h1>
      <p>
        <pre>
          <?php var_dump($users)?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>