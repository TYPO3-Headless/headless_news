<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless News',
    'description' => 'This extension provides integration with news to output content from TYPO3 in JSON format.',
    'state' => 'beta',
    'author' => 'Łukasz Uznański',
    'author_email' => 'extensions@macopedia.com',
    'category' => 'fe',
    'internal' => '',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.0.99',
            'frontend' => '9.5.0-10.0.99'
        ],
        'conflicts' => [],
        'suggests' => [
            'headless' => '1.0.0-1.9.9'
        ]
    ],
];
