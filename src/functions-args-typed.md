## Functions

### Arguments and return values

Types may be specified for the arguments or the return of the function. 

PHP will automatically assert the type of data passed or returned by the function.

```
<?php
function square(float $number): int
{
    return intval($number ** 2);
}

function sum(float ...$numbers)
{
    $result = 0;

    foreach ($numbers as $number) {
        $result += $number;
    }

    return $result;
}
```

---

It's always better to use a strict typed way of programming, but keep in mind that
all the PHP versions that are still used today are not always compatible.

Therefore, make sure to know what you're doing when you decide to use it.

---

## Before PHP 7

```
<?php
function square($number)
{
    if (false === is_numeric($number)) {
        throw new \Exception('The parameter must be a numeric.');
    }

    return intval($number ** 2);
}

$value = square('foo');
```

---

## After PHP 7

```
<?php
declare(strict_type=1);

function square(float $number): int
{
    return intval($number ** 2);
}

$value = square('foo');
```
