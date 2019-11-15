<?php
$usuario=$_POST['uname'];
$password=$_POST['psw'];
include_once 'conexion.php';
$mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
$sqlQuery="SELECT * FROM Usuarios WHERE correo='".$usuario."'";
$resultado=$mysqlConexion->query($sqlQuery);
if($row = $resultado->fetch_array(MYSQLI_ASSOC))
{
    if($row['Password'] == $password){
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['tipo'] =$row['Tipo'];
        header("Location: index.php");
    }else{
        header("Location: login.php");
        exit();
    }
}else{
    header("Location: login.php");
    exit();
}

?>