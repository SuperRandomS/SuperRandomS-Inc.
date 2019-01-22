<!DOCTYPE html>
<html>
<head>
	<title>Oefensite</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,800" rel="stylesheet">
</head>
<body style="background-color: rgb(230, 243, 255); padding-top: 50px;">

	<nav class="navbar navbar-default navbar-fixed-top" id="balk">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	               <span class="sr-only">Toggle navigation</span>
	               <span class="icon-bar"></span>
	               <span class="icon-bar"></span>
	               <span class="icon-bar"></span>
            	</button>
				<a href="" class="navbar-brand"> <!--https://www.youtube.com/channel/UC5cDEpMDtg48qLpBoAI826A?view_as=subscriber-->
					<img alt="Brand" width="150px" style="padding-top: 16px; padding-left: 5px;" src="https://i.imgur.com/mydyP96.png?1">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<div id="tabs">
				<ul class="nav navbar-nav">
					<li><a href="#">Over</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<!--<li><a href="inlog.php">Log In</a></li>
					<li><a href="register.html">Registreer</a></li>-->
					<li><?php
						session_start();

						$welkom = $_SESSION['username'];
						
					        if (isset($_POST["uitloggen"])) {

					        
					        //$uitloggen = $_POST['uitloggen'];
					          session_unset();
					          session_destroy();
					          
					          header('location: Oefen.html');
					           } 
					       
					      
						include "dropdown.php";


					?>
					</li>
				</ul>
				</div>
			</div>
		</div>
	</nav>

	<div class="jumbotron" class="tweedelaag">
		<div class="container">
		  <h1 id="Welkom">Welkom bij SuperRandomS</h1>
		  <p id="Intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique tellus at tortor imperdiet, tincidunt vulputate turpis mattis. Suspendisse mollis cursus purus, in lobortis tortor aliquet sit amet. Suspendisse laoreet vitae nibh tristique congue. Donec non ultricies leo, quis dignissim tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam nisl lorem, convallis quis nisi et, interdum ultrices felis. Praesent sit amet erat fermentum, tempor dolor quis, porttitor purus. Vivamus ac risus rhoncus, eleifend lacus vitae, egestas purus. Aliquam erat volutpat. Vivamus convallis libero cursus, elementum risus a, scelerisque sem. Praesent nec risus arcu. Nunc nec nunc semper arcu auctor finibus. Nunc nec magna vel est laoreet iaculis. Quisque consequat fringilla lorem, in hendrerit libero hendrerit at.</p>
		  
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-right: 3px;">
				<div class="thumbnail">
				<img class="Foto" src="https://i.imgur.com/5oDOdMC.jpg">
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-left: 20px;">
				<div class="thumbnail" >
				<img class="Foto" src="https://i.imgur.com/h2jdb7O.jpg" >
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-left: 20px;">
				<div class="thumbnail"  >
				<img class="Foto" src="https://i.imgur.com/8hOcnmK.jpg">
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12" style="padding-left: 20px;">
				
					<video width="75%" height="" controls>
					  <source src="SSB.mp4" type="video/mp4">
					  <source src="SSB.webm" type="video/webm">
					  <p>Your browser doesn't support HTML5 video. Here is
					     a <a href="myVideo.mp4">link to the video</a> instead.</p>
					</video>
				
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="thumbnail">
				<img class="Foto onder" src="https://i.imgur.com/CcOlNqL.jpg">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="thumbnail">
				<img class="Foto onder" src="https://i.imgur.com/uQsjoD0.jpg">
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: rgb(230, 243, 255);" class="jumbotron" class="tweedelaag">
		<div class="container">
		  <p style="color: rgb(0, 0, 102); font-weight: 600;">Samen werken aan fotos voor het beter maken van deze site. Het is allemaal goed bedoeld, dus als je iets te klagen hebt, zeur dan niet bij mij als het om een copyright claim gaat, want mijn naam staat toch echt onder aan de pagina. Dus om bepaalde zaken tegen te gaan heb ik hier het artikel voor copyright rechten.</p>
		  <button type="button" class="btn btn-default"><a style="text-decoration: none;" href="http://wetten.overheid.nl/BWBR0001886/2018-09-19">Door naar het artikel</a></button>
		</div>
	</div>

<p style="text-align: center; font-weight: 600;">&copy Micha van der Vegte en Johan Doeser</a></p>

<script src="http://code.jquery.com/jquery-3.3.1.js"
integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>