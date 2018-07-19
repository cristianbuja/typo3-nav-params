<?php

/**
 * Table configuration pages
 */
$pagesColumns = [
    'nav_params' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:nav_params/Resources/Private/Language/locallang_db.xlf:pages.nav_params',
        'config' => [
            'behaviour' => [
                'allowLanguageSynchronization' => 1,
            ],
            'type' => 'input',
        ]
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $pagesColumns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    'nav_params',
    '4',
    'after:shortcut'
);

