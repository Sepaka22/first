
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Set the viewport-->
    <script>
      //if (window.orientation == 0 || window.orientation == 180)
      //document.write('<meta name="viewport" content="width=device-width">');
      var w = screen.availWidth,
              h = screen.availHeight,
              ww;
      if (window.matchMedia("(orientation: portrait)").matches) {
        ww = Math.min(w, h);
      }
      if (window.matchMedia("(orientation: landscape)").matches) {
        ww = Math.max(w, h);
      }
      if (ww <= 768) document.write('<meta name="viewport" content="width=device-width">');
      else {
          ww = ww/1110;
          document.write('<meta name="viewport" content="width=1110, initial-scale='+ww+', user-scalable=yes">');
      }
    </script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>UNI</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="row col-xs-12 col-sm-3 col-sm-offset-2">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand col-xs-4 col-sm-12" href="index"><img src="img/logo.png"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse col-xs-12 col-sm-6 col-sm-offset-1">
          <ul class="nav navbar-nav">
            <li><a href="index" <?php if (strpos($_SERVER['REQUEST_URI'], "index") !== false || mb_strlen($_SERVER['REQUEST_URI']) <= 2 ) echo "class='on'";?>>Главная</a></li>
            <li><a href="media" <?php if (strpos($_SERVER['REQUEST_URI'], "media") !== false) echo "class='on'";?>>Видео</a></li>
            <li><a href="article" <?php if (strpos($_SERVER['REQUEST_URI'], "article") !== false) echo "class='on'";?>>Статьи</a></li>
            <li><a href="poem" <?php if (strpos($_SERVER['REQUEST_URI'], "poem") !== false) echo "class='on'";?>>Стихи</a></li>
            <li><a href="contact" <?php if (strpos($_SERVER['REQUEST_URI'], "contact") !== false) echo "class='on'";?>>Контакты</a></li>
          </ul>
          
        </div>
      </div>
    </nav>
    <div class="loading"></div>
    
    <div id="container">