<?php
	class Usuario{
		private $identificacion;
		private $nombre;
		private $apellido;
		private $correo;
		private $telefono;
		private $password;
		
		public function setIdentificacion($identificacion){
			$this->identificacion=$identificacion;
		}
		
		public function getIdentificacion(){
			return ($this->identificacion);
		}
		
		public function setNombre($nombre){
			$this->nombre=$nombre;
		}
		
		public function getNombre(){
			return ($this->nombre);
		}

		public function setApellido($apellido){
			$this->apellido=$apellido;
		}
		
		public function getApellido(){
			return ($this->apellido);
		}

		public function setCorreo($correo){
			$this->correo=$correo;
		}
		
		public function getCorreo(){
			return ($this->correo);
		}

		public function setTelefono($telefono){
			$this->telefono=$aptelefonoellido;
		}
		
		public function getTelefono(){
			return ($this->telefono);
		}

		public function setPassword($password){
			$this->password=$password;
		}
		
		public function getPassword(){
			return ($this->password);
		}
		
		public function crearUsuario($identificacion, $nombre,$apellido,$correo,$telefono,$password){
			$this->identificacion = $identificacion;
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->correo = $correo;
			$this->telefono = $telefono;
			$this->password = $password;
		}
		
		public function agregarUsuario(){	
			$this->Conexion=Conectarse();
			$sql="CALL insusu('$this->identificacion','$this->nombre', '$this->apellido', '$this->correo', '$this->telefono', '$this->password');";
			$resultado=$this->Conexion->query($sql);
			$this->Conexion->close();
			return $resultado;	
		}

		public function Perfil($identificacion){
			$this->Conexion=Conectarse();
			$sql="SELECT * FROM usuarios WHERE usucc = '$identificacion';";
			$resultado=$this->Conexion->query($sql);
			$this->Conexion->close();
			return $resultado;		
		}

		public function ActualizarUsuario()	{
			$this->Conexion=Conectarse();
			$sql="CALL upusu('$this->identificacion','$this->rol','$this->nombre', '$this->apelldio', '$this->fechanaci','$this->sexo', '$this->correo', '$this->telefono', '$this->fechanaci', '$this->fechanaci',  '$this->password');";
			$resultado=$this->Conexion->query($sql);
			$this->Conexion->close();
			return $resultado;
		}	

		public function BorrarUsuario(){
			$this->Conexion=Conectarse();
			$sql="DELETE FROM usuarios WHERE usLogin='$this->identificacion'";
			$resultado=$this->Conexion->query($sql);
			$this->Conexion->close();
			return $resultado;	
		}	
	}
?>