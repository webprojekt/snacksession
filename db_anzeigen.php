<!DOCTYPE html>
<html>
 <head>
  <title>Message verwalten</title>
  <meta charset="UTF-8" />
  <style type="text/css">
  body { font-size: 80%; font-family: sans-serif; }
  ul { width: 40em; }
  li { margin: 10px;}
  </style>
</head>
<body>
<?php
require_once "Controller/db_daten_aktuell.php";
if ($stmt = $mysqli->prepare("SELECT * FROM session WHERE `email` LIKE '%Hans%' ")) {
  $stmt->execute();
  $stmt->bind_result($message, $date, $email);
  echo "<ul>\n";
  while($stmt->fetch()) {
    echo "<li><strong>"
          . htmlspecialchars($date)
          . htmlspecialchars($email)
          . "</strong>: "
	  . htmlspecialchars($message)
	  . "| <a href='bearbeiten.php?id="
	  . (string)$email
	  . "'>bearbeiten</a> "
	  . "| <a href='loeschen.php?id="
	  . (string)$email
	  . "'>löschen</a>"
	  . "</li>\n";
  }
  echo "</ul>\n";
  $stmt->close();
  }
$mysqli->close();
?>
<a href="neu.php">Neue Nachricht eintragen</a>
</body>
</html>

