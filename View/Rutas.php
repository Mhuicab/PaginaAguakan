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
  <div class="header">
    <div class="container-fluid">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <a class="navbar-brand glyphicon glyphicon-home" href="index.php"></a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Lecturitas</a></li>
          <li><a href="#">Rutas</a></li>
          <li><a href="#"></a></li>
        </ul>
        <ul class="nav navbar-nav">
          <form class="navbar-form navbar-left" action="index.html" method="post">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Buscar">
            </div>
            <button type="submit"class="btn btn-default">Buscar</button>
          </form>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="View/Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </nav>
      <div class="breadcrumb col-sm-3">
        <?php echo $crumbs; ?>
      </div>
    </div>


  </div>

  <div class="content">
    <div class="container">
    </div>
  </div>



  <div class="footer">
    <div class="container">
      <p class="text-muted logfin credit">Aguakan Manuel Huicab</p>

    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
