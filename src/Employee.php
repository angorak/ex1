<?php

namespace Hosek;

abstract class Employee
{
    public function __construct(public string $name)
    {
    }

    abstract public function fire(): void;
}
