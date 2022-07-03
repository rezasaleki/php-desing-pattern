<?php

namespace App;

class Singleton
{
    private static ?Singleton $instance = null;
    function constructor()
    {
    }

    static function getInstance()
    {
        if (self::$instance === null) {
            return new self();
        }
        return self::$instance;
    }
}
