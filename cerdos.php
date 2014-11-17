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
                            <span class="sangrar"></span>El criadero de cerdos cuenta adem�s con un laboratorio para la extracci�n y procesamiento de semen, obtenido del padrillo del establecimiento.<br>
                            <span class="sangrar"></span>
Este laboratorio surge de un proyecto presentado al I.N.E.T (Instituto Nacional de Ense�anza T�cnica) a trav�s del plan de mejoras y el programa �Semillero del Futuro� de Monsanto Argentina.<br>
                            <span class="sangrar"></span>
La inseminaci�n Artificial es un m�todo de servicio que comienza con la extracci�n de semen a un padrillo, luego se realiza la evaluaci�n, diluci�n y conservaci�n del mismo, culminando con la siembra en una cerda en celo.
							 <br>
							 <br>
                            <center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos10.jpg" style="width: 700px;">
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">                                            
                                        </span>
                                    </center>
                                    </td>                                   
                                    </tr>
                                </table>                                
                            </center>							
							<span class="sangrar"></span>En cada una de estas t�cnicas es necesario contar con el equipamiento adecuado y animales entrenados para tal fin. El personal que desempe�a dicha tarea debe estar capacitado correctamente.
							 <br>
							 <br />
                            <center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos11.jpg" style="width: 700px;">
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">                                            
                                        </span>
                                    </center>
                                    </td>                                   
                                    </tr>
                                </table>                                
                            </center>
							<span class="sangrar"></span>En algunos criaderos de cerdos se realizan todos estos procesos para no depender de terceros que le suministren el semen refrigerado, de no ser as� se puede comprar y luego inseminar a las cerdas evitando de esta forma la instalaci�n del laboratorio. <br>
							<span class="sangrar"></span>Se inician las actividades del criadero en el mes de diciembre de 2010, realizando servicio natural, previendo un espacio f�sico dentro del galp�n para que en el futuro se concretara la instalaci�n de un laboratorio de procesamiento de semen. <br>
							<span class="sangrar"></span>El laboratorio se instal� estrat�gicamente entre el �rea de servicio-gestaci�n y la maternidad. El mismo cuenta con dos sectores, el sector de ingreso y recepci�n dividido del laboratorio propiamente dicho por una pared de aluminio y vidrio. La superficie asignada al laboratorio es de nueve metros cuadrados. Las paredes y el techo est�n pintadas de blanco, el piso es de mosaico, posee una mesada con bacha, de cinco metros de largo azulejada hasta los dos metros de altura, la iluminaci�n se logra por tubos fluorescentes sobre la mesada. El equipamiento con el que se cuenta es una heladera de conservaci�n de semen que trabaja a15� C de temperatura, una balanza electr�nica, placa de calentamiento regulado a 35 � C, soporte y bandeja para fraccionar el semen, microscopio �ptico de tres aumentos, placa t�rmica, c�mara de Burker, term�metro de vidrio, pipetas de un mililitro, termo de extracci�n de semen y material descartable como por ejemplo guantes de vinilo, saccos, pacos, bolsas de extracci�n, tapones, c�nulas para inseminaci�n de cerdas adultas y cachorras.
							 <br>
							 <br>
                            <center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos12.jpg" style="width: 700px;">
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">                                            
                                        </span>
                                    </center>
                                    </td>                                   
                                    </tr>
                                </table>                                
                            </center>
                            <br><br>
							<center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos13.jpg" style="width: 700px;">
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">                                            
                                        </span>
                                    </center>
                                    </td>                                   
                                    </tr>
                                </table>                                
                            </center>
							<br>
							<span class="sangrar"></span>El corral donde se ubica el potro de salto para la extracci�n de semen con la alfombra de goma antideslizante se encuentra en el �rea de servicio-gestaci�n y ocupa seis metros cuadrados, permitiendo que el macho se sienta c�modo durante todo el proceso.
							<br/><br/>
							<center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos14.jpg" style="width: 700px;">
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">                                            
                                        </span>
                                    </center>
                                    </td>                                   
                                    </tr>
                                </table>                                
                            </center>
							<span class="sangrar"></span>Estas instalaciones funcionan desde el mes de mayo de 2012, luego de haber entrenado al macho del criadero para poder extraerle el semen. A partir de ese momento  en forma ininterrumpida (cada seis o siete d�as, generalmente los d�as lunes o martes) se realizan extracciones y procesamiento de semen del padrillo terminal del colegio. Esta frecuencia nos permite obtener 25 a 30 dosis de semen fresco en condiciones �ptimas.
							<br>
							<span class="sangrar"></span>Las tarea de extracci�n y acondicionamiento del semen se realizan activamente por los alumnos de cuarto y quinto a�o con el docente a cargo en el horario de las actividades pr�cticas de las asignaturas Producci�n Animal I (Introducci�n a la Producci�n Animal I)y Producci�n Animal II (Producci�n Porcina).
							<br/>
							<br/>
							<center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos15.jpg" style="width: 700px;">
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">                                            
                                        </span>
                                    </center>
                                    </td>                                   
                                    </tr>
                                </table>                                
                            </center>
							<span class="sangrar"></span>Al desarrollar los contenidos de estas asignaturas, los alumnos concurren al laboratorio en grupos de tres o cuatro, donde eval�an el semen previamente extra�do por el docente para lo cual es necesario respetar las normas de
							<br>
							<span class="sangrar"></span>Higiene y Seguridad que involucre la vestimenta adecuada y el correcto desempe�o dentro del laboratorio.
							<br>
							<span class="sangrar"></span>Los alumnos calculan las dosis previamente habiendo evaluado las caracter�sticas f�sicas de los espermatozoides para luego continuar con el protocolo de dilaci�n, fraccionamiento y conservaci�n de los mismos.
							<br/>
							<br/>
							<center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos16.jpg" style="width: 700px;">
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">                                            
                                        </span>
                                    </center>
                                    </td>                                   
                                    </tr>
                                </table>                                
                            </center>
                            <br><br>
							<center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos17.jpg" style="width: 700px;">
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">                                            
                                        </span>
                                    </center>
                                    </td>                                   
                                    </tr>
                                </table>                                
                            </center>
							<br><br>
							<center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos18.jpg" style="width: 700px;">
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">                                            
                                        </span>
                                    </center>
                                    </td>                                   
                                    </tr>
                                </table>                                
                            </center>
							<span class="sangrar"></span>El tiempo de conservaci�n del semen fraccionado es de cinco a siete d�as, esto se debe al uso de un conservante que nutre a los espermatozoides, manteniendo la motilidad necesaria para que en el momento de la inseminaci�n puedan fecundar a los �vulos de las hembras.
							<br/>
							<br/>
							<center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos19.jpg" style="width: 700px;">
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">                                            
                                        </span>
                                    </center>
                                    </td>                                   
                                    </tr>
                                </table>                                
                            </center>
                            <br><br>
							<center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos20.jpg" style="width: 700px;">
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">                                            
                                        </span>
                                    </center>
                                    </td>                                   
                                    </tr>
                                </table>                                
                            </center>
							<span class="sangrar"></span>En el criadero de la escuela los partos de las cerdas se programan cada treinta d�as, destetando a los lechones a las tres semanas de vida.
							<br>
							<span class="sangrar"></span>Para secuenciar el manejo reproductivo de cada grupo de cerdas, los d�as jueves o viernes se realiza el destete de las cuatro madres en lactancia, llev�ndolas al �rea de servicio-gestaci�n, donde normalmente se inseminan los d�as martes, mi�rcoles o jueves de la semana siguiente.
							<br>
							<span class="sangrar"></span>Las hembras en este momento se encuentran en la etapa de estro o celo, la cual se confirma haciendo detecci�n de celo con el padrillo delante de la jaula de gestaci�n, lo cual permite visualizar los signos que caracterizan al estro, para luego realizar la Inseminaci�n Artificial.
							<br><br>
							<center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos21.jpg" style="width: 700px;">
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">                                            
                                        </span>
                                    </center>
                                    </td>                                   
                                    </tr>
                                </table>                                
                            </center>
							<span class="sangrar"></span>Adem�s de estas actividades los alumnos realizan pr�cticas de manejo como destete, suministro de alimento balanceado por categor�a, pr�cticas sanitaria (vacunaci�n, corte de cola) identificaci�n animal, dentro de los espacios formativos, esto permite que los estudiantes pongan en pr�ctica los conocimientos te�ricos, los integren y finalmente los tomen como propios.
							<br/>
							<br/>
							<center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos22.jpg" style="width: 700px;">
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">                                            
                                        </span>
                                    </center>
                                    </td>                                   
                                    </tr>
                                </table>                                
                            </center>
                            <br><br>
							<center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos23.jpg" style="width: 700px;">
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">                                            
                                        </span>
                                    </center>
                                    </td>                                   
                                    </tr>
                                </table>                                
                            </center>
							<br><br>
							<center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos24.jpg" style="width: 700px;">
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">                                            
                                        </span>
                                    </center>
                                    </td>                                   
                                    </tr>
                                </table>                                
                            </center>
							<span class="sangrar"></span>Durante el a�o 2013 y el corriente la escuela brinda el servicio a la sociedad proporcionando dosis de semen para Inseminaci�n Artificial a productores porcinos de la zona, favoreciendo por un lado la integraci�n institucional con la comunidad agropecuaria y por el otro evitando la instalaci�n de laboratorios en cada establecimiento.
							<br>
							<span class="sangrar"></span>Esto nos permite tener un v�nculo permanente que es de suma importancia para la instituci�n relacionando estudiantes, docente y productores.
							<br>
							<span class="sangrar"></span>Finalmente esta secci�n productiva aporta un ingreso econ�mico por la venta de dosis de semen.
							<br/>
							<br/>
							<center>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="imagenes/secciones/cerdos/cerdos25.jpg" style="width: 700px;">
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                    <center>
                                        <span style="font-size:14px;">                                            
                                        </span>
                                    </center>
                                    </td>                                   
                                    </tr>
                                </table>                                
                            </center>							

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