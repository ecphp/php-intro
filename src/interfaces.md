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
