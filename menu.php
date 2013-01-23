<ul id="menu">
    <?php
    $color = " style=\"background-color:#008f4c;\"";
    $color_submenu = " style=\"background-color:#72cc7f\"";

    echo "<li><a href=\"inicio.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'inicio.php') {
        echo $color;
    }
    echo ">Inicio</a></li>";

    echo "<li><a href=\"alumno.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'alumno.php') {
        echo $color;
    }
    echo ">Link del alumno</a> </li>";

    echo "<li><a href=\"cooperadora.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'cooperadora.php') {
        echo $color;
    }
    echo ">Cooperadora</a> </li>";

    echo "<li><a href=\"\">CBU-Anéxos</a><ul";
    if (basename($_SERVER[PHP_SELF]) == 'barrio.php' ||
            basename($_SERVER[PHP_SELF]) == 'monte.php') {

        echo " id=\"show\"";
    }
    echo ">";

    echo "<li><a href=\"barrio.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'barrio.php') {
        echo $color_submenu;
    }
    echo ">Barrio norte</a></li>";

    echo "<li><a href=\"monte.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'monte.php') {
        echo $color_submenu;
    }
    echo ">Monte de los Gauchos</a></li>";
    echo "</ul>";
    echo "</li>";
    ?>

    <li><a href="http://www.climagro.com.ar/Usuarios.aspx?key=15896" target="_blank">Datos Meteorológicos</a> </li>

    <?php
    /* echo "<li><a href=\"meteoActual.php\"";
      if(basename($_SERVER[PHP_SELF])=='meteoActual.php'){
      echo $color;
      }
      echo ">Datos Meteorológicos</a> </li>";
     */
    
    echo "<li><a href=\"\"
        >Eventos</a><ul";
    if (basename($_SERVER[PHP_SELF]) == 'prox_eventos.php' ||
            basename($_SERVER[PHP_SELF]) == 'eventos_deportivos.php' ||
            basename($_SERVER[PHP_SELF]) == 'eventos_salud.php' ||
            basename($_SERVER[PHP_SELF]) == 'eventos_culturales.php') {

        echo " id=\"show\"";
    }
    echo ">";

    echo "<li><a href=\"prox_eventos.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'prox_eventos.php') {
        echo $color_submenu;
    }
    echo ">Próximos eventos</a> </li>"; 
    
    echo "<li><a href=\"eventos_deportivos.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'eventos_deportivos.php') {
        echo $color_submenu;
    }
    echo ">Deportivos</a> </li>"; 
    
    echo "<li><a href=\"eventos_salud.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'eventos_salud.php') {
        echo $color_submenu;
    }
    echo ">Salud</a> </li>"; 
    
    echo "<li><a href=\"eventos_culturales.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'eventos_culturales.php') {
        echo $color_submenu;
    }
    echo ">Culturales</a> </li>"; 
    
    echo "</ul>";
    echo "</li>";

    echo "<li><a href=\"\"
        >Apertura a la comunidad</a><ul";
    if (basename($_SERVER[PHP_SELF]) == 'museo_agro_escolar.php'||
            basename($_SERVER[PHP_SELF]) == 'saberes.php' ||
            basename($_SERVER[PHP_SELF]) == 'raices.php') {

        echo " id=\"show\"";
    }
    echo ">";

    echo "<li><a href=\"museo_agro_escolar.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'museo_agro_escolar.php') {
        echo $color_submenu;
    }
    echo ">Museo Agro Escolar</a> </li>";
	
	echo "<li><a href=\"saberes.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'saberes.php') {
        echo $color_submenu;
    }
    echo ">Proyecto Saberes</a> </li>";

    echo "<li><a href=\"raices.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'raices.php') {
        echo $color_submenu;
    }
    echo ">Nuestras Raíces</a> </li>";    

    echo "</ul>";
    echo "</li>";

    echo "<li><a href=\"\"
        >Secciones didáctico productivas</a><ul";
    if (basename($_SERVER[PHP_SELF]) == 'huerta.php' ||
            basename($_SERVER[PHP_SELF]) == 'tambo.php' ||
            basename($_SERVER[PHP_SELF]) == 'vivero.php' ||
            basename($_SERVER[PHP_SELF]) == 'cerdos.php' ||
            basename($_SERVER[PHP_SELF]) == 'sala_industrias.php') {

        echo " id=\"show\"";
    }
    echo ">";

    echo "<li><a href=\"cerdos.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'cerdos.php') {
        echo $color_submenu;
    }
    echo ">Cerdos</a> </li>";

    echo "<li><a href=\"huerta.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'huerta.php') {
        echo $color_submenu;
    }
    echo ">Huerta</a> </li>";

    echo "<li><a href=\"sala_industrias.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'sala_industrias.php') {
        echo $color_submenu;
    }
    echo ">Sala de industrias</a> </li>";

    echo "<li><a href=\"tambo.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'tambo.php') {
        echo $color_submenu;
    }
    echo ">Tambo</a> </li>";

    /* echo "<li><a href=\"vivero.php\"";
      if (basename($_SERVER[PHP_SELF]) == 'vivero.php') {
      echo $color_submenu;
      }
      echo ">Vivero</a> </li>"; */
    echo "</ul>";
    echo "</li>";

    echo "<li><a href=\"\">Institucional</a><ul";
    if (basename($_SERVER[PHP_SELF]) == 'historia.php' ||
            basename($_SERVER[PHP_SELF]) == 'historia_escudo.php' ||
            basename($_SERVER[PHP_SELF]) == 'gestion_directiva.php'||
            basename($_SERVER[PHP_SELF]) == 'proyectos.php') {

        echo " id=\"show\"";
    }
    echo ">";

    echo "<li><a href=\"historia.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'historia.php') {
        echo $color_submenu;
    }
    echo ">Nuestra historia</a> </li>";

    echo "<li><a href=\"historia_escudo.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'historia_escudo.php') {
        echo $color_submenu;
    }
    echo ">Nuestro escudo</a> </li>";

    echo "<li><a href=\"gestion_directiva.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'gestion_directiva.php') {
        echo $color_submenu;
    }
    echo ">Gestión directiva</a> </li>";

    echo "<li><a href=\"proyectos.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'proyectos.php') {
        echo $color_submenu;
    }
    echo ">Proyectos</a> </li>";

    echo "</ul>";
    echo "</li>";

    echo "<li><a href=\"contacto.php\"";
    if (basename($_SERVER[PHP_SELF]) == 'contacto.php') {
        echo $color;
    }
    echo ">Contáctenos</a> </li>";
    ?>  
</ul>   

