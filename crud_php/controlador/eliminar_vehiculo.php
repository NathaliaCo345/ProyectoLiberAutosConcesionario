<?php 
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from vehiculos wehere id=$id ");
    if ($sql==1) {
        echo '<div class="alert alert success">Vehiculo eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert danger">Error al eliminar</div>';
    }
}
?>