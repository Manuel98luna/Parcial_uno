<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Parcial 1</title>

    <?php require_once "Menu.php" ?>
  </head>
  <body>
    

  <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 p-5 bg-white shadow-lg rounded">
               <h3>Crear Cliente</h3>
                <HR>
                
                <form method="post" action="recibe_clientes.php">
                        <div class="form-group">
                            <label for="codigo">Codigo:</label>
                            <input id="codigo" class="form-control" type="text" name="codigo">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombres:</label>
                            <input id="nombre" class="form-control" type="text" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="apellidos">Apellidos:</label>
                            <input id="apellidos" class="form-control" type="text" name="apellidos">
                        </div>
                        <div class="form-group">
                            <label for="dui">DUI:</label>
                            <input id="dui" class="form-control" type="text" name="dui">
                        </div>
                        <div class="form-group">
                            <label for="direccion">Dirección:</label>
                            <input id="direccion" class="form-control" type="text" name="direccion">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono:</label>
                            <input id="telefono" class="form-control" type="text" name="telefono">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input id="email" class="form-control" type="email" name="email">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>

                    </form>
            </div>
        </div>
    </div>






    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>