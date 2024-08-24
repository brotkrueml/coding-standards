<?php

declare(strict_types=1);

namespace Brotkrueml\CodingStandards;

use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withPreparedSets(
        psr12: true,
        common: true,
        cleanCode: true,
    )
    ->withRules([
        \PhpCsFixer\Fixer\Alias\NoAliasFunctionsFixer::class,
        \PhpCsFixer\Fixer\Casing\NativeFunctionCasingFixer::class,
        \PhpCsFixer\Fixer\CastNotation\ModernizeTypesCastingFixer::class,
        \PhpCsFixer\Fixer\CastNotation\NoShortBoolCastFixer::class,
        \PhpCsFixer\Fixer\ClassNotation\NoNullPropertyInitializationFixer::class,
        \PhpCsFixer\Fixer\ControlStructure\NoSuperfluousElseifFixer::class,
        \PhpCsFixer\Fixer\FunctionNotation\StaticLambdaFixer::class,
        \PhpCsFixer\Fixer\LanguageConstruct\DirConstantFixer::class,
        \PhpCsFixer\Fixer\Phpdoc\PhpdocScalarFixer::class,
        \PhpCsFixer\Fixer\Phpdoc\PhpdocTrimFixer::class,
        \PhpCsFixer\Fixer\Phpdoc\PhpdocTypesFixer::class,
        \PhpCsFixer\Fixer\PhpUnit\PhpUnitMockShortWillReturnFixer::class,
        \PhpCsFixer\Fixer\Semicolon\NoEmptyStatementFixer::class,
        \PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class,
        \PhpCsFixer\Fixer\Basic\SingleLineEmptyBodyFixer::class,
    ])
    ->withConfiguredRule(
        \PhpCsFixer\Fixer\CastNotation\CastSpacesFixer::class,
        [
            'space' => 'none',
        ],
    )
    ->withConfiguredRule(
        \PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer::class,
        [
            'elements' => [
                'method' => 'one',
            ],
        ],
    )
    ->withConfiguredRule(
        \PhpCsFixer\Fixer\Comment\SingleLineCommentStyleFixer::class,
        [
            'comment_types' => [
                'asterisk',
                'hash',
            ],
        ],
    )
    ->withConfiguredRule(
        \PhpCsFixer\Fixer\ConstantNotation\NativeConstantInvocationFixer::class,
        [],
    )
    ->withConfiguredRule(
        \PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer::class,
        [
            'after_heredoc' => true,
            'elements' => [
                'arguments',
                'arrays',
                'match',
                'parameters',
            ],
        ],
    )
    ->withConfiguredRule(
        \PhpCsFixer\Fixer\FunctionNotation\NativeFunctionInvocationFixer::class,
        [
            'include' => [
                '@all',
            ],
            'scope' => 'namespaced',
            'strict' => true,
        ],
    )
    ->withConfiguredRule(
        \PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer::class,
        [
            'null_adjustment' => 'always_last',
            'sort_algorithm' => 'none',
        ],
    )
    ->withConfiguredRule(
        \PhpCsFixer\Fixer\PhpUnit\PhpUnitTestAnnotationFixer::class,
        [
            'style' => 'annotation',
        ],
    )
    ->withConfiguredRule(
        \PhpCsFixer\Fixer\PhpUnit\PhpUnitTestCaseStaticMethodCallsFixer::class,
        [
            'call_type' => 'self',
        ],
    )
    ->withConfiguredRule(
        \PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer::class,
        [
            'order' => [
                'use_trait',
            ],
        ],
    )
    ->withConfiguredRule(
        \PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer::class,
        [
            'tokens' => [
                'attribute',
                'break',
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
        ],
    )
    ->withConfiguredRule(
        \PhpCsFixer\Fixer\Operator\ConcatSpaceFixer::class,
        [
            'spacing' => 'one',
        ],
    )
    ->withConfiguredRule(
        \PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer::class,
        [
            'closure_fn_spacing' => 'none',
        ],
    );
