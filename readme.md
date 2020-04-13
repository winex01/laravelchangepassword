# LaravelChangePassword

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

0. I assume you use laravel auth / laravel ui.

1. Require the Package via Composer

``` bash
$ composer require winnie/laravelchangepassword
```

2. Then add the service provider to `config/app.php`. In Laravel versions 5.5 and beyond, this step can be skipped if package auto-discovery is enabled.

```php
'providers' => [
    ...
    Winnie\LaravelChangePassword\LaravelChangePasswordServiceProvider::class
    ...
];
```

3. As optional if you want to modify the default configuration, you can publish the configuration file:
 
```sh
$ php artisan vendor:publish --provider='Winnie\LaravelChangePassword\LaravelChangePasswordServiceProvider'
```

## Usage

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [author name][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/winnie/laravelchangepassword.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/winnie/laravelchangepassword.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/winnie/laravelchangepassword/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/winnie/laravelchangepassword
[link-downloads]: https://packagist.org/packages/winnie/laravelchangepassword
[link-travis]: https://travis-ci.org/winnie/laravelchangepassword
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/winex01
[link-contributors]: ../../contributors
