<?php

$host = 'mysql';
$port = '3306';
$user = 'root';
$password = 'root';
 
$pdo = new PDO("mysql:host=$host;port=$port", $user, $password);
 
$databases = $pdo->query('SHOW DATABASES')->fetchAll(PDO::FETCH_COLUMN);

foreach($databases as $database){
    echo "<br>$database";
}
