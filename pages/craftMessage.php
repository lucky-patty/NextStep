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

	<title>craft message in NextStep</title>
</head>
<body>
	<div class="craftContainer">
			<h2>Craft your message</h2>

		<div class="craftContent">

			<div id="head">
				<p>WRITE SOMETHING</p>
			</div>
			<!-- <p><strong>Something to write about:</strong>What is gender Equality to you, personal experience, respond to sexual harassment, personal message to empower gender equality & why is gender equality important to you.</p> -->
 			<form action="nextstep_name_input.html" method="POST">
 				<textarea id="subject" name="subject" placeholder="Write something.."></textarea>
				<!-- <p><strong>Something to write about:</strong>What is gender Equality to you, personal experience, respond to sexual harassment, personal message to empower gender equality & why is gender equality important to you.</p> -->
				<div id="textContainer">
					<div id="textBelow1">None</div>
					<div id="textBelow2">0/10</div>
				</div>
					<div class="row">
            	<input id="submit" type="submit" value="NEXT">
					</div>
 			</form>
		</div>
        <!-- After submit this, it will go to nextstep_name_input.html to put the name and who you are -->

	</div>
</body>
</html>
