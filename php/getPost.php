
<?php
//same as post:
if ($_SERVER['REQUEST_METHOD'] == 'post') {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    echo "Your Email adress is .$email and password is .$pass";
}
// submit to a database
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get&post</title>
</head>

<body>
    <h1>Please Enter your Email and Password:</h1>
    <form action="/PhP/getPost.php" method="POST">
        <label for="email" method="post">Email Adress</label><br>
        <input type="email" name="email" id="email" placeholder="Enter your email"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Enter your name:"><br>
        <small>we will not share your Email and password with any one else!</small><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>