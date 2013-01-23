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
        $login = new login();
        $login->inicia();

        include("config.php");

        /*         * ***************************************** */
        /* subir foto */
        $imagen = $_FILES['imagen']['name'];

        $subio = true;
        if ($imagen != null) {
            $destino = 'imgEventos';
            /* ver si existe un archivo con ese nombre en el servidor */
            $count = 0;
            while (file_exists($destino . '/' . $imagen)) {
                
                /*cambiar nombre*/                
                $imagen = $count . "_" . $imagen;
                $count = $count +1;
            }
            
            $imagen = $destino . '/' . $imagen;
            
            if (copy($_FILES['imagen']['tmp_name'], $imagen)) {
                
            } else {
                $subio = false;
            }
        }
        if ($subio) {

            /*             * ***************************************** */

            $conexion = mysql_connect("mysql9.000webhost.com", DBUSER, DBPASS) or
                    die("Could not connect: " . mysql_error());

            mysql_select_db("a9995569_ipem292");

            $titulo = $_POST['titulo'];
            $detalle = $_POST['detalle'];
            $detalle = nl2br($detalle);/*reemplazo enters por <br>*/
            $fecha = $_POST['fecha'];

            /*             * ***************************************** */
            //convertir fecha		
            //fecha en español entrada: 11/07/2011
            //fecha en ingles salida: 2011-07-11
            $fecha_en_esp = substr($fecha, 6, 4) . '-'; //año
            $fecha_en_esp .= substr($fecha, 3, 2) . '-'; //mes
            $fecha_en_esp .= substr($fecha, 0, 2); //dia
            $fecha = $fecha_en_esp;
            /*             * ***************************************** */

            $enable_hora = $_POST['enable_hora'];
            $hora = null;
            
            if ($imagen != null) {
                /*agrego comillas*/
                $imagen = '\''.$imagen.'\'';
            }else{
                $imagen = 'NULL';
            }
            
            if ($enable_hora == 'on') {
                $hora = $_POST['hora'] . ':' . $_POST['minuto'];
                $result = mysql_query('INSERT INTO `evento`(`titulo`,`evento`,`fecha`,`hora`,`imagen`) VALUES(\'' . $titulo . '\',\'' . $detalle . '\',\'' . $fecha . '\',\'' . $hora . '\',' . $imagen . ')');
            } else {
                $result = mysql_query('INSERT INTO `evento`(`titulo`,`evento`,`fecha`,`hora`,`imagen`) VALUES(\'' . $titulo . '\',\'' . $detalle . '\',\'' . $fecha . '\',NULL,' . $imagen . ')');
            }


            @mysql_free_result($result);
            mysql_close($conexion);
        } else {
            $result = false;
        }
        if ($result == true) {
            header("Location: admin_eventos.php");
        } else {
            header("Location: admin_eventos.php?error=1");
        }
        ?>
    </body>
</html>