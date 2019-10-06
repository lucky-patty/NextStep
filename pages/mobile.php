<?php 
$servername = "localhost";
// $username = "root";
// $password = "root";
// $databasename = "nextstep";
$username = "quhtoqvmszhemqka_nextstep";
$password = "1q2w3e4r!!!";
$databasname = "quhtoqvmszhemqka_nextstep";

// Create connection
// $conn = mysqli_connect($servername,$username,$password,$databasename)
// or die("Error Connection: ".mysqli_connect_error());

$conn = new mysqli($servername,$username,$password,$databasename);

session_start();
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

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Script Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script
type="text/javascript"
src="jquery-3.4.1.min.js">
</script>

<!-- Import Our Javascript  -->
<script src="nextstepmain.js"></script>
</head>
<body>

    <div class="container">
        <div class="row align-self-center justify-content-center">
		    <div class="col-lg-auto">
			    <h2 >Craft your message</h2>
		    </div>
        </div>
        <div class="row align-self-center justify-content-center">
            <!-- <div class="col-12 col-s-12 crafContent"> -->
                <!-- <div id="head"> -->
            <div class="col-lg-auto">
                        <p>WRITE SOMETHING</p>
            </div>
        </div>
		<div class="row align-self-center justify-content-center">
            <div class="col-lg-auto">
			<!-- <p><strong>Something to write about:</strong>What is gender Equality to you, personal experience, respond to sexual harassment, personal message to empower gender equality & why is gender equality important to you.</p> -->
 			    <form action="mobile_name_input.php" method="POST">
                 <textarea id="mobileCraftInput" name="quote" placeholder="Write something.."></textarea>
            </div>
				<!-- <p><strong>Something to write about:</strong>What is gender Equality to you, personal experience, respond to sexual harassment, personal message to empower gender equality & why is gender equality important to you.</p> -->
				<div class="col-lg-auto">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10">
					            <p class="mobileSubText1"><strong>Craft you message within these topic:</strong> What is gender equality to you/ Sexual harassment experience/ Respond to sexual harassment/ Personal message to empower gender equality</p>
                            </div>
                            <div class="col-lg-2">
                                <div class="mobileSubText2">0/120</div>
                            </div>
                        </div>
                    </div> 
                </div>

		</div>
		<div class="row align-self-center justify-content-center">
            <div class="col-lg-auto">
                <input id="submit" type="submit" value="NEXT">
            </div>
		</div>
 		</form>
</div>
</body>
</html>