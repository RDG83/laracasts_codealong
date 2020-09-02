<?php


class App
{
    protected static $registry = [];

    public static function bind(string $key, $value): void
    {
        static::$registry[$key] = $value;
    }

    public static function get($key)
    {
        if (!array_key_exists($key, static::$registry)) {
            throw new Exception(
                die("Key does not exist in registry")
            );
        }
        return static::$registry[$key];
    }
}
