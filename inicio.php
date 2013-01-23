<html>
    <head>
        <?php
        /*if (strpos($_SERVER['HTTP_USER_AGENT'], 'Googlebot') !== false) {
            $para = 'alvarogili@gmail.com';
            $titulo = 'Alerta de Googlebot';
            $mensaje = 'Página visitada: ' . $_SERVER['REQUEST_URI'];
            $cabeceras = 'From: webmaster@ipem292.edu.ar' . "\r\n" .
                    'Reply-To: webmaster@ipem292.edu.ar' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

            mail($para, $titulo, $mensaje, $cabeceras);
        }*/
        ?>
        <?php include("head.html"); ?>
    </head>
    <body>
    <center>
        <div id="todo">
            <div id="cabecera">
                <?php include("cabecera.html"); ?>				
            </div>
            <div id="menu_contenedor">
                <?php include("menu.php"); ?>                
            </div>
            <div id="cuerpo">
                <div id="margen_cuerpo"> </div>
                <div id="contenido"> 
                    <center>
                        <img src="imagenes/frente.jpg">
                    </center>
                </div>
            </div>
            <div id="pie">
                <pre>
				
                </pre>
            </div>
        </div>	
        <div id="firma">
            <?php include("firma.php"); ?>
        </div>
	<br>
	<br>
	<div style=text-align:center>
		<script type="text/javascript"><!--
			google_ad_client = "ca-pub-7772189878652683";
			/* Educacion */
			google_ad_slot = "7178230371";
			google_ad_width = 468;
			google_ad_height = 60;
			//-->
		</script>
		<script type="text/javascript"
			src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
		<script type="text/javascript"><!--
			google_ad_client = "ca-pub-7772189878652683";
			/* Educacion */
			google_ad_slot = "7178230371";
			google_ad_width = 468;
			google_ad_height = 60;
			//-->
		</script>
		<script type="text/javascript"
			src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>	
	</div>
    </center>
</body>
</html>