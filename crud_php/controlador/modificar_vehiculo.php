<?php 

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["descripcion"]) and !empty($_POST["modelo"]) and !empty($_POST["precio"])) {
        $id=$_POST["id"];
        $nombre=$_POST["Nombre"];
        $descripcion=$_POST["Descripcion"];
        $modelo=$_POST["Modelo"];
        $precio=$_POST["Precio"];
        $sql=$conexion->query(" update vehiculos set Nombre='$nombre', Descripcion='$descripcion', Modelo='$modelo', Precio='$precio' where id=$id");
        if ($sql==1) {
            header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar Vehiculo</div>";
        }

    }else{
        echo "<div class='alert alert-warinig'>Campos Vacios</div>";
    }
}


















?>