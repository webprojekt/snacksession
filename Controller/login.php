<?php
  session start();
  $host = htmlspecialchars($_SERVER("HTTP_HOST"));
  $url  = rtrim(dirname(htmlspecialchars($_SERVER["PHP_SELF"])), "/\\");
  
  if (isset($_POST["mail"]) && $_POST["pw"] == "pw" && $_POST["mail"] == "bes@pllana.de") {
    $_SESSION["name"] = "Besart";
    $_SESSION["login"] = "Okay";
    $extra = "../dashboard.php";
    
  } else {
    $extra = "../start.php?pw=1";
  }
  header("Location: http://$host$uri/$extra");
?>