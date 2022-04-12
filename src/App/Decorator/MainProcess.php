<?php

namespace Hosek\App\Decorator;

class MainProcess extends ProcessRequest
{

    public function process(RequestHelper $request): void
    {
        print(__CLASS__ . ": doing something useful with request\n");
    }
}
