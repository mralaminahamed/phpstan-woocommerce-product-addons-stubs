# WooCommerce Product Add-Ons Stubs

[![Packagist stats](https://img.shields.io/packagist/dt/mralaminahamed/woocommerce-product-addons-stubs.svg)](https://packagist.org/packages/mralaminahamed/woocommerce-product-addons-stubs/stats)
[![Packagist](https://img.shields.io/packagist/v/mralaminahamed/woocommerce-product-addons-stubs.svg?color=4CC61E&style=popout)](https://packagist.org/packages/mralaminahamed/woocommerce-product-addons-stubs)
[![Tweet](https://img.shields.io/badge/Tweet-share-d5d5d5?style=social&logo=twitter)](https://twitter.com/intent/tweet?text=https%3A%2F%2Fgithub.com%2Fmralaminahamed%2Fphpstan-woocommerce-product-addons-stubs&url=I%20use%20mralaminahamed%2Fphpstan-woocommerce-product-addons-stubs%20for%20IDE%20completion%20and%20static%20analysis)
[![Build Status](https://app.travis-ci.com/mralaminahamed/phpstan-woocommerce-product-addons-stubs.svg?branch=master)](https://app.travis-ci.com/mralaminahamed/phpstan-woocommerce-product-addons-stubs)


These stubs can help plugin and theme developers leverage IDE completion and static analysis tools like [PHPStan](https://github.com/phpstan/phpstan).

## Requirements

- PHP >=7.1

## Installation

Require this package as a development dependency with [Composer](https://getcomposer.org).

```bash
composer require --dev mralaminahamed/woocommerce-product-addons-stubs
```

Alternatively you may download `woocommerce-product-addons-stubs.php` directly.

## Usage in PHPStan

Include stubs in PHPStan configuration file.

```yaml
parameters:
    bootstrapFiles:
        - vendor/mralaminahamed/woocommerce-product-addons-stubs/woocommerce-product-addons-constants-stubs.php
        - vendor/mralaminahamed/woocommerce-product-addons-stubs/woocommerce-product-addons-stubs.php
```
