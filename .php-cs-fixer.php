<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

// 1) Which files to scan:
$finder = Finder::create()
    ->in(__DIR__)             // scan entire project
    ->exclude([
        'vendor',             // ignore dependencies
        'cache',              // ignore our fixer cache dir
    ])
    ->name('*.php')
;

// 2) Build & return the configuration:
return (new Config())
    ->setRiskyAllowed(false)  // PSR-12 is all safe rules
    ->setCacheFile(__DIR__ . '/cache/php-cs-fixer/.php-cs-fixer.cache')
    ->setRules([
        '@PSR12' => true,
    ])
    ->setFinder($finder)
;
