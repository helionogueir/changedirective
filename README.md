# [Change Directive](https://github.com/helionogueir/changedirective)

A simple libraty to change PHP directives in your application.

## Installation

Composer (https://getcomposer.org/) and (https://packagist.org/)
```sh
composer require helionogueir/changedirective
```
Manual
```php
require_once ("./changedirective/core/autoload/register.inc");
```
------
## Usage

### Debug

Define debug mode as "Developer"
```php
use helionogueir\changedirective\cgi\Debug;
(new Debug())->set(Debug::DEVELOPER);
```

Define debug mode as "Homologation"
```php
use helionogueir\changedirective\cgi\Debug;
(new Debug())->set(Debug::HOMOLOGATION);
```

Define debug mode as "Production"
```php
use helionogueir\changedirective\cgi\Debug;
(new Debug())->set(Debug::PRODUCTION);
```
------
### Locale

Define locale as "English, USA", and collate as "UTF-8"
```php
use helionogueir\changedirective\cgi\Locale;
(new Locale())->set("en-US", "utf-8")
```
------
### Session

Define session behavior and start session
```php
use helionogueir\changedirective\cgi\Session;
(new Session())
  // Optional: Define session lifetime
  ->setMaxLifetime(3600)
  // Optional: Define session path storage files
  ->setPath(sys_get_temp_dir())
  // Start sesson
  ->start());
```
------
### Timezone

Define Locale as "London, England" (https://secure.php.net/manual/timezones.php)
```php
use helionogueir\changedirective\cgi\Timezone;
(new Timezone())->set("Europe/London");
```
------
## TDD (Test Driven Development)

PHPUnit (https://phpunit.de/)
```sh
phpunit -c ./changedirective/tests/unit.xml
```
