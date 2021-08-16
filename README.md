# Localization Blade Components

[![Latest Version on Packagist](https://img.shields.io/packagist/v/wearefar/laravel-language-components.svg?style=flat-square)](https://packagist.org/packages/wearefar/laravel-language-components)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/wearefar/laravel-language-components/run-tests?label=tests)](https://github.com/wearefar/laravel-language-components/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/wearefar/laravel-language-components/Check%20&%20fix%20styling?label=code%20style)](https://github.com/wearefar/laravel-language-components/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/wearefar/laravel-language-components.svg?style=flat-square)](https://packagist.org/packages/wearefar/laravel-language-components)

A set of localization components to utilize in Laravel Blade views.

## Installation

You can install the package via composer:

```bash
composer require wearefar/laravel-language-components
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="WeAreFar\LanguageComponents\LanguageComponentsServiceProvider" --tag="laravel-language-components-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="WeAreFar\LanguageComponents\LanguageComponentsServiceProvider" --tag="laravel-language-components-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-language-components = new WeAreFar\LanguageComponents();
echo $laravel-language-components->echoPhrase('Hello, Spatie!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Victor Guerrero](https://github.com/wearefar)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
