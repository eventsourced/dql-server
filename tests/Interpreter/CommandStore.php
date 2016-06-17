<?php namespace Test\Interpreter;

class CommandStore implements \App\Interpreter\CommandStore
{
    private static $commands = [];
    
    public function fetch_all()
    {
        return self::$commands;
    }
    
    public function store(array $commands)
    {
        self::$commands = $commands;
    }
    
    public function clear()
    {
        self::$commands = [];
    }
}
