<?php
class login {
	// Inicia sesion
	public function inicia($tiempo=3600, $usuario=NULL, $clave=NULL) { 

		if ($clave==NULL) {
			// Verifica sesion
			if (isset($_SESSION['idusuario'])) {
				//echo "Estas logeado";
			} else {
				// Verifica cookie
				if (isset($_COOKIE['idusuario'])) {
					// Restaura sesion
					$_SESSION['idusuario']=$_COOKIE['idusuario'];
				} else {
					// Si no hay sesion regresa al login
					header( "Location: index.html?no_login=1" );
				}
			}
		} else {
			$this->verifica_usuario($tiempo, $clave);
		}
	}  
	//  Verifica login
	private function verifica_usuario($tiempo, $clave) {

		# NOS CONECTAMOS AL SERVIDOR
		include("config.php");
			
		$conexion = mysql_connect("mysql9.000webhost.com", DBUSER, DBPASS)
							or die("Error en la lina: ".__LINE__." de tu codigo.<br>El motivo del error es: ".mysql_error()."<br>En conclusion: No se ha podido conectar al servidor.");

		# USAMOS LA BDD
		$use = mysql_select_db("a9995569_ipem292",$conexion)
			or die("Error en la linea: ".__LINE__." de tu codigo.<br>El motivo del error es: ".mysql_error()."<br>En conclusion: No se ha podidos usar la BDD a9995569_ipem292.");	

		# HACEMOS LA CONSULTA
		$sql = "SELECT password
				FROM password";
						

		$valores=mysql_query($sql)
			or die("Error en la linea: ".__LINE__." de tu codigo.<br>El motivo del error es: ".mysql_error()."<br>En conclusion: No se ha realizado la consulta");			

		$registro=mysql_fetch_array($valores);
		$passwd=$registro['password'];
		
		mysql_close($conexion);

		if ($clave==$passwd) {
			// Si la clave es correcta
			$idusuario=$this->codificar_usuario("administrator");
			setcookie("idusuario", $idusuario, time()+$tiempo);
			$_SESSION['idusuario']=$idusuario;
			header( "Location: admin_main.php" );
		} else {
			// Si la clave es incorrecta
			header( "Location: index.html?error=1" );
		}
	}
	// Codifica idusuario
	private function codificar_usuario($usuario) {
		return md5($usuario);
	}

	public function logout(){
		session_start();
		session_unset($_SESSION["idusuario"]);
		setcookie("idusuario",$idusuario,time()-60);
		session_destroy();
		header( "Location: index.html" );
	}
}
?>