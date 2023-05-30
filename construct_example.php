<?php
   
   class Person {
    public $name;
    public $age;

    public function __construct($name = "No Name", $age = 0){

        $this->name = $name;
        $this->age = $age;
    }

    public function show(){
        echo $this->name . " - ". $this->age . "\n";
    }
   }

   $p1 = new Person("Ismail Hossain", 28);
   $p1->show();


?>

