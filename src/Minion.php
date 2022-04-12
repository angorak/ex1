<?php

namespace Hosek;

class Minion extends Employee
{
    public function fire(): void
    {
        print("{$this->name}: I'll clean my desk.");
    }
}
