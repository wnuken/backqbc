<?php
// print "<pre>"; var_dump($_SERVER); print "</pre>";
$contentJson = file_get_contents("http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] . "loeproducts.json");
$content = json_decode($contentJson,true);
function changeAcutes($params){
    $result = htmlentities($params);
    return $result;
}

?>
<table cellspacing="0" cellpadding="0" border="0" width="640" align="center" style="width: 640px; margin: 0 auto;" class="contenedor body"><tbody>
    <tr>
        <td bgcolor="#ffffff" width="10px"></td>
        <td width="300px" height="40px" align="center" style="padding-right:0; padding-left:0;"><a style="text-decoration:none;">
            <span style="font-family: sans-serif, arial, Helvetica Nueve; font-size: 16px; color: #0c3753;"> 
                <?php print changeAcutes($content['dataInfo']['titleQBC']); ?>
            </span>
            </a>
        </td>
        <td bgcolor="#ffffff" width="10px"></td>
    </tr>
    <tr bgcolor="#ffffff" height="90px" id="logopromo">
        <td bgcolor="#1791da" width="10px"></td>
        <td bgcolor="#1791da" width="auto" height="60px" align="center" colspan="2" style="background-color: #1791da">
            <a target="blank" href="<?php print $content['dataInfo']['urlPromo']; ?>">
                <img width="220px" ;="" alt="logo-loe" src="<?php print $content['dataInfo']['logoPromo']; ?>">
            </a>
        </td>
    </tr>
    <tr bgcolor="#1791DA">
        <td bgcolor="#1791DA" style="background-color:#1791DA;" colspan="3">&nbsp;</td>
    </tr>
    <tr bgcolor="#1791DA">
        <td bgcolor="#1791DA" width="10">&nbsp;</td>
        <td bgcolor="#1791DA" width="620">
            <table cellspacing="0" cellpadding="0" border="0" bgcolor="#f9f9f9" width="620" 
                   style="border-top-left-radius:10px; border-top-right-radius:10px; border-bottom-left-radius:10px; border-bottom-right-radius:10px;" 
                   class="destacado"><tbody>
                <tr bgcolor="#1791DA"><td style="margin-top:0; padding:0;">
                    <?php 
foreach($content['dataInfo']['upper'] as $key => $module): 
//$module = $upper;
if($module['type'] == '0'){ 
    include 'loetype0.php';
}else if($module['type'] == '1'){ 
    include 'loetype1.php';
}else if($module['type'] == '2'){ 
    include 'loetype2.php';
}
endforeach;
                    ?>
                    </td></tr>
                </tbody></table><!-- /.destacado-->
        </td>
        <td bgcolor="#1791DA" width="10">&nbsp;</td>
    </tr>

    <tr bgcolor="#1791DA">
        <td bgcolor="#1791DA" width="10">&nbsp;</td>
        <td bgcolor="#1791DA" width="620">
            <table cellspacing="0" cellpadding="0" border="0" bgcolor="#f9f9f9" width="620" style="border-top-left-radius:10px; border-top-right-radius:10px; border-bottom-left-radius:10px; border-bottom-right-radius:10px;" class="destacado"><tbody>
                <tr bgcolor="#1791DA"><td style="margin-top:0; padding:0;">
                    <?php 
foreach($content['dataInfo']['lower'] as $key => $module): 
//$module = $upper;
if($module['type'] == '0'){ 
    include 'loetype0.php';
}else if($module['type'] == '1'){ 
    include 'loetype1.php';
}else if($module['type'] == '2'){ 
    include 'loetype2.php';
}
endforeach;
                    ?>
                    </td></tr>
                </tbody></table><!-- /.destacado-->
        </td>
        <td bgcolor="#1791DA" width="10">&nbsp;</td>
    </tr>



    <tr bgcolor="#1791da">
        <td bgcolor="#1791da" width="10px"></td>
        <td bgcolor="#1791da" width="620" height="10" align="center">
            <a href="http://www.loencontraste.com/terminos-y-condiciones" target="_blank" style="text-decoration:none;">
                <span style="font-family:Arial, Helvetica, sans-serif; font-size: 8px; color:#ffffff;">
                    <?php print changeAcutes($content['dataInfo']['titleDisclamer']); ?>
                </span></a>
        </td>
        <td bgcolor="#1791da" width="10px"></td>
    </tr>
    <tr bgcolor="#1791da">
        <td bgcolor="#1791da" width="10px"></td>
        <td bgcolor="#1791da" width="620" align="left" ;="" style="padding: 0 20 20 20">
            <a href="http://www.loencontraste.com/terminos-y-condiciones" target="_blank" style="text-decoration:none;">
                <span style="font-family:Arial, Helvetica, sans-serif; font-size: 8px; color:#ffffff;">
                    <?php print changeAcutes($content['dataInfo']['disclamer']); ?>
                </span>
            </a>
        </td>
        <td bgcolor="#1791da" width="10px"></td>
    </tr>

    <tr bgcolor="#ffffff">
        <td bgcolor="#ffffff" width="10px"></td>
        <td width="300px" height="40px" align="center" style="padding-right:0; padding-left:0;"><a style="text-decoration:none;"><span style="font-family: sans-serif, arial, Helvetica Nueve; font-size: 16px; color: #0c3753;"><img style=" margin-top: 5px;" alt="logo Quebuenacompra.com" src="http://informacion.quebuenacompra.com/qbc-design/news-loe/images/logo_quebuenacompra.png">  </span></a></td>
        <td bgcolor="#ffffff" width="10px"></td>
    </tr>

    </tbody>
</table>