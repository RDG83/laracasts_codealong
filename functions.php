<?php

function connectToDb()
{
    try {
        return new PDO("mysql:host=localhost;dbname=mytodo", "root", "");
    } catch (PDOException $e) {
        die("Unable to connect to the database: " . $e->getMessage());
    }
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare("SELECT * FROM todos");

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, "Task");
}
