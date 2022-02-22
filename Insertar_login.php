<?php
include("BaseDatos.php");//incluimos la pagina conexion.php
include("cabecera.php");
$usuario = $_POST['usuario'];
$password = $_POST['password'];//cogemos los valores de nombre con el post y los guardamos en una variable

if($usuario!='' && $password!=''){
        $sentencia = $conn->prepare("INSERT INTO rgistrar(Usuario,Contraseña) VALUES (?,?)");
        $sentencia->bind_param("ss",$usuario,$password);
        $sentencia->execute();
        echo json_encode("Funciona correctamente");
    }else{
        echo "Error";
    }                                      
 
 
?>
