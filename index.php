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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function isCompleted(): bool
    {
        return $this->completed;
    }
}

$tasks = [
    new task("make sandwich"),
    new task("clean room"),
    new task("take out trash")
];


require "index.view.php";
