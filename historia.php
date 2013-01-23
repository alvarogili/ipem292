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
                                <span class="sangrar">La evoluci�n que sufri� la instituci�n escolar desde su</span>
                                creaci�n hasta la actualidad puede dividirse en cuatro etapas que, sin tener l�mites
                                precisos, explican cu�les fueron los momentos en los cuales la escuela alcanz� aquellos
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
                                <span class="sangrar">La creaci�n de esta escuela </span>se produjo en el a�o <strong>1975</strong> dependiendo de la 
                                <strong>Universidad Nacional de R�o Cuarto</strong> con la denominaci�n 
                                <strong>"Instituto del Bachillerato Agrot�cnico"</strong>. Por entonces los escasos recursos, 
                                las limitaciones presupuestarias de la Universidad, la falta de infraestructura 
                                edilicia y de campo, hicieron muy dif�ciles los primeros pasos. La situaci�n se 
                                agrav� a�n m�s cuando, entre los a�os <strong>1979</strong> y <strong>1980</strong>, la Universidad 
                                expres� su intenci�n de desafectar este nivel de ense�anza a los fines de no distraer sus recursos.
                                De este modo ya no se autoriz� la apertura del cuarto a�o. Los alumnos, 
                                al concluir tercer a�o, debieron continuar sus estudios en otras instituciones, 
                                en consecuencia las inscripciones posteriores disminuyeron.<br>
                                <span class="sangrar">Ante esta situaci�n </span>l�mite se trabaj� intensamente para llevar la preocupaci�n a 
                                la comunidad escolar a todos los niveles del Estado y conseguir la soluci�n al problema. 
                                Despu�s de alg�n tiempo de gestiones se logr� que, en el a�o <strong>1983</strong>, la <strong>Direcci�n 
                                    Nacional de Educaci�n Agropecuaria del Ministerio de Educaci�n y Justicia</strong>
                                nos incluyera bajo su dependencia.<br>
                                <span class="sangrar">Hacer referencia a esta </span>escuela, es traer a la memoria, necesariamente, la figura del 
                                <strong>Ingeniero Eduardo Calvari</strong>, quien fue su primer Director y quien gui� los destinos 
                                de esta escuela desde sus inicios . Desde <strong>1975</strong>, tuvo la audacia de defender 
                                un proyecto idealista con la destreza y la sencillez que otorga la erudici�n. 
                                Hombre �ntegro, honesto, justo, generoso�que se destac� entre sus m�ltiples condiciones 
                                por su esp�ritu democr�tico que le permiti� en esos primeros a�os de lucha rodearse de 
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
                                <span class="sangrar">Se inici� entonces una nueva </span>etapa en la cual se concret� un hecho que permiti� desahogar 
                                la asfixia que evidenci� la escuela: la apertura del segundo ciclo posibilit� l�gicamente 
                                un aumento en la matr�cula de primer a�o que repercuti� favorablemente en la imagen institucional 
                                y cre� un ambiente propicio para que la comunidad de <strong>Adelia Mar�a</strong> comenzara a valorar la 
                                importancia de la escuela para el desarrollo regional.<br>
                                <span class="sangrar">Se incorpor�, adem�s, nuevo personal para cubrir las tareas escolares.</span><br>
                                <span class="sangrar">La provisi�n de algunas herramientas </span>agr�colas que el Estado Nacional destin� provoc� una mejor 
                                atenci�n al servicio educativo. As�, en <strong>1985</strong>, egres� la primera promoci�n de 
                                <strong>"Agr�nomos Generales"</strong>. En ese mismo a�o se dise�� el logotipo a propuesta del alumnado.<br>
                                <span class="sangrar">En <strong>1986</strong>, se implement� un sistema </span>de pasant�as que apoy� a la modalidad agrot�cnica.<br>
                                <span class="sangrar">Mientras tanto, la escuela </span>funcion� en un edificio compartido con el <strong>Instituto Adelia Mar�a</strong> 
                                cedido en pr�stamo y las clases pr�cticas se desarrollaron en un predio de 30 has. arrendadas por la 
                                Asociaci�n Cooperadora.
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
                                <span class="sangrar">En el a�o <strong>1987</strong>, ante el notable merecimiento </span>en los diversos aspectos de la vida institucional, 
                                se comenz� a considerar la necesidad b�sica de disponer de un edificio propio con un espacio superior 
                                y un campo de mayor superficie para que los alumnos pudieran llevar a cabo pr�cticas ganaderas y 
                                agr�colas m�s extensivas.<br>
                                <span class="sangrar">En ese a�o se consigui� arrendar </span>un establecimiento rural de 215 has. que se destin� a cultivos de 
                                cosecha (como ma�z, soja, girasol y trigo) y la cr�a y engorde de hacienda vacuna.<br>
                                <span class="sangrar">A principio del a�o <strong>1988</strong>, </span>la Asociaci�n Cooperadora, adquiri� un terreno de 8 has. 
                                sobre la Ruta Provincial E-86 (parte del predio de 30 has. alquiladas). Con la compra de ese 
                                espacio naci� el proyecto de construcci�n del edificio propio, con los recursos disponibles 
                                en cooperadora y la ayuda de la comunidad en general.<br>
                                <span class="sangrar">En el mes de agosto de <strong>1988</strong> </span>se comenz� con la construcci�n de tres aulas, sanitarios 
                                y dependencias administrativas. Se destac� de manera muy especial, y es quiz�s el m�rito m�s 
                                grande que tiene esta obra, el trabajo de un grupo de docentes y alumnos que realizaron m�ltiples 
                                tareas para habilitar el nuevo edificio en marzo, cuando el ciclo lectivo <strong>1989</strong>.<br>
                                <span class="sangrar">En ese terreno sobre la ruta E-86, </span>se ubicaron tambi�n las secciones did�ctico-productivas, 
                                insumos b�sicos para la ense�anza de la especialidad agropecuaria.<br>
                                <span class="sangrar">En el a�o <strong>1993</strong> se produjo la </span>transferencia de los servicios educativos de la naci�n 
                                a la jurisdicci�n provincial y la escuela pas� a depender de la <strong>Direcci�n de Ense�anza Media y 
                                    Superior</strong>, manteniendo la misma especialidad dentro de la <strong>Orientaci�n Producci�n de Bienes y 
                                    Servicios</strong>.<br>
                                <span class="sangrar">Un abanico de posibilidades </span>acompa�� esta etapa. En <strong>1997</strong> la instalaci�n de Internet y en 
                                <strong>1998</strong> la inauguraci�n de la sala de multimedia, apuntaron a enriquecer y movilizar el 
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
                                <span class="sangrar">El a�o <strong>2000</strong>, encontr� </span>a la instituci�n festejando veinticinco a�os de reconocida 
                                trayectoria en la comunidad. La ocasi�n mereci� que las docentes, se�oras profesoras 
                                <strong>Adriana Garro</strong> y <strong>Nora Rezza</strong> , con ayuda del personal de la instituci�n 
                                escribieran un libro  titulado <strong>"HUELLAS"</strong> donde reconstruyeron la historia 
                                institucional de veinticinco a�os de lucha intensa.<br>    
                                <span class="sangrar">En ese a�o comenz� a funcionar </span>una moderna sala de industria y se implement� un C.B.U. Rural 
                                anexo en la vecina localidad de <strong>Monte de los Gauchos</strong>.
                                El mismo funciona en el Centro 
                                Educativo de Nivel Primario <strong>"Manuel Belgrano"</strong>. Tres a�os m�s tarde, se sum� un C.B.U. 
                                Urbano anexo en un barrio perif�rico de la localidad, que como sede el Centro Educativo de 
                                Nivel Primario <strong>"Bernardino Rivadavia"</strong>. Se logr� de esta forma atender las necesidades 
                                educativas de un amplio sector social que se encontraba excluido del disfrute de un derecho 
                                prioritario, como es el de la Educaci�n.<br>                                
                                <span class="sangrar">En el a�o <strong>2001</strong>, en </span>medio de una crisis de la cual nuestra escuela no fue ajena, 
                                se dej� de arrendar el campo destinado a agricultura y ganader�a. Se concret�, entonces, 
                                la adquisici�n de una m�quina de siembra directa que comenz� a utilizarse bajo la figura de 
                                una empresa de servicios.<br>
                                <span class="sangrar">Por resoluci�n <strong>N� 1623/03</strong>, </span>el d�a <strong>siete de noviembre de 2004</strong>, la escuela adquiri� 
                                oficialmente el nombre <strong>I.P.E.M. N� 292 "Agr. Liliam Priotto"</strong>. El mismo fue propuesto por 
                                la comunidad educativa reconociendo as� el sentido compromiso de quien fue alumna y docente 
                                y hubo fallecido.<br>
                                <span class="sangrar">Cabe destacar que, esta �ltima </span>etapa, fue acompa�ada por momentos de constante incertidumbre en 
                                la conducci�n institucional.<br>
                                <span class="sangrar">En el a�o <strong>2003</strong>, la gesti�n </span>del <strong>Ing. Agr. Eduardo Calvari</strong> fue sucedida pro la del 
                                <strong>Agr. Daniel Omar Gili</strong>, quien se desempe�� en ese cargo hasta el mes de <strong>noviembre de 2005</strong>. 
                                Asumi� entonces la conducci�n temporaria la <strong>Prof. Nora Alicia Rezza</strong> y, en diciembre del mismo 
                                a�o se hizo cargo la <strong>Prof. y Lic. Carla Mar�a Radice</strong>. El <strong>27 de agosto de 2007</strong> reasumi� 
                                la direcci�n en car�cter interino la <strong>Profesora Nora Rezza</strong>, quien contin�a hasta la actualidad.<br>
                                <span class="sangrar">Acompa�aron el proceso de </span>ense�anza � aprendizaje de los alumnos, el desarrollo de importantes 
                                proyectos pedag�gicos y comunitarios, algunos de los cuales fueron merecedores de importantes 
                                distinciones y reconocimientos no s�lo a nivel local sino tambi�n provincial y nacional. 
                                En esta etapa se construy� un Sal�n de Usos M�ltiples, un moderno Laboratorio y una Biblioteca, 
                                gracias al esfuerzo de la Asociaci�n Cooperadora.<br>
                                <span class="sangrar">En el a�o <strong>2005</strong>, la sanci�n de </span>la <strong>Ley de Educaci�n T�cnica y Formaci�n Profesional</strong> 
                                ofreci� un nuevo desaf�o al delegar la responsabilidad de formar t�cnicos medios en un �rea 
                                ocupacional espec�fica.<br>
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
                                <span class="sangrar">Su inicio lo marcan </span>los a�os <strong>2008</strong> y <strong>2009</strong>.<br>
                                <span class="sangrar">En el a�o <strong>2008</strong> </span>se procede a la reubicaci�n de las secciones did�ctico � productivas 
                                ya existentes y la creaci�n de otras, en el terreno propio con incorporaci�n de modernas 
                                tecnolog�as. Esta situaci�n la comunidad educativa la asumi� con el mismo esfuerzo y compromiso 
                                que acompa�aron a la instituci�n durante a�os de constante crecimiento.<br>
                                <span class="sangrar">Las instalaciones </span>debieron ser ampliadas, se construy� un nuevo Pabell�n de aulas y bater�a 
                                de ba�os para recibir la creciente matr�cula.<br>
                                <span class="sangrar">En el a�o <strong>2009</strong> </span>se inici� el nuevo Plan de estudios de Escuelas T�cnicas, 
                                con 7 a�os de duraci�n, desaf�o que la instituci�n en su conjunto asume convencida en reafirmar 
                                la identidad t�cnica contando adem�s, con el apoyo del sector socio-productivo local y regional.<br>
                                <span class="sangrar">A partir de <strong>2011</strong> </span>el programa <strong>Uno a Uno</strong> (de Educaci�n T�cnica) ha posibilitado que 
                                todos los alumnos del ciclo Orientado tengan una netbook para facilitar el proceso de ense�anza 
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