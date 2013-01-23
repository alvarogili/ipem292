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
                        <span>Criadero intensivo de cerdos bajo galpón</span>
                    </div>
                    <div id="cont_parrafo">
                        <br>                        
                        <span>
                            <span class="sangrar"></span>En el campo de la Formación Técnica Específica en el  cuarto año (Ciclo Orientado)  
                            una de las disciplinas que se abordan es Producción Animal I(cerdos).
                            Los estudiantes alcanzan a partir de la teoría formativa, las capacidades que le 
                            permiten orientar, con relativa autonomía, el proceso de producción de cerdos 
                            y ejecutar las labores propias en sus distintas etapas, incluyendo actividades 
                            de gestión como así también todas aquellas prácticas que hacen al manejo integral 
                            de la explotación, operación con maquinarias, equipos e instalaciones. La función 
                            de esta unidad de producción en pequeña escala, es didáctica y de  autofinanciamiento.<br>
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
                                            <i>Alumnos trabajando en la construcción</i>
                                        </span>                                        
                                    </center>
                                    </td>
                                    </tr>
                                </table>                                
                            </center>
                            <br>
                            <span class="sangrar"></span>Para garantizar el desarrollo de estas competencias, 
                            la escuela tuvo que reemplazar el criadero tradicional y montar un <strong>"Criadero intensivo 
                                de cerdos bajo galpón"</strong>, con la incorporación de las últimas tecnologías  que ofrece el mercado.<br>
                            El nuevo criadero se comenzó a ejecutar a partir de <strong>julio del 2010</strong>, con la ayuda 
                            del <strong>Plan de Mejoras de Escuelas Técnicas, Asociación Cooperadora de la Institución</strong>
                            y la adquisición  de material genético aportado por productores porcinos de la zona.<br>
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
                            <span class="sangrar"></span>El criadero se encuentra actualmente en la etapa de producción de crías, 
                            la misma se inició en marzo del 2011, cuenta con un total de 20 cerdas madres organizadas en 
                            grupos de cuatro animales y dos padrillos. Las instalaciones están organizadas de la siguiente 
                            manera, un <strong>galpón de 275 m<sup>2</sup></strong>, dividido por paredes de mampostería 
                            en cinco módulos; el sistema adoptado de servicio-gestación es a través de jaulas de alojamiento 
                            individual, lactancia con sistema en jaulas y mantas térmicas, post destete, desarrollo y 
                            terminación, comederos secos-húmedos.<br>
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
                                            <i>Colocación de caravanas en reproductores</i>
                                        </span>                                        
                                    </center>
                                    </td>
                                    </tr>
                                </table>                                
                            </center>
                            <br>
                            <span class="sangrar"></span>Se estima una producción anual aproximada de 240 capones terminados.<br>
                            <span class="sangrar"></span>En un futuro cercano se pondrá en funcionamiento un laboratorio 
                            a través de un proyecto presentado por la escuela y al semillero del futuro de <strong>Monsanto Argentina</strong>
                            , para la extracción y procesamiento de semen, para inseminar a las propias cerdas y brindar este 
                            servicio a los productores de la zona.<br>
                            <span class="sangrar"></span>También está previsto en el futuro adquirir un ecógrafo de última 
                            generación de Diagnóstico por imágenes para detectar diagnóstico de preñez, tanto para la producción 
                            de cerdos como para la producción lechera.<br>
                            <span class="sangrar"></span>Además, la institución brinda conjuntamente con el <strong>INTA</strong>
                            capacitación tanto a productores de la zona como a los mismos alumnos a cargo de profesionales 
                            especializados en el tema logrando de esta manera fortalecer los vínculos con la comunidad de 
                            Adelia María  y su región.<br>
                            <span class="sangrar"></span>Esta unidad de producción que se plantea como una alternativa 
                            para la región mereció un espacio para mostrar lo realizado en Revista internacional de 
                            información porcina <strong>infoporK.com ENERO 2011-Nº 7- Año 4-</strong>. <a target="_blank" href="http://www.infopork.com.ar" style="display:inline;color:#000;">www.infopork.com.ar</a> <br>

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