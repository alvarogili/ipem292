<html>
    <head>
        <?php include("head.html"); ?>

        <script type="text/javascript" src="js/swfobject.js"></script>

        <script type="text/javascript">
			
            // JAVASCRIPT VARS
            // cache buster
            var cacheBuster = "?t=" + Date.parse(new Date());
            // stage dimensions		
            var stageW = "400";//"100%";
            var stageH = "275";//"100%";
			
			
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
            flashvars.xmlPath = "xml/historia_etapa4.xml";
			
			
            /** EMBED THE SWF**/
            swfobject.embedSWF("preview.swf"+cacheBuster, attributes.id, stageW, stageH, "9.0.124", "js/expressInstall.swf", flashvars, params, attributes);
            
            
            /*etapa 2*/
            var attributes_et3 = {};
            attributes_et3.id = 'FlabellComponent_et3';
            attributes_et3.name = 'FlabellComponent_et3';
            /* FLASH VARS */
            var flashvars_et3 = {};
			
            /// if commented / delete these lines, the component will take the stage dimensions defined 
            /// above in "JAVASCRIPT SECTIONS" section or those defined in the settings xml
            flashvars_et3.componentWidth = stageW;
            flashvars_et3.componentHeight = stageH;
			
            /// path to the content folder(where the xml files, images or video are nested)
            /// if you want to use absolute paths(like "http://domain.com/images/....") then leave it empty("")			
            flashvars_et3.pathToFiles = "banner/";			
            // path to content XML
            flashvars_et3.xmlPath = "xml/historia_etapa3.xml";
            swfobject.embedSWF("preview.swf"+cacheBuster, attributes_et3.id, stageW, stageH, "9.0.124", "js/expressInstall.swf", flashvars_et3, params, attributes_et3);
			
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
                        <span>ANTECEDENTES</span>
                    </div>
                    <div id="cont_parrafo">
                        <br>                        
                        <span>
                            <i>
                                <span class="sangrar">La evolución que sufrió la institución escolar desde su</span>
                                creación hasta la actualidad puede dividirse en cuatro etapas que, sin tener límites
                                precisos, explican cuáles fueron los momentos en los cuales la escuela alcanzó aquellos
                                objetivos que marcaron su crecimiento. 
                            </i>
                            <br>
                            <br>
                        </span>
                    </div>
                    <div id="titulo_parrafo">                        
                        <span>PRIMERA ETAPA</span>
                    </div>
                    <div id="cont_parrafo">
                        <br>                        
                        <span>
                            <i>
                                <span class="sangrar">La creación de esta escuela </span>se produjo en el año <strong>1975</strong> dependiendo de la 
                                <strong>Universidad Nacional de Río Cuarto</strong> con la denominación 
                                <strong>"Instituto del Bachillerato Agrotécnico"</strong>. Por entonces los escasos recursos, 
                                las limitaciones presupuestarias de la Universidad, la falta de infraestructura 
                                edilicia y de campo, hicieron muy difíciles los primeros pasos. La situación se 
                                agravó aún más cuando, entre los años <strong>1979</strong> y <strong>1980</strong>, la Universidad 
                                expresó su intención de desafectar este nivel de enseñanza a los fines de no distraer sus recursos.
                                De este modo ya no se autorizó la apertura del cuarto año. Los alumnos, 
                                al concluir tercer año, debieron continuar sus estudios en otras instituciones, 
                                en consecuencia las inscripciones posteriores disminuyeron.<br>
                                <span class="sangrar">Ante esta situación </span>límite se trabajó intensamente para llevar la preocupación a 
                                la comunidad escolar a todos los niveles del Estado y conseguir la solución al problema. 
                                Después de algún tiempo de gestiones se logró que, en el año <strong>1983</strong>, la <strong>Dirección 
                                    Nacional de Educación Agropecuaria del Ministerio de Educación y Justicia</strong>
                                nos incluyera bajo su dependencia.<br>
                                <span class="sangrar">Hacer referencia a esta </span>escuela, es traer a la memoria, necesariamente, la figura del 
                                <strong>Ingeniero Eduardo Calvari</strong>, quien fue su primer Director y quien guió los destinos 
                                de esta escuela desde sus inicios . Desde <strong>1975</strong>, tuvo la audacia de defender 
                                un proyecto idealista con la destreza y la sencillez que otorga la erudición. 
                                Hombre íntegro, honesto, justo, generoso…que se destacó entre sus múltiples condiciones 
                                por su espíritu democrático que le permitió en esos primeros años de lucha rodearse de 
                                un grupo de colaboradores de igual tenacidad. 
                            </i>
                            <br>
                            <br>
                        </span>
                    </div>
                    <div id="titulo_parrafo">                        
                        <span>SEGUNDA ETAPA</span>
                    </div>
                    <div id="cont_parrafo">
                        <br>                        
                        <span>
                            <i>
                                <span class="sangrar">Se inició entonces una nueva </span>etapa en la cual se concretó un hecho que permitió desahogar 
                                la asfixia que evidenció la escuela: la apertura del segundo ciclo posibilitó lógicamente 
                                un aumento en la matrícula de primer año que repercutió favorablemente en la imagen institucional 
                                y creó un ambiente propicio para que la comunidad de <strong>Adelia María</strong> comenzara a valorar la 
                                importancia de la escuela para el desarrollo regional.<br>
                                <span class="sangrar">Se incorporó, además, nuevo personal para cubrir las tareas escolares.</span><br>
                                <span class="sangrar">La provisión de algunas herramientas </span>agrícolas que el Estado Nacional destinó provocó una mejor 
                                atención al servicio educativo. Así, en <strong>1985</strong>, egresó la primera promoción de 
                                <strong>"Agrónomos Generales"</strong>. En ese mismo año se diseñó el logotipo a propuesta del alumnado.<br>
                                <span class="sangrar">En <strong>1986</strong>, se implementó un sistema </span>de pasantías que apoyó a la modalidad agrotécnica.<br>
                                <span class="sangrar">Mientras tanto, la escuela </span>funcionó en un edificio compartido con el <strong>Instituto Adelia María</strong> 
                                cedido en préstamo y las clases prácticas se desarrollaron en un predio de 30 has. arrendadas por la 
                                Asociación Cooperadora.
                            </i>                            
                            <br>
                            <br>
                        </span>
                    </div>
                    <div id="titulo_parrafo">                        
                        <span>TERCERA ETAPA</span>
                    </div>
                    <div id="cont_parrafo">
                        <br>                        
                        <span>
                            <i>
                                <span class="sangrar">En el año <strong>1987</strong>, ante el notable merecimiento </span>en los diversos aspectos de la vida institucional, 
                                se comenzó a considerar la necesidad básica de disponer de un edificio propio con un espacio superior 
                                y un campo de mayor superficie para que los alumnos pudieran llevar a cabo prácticas ganaderas y 
                                agrícolas más extensivas.<br>
                                <span class="sangrar">En ese año se consiguió arrendar </span>un establecimiento rural de 215 has. que se destinó a cultivos de 
                                cosecha (como maíz, soja, girasol y trigo) y la cría y engorde de hacienda vacuna.<br>
                                <span class="sangrar">A principio del año <strong>1988</strong>, </span>la Asociación Cooperadora, adquirió un terreno de 8 has. 
                                sobre la Ruta Provincial E-86 (parte del predio de 30 has. alquiladas). Con la compra de ese 
                                espacio nació el proyecto de construcción del edificio propio, con los recursos disponibles 
                                en cooperadora y la ayuda de la comunidad en general.<br>
                                <span class="sangrar">En el mes de agosto de <strong>1988</strong> </span>se comenzó con la construcción de tres aulas, sanitarios 
                                y dependencias administrativas. Se destacó de manera muy especial, y es quizás el mérito más 
                                grande que tiene esta obra, el trabajo de un grupo de docentes y alumnos que realizaron múltiples 
                                tareas para habilitar el nuevo edificio en marzo, cuando el ciclo lectivo <strong>1989</strong>.<br>
                                <span class="sangrar">En ese terreno sobre la ruta E-86, </span>se ubicaron también las secciones didáctico-productivas, 
                                insumos básicos para la enseñanza de la especialidad agropecuaria.<br>
                                <span class="sangrar">En el año <strong>1993</strong> se produjo la </span>transferencia de los servicios educativos de la nación 
                                a la jurisdicción provincial y la escuela pasó a depender de la <strong>Dirección de Enseñanza Media y 
                                    Superior</strong>, manteniendo la misma especialidad dentro de la <strong>Orientación Producción de Bienes y 
                                    Servicios</strong>.<br>
                                <span class="sangrar">Un abanico de posibilidades </span>acompañó esta etapa. En <strong>1997</strong> la instalación de Internet y en 
                                <strong>1998</strong> la inauguración de la sala de multimedia, apuntaron a enriquecer y movilizar el 
                                desarrollo curricular.<br>
                            </i>
                            <br>
                            <center>
                                <div id="FlabellComponent_et3" style="float:left;">
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
                        <span>CUARTA ETAPA</span>
                    </div>
                    <div id="cont_parrafo">                                  
                        <br>                        
                        <span>
                            <i>
                                <span class="sangrar">El año <strong>2000</strong>, encontró </span>a la institución festejando veinticinco años de reconocida 
                                trayectoria en la comunidad. La ocasión mereció que las docentes, señoras profesoras 
                                <strong>Adriana Garro</strong> y <strong>Nora Rezza</strong> , con ayuda del personal de la institución 
                                escribieran un libro  titulado <strong>"HUELLAS"</strong> donde reconstruyeron la historia 
                                institucional de veinticinco años de lucha intensa.<br>    
                                <span class="sangrar">En ese año comenzó a funcionar </span>una moderna sala de industria y se implementó un C.B.U. Rural 
                                anexo en la vecina localidad de <strong>Monte de los Gauchos</strong>.
                                El mismo funciona en el Centro 
                                Educativo de Nivel Primario <strong>"Manuel Belgrano"</strong>. Tres años más tarde, se sumó un C.B.U. 
                                Urbano anexo en un barrio periférico de la localidad, que como sede el Centro Educativo de 
                                Nivel Primario <strong>"Bernardino Rivadavia"</strong>. Se logró de esta forma atender las necesidades 
                                educativas de un amplio sector social que se encontraba excluido del disfrute de un derecho 
                                prioritario, como es el de la Educación.<br>                                
                                <span class="sangrar">En el año <strong>2001</strong>, en </span>medio de una crisis de la cual nuestra escuela no fue ajena, 
                                se dejó de arrendar el campo destinado a agricultura y ganadería. Se concretó, entonces, 
                                la adquisición de una máquina de siembra directa que comenzó a utilizarse bajo la figura de 
                                una empresa de servicios.<br>
                                <span class="sangrar">Por resolución <strong>N° 1623/03</strong>, </span>el día <strong>siete de noviembre de 2004</strong>, la escuela adquirió 
                                oficialmente el nombre <strong>I.P.E.M. N° 292 "Agr. Liliam Priotto"</strong>. El mismo fue propuesto por 
                                la comunidad educativa reconociendo así el sentido compromiso de quien fue alumna y docente 
                                y hubo fallecido.<br>
                                <span class="sangrar">Cabe destacar que, esta última </span>etapa, fue acompañada por momentos de constante incertidumbre en 
                                la conducción institucional.<br>
                                <span class="sangrar">En el año <strong>2003</strong>, la gestión </span>del <strong>Ing. Agr. Eduardo Calvari</strong> fue sucedida pro la del 
                                <strong>Agr. Daniel Omar Gili</strong>, quien se desempeñó en ese cargo hasta el mes de <strong>noviembre de 2005</strong>. 
                                Asumió entonces la conducción temporaria la <strong>Prof. Nora Alicia Rezza</strong> y, en diciembre del mismo 
                                año se hizo cargo la <strong>Prof. y Lic. Carla María Radice</strong>. El <strong>27 de agosto de 2007</strong> reasumió 
                                la dirección en carácter interino la <strong>Profesora Nora Rezza</strong>, quien continúa hasta la actualidad.<br>
                                <span class="sangrar">Acompañaron el proceso de </span>enseñanza – aprendizaje de los alumnos, el desarrollo de importantes 
                                proyectos pedagógicos y comunitarios, algunos de los cuales fueron merecedores de importantes 
                                distinciones y reconocimientos no sólo a nivel local sino también provincial y nacional. 
                                En esta etapa se construyó un Salón de Usos Múltiples, un moderno Laboratorio y una Biblioteca, 
                                gracias al esfuerzo de la Asociación Cooperadora.<br>
                                <span class="sangrar">En el año <strong>2005</strong>, la sanción de </span>la <strong>Ley de Educación Técnica y Formación Profesional</strong> 
                                ofreció un nuevo desafío al delegar la responsabilidad de formar técnicos medios en un área 
                                ocupacional específica.<br>
                            </i>
                            <br>
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
                        <span>QUINTA ETAPA</span>
                    </div>
                    <div id="cont_parrafo">
                        <br>                        
                        <span>
                            <i>
                                <span class="sangrar">Su inicio lo marcan </span>los años <strong>2008</strong> y <strong>2009</strong>.<br>
                                <span class="sangrar">En el año <strong>2008</strong> </span>se procede a la reubicación de las secciones didáctico – productivas 
                                ya existentes y la creación de otras, en el terreno propio con incorporación de modernas 
                                tecnologías. Esta situación la comunidad educativa la asumió con el mismo esfuerzo y compromiso 
                                que acompañaron a la institución durante años de constante crecimiento.<br>
                                <span class="sangrar">Las instalaciones </span>debieron ser ampliadas, se construyó un nuevo Pabellón de aulas y batería 
                                de baños para recibir la creciente matrícula.<br>
                                <span class="sangrar">En el año <strong>2009</strong> </span>se inició el nuevo Plan de estudios de Escuelas Técnicas, 
                                con 7 años de duración, desafío que la institución en su conjunto asume convencida en reafirmar 
                                la identidad técnica contando además, con el apoyo del sector socio-productivo local y regional.<br>
                                <span class="sangrar">A partir de <strong>2011</strong> </span>el programa <strong>Uno a Uno</strong> (de Educación Técnica) ha posibilitado que 
                                todos los alumnos del ciclo Orientado tengan una netbook para facilitar el proceso de enseñanza 
                                y aprendizaje.<br>
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