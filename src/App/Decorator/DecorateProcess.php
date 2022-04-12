<?php

namespace Hosek\App\Decorator;

abstract class DecorateProcess extends ProcessRequest
{

    public function __construct(protected ProcessRequest $processrequest)
    {
    }
}
