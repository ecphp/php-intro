## Functions

### Arguments and return values

Arguments type can be specified in the function signature.

```
<?php
function square(float $number)
{
    return $number ** 2;
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