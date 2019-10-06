<?php
$servername = "localhost";
// $username = "root";
// $password = "root";
// $databasename = "nextstep";
$username = "quhtoqvmszhemqka_nextstep";
$password = "1q2w3e4r!!!";
$databasname = "quhtoqvmszhemqka_nextstep";

// Create connection

$conn = new mysqli($servername,$username,$password,$databasename);

session_start();

$_SESSION['quote'] = $_POST["subject"];
echo $_SESSION['quote'];
$color = rand(1,8);
// $test = $GLOBALS['quote'];
$quote =  $_SESSION['quote'];
$_SESSION['color'] = $color;
?>

<!DOCTYPE html>
<html>
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Link Google Material Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Link CSS File -->
        <link rel="stylesheet" href="../assets/styles/nextstepmain.css">
            <link rel="stylesheet" href="../assets/styles/craft.css">

        <!-- Import jQuery Library -->
        <script
        type="text/javascript"
        src="jquery-3.4.1.min.js">
        </script>

        <!-- Import Our Javascript  -->
        <script src="nextstepmain.js"></script>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Script Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <title>NextStep name input</title>
    </head>
    <body>
        <div class="container">
            <div class="row align-self-center justify-content-center">
                <div class="col-sm-auto">
                    <h2>Say something about Yourself</h2>
                </div>
            </div>
            <div class="row align-self-center justify-content-center">
                <div class="col-sm-auto">
                    <form action="thankyou.php" method="POST"> 
                        <label class="nameTag" for="fname">NAME</label>
                        <br>
                        <input class="inputNameField" type="text" id="fname" name="fname">
                        <div id="textContainer">
                                <div id="textBelow3">Just how do you want to be called</div>
                                <div id="textBelow4">0/20</div>
                            </div>
                        <label class="nameTag" for="lname">I AM</label>
                        <br>
                        <input class="inputNameField" type="text" id="lname" name="lname">
                        <div id="textContainer">
                                <div id="textBelow3">who or what or where</div>
                                <div id="textBelow4">0/20</div>
                            </div>
                        <div class="row">
                            <input id="submitpost" type="submit" name="submit" value="POST">
                    </form>
                </div>
            </div>

        </div> 
    </body>
</html>