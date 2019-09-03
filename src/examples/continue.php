<?php
$a = [6, 7, 42];
foreach ($a as $key => $value) {
  if ($value == 7) {
    continue;
  }
  echo "{$key} => {$value}" . PHP_EOL;
}
?>
