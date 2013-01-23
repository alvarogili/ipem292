<html>
    <head>
        <?php include("head.html"); ?>  
        <link rel="stylesheet" type="text/css" href="prox_eventos.css" title="style">
        <script src="PopBox.js" type="text/javascript"></script> 
        <script type="text/javascript">
            popBoxWaitImage.src = "/imagenes/spinner40.gif";
            popBoxRevertImage = "/imagenes/magminus.gif";
            popBoxPopImage = "/imagenes/magplus.gif";
        </script> 
        <style>
            a {text-decoration: none;}
            a:hover {text-decoration: none;}
        </style>
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
                        <?php
                        /*                         * **********Eventos futuros*********************** */
                        include("admin/config.php");
                        $conexion = mysql_connect(DBServer, DBUSER, DBPASS) or
                                die("Could not connect: " . mysql_error());
                        mysql_select_db(DBName);

                        $today = date('Y-m-d');
                        $result = mysql_query("SELECT titulo, evento, fecha, hora, imagen FROM `evento` WHERE `fecha` >= '" . $today . "' order by `fecha` asc");

                        $num_resultados = mysql_num_rows($result);
                        if ($num_resultados == 0) {
                            echo "<br><br><br>";
                            echo "<div id=\"sin_eventos\">";
                            echo "<span>No se registran eventos próximos</span>";
                            echo "</div>";
                        } else {
                            while ($row = @mysql_fetch_array($result)) {
                                /*                                 * ***************************************** */
                                //convertir fecha
                                //fecha en ingles entrada: 2011-07-11
                                //fecha en espaï¿½ol salida: 11/07/2011
                                $fecha_en_esp = substr($row[2], 8, 2) . '/'; //dia
                                $fecha_en_esp .= substr($row[2], 5, 2) . '/'; //mes
                                $fecha_en_esp .= substr($row[2], 0, 4); //aï¿½o
                                /*                                 * ***************************************** */
                                echo "<div id=\"prox_evento\">";
                                echo "<span><strong>" . $row[0] . "</strong></span>";
                                echo "</div>";
                                echo "<div id=\"detalle\">";
                                if ($row[4] != null) {
                                    echo "<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\">";
                                    echo "<tbody>";
                                    echo "<tr>";
                                    echo "<td style=\"width:90%;font-size:14px;\">";
                                } else {
                                    echo "<br>";
                                }
                                echo "<strong>" . $fecha_en_esp;
                                if ($row[3] != null) {
                                    echo " a las " . substr($row[3], 0, 5) . " hs.";
                                }
                                echo "</strong><br><br>";
                                echo $row[1];
                                echo "<br><br>";
                                if ($row[4] != null) {
                                    echo "</td>";
                                    /* echo "<td style=\"width:7%;text-align:center;\">";  
                                      echo "<img src=\"imagenes/linea_vertical.jpeg\"/>";
                                      echo "<br></td>"; */
                                    echo "<td style=\"text-align:center;\">";
                                    echo "<br>";
                                    echo "<div style=\"background-color: #4e9f7e;padding:10px;
                                        -webkit-border-radius:5px;border-radius:5px;-webkit-box-shadow:1px 1px 3px #888;
                                        -moz-box-shadow:1px 1px 3px #888;behavior:url(border-radius.htc);\">";
                                    echo "<img src=\"admin/" . $row[4] . "\" style=\"width: 120px; height: 100px;\" onclick=\"Pop(this,50,'PopBoxImageLarge');\" title=\"Click para ampliar\" class=\"PopBoxImageSmall\"></img>";
                                    echo "</div>";
                                    echo "<br></td>";
                                    echo "</tr>";
                                    echo "</tbody>";
                                    echo "</table>";
                                }
                                echo "</div><br>";
                            }
                        }
                        ?>
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
    </center>
</body>
</html>