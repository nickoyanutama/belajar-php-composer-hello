<?php

namespace Programerzamannow\Belajar;

class Customer
{

    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "Guest"): void
    {
        echo "hello $name, My name is $this->name";
    }
}
