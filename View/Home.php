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

  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.php"> <span class="glyphicon glyphicon-off" aria-hidden="true" ></span>Logout</a></li>
        </ul>
      </div>

    </div>
  </nav>

  <div id="wrapper" class="toggled" >
    <div class="container-fluid">
      <!--sidebar-->
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
          <li class="sidebar-brand">
            <br>
          </li>
          <li class="sidebar-brand">
            <a href="#" class="navbar-brand">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span> User
            </a>
          </li>
          <li>
            <a href="">
              <span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
            <li>
              <a href="#"><span class="glyphicon glyphicon-book"></span> Lecturistas</a>
            </li>
            <li>
              <a href="#"><span class="glyphicon glyphicon-phone"></span> Dispositivos</a>
            </li>
          </ul>
        </div>

        <!--continua con el contenido -->
        <div id="page-content-wrapper">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <?php
                foreach ($listUser as $filas) {
                  $json = json_encode($filas);
                  echo $json;
                }
                 ?>
                </div>

              </div>

            </div>

          </div>
          <!--page-content fin -->
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <script src="bootstrap/js/sidebar.js"></script>
    </body>
    </html>
