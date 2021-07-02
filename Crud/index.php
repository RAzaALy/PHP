<?php
//connecting to the database:     
$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";
$insert = false;
$update = false;
$delete = false;
//create a connction:
$conn = mysqli_connect($servername, $username, $password, $database);
//Die if connections was not successful:
if (!$conn) {
    die("sorry we failed to connect" . mysqli_connect_error());
}
if (isset($_GET["delete"])) {
    //Delete a record in database:
    $sno = $_GET["delete"];
    $sql = "DELETE FROM `notes` WHERE `notes`.`sno`= $sno";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $delete = true;
    } else {
        echo "Not Deleted", mysqli_error($conn);
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['snoEdit'])) {
        //Update The Record in a Database
        $title = $_POST["titleEdit"];
        $description = $_POST["descriptionEdit"];
        $sno = $_POST["snoEdit"];
        //sql query excutes to update record
        $sql = " UPDATE `notes` SET `Title`='$title' , `Description`='$description' WHERE `notes`.`sno`= '$sno' ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $update = true;
        } else {
            echo "not update", mysqli_error($conn);
        }
    } else {
        //Insert a record in a Table in a Database:
        $title = $_POST["title"];
        $description = $_POST["description"];
        $sql = "INSERT INTO `notes` (`Title`, `Description`) VALUES ('$title', '$description')";
        $result = mysqli_query($conn, $sql);
        //check for record in a table creation:
        if ($result) {
            // echo "<br>The Record in a table was inserted successfully:";
            $insert = true;
        } else {
            echo "<br>The record in a table was not inserted successfully:Due to Error-->" . mysqli_error($conn);
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

    <title> 📛 CRUD APP</title>
</head>

<body>
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Note</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/crud/index.php" method="POST">
                        <input type="hidden" name="snoEdit" id="snoEdit">
                        <div class="mb-3">
                            <label for="titleEdit" class="form-label"><b>Note Tilte</b></label>
                            <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp" placeholder="Leave a title here">
                        </div>
                        <div class="mb-3">
                            <label for="descriptionEdit" class="form-label"><b>Note Description</b></label>
                            <div class="form-floating">
                                <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" placeholder="Leave a description here" id="floatingTextarea2" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer d-block m-auto">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="/Crud/logo.png" height="30px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <?php
    if ($insert) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your note has been inserted successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    if ($update) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your note has been updated successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    if ($delete) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your note has been deleted successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    ?>
    <div class="container my-4">
        <h1>Please Add a Note</h1>
        <form action="/crud/index.php" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label"><b>Note Tilte</b></label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Leave a title here">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label"><b>Note Description</b></label>
                <div class="form-floating">
                    <textarea class="form-control" id="description" name="description" placeholder="Leave a description here" id="floatingTextarea2" style="height: 150px"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-info">Add Note</button>
        </form>
    </div>
    <div class="container my-4">

        <table class="table table-dark table-hover" id="myTable">
            <thead>
                <tr class="table-dark">
                    <th scope="col">S.No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Time</th>
                    <th scope="col"> Actions </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `notes`";
                $result = mysqli_query($conn, $sql);
                $sno = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $sno = $sno + 1;
                    echo " <tr>
            <th scope='row'>" . $sno . "</th>
            <td>" . $row['Title'] . "</td>
            <td>" . $row['Description'] . "</td>
            <td>" . $row['Time'] . "</td>
            <td> <button type='button' class='edit btn btn-secondary' id=" . $row['sno'] . ">Edit</button>  <button type='button' id=d" . $row['sno'] . " class='delete btn btn-danger'>Delete</button> </td>
        </tr>";
                    echo "<br>";
                }
                ?>


            </tbody>
        </table>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <script>
        //For Edit record in a database:
        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element => {
            element.addEventListener('click', (e) => {
                // console.log('edit');
                tr = e.target.parentNode.parentNode;
                title = tr.getElementsByTagName('td')[0].innerText;
                description = tr.getElementsByTagName('td')[1].innerText;
                // console.log(title, description);
                titleEdit.value = title;
                descriptionEdit.value = description;
                snoEdit.value = e.target.id;
                // console.log(e.target.id);
                $('#editModal').modal('toggle');
            });

        }));
        //For Delete a record in a database:
        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element => {
            element.addEventListener('click', (e) => {
                sno = e.target.id.substr(1, );
                if (confirm('Do You really want to delete this note?')) {
                    // console.log('yes');
                    window.location = `/crud/index.php?delete=${sno} `;
                } else {
                    console.log('No');
                }
            });

        }));
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>  -->

</body>

</html>