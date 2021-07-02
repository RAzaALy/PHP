<?php
    //Constructor is php:
    class Employee{
        //Properties 
        public $name;
        public $salary;
        //Methods
        // Define Destructor: Destructor  is run when an object is being to be destroyed:
        //Constructor with arguments:
        function __construct($name1,$salary1)
        {
            $this->name=$name1;
            $this->salary=$salary1;
        }
        //Destructor with no arguments:
        function __destruct()
        {
            echo "Destructor is run For $this->name";echo '<br>';
            
        }
    
    }
     $ali=new Employee("Ali Raza",345000);
     $harry=new Employee("Haider Ali",5330000);
     
?>