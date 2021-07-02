<!DOCTYPE html>
<html>
<title>iChat-Let's talk together</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<script src="jquery-3.5.1.min.js"></script>
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat"> -->
<!-- <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Montserrat", sans-serif
    }

    .w3-row-padding img {
        margin-bottom: 12px
    }

    /* Set the width of the sidebar to 120px */
    .w3-sidebar {
        width: 120px;
        background: #222;
    }

    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
    #main {
        margin-left: 120px
    }

    /* Remove margins from "page content" on small screens */
    @media only screen and (max-width: 600px) {
        #main {
            margin-left: 0
        }
    }
</style>

<body class="w3-black">

    <div class="w3-bar w3-black">
        <a href="#" class="w3-bar-item w3-button">Home</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small">Message</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
    </div>

    <!-- Page Content -->
    <div class="w3-padding-large" id="main">
        <!-- Header/Home -->
        <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
            <h1 class="w3-jumbo"><span class="w3-hide-small">iChat</span> Let's Chat</h1>
            <p>Let's ready to chat.</p>
        </header>
        <!-- Contact Section -->
        <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
            <h2 class="w3-text-light-grey">Chat with Me</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>Lets get in touch. Send me a message:</p>

            <form action="chat.php" method="POST">
                <p><input class="w3-input w3-padding-16" type="text" placeholder="Room Name" name="room"></p>
                <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                    <i class="fa fa-paper-plane"></i>Claim Room
                </button>
                </p>
            </form>
            <!-- End Contact Section -->
        </div>

        <!-- Footer -->
        <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
            <p class="w3-medium">Powered by <a href="default.html" target="_blank" class="w3-hover-text-green">iChat</a></p>
            <!-- End footer -->
        </footer>

        <!-- END PAGE CONTENT -->
    </div>

</body>

</html>