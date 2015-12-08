<?php
session_start();
$host  = htmlspecialchars($_SERVER['HTTP_HOST']);
$uri   = rtrim(dirname(htmlspecialchars($_SERVER['PHP_SELF'])), '/\\');
if (isset($_POST["mail"]) && $_POST['mail'] == 'Hans@hans.de' && $_POST['pw'] == 'geheim') {
  $_SESSION['mail'] = "Hans@hans.de";
  $_SESSION['login'] = "ok";
  $extra = '../dashboard.php';
} else {
  $extra = "../View/login.php?f=1";
}
  
header("Location: http://$host$uri/$extra");
?>