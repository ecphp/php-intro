## Control structures

- if, else, elseif
- while, do while
- for, foreach
- break, continue
- switch
- return
- require, include

---

### if, else, elseif

Allows for conditional execution of code fragments.

```
<?php
if ($x > $y) {
  echo $x;
}
?>
```

```
<?php
if ($x > $y) {
  echo $x;
} elseif ($x == $y) {
  echo "equal";
} else {
  echo $y;
}
?>
```

---

### while, do while

A loop which executes the nested statement(s) repeatedly, as long as the while expression evaluates to TRUE.

```
<?php
$i = 1;
while ($i < 10) {
  echo $i++;
}
?>
```

```
<?php
$i = 0;
do {
  echo $i++;
} while ($i < 100);
?>
```

---

### for

More complex loops:

- First expression executed once
- Second expression evaluated in the beginning of each iteration
- Third expression executed at the end of each iteration

```
<?php
for ($i = 1; $i <= 10; $i++) {
  echo $i;
}
?>
```

---

### foreach

Iterates over arrays and objects.

```
<?php
$a = [6, 7, 42];
foreach ($a as $key => $value) {
  echo "{$key} => {$value}" . PHP_EOL;
}
?>
```

---

### break

Ends the execution of the for, foreach, while, do-while or switch structure.

```
<?php
$a = [6, 7, 42];
foreach ($a as $key => $value) {
  echo "{$key} => {$value}" . PHP_EOL;
  if ($value == 7) {
    break;
  }
}
?>
```

---

### continue

 Skips the rest of the current loop iteration.

```
 <?php
 $a = [6, 7, 42];
 foreach ($a as $key => $value) {
   if ($value == 7) {
     continue;
   }
   echo "{$key} => {$value}" . PHP_EOL;
 }
 ?>
 ```

---

 ### switch

A series of IF statements on the same expression.

```
<?php

$i = 6;

switch ($i) {
  case 6:
    echo "six";
    break;
  case 7:
    echo "seven";
    break;
  case 42:
    echo "you win";
    break;
}
?>
```

---

### return

Returns program control to the calling module.

```

<?php
function square($x)
{
  return $x * $x;
}
echo square(12);   // 144
?>

---

### include, require

Includes and evaluates the specified file.

In case of failure, ```require``` will generate a fatal error.

```
<?php
require 'bootstrap.php';
?>
```
