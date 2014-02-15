<?php

/** 
 * SAMPLE php-cs-fixer configuration
 * for more configuration options see https://github.com/fabpot/PHP-CS-Fixer
 */

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in(array(
        __DIR__ . '/public',
        __DIR__ . '/src',
        ))
;

return Symfony\CS\Config\Config::create()
    ->finder($finder)
;

