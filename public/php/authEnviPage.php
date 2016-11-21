<?php
require_once 'header_footer.html';

session_start();
// <!-- Create a file named authorized.php in your codeup.dev site. Add some HTML that simply says "Authorized" when it is viewed in the browser. -->

function pageController()
{
// 1.  Create a file named login.php in your codeup.dev site. Add a form that accepts a username and password and have the form submit to the same page (login.php).

// Check to see if the form was submitted without var_dumping: will post in the console:
// place the term "die();" after the header in so that the process stops the operation.
$redirect = "/html/newLogin.html";	
	alert("You have not logged in. To login please enter username and password. ")
// Add a check to the authorized.php page to see if the user is logged in by checking the userIsLoggedIn key. If they are, redirect to the authorized.php page instead of showing the login page.


if (isset($_SESSION['login_user']) && isset($_SESSION['userIsLoggedIn'])) {
	 		$username = $_SESSION['login_user'];
	 		
	} else {
			header("Location: $redirect");	
			die();
	} 

	return [
	'username' => $username,
	];
	
	
} 
 extract(pageController());

?>

<!DOCTYPE html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<title>Welcome <?= $username ?></title>
		<link rel="stylesheet" type="text/css" href="/css/newLogin.css">
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<script src="/js/modernizr.custom.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
	</head>
	<body>
	<!-- NavBar -->
		<nav  class="fixed-nav-bar">
  		<div class="container-fluid">
   			<div class="collapse navbar-collapse main-nav">
   				<a class="navbar-brand" href="index.html#wrap">EVOQ</a>
   				<div>
					<?php 'header_footer.html' ?>
					<h3>Welcome <?= $username ?></h3> 
				</div>     
   				
   				<ul class="nav navbar-nav navbar-right">
   				<li><a href="#about">About</a><span class="hover-li"></span></li>
   				<li><a href="#howTo">How To</a><span class="hover-li"></span></li>
   				<li><a href="#starterKits">Starter Kits</a><span class="hover-li"></span></li>
   				<li><a href="#contact">Contact</a><span class="hover-li"></span></li>
      			<li><a class="navbar-brand" href="/php/authEnvi.php" data-toggle="modal" data-target="#login-modal">Sign In</h5></a><span class="hover-li"></span></li>
      			</ul>
    		</div>
  		</div>
		</nav>
		
  		
    


		<section id="about" class="smooth">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="title text-center wow zoomIn">
						<hr>
							<h1>ABOUT</h1>
							<span class="title line"></span>
						</div>
					</div>
				</div>
			<div class="row">
				<div class="col-sm-6 text-center wow fadeInLeft">
					<img src="/Img/freedom.png" alt="Jane Doe" class="img-responsive portrait">
				</div>
				<div class="col-sm-6 wow fadeInRight">
					<div class="about-text">

		
		
					<p><h4> If you love your vehicle and love keeping it shiny and clean, then prepare to become the ENVI of your neighborhood. With ENVI Waterless Auto Spa you’ll discover a new standard of excellence in automotive care. Our foundation is built on ENVIronmental friendliness, convenience, quality and value.</h4></p>

					<p><h4>ENVIronmental Friendliness: Our unique formulas allow us to clean, polish and protect your vehicles finish without water; This eliminates 100’s of gallons of wastewater from entering our environment and polluting our natural resources.</h4></p>

					<p><h4>CONVENIENCE:  WE COME TO YOU! Anywhere within the San Antonio Metropolis, anytime(Additional mileage may be charged for outer lying counties).</h4></p>

					<p><h4>QUALITY: You can expect a quality hand washed vehicle, scratch free, streak free with a shine and finish that lasts weeks not days(as long as the surface is not excessively soiled with dirt, mud or gritty sand).</h4></p>

					<p><h4>VALUE: No matter your budget, ENVI Waterless Auto Spa has a package to meet your needs. Continued use of our services will enhance your vehicles ability to repel dirt, bead water and maintain luster longer.
					</h4></p>

					</div>
					</div>
					</div>
				</div>
			</div>
			<hr>
		</section>
	
		
		<!-- Modal Begin -->
		<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    		<div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Sign In to EVOQ</h1><br>
				  <form>
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="pass" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit">2
				  </form>
					
				<div class="login-help">
					<a href="#">Register</a> - <a href="#">Forgot Password</a>
				</div>
			</div>
			</div>
		</div>
		<!-- Modal End -->

		<!-- JS for the smooth scroll -->
		<script>
			$('.smooth').on('click', function() {
			    $.smoothScroll({
			        scrollElement: $('body'),
			        scrollTarget: '#' + this.id
			    });
			    
			    return false;
			});
		</script>

	</body>
</html>
