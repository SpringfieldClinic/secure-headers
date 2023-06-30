# secure-headers
Add security related headers to all responses in Laravel

## Installation

Install using composer

```sh
composer require springfieldclinic/security-headers
```

Publish config file

```sh
php artisan vendor:publish --provider="SpringfieldClinic\SecureHeaders\SecureHeadersServiceProvider"
```

Add global middleware in `app/Http/Kernel.php`

```php
\SpringfieldClinic\SecureHeaders\SecureHeadersMiddleware::class,
```

Set up config file `config/secure-headers.php`

Done!