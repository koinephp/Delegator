<?php

namespace Dummy;

class City
{
    protected $state;
    protected $name;

    public function __construct($name, $state)
    {
        $this->name = $name;
        $this->state = $state;
    }

    public function getStateName()
    {
        $delegator = new \Koine\MethodDelegator;

        $delegator->method('getName')->to($this->state);

        return $delegator->delegate();
    }
}
