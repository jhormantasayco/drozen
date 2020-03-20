# Drozen Package

Show greetings in multiple languages in your next PHP project.

[![Build Status](https://travis-ci.org/jhormantasayco/drozen.svg?branch=master)](https://travis-ci.org/jhormantasayco/drozen.svg?branch=master)
[![Latest Stable Version](https://poser.pugx.org/jhormantasayco/drozen/v/stable)](https://packagist.org/packages/jhormantasayco/drozen)
[![Total Downloads](https://poser.pugx.org/jhormantasayco/drozen/downloads)](https://packagist.org/packages/jhormantasayco/drozen)
[![License](https://poser.pugx.org/jhormantasayco/drozen/license)](https://packagist.org/packages/jhormantasayco/drozen)
[![Quality gate](https://sonarcloud.io/api/project_badges/quality_gate?project=jhormantasayco_drozen)](https://sonarcloud.io/dashboard?id=jhormantasayco_drozen)

## Installation

Require the package using composer.

```bash
composer require jhormantasayco/drozen
```

## Usage

```php
use Jhormantasayco\Drozen\Greeting;

$oGreeting = new Greeting();

$greeting = $oGreeting->message()

echo $greeting;
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)