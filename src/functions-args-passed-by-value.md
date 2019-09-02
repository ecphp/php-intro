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

#### Note

A **pure** function is a function which return the same value given the same arguments.

**Pro tip**: Try to always create pure function when you develop to reduce the overall complexity of your software.
