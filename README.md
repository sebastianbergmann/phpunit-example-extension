# PHPUnit Example Extension

Example of an extension for [PHPUnit](https://phpunit.de/).

## Installation

### Composer

If you use [Composer](https://getcomposer.org/) to manage the dependencies of your project then you can add the PHPUnit example extension as a development-time dependency to your project:

```
$ composer require --dev phpunit/example-extension
```

### PHP Archive (PHAR)

If you use PHPUnit 5.7 (or later) from a [PHP Archive (PHAR)](https://php.net/phar) then you can download a PHAR of the PHPUnit example extension:

```
$ wget https://phar.phpunit.de/phpunit-example-extension-1.0.0.phar
```

The example below shows how to configure PHPUnit to load all `*.phar` files found in a given directory (`tools/phpunit.d` in this example):

```xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="https://schema.phpunit.de/5.7/phpunit.xsd"
         extensionsDirectory="tools/phpunit.d">
</phpunit>
```

PHPUnit will only load a an extension PHAR if it provides valid manifest information in a [manifest.xml](https://github.com/sebastianbergmann/phpunit-example-extension/blob/master/manifest.xml) file:

Of course, the extension to be loaded must also be compatible with the version of PHPUnit trying to load it. The extension provides the information required for this compatbility check in its manifest.

When verbose output is activated, PHPUnit will print loaded extension PHARs:

```
$ phpunit --verbose tests
PHPUnit 5.7.0 by Sebastian Bergmann and contributors.

Runtime:       PHP 7.1.0 with Xdebug 2.5.0
Configuration: /home/sb/example/phpunit.xml
Extension:     /home/sb/example/tools/phpunit.d/example-example-extension-1.0.0.phar

.                                                                   1 / 1 (100%)

Time: 32 ms, Memory: 4.00MB

OK (1 test, 1 assertion)
```

The `--no-extensions` commandline option can be used to suppress the loading of extensions from the directory configured using `extensionsDirectory`:

```
$ phpunit --no-extensions
PHP Fatal error:  Trait 'PHPUnit\ExampleExtension\TestCaseTrait' not found in ...
```

