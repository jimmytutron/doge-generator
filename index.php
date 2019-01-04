<!doctype html>
<html class="no-js" lang="en">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>wow.</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" type="text/css" href="css/icons.css" />
  <link rel="stylesheet" type="text/css" href="css/navigation.css" />
  <link rel="stylesheet" type="text/css" href="css/lab2.css" />
  <script src="js/vendor/modernizr.js"></script>
  
</head>

<body>
  <div class="row">
    <div class="large-12 large-centered columns">
      <h1 class="shake"><?php echo "wow. much php. so form. very html.";?></h1>
    </div>
  </div>
  
  <form method="get" action="results.php" id="MyForm" class="row shakeSlow">
    <label class="large-12 large-centered columns">wow. name pls
      <input type="text" placeholder="so shibe" size="21" name="wow" id="wow">
    </label>
    <label class="large-4 columns">so
      <input type="text" maxlength="20" placeholder="much words" size="21" name="so" id="so">
    </label>
    <label class="large-4 columns">much
      <input type="text" maxlength="20" placeholder="very adjective" size="21" name="much" id="much">
    </label>
    <label class="large-4 columns">very
      <input type="text" maxlength="20" placeholder="so vocab" size="21" name="very" id="very">
    </label>
      <input type="submit" value="doge me">
  </form>
  
  <footer class="row">
    <div class="large-12 large-centered columns">
      <img src="images/doge.png" class="shake" alt="doge">
    </div>
  </footer>
  
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>    
    <script>
      $(document).foundation();
    </script>

</body>
</html>