<?php
class Bar
{
    private $foo = 'Foo';
    public function displayFoo() {
        echo $this->foo;
    }
}

$baz = new Bar();
$baz->displayFoo();
?>
