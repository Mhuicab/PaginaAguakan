<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="../bootstrap/css/StyleHome.css" type="text/css">
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href=""> <span class="glyphicon glyphicon-off" aria-hidden="true" ></span>Logout</a></li>
        </ul>
      </div>

    </div>
  </nav>

  <div id="wrapper" class="toggled">
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
              <a href="Controller/controllerLectu.php"><span class="glyphicon glyphicon-book"></span> Lecturistas</a>
            </li>
            <li>
              <a href="Controller/ControllerDispositivos.php"><span class="glyphicon glyphicon-phone"></span> Dispositivos</a>
            </li>
          </ul>
        </div>

        <!--continua con el contenido -->
        <div id="page-content-wrapper">
          <div class="container">

            <div class="row">
              <div class="col-sx-6 col-sm-6 col-md-6 col-lg-5">
              </div>
              <div class="col-sx-5 col-sm-5 col-md-5 col-lg-6">
                <div class="modal fade" tabindex="-1" role="dialog" id="addModal">
                  <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="close"> <span aria-hidden="true">&times;</span> </button>
                        <h4 class="modal-tittle" id="ModalTitulo"> Nueva Orden de Trabajo</h4>
                      </div>
                      <form class="modal-form" action="#" method="post">
                        <div class="modal-body">
                          <label for="">Folio Orden de Trabajo</label> <br>
                          <input type="text" name="" value="" placeholder="IDTOT" class="form-control" required> <br>
                          <label for="">Usuario crea Orden de Trabajo</label> <br>
                          <input type="text" name="" value="" placeholder="IDTUSRCRE" class="form-control"required> <br>
                          <label for="">Centro de operacion</label> <br>
                          <input type="text" name="" value="" placeholder="IDTCNTOPR" class="form-control"required> <br>
                          <label for="">Fecha de creacion</label> <br>
                          <input type="text" class="form-control" id="datetime" readonly required>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" value="Guardar"> Guardar</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" align="right">
                <br>
                <button type="button" class="btn btn-primary glyphicon glyphicon-plus-sign" data-toggle="modal"  id="btnModal"></button>

              </div>

            </div>

          </div>
          <!--page-content fin -->
        </div>
      </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <script src="../bootstrap/js/sidebar.js"></script>
</body>

</html>
