# Custom PHPStan Rules

[![Build Status](https://travis-ci.org/mhujer/phpstan-rules.svg)](https://travis-ci.org/mhujer/phpstan-rules)
[![Latest Stable Version](https://poser.pugx.org/mhujer/phpstan-rules/v/stable)](https://packagist.org/packages/mhujer/phpstan-rules)
[![License](https://poser.pugx.org/mhujer/phpstan-rules/license)](https://packagist.org/packages/mhujer/phpstan-rules)

This repository provides following custom rules for [PHPStan](https://github.com/phpstan/phpstan):

* Check that the `__construct()` is the first method in the class.


## Usage

To use those rules, require them in [Composer](https://getcomposer.org/):

```bash
composer require --dev mhujer/phpstan-rules
```

And include them in your project's PHPStan config:

```yaml
includes:
    - vendor/mhujer/phpstan-rules/rules.neon
```
