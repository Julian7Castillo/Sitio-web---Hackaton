<?php
    if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}

	extract($_POST);
	require "../Modelo/conecta.php";
	require "../Modelo/usuarios.php";

	try{
		$objUsuario = New Usuario();
		$objUsuario->crearUsuario($_POST['cc'], $_POST['nombreUsuario'], $_POST['ApellidoUsuario'], $_POST['Email'], $_POST['Telefono'],$_POST['password']);
		$resultado=$objUsuario->ActualizarUsuario();
	
		if($resultado)
			header("location:../index.php?pag=inicio");
		else
			header("location:../index.php?pag=Perfil");
	}catch(Exception $e){
		echo "Error: " .$e->getMessage();
		header("location:../index.php?pag=Perfil");
	}
?>