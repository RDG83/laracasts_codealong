<?php

// class Task
// {
//     protected string $description;
//     protected bool $completed = false;

//     public function __construct(string $description)
//     {
//         $this->description = $description;
//     }

//     public function complete(): void
//     {
//         $this->completed = true;
//     }

//     public function getDescription(): string
//     {
//         return $this->description;
//     }

//     public function isCompleted(): bool
//     {
//         return $this->completed;
//     }
// }

// $tasks = [
//     new task("make sandwich"),
//     new task("clean room"),
//     new task("take out trash")
// ];

try {
    $pdo = new PDO("mysql:host=localhost;dbname=mytodo", "root", "");
} catch (PDOException $e) {
    die("Unable to connect to the database");
}

$statement = $pdo->prepare("SELECT * FROM todos");

$statement->execute();

echo "<pre>";
var_dump($statement->fetchAll(PDO::FETCH_OBJ));
echo "</pre>";


require "index.view.php";
