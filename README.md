# Tightrope

[![PHP from Packagist](https://img.shields.io/packagist/php-v/decodelabs/tightrope?style=flat)](https://packagist.org/packages/decodelabs/tightrope)
[![Latest Version](https://img.shields.io/packagist/v/decodelabs/tightrope.svg?style=flat)](https://packagist.org/packages/decodelabs/tightrope)
[![Total Downloads](https://img.shields.io/packagist/dt/decodelabs/tightrope.svg?style=flat)](https://packagist.org/packages/decodelabs/tightrope)
[![GitHub Workflow Status](https://img.shields.io/github/workflow/status/decodelabs/tightrope/Integrate)](https://github.com/decodelabs/tightrope/actions/workflows/integrate.yml)
[![PHPStan](https://img.shields.io/badge/PHPStan-enabled-44CC11.svg?longCache=true&style=flat)](https://github.com/phpstan/phpstan)
[![License](https://img.shields.io/packagist/l/decodelabs/tightrope?style=flat)](https://packagist.org/packages/decodelabs/tightrope)

Reusable constraints for your PHP classes.


## Installation

```bash
composer require decodelabs/tightrope
```

## Usage

Tightrope defines a number of reusable interfaces that represent a property of an object, such as being disableable, readable or requirable:

```php
namespace DecodeLabs\Tightrope;

interface Nullable {
    public function isNullable(): bool;
}
```

It also supplies a _manifest_ version of each interface along with a trait implementation:

```php
namespace DecodeLabs\Tightrope\Manifest;

use DecodeLabs\Tightrope\Nullable as StaticNullable;

interface Nullable extends StaticNullable {
    public function setNullable(bool $flag): static;
}
```

You can use these interfaces to define properties of your objects:

```php
namespace My\Project;

use DecodeLabs\Exceptional;
use DecodeLabs\Tightrope\Manifest\Nullable;
use DecodeLabs\Tightrope\Manifest\NullableTrait;

class MyClass implements Nullable {

    use NullableTrait;

    public function doSomething(?string $value): void {
        if(
            !$this->isNullable() &&
            $value === null
        ) {
            throw Exceptional::InvalidArgument('Value cannot be null');
        }

        // ...
    }
}

$myObject = new MyClass();

$myObject->setNullable(true);
$myObject->doSomething(null); // Fine

$myObject->setNullable(false);
$myObject->doSomething(null); // Not fine
```

## Available properties

The following interfaces are currently available:

- Disableable
- Immutable
- Nullable
- Readable
- ReadOnlyable
- Requirable
- Writable


## Licensing
Tightrope is licensed under the MIT License. See [LICENSE](./LICENSE) for the full license text.
