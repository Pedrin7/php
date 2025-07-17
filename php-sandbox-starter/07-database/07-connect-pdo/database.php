<?php

// database creds
$host = 'localhost';
$port = 3307;
$dbname = 'blog';
$username = 'root';
$password = 'root';

$dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8";

try{
    // create our PDO instance
    $pdo = new PDO($dsn, $username, $password);

// set PDO to throw exceptions on error
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo 'Database connected...';
}catch(PDOException $e){
    // if there is an error, catch it here
    echo 'Connection failed: ' . $e->getMessage();
}
