<?php


$query = require "core/bootstrap.php";

$tasks = $query->selectAll("todos");

require "views/index.view.php";
