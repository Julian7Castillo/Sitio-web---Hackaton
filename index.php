<?php
	session_start();
	extract ($_REQUEST);
	if (!isset($_REQUEST['msj'])){
		$msj=0;
	}
	if (!isset($_REQUEST['pag'])){
    	$pag='login';
	}
	else
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--llamado a estilos del framwork bootstrap-->
    	<link rel="stylesheet" href="Vista/css/normalize.css">

		<!--link de la hoja de estilos en cascada css-->
		<link rel="stylesheet" href="Vista/css/styles.css">

		<!--Lineas de cambio de icono en la ventana y el nombre en la ventana-->
        <link rel="icon" href="Vista/img/logo.jpg" type="image/x-icon">
		<title>Publicidad Boyacá</title>
	</head>

	<body>
		<!--encabezado con icono y tutulo-->
		<?php include "Vista/encabezado.php";?>

		<!--area de trabao dode ira cambiando el script-->
		<div class="">
			<section class="">
				<?php 
					/*if($pag != 'login'){
						include "Vista/menu.php";
					}*/						
				?>
				<?php
					if ($msj==1)
						echo '<br><br><div class="alert alert-danger text-center">Error al Registrar usuario </div>';
					elseif($msj==2)
						echo '<br><br><div class="alert alert-danger text-center">Error de usuario y/o contraseña son incorrectos </div>';
					elseif($msj==3)
						echo '<br><br><div class="alert alert-danger text-center">usuario registrado correctamente </div>';
					else{

					}
				?>
				<div class="">
					<div id="divContenido"> 
						<?php include "Vista/".$pag.".php";?> 
					</div>
				</div>
			</section>
		</div>

		<!--footer con bootstrap y con los colores de los estilos extras-->
		<?php include "Vista/piedePagina.php"?>
	</body>
</html>