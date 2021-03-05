<?php
/*
 * This document has been generated with
 * https://mlocati.github.io/php-cs-fixer-configurator/#version:2.18.1|configurator
 * you can change this configuration by importing this file.
 */
return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PHP74Migration:risky' => true,
        '@DoctrineAnnotation' => true,
        '@PSR12:risky' => true,
        '@Symfony:risky' => true,
        '@Symfony' => true,
        '@PSR12' => true,
        '@PHP74Migration' => true,
        'align_multiline_comment' => true,
        'braces' => ['allow_single_line_closure'=>true,'position_after_functions_and_oop_constructs'=>'same'],
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'concat_space' => ['spacing'=>'one'],
        'declare_strict_types' => false,
        'explicit_indirect_variable' => true,
        'explicit_string_variable' => true,
        'global_namespace_import' => ['import_classes'=>false,'import_constants'=>false,'import_functions'=>false],
        'mb_str_functions' => true,
        'no_superfluous_phpdoc_tags' => false,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'operator_linebreak' => true,
        'phpdoc_no_empty_return' => true,
        'phpdoc_to_comment' => false,
        'phpdoc_types_order' => ['null_adjustment'=>'always_first'],
        'simple_to_complex_string_variable' => true,
        'simplified_if_return' => true,
        'yoda_style' => ['equal'=>false,'identical'=>false,'less_and_greater'=>false],
    ])
    ->setFinder(PhpCsFixer\Finder::create()->exclude('vendor')->in(__DIR__));
