<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Broken link fixer',
    'description' => '',
    'category' => 'module',
    'author' => 'Sybille Peters',
    'author_email' => 'sypets@gmx.de',
    'author_company' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '3.0.2',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.14-11.9.99',
            'info' => '10.4.14-11.9.99',
            'page_callouts' => '1.0.0-2.90.99'
        ],
        'conflicts' => [],
        'suggests' => [

        ],
    ],
];
