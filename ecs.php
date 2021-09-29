<?php

declare (strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__ . '/config/common.php');

    $parameters = $containerConfigurator->parameters();
    $parameters->set(
        Option::PATHS,
        [
            __DIR__ . '/config',
        ]
    );
};
