<?php

declare (strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withSets([
        __DIR__ . '/config/common.php',
    ])
    ->withPaths([
        __DIR__ . '/config',
    ]);
