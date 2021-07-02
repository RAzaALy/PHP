<style>
.mx-2{
    margin-right: -0.5rem!important;
    margin-left: 0.5rem!important;
}
.search{
        margin-right: 0.5rem!important;
}
</style>
<?php
session_start();
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/forum">iDiscuss</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Top Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
          $sql="SELECT category_id,category_name FROM categories LIMIT 4";
          $result=mysqli_query($conn, $sql);
          while($row=mysqli_fetch_assoc($result)){
            echo '<li><a class="dropdown-item" href="threadlist.php?catid='.$row['category_id'].'">
            '.$row['category_name'].'</a></li>';          
          }
          echo '
           </ul>
           </li>
           </ul>';
           
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        echo '<form class="d-flex" action="search.php" method="GET">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="mx-1 btn btn-outline-success" type="submit" ">Search</button>
        <a href="/forum/partials/_logout.php" role="button" class="ml-2 btn btn-outline-danger" type="submit"><b>Logout</b></a>
        </form>';
      }else{
        echo '<form class="d-flex"  action="search.php" method="GET">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="mx-2 btn btn-success search" type="submit" ">Search</button>
        </form>
        <button class="ml-2 btn btn-outline-danger" type="submit" data-bs-toggle="modal" data-bs-target="#loginModal"><b>Login</b></button>
        <button class="mx-2 btn btn-outline-danger" type="submit" data-bs-toggle="modal" data-bs-target="#signupModal"><b>Signup</b></button>';
      }
    echo 
    '
    </ul>
    </div>
  </div>
</nav>
';
   include "partials/_loginModal.php";
   include "partials/_signupModal.php";
   
   if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
     echo '  <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
     <strong>Success! </strong> You can login now.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
   }
   if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="false"){
    echo '  <div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong>Failure! </strong>please check the credentials.
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>';
   }
   if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="true"){
     echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
     <strong>Success! </strong> Welcome <b>'.$_SESSION['userEmail'].'</b> at iDiscuss coding Forum.
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
    }
   if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="false"){
     echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
     <strong>Failure! </strong> Plese check the credentials.
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
    }

?>