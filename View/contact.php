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
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/footer.css">
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
					<li><a href="info.php">Info</a></li>
					<li  class="active"><a href="contact.php">Kontakt</a></li>
          
				</ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>
    <!-- end navbar -->
  <div class="container">
    <h1></h1>
    <div class="jumbotron">
      <h2>Support Anfrage</h2>
	  <p><input type="text" class="form-control" placeholder="Name" required autofocus></p>
	  <p><input type="text" class="form-control" placeholder="E-Mail Adresse" required></p>
      <p><textarea class="form-control" rows="4" placeholder="Text einfügen" required></textarea></p>
      <p><button type="button" class="btn btn-default">Abbrechen</button>
		  <button type="button" class="btn btn-primary">Versenden</button></p>
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
  <script src="../../Controller/js/jquery.min.js"></script>
  <script src="../../Controller/js/myscript.js"></script>
  <script src="../../Controller/js/bootstrap.min.js"></script>
</body>

</html>