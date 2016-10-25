<?php
////////////////////////////////////////////////////////////////////////////////////////////////
// 1.  Create a class called Auth. Your Auth.php file will need to require_once your Log.php file.
///////////////////////////////////////////////////////////////////////////////////////////
	require_once('log2.php');
class Auth 
{
	public static $redirect = "/php/login2.php";	
	public static $authorized = "/php/authorized.php";
	
////////////////////////////////////////////////////////////////////////////////////////////////
// 2.  We will store the password as a static property of the Auth class. Storing the password as plain text however would be very dangerous. Instead, we will be hashing the password. Hashing is a process that takes a plain text value and converts it into a scrambled, predictable value, but which cannot be converted back to the original string. Add the following to your Auth class:
///////////////////////////////////////////////////////////////////////////////////////////
	
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';


///////////////////////////////////////////////////////////////////////////////////////////////
//  3.  Your auth class needs four static methods: Auth::attempt($username, $password), Auth::check(), Auth::user(), and Auth::logout().
// 
		
		// You will need to use the PHP method password_verify() to check the password hash.
// Auth::check() will return a boolean whether or not a user is logged in.
// Auth::user() will return the username of the currently logged in user.
// Auth::logout() will end the session, just like we did in the sessions exercise.
///////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////
// Auth::attempt() will take in a $username and $password. 
// 		// If the $username is guest and the $password matches the hashed password above then set the LOGGED_IN_USER session variable as before. 
//////////////////////////////////////////////////////////////////////////////////////////////
public static function attempt($username, $password)
{

	$attemptedPassword = $password;
	// $hash = $password;
	$isMatch = password_verify ($password, self::$password);
	if($username == 'nico' && $isMatch)
	 {
	 	return true;

	 } else { 

	 	return false;
	 }
} 







public static function check()
{
	if($username && $password = true)
	{	
		session_start();
		return true;
	} else {
		return false;
	}

} 







public static function user()
{
	if($username == $_SESSION['Logged_in'] && $_SESSION['userIsLoggedIn'] == true) {
		header("Location: $authorized");
		// echo "Welcome to the members area," . $_SESSION . "!" . PHP_EOL;
		return($username);

	} else {
		header("Location: $redirect");
		// echo "Please log in first to see this page.";
		die;
	}
	
} 






public static function logout()
{
	session_unset();

    // delete session data on the server
    session_destroy();

    // ensure client is sent a new session cookie
    session_regenerate_id();

    // start a new session - session_destroy() ended our previous session so
    // if we want to store any new data in $_SESSION we must start a new one
    session_start();

}


///////////////////////////////////////////////////////////////////////////////////////////////
// 4.  Update login.php, authorized.php, and logout.php to require_once the Auth.php and Input.php files.
///////////////////////////////////////////////////////////////////////////////////////////

// Completed.


///////////////////////////////////////////////////////////////////////////////////////////////
// 5.  Use Input::get() to retrieve the values submitted to your form and pass them on to your Auth methods. Test to make sure you can log in and log out as before, and that appropriate information is being logged.
///////////////////////////////////////////////////////////////////////////////////////////



///////////////////////////////////////////////////////////////////////////////////////////////
// 6.  commit your changes to git and push to GitHub.
///////////////////////////////////////////////////////////////////////////////////////////
}