<?php

declare(strict_types=1);

// — Side-effect: outputs directly
echo "This file just ran some logic!\n";


function greet(string $name): string
{
    return "Hello, $name!";
}
