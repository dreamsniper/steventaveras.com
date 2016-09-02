<!DOCTYPE html>
<html lang="el">
  <head>
    <title>Steven Taveras Bio Page</title>
    <meta charset="utf-8">
    <meta name="veiwport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/steventaveras-site.css" type="text/css">
    <style>body{background-image: url("images/contact-bg2.jpg");
	         background-color: rgb(0,0,0);
    </style>
  </head>
  <body>
    <div class="section">
      <div class="nav">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img class="pull-left" class="logo" src="images/StevenTaverasSiteLogo.gif" alt="image of steven taveras logo" title="steventaveras.com">
            </div>
            <div class="col-md-6">
              <ul class="nav nav-tabs" class="pull-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="aboutme.html">About Me</a></li>
                    <li class="active"><a href="contact.html">Contact</a></li>
                <li>
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Gallery<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href="gallery/javascript/index.html">Javascript</a></li>
                      <li><a href="gallery/graphics/index.html">Graphic Design</a></li>
                      <li><a href="gallery/illustrations/index.html">Illustration</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="container">
   <div class="container contact-box">
   	<?php
    		$name = $_POST['name'];
   		$email = $_POST['email'];
    		$message = $_POST['message'];
    		$from = 'From: steventaveras.com'; 
    		$to = 'steventaveras@steventaveras.com'; 
    		$subject = 'Hello';
    		$human = $_POST['human'];
    				
    		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
    				
    		if ($_POST['submit']) {
			if (mail ($to, $subject, $body, $from)) { 
				echo '<p>Your message has been sent!</p>';
			} else { 
				echo '<p>Something went wrong, go back and try again!</p>'; 
			}
		}else if ($_POST['submit'] && $human != '4') {
			echo '<p>You answered the anti-spam question incorrectly!</p>';
		}
				
	?>
   	<header class="body">
    			<h1>Send a Message</h1>
    	</header>
    	<section class="body">
    			    
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
	
    	</section>

    	<footer class="body">
    	</footer>
	<!--<h2 class="text-center">Drop me a line</h2>
   	<div class="inner-cb">
		<div class="container">
                	<fieldset>
				<label>Name:<br />
				<input type="text" name="name" /></label><br />
				<label>Email:<br />
				<input type="text" name="email" /></label><br />
				<label>Telephone (Optional):<br />
				<input type="text" name="telephone" /></label><br />
   				<label>Message:<br />
			   	<textarea type="text" name="message" rows="5" cols="40"></textarea></label><br />
				<button>send</button>
			</fieldset>
	      <h2>Send me an Email</h2>
	          <address>
		   <p><a href="mailto:thedreamsniper@gmail.com">
			thedreamsniper@gmail.com</a></p>
		   <p>118-18 Union Turnpike. Queens, New York</p>
		   </address>
		</div>
   	</div>-->
   </div>
</div>
<br />
<div class="container text-center">
    <ul>
      <li><a href="https://www.facebook.com/steven.taveras1" target="_blank"><img class="iconsize" src="images/facebook.jpg"/></a></li>
      <li><a href="https://www.youtube.com/channel/UCFVYSh4PC84c34Etdagmc1Q" target="_blank"><img class="iconsize" src="images/youtube.jpg"/></a></li>
      <li><a href="https://www.instagram.com/thedreamsniper" target="_blank"><img class="iconsize" src="images/instagram.jpg"/></a></li>
      <li><a href="https://plus.google.com/+StevenTaveras_dreamsniper" target="_blank"><img class="iconsize" src="images/googleplus.jpg"/></a></li>
      <li><a href="https://twitter.com/TheDreamsniper" target="_blank"><img class="iconsize" src="images/twitter.jpg"/></a></li>
      <li><a href="http://dreamsniper.deviantart.com" target="_blank"><img class="iconsize" src="images/deviantart.jpg"/></a></li>
    </ul>
	<p>Copyright © Steven Taveras 2015</p>
</div>
  </body>
</html>
