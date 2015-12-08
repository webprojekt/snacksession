<?php
session_start();
$host  = htmlspecialchars($_SERVER["HTTP_HOST"]);
$uri   = rtrim(dirname(htmlspecialchars($_SERVER["PHP_SELF"])), "/\\");
if (isset($_POST["name"]) && $_POST["name"] == "Hans" && $_POST["passwort"] == "geheim") {
  $_SESSION["name"] = "Hans";
  $_SESSION["login"] = "ok";
  $extra = "willkommen.php";
} else {
  $extra = "start.php?f=1";
}
header("Location: http://$host$uri/$extra");
?>