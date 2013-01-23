<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />    
        <link rel="shortcut icon" href="../imagenes/LOGO_ESCUELA.ico" type="image/x-icon">	
        <title>IPEM N°292 - Modo Administrador</title>	
        <!-- calendario -->
        <link type="text/css" rel="stylesheet" href="src/css/jscal2.css" />
        <link type="text/css" rel="stylesheet" href="src/css/border-radius.css" />
        <link id="skin-steel" title="Steel" type="text/css" rel="alternate stylesheet" href="src/css/steel/steel.css" />
        <script src="src/js/jscal2.js"></script>
        <script src="src/js/lang/es.js"></script>
        <!---->
        <link rel="stylesheet" type="text/css" href="admin.css" title="style" />
        <script type="text/javascript">
            function enabler(){	
                if(document.hora){		
                    hora.disabled = !enable_hora.checked;
                    minuto.disabled = !enable_hora.checked;
                }else{
                    hora = document.getElementById("hora");
                    minuto = document.getElementById("minuto");
                    enable_hora = document.getElementById("enable_hora");
                    hora.disabled = !enable_hora.checked;
                    minuto.disabled = !enable_hora.checked;
                }
            }
		
            //busca caracteres que no sean espacio en blanco en una cadena 
            function vacio(q) { 
                for ( i = 0; i < q.length; i++ ) { 
                    if ( q.charAt(i) != " " ) { 
                        return false 
                    } 
                } 
                return true 
            } 
            
            String.prototype.endsWith = function(str)
            {return (this.match(str+"$")==str)}

            //valida que los campos no esten vacios y no tengan solo espacios en blanco 
            function checkFields(F) { 
                if( vacio(F.titulo.value) == true ||
                    vacio(F.detalle.value) == true ||
                    vacio(F.fecha.value) == true) { 
                    alert('Los campos marcados con (*) son obligatorios.\n\nPor favor asegurese de completarlos correctamente para continuar.');
                    return false; 
                }else {                     
                    if(vacio(F.imagen.value)){                        
                        return true;
                    }else{
                        if (F.imagen.value.endsWith(".jpg") ||
                            F.imagen.value.endsWith(".png") ||
                            F.imagen.value.endsWith(".bmp") ||
                            F.imagen.value.endsWith(".gif") ||
                            F.imagen.value.endsWith(".jpeg")){
                                                    
                            
                            // verifica que el nombre de la imagen no tenga caracteres raros
                            if(/^\w[:\\\w-\.\s]+\.(jpg|png|jpeg|bmp|gif)$/.test(F.imagen.value)){

                                return true;
                            }else{
                                alert('El nombre del archivo imágen a cargar puede contener sólo letras,\nnúmeros, guión medio (-), guión bajo(_) y espacios en blanco.\nPor favor verifique.');
                                return false;                                
                            }
                        }else{
                            alert('La imagen ingresada debe ser de tipo jpg, jpeg, png, bmp o gif');
                            return false;
                        }
                    }
                } 
            } 
		
            function borrar(titulo, id,imagen){
                if(confirm("Realmente desea borrar el evento " + titulo)){
                    window.location = "admin_borrar_evento.php?id="+id+"&img="+imagen;
                }
            }
            
            function cambiaTamanio(){
                if (document.images) {
                    document.images.logo.width=200;
                    document.images.logo.height=200;
                } else {
                    logo = document.getElementById("logo");
                    logo.width = 200;
                    logo.height = 200;
                }
            }
        
        </script>
    </head>
    <body alink="#eff9f5" link="#eff9f5" vlink="#eff9f5">
    <center>
        <div id="todo_index">
            <?php
            session_start();
            include("login.class.php");
            $login = new login();
            $login->inicia();
            if (isset($_GET['error'])) {
                echo '<br><br><div id="error" style="color:red;">
						<center>
							<h4>Error al guardar el evento. Reintente por favor.</h4>
						</center>
					</div>';
            }
            if (isset($_GET['error_borrar'])) {
                echo '<br><br><div id="error" style="color:red;">
						<center>
							<h4>Error al borrar el evento. Reintente por favor.</h4>
						</center>
					</div>';
            }
            ?>
            <br>
            <div style="text-align:left;">
                <a href="admin_main.php">
                    &nbsp;&nbsp;<img src="../imagenes/volver.png"/>
                </a>
            </div>
            <center>
                <div style="background-color:#fff">
                    <h4><i>Lista de eventos futuros</i></h4>
                </div>
                <div id="eventos">
                    <?php
                    /*                     * **********Eventos futuros*********************** */
                    include("config.php");
                    $conexion = mysql_connect("mysql9.000webhost.com", DBUSER, DBPASS) or
                            die("Could not connect: " . mysql_error());
                    mysql_select_db("a9995569_ipem292");

                    $today = date('Y-m-d');
                    /* select para sacar fotos a borrar */
                    $result = mysql_query("SELECT imagen FROM `evento` WHERE `fecha` < '" . $today . "'");
                    $num_resultados = mysql_num_rows($result);                                       
                    if ($num_resultados > 0) {
                        /*borrar fotos viejas*/
                        while ($row = @mysql_fetch_array($result)) {
                            unlink($row[0]);
                        }
                    }
                    /*borrar eventos viejos*/
                    mysql_query("DELETE FROM `evento` WHERE `fecha` < '" . $today . "'");
                    $result = mysql_query("SELECT id,titulo, evento, fecha, hora, imagen FROM `evento` WHERE `fecha` >= '" . $today . "' order by `fecha` asc");

                    $num_resultados = mysql_num_rows($result);
                    if ($num_resultados > 0) {
                        echo "<table style=\"text-align: left; width: 1000px;\" border=\"1\" cellpadding=\"2\" cellspacing=\"0\">";
                        echo "<tbody>";
                        echo "<tr bgcolor=\"white\">";
                        echo "<td width=\"20%\">Título del evento</td>";
                        echo "<td width=\"50%\">Detalle</td>";
                        echo "<td width=\"15%\">Fecha</td>";
                        echo "<td width=\"10%\">Imágen</td>";
                        echo "<td width=\"5%\"></td>";
                        echo "</tr>";

                        while ($row = @mysql_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td width=\"20%\">" . $row[1] . "</td>";
                            echo "<td width=\"50%\">" . $row[2] . "</td>";
                            /*                             * ***************************************** */
                            //convertir fecha
                            //fecha en ingles entrada: 2011-07-11
                            //fecha en español salida: 11/07/2011
                            $fecha_en_ingles = substr($row[3], 8, 2) . '/'; //dia
                            $fecha_en_ingles .= substr($row[3], 5, 2) . '/'; //mes
                            $fecha_en_ingles .= substr($row[3], 0, 4); //año
                            /*                             * ***************************************** */
                            echo "<td width=\"15%\">" . $fecha_en_ingles;
                            if ($row[4] != null) {
                                echo " a las " . substr($row[4], 0, 5) . "</td>";
                            }
                            /* imagen */
                            echo "<td width=\"10%\">";
                            if ($row[5] != null) {
                                echo "<img src=\"" . $row[5] . "\" style=\"width: 120px; height: 100px;\" oncontextmenu=\"return false\"></img>";
                            }
                            echo "</td>";

                            $titulo = str_replace('"', '\\\'', $row[1]);
                            echo "<td width=\"5%\" style=\"text-align:center;\"><a href=\"#\" onclick=\"borrar('" . $titulo . "','" . $row[0] . "','" . $row[5] . "');\"><img src=\"../imagenes/b_drop.png\"/ title=\"Borrar evento\"></a></td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                    } else {
                        echo "No existen eventos futuros";
                    }
                    @mysql_free_result($result);
                    mysql_close($conexion);
                    /*                     * ************************************************ */
                    ?>					
                </div>
                <div style="background-color:#fff">
                    <h4><i>Agregar nuevo evento</i></h4>
                </div>		
                <div id="nuevo_evento">

                    <form id="addEvento" method="post" onsubmit="return checkFields(this);" action="guardar_evento.php" enctype="multipart/form-data"> 
                        <table style="text-align: center; width: 500px;border:1px solid #000000;" border="0" cellpadding="2">
                            <tbody>
                                <tr>
                                    <td><br>Título del evento*:<br><br></td>
                                    <td>
                                        <br>
                                        <input name="titulo" type="text" size="40"/>
                                        <br><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td><br>Detalle*:<br><br></td>
                                    <td>
                                        <br>
                                        <textarea name="detalle" type="text" rows="8" cols="30" tabindex="6"></textarea>
                                        <br>
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td><br>Fecha del evento*:<br><br></td>
                                    <td style="text-align: center;"><br>
                                        <input name="fecha" id = "fecha" type="text" size="20" readonly="readonly"/>&nbsp;
                                        <button id="calendar-trigger">Seleccione</button>
                                        <script type="text/javascript">
                                            Calendar.setup({
                                                fdow: 0,			
                                                dateFormat: "%d/%m/%Y",
                                                inputField : "fecha",
                                                trigger    : "calendar-trigger",
                                                onSelect   : function() { this.hide() }
                                            });

                                            cal.fdow = 0;
                                            cal.redraw();
                                        </script>
                                        <br>
                                        <br>
                                    </td>
                                </tr>							
                                <tr>
                                    <td colspan="2">
                                        <br>
                                        <input name="enable_hora" id="enable_hora" type="checkbox" style="text-align: center;" onclick="enabler()">Incluir la hora del evento</input>&nbsp;&nbsp;&nbsp;
                                        <select name="hora" id="hora" disabled>
                                            <option value="00">00</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                        </select>
                                        <select name="minuto" id="minuto" disabled>
                                            <option value="00">00</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option>
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                            <option value="40">40</option>
                                            <option value="41">41</option>
                                            <option value="42">42</option>
                                            <option value="43">43</option>
                                            <option value="44">44</option>
                                            <option value="45">45</option>
                                            <option value="46">46</option>
                                            <option value="47">47</option>
                                            <option value="48">48</option>
                                            <option value="49">49</option>
                                            <option value="50">50</option>
                                            <option value="51">51</option>
                                            <option value="52">52</option>
                                            <option value="53">53</option>
                                            <option value="54">54</option>
                                            <option value="55">55</option>
                                            <option value="56">56</option>
                                            <option value="57">57</option>
                                            <option value="58">58</option>
                                            <option value="59">59</option>
                                        </select>									
                                        Hrs.
                                        <br><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td><br>Imágen:<br><br></td>
                                    <td style="text-align: center;"><br>
                                        <input name="imagen" id = "imagen" type="file" size="20" />&nbsp;
                                        <br>
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td><br>
                                    </td>
                                    <td style="text-align: right;"><input name="Submit" value="Guardar" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                                    </td>
                                </tr>							
                            </tbody>
                        </table>
                    </form>
                </div>		
            </center>
            <div style="text-align:left;">
                <a href="admin_main.php">
                    &nbsp;&nbsp;<img src="../imagenes/volver.png"/>
                </a>
            </div>
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
        <center>
            </body>
            </html>