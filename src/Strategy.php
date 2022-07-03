<?php

namespace App;

class Strategy
{
    public $company;

    public function setStrategy($company) // Dependency Injecttion
    {
        $this->company = $company;
    }

    public function calculate() // Wrapper
    {
        return $this->company->calculate();
    }
}

class UPS
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    public  function calculate()
    {
        return 25;
    }
}

class FedEx
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    public  function calculate()
    {
        return 25;
    }
}
