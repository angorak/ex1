<?php

namespace Hosek\App\Decorator;

abstract class ProcessRequest
{
    abstract public function process(RequestHelper $request);
}
