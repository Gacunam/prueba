<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Formulario</title>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">



  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

  <link rel="stylesheet" href="css/style.css">


</head>
<body>
  <div class="container" style="padding-top: 50px; ">

    <form class="well form-horizontal" action="db.php" method="post" id="contact_form">
      <fieldset>
        <h1>Formulario</h1>
        <div class="form-group"><label class="col-md-4 control-label">Id</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span><input
                name="Id" placeholder="Id" class="form-control" type="number"></div>
          </div>
        </div>
        <div class="form-group"><label class="col-md-4 control-label">Nombre</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span><input
                name="Nombre" placeholder="Nombre" class="form-control" type="text"></div>
          </div>
        </div>
        <div class="form-group"><label class="col-md-4 control-label">Apellido</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span><input
                name="Apellido" placeholder="Apellido" class="form-control" type="text"></div>
          </div>
        </div>
        <div class="form-group"><label class="col-md-4 control-label">Telefono</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span><input
                name="Telefono" placeholder="Telefono" class="form-control" type="number"></div>
          </div>
        </div>
        <div class="form-group"><label class="col-md-4 control-label">Email</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span><input
                name="Email" placeholder="Email" class="form-control" type="email"></div>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4">
            <button type="submit" class="btn btn-success" name="s1" id="s1" value="guardar">Enviar <span class="glyphicon glyphicon-send"></span></button>
          </div>
        </div>

      </fieldset>
    </form>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

  <script src="js/index.js"></script>
</body>
</html>