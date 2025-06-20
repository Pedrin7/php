<?php

// Global scope

$name = 'Pedro';

function sayHello(){

    global $name;

    //local scope
    $name = 'Bob';
    echo 'Hello ' . $name;
}

sayHello();