<?php
$conexion = mysql_connect('localhost', 'root', '');

if(!$conexion){
    echo"no se pudo conectar";
}else{
    $base= mysql_select_db('conce_db')
    if(!$base){
        echo "No se encontro la base de datos";
    }
}

$correoelectronico = $_POST['correoelectronico'];
$motivo = $_POST['motivo'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO datos VALUES('correoelectronico', 'motivo', 'mensaje')";

$ejecutar= mysql_query($sql);
if(!$ejecutar){
    echo "hubo algun error";
}else{
    echo"datos guardados";
}
?>