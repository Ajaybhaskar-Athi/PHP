<!-- In below code, the parent constructor is automatically called because the child class (Dog) does not define its own constructor.
  Here's how it works:

Parent Constructor Inheritance:

In PHP, if a child class does not have a constructor, it will automatically inherit and use the parent class's constructor.
This means the __construct method from the Animal class is invoked when an object of the Dog class is created,
 and any arguments passed during object creation are passed to the parent constructor.
 
 -->


<?php

abstract class Animal{
    protected $name;
    public function __construct($name){ //Even the abstarct clases are not instantinated, we can call this in child classes
        $this->name=$name;
    }
  abstract  public function makeSound();//abstarct function (function wihout implememntation,just declaration)
    public function eating(){
        echo "$this->name is Eating... <br>";
    }
}

class Dog extends Animal{

    public function makeSound(){
        echo "Bow Bow... <br>";
    }
}

$dog=new Dog("Buddy");
$dog->eating();
$dog->makeSound();


// $obj=new Animal();//  Uncaught Error: Cannot instantiate abstract class Animal

?>