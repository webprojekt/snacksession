<?php
session_start();
if (isset($_SESSION["login"]) && $_SESSION["login"] == "ok") {
?>
  
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="Teilen von Erinnerungen über die Cloud">
  <meta name="author" content="Besart Pllana">
  <title>Start</title>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– 
 
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/custom.css">-->
  <link rel="stylesheet" href="View/css/bootstrap.css">
  <link rel="stylesheet" href="View/css/navbar.css">
  <link rel="stylesheet" href="View/css/footer.css">

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
            aria-controls="navbar">
              <span class="sr-only">navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="start.html">Web Technologien</a>
          </div>
    
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="start.html">Start</a></li>
              <li><a href="View/info.php">Info</a></li>
              <li><a href="View/contact.php">Kontakt</a></li>
              <!--aktuelle Email anzeigen, falls Benutzer in eine Session -->
              <li class="active" id=""><a><?php
                  echo $_SESSION['email'];
               ?></a></li>
          <li><a href="Controller/logout.php">Abmelden</a></li>
          
    
            </ul>
          </div>
          <!--/.nav-collapse -->
        </div>
      </nav>
      <!-- end navbar -->

  <div class="container">
    <div class="page-header">
      <?php
        echo "<h1>Hallo {$_SESSION['email']}.</h1>";
      ?>
    <form class="page-header" >
      <p>
        <textarea id="textfeld" class="form-control" placeholder="Nachricht ..." rows="4" required></textarea>
      </p>
      <p>
        <input id="btnSpeichern" onclick="speichern()" class="btn btn-primary btn-lg btn-block" type="submit" value="Speichern"></input>
      </p>
    </form>
  </div>

  <!--start-container -->
  <div class="container">
    <div class="cell-header">
    </div>
    <div class="list-group">
      <?php
        require_once "Controller/db_daten_aktuell.php";
        if ($stmt = $mysqli->prepare("SELECT * FROM session WHERE `email` LIKE '%Hans%' ")) {
          $stmt->execute();
          $stmt->bind_result($message, $date, $email);
          
          while($stmt->fetch()) {
            echo  "<a href='#' class='list-group-item'>"
                  . "<h4 id='item1' href='#' class='list-group-item-heading'>"
                  . htmlspecialchars($message)
                  . "</h4>"
                  . "<p id='dateItem1' class='list-group-item-text'>"
                  . htmlspecialchars($date)
                  .  "</p>"
            . "<a type='button' class='btn btn-success href='bearbeiten.php?id=" 
            . (string)$email
            . "'>bearbeiten</a> "
            . "<a type='button' class='btn btn-danger href='loeschen.php?id=" 
            . (string)$email
            . "'>löschen</a>"
            . "\n";
          }
          echo "</a>\n";
          $stmt->close();
          }
        $mysqli->close();
       ?>
    </div>
  </div>
  <!--end-container-->
  
  <footer class="footer">
    <div class="container">
      <p class="text-muted"> &copy; Besart Pllana</p>
    </div>
  </footer>
  
      <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="Controller/js/jquery.min.js"></script>
  <script src="Controller/js/bootstrap.min.js"></script>
  <script src="Controller/js/myscript.js"></script>
</body>
</html>

</body>
</html>
<?php
} else {
  $host  = htmlspecialchars($_SERVER["HTTP_HOST"]);
  $uri   = rtrim(dirname(htmlspecialchars($_SERVER["PHP_SELF"])), "/\\");
  $extra = "Controller/loginfenster.php";
  header("Location: http://$host$uri/$extra");
}
?>