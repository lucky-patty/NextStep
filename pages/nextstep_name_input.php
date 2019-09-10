<?php
$servername = "localhost";
$username = "root";
$password = "root";
$databasename = "nextstep";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$databasename)
or die("Error Connection: ".mysqli_connect_error());


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

	<div class="container">
	<h2>Say something about yourself</h2>
	<!-- <p>This is not required to be your real name</p> -->

	<div id="formName">
		<form action="nextstepmain.html" method="GET">
			<label class="nameTag" for="fname">NAME</label>
			<br>
			<input class="inputNameField" type="text" id="fname" name="fname">
			<label class="nameTag" for="lname">I AM</label>
			<br>
			<input class="inputNameField" type="text" id="lname" name="lname">
			<div class="row">
				<input id="submit" type="submit" value="POST">
	  	</div>
		</form>
	</div>
	</div>
</body>
</html>
