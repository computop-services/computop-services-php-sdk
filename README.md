[![Build Status](https://travis-ci.org/wallee-payment/wallee-php-sdk.svg?branch=master)](https://travis-ci.org/wallee-payment/wallee-php-sdk)

# Computop-Services SDK for PHP

This repository contains the open source PHP SDK that allows you to access Computop-Services from your PHP app.

## Requirements

* [PHP 5.4.0 and later](http://www.php.net/)

## Documentation

https://www.computop-services.com/en-us/doc/api/web-service

## Installation

You can use **Composer** or **install manually**

### Composer

The preferred method is via [composer](https://getcomposer.org). Follow the
[installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have
composer installed.

Once composer is installed, execute the following command in your project root to install this library:

```sh
composer require computop-services/sdk
```

### Manual Installation

Alternatively you can download the package in its entirety. The [Releases](https://github.com/computop-services/computop-services-php-sdk/releases) page lists all stable versions.

Uncompress the zip file you download, and include the autoloader in your project:

```php
require_once '/path/to/computop-services-php-sdk/autoload.php';
```

## Usage

### Basic Example

```php
<?php
require_once(__DIR__ . '/autoload.php');


// Setup API client
$client = new \computop-services\Sdk\ApiClient('YOUR_USER_ID', 'YOUR_API_KEY');

// Create API service instance
$service = new \Wallee\Sdk\Service\AccountService($apiClient);
// The filter which restricts the entities which are used to calculate the count.
$filter = new \Wallee\Sdk\Model\EntityQueryFilter();

try {
    $result = $apiService->count($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountService->count: ', $e->getMessage(), PHP_EOL;
}

?>
```

## License

Please see the [license file](https://github.com/wallee-payment/wallee-php-sdk/blob/master/LICENSE) for more information.
