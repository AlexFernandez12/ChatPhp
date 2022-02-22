<?php
include("BaseDatos.php");//incluimos la pagina conexion.php
include("cabecera.php");
$usuario = $_POST['usuario'];//cogemos los valores de nombre con el post y los guardamos en una variable
$password = $_POST['password'];
    $sentencia =("SELECT * FROM rgistrar");
    $resultado = mysqli_query($conn, $sentencia);
    $resultado=mysqli_fetch_all($resultado,MYSQLI_ASSOC);
 
        foreach($resultado as $opcion){
        $nombre=$opcion["Usuario"];
        $pass=$opcion["Contraseña"];
        $id=$opcion["ID"];
        if($usuario==$nombre && $password== $pass){
            echo json_encode("Funciona");
           
        }
        }  
                                    
  
?>
