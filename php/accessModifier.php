<?php
    //Access modifier in php:
        // 1.public ->can be accessed by everywhere
        // 2.private ->can only be accessed from with in the class  
        // 3.protected ->can be accessed from within the parent class and from derived class or child class
        //Private properties and methods can only be accessed by other members functions of the calss:
        class Employee{
            // var $name="Raza";
            private $name="Raza";
            //By default Methods are treated as public:
            public function showName(){
                echo "$this->name";
            }
        }
        $emp=new Employee();
        //echo " $emp->name";Can not work because name is private property:
        $emp->showName();
?>
