<?php
$servername = "lalita.design";
// $username = "root";
// $password = "root";
// $databasename = "nextstep";
// $servername = "lalita.design:3307";
$username = "quhtoqvmszhemqka_nextstep";
$password = "1q2w3e4r!!!";
$databasname = "quhtoqvmszhemqka_nextstep";
// $port = 8889;
// $port = 3307;

$conn = new mysqli($servername,$username,$password,$databasename);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = 'SELECT * FROM users ORDER BY RAND() LIMIT 1';
//$result = mysqli_query($conn,$query);
$result = $conn->query($query);

if($result === FALSE){
  die('Query failed returning error: '.mysql_error());
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/styles/shuffle.css">
  </head>
    <?php

    while($row = $result->fetch_array())
    {
    // echo $result;
    // echo '<div class="carousel-item">';
    // echo '<div class="d-block w-100 text-center">';
    // echo '<h1 class="quote">';
    // echo $row['quote'];
    // echo '</h1>';
    // echo '<h5 class="text author">';
    // echo $row['name'];
    // echo ',';
    // echo $row['title'];
    // echo '</h5>';
    // echo '</div>';
    // echo '</div>';
      if($row['color'] == 1){
        // Green
        echo '<body class="oneBg">';
        echo '<div class="center">';
        echo '<h1 class="subOne">';
        echo $row['quote'];
        echo '</h1>';
        echo '<h5>';
        echo $row['name'];
        echo ',';
        echo $row['title'];
        echo '</h5>';
      }else if($row['color'] == 2){
        echo '<body class="twoBg">';
        echo '<div class="center">';
        echo '<h1 class="subTwo">';
        echo $row['quote'];
        echo '</h1>';
        echo '<h5>';
        echo $row['name'];
        echo ',';
        echo $row['title'];
        echo '</h5>';
      }else if($row['color'] == 3){
        echo '<body class="threeBg">';
        echo '<div class="center">';
        echo '<h1 class="subThree">';
        echo $row['quote'];
        echo '</h1>';
        echo '<h5>';
        echo $row['name'];
        echo ',';
        echo $row['title'];
        echo '</h5>';
      }else if($row['color'] == 4){
        echo '<body class="fourBg">';
        echo '<div class="center">';
        echo '<h1 class="subFour">';
        echo $row['quote'];
        echo '</h1>';
        echo '<h5>';
        echo $row['name'];
        echo ',';
        echo $row['title'];
        echo '</h5>';
      }else if($row['color'] == 5){
        echo '<body class="fiveBg">';
        echo '<div class="center">';
        echo '<h1 class="subFive">';
        echo $row['quote'];
        echo '</h1>';
        echo '<h5>';
        echo $row['name'];
        echo ',';
        echo $row['title'];
        echo '</h5>';
      }else if($row['color'] == 6){
        echo '<body class="sixBg">';
        echo '<div class="center">';
        echo '<h1 class="subSix">';
        echo $row['quote'];
        echo '</h1>';
        echo '<h5>';
        echo $row['name'];
        echo ',';
        echo $row['title'];
        echo '</h5>';
      }else if($row['color'] == 7){
        echo '<body class="sevenBg">';
        echo '<div class="center">';
        echo '<h1 class="subSeven">';
        echo $row['quote'];
        echo '</h1>';
        echo '<h5>';
        echo $row['name'];
        echo ',';
        echo $row['title'];
        echo '</h5>';
      }
      else if($row['color'] == 8){
        echo '<body class="eigthBg">';
        echo '<div class="center">';
        echo '<h1 class="subEight">';
        echo $row['quote'];
        echo '</h1>';
        echo '<h5>';
        echo $row['name'];
        echo ',';
        echo $row['title'];
        echo '</h5>';
      }
    }
    echo '<div>';
    echo '<p>';
    echo 'Show Another';
    echo '<a href="shuffle.php">';
    echo '<img src="../assets/shuffle_pink.png"/>';
    echo '</a>';
    echo '</p>';
    echo '</div>';
    echo '</div>';
    
    echo '</body>';
?>
</html>
