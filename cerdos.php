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
            flashvars.xmlPath = "xml/cerdos.xml";
			
			
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
                        <span>Criadero intensivo de cerdos bajo galp�n</span>
                    </div>
                    <div id="cont_parrafo">
                        <br>                        
                        <span>
                            <span class="sangrar"></span>En el campo de la Formaci�n T�cnica Espec�fica en el  cuarto a�o (Ciclo Orientado)  
                            una de las disciplinas que se abordan es Producci�n Animal I(cerdos).
                            Los estudiantes alcanzan a partir de la teor�a formativa, las capacidades que le 
                            permiten orientar, con relativa autonom�a, el proceso de producci�n de cerdos 
                            y ejecutar las labores propias en sus distintas etapas, incluyendo actividades 
                            de gesti�n como as� tambi�n todas aquellas pr�cticas que hacen al manejo integral 
                            de la explotaci�n, operaci�n con maquinarias, equipos e instalaciones. La funci�n 
                            de esta unidad de producci�n en peque�a escala, es did�ctica y de  autofinanciamiento.<br>
                            <br>
                            <center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos2.jpg" style="width: 350px;">
                                        </td>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos3.jpg" style="width: 350px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">
                                            <i>Alumnos construyendo maqueta del criadero</i>
                                        </span>
                                    </center>
                                    </td>
                                    <td>
                                        <br>
                                    <center>
                                        <span style="font-size:14px;">
                                            <i>Alumnos trabajando en la construcci�n</i>
                                        </span>                                        
                                    </center>
                                    </td>
                                    </tr>
                                </table>                                
                            </center>
                            <br>
                            <span class="sangrar"></span>Para garantizar el desarrollo de estas competencias, 
                            la escuela tuvo que reemplazar el criadero tradicional y montar un <strong>"Criadero intensivo 
                                de cerdos bajo galp�n"</strong>, con la incorporaci�n de las �ltimas tecnolog�as  que ofrece el mercado.<br>
                            El nuevo criadero se comenz� a ejecutar a partir de <strong>julio del 2010</strong>, con la ayuda 
                            del <strong>Plan de Mejoras de Escuelas T�cnicas, Asociaci�n Cooperadora de la Instituci�n</strong>
                            y la adquisici�n  de material gen�tico aportado por productores porcinos de la zona.<br>
                            <br>
                            <center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos4.jpg" style="width: 350px;">
                                        </td>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos5.jpg" style="width: 350px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">
                                            <i>Alumnos y profesor colocando el piso</i>
                                        </span>
                                    </center>
                                    </td>
                                    <td>
                                        <br>
                                    <center>
                                        <span style="font-size:14px;">
                                            <i>Alumnos ultimando detalles</i>
                                        </span>                                        
                                    </center>
                                    </td>
                                    </tr>
                                </table>                                
                            </center>
                            <br>
                            <span class="sangrar"></span>El criadero se encuentra actualmente en la etapa de producci�n de cr�as, 
                            la misma se inici� en marzo del 2011, cuenta con un total de 20 cerdas madres organizadas en 
                            grupos de cuatro animales y dos padrillos. Las instalaciones est�n organizadas de la siguiente 
                            manera, un <strong>galp�n de 275 m<sup>2</sup></strong>, dividido por paredes de mamposter�a 
                            en cinco m�dulos; el sistema adoptado de servicio-gestaci�n es a trav�s de jaulas de alojamiento 
                            individual, lactancia con sistema en jaulas y mantas t�rmicas, post destete, desarrollo y 
                            terminaci�n, comederos secos-h�medos.<br>
                            <br>
                            <center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos8.jpg" style="width: 350px;">
                                        </td>
                                        <td>
                                    <center>
                                        <img src="imagenes/secciones/cerdos/cerdos9.jpg" style="height: 262px;">
                                    </center>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">
                                            <i>Limpieza en modulo de servicio</i>
                                        </span>
                                    </center>
                                    </td>
                                    <td>
                                        <br>
                                    <center>
                                        <span style="font-size:14px;">
                                            <i>Colocaci�n de caravanas en reproductores</i>
                                        </span>                                        
                                    </center>
                                    </td>
                                    </tr>
                                </table>                                
                            </center>
                            <br>
                            <span class="sangrar"></span>Se estima una producci�n anual aproximada de 240 capones terminados.<br>
                            <span class="sangrar"></span>En un futuro cercano se pondr� en funcionamiento un laboratorio 
                            a trav�s de un proyecto presentado por la escuela y al semillero del futuro de <strong>Monsanto Argentina</strong>
                            , para la extracci�n y procesamiento de semen, para inseminar a las propias cerdas y brindar este 
                            servicio a los productores de la zona.<br>
                            <span class="sangrar"></span>Tambi�n est� previsto en el futuro adquirir un ec�grafo de �ltima 
                            generaci�n de Diagn�stico por im�genes para detectar diagn�stico de pre�ez, tanto para la producci�n 
                            de cerdos como para la producci�n lechera.<br>
                            <span class="sangrar"></span>Adem�s, la instituci�n brinda conjuntamente con el <strong>INTA</strong>
                            capacitaci�n tanto a productores de la zona como a los mismos alumnos a cargo de profesionales 
                            especializados en el tema logrando de esta manera fortalecer los v�nculos con la comunidad de 
                            Adelia Mar�a  y su regi�n.<br>
                            <span class="sangrar"></span>Esta unidad de producci�n que se plantea como una alternativa 
                            para la regi�n mereci� un espacio para mostrar lo realizado en Revista internacional de 
                            informaci�n porcina <strong>infoporK.com ENERO 2011-N� 7- A�o 4-</strong>. <a target="_blank" href="http://www.infopork.com.ar" style="display:inline;color:#000;">www.infopork.com.ar</a> <br>

<!-- <center>
    <div id="FlabellComponent" style="float:left;">
        <p>In order to view this object you need Flash Player 9+ support!</p>
        <a href="http://www.adobe.com/go/getflashplayer">
            <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>
        </a>
    </div>  
</center>
<br>
<br>-->
                        </span>
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