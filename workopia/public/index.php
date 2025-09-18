<?php

$config = require basePath('config/config.php');
$db = new Database($config);

$listings = $db->query('SELECT * FROM listings LIMIT 9')->fetchAll;

loadView('listings/index', [
    'listings' => $listings
]);