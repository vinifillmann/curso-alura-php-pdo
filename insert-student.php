<?php

use Alura\Pdo\Domain\Model\Student;

require __DIR__ . "/vendor/autoload.php";

$pdo = require __DIR__ . "/connection.php";

$student = new Student(
    null,
    "Vinicius Fillmann",
    new DateTimeImmutable("2005-09-09")
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}')";

var_dump($pdo->exec($sqlInsert));