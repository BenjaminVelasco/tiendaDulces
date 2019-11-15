<?php //Validacion de usuario
session_start();
if (isset($_SESSION['usuario'])){ 
		$loginSession=$_SESSION['usuario'];
		$tipoUsuario=$_SESSION['tipo'];
		
	} 
	else{
		$loginSession="";
	}
?>
<?php //Eliminar producto
include_once 'conexion.php';
if (isset($_GET['deleteId'])){
	$mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
	$sqlQuery="DELETE FROM Dulces WHERE Id = ".$_GET['deleteId'];
	$resultado=$mysqlConexion->query($sqlQuery);
	header("Location: $_SERVER[PHP_SELF]");
}
?>
<?php?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dulces típicos</title>
        <link rel="stylesheet" href="assets/css/main.css" />
		<script type="text/javascript">
			function editarDulces(id){
				if(confirm('¿Desea modificar?')){
					window.location.href='Productos/editarProducto.php?updateId='+id;
				}
			}
			function eliminarDulces(id){
				if(confirm('¿Desea eliminar?')){
					window.location.href='catalogo.php?deleteId='+id;
				}
			}
		</script>
    </head>
	<body>

        <!-- Header -->
			<header id="header">
            <h1><strong><a href="index.php">Dulces</a></strong> típicos</h1>
			<nav id="nav">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="nosotros.php">Nosotros</a></li>						
						<?php 
							if($loginSession<>'') //Valida si hay usuario logueado para visualizar
							{
								?>
								<li>
									<a href="catalogo.php">Catálogo</a>
								</li>
								<?php 								
							}
						?>						
						<?php 
							if($loginSession<>'' && $tipoUsuario==1)  //Valida si hay usuario logueado y si es administrador- solo asi podra visualizarse
							{
								?>
								<li>
									<a href="pedidos.php">Pedidos</a>
								</li>
								<?php 								
							}
						?>												
						<li><a href="contactanos.php">Contáctanos</a></li>
						<li>
						<a>
						<?php 
							if($loginSession<>'')
							{
								?>
								<p class="datosLogin">USUARIO: <?php echo $loginSession; ?></p>
			       				<a class="linkLogin" href = "logout.php" >Cerrar sesión</a>
								<?php 								
							}
						?>						
						</a>
						</li>	
					
					</ul>
				</nav>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
						<h2>Catálogo</h2>
						<p> Lista de nuestros productos</p>
					</header>
					<div>
						<p>
							<a href="Productos/nuevoProducto.php">Nuevo</a>	   
						</p>
						<table>
							<tr>
								<th>ID</th>
								<th>NOMBRE</th>
								<th>DESCRIPCION</th>
								<th>PRECIO</th>
								<th></th>
								<th></th>
							</tr>
							<?php
							 include_once 'conexion.php';
							 $mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
							 $sqlQuery="SELECT * FROM Dulces";
							 $resultado=$mysqlConexion->query($sqlQuery);
							 while($row=$resultado->fetch_assoc())
							 {
								 ?>
								 <tr>
								 <td><?php echo $row["Id"]; ?>  </td>
								 <td><?php echo $row["Nombre"]; ?> </td>
								 <td><?php echo $row["Descripcion"]; ?> </td>
								 <td><?php echo $row["Precio"]; ?> </td>
								 <td align="center"><a href="javascript:editarDulces('<?php echo $row["Id"]; ?>')"><img src="images/Editar.png" align="EDIT" /></a></td>
								 <td align="center"><a href="javascript:eliminarDulces('<?php echo $row["Id"]; ?>')"><img src="images/Cancelar.png" align="EDIT" /></a></td>
								 </tr>
								 <?php
							 }
							?>
						</table>
						</div>
				</div>
			</section>

		<!-- Footer -->
        <footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"></a></li>
						<li><a href="#" class="icon fa-twitter"></a></li>
						<li><a href="#" class="icon fa-instagram"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; UNACH</li>
						<li>Design: <a href="#">LSC</a></li>
						
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>