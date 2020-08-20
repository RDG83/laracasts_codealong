<?php

class Task
{
    protected string $description;
    protected bool $completed = false;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function complete(): void
    {
        $this->completed = true;
    }
}

$task = new Task("go to the store");

$task->complete();

echo "<pre>";
var_dump($task);
echo "</pre>";


require "index.view.php";
