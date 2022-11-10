<?php

use Alura\Pdo\Domain\Model\Student;

require __DIR__ . "/vendor/autoload.php";

$pdo = require __DIR__ . "/connection.php";

$student = new Student(
    null,
    "Vinicius Fillmann', ''); DROP TABLE students;",
    new DateTimeImmutable("2005-09-09")
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date)";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(":name", $student->name());
$statement->bindValue(":birth_date", $student->birthDate()->format("Y-m-d"));

if ($statement->execute()) {
    echo "Aluno incluido";
}
