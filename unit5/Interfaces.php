<?php

interface Flyable{
    public function fly();
    
}
interface Swimable{
    public function swim();
}

class Bird implements Flyable,Swimable{

    public $name;
    public function __construct($name){
        $this->name=$name;
    }
    public function Fly(){
        echo "The Flying Bird is : $this->name <br><br>";
    }
    public function Swim(){
        echo "The Swimming Bird is : $this->name <br><br>";
    }
    
}

$obj=new Bird("Parrot");
$obj->Fly();
$obj2=new Bird("Duck");
$obj2->Swim();

?>