# [Change Directive](https://github.com/helionogueir/changedirective)

A simple libraty to change PHP directives in your application.

## Installation

Compser (https://getcomposer.org/)
```sh
composer require helionogueir/changedirective
```
Manual
```php
require_once ("../changedirective/core/autoload/register.inc");
```
## Usage

Debug

- Debug application in Developer mode
```php
use helionogueir\changedirective\cgi\Debug;
(new Debug())->set(Debug::DEVELOPER);
```

- Debug application in Homologation mode
```php
use helionogueir\changedirective\cgi\Debug;
(new Debug())->set(Debug::HOMOLOGATION);
```

- Debug application in Production mode
```php
use helionogueir\changedirective\cgi\Debug;
(new Debug())->set(Debug::PRODUCTION);
```
