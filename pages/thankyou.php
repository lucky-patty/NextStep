<?php 

$servername = "localhost";
// $username = "root";
// $password = "root";
// $databasename = "nextstep";
// $servername = "lalita.design:3307";

$username = "quhtoqvmszhemqka_nextstep";
$password = "1q2w3e4r!!!";
$databasname = "quhtoqvmszhemqka_nextstep";

// Create connection

$conn = new mysqli($servername,$username,$password,$databasename);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo 'Connected to the database.<br>';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_POST['submit'])){
  echo $_POST["fname"];
  echo $_POST["lname"];
  echo $quote;
  echo $color;
  $quote = $_SESSION['quote'];
  $color = $_SESSION['color'];

  $sql = "INSERT INTO users (name,title,quote,color) VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$quote."',$color)";
  if($conn->query($sql) === TRUE){
    echo "Successfully";
  }else{
    echo "Error: ",$conn->error;
  }
}
?>

<!DOCTYPE html>
<html>
    <body> 
        THANK YOU FOR THE INPUT PLEASE PROCEED TO NEXTSTEP ROOM!
    </body>
</html>
