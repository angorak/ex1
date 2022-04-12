<?php

namespace Hosek\App\Decorator;

class LogRequest extends DecorateProcess
{

    public function process(RequestHelper $request): void
    {
        print(__CLASS__ . ": log request\n");
        $this->processrequest->process($request);
    }
}
