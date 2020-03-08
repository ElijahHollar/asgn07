<html>
<head>
	<title>Game Character</title>
	<link rel ="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
<?php
  include("inc-game-character-object.php");
  
  $bracknar = new GameCharacter;
  $malire = new GameCharacter;

  $bracknar->set_Player_Name("Randy");
  $bracknar->set_Score(123);

  $malire->set_Player_Name("John");
  $malire->set_Score(101);

  print("<table>");
  print("<tr>
          <th>Player</th>
          <th>Score</th>
        </tr>");
  print("<tr>
          <td>".$bracknar->get_Player_Name()."</td>
          <td>".$bracknar->get_Score()."</td>
        </tr>");
  print("<tr>
          <td>".$malire->get_Player_Name()."</td>
          <td>".$malire->get_Score()."</td>
        </tr>");
  print("</table>");

  if( $bracknar->get_Score() > $malire->get_Score()) {
    print("<p>Bracknar is the winning character!</p>");
  }
  elseif( $malire->get_Score() > $bracknar->get_Score()) {
    print("<p>Malire is the winning character!</p>");
  }
?>
<p><a href="index.php">Return to Asgn07 Index Page</a></p>
</body>
</html>