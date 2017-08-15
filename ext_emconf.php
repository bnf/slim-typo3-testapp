<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Slim TYPO3 example App',
    'description' => '',
    'category' => '',
    'author' => 'Benjamin Franzke',
    'author_email' => 'benjaminfranzke@gmail.com',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.7.0-8.7.99',
            'slim_typo3' => '0.1.0-0.1.99',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
    'autoload' => array(
        'psr-4' => array(
            'Bnf\\SlimTypo3Testapp\\' => 'Classes',
        ),
    ),
);
