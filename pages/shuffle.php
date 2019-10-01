<?php
$servername = "localhost";
$username = "root";
$password = "root";
$databasename = "nextstep";

$port = 3307;

$conn = new mysqli($servername,$username,$password,$databasename);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = 'SELECT * FROM users ORDER BY RAND() LIMIT 1';
$result = mysqli_query($conn,$query);
if($result === FALSE){
  die('Query failed returning error: '.mysql_error());
}

?>

<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <?php
    if($row['color'] == 0){
      // Green
    }else if($row['color'] == 1){

    }else if($row['color'] == 2){

    }else if($row['color'] == 3){

    }else if($row['color'] == 4){

    }else if($row['color'] == 5){

    }else if($row['color'] == 6){

    }
    while($row=mysqli_fetch_array($result))
    {
    echo '<div class="carousel-item">';
    echo '<div class="d-block w-100 text-center">';
    echo '<h1 class="quote">';
    echo $row['quote'];
    echo '</h1>';
    echo '<h5 class="text author">';
    echo $row['name'];
    echo ',';
    echo $row['title'];
    echo '</h5>';
    echo '</div>';
    echo '</div>';
    }
    ?>
  </body>
</html>
