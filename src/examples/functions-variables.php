<?php

$memoize = static function($func)
{
  return static function(...$args) use ($func)
  {
    static $cache = [];

    $key = sha1(serialize($args));

    if (false === array_key_exists($key, $cache)) {
      $cache[$key] = $func(...$args);
    }

    return $cache[$key];
  };
};

function very_slow_function($second) {
  sleep($second);

  return sprintf('%sI waited %s second(s).%s', PHP_EOL, $second, PHP_EOL);
}

$coin = $memoize('very_slow_function');

echo $coin(2);
echo $coin(4);
echo $coin(2);
echo $coin(4);