<!DOCTYPE html>
<html>
<head>
	<title>Lab 4</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php 
	date_default_timezone_set('Europe/Amsterdam');

	$date = date("H:i");

	if ($date > "06:00" && $date < "12:00"){
		$url = 'images/morning.png';
		$greet = "Goedemorgen!";
	}

	elseif ($date > "12:00" && $date < "18:00"){
		$url = 'images/afternoon.png';
		$greet = "Goedemiddag!";
	}

	elseif ($date > "18:00" && $date < "00:00"){
		$url = 'images/evening.png';
		$greet = "Goedeavond!";
	}

	else {
		$url = 'images/night.png';
		$greet = "Goedenacht!";
	}

	
?>

<h1><?php echo $greet . "<br>" . "Het is nu " . $date; ?></h1>

<style type="text/css">
	body{
		background-image: url(<?php echo $url ?>);
		background-size: cover;
	}
	h1{
		color: white;
		text-align: center;
		padding: 20%;
	}
</style>

</body>
</html>