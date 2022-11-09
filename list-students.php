<?php

use Alura\Pdo\Domain\Model\Student;

require __DIR__ . "/vendor/autoload.php";

$pdo = require __DIR__ . "/connection.php";

$statement = $pdo->query("SELECT * FROM students;");
$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach ($studentDataList as $studentData) {
    $studentList[] = new Student(
        $studentData["id"],
        $studentData["name"],
        new DateTimeImmutable($studentData["birth_date"])
    );
}

var_dump($studentList);