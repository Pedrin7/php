<?php

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/
echo '<h3>Sum Of An Array</h3>';

$numbers = [1, 3, 5, 7, 9, 11, 13];

$amount = count($numbers);
$sum = array_sum($numbers);

// somando os bens 1 a 1 de força chucra kk
// $sum = $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3] + $numbers[4] + $numbers[5] + $numbers[6];

echo('The sum of the '. $amount . ' numbers is: ' . $sum);

/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/

echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow'];

$colors_reversed = array_reverse($colors);

// array_push($colors_reversed, 'purple');
// array_push($colors_reversed, 'orange');

// using array_merge = retorna um novo array com os novos valores
$colors_reversed = array_merge($colors_reversed, ['purple', 'orange']) ;

array_splice($colors_reversed, 1, 1, 'pink');
array_pop($colors_reversed);


var_dump($colors_reversed);

/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields 
  id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo '<h3>Job Listings</h3>';

$jobs = [
  [
    'id' => 1,
    'job_title' => 'Intern developer',
    'company' => 'Meta',
    'contact_email' => 'teste@teste.com',
    'contact_phone' => 123,
    'skill' => ['HTML', 'CSS', 'JavaScript', 'JAVA']
],
[
  'id' => 2,
  'job_title' => 'Frontend Developer',
  'company' => 'COBOL',
  'contact_email' => 'teste@teste2.com',
  'contact_phone' => 456,
  'skill' => ['HTML', 'CSS', 'JavaScript', 'Java', 'PHP']
],
[
  'id' => 3,
  'job_title' => 'Backend Developer',
  'company' => 'SAP',
  'contact_email' => 'teste@teste3.com',
  'contact_phone' => 789,
  'skill' => ['Java', 'PHP', 'Python', 'C']
]];


array_push($jobs, 
[
  'id' => 4,
  'job_title' => 'Fullstack Developer',
  'company' => 'SKA',
  'contact_email' => 'teste@teste4.com',
  'contact_phone' => 321,
  'skill' => ['HTML', 'CSS', 'JavaScript','Java', 'PHP', 'Python', 'C']
]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Desafio 3</h2>
  <p>
    <pre>
      <?php
      print_r($jobs[1]['job_title']);
      print_r($jobs[2]['skill'][0]);
      ?>
    </pre>
  </p>
  
</body>
</html>