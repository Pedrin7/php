<?php

// for($i = 0; $i <= 10; $i++){
//     if($i == 5){
//         break;
//     }

//     echo $i;
// }

// for($i = 0; $i <= 10; $i++){
//     if($i == 5){
//         continue;
//     }

//     echo $i;
// }

$studyGrade = [
    'Pedro' => 90,
    'maya' => 75,
    'mari' => 60,
    'rossano' => 80

];

//conditional in an foreach loop
foreach($studyGrade as $name => $grade){
    if($grade >= 80){
        echo $name . ' has an excellent grade <br>';
    }
}







?>