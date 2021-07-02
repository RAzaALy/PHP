<?php
       #Scope of local and Global variables:
       echo "Scope of Local and Global variables:<br>";

       #Global variables:
       $a=99;
       $b=89;
       function show(){
           $a=33;//Local Variable:
           global $a,$b;//Global accessing variable:
           $a=890;
           $b=36.6;
           echo "The vlaue of a: ".$a;
           echo '<br>';
           echo "The value of b:".$b;
           echo "<br>";
       }
       show();
       echo $a;
       echo '<br>';
    //    echo var_dump ($GLOBALS);
       echo var_dump ($GLOBALS["a"]);
       echo var_dump ($GLOBALS["b"]);
?>

