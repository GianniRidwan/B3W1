<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>

<?php 
echo "Hello World!<br>";

define("greet", "Hello World!<br>");
echo greet;

$learn = "Learning PHP";
$learn = greet;
echo $learn;

?>

<h1>
	<?php 

		$hello = "Hello";
		$world = "World!";
		echo $hello . " " . $world;

		$array = ["Hello", "World!"];
		echo $array[0] . " " . $array[1];

	?>
</h1>

</body>
</html>