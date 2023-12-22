<?php

declare(strict_types=1);

namespace Brotkrueml\CodingStandards;

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $config): void {
    $config->import(SetList::PSR_12);
    $config->import(SetList::COMMON);
    $config->import(SetList::CLEAN_CODE);

    $config->rules([
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
    ]);
    $config->ruleWithConfiguration(\PhpCsFixer\Fixer\CastNotation\CastSpacesFixer::class, [
        'space' => 'none',
    ]);
    $config->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer::class, [
        'elements' => [
            'method' => 'one',
        ],
    ]);
    $config->ruleWithConfiguration(\PhpCsFixer\Fixer\Comment\SingleLineCommentStyleFixer::class, [
        'comment_types' => [
            'asterisk',
            'hash',
        ],
    ]);
    $config->ruleWithConfiguration(\PhpCsFixer\Fixer\ConstantNotation\NativeConstantInvocationFixer::class, []);
    $config->ruleWithConfiguration(\PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer::class, [
        'after_heredoc' => true,
        'elements' => [
            'arguments',
            'arrays',
            'match',
            'parameters',
        ],
    ]);
    $config->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\NativeFunctionInvocationFixer::class, [
        'include' => ['@all'],
        'scope' => 'namespaced',
        'strict' => true,
    ]);
    $config->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer::class, [
        'null_adjustment' => 'always_last',
        'sort_algorithm' => 'none',
    ]);
    $config->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitTestAnnotationFixer::class, [
        'style' => 'annotation',
    ]);
    $config->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitTestCaseStaticMethodCallsFixer::class, [
        'call_type' => 'self',
    ]);
    $config->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer::class, [
        'order' => [
            'use_trait',
        ],
    ]);
    $config->ruleWithConfiguration(\PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer::class, [
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
    ]);

    // Already implemented PER-CS2 rules we opt-in explicitly
    // @todo: Can be dropped once @PER-CS2.0 is enabled
    $config->ruleWithConfiguration(\PhpCsFixer\Fixer\Operator\ConcatSpaceFixer::class, [
        'spacing' => 'one',
    ]);
    $config->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer::class, [
        'closure_fn_spacing' => 'none',
    ]);
    $config->rule(\PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class);
    $config->rule(\PhpCsFixer\Fixer\Basic\SingleLineEmptyBodyFixer::class);
};
