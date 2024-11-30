### Interfaces
- **Definition**: A contract that specifies what methods a class must implement, without defining how they are implemented.
-if a class implements an interface, it is mandatory to provide implementations for all the methods declared in the interface. If the class does not implement every method from the interface, it must be declared as an abstract class.
- **Key Points**:
  - Only method declarations (no implementations).
  - Cannot have instance fields (can have constants in some languages like Java).
  - A class can implement multiple interfaces.
- **Usage**:
  - Define shared behaviour for unrelated classes.
  - Enable multiple inheritance of behaviour.

---

### Abstract Classes
- **Definition**: A class that cannot be instantiated and is meant to be subclassed. It can have both fully implemented methods and abstract methods (methods without implementation).
- if a class extends an abstract class but does not implement all the abstract methods defined in the parent abstract class, then the child class automatically becomes an abstract class. This is because it still lacks complete implementation and cannot be instantiated directly.
-it is not mandatory for an abstract class to have at least one abstract function in PHP. An abstract class can have only concrete methods (fully implemented methods) as well. However, if a class is declared as abstract, it cannot be instantiated, regardless of whether it has abstract methods or not.



- **Key Points**:
  - Can contain instance fields and methods with implementations.
  - Used when classes share common behaviour but also have differences.
  - A class can extend only one abstract class.
- **Usage**:
  - Provide a base class with common functionality for derived classes.
  - Enforce certain methods to be implemented by subclasses.

---

### Differences Between Interfaces and Abstract Classes

| Feature                 | Interface                         | Abstract Class                  |
|-------------------------|-----------------------------------|---------------------------------|
| **Implementation**      | Only method signatures           | Can have method implementations |
| **Inheritance**         | Multiple inheritance allowed     | Single inheritance              |
| **Fields**              | Static final constants only      | Can have instance fields        |
| **Use Case**            | Unrelated classes sharing behaviour | Closely related classes         |

---

### Example Code

#### Interface
```PHP
interface Animal {
    public function makeSound();
}

class Dog implements Animal {
    public function makeSound() {
        echo "Woof";
    }
}

$dog = new Dog();
$dog->makeSound(); // Output: Woof

```

#### Abstract Class
```PHP
abstract class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function makeSound(); // Abstract method

    public function eat() { // Concrete method
        echo "{$this->name} is eating\n";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "{$this->name} says Woof\n";
    }
}

$dog = new Dog("Buddy");
$dog->makeSound(); // Output: Buddy says Woof
$dog->eat();       // Output: Buddy is eating

```



#### combining Both

```PHP
<?php
interface Flyable {
    public function fly();
}

interface Swimmable {
    public function swim();
}

abstract class Animal {
    abstract public function makeSound();

    public function sleep() {
        echo "Sleeping\n";
    }
}

class Bird extends Animal implements Flyable, Swimmable {
    public function makeSound() {
        echo "Tweet\n";
    }

    public function fly() {
        echo "Flying high\n";
    }

    public function swim() {
        echo "Swimming in the pond\n";
    }
}

$bird = new Bird();
$bird->makeSound(); // Output: Tweet
$bird->fly();       // Output: Flying high
$bird->swim();      // Output: Swimming in the pond
$bird->sleep();     // Output: Sleeping


```