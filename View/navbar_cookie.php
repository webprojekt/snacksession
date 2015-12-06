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
          <li><a href="info.html">Info</a></li>
          <li><a href="contact.html">Kontakt</a></li>

          <li class="active" id=""><a> 
          <?php 
            echo htmlspecialchars($_COOKIE["email"]);
          ?>
      </a></li>
      <li><a href="">Abmelden</a></li>

        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>
  <!-- end navbar -->