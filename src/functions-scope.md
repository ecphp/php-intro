## Functions

### Scope

Variables declared outside of functions and classes are global.

Variables declared inside of functions are self-contained and do not affect the rest of the variables.

Variables from the main script are not implicitly available inside functions.

```
<?php
$squared = 'foo';

function square(int $number)
{
    $squared = $number ** 2;

    return $squared;
}

$value = square(12); // 144
$squared; // foo
```
