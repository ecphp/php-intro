## Interfaces

> Object interfaces allow you to create code which specifies which methods a class must implement, without having to define how these methods are implemented.

-- *php.net*

```php
<?php

interface FooInterface
{
  public function setVar($name, $value);
  public function displayVar($name);
}
```

---

* When a class **implements** an interface, it means that PHP will make sure that the class fully respect the contract
to the letter.
* An interface is then a **contract**.
* The interface list all the public methods with their signature and return types and also the properties that a class
must have.

---

This will **never** work.

```php
<?php

class Foo implements FooInterface {

}

```

---

This will work.

```php
<?php

class Foo implements FooInterface {
    public function setVar($name, $value) {
        // Do something here.
    }
    
    public function displayVar($name) {
        // Do something there.
    }
}
```

---

As an object can implements multiple interfaces at the same time, it is very
important to keep your interfaces as small as possible, so they can be reused and you'll be able to have maximum
flexibility composing your objects. 

It is very important to remember that an interface describe a behavior.