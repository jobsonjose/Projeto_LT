<?php

$dbname = 'PROJETO_LT';
$host = 'localhost';
$user = 'root';
$pass = '';
$dsn = "mysql:dbname=$dbname;host=$host";
$pdo = new PDO($dsn, $user, $pass);


if (!function_exists('is_logged')) {
    session_start();
    function is_logged()
    {
        return isset($_SESSION['user']);
    }
}



?>