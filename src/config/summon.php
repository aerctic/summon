<?php

declare(strict_types=1);

return [
    'path' => 'packages', // Your packages will be stored here.
    'replacements' => [
        'author_email' => 'jane@doe.com',
        'author_name' => 'Jane Doe',
        'author_role' => 'Developer',
        'package_description' => 'This package has been auto-generated',
        'namespace' => 'JesseBerkhof',
    ],
    'files' => [
        '/CHANGELOG.md',
        '/CONTRIBUTING.md',
        '/LICENSE.md',
        '/README.MD',
        '/composer.json',
        '/src/ClassName.php.stub',
        '/src/ClassNameFacade.php.stub',
        '/src/ClassNameServiceProvider.php.stub',
        '/src/Commands/HelloWorldCommand.php.stub',
        '/src/config/package.php',
    ]
];
