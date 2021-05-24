# PHP Client API For OWASP ZAP

This API is available on [Packagist](https://packagist.org/packages/zaproxy/api-client).

## Getting Started

1. Add following lines to `composer.json` in your PHP project.

  ```
  {
    ...
    "require": {
      ...
      "zaproxy/api-client": ">=0.1.0",
      ...
    }
    ...
  }
  ```

2. `$ php composer.phar install/update`

## Usage
Example:

```php
<?php

require "vendor/autoload.php";

$target = "http://target.example.com/";

$zap = new Zap\Zap('tcp://localhost:8090');

$version = @$zap->core->version();
if (is_null($version)) {
  echo "PHP API error\n";
  exit();
} else {
  echo "version: ${version}\n";
}

echo "Spidering target ${target}\n";
// Give the Spider a chance to start
$resObj = $zap->spider->scan($target, 'YOUR_IP_KEY');
if (property_exists($resObj, 'code')) {
    echo "Error:\n";
    echo "  code = {$resObj->code}\n";
    echo "  message = {$resObj->message}\n";
    exit();
}
while ((int)($zap->spider->status()) < 100) {
  echo "Spider progress {$zap->spider->status()}%\n";
  sleep(2);
}
echo "Spider completed\n";
// Give the passive scanner a chance to finish
sleep(5);

echo "Scanning target ${target}\n";
$resObj = $zap->ascan->scan($target, 0, 0, 'YOUR_IP_KEY');
if (property_exists($resObj, 'code')) {
    echo "Error:\n";
    echo "  code = {$resObj->code}\n";
    echo "  message = {$resObj->message}\n";
    exit();
}
while ((int)($zap->ascan->status()) < 100) {
  echo "Scan progress {$zap->ascan->status()}%\n";
  sleep(2);
}
echo "Scan completed\n";

// Report the results
echo "Hosts: " . implode(",", $zap->core->hosts()) . "\n";
$alerts = $zap->core->alerts($target, "", "");
echo "Alerts (" . count($alerts) . "):\n";
print_r($alerts);

```

## API
OWASP ZAP API docs: [API Details](https://www.zaproxy.org/docs/api/)
