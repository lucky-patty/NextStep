<?php 

$servername = "localhost";
// $username = "root";
// $password = "root";
// $databasename = "nextstep";
// $servername = "lalita.design:3307";

// $username = "quhtoqvmszhemqka_nextstep";
// $password = "1q2w3e4r!!!";
// $databasname = "quhtoqvmszhemqka_nextstep";

// Create connection

// $conn = new mysqli($servername,$username,$password,$databasename);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// echo 'Connected to the database.<br>';

// mysqli_select_db($conn,"quhtoqvmszhemqka_nextstep");
// // $result = mysqli_query($conn,"SELECT * FROM users");
// // mysql_select_db($databasename);

// if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }

// if(isset($_POST['submit'])){
// //   echo $_POST["fname"];
// //   echo $_POST["lname"];
// //   echo $quote;
// //   echo $color;
//   $quote = $_SESSION['quote'];
//   $color = $_SESSION['color'];

//   $sql = "INSERT INTO `users` (name,title,quote,color) VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$quote."',$color)";
//   if($conn->query($sql) === TRUE){
//     // echo "Successfully";
//   }else{
//     // echo "Error: ",$conn->error;
//   }
// }

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
        <link rel="stylesheet" href="../assets/styles/thankyou.css">


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
        <div class="row">
            <div class="col-sm-auto align-self-center justify-content-center">
                <div class="card thankyouCard">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm">
                                <img class="thankyouAbout" alt="icon_blue" src="../assets/NS_icon_blue.png">
                            </div>

                            <div class="col-sm-auto">
                                <h2 class="thankyouHead">Thank you for your participation</h2>
                            </div>

                            <div class="col-sm-auto">
                                <h5 class="thankyouBody">
                                NextStep is an anonymous platform that let anyone express they saying, opinions and thought freely on gender equality, sexual harassment and body respect. Helping you talk about it in this way could bring some comfort and empowerment.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer footerbackground text-muted ">
                        <div class="row ">
                            <div class="col-sm">
                                <h5 class="thankyouFooter">
                                    Please proceed to room 6A
                                </h5>
                                <p class="thankyouSubFooter">
                                    For more information about NextStep
                                </p>
                            </div>         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- THANK YOU FOR THE INPUT PLEASE PROCEED TO NEXTSTEP ROOM! -->
    </body>
</html>
