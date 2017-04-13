<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Oxygen+Mono|Space+Mono" rel="stylesheet">

	<title>Damhan Richardson</title>
</head>

<body>


	<div id="header-div">

		<header>
			<ul id="navbar">
				<li class="navbar-li-e"><a class="navbar-links" href="#about">Home</a></li>
				<li class="navbar-li-e"><a class="navbar-links" href="#projects"> | Projects</a></li>
				<li class="navbar-li-e"><a class="navbar-links" href="#contact"> | Contact</a></li>
			</ul>

			<p id="header-title">damhanrichardson@gmail.com</p>
		</header>

	</div>


	<div id="header-img-container">
		<div id="textcontainer">
		<h1 id="header-image-title">Damhan Richardson</h1>
		<p id="header-image-text">Developer, Problem Solver, Creator.</p>
		</div>
	</div>


	<div class="seperator">
		<a class="sep-text" name="about">About</a>
	</div>


	<div class="main-text-wrapper">
		<p class="main-text">My name is Damhan Richardson.
		<br>I'm currently studying Computer Applications at Dublin City University & currently in second year. I've an interest in web development and also solving problems using languages like Python and Java.
		<br><br>//add more
		<br><br><br><br><br><br><br><br><br><br><br>
		</p>
	</div>


	<div class="seperator">
		<a class="sep-text" name="projects">Projects</a>
	</div>

	<div class="main-text-wrapper">
		<p class="main-text">All my projects can be found on <a class="main-text-links" href=http://github.com/Damhan>my github</a>.<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>
	</div>

	<div class="seperator">
		<a class="sep-text" name="contact">Contact</a>
	</div>

	<div class="main-text-wrapper">

		<div id="contact-text-wrapper">

		<p class="contact-text"> Feeling talkative? Why not drop me a line. Just fill out the contact form here to send me an email and I'll get back to you as soon as possible. </p>

		</div>

		<?php

			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];

			$from = 'From: Contact Form';
			$to = 'damhanrichardson@gmail.com';
			$subject = 'Contact Form Enquiry';

			$body = "From: $name\n E-mail: $email\n Message: $message\n";

			if ($_POST['submit']) {
				mail($to,$subject,$body,$from);
				echo '<script> alert("Your message has been sent!")</script>';
			}
		 ?>
	   	<form method="post" action="index.php" id="contact-form">

    		<label>Name</label>
        	<input name="name" placeholder="Enter your full name.">

        	<label>E-mail</label>
        	<input name="email" type="email" placeholder="Enter your email address.">

        	<label>Message</label>
        	<textarea name="message" placeholder="Your message here."></textarea>

        	<input id="submit" name="submit" type="submit" value="Submit">

		</form>

	</div>


	<footer>
		<p id="footer-text"> &copy Damhan Richardson 2017</p>
	</footer>


</body>



</html>
