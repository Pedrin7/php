<?php

//constantes não podem mudar, diferente de váriaveis 
// Se pode acessar uma constante de qualquer scope

define('APP_NAME', 'My app');
define('APP_VERSION', '123456789');

echo APP_VERSION . '<br>';

const DB_NAME = 'mydb';
const DB_HOST = 'localhost';

echo DB_NAME, DB_HOST;

function run(){
    echo APP_NAME . '<br>';
}