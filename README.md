<p align="center">
  <img src="https://i.imgur.com/gRhkOvy.png"/>
</p>

# Summon
With this package you'll be able to generate boilerplate packages for your project right from the command line.

## Installation
Create a new folder in your root application, we will be using `/packages`.

Allow symlinking from the folder specified in the previous step by adding the following to your `composer.json` file:

```
"repositories": [
    {
        "type": "path",
        "url": "packages/*",
        "symlink": true
    }
],
```

Install the package via composer:
```bash
$ composer require jesseberkhof/summon
```

The config file can be published with:
```bash
$ php artisan vendor:publish --provider="JesseBerkhof\Summon\SummonServiceProvider" --tag="config"
```

## Usage

Create a new package with the following command:
```bash
$ php artisan summon:new [PACKAGE_NAME]
```

You will be asked a couple of questions to set some author details and the namespace for your package.
Some of these values can be added to the config file, so they will be set by default:

```php
return [
    'path' => 'packages', // Your packages will be stored here.
    'replacements' => [
        'author_email' => 'you@domain.com',
        'author_name' => 'Jane Doe',
        'author_role' => 'Developer',
        'package_description' => 'This package has been auto-generated by JesseBerkhof/Summon',
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
```

Require your package into your project:
```bash
$ composer require [namespace]/[package_name]
```

We've got you covered with a testing command to see if everything is working as expected:
```bash
$ php artisan [package_name]:check
```

You can also see which packages are currently being symlinked in your `/packages` folder with:
```bash
$ php artisan summon:list
```

🎉 That's it. With symlink enabled you should be ready to go with developing new Laravel packages within your project in no time.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
