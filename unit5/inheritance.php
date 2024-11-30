<?php

class ParentClass {
    public $name;
    public $age;

    public function __construct($n, $a) {
        $this->name = $n;
        $this->age = $a;
    }
    public function getDetails() {
        echo "This is parent Function.<br>";
        echo "Name is :" . $this->name . "<br>";
        echo "Age is :" . $this->age . "<br> <br> <br>";
    }
}

class child extends ParentClass {
    public $cname;
    public $cage;
    public function __construct($pn, $pa, $n, $a) {
        ParentClass::__construct($pn, $pa);
        $this->cname = $n; 
        $this->cage = $a; 
    }
    public function getDetails() {
        echo "This is Child Function.<br>";
        echo "Name is :" . $this->cname . "<br>";
        echo "Age is :" . $this->cage . "<br>";
        echo "<br>Calling Parent Function:<br> ";
        parent::getDetails();
    }
}

$child1 = new child("satyanarayana", 45, "Ajay", 20);
$child1->getDetails();

?>




<?php

class Vehicle{
    public $brand;
    public function __construct($brand){
        $this->brand = $brand;
    }
    public function startEngine(){
        echo "Engine Started. <br>";
    }
    protected function getDetails(){
        echo "This is Vehicle Class <br>";
        echo "Brand is: " . $this->brand . "<br> <br>";
    }
}
class Car extends vehicle{
    public $model;
    public function __construct($brand, $model){
        parent::__construct($brand);
        $this->model=$model;
    }
    public function getDetails(){
        parent::getDetails();
        echo "This is Car Class <br>";
        echo "model is: " . $this->model . "<br> <br>";
    }
}

$obj=new Car("Hyundai",2012);
$obj->startEngine();
$obj->getDetails();


echo "the brand is : $obj->brand <br>";


?>