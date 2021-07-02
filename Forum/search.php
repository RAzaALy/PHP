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
        #mainContainer {
            min-height: 89.7vh;
        }

        .carousel-item {
            height: 730px;
        }
    </style>
</head>

<body>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_nav.php'; ?>

    <!-- Search Results starts here -->
    <div class="container my-3 center" id="mainContainer">
        <h1 class="py-3">Serch Results For <em class="text-success">'<?php echo $_GET['search']; ?>'</em></h1>
        <?php
        $noSearch=true;
        $search = $_GET['search'];
        $sql = "SELECT * FROM `threads` WHERE MATCH(`thread_title`,`thread_desc`) against('$search')";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $noSearch=false;
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
            $id = $row['thread_id'];
            $url = "thread.php?threadid=" . $id;
            //Display the search results:
            echo ' 
            <div class="result">
                <h3><a href="' . $url . '" class="text-danger" style="text-decoration: none">' . $title . '</a></h3>
                <p>' . $desc . '</p>
            </div>
            ';
        }
        if ($noSearch) { 
            echo '
            <div class="jumbotron bg-dark text-light jumbotron-fluid" style="height:200px">
              <div class="container">
                <h1 class="display-4">No Results Found</h1>
                <p class="lead">Suggestions:<ul>
                   <li>Make sure that all spelled are correctly.</li>
                   <li>Try different keywords.</li>
                   <li>Try more General keywords.</li>
                   </ul>
                </p>
             </div>
            </div>
            ';
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