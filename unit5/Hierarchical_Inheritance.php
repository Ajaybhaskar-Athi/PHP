<!-- Multiple classes inherit from a single parent class. -->
 <!--Note: PHP does not support multiple inheritance (a class inheriting from more than one class) directly. 
 To achieve similar functionality, PHP provides interfaces and traits. -->

 <?php

class ParentClass {
    public $parentName;

    public function __construct($name = '') {
        $this->parentName = $name;
        echo "Parent class constructor called. Parent name is set to $name.<br>";
    }

    public function sayHello() {
        echo "Hello from Parent! My name is " . $this->parentName . ".<br>";
    }
}

class ChildClass1 extends ParentClass {
    public $child1Name;

    public function __construct($parentName, $child1Name) {
        parent::__construct($parentName);
        $this->child1Name = $child1Name;
        echo "ChildClass1 constructor called. Child1 name is set to $child1Name.<br>";
    }

    public function sayHello() {
        echo "Hello from ChildClass1! My parent's name is " . $this->parentName . " and my name is " . $this->child1Name . ".<br>";
    }
}

class ChildClass2 extends ParentClass {
    public $child2Name;

    public function __construct($parentName, $child2Name) {
        parent::__construct($parentName);
        $this->child2Name = $child2Name;
        echo "ChildClass2 constructor called. Child2 name is set to $child2Name.<br>";
    }

    public function sayHello() {
        echo "Hello from ChildClass2! My parent's name is " . $this->parentName . " and my name is " . $this->child2Name . ".<br>";
    }
}

$child1 = new ChildClass1("Michael", "Sarah");
$child1->sayHello();

echo "<br>";

$child2 = new ChildClass2("Michael", "John");
$child2->sayHello();

?>
