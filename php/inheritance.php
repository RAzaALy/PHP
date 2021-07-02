<?php
    //Inheritance in Php
    class Employee{
        public $name="Raza";
        private $salary=45330;
        private $grade=19;
        function showName(){
            echo "The name of The Employee is $this->name<br>";
        }
        function setSalary($salary){
            $this->salary=$salary;
        }
        function getSalary(){
            echo "The Salary of $this->name is $this->salary <br>";
        }
    }
    class Programmer extends Employee{
        private $language="php";
        function changeLanguage($lang){
            $this->language=$lang;
        }
        function showLanguage(){
            echo "The language of $this->name is $this->language";
        }
    }
    $ali=new Employee();
    $ali->name="Ali Jutt";
    $ali->showName();
    $ali->setSalary(340000);
    $ali->getSalary();

    $harry=new Employee();
    $harry->name="Haider JUTT";
    $harry->showName();
    $harry->setSalary(830000);
    $harry->getSalary();

    $raza=new Programmer();
    $raza->name="Raza Jutt";
    $raza->showName();
    $raza->setSalary(89302);
    $raza->getSalary();
    $raza->changeLanguage("Python");
    $raza->showLanguage();
?>