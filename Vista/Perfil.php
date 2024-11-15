<!DOCTYPE html>
<html>
	<body>
		<main class="formulario">
			<b><h1 class="text-center"> PERFIL DE USUARIO</h1></b>

			<FORM action= "Controlador/ActualizarControlador.php" method="post" class="form-horizontal">
				<P><h3><b>Datos personales</b></h3>
				<h4>

				<?php
			require "./Modelo/conecta.php";
			require './Modelo/usuarios.php';
			
			$UsuarioHakathon = new UsuarioHakathon();
			$resultado = $UsuarioHakathon->Perfil($_SESSION['ccHakathon']);
			if (isset($resultado)) {
				if($resultado->num_rows > 0 ){
					echo '<div class="flex camposformulario">
							<label class="text-center"> Identificación: </label>
							<div class="text-center">
								<INPUT class="form-control" type="text" name="cc" id="cc" placeholder="CC" disabled value="' . htmlspecialchars($registro->usucc) . '">
							</div>
						</div>';
						
					echo '<div class="flex camposformulario">
							<label class="text-center"> Nombre: </label>
							<div class="text-center">
								<INPUT class="form-control" type="text" name="nombreUsuario" id="nombreUsuario" placeholder="Nombre" disabled value="' . htmlspecialchars($registro->usuNombre) . '">
							</div>
						</div>';

					echo '<div class="flex camposformulario">
							<label class="text-center"> Apellido: </label>
							<div class="text-center">
								<INPUT class="form-control" type="text" name="ApellidoUsuario" id="ApellidoUsuario" placeholder="Apellido" disabled value="' . htmlspecialchars($registro->usuApellidos) . '">
							</div>
						</div>';						
					
					echo '<div class="flex camposformulario">
							<label class="text-center"> Email: </label>
							<div class="text-center">
								<INPUT class="form-control" type="text" name="Email" id="Email" placeholder="Email" value="' . htmlspecialchars($registro->usuCorreo) . '">
							</div>
						</div>';

					echo '<div class="flex camposformulario">
							<label class="text-center"> Telefono: </label>
							<div class="text-center">
								<INPUT class="form-control" type="text" name="Telefono" id="Telefono" placeholder="Telefono" value="' . htmlspecialchars($registro->usuTelefono) . '">
							</div>
						</div>';

					echo '<div class="flex camposformulario">
							<label class="text-center"> Contraseña: </label>
							<div class="text-center">
								<INPUT class="form-control" type="Password" name="password" id="password" placeholder="Password" value="' . htmlspecialchars($registro->usuPassword) . '">
							</div>
						</div>';
				}else{  
					echo '<div class="alert alert-danger text-center">El Usuario No existe en la base de datos</div>';
				}
			}
			?>
				<center>
					<button class="boton boton-negro seccion" type="submit">Cambiar Datos</button>
				</center></p></h4>
			</FORM>
		</main>
	</body>
<html>