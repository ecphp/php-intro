<?php

function square(float $number)
{
  return $number ** 2;
}

function sum(float ...$numbers)
{
  $result = 0;

  foreach ($numbers as $number) {
    $result += $number;
  }

  return $result;
}

print_r(square(3.5));
print_r(sum(3.5, 2));