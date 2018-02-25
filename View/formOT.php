<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crear OT</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="container">
    <button type="button" class="btn btn-primary glyphicon glyphicon-plus-sign" data-toggle="modal"  id="btnModal"></button>
    <div class="modal fade bs-example-modal-md" tabindex="1" role="dialog" id="addModal">
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
              <button type="submit" class="btn btn-primary" data-dismiss="modal" value="Guardar"> Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/sidebar.js"></script>
</body>

</html>
