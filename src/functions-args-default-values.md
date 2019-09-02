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
