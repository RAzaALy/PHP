<?php
  //MultiDimensions Arrays in pHp:
  #creating two Dimensional Dimension Array:
    $mulDim=array(array(3,4,8,9),
                  array(4,5,1,2),
                  array(5,6,7,9),
                  array(3,9,2,0));
    // echo  var_dump($mulDim);
    // echo  $mulDim[0][2];
    //Printing the content of two dimensional array:
    // for ($i=0; $i < count($mulDim); $i++) { 
    //         echo var_dump($mulDim[$i]);
    //         echo "<br>";
    // }
    echo "Matrix oF Two Dimension:<br>";
    for ($i=0; $i < count($mulDim); $i++) { 
        for ($j=0; $j < count($mulDim[$i]); $j++) { 
            echo($mulDim[$i][$j]);
            echo " ";
        }
        echo "<br>";
    }
?>