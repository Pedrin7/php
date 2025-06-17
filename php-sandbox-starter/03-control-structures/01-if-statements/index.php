<?php

$age = 22;
// If statement
if($age >= 18){
    echo 'You are old enough to drink and buy alcohol <br>';
}

// If-Else
if($age >= 18){
    echo 'You are old enough to drink and buy alcohol <br>';
}else{
    echo 'You are not old enough to drink and buy alcohol <br>';
}

// Nested if statement
if($age >= 18){
    echo 'You are old enough to drink and buy alcohol <br>';
}else{
    echo 'You are not old enough to drink and buy alcohol <br>';
    if($age >= 16){
        echo 'You are old enough to vote <br>';
    }else{
        echo 'You are NOT old enough to vote <br>';
    }
}

// If-Else-If
if($age >= 18){
    echo 'You are old enough to drink and buy alcohol <br>';
}else if($age >= 21) {
    echo 'You can drive and vote <br>';
}else{
    echo 'You can not do anything <br>';
}


