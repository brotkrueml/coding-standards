# Coding standards

Coding standards for the brotkrueml projects based on
[symplify/easy-coding-standard](https://github.com/symplify/easy-coding-standard).

## Installation

Install the package via Composer:

    composer req brotkrueml/coding-standards --dev

## Usage

Just import the common rule set and add your additional configuration
(like paths, skip, etc.), for example:

```php
<?php

declare (strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withSets([
        __DIR__ . '/vendor/brotkrueml/coding-standards/config/common.php',
    ])
    ->withParallel()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
        // ...
    ])

    // ... additional configuration ...

    ;
};
```
