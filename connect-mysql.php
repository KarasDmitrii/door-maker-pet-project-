<?php
$username = 'admin';
$password = 'password';
$db = 'doorMakerDB';
$host = '127.0.0.1';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_STRINGIFY_FETCHES => false,
    PDO::ATTR_EMULATE_PREPARES => false
];

$dsn = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=UTF8;';


return new PDO($dsn, $username, $password, $options);