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
                        <span>La sala de industrias</span>
                    </div>
                    <div id="cont_parrafo">
                        <br>                        
                        <table style="font-size:14px;text-align: justify;">
                            <tbody>
                                <tr>
                                    <td colspan="3">
                                        <span class="texto_sala_industria">La sala de industrias, es un espacio de producción que comenzó 
                                            a construirse hacia <i>1999</i> con fines didácticos. Atravesó por distintas etapas de desarrollo 
                                            que permitieron que lentamente fuera creciendo en infraestructura y equipamiento.</span>
                                        <br></br>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">
                                        <img src="imagenes/secciones/sala_industrias/sala1.png">
                                    </td>
                                    <td style="width: 30px;"></td>
                                    <td>                                            
                                        <span class="texto_sala_industria">El resurgimiento de la Educación Técnica, posibilitó, no sólo, 
                                            la incorporación de nuevas tecnologías obtenidas a través de los fondos del <i>INET</i>  y la <i>Asociación 
                                                Cooperadora</i>, sino que construyeron los espacios curriculares necesarios para capacitar a los 
                                            estudiantes en esta área.</span><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 20px;">
                                        <span class="texto_sala_industria">
                                        Los estudiantes de tercer año del Ciclo Básico, en el espacio 
                                        curricular <i>Taller de Granja III</i>, adquieren los conocimientos teóricos y prácticos requeridos para la 
                                        industrialización de productos primarios producidos en la propia escuela.
                                        </span>
                                    </td>
                                    <td style="width: 30px;"></td>
                                    <td style="text-align: center;">
                                        <img src="imagenes/secciones/sala_industrias/sala2.png">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">
                                        <img src="imagenes/secciones/sala_industrias/sala3.png">
                                    </td>
                                    <td style="width: 30px;"></td>
                                    <td>                                            
                                        <span class="texto_sala_industria">Las Prácticas Profesionalizantes, en el último curso, las llevan a cabo 
                                            los estudiantes con un <i><strong>"Microemprendimiento de industrialización de productos primarios"</strong></i>. 
                                            La importancia del valor agregado en origen, impulsa la ejecución de esta práctica que promueve un verdadero 
                                            optimismo entre sus protagonistas.</span><br>
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">
                                        <br></br>
                                        <img src="imagenes/secciones/sala_industrias/sala4.png">
                                    </td>
                                    <td style="width: 30px;"></td>
                                    <td>    
                                        <br></br>
                                        <span class="texto_sala_industria">El dulce de leche <i><strong>"AGROdul"</strong></i>, fue el primer producto elaborado 
                                            en la sala; sin conservantes y con leche del propio tambo, por su inconfundible sabor, tiene gran demanda en la 
                                            localidad de Adelia María. Su nombre, primero, y su logo, después, fueron el resultado de propuestas de docentes 
                                            y estudiantes que diseñaron con creatividad e ingenio la etiqueta del preciado producto.</span><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 20px;">
                                        <span class="texto_sala_industria">
                                        Una paila de 200 litros fue reemplazada por otra de 500 litros. La misma se obtuvo 
                                        en un premio que la empresa Monsanto otorgó al Proyecto <i><strong>Del pasto al dulce de leche</strong></i> en el año 
                                        <i>2008</i>.Semanalmente los estudiantes elaboran 150 kilogramos de dulce de leche.
                                        </span>
                                    </td>
                                    <td style="width: 30px;"></td>
                                    <td style="text-align: center;">
                                        <img src="imagenes/secciones/sala_industrias/sala5.png">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">
                                        <img src="imagenes/secciones/sala_industrias/sala6.png">
                                    </td>
                                    <td style="width: 30px;"></td>
                                    <td>                              
                                        <br></br>
                                        <span class="texto_sala_industria">Encurtidos, escabeches y mermeladas son también el resultado del arduo trabajo que los 
                                            jóvenes con la coordinación de sus docentes todas las semanas industrializan.</span><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <br></br>
                                        <span class="texto_sala_industria">Compromiso, entusiasmo y esfuerzo cotidiano son <i>"los ingredientes"</i> incondicionales en 
                                            la <i>"mágica receta"</i> que permiten a estudiantes y docentes <i>"saborear"</i> el éxito de esta propuesta.</span>
                                        <br></br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" style="text-align: center;">
                                        <img src="imagenes/secciones/sala_industrias/sala7.png">                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <br><br>
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