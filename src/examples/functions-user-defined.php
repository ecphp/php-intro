<?php

function i_am_a_lazy_function_that_does_nothing_but_chilling() {
  // boohya !
}

$counts = array_map('count', get_defined_functions());

echo 'Core PHP functions # ' . $counts['internal'] . PHP_EOL;
echo 'User defined PHP functions # ' . $counts['user'] . PHP_EOL;

