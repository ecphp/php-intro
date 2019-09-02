## Classes

```
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
```

---

A PHP class is a blueprint for an object.

A PHP object is an instance of a class and encapsulates conceptually a state and responsibility.

It usually implements an interface that describes how to interact with it.

Object oriented programming (OOP) has advantages over procedural programming:

* Foster code reuse and eco-programming,
* Improving maintainability,
* Easier to test,
* Cleaner organisation of the codebase.

---

```
<?php

$account = new BankAccount('John Doe');

$account->balance(); // 0

$account->deposit(100);

$account->balance(); // 100

$account->withdraw(10);

$account->balance(); // 90

$account->getOwner(); // John Doe
```

---

```
class BankAccount
{
  private $owner;

  private $balance;

  public function __construct($owner, $balance = 0) {
    $this->owner = $owner;
    $this->balance = $balance;
  }

  public function deposit($amount) {
    $this->balance += $amount;
  }

  public function withdraw($amount) {
    $this->balance -= $amount;
  }

  public function balance() {
    return $this->balance;
  }

  public function getOwner() {
    return $this->owner;
  }
}
```

---

There are different types of classes:

* Regular classes
* Abstract classes
* Final classes

---

## Abstract classes

```
abstract class Shape
{
    public function getArea() {
        return $this->length * $this->width; 
    }

    public function getLength() {
        return $this->length;
    }

    public function getWidth() {
        return $this->width;
    }
}
```

---

```
final class Square extends Shape
{
    public function __construct($width, $length) {
        $this->width = $width;
        $this->length = $length;
    }
}
```