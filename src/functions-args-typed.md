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
