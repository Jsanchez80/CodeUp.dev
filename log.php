<?php


/////////////////////////////////////////////////////////////////////////////////////////// 
// 1.  Create a file in your exercises directory called Log.php. The naming here is important; this file will contain a class called Log that will be the wrapper for your logger functions. Filenames for classes should match their class name.
///////////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////////////////
// 2.  In your Log class you will need:
///////////////////////////////////////////////////////////////////////////////////////////

// 		* A method called logMessage() that will take in a log level and message as before. It will open the file stored in $filename for appending, output the message in the same format as before, and then close the handle.

// function logMessage($logLevel, $message)

// {

// 	// $year = date(DATE_ATOM);
// 	// 		* A property called $filename where you store the name of the file for the log.
	

// }

// // 		* Methods info() and error() that will take in a message and forward it on to logMessage() along with the relevant log level.
// class Log
// {
// 	public $filename;

// 	public function logInfo() {

// 		$message = "You should have asked for more Info!";


// } return $this ->todaysDate "{$message}" . PHP_EOL;

// 	public $filename;

// 	public function logError() {

// 		$message = "You should have tried something else!";

// } return $this ->todaysDate . "{$message}" . PHP_EOL;



class Log {
	public $filename;
	public $datetime;
	public $handle;

	function logMessage($logLevel, $message)
	{
		$string = "{$this->$datetime} $logLevel $message" . PHP_EOL;
			fwrite($this->handle, $string);
	}

	function info()
	{
		$this->logMessage("INFO", "This is the first info message.");

	}

	function error()
	{
		$this->logMessage("ERROR", "This is the secondinfo message.");
	}

}

