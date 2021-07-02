<?php
    //Constructor is php:
    class Employee{

        //Properties 
        public $name;
        public $salary;
        //Methods
        // Define Constructor: constructor is used to initalized an object.The code is excuated when an object in instentiated:
        //Constructor with no arguments:
        // function __construct()
        // {
        //     echo "Constructor is run";
            
        // }
        //Constructor with arguments:
        function __construct($name1,$salary1)
        {
            $this->name=$name1;
            $this->salary=$salary1;
        }
    
    }
     $ali=new Employee("Ali Raza",345000);
     $harry=new Employee("Haider Ali",5330000);
     echo "The Salary of $ali->name is $ali->salary";echo '<br>';
     echo "The Salary of $harry->name is $harry->salary";
?>