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
$_SESSION["name"]  = "Marie";
$_SESSION["farbe"] = "rot";
echo "Dieses Mal werden Werte über Sessions gesetzt. ";
echo "Hier können Sie sie auslesen <a href='session_auslesen.php?"
        . session_name()  . "=" 	
	. session_id() 
	. "'>session_auslesen.php</a>";
?>
</body>
</html>
