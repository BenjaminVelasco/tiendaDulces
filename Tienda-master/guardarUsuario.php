<?php
    $nombre=$_POST['name'];
    $usuario=$_POST['uname'];
    $password=$_POST['psw'];
    
    if(empty($nombre)|| empty($usuario ||empty($password)))
    {
        header("Location:registro.php");
        exit();
    }
    include_once 'conexion.php';
    $mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
    $sqlQuery="INSERT INTO Usuarios(NombreCompleto,Tipo,Correo, Password)VALUES('$nombre','2','$usuario','$password')";
    echo $sqlQuery;
    if($resultado=$mysqlConexion->query($sqlQuery))
    {
        header("Location:login.php");
    }
    else
    {
        echo $resultado;
    }

?>