<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Welcome To iCode-Coding Discussion</title>
    <style>
        #ques {
            min-height: 461px;
        }
    </style>
</head>

<body>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_nav.php'; ?>
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE `category_id`=$id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
    }
    ?>
    <?php
    $showAlert = false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //insert thread into database
        $th_title = $_POST['title'];
        $th_desc = $_POST['desc'];

        $th_title=str_replace("<","&lt",$th_title);
        $th_title=str_replace(">","&gt",$th_title);

        $th_desc=str_replace("<","&lt",$th_desc);
        $th_desc=str_replace(">","&gt",$th_desc);
        
        $sno = $_POST['sno'];
        $sql = "INSERT INTO `threads` (`thread_title`,`thread_desc`,`thread_cat_id`,`thread_user_id`) VALUES ('$th_title','$th_desc','$id','$sno')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $showAlert = true;
        }
        if ($showAlert) {
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success! </strong> Your thread has been added please wait for community to responed.
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>
            ';
        }
    }


    ?>
    <!-- Categories container starts here -->
    <div class="container my-4 bg-dark text-light" style="height: 500px;">
        <div class="jumbotron">
            <h1 class="display-4">Welcome To <?php echo $catname ?> Forums</h1>
            <p class="lead"><?php echo $catdesc ?></p>
            <hr class="my-4">
            <p>This is a peer to peer forum is for sharing knowledge to each other.</p>
            <div class="list" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                <b>Forum Rules:</b>
                <li>
                    Remain respectful of other members at all times.
                </li>
                <li>
                    Do not PM users asking for help.
                </li>
                <li>
                    Do not cross post questions.
                </li>
                <li>
                    Do not post copyright-infringing material.
                </li>
                <li>
                    Do not post “offensive” posts, links or images.
                </li>
            </div>
            <a class="btn btn-secondary btn-lg my-4" href="">Learn More</a>
        </div>
    </div>
    <?php
   if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo '
    <div class="container my-3">
        <h1 class="py-2">Start a Discussion</h1>
        <form action="'.$_SERVER["REQUEST_URI"].'" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Problem Title</label>
                <input type="text" class="form-control" id="titel" name="title" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Keep your title as short and crisp as possible.</div>
            </div>
           <input type="hidden" name="sno" value="'.$_SESSION["sno"].'">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="desc" id="desc"></textarea>
                <label for="floatingTextarea2" class="text-bold">Ellaborate your concern</label>
            </div><br>
            <button type="submit" class="btn btn-outline-secondary">Submit</button>
        </form>
    </div>';}
    else{
        echo '
        <h1 class="container py-2">Start a Discussion</h1>
        <h1 class="lead container my-3 py-2">You are not able to start a Discussion --> Please Login first.</h1>';
    }
    ?>
    <div class="container mb-3" id="ques">
        <h1 class="py-2">Browse Questions</h1>
        <?php
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `threads` WHERE `thread_cat_id`= $id";
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $id = $row['thread_id'];
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
            $time = $row['TimeStamp'];
            $thread_user_id=$row['thread_user_id'];
            $sql2="SELECT `user_email` FROM `users` WHERE `sno`='$thread_user_id'";
            $result2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_assoc($result2);
            echo ' 
        <div class="media my-3">
        <img src="us.png" width="50px" class="mr-3" alt="">
        <div class="media-body">
        <p class="font-weight-bold my-0 "><b>'.$row2['user_email'].'<br>At ' . $time . ' </b></p>
        <h5 class="mt-0"><a class="text-danger" style="text-decoration:none" href="thread.php?threadid=' . $id . '">' . $title . '</a></h5>
        ' . $desc . '
        </div>
        </div>';
        }
        if ($noResult) {
            echo '<div class="jumbotron bg-dark text-light jumbotron-fluid" style="height:200px">
        <div class="container">
            <h1 class="display-4">No Results Found</h1>
            <p class="lead">Be the first person to be ask a Question.</p>
        </div>
    </div>';
        }
        ?>
    </div>
    <?php include 'partials/_footer.php'; ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> -->

</body>

</html>