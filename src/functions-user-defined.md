## Functions

The amount of core PHP functions available depends on the amount PHP extensions installed.

```
<?php

$counts = array_map('count', get_defined_functions());

echo 'Core functions # ' . $counts['internal'] . PHP_EOL;
echo 'User defined functions # ' . $counts['user'] . PHP_EOL;

function i_am_a_lazy_function_that_does_nothing_but_chilling() {
  // boohya !
}
```

---

Functions do not need to be defined before being used.
