<?php

require __DIR__ . "/vendor/autoload.php";

$pdo = require __DIR__ . "/connection.php";

$sqlDelete = "DELETE FROM students WHERE id = ?;";
$preparedStatement = $pdo->prepare($sqlDelete);
$preparedStatement->bindValue(1, 2, PDO::PARAM_INT);

var_dump($preparedStatement->execute());