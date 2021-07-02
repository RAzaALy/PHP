<?php
  echo "Cookies in PhP:";
  //Cookies|Session:
  //We can store insenstive data in cookies:
  //we can store senstive data(email,password) in Sessions:
  //Syntax to set a Cookies:
  setcookie("catogery","Books",time()+86400,"/");
//   echo time();
 echo '<br>The cookies is Set:';
?>