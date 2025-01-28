<?php

declare(strict_types=1);

namespace App;

class HelloWorld
{
    public function greet(string $name): string
    {
        return "Hello, " . $name . "!";
    }
}

$hello = new HelloWorld();
echo $hello->greet("World");
