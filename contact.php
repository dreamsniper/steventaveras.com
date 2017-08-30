<!DOCTYPE html>
<html lang="el">
    <head>
		<title>Steven Taveras</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is Steven Taveras's contact form">
		<title>Steven Taveras - Contact</title>
		<!--for remote bootsraps styles-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!--css reset-->
		<link rel="stylesheet" href="css/reset.css">
		<!--custom style sheet-->
		<link rel="stylesheet" href="css/index.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/9bacc3de6f.js"></script>
	</head>
    <body class="contact">
        <nav class="navbar section" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button id="button-press" type="button" class="navbar-toggle collapsed btn" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span> 
						<i class="fa fa-bars fa-2x" aria-hidden="true"></i>
					</button>
					<a href="index.html"><img class="img-responsive logo navbar-brand" src="images/StevenTaverasSiteLogo.gif" alt="image of steven taveras logo" title="steventaveras.com" /></a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-toggle">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.html">Home</a></li>
						<li><a href="aboutme.html">About Me</a></li>
						<li class="active"><a href="contact.php">Contact<span class="sr-only">(Current)</span></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="gallery/frontend.html">Frontend</a></li>
								<li><a href="gallery/frontend.html">Graphic Design</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container contact-box">
			<?php
				$name = $_POST['name'];
				$email = $_POST['email'];
				$message = $_POST['message'];
				$from = 'From: steventaveras.com'; 
				$to = 'thedreamsniper@gmail.com'; 
				$subject = 'Hello';
				$human = $_POST['human'];
				$body = "From: $name\n E-Mail: $email\n Message:\n $message";
					
				if ($_POST['submit']) {
					if (mail ($to, $subject, $body, $from)) { 
						echo 'Your message has been sent!';
					} else { 
						echo 'Something went wrong, go back and try again!'; 
					}
				}else if ($_POST['submit'] && $human != '4') {
					echo 'Please try again';
				}
			?>
			<header class="body">
				<h1>Send a Message</h1>
			</header>
				<form method="post" action="contact.php">
					<label>Name</label>
					<input name="name" placeholder="Type Here">
				
					<label>Email</label>
					<input name="email" type="email" placeholder="Type Here">
				
					<label>Message</label>
					<textarea name="message" placeholder="Type Here"></textarea>
						
					<label>*What is 2+2? (Anti-spam)</label>
					<input name="human" placeholder="Type Here">
				
					<input id="submit" name="submit" type="submit" value="Submit">
				</form>
		</div>
        <hr/>
		<footer class="footer fixed-bottom">
			<div class="container text-center">
				<div class="row">
					<div>
						<a href="https://codepen.io/dreamsniper/" target="_blank"><i class="fa fa-codepen fa-3x" aria-hidden="true"></i></a>
						<a href="https://www.facebook.com/steven.taveras1" target="_blank"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a>
						<a href="https://twitter.com/TheDreamsniper" target="_blank"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
						<a href="https://github.com/dreamsniper" target="_blank"><i class="fa fa-github-square fa-3x" aria-hidden="true"></i></a>
						<a href="https://www.linkedin.com/in/steven-taveras-81475b75/" target="_blank"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a>
						<a href="https://plus.google.com/u/0/+StevenTaveras_dreamsniper" target="_blank"><i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i></a>
						<a href="https://www.youtube.com/channel/UCFVYSh4PC84c34Etdagmc1Q" target="_blank"><i class="fa fa-youtube-square fa-3x" aria-hidden="true"></i></a>
						<a href="https://forum.freecodecamp.com/users/dreamsniper/summary" target="_blank"><i class="fa fa-free-code-camp fa-3x" aria-hidden="true"></i></a>
					</div>
					<p>Copyright &copy; 2017 Steven Taveras</p>
				</div>
			</div>
		</footer>
		<script src="js/app.js"></script>
    </body>
</html>
