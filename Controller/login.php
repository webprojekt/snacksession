<?php
session_start();
$host  = htmlspecialchars($_SERVER['HTTP_HOST']);
$uri   = rtrim(dirname(htmlspecialchars($_SERVER['PHP_SELF'])), '/\\');
$email = htmlspecialchars($_COOKIE["email"]);
$passwort = htmlspecialchars($_COOKIE["passwort"]);
if (isset($_POST["email"]) 
      && $_POST['email'] == "hans@zimmer.de" 
      && md5($_POST['passwort'] == "e8636ea013e682faf61f56ce1cb1ab5c")) {
  $_SESSION['Name'] = "Hans";
  $_SESSION['login'] = "ok";
  $extra = 'dashboard.php';
} else {
  $extra = "View/login.php?f=1";
}
  
header("Location: http://$host$uri/$extra");
?>
