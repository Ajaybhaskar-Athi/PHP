

<!-- <?php

class Student{
    private $name;
    protected $section;
    public $rollno;

    public function set($n,$s,$r=12){
        $this->name=$n;
        $this->section=$s;
        $this->rollno=$r;
    }
    public function get(){
        echo "Name: $this->name <br>";
        echo "Section: $this->section <br>";
        echo "Roll No: $this->rollno <br>";
    }
}


$stud1=new Student();
// $tud1->rollno=10;
$stud1->set("Ajay","K22DF");
$stud1->get();

?> -->



<!-- -----------------------------------------------------------------------  -->

<?php
class person{
    protected $name;
    public $roll;
    public function __construct($n,$r){
        $this->name=$n;
        $this->roll=$r;
    }

        public function get(){
            echo "Name: $this->name <br>";
            echo "Roll No: $this->roll <br>";
        }
}
$stud1=new person("Pranav",12);

$stud1->get();


?>