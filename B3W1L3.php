<!DOCTYPE html>
<html>
<head>
	<title>Lab 3</title>
</head>
<body>

<?php 

	$first = mt_rand(1,10);
	$second = mt_rand(1,10);

	echo $first . " x " . $second . " = " . ($first * $second) . "<br>";
	echo $first . " + " . $second . " = " . ($first + $second) . "<br>";
	echo $first . " - " . $second . " = " . ($first - $second) . "<br>";
	echo $first . " : " . $second . " = " . ($first / $second) . "<br>";
	echo "<br>";


	function tafel($qty){
		for($i = 1; $i <= 10; $i++){
			echo $i . " x " . $qty . " = " . ($i * $qty) . "<br>";
		}
	}
	tafel(6);
	echo "<br>";


	$number = [3, 5, 8, 12];
	
	foreach ($number as $value){
		for($i = 1; $i <= 10; $i++){
			echo $i . " x " . $value . " = " . ($i * $value) . "<br>";
		}
		
		echo "<br>";
	}

?>

</body>
</html>