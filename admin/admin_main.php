<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />    
	<link rel="shortcut icon" href="../imagenes/LOGO_ESCUELA.ico" type="image/x-icon">	
	<title>IPEM N°292 - Modo Administrador</title>
	
	<link rel="stylesheet" type="text/css" href="admin.css" title="style" />
</head>
<body alink="#eff9f5" link="#eff9f5" vlink="#eff9f5">
	<body>
		<center>
			<div id="todo_index">
				<?php
					session_start();
					include("login.class.php");
					$login=new login();
					$login->inicia();
				?>
				<br>
				<br>
				<br>
				<br>
				<br>
				<table border="0" cellpadding="0" cellspacing="0" align="center">				
					<tr>
						<td>
							<center>
							<br>
							<h2><i>Modo administrador</i></h2>
							</center>
						</td>				
					</tr>
					<tr>
						<td>
							<center>
							<br>
							<a href="admin_eventos.php">
								<img src="../imagenes/adminEventos.png"/>
							</a>
							</center>
						</td>				
					</tr>
					<!--<tr>
						<td>
							<center>
							<br>
							
								<img src="../imagenes/addFotos.png"/>					
							</center>
						</td>					
					</tr>-->
					<tr>
						<td>
							<center>
							<br>
							<a href="http://ipem292.edu.ar/inicio.php" target="_blank">
								<img src="../imagenes/pagPrincipal.png"/>
							</a>
							</center>
						</td>				
					</tr>
					<tr>
						<td>
							<center>
							<br>
							<a href="logout.php">
								<img src="../imagenes/cerrarSesion.png"/>
							</a>
							</center>
						</td>					
					</tr>
				</table>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</div>
			<div style="text-align: center;">
				<br>
				<a href="http://alvarogili.com.ar" target="_blank">
					<small style="font-style: italic;">
					<span style="font-family: Arial;color: rgb(0, 0, 0);">Diseño&nbsp;
					</span>
				</small>
					<img style="border: 0px solid ; width: 100px; height: 13px;" alt="" src="../imagenes/logo_alvaro_gili.png">
				</a>
			 </div>
		</center>
  </body>
</html>