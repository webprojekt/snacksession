<?php
setcookie("email", "Hans@zimmer.de", time()+7200);
setcookie("passwort", "e8636ea013e682faf61f56ce1cb1ab5c", time()+7200);
?>
<?php
session_start();
$host = htmlspecialchars($_SERVER["HTTP_HOST"]);
$uri  = rtrim(dirname(htmlspecialchars($_SERVER["PHP_SELF"])), "/\\");
if (isset($_POST["email"]) 
    && $_POST["email"] == "Hans@zimmer.de" 
    && md5($_POST["passwort"]) == "e8636ea013e682faf61f56ce1cb1ab5c") {
      $_SESSION["email"] = "Hans@zimmer.de";
      $_SESSION["login"] = "ok";
      $extra = "../dashboard.php";
 } else {
   $extra = "loginfenster.php?f=1";
 }
 header("Location: http://$host$uri/$extra");
 ?>
