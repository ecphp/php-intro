## Traits

> Traits are a mechanism for code reuse in single inheritance languages such as PHP.

-- *php.net*

```php
<?php
trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!';
    }
}
```

---

<!-- .slide: style="text-align: left;"> -->

* A class can only extends one single class. That's the basic inheritance mechanism.

* It is not possible to extends more than one class using simply inheritance.

#### There are several ways around this restriction:

* Use Traits
* Use Composition instead of Inheritance

---

<!-- .slide: style="text-align: left;"> -->

A Trait is intended to reduce some limitations of single inheritance by enabling a developer to reuse sets of methods
freely in several independent classes living in different class hierarchies.

Traits is a way for having multiple inheritance in PHP.

---

<!-- .slide: style="text-align: left;"> -->

```php
<?php

class GarageDoor extends Door implements KeyAwareInterface {

}

class Car extends Vehicle implements KeyAwareInterface {

}
```

---

<!-- .slide: style="text-align: left;"> -->

```php
<?php

class GarageDoor extends Door implements KeyAwareInterface {
    use KeyAware;
}

class Car extends Vehicle implements KeyAwareInterface {
    use KeyAware;
}
```

---

```php
<?php

trait KeyAware {
    public function setKey($key) {

    }

    public function getKey($key) {

    }

    public function isKeyValid(): bool {

    }
}
```

