<script type="text/javascript"><!--
    google_ad_client = "ca-pub-7772189878652683";
    /* publicidad_ipea */
    google_ad_slot = "9037201603";
    google_ad_width = 468;
    google_ad_height = 60;
    //-->
</script>
<script type="text/javascript"
    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<script type="text/javascript"><!--
    google_ad_client = "ca-pub-7772189878652683";
    /* publicidad_ipea */
    google_ad_slot = "9037201603";
    google_ad_width = 468;
    google_ad_height = 60;
    //-->
</script>
<script type="text/javascript"
    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<!-- Histats.com  START  (standard)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="contadores" ><script  type="text/javascript" >
try {Histats.start(1,1634722,4,205,255,27,"00011001");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?1634722&101" alt="contadores" border="0"></a></noscript>
<!-- Histats.com  END  -->
<br>
<?php

function FUNC_brouserUsr(){ //echo FUNC_brouserUsr();
if((ereg("Nav", $_SERVER["HTTP_USER_AGENT"])) || (ereg("Gold",
$_SERVER["HTTP_USER_AGENT"])) || (ereg("X11",
$_SERVER["HTTP_USER_AGENT"])) || (ereg("Mozilla",
$_SERVER["HTTP_USER_AGENT"])) || (ereg("Netscape",
$_SERVER["HTTP_USER_AGENT"])) AND (!ereg("MSIE",
$_SERVER["HTTP_USER_AGENT"]) AND (!ereg("Konqueror",
$_SERVER["HTTP_USER_AGENT"])))) $browser = "Netscape";
elseif(ereg("MSIE", $_SERVER["HTTP_USER_AGENT"])) $browser = "MSIE";
elseif(ereg("Lynx", $_SERVER["HTTP_USER_AGENT"])) $browser = "Lynx";
elseif(ereg("Opera", $_SERVER["HTTP_USER_AGENT"])) $browser = "Opera";
elseif(ereg("Netscape", $_SERVER["HTTP_USER_AGENT"])) $browser = "Netscape";
elseif(ereg("Konqueror", $_SERVER["HTTP_USER_AGENT"])) $browser = "Konqueror";
elseif((eregi("bot", $_SERVER["HTTP_USER_AGENT"])) ||
(ereg("Google", $_SERVER["HTTP_USER_AGENT"])) || (ereg("Slurp",
$_SERVER["HTTP_USER_AGENT"])) || (ereg("Scooter",
$_SERVER["HTTP_USER_AGENT"])) || (eregi("Spider",
$_SERVER["HTTP_USER_AGENT"])) || (eregi("Infoseek",
$_SERVER["HTTP_USER_AGENT"]))) $browser = "Bot";
else $browser = "Other";
return $browser;
}    

$u_agent = FUNC_brouserUsr();

if($u_agent != "Netscape")
{
echo "<div style=\"text-align: left;\">
           <small style=\"font-style: italic;\">					
       <span style=\"font-family: Arial;color: rgb(0, 0, 0);font-size:12px;\">
          Para una correcta visualización se recomienda utilizar <a id=\"link_firma\" href=\"http://www.mozilla.com/es-ES/firefox/\" target=\"_blank\">Mozilla Firefox</a> o <a id=\"link_firma\" href=\"http://www.google.com/chrome\" target=\"_blank\">Google Chrome</a>.
        </span>
    </small>				
</div>";
echo "<div style=\"text-align: right;\">";
           }else{
           echo "<div style=\"text-align: center;\">";
           }
           ?>

           <!--<div style="text-align: left;">
                   <small style="font-style: italic;">					
                                   <span style="font-family: Arial;color: rgb(0, 0, 0);font-size:12px;">
                                           Para una correcta visualización se recomienda utilizar <a id="link_firma" href="http://www.mozilla.com/es-ES/firefox/" target="_blank">Mozilla Firefox</a> o <a id="link_firma" href="http://www.google.com/chrome" target="_blank">Google Chrome</a>.
                                   </span>
                   </small>				
           </div>
           <div style="text-align: right;">-->
           <a href="http://alvarogili.com.ar" target="_blank" style="display:inline;">
            <small style="font-style: italic;">					
                <span style="font-family: Arial;color: rgb(0, 0, 0);">Diseño&nbsp;
                </span>
            </small>
            <img style="border: 0px solid ; width: 100px; height: 13px;" alt="" src="imagenes/logo_alvaro_gili.png">
        </a>
    </div>
    <div id="fixme-bottom">
        <a href="#" title="Ir arriba"><img border="0" alt="Ir arriba" src="imagenes/flecha_ir_arriba.png"/></a>
    </div>

