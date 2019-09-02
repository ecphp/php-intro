## Functions

A function is a block of statements.

It's similar to any other programming language.
A function is a piece of code which optionally takes input parameters,
does some processing and optionally returns a value.

```
<?php
function square($number)
{
    return $number ** 2;
}

$value = square(12); // 144
```

### Note

A function has its own scope and does not interfere with the rest.