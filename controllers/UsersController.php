<?php

class UsersController
{
    public function index()
    {
        $users = App::get("database")->selectAll("users");

        return view("users", compact("users"));
    }

    public function store(): void
    {
        App::get("database")->insert("users", [
            "name" => $_POST["name"]
        ]);

        header("Location: /users");
    }
}
