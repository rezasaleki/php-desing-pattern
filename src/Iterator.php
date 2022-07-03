<?php

namespace App;

class Iterator
{
    public int $index = 0;
    public array $items;

    function __construct(array $items)
    {
        $this->items = $items;
    }

    public function next()
    {
        return $this->items[$this->index++];
    }

    public function hasNext()
    {
        return count($this->items) > $this->index;
    }
}
