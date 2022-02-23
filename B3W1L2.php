<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>

<h1>
	<?php 
		echo "Hello World!";

		define("joe", "Hello World!");
		echo joe;

		$joejoe = "Learning PHP";
		$joejoe = joe;
		echo joe;
	?>
</h1>

<h1>
	<?php 
		$joe = "Hello ";
		$joejoe = "World!";
		echo $joe, $joejoe;
	 ?>
</h1>

<h1>
	<?php 
		$array = ["Hello ", "World!"];
		echo $array[0] . $array[1];
	 ?>
</h1>

</body>
</html>