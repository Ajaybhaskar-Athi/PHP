
<!-- A class inherits from another class, which in turn inherits from a parent class. -->

<!-- in inheritance when we inherit parent class the child has acces to all its protected and public varibales,member functions.
Now in below code lest use same varibale 'name' in evry class. means its declared in only one class and accesed in all its childs .

In below code if we call our parent fun then it displays same name for all parents since we r accesing same name varibale and chnaging
that in diff classes whenver we need.

if we wnat to call parent funcions with child object then u need to use diff varibales for each classes.
-->


<?php

class grandParent{
        public $name;

        public function __construct($name){
            $this->name = $name;
        }
        public function sayHello(){
            echo "Hello from Grand Parent Class : $this->name <br> <br>";
        }
}

class ParentClass extends grandParent{
    public function __construct($name){
        parent::__construct($name);
    }
    public function sayHello(){
        echo "Hello from  Parent Class : $this->name <br> <br>";

    }
}
class ChildClass extends ParentClass{
    public $childInfo;
    public function __construct($name,$childInfo){
        parent::__construct($name);
        $this->childInfo=$childInfo;
    }
    public function sayHello(){
        echo "Hello from Child Class : $this->name, I am a $this->childInfo. <br> <br>";
    }
}


    $gpo=new grandParent("Ramarao");
    $gpo->sayHello();//calling GrandParent function

    $po=new ParentClass("Satyanarayana");
    $po->sayHello();//calling ParentClass function

    $co=new ChildClass("Ajay","Student");
    $co->sayHello();//calling ChildClass function
    

?>