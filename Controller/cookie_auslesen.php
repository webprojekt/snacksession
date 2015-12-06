<?php 
//Pruefung, ob Cookie gesetzt. Falls nicht dann setzen!
  if (isset($_COOKIE["mail"]) && isset($_COOKIE["pw"])){
	echo (htmlspecialchars($_COOKIE["mail"])).
    echo (htmlspecialchars($_COOKIE["pw"]));
  }
?>