# [Change Directive](https://github.com/helionogueir/changedirective)

A simple libraty to change PHP directives in your application.

## Get Start

**Install**

Compser (https://getcomposer.org/)
```sh
composer require helionogueir/changedirective
```
PHP (http://www.php.net/)
```php
require_once ("./core/autoload/register.inc");
```

**Debug**

```php
use helionogueir\changedirective\cgi\Debug;
(new Debug())->set(Debug::DEVELOPER);
```
