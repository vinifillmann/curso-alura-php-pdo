<?php

$banco_path = __DIR__ . "/banco.sqlite";
$pdo = new PDO("sqlite:{$banco_path}");

echo "Connected!" . PHP_EOL;

return $pdo;

//$pdo->exec("CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);");