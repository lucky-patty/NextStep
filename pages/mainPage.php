<?php
$servername = "localhost";
$username = "root";
$password = "root";
$databasename = "nextstep";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$databasename)
or die("Error Connection: ".mysqli_connect_error());

// Get All Data

$query = "SELECT * FROM Message";
mysql_query($conn,$query) or die('Error querying database');

// Put data in the div "later"

// Close connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/styles/landingpage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
      <div class="mainContainer">
        <!-- Top Section  -->
        <div class="container row">
          <div class="col-12 header">
            <h4 class="text">Newest Post</h4>
          </div>
        </div>
        <!-- Message Section -->
        <div id="message" class="container row justify-content-center">
          <div class="col-10 header">
            <h1 class="text">
              I experienced sexual harassment and it truamatise me, I scared
              to be judged as a bitch when all I did was wearing skirt.
            </h1>
          </div>
          <div class="container row justify-content-center">
            <div class="col-4 header">
              <h5 class="text">LALITA BANGKOK.TH</h5>
            </div>
          </div>
          <!-- Last Section -->
          <div class="container">
            <!-- Title -->
          <div id="lastSectionTitle" class="row">
            <div class="col-3 header">
              <h4 class="text">Get Start</h4>
            </div>
            <div class="col-5 header">
              <h4 class="text">Sign Ups for newsletter</h4>
            </div>
          </div>
            <!-- First Row Link  -->
            <div id="firstRow" class="row">
              <div class="col-3 header">
                <h5 class="text">About</h5>
              </div>
              <div class="col-5 header">
                <h5 class="text">Sign up to our newsletter to</h5>
              </div>
            </div>
            <!-- Second Row Link -->
            <div class="row">
              <div class="col-3 header">
                <a href="craftMessage.html"><h5 class="text">Craft your message</h5></a>
              </div>
              <div class="col-5 header">
                <h5 class="text">Get all the latest update</h5>
              </div>
            </div>
            <!-- Last Row -->
            <div class="row">
              <div class="col-3 header">
                <a href="wall.html"><h5 class="text">All message</h5></a>
              </div>
            </div>
        </div>
      </div>
  </body>
</html>
