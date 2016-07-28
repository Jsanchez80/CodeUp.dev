<!DOCTYPE html>
<html>
<?php
		var_dump($_GET);
		var_dump($_POST);
	?>
	<head>
		<meta charset="utf-8">
		<title>My First HTML Form</title>
	</head>
	<body>
	<a href="Username">Click me to focus the username field</a>
	<a id="form"></a>
	<h2>User Login</h2>
	<form method="POST" action="codeup.dev/my_first_form.php">
		<input type="hidden" id="user_id" name="user_id" value="1234">
		 <p>
			<label for="username">Username</label>
			<input id="username" name="username" text="username" Placeholder="Enter Username Here">
		</p>
		<p>
			<label for="password">Password</label>
			<input id="password" name="password" type="password" placeholder="Enter Password Here">
		</p>
		<p>
			<button type="submit">Login</button>
			<a href="codeup.dev/my_first_form.php">Register</a>
		</p>
		<p>
	</form>
	<!--Make sure to close all form tags ex. <form> with the proper tag or your server will give you an error report in the form of NOT FOUND or 403/404.  If you see these messages or the form doesn't work, check to make sure you've closed the form tag properly ex. </form>. !-->
	<form method="GET" action="http://www.duckduckgo.com">
				<input type="text" name="q">
				<input type="submit">
	</form>
		</p>
		<P> 
			<h2>Compose an email:</h2></P>
			<form method="POST" action="codeup.dev/my_first_form.php">
				<label for="To:">To:</label>
				<input id="username" name="username" type="text" Placeholder="Enter Recipient">
				<label for="CC:">CC:</label>
				<input id="username" name="username" type="text" Placeholder="Enter CC Recipient">
				<label for="BCC:">BCC:</label>
				<input id="username" name="username" type="text" Placeholder="Enter BCC Recipient ">
				<br>
				<br>
				<br>
				<label for="Subject">Subject:</label>
				<input id="username" name="username" type="text" Placeholder="Enter Subject Title">
			</form>
		</p>
		<h2>Body</h2>
		<p>
			<form method="POST" action="codeup.dev/my_first_form.php">
				<textarea id="email_body" name="email_body" rows="5" cols="40">Type Content Here...</textarea>
			<br>
				<input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked>
				<label for="mailing_list">Save a copy to your sent folder?!</label>
		</p>
				<button type="submit">Send</button>
				<button type="submit">Attach</button>
			</form>
		<h3>Select Testing</h3>
			<label for="How is your day?">How is your day?</label>
			<select id="How is your day?" name="How is your day?">
				<option value="1">Great</option>
				<option value="2">Mehhh</option>
			</select>
		<p>What is 15+15??</p>
			<label>
				<input type="radio" name="q1" value="15">
				15
			</label>
			<label>
				<input type="radio" name="q1" value="30">
				30
			</label>
			<label>
				<input type="radio" name="q1" value="25">
				25
			</label>
			<label>
				<input type="radio" name="q1" value="2">
				2
			</label>
		<p>	
			<label for="os">Which Cities are in Texas?</label>
		</p>	
				<select id="os" name="os[]" multiple>
					<option value="houston">Houston</option>
					<option value="San Francisco">San Francisco</option>
					<option value="austin">Austin</option>
					<option value="san antonio">San Antonio</option>
				</select>
			</label>
	</form>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
<!--anchor tag link that searched Reddit for "javascript" and sorts by top!-->
	<a href="https://www.reddit.com/search?q=javascript&sort=new" target="_blank">Search Reddit for Javascript and sort results by best</a>
			<br>
<!--Search input that searches Reddit for your search term sorts by top !-->
			<h3>Search Reddit, and sort results by 'top'</h3>
		<form method="GET" action="https://www.reddit.com/search" target="_blank">
				<input type="text" name="q" placeholder="Search Reddit for stuff">
				<input type="hidden" name="sort" value="top">
				<button type="Search">Search</button>
		</form>
	</body>

</html>
