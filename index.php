<?php

require "Task.php";
require "database/Connection.php";
require "database/QueryBuilder.php";

$pdo = Connection::make();

$query = new QueryBuilder($pdo);

$tasks = $query->selectAll("todos");

echo "<pre>";
var_dump($tasks);
echo "</pre>";

require "index.view.php";
