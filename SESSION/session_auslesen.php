<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Session verwenden</title>
  <meta charset="UTF-8" />
</head>
<body>
<?php
if (isset($_SESSION["name"]) && isset($_SESSION["farbe"])) {
  echo "Die geschriebenen Werte sind: <br />";
  echo "Name: {$_SESSION['name']} <br />\n";
  echo "Farbe: {$_SESSION['farbe']} <br />\n";
} else {
  echo "Noch keine Session gesetzt";
}

?>
</body>
</html>
