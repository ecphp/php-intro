## Functions

### Arguments and return values

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

#### Note

* Find an alternative way using `array_sum()` or `array_reduce()`.