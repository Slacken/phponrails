<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <title>PHP on Rails</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/assets/stylesheets/appllication.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="/assets/javascripts/html5shiv.js"></script><![endif]-->
  </head>
  <body>
  	<header id="header"></header>
    <div id="body">
      <div class="container"><?php yield();?></div>
    </div>
    <footer id="footer">&copy;2014</footer>
    <script src="/assets/javascripts/jquery-1.11.1.min.js"></script>
  </body>
</html>