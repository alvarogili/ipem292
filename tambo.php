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
                        <span>Producci�n l�ctea</span>
                    </div>
                    <div id="cont_parrafo">
                        <br>                        
                        <span>
                            <span class="sangrar"></span>La secci�n did�ctico productiva referida a la producci�n 
                            l�ctea se instal� en la escuela a partir de la d�cada del ochenta.<br>
                            <span class="sangrar"></span>Los avances propios del �rea y la necesidad de trasladar 
                            el primer tambo a otro espacio hicieron que hacia fines del a�o <strong>2007</strong> se 
                            iniciara una nueva etapa donde se aunaron esfuerzos en pos de la construcci�n de un tambo, 
                            que por sus caracter�sticas, fuese modelo en la regi�n.<br><br>
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
                                <i>Primera etapa en la construcci�n</i>
                            </center>                            
                            <br>
                            <span class="sangrar"></span>El <strong>17 de junio de 2008</strong> qued� inaugurado en 
                            un espacio de tres mil quinientos metros cuadrados un tambo que con la incorporaci�n 
                            de modernas tecnolog�as tiene como prop�sito que los estudiantes adquieran 
                            conocimientos pr�cticos a la par de los te�ricos.<br>
                            <span class="sangrar"></span>El tambo es un modelo <strong>semiestabulado</strong> (corral de encierre permanente 
                            en seco), con 22 vacas en orde�e que producen alrededor de 25 litros de leche diarios en 
                            promedio por vaca con una composici�n de 4,35 % de grasa  y 3,64% de prote�na. 
                            La base forrajera es propia; se hace silaje de ma�z, a los que se les suman expeller
                            de soja y trigo, urea, heno de alfalfa, semillas de algod�n, sales LAP, soja o sojilla.<br><br>
                            <center>
                                <table>
                                    <tr>                                        
                                        <td>
                                            <img src="imagenes/secciones/tambo/tambo3.jpg" style="width: 350px;">
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <i>Alimentaci�n</i>
                            </center>                            
                            <br>
                            <span class="sangrar"></span>Se cuenta con un corral para los animales, un patio de comidas, 
                            corral de recr�a y sala de balanceados. Mientras que en el interior la instalaci�n posee 
                            sala de orde�e con una orde�adora de espina de pescado en 45� con 4 bajadas, sala de leche 
                            con un equipo de fr�o de 900 litros de capacidad; hay, adem�s, sanitarios, salas de m�quinas 
                            y pasillo vidriado que permite a los visitantes la observaci�n de la pr�ctica de orde�e.<br><br>
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
                            reserv�ndose para la sala de industrias de la escuela doscientos litros por semana que son 
                            utilizados para la elaboraci�n de dulce de leche.<br>
                            <span class="sangrar"></span>Los estudiantes de quinto a�o en la disciplina <strong>Producci�n 
                                Animal II</strong>, aprenden sobre producci�n l�ctea en el aula, pero adem�s realizan 
                            todas las tareas en el tambo en los dos horarios (5:00 hs. y 16:30 hs.) que se hace la 
                            pr�ctica de orde�e. A partir de este a�o la incorporaci�n en el <strong>PDT (Programa 
                                Desarrollo Tecnol�gico) de SanCor</strong> posibilit� la adquisici�n de contenidos 
                            para capacitar al alumnado en la gesti�n empresarial de un tambo.<br><br>
                            <center>
                                <table>
                                    <tr>                                        
                                        <td>
                                            <img src="imagenes/secciones/tambo/tambo6.jpg" style="width: 350px;">
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <i>Estudiantes en pr�ctica de orde�e</i>
                            </center>                            
                            <br>
                            <span class="sangrar"></span>En una sana competencia, que busca fortalecer las capacidades en esta 
                            tem�tica, los alumnos se preparan, cada a�o, para participar en <strong>MERCOL�CTEA</strong>, en las 
                            <strong>Olimp�adas L�cteas</strong> que se realizan en San Francisco.<br>
                            <span class="sangrar"></span>Esta adquisici�n de competencias, propuesta a�o tras a�o, se enriquece 
                            con la realizaci�n del Curso de Inseminaci�n Artificial dictado por el Jefe Sectorial de la escuela, 
                            <strong>M�dico Veterinario Norberto Mola</strong> quien emprende esta acci�n conjuntamente con 
                            <strong>EL CIAVT</strong> (Centro Inseminaci�n Artificial Venado Tuerto).<br><br>
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
                            <span class="sangrar"></span>Mientras tanto, en sexto a�o, <strong>"el manejo integral de un tambo 
                                estabulado"</strong> es uno de los proyectos de las Pr�cticas Profesionalizantes con el que 
                            los estudiantes acreditan ciento veinte horas reloj que le permiten obtener el t�tulo de 
                            <strong>T�cnicos de Nivel Medio en Producci�n Agropecuaria.</strong><br><br>
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
                                            <i>Extracci�n de Sangre para An�lisis</i>
                                        </span>
                                    </center>
                                    </td>
                                    <td>
                                        <br>
                                    <center>
                                        <span style="font-size:14px;">
                                            <i>Castraci�n de Terneros</i>
                                        </span>                                        
                                    </center>
                                    </td>
                                    </tr>
                                </table>                                
                            </center>                            
                            <br>
                            <span class="sangrar"></span>Brindar capacidades a los j�venes para que en el futuro pr�ximo 
                            puedan insertarse exitosamente a las exigencias del nuevo escenario agroalimentario internacional 
                            compromete a la Instituci�n a desarrollar un trabajo conjunto con el <strong>INTA</strong> 
                            generando las m�s diversas capacitaciones. Estas tienen, adem�s, como destinatarios a los 
                            productores tamberos de la localidad y su regi�n. El benepl�cito del sector agropecuario hacia 
                            la modalidad de la Educaci�n T�cnica permite impulsar acciones que realizan un acompa�amiento 
                            efectivo en la transformaci�n y perfeccionamiento de los criterios com�nmente empleados en la 
                            producci�n y gesti�n de los establecimientos tamberos donde se encontr� una adhesi�n del sector 
                            a la invitaci�n para transitar un camino compartido de mejora sostenible que redunda en beneficio 
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
                            Para otra informaci�n, consultar a:<br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="imagenes/Point Blue.png">
                            &nbsp;Revista San Cor, A�o LXIX. Diciembre 2010,p.p.58-62
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