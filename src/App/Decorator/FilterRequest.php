<?php

namespace Hosek\App\Decorator;

class FilterRequest extends DecorateProcess
{

    public function process(RequestHelper $request): void
    {
        print(__CLASS__ . ": filtering request\n");
        $this->processrequest->process($request);
    }
}
