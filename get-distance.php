<html>
<head>
	<title>Game Character</title>
	<link rel ="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
<?php
  include_once("inc-travel-object.php");

  $cityDistance = new Travel;

  print("<h1>Distance to Cities</h1>");

  $cityDistance->setDestination("Tokyo");

  print("<p>You are ".$cityDistance->getDistance()." miles from ".$cityDistance->getDestination().".</p>");

  $cityDistance->setDestination("Rome");

  print("<p>You are ".$cityDistance->getDistance()." miles from ".$cityDistance->getDestination().".</p>");

  $cityDistance->setDestination("Sydney");

  print("<p>You are ".$cityDistance->getDistance()." miles from ".$cityDistance->getDestination().".</p>");

  $cityDistance->setDestination("London");

  print("<p>You are ".$cityDistance->getDistance()." miles from ".$cityDistance->getDestination().".</p>");

  $cityDistance->setDestination("Paris");

  print("<p>You are ".$cityDistance->getDistance()." miles from ".$cityDistance->getDestination().".</p>");
?>
</body>
</html>
