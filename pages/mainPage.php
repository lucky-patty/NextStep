<?php

// init_set("display_errors","1");
// error_reporting(E_ALL);
$servername = "localhost";
// $username = "root";
// $password = "root";
// $databasename = "nextstep";
// $servername = "lalita.design:3307";

$username = "quhtoqvmszhemqka_developer";
$password = "1q2w3e4r!!!";
$databasname = "quhtoqvmszhemqka_nextstep";
// $port = 8889;
// $port = 3307;
// Create connection
// $conn = mysqli_connect($servername,$username,$password,$databasename)
// or die("Error Connection: ".mysqli_connect_error());


$conn = new mysqli($servername,$username,$password,$databasename);

// $conn = mysqli_connect();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
  // echo 'login successfully';
}
mysqli_select_db($conn,"quhtoqvmszhemqka_nextstep");
$sql = "SELECT DATABASE()";
if($test = $conn->query($sql)){
  // echo 'IT WORK!';
  $row = $test->fetch_row();
  // printf('Default db is %s . \n',$row[0]);
}else{
  // echo 'SOME SHIT HAPPEN THAT WE DON"T KNOW';
  echo "ERROR : $sql. ". mysql_error($conn);
}

$sql2 = "SELECT * FROM users";

// $result =  or trigger_error('QUERY FAIL : $sql - ERROR : '.mysqli_error(),E_USER_ERROR);

$result = $conn->query($sql2);

if($result === FALSE){
  echo'FAIL';
  die(mysql_error($conn));
}else{
  // printf('IT WORK SHOW : %d \n',$result->num_rows);
}

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


$conn->close();

//mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/styles/landingpage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Script Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
      <div class="mainContainer">
        <!-- Top Section  -->
        <div class="container row">
          <div id="firstPart" class="col-12 header">
            <h5 class="text">Newest Post</h5>
            <div class="line"></div>
          </div>
        </div>
        <!-- Message Section -->
        <div  id="messageSection" class="container">
          <div class="container-fluid row">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="d-block w-100 text-center">
                    <h1 class="quote">
                      I experienced sexual harassment and it truamatise me, I scared
                      to be judged as a bitch.
                    </h1>
                    <h5 class="text author">LALITA BANGKOK,TH</h5>
                </div>
                </div>
                <div class="carousel-item">
                  <div class="d-block w-100 text-center">
                    <h1 class="quote">
                      I experienced something bad and it scare me, I hate being seen as
                      a bitch.
                    </h1>
                    <h5 class="text author">WHO BANGKOK.TH</h5>
                </div>
                </div>
                <div class="carousel-item">
                  <div class="d-block w-100 text-center">
                    <h1 class="quote">
                      "You got raped because you wearing something less so it your false!"
                      I hate it!
                    </h1>
                    <h5 class="text author">NEEKO BANGKOK.TH</h5>
                </div>
                </div>
                
                <?php
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

               
              </div> 
            </div>
          <!-- <div class="col-12 header text-center">
            <h1 class="text quote">
              I experienced sexual harassment and it truamatise me, I scared
              to be judged as a bitch when all I did was wearing skirt.
            </h1>
          </div>
          <div class="container row justify-content-center">
            <div class="col-4 header">
              <h5 class="text">LALITA BANGKOK.TH</h5>
            </div>
          </div> -->
        </div>
          </div>
          <!-- Last Section -->
          <div class="lastPart">

               <!-- Title -->
          <div id="lastSectionTitle" class="row">
            <div class="col-3 header col-s-3">
              <h5 class="text">Get Start</h5>
              <div class="line"></div>
            </div>
            <div class="col-3 header col-s-3">
              <h5 class="text">Contact</h5>
              <div class="line"></div>
            </div>
          </div>
            <!-- First Row Link  -->
            <div id="firstRow" class="row">
              <div class="col-3 header col-s-3">
                <a href="about.php"><h6 class="text">About</h6></a>
              </div>
              <div class="col-3 header col-s-3">
                <h6 class="text">Project by Lalita K</h6>
              </div>
            </div>
            <!-- Second Row Link -->
            <div class="row">
              <div class="col-3 header col-s-3">
                <a href="craftMessage.php"><h6 class="text">Craft your message</h6></a>
              </div>
              <div class="col-3 header col-s-3">
                <a href="mailto:lalita.kamolchanokkul@gmail.com">
                <h6 class="text">Get in touch</h6>
                </a>
              </div>
            </div>
            <!-- Last Row -->
            <div class="row">
              <div class="col-3 header col-s-3">
                <a href="wall.php"><h6 class="text">All message</h6></a>
              </div>

            </div>
        </div>

  </body>
</html>
