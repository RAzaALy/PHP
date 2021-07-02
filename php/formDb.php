<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Db</title>
</head>

<body>
    
    <h1>Please Enter your Email and Password:</h1>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //connecting to the database:     
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "formdb";
        //create a connction:
        $conn = mysqli_connect($servername, $username, $password, $database);
        //Die if connections was not successful:
        if (!$conn) {
            die("sorry we failed to connect" . mysqli_connect_error());
        } else {
            // echo 'connections was successful <br>';
        }
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        // submit to a database
        $sql = "INSERT INTO `contact` (`NAME`, `E-mail`, `Password`) VALUES ('$name', '$email', '$pass')";
        $result = mysqli_query($conn, $sql);
        //check for data creation:
        if ($result) {
            echo "<br>The data was created successfully:";
        } else {
            echo "<br>The data was not created successfully:Due to Error-->" . mysqli_error($conn);
        }
    }
    ?>
    <form action="/PhP/formDb.php" method="POST">
        <label for="name" method="POST">NAME</label><br>
        <input type="name" name="name" id="name" placeholder="Enter your name"><br>
        <label for="email" method="POST">Email Adress</label><br>
        <input type="email" name="email" id="email" placeholder="Enter your email"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Enter your password:"><br>
        <small>we will not share your Email and password with any one else!</small><br>
        <button type="submit">Submit</button>
    </form>

</body>

</html>