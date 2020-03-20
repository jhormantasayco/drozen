# Drozen Package

Show greetings in multiple languages in your next PHP project.

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