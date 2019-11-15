<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dulces típicos</title>
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
	<body>

        <!-- Header -->
			<header id="header">
            <h1><strong><a href="index.php">Dulces</a></strong> típicos</h1>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
                    <form action="validar.php" method="post">
                    <div class="imgcontainer">
                        <img src="images/avatar.png" alt="Avatar" class="avatar">
                    </div>

                    <div class="container">
                        <label for="uname"><b>Usuario</b></label>
                        <input type="text" placeholder="ingresa tu correo" name="uname" required>

                        <label for="psw"><b>Contraseña</b></label>
                        <input type="password" placeholder="Ingresa tu contraseña" name="psw" required>

                        <button type="submit">Entrar</button>

                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <a href="registro.php">Nuevo usuario</a>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>
                    </form>

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