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
	<a href="mainPage.php">
		<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 159.44 159.44"><defs><style>.cls-1{fill:#fff;stroke:#231f20;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;}</style></defs><title>close_black</title><line class="cls-1" x1="1.5" y1="1.5" x2="157.94" y2="157.94"/><line class="cls-1" x1="157.94" y1="1.5" x2="1.5" y2="157.94"/></svg>
	</a>
	<div class="craftContainer">
		    <div class="row">
			<h2 class="craftTitlemain">Craft your message</h2>
		    </div>

		<div class="craftContent">
			<div class="col-12 col-s-12">
			<div id="head">
				<p>WRITE SOMETHING</p>
			</div>
			<!-- <p><strong>Something to write about:</strong>What is gender Equality to you, personal experience, respond to sexual harassment, personal message to empower gender equality & why is gender equality important to you.</p> -->
 			<form action="nextstep_name_input.php" method="POST">
 				<textarea id="subject" name="subject" placeholder="Write something.."></textarea>
				<!-- <p><strong>Something to write about:</strong>What is gender Equality to you, personal experience, respond to sexual harassment, personal message to empower gender equality & why is gender equality important to you.</p> -->
				<div id="textContainer">
					<div id="textBelow1"><strong>Craft you message within these topic:</strong> What is gender equality to you/ Sexual harassment experience/ Respond to sexual harassment/ Personal message to empower gender equality</div>
					<div id="textBelow2">0/120</div>
			</div>
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
