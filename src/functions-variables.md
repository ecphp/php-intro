## Functions

Just like in Javascript or some other language, you can assign a function to a variable.

This opens the gate to an advanced way of programming, a more "_functional_" way.

```
<?php

$absolute = function absolute($number)
{
    $square = function ($number) {
        return $number ** 2;
    };

    $sqrt = function ($number) {
        return $number ** .5;
    };

    return $sqrt($square($number));
};

$result = $absolute(-42); // 42
```

---

Do not forget to check the **src/examples** directory.