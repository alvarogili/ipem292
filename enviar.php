<html>
<head>
  <?php include("head.html");?>
</head>
<body>
	<center>
		<div id="todo">
			<div id="cabecera">
				<?php include("cabecera.html");?>
			</div>
			<div id="menu_contenedor">
				<?php include("menu.php");?>
			</div>
			<div id="cuerpo">
				<div id="margen_cuerpo"> </div>
				<div id="contenido"> 
					<?php 
						$nombre = $_POST['nombre']; 
						$apellido = $_POST['apellido']; 
						$telefono = $_POST['telefono']; 
						$localidad = $_POST['localidad']; 

						$header = 'From: ' . $_POST['mail'] . " \r\n"; 
						$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
						$header .= "Mime-Version: 1.0 \r\n"; 
						$header .= "Content-Type: text/plain"; 

						$mensaje = "Este mensaje fue enviado por " . $nombre . " " . $apellido. " \r\n"; $mensaje .= "Su e-mail es: " . $_POST['mail'] . " \r\n\r\n"; 
						$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n\r\n"; 

						if((strcmp($telefono,"") != 0)){ 
							$mensaje .= "Tel. de contacto: " . $telefono . " \r\n"; 
						} 

						if((strcmp($localidad,"") != 0)){ 
							$mensaje .= "Localidad: " . $localidad . " \r\n"; 
						} 

						$mensaje .= "\r\nEnviado el " . date('d/m/Y', time()); 

						$para = 'ipem.direccion@amaria.com.ar';
						$asunto = "Mensaje enviado desde http://ipem292.edu.ar"; 

						mail($para, $asunto, utf8_decode($mensaje), $header); 
						header("refresh: 2; url=contacto.php");
						 ?>
						 <big>
						 <br>
						 <br>
						 <br>
						<strong>Mensaje enviado Correctamente.
						<br>
						<br>
						<strong>Aguarde un momento...</strong>
						</big>
				</div>
			</div>
			<div id="pie">
				<pre>
				
				</pre>
			</div>
		</div>
		<div id="firma">
			<?php include("firma.php");?>
		</div>
	</center>
  </body>
</html>