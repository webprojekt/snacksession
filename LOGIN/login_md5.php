<?php
session_start();
$host = htmlspecialchars($_SERVER["HTTP_HOST"]);
$uri  = rtrim(dirname(htmlspecialchars($_SERVER["PHP_SELF"])), "/\\");
if (isset($_POST["name"]) 
    && $_POST["name"] == "Hans" 
    && md5($_POST["passwort"]) == "e8636ea013e682faf61f56ce1cb1ab5c") {
   $_SESSION["name"] = "Hans";
   $_SESSION["login"] = "ok";
   $extra = "willkommen.php";
 } else {
   $extra = "start.php?f=1";
 }
 header("Location: http://$host$uri/$extra");
 ?>
