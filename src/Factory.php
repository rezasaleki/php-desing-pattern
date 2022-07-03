<?php

namespace App;

class Factory
{
    public static function create(string $name, string $type)
    {
        if ($type === 'developer') {
            return new Developer($name, $type);
        }
        if ($type === 'tester') {
            return new Tester($name, $type);
        }
    }
}


class Developer
{
    private string $name;
    private string $type;
    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }
}

class Tester
{
    private string $name;
    private string $type;
    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }
}
