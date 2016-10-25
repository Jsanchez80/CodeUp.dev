<?php
// require_once'auth.php';
// <!-- Create a file named authorized.php in your codeup.dev site. Add some HTML that simply says "Authorized" when it is viewed in the browser. -->
session_start();

function pageController()
{

clearSession();

    return [];

}
function clearSession()
{
    // clear $_SESSION array
    session_unset();

    // delete session data on the server
    session_destroy();

    // ensure client is sent a new session cookie
    session_regenerate_id();

    // start a new session - session_destroy() ended our previous session so
    // if we want to store any new data in $_SESSION we must start a new one
    session_start();
}

	
	

	extract(pageController());

?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/authorized.css">
        <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic|Cinzel:400,700,900' rel='stylesheet' type='text/css'>
    </head> 
    <body>
    <div>
        <?php 'header_footer.html' ?>
        <h3>Thank you for visiting: To protect your privacy please close browser window.</h3>
    </div>     
    </body>
</html>