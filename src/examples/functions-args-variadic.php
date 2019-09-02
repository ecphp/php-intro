<?php
function sum(...$numbers)
{
  $result = 0;

  foreach ($numbers as $number) {
    $result += $number;
  }

  return $result;
}

$result = sum(1,2,3,4,5); // 15

print_r($result);