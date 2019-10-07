<?php
$servername = "localhost";
// $username = "root";
// $password = "root";
// $databasename = "nextstep";
$username = "quhtoqvmszhemqka_nextstep";
$password = "1q2w3e4r!!!";
$databasname = "quhtoqvmszhemqka_nextstep";
// $port = 8889;
// $port = 3307;

$conn = new mysqli($servername,$username,$password,$databasename);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($conn,"quhtoqvmszhemqka_nextstep");

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
    <link rel="stylesheet" href="../assets/styles/wall.css">
    <link rel="stylesheet" href="../assets/styles/nextstepmain.css">

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
      
        echo '<div>';
        echo '<a href="mainPage.php">';
        echo '<svg id="close_whitewall" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 250"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;}</style></defs><title>close_white</title><line class="cls-1" x1="46.78" y1="46.78" x2="203.22" y2="203.22"/><line class="cls-1" x1="203.22" y1="46.78" x2="46.78" y2="203.22"/></svg>';
        echo '</a>';
        echo '</div>';

        echo '<div>';
        echo '<h1 class="subOne">';
        echo $row['quote'];
        echo '</h1>';
        echo '<h5 class="shuffle_author">';
        echo $row['name'];
        echo ',';
        echo $row['title'];
        echo '</h5>';
        echo '</div>';
        echo '<a href="shuffle.php">';
        echo '<h5 class="shuffle_pink">';
        echo 'SHOW ANOTHER';
        echo '</h5>';
        echo '</a>';
        echo '<img class="shuffle" src="../assets/shuffle_pink.png">';

      }else if($row['color'] == 2){
        echo '<body class="twoBg">';

        echo '<div>';
        echo '<a href="mainPage.php">';
        echo '<svg id="close_whitewall" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 250"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;}</style></defs><title>close_white</title><line class="cls-1" x1="46.78" y1="46.78" x2="203.22" y2="203.22"/><line class="cls-1" x1="203.22" y1="46.78" x2="46.78" y2="203.22"/></svg>';
        echo '</a>';
        echo '</div>';

        echo '<div>';
        echo '<h1 class="subTwo">';
        echo $row['quote'];
        echo '</h1>';
        echo '<h5 class="shuffle_author">';
        echo $row['name'];
        echo ',';
        echo $row['title'];
        echo '</h5>';
        echo '</div>';
        echo '<a href="shuffle.php">';
        echo '<h5 class="shuffle_pink">';
        echo 'SHOW ANOTHER';
        echo '</h5>';
        echo '</a>';
        echo '<img class="shuffle" src="../assets/shuffle_pink.png">';

      }else if($row['color'] == 3){
        echo '<body class="threeBg">';
       
        echo '<div>';
        echo '<a href="mainPage.php">';
        echo '<svg id="close_whitewall" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 250"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;}</style></defs><title>close_white</title><line class="cls-1" x1="46.78" y1="46.78" x2="203.22" y2="203.22"/><line class="cls-1" x1="203.22" y1="46.78" x2="46.78" y2="203.22"/></svg>';
        echo '</a>';
        echo '</div>';

        echo '<div>';

        echo '<h1 class="subThree">';
        echo $row['quote'];
        echo '</h1>';
        echo '<h5 class="shuffle_author">';
        echo $row['name'];
        echo ',';
        echo $row['title'];

        echo '</h5>';
        echo '</div>';
        echo '<a href="shuffle.php">';
        echo '<h5 class="shuffle_pink">';
        echo 'SHOW ANOTHER';
        echo '</h5>';
        echo '</a>';
        echo '<img class="shuffle" src="../assets/shuffle_pink.png">';
      }else if($row['color'] == 4){

        echo '<body class="fourBg">';
        echo '<div>';
        echo '<a href="mainPage.php">';
        echo '<svg id="close_whitewall" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 250"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;}</style></defs><title>close_white</title><line class="cls-1" x1="46.78" y1="46.78" x2="203.22" y2="203.22"/><line class="cls-1" x1="203.22" y1="46.78" x2="46.78" y2="203.22"/></svg>';
        echo '</a>';
        echo '</div>';

        echo '<div>';
        echo '<h1 class="subFour">';
        echo $row['quote'];
        echo '</h1>';
        echo '<h5 class="shuffle_author">';
        echo $row['name'];
        echo ',';
        echo $row['title'];
        echo '</h5>';
        echo '</div>';
        echo '<a href="shuffle.php">';
        echo '<h5 class="shuffle_pink">';
        echo 'SHOW ANOTHER';
        echo '</h5>';
        echo '</a>';
        echo '<img class="shuffle" src="../assets/shuffle_pink.png">';

      }else if($row['color'] == 5){
        echo '<body class="fiveBg">';
        echo '<div>';
        echo '<a href="mainPage.php">';
        echo '<svg id="close_whitewall" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 250"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;}</style></defs><title>close_white</title><line class="cls-1" x1="46.78" y1="46.78" x2="203.22" y2="203.22"/><line class="cls-1" x1="203.22" y1="46.78" x2="46.78" y2="203.22"/></svg>';
        echo '</a>';
        echo '</div>';
        echo '<h1 class="subFive">';
        echo $row['quote'];
        echo '</h1>';
        echo '<h5 class="shuffle_author">';
        echo $row['name'];
        echo ',';
        echo $row['title'];
        echo '</h5>';
        echo '</div>';
        echo '<a href="shuffle.php">';
        echo '<h5 class="shuffle_pink">';
        echo 'SHOW ANOTHER';
        echo '</h5>';
        echo '</a>';
        echo '<img class="shuffle" src="../assets/shuffle_pink.png">';

      }else if($row['color'] == 6){
        echo '<body class="sixBg">';
        echo '<div>';
        echo '<a href="mainPage.php">';
        echo '<svg id="close_whitewall" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 250"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;}</style></defs><title>close_white</title><line class="cls-1" x1="46.78" y1="46.78" x2="203.22" y2="203.22"/><line class="cls-1" x1="203.22" y1="46.78" x2="46.78" y2="203.22"/></svg>';
        echo '</a>';
        echo '</div>';
        echo '<h1 class="subSix">';
        echo $row['quote'];
        echo '</h1>';
        echo '<h5 class="shuffle_author">';
        echo $row['name'];
        echo ',';
        echo $row['title'];
        echo '</h5>';
        echo '</div>';
        echo '<a href="shuffle.php">';
        echo '<h5 class="shuffle_pink">';
        echo 'SHOW ANOTHER';
        echo '</h5>';
        echo '</a>';
        echo '<img class="shuffle" src="../assets/shuffle_pink.png">';
      }else if($row['color'] == 7){
        echo '<body class="sevenBg">';
        echo '<div>';
        echo '<a href="mainPage.php">';
        echo '<svg id="close_whitewall" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 250"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;}</style></defs><title>close_white</title><line class="cls-1" x1="46.78" y1="46.78" x2="203.22" y2="203.22"/><line class="cls-1" x1="203.22" y1="46.78" x2="46.78" y2="203.22"/></svg>';
        echo '</a>';
        echo '</div>';
        echo '<h1 class="subSeven">';
        echo $row['quote'];
        echo '</h1>';
        echo '<h5 class="shuffle_author">';
        echo $row['name'];
        echo ',';
        echo $row['title'];
        echo '</h5>';
        echo '</div>';
        echo '<a href="shuffle.php">';
        echo '<h5 class="shuffle_pink">';
        echo 'SHOW ANOTHER';
        echo '</h5>';
        echo '</a>';
        echo '<img class="shuffle" src="../assets/shuffle_pink.png">';
      }
      else if($row['color'] == 8){
        echo '<body class="eigthBg">';
        echo '<div>';
        echo '<a href="mainPage.php">';
        echo '<svg id="close_whitewall" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 250"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;}</style></defs><title>close_white</title><line class="cls-1" x1="46.78" y1="46.78" x2="203.22" y2="203.22"/><line class="cls-1" x1="203.22" y1="46.78" x2="46.78" y2="203.22"/></svg>';
        echo '</a>';
        echo '</div>';
        echo '<h1 class="subEight">';
        echo $row['quote'];
        echo '</h1>';
        echo '<h5 class="shuffle_author">';
        echo $row['name'];
        echo ',';
        echo $row['title'];
        echo '</h5>';
        echo '</div>';
        echo '<a href="shuffle.php">';
        echo '<h5 class="shuffle_pink">';
        echo 'SHOW ANOTHER';
        echo '</h5>';
        echo '</a>';
        echo '<img class="shuffle" src="../assets/shuffle_pink.png">';
      }
    }
    
    echo '</body>';
?>
</html>
