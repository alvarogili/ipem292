<html>
    <head>
        <?php include("head.html"); ?>
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

                    <?php
                    /*
                      Ejemplo 2, conexión via socket
                     */

                    // DEFINICIÓN DE VARIABLES
                    $host = "http://200.69.240.233:8080/Pegasus2/";

                    // CREANDO EL SOCKET: (IP PROTOCOL[IPV4], TYPE SOCKET[TCP], PROTOCOL[TCP])
                    $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
                    $conexion = socket_connect($socket, $host, 8080);

                    // primer mensaje
                    $buffer = "POST /Pegasus2/Default2.aspx HTTP/1.1\r\n";
                    $buffer .= "Host: 200.69.240.233:8080\r\n";
                    $buffer .= "User-Agent: Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0\r\n";
                    $buffer .= "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8\r\n";
                    $buffer .= "Accept-Language: es-ar,es;q=0.8,en-us;q=0.5,en;q=0.3\r\n";
                    $buffer .= "Accept-Encoding: gzip, deflate\r\n";
                    $buffer .= "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7\r\n";
                    $buffer .= "Connection: keep-alive\r\n";
                    $buffer .= "X-Requested-With: XMLHttpRequest\r\n";
                    $buffer .= "X-MicrosoftAjax: Delta=true\r\n";
                    $buffer .= "Cache-Control: no-cache, no-cache\r\n";
                    $buffer .= "Content-Type: application/x-www-form-urlencoded; charset=utf-8\r\n";
                    $buffer .= "Referer: http://200.69.240.233:8080/Pegasus2/Default2.aspx\r\n";
                    $buffer .= "Content-Length: 460\r\n";
                    /*$buffer .= "Cookie: ASP.NET_SessionId=vnnouvj5w2oojeh4m1mpkowj\r\n";*/
                    $buffer .= "Pragma: no-cache\r\n\r\n";

                    $buffer .= "ScriptManager1=UpdatePanel1%7CImageButton1&__EVENTTARGET=&__EVENTARGUMENT=
&__VIEWSTATE=%2FwEPDwUJMTU0ODg2Njg3ZBgCBR5fX0NvbnRyb2xzUmVxdWlyZVBvc3RCYWNrS2V5X18WA
QUMSW1hZ2VCdXR0b24xBQpNdWx0aVZpZXcxDw9kZmSKmAtkTCX1BkhExyLnpwNTpaBa4Nj0MU7%2BJ0k3jTs
PYQ%3D%3D&__EVENTVALIDATION=%2FwEWBQLPsKLvAwLs0bLrBgLs0fbZDALSwpnTCALM9PumD3IR59rz%2
BOdLsL71MS8XKBMYwF3EsmVx6kHbSQ6fPJTW&TextBox1=boerora%40gmail.com&TextBox2=sanson&__
ASYNCPOST=true&ImageButton1.x=45&ImageButton1.y=17\r\n";
                    $salida = ' ';

                    // ESCRIBIENDO EL BUFFER EN EL SOCKET
                    if (!socket_write($socket, $buffer, strlen($buffer))) {
                        $errorcode = socket_last_error();
                        $errormsg = socket_strerror($errorcode);
                        echo "SENDING ERROR: $errormsg";
                    } else {

                        // LEYENDO RESPUESTA DEL SOCKET

                        while ($salida = socket_read($socket, 2048)) {
                            //print $salida;
                        }

                        //segundo mensaje
                        $buffer = "GET /Pegasus2/Usuarios.aspx HTTP/1.1\r\n";
                        $buffer .= "Host: 200.69.240.233:8080\r\n";
                        $buffer .= "User-Agent: Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0\r\n";
                        $buffer .= "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8\r\n";
                        $buffer .= "Accept-Language: es-ar,es;q=0.8,en-us;q=0.5,en;q=0.3\r\n";
                        $buffer .= "Accept-Encoding: gzip, deflate\r\n";
                        $buffer .= "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7\r\n";
                        $buffer .= "Connection: keep-alive\r\n";
                        $buffer .= "Referer: http://200.69.240.233:8080/Pegasus2/Default2.aspx\r\n";
                        $buffer .= "Cookie: ASP.NET_SessionId=vnnouvj5w2oojeh4m1mpkowj\r\n\r\n";

                        $salida = ' ';

                        // ESCRIBIENDO EL BUFFER EN EL SOCKET
                        if (!socket_write($socket, $buffer, strlen($buffer))) {
                            $errorcode = socket_last_error();
                            $errormsg = socket_strerror($errorcode);
                            echo "SENDING ERROR: $errormsg";
                        } else {

                            // LEYENDO RESPUESTA DEL SOCKET

                            while ($salida = socket_read($socket, 2048)) {
                                print $salida;
                            }
                        }
                    }

                    // CERRANDO LA CONEXIÓN
                    socket_close($socket);
                    ?>
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