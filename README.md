# [Change Directive](https://github.com/helionogueir/changedirective)

A simple libraty to change PHP directives in your application.

## Get Start

### Install

Compser (https://getcomposer.org/)
```sh
composer require helionogueir/changedirective
```
Manual
```php
require_once ("../changedirective/core/autoload/register.inc");
```
### Functionalities

**Debug**

```php

use helionogueir\changedirective\cgi\Debug;

// Debug application in Developer mode
(new Debug())->set(Debug::DEVELOPER);

```

```php


// Debug application in Homologation mode
(new Debug())->set(Debug::HOMOLOGATION);

```

```php

// Debug application in Production mode
(new Debug())->set(Debug::PRODUCTION);

```
