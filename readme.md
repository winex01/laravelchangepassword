# LaravelChangePassword

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

Laravel framework change password functionality. I assume you use built-in laravel authentication / laravel ui.

<p align="center"><img alt="laravelchangepassword" src="https://user-images.githubusercontent.com/23657442/79085433-255c4c80-7d6b-11ea-9465-fec9667a9ed3.png"></p>

## Installation

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

3. Publish the configuration file:
 
```sh
$ php artisan vendor:publish --provider="Winnie\LaravelChangePassword\LaravelChangePasswordServiceProvider"
```

## Usage

Add this to your `routes/web.php`

```php
LaravelChangePassword::routes(); 
```

You can visit this route for change password `your-website/password/change`

You can also use this route name

```blade
{{ route('password.change') }} 
```

Example:
```blade
<a class="dropdown-item" href="{{ route('password.change') }}">
    {{ __('Change Password') }}
</a> 
```

You can edit the config file to change settings at `config/laravelchangepassword.php`.

```php
<?php
return [
    // Redirect after changing password to
    'redirect_to' => '/home',


    // Enable current password field
    'enable_current_password' => true,


    // Validation error message.
    'current_password_error_msg' => 'Your current password is incorrect.',


    // ALert success message
    'current_password_success_msg' => 'Password change successfully!',
];
```

If you want to override views, navigate to `resources/views/vendor/winnie/auth/passwords/change.blade.php`

If you want to include beautiful toaster notification add this blade directives below.


```blade
<!doctype html>
<html>
    <head>
        <title>Toastr.js</title>
        @toastr_css
    </head>
    <body>
        
    </body>
    @jquery
    @toastr_js
    @toastr_render
</html>
```


## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Todo

Create test

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Winnie A. Damayo][link-author]
- [All Contributors][link-contributors]

## License

[MIT](license.md).

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
