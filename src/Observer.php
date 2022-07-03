<?php

namespace App;

class Observer
{
    public array $observers = [];

    public function subscribe(callable $fun)
    {
        array_push($this->observers, $fun);
    }

    public function unsubscribe(callable $fun)
    {
        if (($key = array_search($fun, $this->observers)) !== false) {
            unset($this->observers[$key]);
        }
    }

    public function fire()
    {
        foreach ($this->observers as $observer) {
            $observer();
        }
    }
}
