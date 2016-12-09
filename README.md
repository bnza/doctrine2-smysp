# doctrine2-smysp
Doctrine 2 mySQL simple support for spatial types and functions

Testing against a real database requires creation of ```tests/connection_params.php``` containing following code modified accoding your need:

```php
<?php

$GLOBALS['test_connection_params'] = array(
    'username' => 'username',
    'password' => 'password'
);
```
