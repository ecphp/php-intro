## Functions

### Arguments and return values

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

A **pure** function is a function which return the same value given the same arguments.

**Pro tip**: Use them as much as possible!
