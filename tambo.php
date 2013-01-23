<html>
    <head>
        <?php include("head.html"); ?>
        <script type="text/javascript" src="js/swfobject.js"></script>

        <script type="text/javascript">
			
            // JAVASCRIPT VARS
            // cache buster
            var cacheBuster = "?t=" + Date.parse(new Date());
            // stage dimensions		
            var stageW = "700";//"100%";
            var stageH = "500";//"100%";
			
			
            // ATTRIBUTES
            var attributes = {};
            attributes.id = 'FlabellComponent';
            attributes.name = 'FlabellComponent';

            // PARAMS
            var params = {};
            params.bgcolor = "#ffffff";
            params.menu = "false";
            params.scale = 'noScale';
            params.wmode = "opaque";
            params.allowfullscreen = "true";
            params.allowScriptAccess = "always";			
			
			
            /* FLASH VARS */
            var flashvars = {};
			
            /// if commented / delete these lines, the component will take the stage dimensions defined 
            /// above in "JAVASCRIPT SECTIONS" section or those defined in the settings xml
            flashvars.componentWidth = stageW;
            flashvars.componentHeight = stageH;
			
            /// path to the content folder(where the xml files, images or video are nested)
            /// if you want to use absolute paths(like "http://domain.com/images/....") then leave it empty("")			
            flashvars.pathToFiles = "banner/";
			
            // path to content XML
            flashvars.xmlPath = "xml/tambo.xml";
			
			
            /** EMBED THE SWF**/
            swfobject.embedSWF("preview.swf"+cacheBuster, attributes.id, stageW, stageH, "9.0.124", "js/expressInstall.swf", flashvars, params, attributes);
			
        </script>
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
                    <div id="titulo_parrafo">                        
                        <span>Producción láctea</span>
                    </div>
                    <div id="cont_parrafo">
                        <br>                        
                        <span>
                            <span class="sangrar"></span>La sección didáctico productiva referida a la producción 
                            láctea se instaló en la escuela a partir de la década del ochenta.<br>
                            <span class="sangrar"></span>Los avances propios del área y la necesidad de trasladar 
                            el primer tambo a otro espacio hicieron que hacia fines del año <strong>2007</strong> se 
                            iniciara una nueva etapa donde se aunaron esfuerzos en pos de la construcción de un tambo, 
                            que por sus características, fuese modelo en la región.<br><br>
                            <center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/tambo/tambo1.jpg" style="width: 350px; height: 179px;">
                                        </td>
                                        <td>
                                            <img src="imagenes/secciones/tambo/tambo2.jpg" style="width: 350px;">
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <i>Primera etapa en la construcción</i>
                            </center>                            
                            <br>
                            <span class="sangrar"></span>El <strong>17 de junio de 2008</strong> quedó inaugurado en 
                            un espacio de tres mil quinientos metros cuadrados un tambo que con la incorporación 
                            de modernas tecnologías tiene como propósito que los estudiantes adquieran 
                            conocimientos prácticos a la par de los teóricos.<br>
                            <span class="sangrar"></span>El tambo es un modelo <strong>semiestabulado</strong> (corral de encierre permanente 
                            en seco), con 22 vacas en ordeñe que producen alrededor de 25 litros de leche diarios en 
                            promedio por vaca con una composición de 4,35 % de grasa  y 3,64% de proteína. 
                            La base forrajera es propia; se hace silaje de maíz, a los que se les suman expeller
                            de soja y trigo, urea, heno de alfalfa, semillas de algodón, sales LAP, soja o sojilla.<br><br>
                            <center>
                                <table>
                                    <tr>                                        
                                        <td>
                                            <img src="imagenes/secciones/tambo/tambo3.jpg" style="width: 350px;">
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <i>Alimentación</i>
                            </center>                            
                            <br>
                            <span class="sangrar"></span>Se cuenta con un corral para los animales, un patio de comidas, 
                            corral de recría y sala de balanceados. Mientras que en el interior la instalación posee 
                            sala de ordeñe con una ordeñadora de espina de pescado en 45º con 4 bajadas, sala de leche 
                            con un equipo de frío de 900 litros de capacidad; hay, además, sanitarios, salas de máquinas 
                            y pasillo vidriado que permite a los visitantes la observación de la práctica de ordeñe.<br><br>
                            <center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/tambo/tambo4.jpg" style="width: 350px;">
                                        </td>
                                        <td>
                                            <img src="imagenes/secciones/tambo/tambo5.jpg" style="width: 350px;">
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <i>Interior de las Instalaciones</i>
                            </center>                            
                            <br>
                            <span class="sangrar"></span>El destino de lo producido es entregado a <strong>SanCor</strong> 
                            reservándose para la sala de industrias de la escuela doscientos litros por semana que son 
                            utilizados para la elaboración de dulce de leche.<br>
                            <span class="sangrar"></span>Los estudiantes de quinto año en la disciplina <strong>Producción 
                                Animal II</strong>, aprenden sobre producción láctea en el aula, pero además realizan 
                            todas las tareas en el tambo en los dos horarios (5:00 hs. y 16:30 hs.) que se hace la 
                            práctica de ordeñe. A partir de este año la incorporación en el <strong>PDT (Programa 
                                Desarrollo Tecnológico) de SanCor</strong> posibilitó la adquisición de contenidos 
                            para capacitar al alumnado en la gestión empresarial de un tambo.<br><br>
                            <center>
                                <table>
                                    <tr>                                        
                                        <td>
                                            <img src="imagenes/secciones/tambo/tambo6.jpg" style="width: 350px;">
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <i>Estudiantes en práctica de ordeñe</i>
                            </center>                            
                            <br>
                            <span class="sangrar"></span>En una sana competencia, que busca fortalecer las capacidades en esta 
                            temática, los alumnos se preparan, cada año, para participar en <strong>MERCOLÁCTEA</strong>, en las 
                            <strong>Olimpíadas Lácteas</strong> que se realizan en San Francisco.<br>
                            <span class="sangrar"></span>Esta adquisición de competencias, propuesta año tras año, se enriquece 
                            con la realización del Curso de Inseminación Artificial dictado por el Jefe Sectorial de la escuela, 
                            <strong>Médico Veterinario Norberto Mola</strong> quien emprende esta acción conjuntamente con 
                            <strong>EL CIAVT</strong> (Centro Inseminación Artificial Venado Tuerto).<br><br>
                            <center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/tambo/tambo7.jpg" style="width: 350px;">
                                        </td>
                                        <td>
                                            <img src="imagenes/secciones/tambo/tambo8.jpg" style="width: 350px;">
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <i>Estudiantes inseminando</i>
                            </center>                            
                            <br>
                            <span class="sangrar"></span>Mientras tanto, en sexto año, <strong>"el manejo integral de un tambo 
                                estabulado"</strong> es uno de los proyectos de las Prácticas Profesionalizantes con el que 
                            los estudiantes acreditan ciento veinte horas reloj que le permiten obtener el título de 
                            <strong>Técnicos de Nivel Medio en Producción Agropecuaria.</strong><br><br>
                            <center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/tambo/tambo9.jpg" style="width: 350px;">
                                        </td>
                                        <td>
                                            <img src="imagenes/secciones/tambo/tambo10.jpg" style="width: 350px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">
                                            <i>Extracción de Sangre para Análisis</i>
                                        </span>
                                    </center>
                                    </td>
                                    <td>
                                        <br>
                                    <center>
                                        <span style="font-size:14px;">
                                            <i>Castración de Terneros</i>
                                        </span>                                        
                                    </center>
                                    </td>
                                    </tr>
                                </table>                                
                            </center>                            
                            <br>
                            <span class="sangrar"></span>Brindar capacidades a los jóvenes para que en el futuro próximo 
                            puedan insertarse exitosamente a las exigencias del nuevo escenario agroalimentario internacional 
                            compromete a la Institución a desarrollar un trabajo conjunto con el <strong>INTA</strong> 
                            generando las más diversas capacitaciones. Estas tienen, además, como destinatarios a los 
                            productores tamberos de la localidad y su región. El beneplácito del sector agropecuario hacia 
                            la modalidad de la Educación Técnica permite impulsar acciones que realizan un acompañamiento 
                            efectivo en la transformación y perfeccionamiento de los criterios comúnmente empleados en la 
                            producción y gestión de los establecimientos tamberos donde se encontró una adhesión del sector 
                            a la invitación para transitar un camino compartido de mejora sostenible que redunda en beneficio 
                            de esta comunidad educativa.<br>
                        </span>
                        <br>
                        <!--<center>
                            <div id="FlabellComponent" style="float:left;">
                                <p>In order to view this object you need Flash Player 9+ support!</p>
                                <a href="http://www.adobe.com/go/getflashplayer">
                                    <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>
                                </a>
                            </div>  
                            <br>
                            <br>
                        </center>-->
                    </div>

                    <div id="titulo_parrafo">                        
                        <span>Curso "El profesional tambero"</span>
                    </div>
                    <div id="cont_parrafo">
                        <br>
                        <span>
                            <p>
                                <img src="imagenes/secciones/tambo/curso.jpg" align=left hspace=12>
                            </p>
                            <br>
                            <br>
                            <br>
                            Destinado a alumnos y productores,
                            dictado por profesionales de INTA.<br>
                            <br>
                            Para otra información, consultar a:<br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="imagenes/Point Blue.png">
                            &nbsp;Revista San Cor, Año LXIX. Diciembre 2010,p.p.58-62
                            </img>                                        
                        </span>
                        <br>
                        <br>
                    </div>
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