# doctrine2-smysp
Doctrine 2 mySQL simple support for spatial types and functions

##Install

Repository currently marked as dev. Set up your ```composer.json``` consequently

```javascript
"minimum-stability" : "dev",
"prefer-stable" : true,
 "repositories": [
    {
                "type": "vcs",
                "url": "https://github.com/pbald/doctrine2-smysp.git"
    },
    {
                "type": "vcs",
                "url": "https://github.com/pbald/geophp-bundle.git"
    }
],
```

##Test Setup

Testing against a real database requires creation of ```tests/connection_params.php``` containing following code modified accoding your need:

```php
<?php

$GLOBALS['test_connection_params'] = array(
    'username' => 'username',
    'password' => 'password'
);
```
