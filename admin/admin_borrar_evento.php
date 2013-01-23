<html>
  <head>
    <title></title>
    <meta content="">
    <style></style>
  </head>
  <body>
	<?php
		session_start();
		include("login.class.php");
		$login=new login();
		$login->inicia();
		include("config.php");
			
		$conexion = mysql_connect("mysql9.000webhost.com", DBUSER, DBPASS) or
						die("Could not connect: " . mysql_error());
		mysql_select_db("a9995569_ipem292");

		$id = $HTTP_GET_VARS["id"];
                $img = $HTTP_GET_VARS["img"];

		$result = mysql_query('DELETE FROM evento WHERE id='.$id);
                unlink($img);
                
		@mysql_free_result($result);
		mysql_close($conexion);
		if($result == true){
			header( "Location: admin_eventos.php");
		}else{
			header( "Location: admin_eventos.php?error_borrar=1");
		}
		
	?>
  </body>
</html>