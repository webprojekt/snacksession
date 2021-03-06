<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="Teilen von Erinnerungen über die Cloud">
  <meta name="author" content="Besart Pllana">
  
  <title>Login</title>
  
  <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="../View/css/bootstrap.css">
  <link rel="stylesheet" href="../View/css/signin.css">
  <link rel="stylesheet" href="../View/css/footer.css">

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
				<a class="navbar-brand" href="../start.html">Web Technologien</a>
			</div>

			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="../start.html">Start</a></li>
					<li><a href="../View/info.php">Info</a></li>
					<li><a href="../View/contact.php">Kontakt</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>
  <!-- end navbar -->
  
    <div class="container">
      <form class="form-signin" action="login_md5.php" method="post">
        <h2 class="form-signin-heading">Bitte einloggen</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email Addresse" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="passwort" id="inputPassword" class="form-control" placeholder="Passwort" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="checkbox" value="remember-me"> Angemeldet bleiben </input>
          </label>
        </div>
          <input type="submit" class="btn btn-lg btn-primary btn-block" value="Anmelden"></input>
          <?php
            if (isset($_GET["f"]) && $_GET["f"] == 1) echo "<p class='btn btn-danger btn-block'>Login-Daten nicht korrekt</p>"
          ?>
      </form>
      
      
    </div>
    <!--end-container-->

  <footer class="footer">
    <div class="container">
      <p class="text-muted"> &copy; Besart Pllana</p>
    </div>
  </footer>
  
  
        <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="js/jquery.min.js"></script>
  <script src="js/myscript.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>


</html>