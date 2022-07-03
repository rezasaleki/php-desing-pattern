<?php

interface CarInterface
{
    public function drive($car): string;
}


class Car implements CarInterface
{
    public function drive($car): string
    {
        return 'Please drive safely';
    }
}


class BNZ extends Car
{
    public function drive($car): string // overriwte to parent class
    {
        // return new stdClass(); // violation of Liskov Substitution standard
        return 'a';
    }
}


function go(BNZ $car)
{
    $car->drive($car);
}
