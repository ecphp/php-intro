## Operators

```
* / %
+ - .
**
++ --
= += -= *= .=
< <= > >=
== != === !== <> <=>
! && ||
?? ?:
(int) (float) (string) (array) (object) (bool)
```

---

### Arithmetic operators

```php
<?php
$x = 1 + 2; // sum
$x = $y - 2; // substraction
$x = 10 / 2; // division
$x = 2 * $y; // multiplication
$x = $y % 2; // modulo (remainder)
$x = 3 ** $y; // exponentiation
?>
```

---

### Assignment, increment, decrement

```php
<?php
$x = 5;
echo $x++; // 5
echo $x; // 6
echo ++$x; // 7
$x--;
echo $x; // 6
$x += 10; // 16
$x *= 4; // 64
?>
```

---

### Comparison operators

```php
<?php
$a = 10;
$b = '10';
var_dump($a == $b); // equal after type juggling
var_dump($a === $b); // equal and of the same type
var_dump($a != $b); // not equal after type juggling
var_dump($a !== $b); // not equal or not of the same type

$x = 5;
$y = 6;
var_dump($x < $y); // less than
var_dump($x > $y); // greater than
var_dump($x <= $y); // less than or equal
var_dump($x >= $y); // greater than or equal
var_dump($x <=> $y); // returns integer less than, equal to, or greater than zero
?>
```

---

### Logical operators

```php
<?php
$a = TRUE;
$b = FALSE;
var_dump(!$a); // not
var_dump($a && $b); // and
var_dump($a || $b); // or
$b = TRUE;
var_dump($a xor $b); // not both
?>
```

---

### Ternary operator

The expression (expr1) ? (expr2) : (expr3) evaluates to expr2 if expr1 evaluates to TRUE, and expr3 if expr1 evaluates to FALSE.

```php
<?php
$a = 4;
$x = $a < 10 ? 5 : 2;
echo $x;
?>
```

---

### Null coalescing operator

The expression (expr1) ?? (expr2) evaluates to expr2 if expr1 is NULL, and expr1 otherwise.

```php
<?php
$a = NULL;
$b = $a ?? 'null';
var_dump($b);

$x = 'not null';
$y = $x ?? 'null';
var_dump($y);
?>
```

---

### Type casting

The name of the desired type is written in parentheses before the variable which is to be cast.

```php
<?php
$a = '1';
$x = 12;
$b = (bool) $a;
$c = (int) $a;
$d = (string) $x;
$z = (array) $x;
$o = (object) $x;
?>
```
