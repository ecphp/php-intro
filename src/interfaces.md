## Interfaces

> Object interfaces allow you to create code which specifies which methods a class must implement, without having to define how these methods are implemented.

-- *php.net*

```
<?php

interface FooInterface
{
  public function setVar($name, $value);
  public function displayVar($name);
}
```

---

An interface is a contract. When a class "implements" an interface, it means that
it will make sure that the class will provide a clear and precise way on how to
interact with it.

The interface will list all the public methods with their signature and return types and
also the properties that the class must have.

---

This will never work.

```
<?php

class Foo implements FooInterface {

}

```

---

This will work.

```
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

It is very important to remember that an interface describe a behavior.

As an object can implements multiple interfaces at the same time, it is very
important to keep your interfaces as small as possible, so they can be reused.

Keep in mind that they must describe a behavior first.