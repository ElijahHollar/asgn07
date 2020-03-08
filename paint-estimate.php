<!DOCTYPE html>
<!--	Author: 
		Date:	
		File:	paint-estimate.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="../css/styles.css">
</head>

<body>
	<h1>Paint Estimate</h1>
<?php

	// your code here

	$height = $_POST["height"];
	$length = $_POST["length"];
	$width = $_POST["width"];

	include_once("inc-rectangle-object.php");

	$longWall = new Rectangle;
	$shortWall = new Rectangle;

	$longWall->setX($height);
	$longWall->setY($width);

	$shortWall->setX($height);
	$shortWall->setY($length);

	$longWallArea = $longWall->getArea();
	$shortWallArea = $shortWall->getArea();
	
	$totalArea = $longWallArea * 2 + $shortWallArea * 2;
	
	print("The total area is $totalArea square feet.");
?>
</body>
</html>