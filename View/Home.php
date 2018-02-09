<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
</head>
<body>
  <div id="wrapper">
    <div class="overlay"></div>

    <!--Empieza el sidebar-->

    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
      <ul class="nav sidebar-nav">
        <li class="sidebar-brand">
          <a href="#"><i class="glyphicon glyphicon-log-out"></i> Log Out</a>
        </li>
        <li>
          <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a>
        </li>
        <li>
          <a href="#"><i class="glyphicon glyphicon-book"></i> Lecturistas</a>
        </li>
        <li>
          <a href="#"><i class="glyphicon glyphicon-phone"></i> Dispositivos</a>
        </li>
      </ul>
    </nav>
    <!--Termina el sidebar-->

    <!--Empeza el content-->

    <div id="page-content-wrapper">
      <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
        <span class="ham-top"></span>
        <span class="ham-meddle"></span>
        <span class="ham-bottom"></span>
      </button>
    </div>

  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/sidebar.js"></script>
</body>
</html>
