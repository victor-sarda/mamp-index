<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>MAMP Index</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <?php
  /**
  * [listDirectories List all diretories (with link)]
  */
  function listDirectories(){
    $dirs = array_filter(glob('*'), 'is_dir');
    $i = 1;
    foreach ($dirs as $d) {
      echo '<a href="' .$d. '" class="collection-item" target="_blank">'.$d.'</a>';
      $i++;
    }
  }
  ?>
  <div class="navbar-fixed">
    <nav class="red accent-4">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo" style="padding-left:15px;">MAMP Index</a>
        <ul class="right hide-on-med-and-down">
          <li><a class="waves-effect waves-light btn deep-orange darken-2" href="phpmyadmin" target="_blank">PHPMyAdmin</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Welcome.</h1>
      <div class="row">
        <div class="collection">
          <?php listDirectories(); ?>
        </div>
      </div>
      <br><br>
    </div>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l12 s12">
          <h5 class="white-text">MAMP Index</h5>
          <p class="grey-text text-lighten-4">I'm Victor Sarda, a 20 web developper. If you like this project, please make a donation <a class="red-text" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=HNYKJ93ZFHTLG&lc=FR&item_name=Victor%20Sarda&currency_code=EUR&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">here</a>.</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made with <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/init.js"></script>

  </body>
</html>
