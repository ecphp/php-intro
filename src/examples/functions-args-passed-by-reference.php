<?php

$myFancyClass = new class {
  public $field = 'foo';
};

function change_field_property($item, string $value) {
  $item->field = $value;
}

$object = new $myFancyClass();

echo 'Before: ' . $object->field . PHP_EOL;

change_field_property($object, 'PHP IS FUN!');

echo 'After: ' . $object->field . PHP_EOL;
