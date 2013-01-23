<html>
    <head>
        <?php include("head.html"); ?>
        <script language="javascript" type="text/javascript"> 
            //busca caracteres que no sean espacio en blanco en una cadena 
            function vacio(q) { 
                for ( i = 0; i < q.length; i++ ) { 
                    if ( q.charAt(i) != " " ) { 
                        return true 
                    } 
                } 
                return false 
            } 

            //valida que los campos no esten vacios y no tengan solo espacios en blanco 
            function checkFields(F) { 
                if( vacio(F.nombre.value) == false ||
                    vacio(F.apellido.value) == false ||
                    vacio(F.mail.value) == false ||
                    vacio(F.mensaje.value) == false) { 
                    alert('Los campos marcados con (*) son obligatorios.\n\nPor favor asegurese de completarlos correctamente\npara que podamos contactarlo.\nMuchas gracias.');
                    return false 
                } 
                else { 
                    return true
                } 
            } 
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
                        <center>
                            <strong><big>Para contactárnos, envianos un mensaje:</big></strong>
                            <br><br>
                            <form id="contacto" method="post" onsubmit="return checkFields(this);" action="enviar.php">
                                <table style="text-align: left; height: 400px; width: 323px;" border="0" cellpadding="2" cellspacing="2">
                                    <tbody>
                                        <tr>
                                            <td>Nombre*:</td>
                                            <td><input size="40" tabindex="1" name="nombre" id="nombre"></td>
                                        </tr>
                                        <tr>
                                            <td>Apellido*:</td>
                                            <td><input size="40" tabindex="2" name="apellido" id="apellido"></td>
                                        </tr>
                                        <tr>
                                            <td>Teléfono:</td>
                                            <td><input size="40" tabindex="3" name="telefono" id="telefono"></td>
                                        </tr>
                                        <tr>
                                            <td>Localidad:</td>
                                            <td><input size="40" tabindex="4" name="localidad" id="localidad"></td>
                                        </tr>
                                        <tr>
                                            <td>E-mail*:</td>
                                            <td><input size="40" tabindex="5" name="mail" id="mail"></td>
                                        </tr>
                                        <tr>
                                            <td>Mensaje*:</td>
                                            <td><textarea name="mensaje" id="mensaje" rows="8" cols="30" tabindex="6"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><br>
                                            </td>
                                            <td style="text-align: right;"><input name="Submit" value="Enviar" type="submit"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </center>
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