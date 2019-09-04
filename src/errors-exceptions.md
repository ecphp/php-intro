## Errors and exceptions

> Errors are a fact of life.

-- *php.net*

```shell script
php -i
```

```shell script
php -i | grep -i "^error_"
```

---

```ini
error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT
;error_prepend_string = "<span style='color: #ff0000'>"
;error_append_string = "</span>"
;error_log = php_errors.log
;error_log = syslog
```

---

# Throwing errors

```php
<?php

function square_root($number) {
    if ($number < 0) {
        throw new InvalidArgumentException('The number must be positive.');
    }

    return sqrt($number);
}
```

---

```php
<?php

$number = -42;

try {
    $square_root = square_root($number);
} catch (\InvalidArgumentException $e) {
    $square_root = sqrt($number * -1) . 'i';
}

echo sprintf('The square root of %s is %s.', $number, $square_root);
```

---

```php
<?php

$number = -42;

try {
    $square_root = square_root($number);
} catch (\InvalidArgumentException $e) {
    $square_root = sqrt($number * -1) . 'i';
} finally {
    // This will always be executed.
}

echo sprintf('The square root of %s is %s.', $number, $square_root);
```
