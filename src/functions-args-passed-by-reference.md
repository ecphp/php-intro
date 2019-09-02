## Functions

### Arguments and return values

Passed by reference

```
<?php
function square(&$number)
{
    $number = $number ** 2;
}

$value = 12; // 12

square($value);

$value; //144
```

#### Note
Keep in mind that when an argument is an object (_an instance of a class_), it's **always** passed by reference.

PHP does not create copy of the argument when it's an object, you have to do it yourself.