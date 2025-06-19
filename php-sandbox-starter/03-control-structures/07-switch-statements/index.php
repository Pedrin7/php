<?php

  $day = date('l');

  switch($day) {
    case 'Monday':
      $message = 'Monday blues';
      $color = 'blue';
      break;
  
  case 'Tuesday':
      $message = 'Tuesday';
      $color = 'red';
      break;
  
  case 'Wednesday':
      $message = 'Wednesday';
      $color = 'green';
      break;
  
  case 'Thursday':
      $message = 'Thursday';
      $color = 'pink';
      break;
  
  case 'Friday':
      $message = 'Friday';
      $color = 'orange';
      break;
  
  case 'Saturday':
      $message = 'Saturday';
      $color = 'yellow';
      break;
  
  case 'Sunday':
      $message = 'Sunday';
      $color = 'grey';
      break;
  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>What Day Is It?</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: <?= $color?>;
      color: black;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>

<body>
  <h1><?= $day ?></h1>
</body>

</html>