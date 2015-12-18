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
if ($stmt = $mysqli->prepare("SELECT message, date, email FROM session")) {
  $stmt->execute();
  $stmt->bind_result($message, $date, $email);
  echo "<ul>\n";
  while($stmt->fetch()) {
    echo "<li><strong>"
          . htmlspecialchars($titel)
          . "</strong>: "
	  . htmlspecialchars($text)
	  . "| <a href='bearbeiten.php?id="
	  . (int)$id
	  . "'>bearbeiten</a> "
	  . "| <a href='loeschen.php?id="
	  . (int)$id
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

