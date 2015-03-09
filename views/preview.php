<?php 

// $contentJson = file_get_contents('http://qa.quebuenacompra.com/atmadmin/loe/loeproducts.json');
$contentJson = file_get_contents("http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] . "loe/loeproducts.json");

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
    <tr bgcolor="#ffffff" height="90px">
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

                    <?php foreach($content['dataInfo']['upper'] as $key => $upper): ?>

                    <?php if($upper['type'] == '0'){ ?>

                    <table cellspacing="0" cellpadding="0" border="0" bgcolor="#f9f9f9" width="300" align="<?php ($key == '0')? print 'left': print 'right' ?>" style="margin-bottom:10px;"><tbody>
                        <tr>
                            <td width="300">
                                <!-- oferta-->
                                <table cellspacing="0" cellpadding="0" border="0" bgcolor="#f2f2f2" width="300" align="left"><tbody>
                                    <tr>
                                        <td bgcolor="#F9F9F9" valign="bottom" height="14">
                                            <!--img width="300" height="14" alt="border-top" src="http://informacion.quebuenacompra.com/xml/mailqbc/images/border-top.jpg"-->
                                        </td>
                                    </tr>
                                    <tr style="height: 45px;">
                                        <td bgcolor="#f9f9f9" valign="top" height="30" style="padding: 0px 6px;">
                                            <a href="<?php print $upper['url'] ?>" target="_blank" 
                                               style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#1791da; font-weight:bold; text-decoration:none;">
                                                <span style="font-size:16px;"><?php print changeAcutes($upper['title']) ?></span>

                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f9f9f9" height="8">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="270" align="auto" margin="10" padding="10" bgcolor="#f9f9f9">
                                            <a style="text-decoration: none; text-align: center" target="blank" href="<?php print $upper['url'] ?>"> 
                                                <p style="margin: 0; padding: 0px; text-align: center;">
                                                    <img width="270" height="201" 
                                                         style="margin: auto; border: 1px solid #b7b7b7; text-align: center; " 
                                                         title="IMG oferta LOE" alt="IMG oferta LOE" src="<?php print $upper['image'] ?>">
                                                </p>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f9f9f9" height="6">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f9f9f9">
                                            <table cellspacing="0" cellpadding="0" border="0" width="300"><tbody>
                                                <?php foreach($upper['sites'] as $sites): ?>
                                                <tr height="45">
                                                    <td bgcolor="<?php ($sites['active'] == 1)?print '#edf1b0': print '#ffffff'; ?>" width="150" 
                                                        style="border-top: 1px solid #efefef;text-align: center;" ;=""> 
                                                        <span style="font-family: Arial,Helvetica,sans-serif; font-size: 16px; padding-left: 15px;"> 
                                                            <a style="text-decoration: none; color:#000;" target="_blank" href="<?php print $sites['url']; ?>">
                                                                <?php print changeAcutes($sites['name']); ?>
                                                            </a>
                                                        </span>
                                                    </td>
                                                    <td bgcolor="<?php ($sites['active'] == 1)?print '#edf1b0': print '#ffffff'; ?>" width="150" style="border-top: 1px solid #efefef" ;=""> 
                                                        <span style="font-family: Arial,Helvetica,sans-serif; font-size: 16px; padding-left: 15px;"> 
                                                            <a style="text-decoration: none; color:#000;" target="_blank" href="<?php print $sites['url']; ?>">
                                                                <?php print $sites['value']; ?>
                                                            </a>
                                                        </span> 
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                                </tbody></table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#ebebeb" valign="top" height="14">
                                            <!--img width="300" height="14" alt="border-bootom" src="http://informacion.quebuenacompra.com/xml/mailqbc/images/border-botoom.jpg"-->
                                        </td>
                                    </tr>
                                    </tbody></table>
                                <!--fin  oferta -->
                            </td>
                        </tr>
                        </tbody></table>            <!-- fin ofertas -->

                    <?php }else{ ?>

                    <table cellspacing="0" cellpadding="0" border="0" bgcolor="#f9f9f9" width="300" align="<?php ($key == '0')? print 'left': print 'right' ?>" style="margin-bottom:10px;"><tbody>
                        <!--<table style="margin-bottom:10px;" width="300" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#f9f9f9">-->
                        <tr>
                            <td width="300">
                                <!-- oferta-->
                                <table cellspacing="0" cellpadding="0" border="0" bgcolor="#f2f2f2" width="300" align="left"><tbody>
                                    <tr>
                                        <td bgcolor="#F9F9F9" valign="bottom" height="14"><!--img width="300" height="14" alt="border-top" src="http://informacion.quebuenacompra.com/xml/mailqbc/images/border-top.jpg"--></td>
                                    </tr>
                                    <tr style="height: 45px;">
                                        <td bgcolor="#f9f9f9" valign="top" height="30" style="padding: 0px 6px;">
                                            <a href="<?php print $upper['url']; ?>" 
                                               style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#1791da; font-weight:bold; text-decoration:none;" target="_blank">
                                                <span style="font-size:16px;"><?php print changeAcutes($upper['title']); ?></span>

                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f9f9f9" height="8">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="270" align="auto" margin="10" padding="10" bgcolor="#f9f9f9">
                                            <a style="text-decoration: none; text-align: center" target="blank" href="<?php print $upper['url']; ?>"> 
                                                <p style="margin: 0; padding: 0px; text-align: center;">
                                                    <img width="270" height="201" 
                                                         style="margin: auto; border: 1px solid #b7b7b7; text-align: center; " 
                                                         title="IMG oferta LOE" alt="IMG oferta LOE" src="<?php print $upper['image']; ?>">
                                                </p>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f9f9f9" height="6">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f9f9f9">
                                            <table cellspacing="0" cellpadding="0" border="0" width="300">
                                                <tbody><tr>
                                                    <td width="300" height="93" vertical-align="top" ;="">
                                                        <table cellspacing="0" cellpadding="0" border="0" width="300px" height="93px" style="margin-top:0px; margin-left:0px"><tbody>
                                                            <tr>
                                                                <td width="100" height="93" style="vertical-align: top;" ;="">
                                                                    <table cellspacing="0" cellpadding="0" border="0" width="100px" height="83px" ;="" 
                                                                           style="table-layout:fixed; margin-top:0px; margin-left:0px;"><tbody>
                                                                        <tr>
                                                                            <td align="left" style="width: 100px; height: 26px">
                                                                                <img style="margin-top: 0; display: block;" alt="loe" 
                                                                                     src="http://informacion.quebuenacompra.com/qbc-design/news-loe/images/News_pauta_03.jpg">
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="vertical-align: top">
                                                                            <td style="width: 100px; height: 67px; background-color: #b9cb16; text-align: right;">
                                                                                <span style="font-size: 40px ;font-family: sans-serif, Arial, Helvetica Neue; color: #fff;">
                                                                                    <?php print $upper['percent']; ?>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody></table>
                                                                </td>		
                                                                <td width="34" style="vertical-align: top">
                                                                    <table cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" width="34" 
                                                                           style="table-layout:fixed; margin-top:0px; margin-left:0px;"><tbody>
                                                                        <tr style="vertical-align: baseline;">
                                                                            <td height="93" align="left" style="width: 34px; height: 93px">
                                                                                <img alt="loe" src="http://informacion.quebuenacompra.com/qbc-design/news-loe/images/News_pauta_04.jpg"></td>
                                                                        </tr>
                                                                        </tbody></table>
                                                                </td>
                                                                <td width="166" style="vertical-align: top;" ;="">
                                                                    <table cellspacing="0" cellpadding="0" border="0" width="166" height="93" style=" margin-top:0px; margin-left:0px;"><tbody>
                                                                        <tr>
                                                                            <td width="150" align="center" style="width: 166px; height: 48px;">
                                                                                <span style=" font-family: sans-serif, arial, Helvetica Nueve; font-size: 18px; color: #707070; width: 136px">
                                                                                    <a style="text-decoration: none; width: 166px; color: #000;" target="blank" href="<?php print $upper['url']; ?>">
                                                                                        <?php print changeAcutes($upper['retail']); ?>
                                                                                    </a>
                                                                                </span>
                                                                            </td>
                                                                            <td width="5" align="center" style="width: 5px; height: 48px; background-color: #f7f7f3;">
                                                                                <span style=" font-family: sans-serif, arial, Helvetica Nueve; font-size: 18px; color: #707070;"></span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="166" align="center" style="width: 166px; height: 45px; background-color: #edf1b0;">
                                                                                <span style=" font-family: sans-serif, arial, Helvetica Nueve; font-size: 18px; color: #707070;">
                                                                                    <a style="text-decoration: none; width: 166px;color: #000;" target="blank" href="<?php print $upper['url']; ?>">
                                                                                        <?php print $upper['value']; ?>
                                                                                    </a>
                                                                                </span>
                                                                            </td>
                                                                            <td width="5" align="center" style="width: 5px; height: 45px; background-color: #edf1b0;">
                                                                                <span style=" font-family: sans-serif, arial, Helvetica Nueve; font-size: 18px; color: #707070;">
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody></table>
                                                                </td>
                                                            </tr>
                                                            </tbody></table>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="300px" height="37px" align="center" cellpadding="0" cellspacing="0" border="0" ;=""> 
                                                            <a target="blank" href="<?php print $upper['url']; ?>">
                                                                <img style=" margin-top: 5px;" alt="btn ver entiendas" 
                                                                     src="http://informacion.quebuenacompra.com/qbc-design/news-loe/images/Newspautavermas_03.jpg"> 
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#ebebeb" valign="top" height="14"><!--img width="300" height="14" alt="border-bootom" src="http://informacion.quebuenacompra.com/xml/mailqbc/images/border-botoom.jpg"--></td>
                                    </tr>
                                    </tbody></table>
                                <!--fin  oferta -->
                            </td>
                        </tr>
                        </tbody></table>            <!-- fin ofertas -->


                    <?php } ?>

                    <?php endforeach; ?>

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

                    <?php foreach($content['dataInfo']['lower'] as $key => $lower): ?>

                    <?php if($lower['type'] == '1'){ ?>

                    <table cellspacing="0" cellpadding="0" border="0" bgcolor="#f9f9f9" width="300" align="<?php ($key == '0')? print 'left': print 'right' ?>" style="margin-bottom:10px;"><tbody>
                        <!--<table style="margin-bottom:10px;" width="300" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#f9f9f9">-->
                        <tr>
                            <td width="300">
                                <!-- oferta-->
                                <table cellspacing="0" cellpadding="0" border="0" bgcolor="#f2f2f2" width="300" align="left"><tbody>
                                    <tr>
                                        <td bgcolor="#F9F9F9" valign="bottom" height="14"><!--img width="300" height="14" alt="border-top" src="http://informacion.quebuenacompra.com/xml/mailqbc/images/border-top.jpg"--></td>
                                    </tr>
                                    <tr style="height: 45px;">
                                        <td bgcolor="#f9f9f9" valign="top" height="30" style="padding: 0px 6px;">
                                            <a href="<?php print $lower['url']; ?>" 
                                               style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#1791da; font-weight:bold; text-decoration:none;" target="_blank">
                                                <span style="font-size:16px;"><?php print changeAcutes($lower['title']); ?></span>

                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f9f9f9" height="8">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="270" align="auto" margin="10" padding="10" bgcolor="#f9f9f9">
                                            <a style="text-decoration: none; text-align: center" target="blank" href="<?php print $lower['url']; ?>"> 
                                                <p style="margin: 0; padding: 0px; text-align: center;">
                                                    <img width="270" height="201" 
                                                         style="margin: auto; border: 1px solid #b7b7b7; text-align: center; " 
                                                         title="IMG oferta LOE" alt="IMG oferta LOE" src="<?php print $lower['image']; ?>">
                                                </p>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f9f9f9" height="6">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f9f9f9">
                                            <table cellspacing="0" cellpadding="0" border="0" width="300">
                                                <tbody><tr>
                                                    <td width="300" height="93" vertical-align="top" ;="">
                                                        <table cellspacing="0" cellpadding="0" border="0" width="300px" height="93px" style="margin-top:0px; margin-left:0px"><tbody>
                                                            <tr>
                                                                <td width="100" height="93" style="vertical-align: top;" ;="">
                                                                    <table cellspacing="0" cellpadding="0" border="0" width="100px" height="83px" ;="" 
                                                                           style="table-layout:fixed; margin-top:0px; margin-left:0px;"><tbody>
                                                                        <tr>
                                                                            <td align="left" style="width: 100px; height: 26px">
                                                                                <img style="margin-top: 0; display: block;" alt="loe" 
                                                                                     src="http://informacion.quebuenacompra.com/qbc-design/news-loe/images/News_pauta_03.jpg">
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="vertical-align: top">
                                                                            <td style="width: 100px; height: 67px; background-color: #b9cb16; text-align: right;">
                                                                                <span style="font-size: 40px ;font-family: sans-serif, Arial, Helvetica Neue; color: #fff;">
                                                                                    <?php print $lower['percent']; ?>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody></table>
                                                                </td>		
                                                                <td width="34" style="vertical-align: top">
                                                                    <table cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" width="34" 
                                                                           style="table-layout:fixed; margin-top:0px; margin-left:0px;"><tbody>
                                                                        <tr style="vertical-align: baseline;">
                                                                            <td height="93" align="left" style="width: 34px; height: 93px">
                                                                                <img alt="loe" src="http://informacion.quebuenacompra.com/qbc-design/news-loe/images/News_pauta_04.jpg"></td>
                                                                        </tr>
                                                                        </tbody></table>
                                                                </td>
                                                                <td width="166" style="vertical-align: top;" ;="">
                                                                    <table cellspacing="0" cellpadding="0" border="0" width="166" height="93" style=" margin-top:0px; margin-left:0px;"><tbody>
                                                                        <tr>
                                                                            <td width="150" align="center" style="width: 166px; height: 48px;">
                                                                                <span style=" font-family: sans-serif, arial, Helvetica Nueve; font-size: 18px; color: #707070; width: 136px">
                                                                                    <a style="text-decoration: none; width: 166px; color: #000;" target="blank" href="<?php print $lower['url']; ?>">
                                                                                        <?php print changeAcutes($lower['retail']); ?>
                                                                                    </a>
                                                                                </span>
                                                                            </td>
                                                                            <td width="5" align="center" style="width: 5px; height: 48px; background-color: #f7f7f3;">
                                                                                <span style=" font-family: sans-serif, arial, Helvetica Nueve; font-size: 18px; color: #707070;"></span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="166" align="center" style="width: 166px; height: 45px; background-color: #edf1b0;">
                                                                                <span style=" font-family: sans-serif, arial, Helvetica Nueve; font-size: 18px; color: #707070;">
                                                                                    <a style="text-decoration: none; width: 166px;color: #000;" target="blank" href="<?php print $lower['url']; ?>">
                                                                                        <?php print $lower['value']; ?>
                                                                                    </a>
                                                                                </span>
                                                                            </td>
                                                                            <td width="5" align="center" style="width: 5px; height: 45px; background-color: #edf1b0;">
                                                                                <span style=" font-family: sans-serif, arial, Helvetica Nueve; font-size: 18px; color: #707070;">
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody></table>
                                                                </td>
                                                            </tr>
                                                            </tbody></table>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="300px" height="37px" align="center" cellpadding="0" cellspacing="0" border="0" ;=""> 
                                                            <a target="blank" href="<?php print $lower['url']; ?>">
                                                                <img style=" margin-top: 5px;" alt="btn ver entiendas" 
                                                                     src="http://informacion.quebuenacompra.com/qbc-design/news-loe/images/Newspautavermas_03.jpg"> 
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#ebebeb" valign="top" height="14"><!--img width="300" height="14" alt="border-bootom" src="http://informacion.quebuenacompra.com/xml/mailqbc/images/border-botoom.jpg"--></td>
                                    </tr>
                                    </tbody></table>
                                <!--fin  oferta -->
                            </td>
                        </tr>
                        </tbody></table>            <!-- fin ofertas -->

                    <?php }else{ ?>


                    <table cellspacing="0" cellpadding="0" border="0" bgcolor="#f9f9f9" width="300" align="<?php ($key == '0')? print 'left': print 'right' ?>" style="margin-bottom:10px;"><tbody>
                        <tr>
                            <td width="300">
                                <!-- oferta-->
                                <table cellspacing="0" cellpadding="0" border="0" bgcolor="#f2f2f2" width="300" align="left"><tbody>
                                    <tr>
                                        <td bgcolor="#F9F9F9" valign="bottom" height="14">
                                            <!--img width="300" height="14" alt="border-top" src="http://informacion.quebuenacompra.com/xml/mailqbc/images/border-top.jpg"-->
                                        </td>
                                    </tr>
                                    <tr style="height: 45px;">
                                        <td bgcolor="#f9f9f9" valign="top" height="30" style="padding: 0px 6px;">
                                            <a href="<?php print $lower['url'] ?>" target="_blank" 
                                               style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#1791da; font-weight:bold; text-decoration:none;">
                                                <span style="font-size:16px;"><?php print changeAcutes($lower['title']) ?></span>

                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f9f9f9" height="8">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="270" align="auto" margin="10" padding="10" bgcolor="#f9f9f9">
                                            <a style="text-decoration: none; text-align: center" target="blank" href="<?php print $lower['url'] ?>"> 
                                                <p style="margin: 0; padding: 0px; text-align: center;">
                                                    <img width="270" height="201" 
                                                         style="margin: auto; border: 1px solid #b7b7b7; text-align: center; " 
                                                         title="IMG oferta LOE" alt="IMG oferta LOE" src="<?php print $lower['image'] ?>">
                                                </p>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f9f9f9" height="6">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f9f9f9">
                                            <table cellspacing="0" cellpadding="0" border="0" width="300"><tbody>
                                                <?php foreach($lower['sites'] as $sites): ?>
                                                <tr height="45">
                                                    <td bgcolor="<?php ($sites['active'] == 1)?print '#edf1b0': print '#ffffff'; ?>" width="150" 
                                                        style="border-top: 1px solid #efefef;text-align: center;" ;=""> 
                                                        <span style="font-family: Arial,Helvetica,sans-serif; font-size: 16px; padding-left: 15px;"> 
                                                            <a style="text-decoration: none; color:#000;" target="_blank" href="<?php print $sites['url']; ?>">
                                                                <?php print changeAcutes($sites['name']); ?>
                                                            </a>
                                                        </span>
                                                    </td>
                                                    <td bgcolor="<?php ($sites['active'] == 1)?print '#edf1b0': print '#ffffff'; ?>" width="150" style="border-top: 1px solid #efefef" ;=""> 
                                                        <span style="font-family: Arial,Helvetica,sans-serif; font-size: 16px; padding-left: 15px;"> 
                                                            <a style="text-decoration: none; color:#000;" target="_blank" href="<?php print $sites['url']; ?>">
                                                                <?php print $sites['value']; ?>
                                                            </a>
                                                        </span> 
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                                </tbody></table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#ebebeb" valign="top" height="14">
                                            <!--img width="300" height="14" alt="border-bootom" src="http://informacion.quebuenacompra.com/xml/mailqbc/images/border-botoom.jpg"-->
                                        </td>
                                    </tr>
                                    </tbody></table>
                                <!--fin  oferta -->
                            </td>
                        </tr>
                        </tbody></table>   


                    <?php } ?>


                    <?php endforeach; ?>

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