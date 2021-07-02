<?php
//Get paremeters:

    $roomname = $_GET['roomname'];
    //connecting to database:
    include 'db_connect.php';
    //Esecute sql to check whether room exits
    $sql ="SELECT * FROM `room` WHERE roomName='$roomname'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
       // check if room exits
        if (mysqli_num_rows($result) ==0) {
            $message = "This chat room is not exits ,Try creating a new one!";
            echo '<script language="javascript">';
            echo 'alert("' . $message . '");';
            echo 'window.location="http://localhost/chatRoom";';
            echo '</script>';
        }
    } else {
        echo "Error" . mysqli_error($conn);
    }

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <script src="jquery-3.5.1.min.js"></script>
    <style>
        body {
            margin: 0 auto;
            max-width: 800px;
            padding: 0 20px;
        }

        .container {
            border: 2px solid #dedede;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }

        .darker {
            border-color: #ccc;
            background-color: #ddd;
        }

        .container::after {
            content: "";
            clear: both;
            display: table;
        }

        .container img {
            float: left;
            max-width: 60px;
            width: 100%;
            margin-right: 20px;
            border-radius: 50%;
        }

        .container img.right {
            float: right;
            margin-left: 20px;
            margin-right: 0;
        }

        .time-right {
            float: right;
            color: #aaa;
        }

        .time-left {
            float: left;
            color: #999;
        }

        .scroll {
            height: 400px;
            overflow-y: scroll;
        }
    </style>
</head>

<body>
    <div class="w3-bar w3-black">
        <a href="/index.php" class="w3-bar-item w3-button">Home</a>
        <a href="/chat.php" class="w3-bar-item w3-button">Message</a>
    </div>

    <h1>Chat Messages - <?php echo $roomname; ?></h1>
    <div class="scroll">
        <div class="container">
            <!-- <img src="us.png" alt="Avatar" style="width:100%;">
            <p>Hello. How are you today?</p>
            <span class="time-right">11:00</span> -->
        </div>
        <!-- <div class="container darker">
            <img src="us.png" alt="Avatar" class="right" style="width:100%;">
            <p>Hey! I'm fine. Thanks for asking!</p>
            <span class="time-left">11:01</span>
        </div> -->
    </div>


    <form class="w3-container w3-card-4" action="" method="POST">
        <p>
            <label class="w3-text-blue"><b>Send Message</b></label>
            <input class="w3-input w3-border" name="userMsg" id="userMsg" type="text" placeholder="Add Message" style="outline: none;">
        </p>
        <p>
        <p>
            <button class="w3-btn w3-blue" id="sbmtMsg" type="submit">Send</button>
        </p>
    </form>
    ​<script type="text/javascript">
        //check for new message every second:
        setInterval(() => {
            $.post("htcont.php",{room:'<?php echo $roomname ?>'},
            function(data,status){
                document.getElementsByClassName('scroll')[0].innerHTML=data;
            });

        }, 500);
        //trigger a button on enter key:
        var input = document.getElementById("userMsg");
        input.addEventListener("keyup", function(event) {
            event.preventDefault();
            if (event.keyCode === 13) {
                document.getElementById("sbmtMsg").click();
            }
        });
        //if user submit the message:
        $(document).ready(function() {
            $("#sbmtMsg").click(function() {
                let clientMsg = $("#userMsg").val();
                $.post("postMsg.php", {
                        userMsg: clientMsg,
                        room: '<?php echo $roomname; ?>',
                        ip: '<?php echo $_SERVER['REMOTE_ADDR']; ?>'
                    },
                    function(data, status) {
                        document.getElementsByClassName('scroll')[0].innerHTML = data;
                        return false;
                    });
            });
        });
        $("#userMsg").val("");
    </script>
</body>

</html>