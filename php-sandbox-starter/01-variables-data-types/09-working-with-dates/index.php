<?php
$output = null;

/*
- ` Y ` - The year 
- ` m ` - The month
- ` d ` - The day
- ` D ` - The day of the week short name
- ` l ` - The full day of the week name
- ` h ` - The hour
- ` i ` - The minute
- ` s ` - The second
- ` a ` - AM/PM
*/

//get year
$output = date('Y');

//get year with timestamp
$output = date('Y', 9555321);

//get timestamp from srttotime
$output = date('Y', strtotime('2002-05-14'));

//get month
$output = date('m');

//get day
$output = date('D');
$output = date('l');

//get year, month and day
$output = date('Y - m - d');
$output = date('d - m - Y');

//get hour
$output = date('h - i a');

//get minute
$output = date('i');

//get second
$output = date('s');

//get am/pm
$output = date('a');




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
            <p class="text-xl"><?php echo $output; ?></p>
        </div>
    </div>
</body>

</html>