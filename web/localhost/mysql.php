<?php

$dsn = 'mysql:dbname=mysql;host=mysql';
$user = 'root';
$password = 'toOR8TOor';

try {
    $dbh = new PDO($dsn, $user, $password);
    var_dump($dbh);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
