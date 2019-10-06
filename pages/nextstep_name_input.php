<?php
$servername = "localhost";
// $username = "root";
// $password = "root";
// $databasename = "nextstep";
// $servername = "lalita.design:3307";
$username = "quhtoqvmszhemqka_nextstep";
$password = "1q2w3e4r!!!";
$databasname = "quhtoqvmszhemqka_nextstep";
// $port = 8889;
// $port = 3307;
// Create connection
// $conn = mysqli_connect($servername,$username,$password,$databasename)
// or die("Error Connection: ".mysqli_connect_error());

$conn = new mysqli($servername,$username,$password,$databasename);

session_start();
mysqli_select_db($conn,"quhtoqvmszhemqka_nextstep");
$_SESSION['quote'] = $_POST["subject"];
// echo $_SESSION['quote'];
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
	<title>NextStep name input</title>
</head>
<body>
	<a href="mainPage.php">
		<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 159.44 159.44"><defs><style>.cls-1{fill:#fff;stroke:#231f20;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;}</style></defs><title>close_black</title><line class="cls-1" x1="1.5" y1="1.5" x2="157.94" y2="157.94"/><line class="cls-1" x1="157.94" y1="1.5" x2="1.5" y2="157.94"/></svg>
	</a>

	<div class="craftContainer">
	<h2 id="craftTitle">Say something about yourself</h2>


	<div id="formName">

		<form action="mainPage.php" method="POST">
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
	  	</div>
		</form>
	</div>
	</div>
</body>
</html>
