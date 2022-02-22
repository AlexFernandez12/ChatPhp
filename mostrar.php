<?php
include("BaseDatos.php");
include("cabecera.php");


$sentencia = "SELECT * FROM chat ";
$resultado = mysqli_query($conn, $sentencia);
$resultado = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
echo json_encode($resultado);

                                         
?>
