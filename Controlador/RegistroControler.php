<?php
    if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}

	extract($_POST);
	require "../Modelo/conecta.php";
	require "../Modelo/usuarios.php";

	try{
		$objUsuario = New Usuario();
		$objUsuario->crearUsuario($_POST['cc'], $_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['telefono'],$_POST['pss']);

		// Genera el código JavaScript para enviar los datos a la consola
		echo '<script>';
		echo 'console.log("Datos recibidos por POST:", ' . $postData . ');';
		echo '</script>';

		$resultado=$objUsuario->agregarUsuario();
	
		if($resultado)
			header("location:../index.php?msj=3");
		else
			header("location:../index.php?msj=1");
	}catch(Exception $e){
		echo "Error: " .$e->getMessage();
		header("location:../index.php?msj=1");
	}

?>