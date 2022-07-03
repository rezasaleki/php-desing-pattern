<?php

namespace App;


interface BirdInterface
{
    public function fly();
}

interface WalkInterface
{
    public function walk();
}

class Parrot implements BirdInterface, WalkInterface
{
    public function fly()
    {
    }

    public function walk()
    {
    }
}

class Penguin implements WalkInterface
{
    public function walk()
    {
    }
}
