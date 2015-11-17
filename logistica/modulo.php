<!DOCTYPE html>
<html lang="en">
	<head>
		<title>SARCE ERP</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/img.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
                <script>
		$(window).scroll(function(){
		if ($(window).scrollTop() >= 150) {
		   $('nav').addClass('fixed-header');
		}
		else {
		   $('nav').removeClass('fixed-header');
		}
		});
	</script>

	</head>
	<body>
		<div class="row">
			<div style="padding:0;" class="content col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<header>
				  <a href="index.php"><div class="header-banner"></div></a>
				  <nav>
					<ul>
					  <li><a href="index.php">Inicio</a></li>
					  <li><a href="index.php">Modulos</a></li>
					  <li><a href="#">Contacto</a></li>
					  <li><a href="#">Ayuda</a></li>
					</ul>
				  </nav>
				</header>
				<div class="col-lg-10 col-lg-offset-1">
				<?php
                     /** CONEXION A LA BD **/
				    require_once 'mysql-login.php';
				    $conn = new mysqli($hostname, $username,$password, $database);
				    if ($conn -> connect_errno)
				      die( "Fallo la conexión a MySQL: (" . $conn -> mysqli_connect_errno() . ") " . $conn -> mysqli_connect_error());
				                    
					include_once($_GET['m'].".php");
                    $conn -> close();                  
                                        //include($_SERVER['DOCUMENT_ROOT']."/proyinf/public_html/Prueba/".$_GET['m'].".php");
				?>
				</div>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>
		</div>
	</body>
</html>