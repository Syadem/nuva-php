# Nuva for PHP

## Installation

Declare this repository in your `composer.json`, then install the package with [Composer](https://getcomposer.org/):

```bash
composer config repositories.syadem-nuva git https://github.com/Syadem/nuva-php.git
composer require syadem/nuva
```

## Usage

`Container::init()` downloads the latest version of the nomenclature. It is costly: call it once and keep the instance in a global cache.

```php
<?php
$container = Syadem\Nuva\Container::init();

foreach ($container->getVaccines()->all() as $vaccine) {
  echo $vaccine->getName()->getFr() . "\n";
}
```

## License

MIT
