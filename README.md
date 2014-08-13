Koine Delegator
-----------------

Simple method delegator for PHP.

Code information:

[![Build Status](https://travis-ci.org/koinephp/Delegator.png?branch=master)](https://travis-ci.org/koinephp/Delegator)
[![Coverage Status](https://coveralls.io/repos/koinephp/Delegator/badge.png?branch=master)](https://coveralls.io/r/koinephp/Delegator?branch=master)
[![Code Climate](https://codeclimate.com/github/koinephp/Delegator.png)](https://codeclimate.com/github/koinephp/Delegator)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/koinephp/Delegator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/koinephp/Delegator/?branch=master)

Package information:

[![Latest Stable Version](https://poser.pugx.org/koine/delegator/v/stable.svg)](https://packagist.org/packages/koine/delegator)
[![Total Downloads](https://poser.pugx.org/koine/delegator/downloads.svg)](https://packagist.org/packages/koine/delegator)
[![Latest Unstable Version](https://poser.pugx.org/koine/delegator/v/unstable.svg)](https://packagist.org/packages/koine/delegator)
[![License](https://poser.pugx.org/koine/delegator/license.svg)](https://packagist.org/packages/koine/delegator)

### Usage


```php
<?php

class City
{
    protected $state;
    protected $name;

    public function __construct($name, $state)
    {
        $this->name = $name;
        $this->state = $state;
    }

    public function getStateName()
    {
        $delegator = new \Koine\MethodDelegator;

        $delegator->method('getName')->to($this->state);

        return $delegator->delegate();
    }
}

class State
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$state = new State('Some State');
$city  = new City('Some City', $state);

$city->getStateName(); // Some State
```

### Installing

#### Via Composer
Append the lib to your requirements key in your composer.json.

```javascript
{
    // composer.json
    // [..]
    require: {
        // append this line to your requirements
        "koine/delegator": "dev-master"
    }
}
```

### Alternative install
- Learn [composer](https://getcomposer.org). You should not be looking for an alternative install. It is worth the time. Trust me ;-)
- Follow [this set of instructions](#installing-via-composer)

### Issues/Features proposals

[Here](https://github.com/koinephp/delegator/issues) is the issue tracker.

### Contributing

Only TDD code will be accepted. Please follow the [PSR-2 code standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md).

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request

### How to run the tests:

```bash
phpunit --configuration tests/phpunit.xml
```

### To check the code standard run:

```bash
phpcs --standard=PSR2 lib
phpcs --standard=PSR2 tests
```

### Lincense
[MIT](MIT-LICENSE)

### Authors

- [Marcelo Jacobus](https://github.com/mjacobus)
