<?php
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $dui = $_POST['dui'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">DUI</th>
                <th scope="col">Dirección</th>
                <th scope="col">Telefono</th>
                <th scope="col">E-Mail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $codigo ?></td>
                <td><?php echo $nombre ?></td>
                <td><?php echo $apellidos ?></td>
                <td><?php echo $dui ?></td>
                <td><?php echo $direccion ?></td>
                <td><?php echo $telefono ?></td>
                <td><?php echo $email ?></td>
            </tr>
        </tbody>
    </table>
</div>