<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Parcial 1 Ajax</title>

    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="form_clientes.php" style="color: aliceblue;">Parcial 1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: aliceblue;" href="form_clientes.php">Clientes</a>
                    </li>
                    
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-light" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav> 
  </head>
  <body>
    

  <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 p-5 bg-white shadow-lg rounded">
            <form method="POST">
                <h2>Nuevo Producto con AJAX</h2>
                <hr>
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
                        <button  id="enviar"  class="btn btn-primary">Guardar</button>
                       

                    </form>
            </div>
            
        </div>
        <br>
            <div id="Msg">
        </div>
    </div>






    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="Ajax/funcion.js"></script> 
  </body>
</html>