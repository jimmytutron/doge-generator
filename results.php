<!doctype html>
<html class="no-js" lang="en">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>very results</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" type="text/css" href="css/icons.css" />
  <link rel="stylesheet" type="text/css" href="css/navigation.css" />
  <link rel="stylesheet" type="text/css" href="css/lab2.css"/>
  <script src="js/vendor/modernizr.js"></script>
  
</head>

<body>

  <div class="row">
    <div class="large-12 large-centered columns">
      <img src="images/doge2.png" class="doge shake" alt="doge">
    </div>
  </div>

  <div class="row">
    <div class="large-12 large-centered columns">
      <h1 class="result shake"> wow <?php echo $_GET["wow"];?>. so <?php echo $_GET["so"];?>. much <?php echo $_GET["much"];?>. very <?php echo $_GET["very"];?>.</h1>
      <a href="index.php"><button type="button" class="button shake">wow. so again?</button></a>
    </div>
  </div>

  <nav id="bt-menu" class="bt-menu">
    <a href="#" class="bt-menu-trigger"><span>Menu</span></a>
      <ul>
        <li><a href="../index.html" class="bt-icon icon-home">Home</a></li>
        <li><a href="../about.html" class="bt-icon icon-bio">About</a></li>
        <li><a href="../2830f/index.html" class="bt-icon icon-file" target="_blank">ART2830</a></li>
        <li><a href="https://www.facebook.com/jimmytutron" class="bt-icon icon-facebook" target="_blank">Facebook</a></li>
        <li><a href="https://www.twitter.com/jimmytutron" class="bt-icon icon-twitter" target="_blank">Twitter</a></li>                 
      </ul>
  </nav>
  
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>    
    <script>
      $(document).foundation();
    </script>


</body>
</html>