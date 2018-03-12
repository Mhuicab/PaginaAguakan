<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administracion App</title>
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../bootstrap/css/Style.css" type="text/css">
</head>

<body>
  <div class="container login">
    <div class="row">
      <div class="col-xs-4 col-xs-offset-4">
        <img src="../bootstrap/imagenes/user.png">
      </div>

      <div class="separador">
      </div>

      <div class="row">
        <fieldset class="col-xs-10 col-xs-offset-1">
          <legend class="hidden-xs"> <h3>Inicio de ses&iacute;on</h3></legend>
          <div class="form-horizontal">
            <div class="form-group">
              <label class="col-xs-12" for="Usuario"><h4>Usuario</h4></label>
              <div class="col-xs-10 col-xs-offset-1">
                <input type="text" placeholder="Usuario" id="Usuario" class="form-control Input">
              </div>
            </div>
            <div class="form-group">
              <label class="col-xs-12" for="Password"><h4>Contraseña</h4></label>
              <div class="col-xs-10 col-xs-offset-1">
                <input type="text" placeholder="Contraseña" id="Password" class="form-control Input">
              </div>
            </div>
            <div class="form-group">
              <button type="button" id="enviar" class="btn btn-button center-block">Enviar</button>
            </div>


          </div>


        </fieldset>
      </div>

    </div>


    </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../bootstrap/js/jquery.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
