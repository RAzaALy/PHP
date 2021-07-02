<?php
    //Protected and private in inheritance:
    class Employee{
        protected $name;
        protected $salary;
        public function __construct($name,$salary){
            $this->name=$name;
            $this->salary=$salary;
            $this->describe();
        }
        protected function describe(){
            echo "The name of the Employee is $this->name";echo '<br>';
            echo "The salary of the Employee is $this->salary";echo '<br>';
        }

    }
    class Programmer extends Employee{
        private $lang;
        function __construct($name,$salary,$lang)
        {
            $this->name=$name;
            $this->salary=$salary;
            $this->lang=$lang;      
            $this->describe();  
            echo "The language of the Employee is:$this->lang";    
        }
    }
    $emp=new Employee("Raza Jutt",343400);
    $programmer=new Programmer("Haider Jutt",4520000,"python");
    
    
?>