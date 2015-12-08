<?php 
//Pruefung, ob Cookie gesetzt. Falls nicht dann setzen!
  if (isset($_COOKIE["email"]) && isset($_COOKIE["passwort"])){
	echo (htmlspecialchars($_COOKIE["email"])).
    echo (htmlspecialchars($_COOKIE["passwort"]));
  }
?>