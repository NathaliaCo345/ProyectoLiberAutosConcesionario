<?php 

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["descripcion"]) and !empty($_POST["modelo"]) and !empty($_POST["precio"]) ) {
        
        $nombre=$_POST["nombre"];
        $descripcion=$_POST["descripcion"];
        $modelo=$_POST["modelo"];
        $precio=$_POST["precio"];

        $sql=$conexion->query(" insert into vehiculos(Nombre,Descripcion,Modelo,Precio)values('$nombre','$descripcion','$modelo','$precio') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Vehiculo registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar vehiculo</div>';
         }
     
    
    }else{
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
}




?>