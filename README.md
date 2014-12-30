Junos Space PHP API
-------------------

A PHP API for interfacing with Junos Space through its REST API interface.

Examples
--------

- Get All Managed Devices
```php

$space = new JunosSpace("192.168.0.100", "username", "password123!");

print_r($space->getDevices());
```

- Execute GET REST call
```php
$space = new JunosSpace("192.168.0.100", "username", "password123!");

print_r($space->get('/api/space/device-management/devices'));
```

