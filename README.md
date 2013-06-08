PHPConfig
=============

PHPConfig is a Zend Framework 2 module that allows to set php.ini values on the fly.

Setup
-----

Install using composer.
``` xml
    "require": {
        "wormhit/PHPConfig": "*"
    },
    "repositories": [
        {
            "type": "git",
            "url":  "https://github.com/wormhit/PHPConfig.git"
        }
    ]
```

```sh
php composer.phar update
```

Usage
-----

config/autoload/php.config.local.php
``` php
<?php

return array(
    'PhpConfig' => array(
        'display_startup_errors'     => true,
        'display_errors'             => true,
        'date.timezone'              => 'Europe/Berlin',
        'mbstring.internal_encoding' => 'UTF-8',
    )
);

```
