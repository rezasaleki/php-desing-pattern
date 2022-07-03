<?php

namespace App;

class Logger // Single Resposibility
{
    public function log(string $message)
    {
        print($message);
    }
}

class User // Single Resposibility
{
    public ?Logger $logger;
    function __construct($logger) // DI: Dependncy Injection
    {
    }

    function create(array $data)
    {
        try {
            // code
        } catch (Throwable $e) {
            // code
            $this->logger->log($e->getMessage());
        }
    }
}

$user = new User(new Logger());
