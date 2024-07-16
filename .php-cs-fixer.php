<?php

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12'                            => true,
        'ordered_imports'                   => true,
        'phpdoc_order'                      => true,
        'array_syntax'                      => ['syntax' => 'short'],
        'strict_comparison'                 => true,
        'strict_param'                      => true,
        'no_trailing_whitespace'            => false,
        'no_trailing_whitespace_in_comment' => false,
        'braces'                            => false,
        'single_blank_line_at_eof'          => false,
        'blank_line_after_namespace'        => false,
        'phpdoc_to_return_type'             => [
            'scalar_types' => true,
            'union_types'  => false,
        ],
        'return_type_declaration'           => ['space_before' => 'one'],
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('test')
            ->exclude('tests')
            ->in(__DIR__)
    );
