<?php
	function ConectarseHakathon(){
		$ConexionHakathon = new mysqli("localhost","root","","hackaton");
		if($ConexionHakathon->connect_errno){
			echo "Error de conexión a la base de datos".$ConexionHakathon->connect_error;
			exit();
		}
		else{
			return $ConexionHakathon;
		}
	}
?>
