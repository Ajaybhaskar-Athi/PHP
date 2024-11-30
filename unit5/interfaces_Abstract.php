
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
        echo "Sleeping <br>";
    }
}

class Bird extends Animal implements Flyable, Swimmable {
    public function makeSound() {
        echo "Tweet<br>";
    }

    public function fly() {
        echo "Flying high<br>";
    }

    public function swim() {
        echo "Swimming in the pond<br>";
    }
}

$bird = new Bird();
$bird->makeSound(); // Output: Tweet
$bird->fly();       // Output: Flying high
$bird->swim();      // Output: Swimming in the pond
$bird->sleep();     // Output: Sleeping
