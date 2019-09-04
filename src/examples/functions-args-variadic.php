<?php

declare(strict_types=1);

function sum(float ...$numbers)
{
  $result = 0;

  foreach ($numbers as $number) {
    $result += $number;
  }

  return $result;
}

function sum1(float ...$numbers)
{
  return array_sum($numbers);
}

function sum2(float ...$numbers)
{
  $callback = function($carry, $item) {
    return $carry + $item;
  };

  return array_reduce($numbers, $callback);
}

echo 'Sum using sum(): ' . sum(1,2,3,4,5) . PHP_EOL;
echo 'Sum using sum1(): ' . sum1(1,2,3,4,5) . PHP_EOL;
echo 'Sum using sum2(): ' . sum2(1,2,3,4,5) . PHP_EOL;