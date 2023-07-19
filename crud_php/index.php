<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Inventario</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<body>
 <h1 class="text-center p-3">Inventario Vehiculos</h1>
 <?php 
 include "modelo/conexion.php";
 include "controlador/eliminar_vehiculo.php";
 ?>
 <div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary">Registro de Vehiculos</h3>
        <?php 
        include "modelo/conexion.php";
        include "controlador/registro_vehiculos.php";
        ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre Del Vehiculo</label>
    <input type="text" class="form-control" name="nombre">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Descripcion Del Vehiculo</label>
    <input type="text" class="form-control" name="descripcion">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Modelo Del Vehiculo</label>
    <input type="text" class="form-control" name="modelo">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Precio Del Vehiculo</label>
    <input type="text" class="form-control" name="precio">
  </div>

  
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
</form>
<div class="col-8 p-4">
    <table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre Del Vehiculo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Modelo</th>
      <th scope="col">Precio</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include "modelo/conexion.php";
    $sql=$conexion->query(" select * from vehiculos ");
    while($datos=$sql->fetch_object()){ ?>
    <tr>
      <td><?= $datos->id ?></td>
      <td><?= $datos->Nombre ?></td>
      <td><?= $datos->Descripcion ?></td>
      <td><?= $datos->Modelo ?></td>
      <td><?= $datos->Precio ?></td>
      <td>
         <a href="modificar_vehiculo.php?id=<?= $datos->id ?>">Editar</a>
         <a href="index.php?id=<?= $datos->id ?>">Eliminar</a>
      </td>
    </tr>   
    <?php } 
    ?>
    
    
    
    
  </tbody>
</table>
</div>
 </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>