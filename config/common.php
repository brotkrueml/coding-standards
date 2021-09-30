<?php

declare(strict_types=1);

namespace Brotkrueml\CodingStandards;

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(SetList::PSR_12);
    $containerConfigurator->import(SetList::COMMON);
    $containerConfigurator->import(SetList::CLEAN_CODE);

    $services = $containerConfigurator->services();

    $services->set(\PhpCsFixer\Fixer\Alias\NoAliasFunctionsFixer::class);

    $services->set(\PhpCsFixer\Fixer\Casing\NativeFunctionCasingFixer::class);

    $services->set(\PhpCsFixer\Fixer\CastNotation\CastSpacesFixer::class)
        ->call('configure', [[
            'space' => 'none',
        ]]);

    $services->set(\PhpCsFixer\Fixer\CastNotation\ModernizeTypesCastingFixer::class);

    $services->set(\PhpCsFixer\Fixer\CastNotation\NoShortBoolCastFixer::class);

    $services->set(\PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer::class)
        ->call('configure', [[
            'elements' => [
                'method' => 'one',
            ],
        ]]);

    $services->set(\PhpCsFixer\Fixer\ClassNotation\NoNullPropertyInitializationFixer::class);

    $services->set(\PhpCsFixer\Fixer\Comment\SingleLineCommentStyleFixer::class)
        ->call('configure', [[
            'comment_types' => [
                'asterisk',
                'hash',
            ],
        ]]);

    $services->set(\PhpCsFixer\Fixer\ControlStructure\NoSuperfluousElseifFixer::class);

    $services->set(\PhpCsFixer\Fixer\FunctionNotation\StaticLambdaFixer::class);

    $services->set(\PhpCsFixer\Fixer\LanguageConstruct\DirConstantFixer::class);

    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocScalarFixer::class);

    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocTrimFixer::class);

    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocTypesFixer::class);

    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer::class)
        ->call('configure', [[
            'null_adjustment' => 'always_last',
            'sort_algorithm' => 'none',
        ]]);

    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitTestAnnotationFixer::class)
        ->call('configure', [[
            'style' => 'annotation',
        ]]);

    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitMockShortWillReturnFixer::class);

    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitTestCaseStaticMethodCallsFixer::class)
        ->call('configure', [[
            'call_type' => 'self',
        ]]);

    $services->set(\PhpCsFixer\Fixer\Semicolon\NoEmptyStatementFixer::class);

    $services->set(\PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer::class)
        ->call('configure', [[
            'order' => [
                'use_trait',
            ],
        ]]);
    $services->set(\PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer::class)
        ->call('configure', [[
            'tokens' => [
                'case',
                'continue',
                'curly_brace_block',
                'default',
                'extra',
                'parenthesis_brace_block',
                'square_brace_block',
                'switch',
                'throw',
                'use',
                'use_trait',
            ],
        ]]);
};
