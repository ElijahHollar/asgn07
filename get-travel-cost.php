<html>
  <head>
    <title>Game Character</title>
    <link rel ="stylesheet" type="text/css" href="../css/styles.css">
  </head>
  <body>
  <?php
    include_once("inc-travel-object.php");

    $travelCosts = new Travel;

    print("<h1>Travel Costs</h1>");

    $travelCosts->setDestination("Tokyo");
    $travelCosts->setNumTravelers(3);

    print("<p>Air fare to ".$travelCosts->getDestination()." for ".$travelCosts->getNumTravelers()." travelers is $".number_format($travelCosts->getAirFare(), 2)." and the cost of a hotel is $".number_format($travelCosts->getHotelCost(), 2).".</p>");

    $travelCosts->setDestination("Rome");
    $travelCosts->setNumTravelers(2);

    print("<p>Air fare to ".$travelCosts->getDestination()." for ".$travelCosts->getNumTravelers()." travelers is $".number_format($travelCosts->getAirFare(), 2)." and the cost of a hotel is $".number_format($travelCosts->getHotelCost(), 2).".</p>");

    $travelCosts->setDestination("Sydney");
    $travelCosts->setNumTravelers(5);

    print("<p>Air fare to ".$travelCosts->getDestination()." for ".$travelCosts->getNumTravelers()." travelers is $".number_format($travelCosts->getAirFare(), 2)." and the cost of a hotel is $".number_format($travelCosts->getHotelCost(), 2).".</p>");

    $travelCosts->setDestination("London");
    $travelCosts->setNumTravelers(1);

    print("<p>Air fare to ".$travelCosts->getDestination()." for ".$travelCosts->getNumTravelers()." travelers is $".number_format($travelCosts->getAirFare(), 2)." and the cost of a hotel is $".number_format($travelCosts->getHotelCost(), 2).".</p>");

    $travelCosts->setDestination("Paris");
    $travelCosts->setNumTravelers(2);

    print("<p>Air fare to ".$travelCosts->getDestination()." for ".$travelCosts->getNumTravelers()." travelers is $".number_format($travelCosts->getAirFare(), 2)." and the cost of a hotel is $".number_format($travelCosts->getHotelCost(), 2).".</p>");
  ?>
  <p><a href="index.php">Return to Asgn07 Index Page</a></p>
  </body>
</html>
