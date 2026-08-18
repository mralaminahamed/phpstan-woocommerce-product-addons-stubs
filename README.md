# WooCommerce Product Add-Ons Stubs

[![Latest Version](https://img.shields.io/packagist/v/mralaminahamed/woocommerce-product-addons-stubs.svg?color=4CC61E&style=flat-square)](https://packagist.org/packages/mralaminahamed/woocommerce-product-addons-stubs)
[![Downloads](https://img.shields.io/packagist/dt/mralaminahamed/woocommerce-product-addons-stubs.svg?style=flat-square)](https://packagist.org/packages/mralaminahamed/woocommerce-product-addons-stubs/stats)
[![License](https://img.shields.io/packagist/l/mralaminahamed/woocommerce-product-addons-stubs.svg?style=flat-square)](./LICENSE)
[![PHP Version](https://img.shields.io/packagist/php-v/mralaminahamed/woocommerce-product-addons-stubs.svg?style=flat-square)](./composer.json)
[![Tweet](https://img.shields.io/badge/Tweet-share-1da1f2?style=flat-square&logo=twitter)](https://twitter.com/intent/tweet?text=Check%20out%20WooCommerce%20Product%20Add-Ons%20Stubs%20for%20IDE%20completion%20and%20static%20analysis%20https%3A%2F%2Fgithub.com%2Fmralaminahamed%2Fwoocommerce-product-addons-stubs)

PHP stub declarations for the [WooCommerce Product Add-Ons](https://woocommerce.com/products/product-add-ons/) extension to enhance IDE completion and static analysis capabilities. Generated using [php-stubs/generator](https://github.com/php-stubs/generator) directly from the source code.

## 🚀 Features

- Complete function, class, and interface declarations
- Constant definitions for proper static analysis
- IDE autocompletion support
- PHPStan integration
- Regular updates with latest WooCommerce Product Add-Ons versions

## 📋 Requirements

- PHP >= 7.4
- Composer for dependency management

## 📦 Installation

### Via Composer (Recommended)

```bash
# Install as a development dependency
composer require --dev mralaminahamed/woocommerce-product-addons-stubs

# Or specify a version
composer require --dev mralaminahamed/woocommerce-product-addons-stubs:^1.0
```

### Manual Installation

Download the stub files directly:
- [woocommerce-product-addons-stubs.stub](https://raw.githubusercontent.com/mralaminahamed/woocommerce-product-addons-stubs/main/woocommerce-product-addons-stubs.stub)
- [woocommerce-product-addons-constants-stubs.stub](https://raw.githubusercontent.com/mralaminahamed/woocommerce-product-addons-stubs/main/woocommerce-product-addons-constants-stubs.stub)

## 🔧 Basic Configuration

To use these stubs with PHPStan or your IDE, see our [Usage Guide](./docs/usage.md) for detailed instructions.

## 🔍 Quick Usage Example

```php
<?php
// Your code will now have full IDE support
$helper = new WC_Product_Addons_Helper();

// Constants are properly defined
if (WC_PRODUCT_ADDONS_VERSION) {
    // Your implementation
}

// Classes and interfaces are available
class MyAddon extends WC_Product_Addons_Helper {
    // Your implementation
}
```

For advanced usage examples, see the [Usage Guide](./docs/usage.md).

## 📁 Package Structure

```
phpstan-woocommerce-product-addons-stubs/
├── configs/                                            # Configuration files for stub generation
├── docs/                                               # Detailed documentation
│   ├── usage.md                                        # Usage guide
│   └── contributing.md                                 # Contribution guidelines
├── woocommerce-product-addons-constants-stubs.stub      # Constants stub file
├── woocommerce-product-addons-stubs.stub                # Main stubs file with classes and functions
├── source/                                             # Source for generating stubs
└── tests/                                              # Test files
    ├── bootstrap.php                                   # Test bootstrap
    ├── ConstantsTest.php                               # Constants tests
    └── WooCommerceProductAddonsTest.php                # WooCommerce Product Add-Ons tests
```

## 🛠 Development

For information on building stubs, running tests, and contributing to the project, please see our [Contributing Guide](./docs/contributing.md).

## 📚 Documentation

For more detailed information, check out our documentation:

- [Usage Guide](./docs/usage.md)
- [Contributing Guide](./docs/contributing.md)
- [WooCommerce Product Add-Ons Documentation](https://woocommerce.com/document/product-add-ons/)
- [PHPStan Documentation](https://phpstan.org/user-guide/getting-started)
- [PHP Stubs Generator Documentation](https://github.com/php-stubs/generator)

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](./LICENSE) file for details.

## 🙏 Acknowledgments

- [WooCommerce](https://woocommerce.com) for the Product Add-Ons extension
- [php-stubs/generator](https://github.com/php-stubs/generator) for the stub generation tools
- All [contributors](https://github.com/mralaminahamed/woocommerce-product-addons-stubs/graphs/contributors) to this project

## 💬 Support

For bug reports and feature requests, please use the [GitHub Issues](https://github.com/mralaminahamed/woocommerce-product-addons-stubs/issues).

For questions and discussions, please use the [GitHub Discussions](https://github.com/mralaminahamed/woocommerce-product-addons-stubs/discussions).

---
