<?php
    session_start();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Reminber</title>

    <!-- Bootstrap core CSS -->
    <link href="src/bt/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/home.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="text-muted">Project name</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Downloads</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</div>

<!-- Jumbotron -->
<div class="jumbotron">
    <h1>Marketing stuff!</h1>
    <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
    <?php

require_once __DIR__ . '/src/Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '*************',
  'app_secret' => '***********************',
  'default_graph_version' => 'v2.4',
]);

$helper = $fb->getRedirectLoginHelper();
$loginUrl = $helper->getLoginUrl('http://www.reminber.com/login-callback.php');

echo '<a style="border-radius: 24px" class="btn btn-midium btn-primary" href="'.htmlspecialchars($loginUrl).'">Log in with Facebook!</a>';   
?>  
</div>

<!-- Example row of columns -->
<div class="row">
    <div class="col-lg-4">
      <h2>Safari bug warning!</h2>
      <p class="text-danger">As of v8.0, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing.</p>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
  </div>
  <div class="col-lg-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
  </div>
  <div class="col-lg-4">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
      <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
  </div>
</div>

<!-- Site footer -->
<footer class="footer">
    <p>&copy; Company 2014</p>
</footer>

</div> <!-- /container -->



</body>
</html>
