<?php

/**
 * Extension Manager/Repository config file for ext "projekt2024".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Projekt2024',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Fhooe\\Projekt2024\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Johanna Hofer',
    'author_email' => 's2310456005@fhooe.at',
    'author_company' => 'fhooe',
    'version' => '1.0.0',
];
