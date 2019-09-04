<?php

class Bar
{
    private $foo = 'Foo';

    public function getFoo() {
      return $this->foo;
    }
}

$baz = new Bar();
echo $baz->getFoo();
