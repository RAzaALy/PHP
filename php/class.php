<?php
//Object oriented programming in Php:
class Player{
    //properties:
    public $name;
    public $age;
   //Methods and Function of plyer:
   function setName($name){
       $this->name=$name;
   }
   function getName(){
       return $this->name;
   }
   
   function setAge($age){
       $this->age=$age;
   }
   function getAge(){
       return $this->age;
   }
   
}
$player1=new Player();
$player1->setName("Raza Jutt");
$player1->setAge(22);
echo $player1->getName();echo '<br>';
echo $player1->getAge();echo '<br>';

$player2=new Player();
$player2->setName("Haider Ali");
echo $player2->getName();echo '<br>';
$player3=new Player();
$player3->setName("Ali Raza Jutt");
echo $player3->getName();
?>
