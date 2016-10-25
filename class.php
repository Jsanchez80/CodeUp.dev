<?php

class Animal
{
	public $race;
	public $name;

	public function _construct($str1, $str2)
	{
		$this->name = $str1;
		$this->name = $str2;
	}

	public function _destruct()
	{
		echo "The {$this->race} named {$this->name} was adopted in:" . date("Y-m-d") . "<br>";
	}
}

$cat = new Animal ('Kitty', 'Cat');
$dog = new Animal ('Roger', 'Dog');

echo "{$cat->name} is {$cat->race}" . PHP_EOL;
echo  "{$dog->name} is {$dog->race}" . PHP_EOL;
echo  "<br>End of the code<br><br>";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Page Title</title>
	</head>
	<body>
		<h1>This is a Heading</h1>
		<p>This is a paragraph.</p>
	</body>
</html>