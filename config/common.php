<?php

declare(strict_types=1);

namespace Brotkrueml\CodingStandards;

use PhpCsFixer\Fixer\Alias\NoAliasFunctionsFixer;
use PhpCsFixer\Fixer\Basic\SingleLineEmptyBodyFixer;
use PhpCsFixer\Fixer\Casing\NativeFunctionCasingFixer;
use PhpCsFixer\Fixer\CastNotation\CastSpacesFixer;
use PhpCsFixer\Fixer\CastNotation\ModernizeTypesCastingFixer;
use PhpCsFixer\Fixer\CastNotation\NoShortBoolCastFixer;
use PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer;
use PhpCsFixer\Fixer\ClassNotation\NoNullPropertyInitializationFixer;
use PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer;
use PhpCsFixer\Fixer\Comment\SingleLineCommentStyleFixer;
use PhpCsFixer\Fixer\ConstantNotation\NativeConstantInvocationFixer;
use PhpCsFixer\Fixer\ControlStructure\NoSuperfluousElseifFixer;
use PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer;
use PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer;
use PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer;
use PhpCsFixer\Fixer\FunctionNotation\NativeFunctionInvocationFixer;
use PhpCsFixer\Fixer\FunctionNotation\NullableTypeDeclarationForDefaultNullValueFixer;
use PhpCsFixer\Fixer\FunctionNotation\StaticLambdaFixer;
use PhpCsFixer\Fixer\LanguageConstruct\DirConstantFixer;
use PhpCsFixer\Fixer\LanguageConstruct\NullableTypeDeclarationFixer;
use PhpCsFixer\Fixer\Operator\ConcatSpaceFixer;
use PhpCsFixer\Fixer\Operator\NewWithParenthesesFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocScalarFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocTrimFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocTypesFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitMockShortWillReturnFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitTestAnnotationFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitTestCaseStaticMethodCallsFixer;
use PhpCsFixer\Fixer\Semicolon\NoEmptyStatementFixer;
use PhpCsFixer\Fixer\StringNotation\SimpleToComplexStringVariableFixer;
use PhpCsFixer\Fixer\StringNotation\StringImplicitBackslashesFixer;
use PhpCsFixer\Fixer\Whitespace\ArrayIndentationFixer;
use PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withPreparedSets(
        psr12: true,
        common: true,
        cleanCode: true,
    )
    ->withRules([
        // PER-CS 2.0
        ArrayIndentationFixer::class,
        CastSpacesFixer::class,
        MethodArgumentSpaceFixer::class,
        SingleLineEmptyBodyFixer::class,

        // Other
        DirConstantFixer::class,
        ModernizeTypesCastingFixer::class,
        NativeFunctionCasingFixer::class,
        NoAliasFunctionsFixer::class,
        NoEmptyStatementFixer::class,
        NoNullPropertyInitializationFixer::class,
        NoShortBoolCastFixer::class,
        NoSuperfluousElseifFixer::class,
        NullableTypeDeclarationFixer::class,
        NullableTypeDeclarationForDefaultNullValueFixer::class,
        PhpdocScalarFixer::class,
        PhpdocTrimFixer::class,
        PhpdocTypesFixer::class,
        PhpUnitMockShortWillReturnFixer::class,
        SimpleToComplexStringVariableFixer::class,
        StaticLambdaFixer::class,
        StringImplicitBackslashesFixer::class,
    ])
    // PER-CS 2.0
    ->withConfiguredRule(
        ConcatSpaceFixer::class,
        [
            'spacing' => 'one',
        ],
    )
    ->withConfiguredRule(
        FunctionDeclarationFixer::class,
        [
            'closure_fn_spacing' => 'none',
        ],
    )
    ->withConfiguredRule(
        NewWithParenthesesFixer::class,
        [
            'anonymous_class' => false,
        ],
    )

    ->withConfiguredRule(
        ClassAttributesSeparationFixer::class,
        [
            'elements' => [
                'method' => 'one',
            ],
        ],
    )
    ->withConfiguredRule(
        NativeConstantInvocationFixer::class,
        [],
    )
    ->withConfiguredRule(
        NativeFunctionInvocationFixer::class,
        [
            'include' => [
                '@all',
            ],
            'scope' => 'namespaced',
            'strict' => true,
        ],
    )
    ->withConfiguredRule(
        TrailingCommaInMultilineFixer::class,
        [
            'after_heredoc' => true,
            'elements' => [
                'arguments',
                'array_destructuring',
                'arrays',
                'match',
                'parameters',
            ],
        ],
    )

    // Other
    ->withConfiguredRule(
        NoExtraBlankLinesFixer::class,
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
        OrderedClassElementsFixer::class,
        [
            'order' => [
                'use_trait',
            ],
        ],
    )
    ->withConfiguredRule(
        PhpdocTypesOrderFixer::class,
        [
            'null_adjustment' => 'always_last',
            'sort_algorithm' => 'none',
        ],
    )
    ->withConfiguredRule(
        PhpUnitTestAnnotationFixer::class,
        [
            'style' => 'annotation',
        ],
    )
    ->withConfiguredRule(
        PhpUnitTestCaseStaticMethodCallsFixer::class,
        [
            'call_type' => 'self',
        ],
    )
    ->withConfiguredRule(
        SingleLineCommentStyleFixer::class,
        [
            'comment_types' => [
                'asterisk',
                'hash',
            ],
        ],
    )
;
