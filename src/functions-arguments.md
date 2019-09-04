## Functions

### Arguments and return values

Default values can be assigned to parameters when they are not existing.

```
<?php
function square($number = 0)
{
    return $number ** 2;
}

$value = square(); // 0
```

---

Just like in C, parameters can be passed by reference.

```
<?php
function square(&$number)
{
    $number = $number ** 2;
}

$value = 12; // 12

square($value);

$value; //144
```

---

Keep in mind that when an argument is an object (_an instance of a class_), it's **always** passed by reference.

PHP does not create copy of the argument when it's an object, you have to do it yourself.

---

When parameters are passed by value, the function usually has a `return` statement.

```
<?php
function square($number)
{
    return $number ** 2;
}

$value = square(12); // 144
```

---

A **pure** function is a function which returns the same value given the same arguments.

**Pro tip**: Use them as much as possible!

---

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

It is recommended to use a "strict-typed way" of programming, but keep in mind this feature is not available in older PHP versions (< 7.x).

Therefore, make sure to know what you are doing when you decide to use it.

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

## Since PHP 7.0

```
<?php
declare(strict_types=1);

function square(float $number): int
{
    return intval($number ** 2);
}

$value = square('foo');
```

---

Since PHP 5.6, PHP has support for variable-length argument lists in user-defined functions.

These parameters are called: `variadic`

```
<?php
function sum(...$numbers)
{
    $result = 0;

    foreach ($numbers as $number) {
        $result += $number;
    }

    return $result;
}

$sum = sum(1, 2, 3, 4, 5); // 15
```

---

## Exercise

* Find an alternative way of implementing the previous function using `array_sum()` or `array_reduce()`.
