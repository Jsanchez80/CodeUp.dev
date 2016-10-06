<?php
	///////////////////////////////////////////////////////////////////////////////////
	// 1.  Create a file called counter.php using the page controller template.
	//////////////////////////////////////////////////////////////////////////////////


	///////////////////////////////////////////////////////////////////////////////////
	// 2.  In your HTML, you will need two links. One that says up and another that says down.
	// 		Add a heading that shows a number representing the current counter value. This value will start at zero. 
	// 		When up is clicked, the counter value should increase; when down is clicked, it should decrease.
	// 		The up and down links will send GET requests back to the counter page itself.
	//////////////////////////////////////////////////////////////////////////////////

	///////////////////////////////////////////////////////////////////////////////////
	// 3.  Create a function that will access the $_GET superglobal variable. It should determine what 	the new counter value is and return it.	//////////////////////////////////////////////////////////////////////////////////

	///////////////////////////////////////////////////////////////////////////////////
	// 4.  Use the extract() function to change the return value of the pageController() into variables for your HTML.
	//////////////////////////////////////////////////////////////////////////////////
$counter = isset($_GET['counter']) ? $_GET['counter'] : 0;
$url = "counter.php"


?>


<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
			<style>
				body {
					background: #ffd89b; /* fallback for old browsers */
					background: -webkit-linear-gradient(to left, #ffd89b , #19547b); /* Chrome 10-25, Safari 5.1-6 */
					background: linear-gradient(to left, #ffd89b , #19547b); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        ;
				}
				
				.flex-container {
				    display: -webkit-flex;
				    display: flex;
				    -webkit-flex-flow: row wrap;
				    flex-flow: row wrap;
				    text-align: center;
				}

				.flex-container > * {
					    padding: 15px;
					    -webkit-flex: 1 100%;
					    flex: 1 100%;
				}

				.article {
					font-family: 'Lato', sans-serif;
					text-align: center;
				}

				header {
					font-family: 'Lato', sans-serif;
					background: #2C3E50; /* fallback for old browsers */
					background: -webkit-linear-gradient(to left, #2C3E50 , #4CA1AF); /* Chrome 10-25, Safari 5.1-6 */
					background: linear-gradient(to left, #2C3E50 , #4CA1AF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
					color:white;
					text-align: center;
				}
				footer {
					font-family: 'Lato', sans-serif;
					background: #2C3E50; /* fallback for old browsers */
					background: -webkit-linear-gradient(to left, #2C3E50 , #4CA1AF); /* Chrome 10-25, Safari 5.1-6 */
					background: linear-gradient(to left, #2C3E50 , #4CA1AF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
					color: white;
				}

				.button {
				    display: block;
				    width: 115px;
				    height: 25px;
					background: #000428; /* fallback for old browsers */
					background: -webkit-linear-gradient(to left, #000428 , #004e92); /* Chrome 10-25, Safari 5.1-6 */
					background: linear-gradient(to left, #000428 , #004e92); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
				    margin:10px;
				    padding: 10px;
				    text-align: center;
				    border-radius: 5px;
				    color: white;
				    font-weight: bold;
				    float: left;
				}

				.button1 {
				    display: block;
				    width: 115px;
				    height: 25px;
					background: #000428; /* fallback for old browsers */
					background: -webkit-linear-gradient(to left, #000428 , #004e92); /* Chrome 10-25, Safari 5.1-6 */
					background: linear-gradient(to left, #000428 , #004e92); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
				    margin:10px;
				    padding: 10px;
				    text-align: center;
				    border-radius: 5px;
				    color: white;
				    font-weight: bold;
				    float: right;
				}

				hr {

				}

				li {
					text-align: center;
				}

				.nav {
					background:#eee;
				}

				.nav ul {
					list-style-type: none;
				 	padding: 0;
				}
					   
				.nav ul a {
				 text-decoration: none;
				}

				@media all and (min-width: 768px) {
				
				.nav {
					text-align:left;
					-webkit-flex: 1 auto;
					flex:1 auto;
					-webkit-order:1;
					order:1;
				}
				
				.article {
					-webkit-flex:5 0px;
					flex:5 0px;
					-webkit-order:2;
					order:2;
				}
				
				footer {
					-webkit-order:3;
					order:3;}
				}

				img {
					float: right;
					height: 15%;
					width: 15%;
				}

			</style>
		</head>
		<body>
		<div class="container">
			<header>
				<h1>This page has been viewed: <?= $counter;?></h1>
			</header>
				<a  class="button" href="<?=$url; ?>?counter=<?= $counter + 1?>">Up</a>
				<a class="button1" href="<?=$url; ?>?counter=<?= $counter - 1?>">Down</a>
				<hr class="hr">
			<nav>
			  <ul>
			    <li><a href="#">RollyPolly</a></li>
			    <li><a href="#">OrQa</a></li>
			    <li><a href="#">Arachnid</a></li>
			  </ul>
			  <hr>
			</nav>
			<article class="article">	
			  <h1>RollyPolly</h1>
			  <p>RollyPolly is EVOQ's premiere security system.  The system ensures content is not viewed/received by unauthorized users.  Utilizing a dynamic framework, you'll be impressed with the system's robust design catered toward protecting and initializing reverse attacks on inturders against your system.</p>
			  <p>RollyPolly II is slated for an early 2017 release.</p>
			</article>
			<footer><h3>Powered by: RollyPolly</h3><img src="/Img/rollypolly.png">
				<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
				<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
				<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
				<link rel="manifest" href="/manifest.json">
				<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
				<meta name="theme-color" content="#ffffff">
			</footer>
		</div>
		</body>
	</html>