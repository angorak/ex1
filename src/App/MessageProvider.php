<?php

namespace Hosek\App;

class MessageProvider
{
    public function __construct(private string $message)
    {
    }

    public function printMessage()
    {
        print(PHP_EOL . $this->message . PHP_EOL);
    }
}
