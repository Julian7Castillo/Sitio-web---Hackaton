<?php
	session_start();
	extract ($_POST);
	require "../Modelo/conecta.php";
	require "../Modelo/usuarios.php";

	$passHakathon = $_REQUEST['pswHakathon'];
	$loginHakathon = $_REQUEST['usuarioHakathon'];

	$objConexioHakathon=ConectarseHakathon();

	$sql="SELECT * FROM usuarios WHERE usuNombre = '$loginHakathon' AND usuPassword = '$passHakathon'";

	$resultadoHakathon = $objConexioHakathon->query($sql);
	$existe = $resultadoHakathon->num_rows;

	if ($existe==1) {
		$Usuario = $resultado->fetch_object() or die ("Error");
		$_SESSION['usuarioHakathon']= $Usuario->usuNombre;
		$_SESSION['ccHakathon']= $Usuario->usucc;
		header("location:../index.php?pag=inicio");
	}
	else{
		header("location:../index.php?msj=2");  
		//msj=2, quiere decir que el usuario no esta registrado
	}
?>