# Nuva for PHP

## Installation

The package is published on [Packagist](https://packagist.org/packages/syadem/nuva). Install it with [Composer](https://getcomposer.org/):

```bash
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
