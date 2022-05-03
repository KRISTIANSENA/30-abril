<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" >
</head>
<body>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                <h1 class="text-center">Ingresar horas y calcular la cantidad en segundos </h1>
              </div>
              <div class="col-md-8 col-md-offset-2">
                  <form action="" method ="GET">
                      <div class="panel panel-primary">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="">Ingresar Horas:</label>

                                    <input type="number" value="<?php Print(@$_GET['number']) ?>" class="form-control" name="number" id="number">
                                </div>
                                <button class="btn btn-primary pull-right">Enviar</button>
                            </div>
                      </div>
                  </form>

                    <?php 
                    @$number = $_GET['number'];
                    @$resultado = $number * 3200;
                    ?>

                  <div class="alert alert-success">
                         <p>Segundos: <strong><?php print(@$resultado) ?></strong> </p>
                  </div>
                  <p class="text-center"><a href="../index.php">Ir al inicio</a></p>
              </div>
          </div>
      </div>
</body>
</html>