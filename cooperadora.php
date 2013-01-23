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
            flashvars.xmlPath = "xml/cooperadora.xml";
			
			
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
                        <span>Asociación Cooperadora</span>
                    </div>
                    <div id="cont_parrafo">
                        <br>                        
                        <span>
                            <i>
                                <span class="sangrar">El crecimiento sostenido en el tiempo, </span>
                                de nuestra institución, fue posible gracias a un grupo de padres que desde el 
                                año <strong>1976</strong>, se unió para formar la Asociación Cooperadora, 
                                su primer presidente fue el Señor <strong>Enrique Urrutia</strong>, a partir 
                                de ese momento quedan en la memoria colectiva, el andar de hombres 
                                y mujeres que incondicionalmente prestaron su apoyo para recaudar fondos con 
                                el propósito de que esta escuela creciera.<br>
                                <span class="sangrar">A la asociación cooperadora se le </span>unió un grupo de madres, 
                                que igualmente valioso, acudió cada vez que se le solicitó apoyo.<br>
                                <span class="sangrar">El paso de los años hizo que se cambiaran los rostros, </span>
                                se renovaran brazos, pero lo que nunca cambió, fue el espíritu emprendedor, 
                                y solidario, de quienes entendieron el camino que desde 1975 comenzó a 
                                transitar <strong>"EL AGRO"</strong>, nombre con el que todos nos conocen.<br><br>
                            </i>
                            <center>
                                <div id="FlabellComponent" style="float:left;">
                                    <p>In order to view this object you need Flash Player 9+ support!</p>
                                    <a href="http://www.adobe.com/go/getflashplayer">
                                        <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>
                                    </a>
                                </div>  
                            </center>
                            <br>
                            <br>
                        </span>
                    </div>
                    <div id="titulo_parrafo">                        
                        <span>PRESIDENTES DE LA ASOCIACIÓN COOPERADORA<br>
                            1976-2011</span>
                    </div>
                    <div id="cont_parrafo">
                        <br>                        
                        <span>
                            <center>
                                <strong>1976</strong> – <i>ERRIQUE URRUTIA</i><br>
                                <br>
                                <strong>1978</strong> – <i>MIGUEL BERTONE</i><br>
                                <br>
                                <strong>1979</strong> – <i>FORTUNATO MOLA</i><br>
                                <br>
                                <strong>1980</strong> – <i>ARMANDO GRANCARA (fallecido)</i><br>
                                <br>
                                <strong>1984</strong> – <i>HUGO CUCHIETTI</i><br>
                                <br>
                                <strong>1995</strong> – <i>JUAN JORGE GIORGIS</i><br>
                                <br>
                                <strong>1997</strong> – <i>DELFOR FRANCO (fallecido)</i><br>
                                <br>
                                <strong>2001</strong> – <i>GERARDO ISNARDI</i><br>
                                <br>
                                <strong>2006</strong> – <i>HECTOR BOSSIO</i><br>
                                <br>
                                <strong>2010</strong> – <i>DIEGO KUKURELO -  Continúa.</i><br>
                                <br>
                            </center>                            
                            <br>
                            <i>
                                "El ideal no conformista  de esta comunidad educativa, siempre 
                                inquieta y comprometida con el crecimiento, atenta a las 
                                necesidades que el medio y el tiempo imponen, se atreve 
                                a proponer, día a día, un modelo diferente de escuela, 
                                basado en el trabajo compartido."
                            </i>
                            <br>
                            <br>
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