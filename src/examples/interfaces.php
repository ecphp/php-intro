<?php

interface FooInterface
{
  public function setVar($name, $value);
  public function displayVar($name);
}

class Bar implements FooInterface
{
  private $vars = [];
  public function setVar($name, $value) {
    $this->vars[$name] = $value;
  }

  public function displayVar($name)
  {
    echo $this->vars[$name];
  }
}

$foo = new Bar();
$foo->setVar('baz', "Hello");
$foo->displayVar('baz');
?>
