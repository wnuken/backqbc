<table cellspacing="0" cellpadding="0" border="0" bgcolor="#f9f9f9" width="300" height="492" align="<?php ($key == '0')? print 'left': print 'right' ?>" style="margin-bottom:10px;"><tbody>
    <tr>
        <td width="300">
            <!-- oferta-->
            <table cellspacing="0" cellpadding="0" border="0" bgcolor="#f2f2f2" width="300" align="left"><tbody>
                <tr>
                    <td bgcolor="#F9F9F9" valign="bottom" height="14">
                        <!--img width="300" height="14" alt="border-top" src="http://informacion.quebuenacompra.com/xml/mailqbc/images/border-top.jpg"-->
                    </td>
                </tr>
                <tr style="height: 40px;">
                    <td bgcolor="#f9f9f9" valign="top" height="30" style="padding: 0px 6px;">
                        <a href="<?php print $module['url'] ?>" target="_blank" 
                           style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#1791da; font-weight:bold; text-decoration:none;">
                            <span style="font-size:16px;"><?php print changeAcutes($module['title']) ?></span>

                        </a>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f9" height="8">&nbsp;</td>
                </tr>
                <tr>
                    <td width="270" align="auto" margin="10" padding="10" bgcolor="#f9f9f9">
                        <a style="text-decoration: none; text-align: center" target="blank" href="<?php print $module['url'] ?>"> 
                            <p style="margin: 0; padding: 0px; text-align: center;">
                                <img width="270" height="200" 
                                     style="margin: auto; border: 1px solid #b7b7b7; text-align: center; " 
                                     title="IMG oferta LOE" alt="IMG oferta LOE" src="<?php print $module['image'] ?>">
                            </p>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f9" height="6">&nbsp;</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f9">
                        <table cellspacing="0" cellpadding="0" border="0" width="300" height="180"><tbody>
                            <?php 
    $type1cont = 0;
foreach($module['sites'] as $sites):
$type1cont++;
                            ?>
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
                            <?php 
endforeach;
if($type1cont < 4){
    if($type1cont == 1) $heightblank = 135;
    if($type1cont == 2) $heightblank = 90;
    if($type1cont == 3) $heightblank = 45;

                            ?>
                            <tr height="<?php print $heightblank; ?>">
                                <td style="border-top: 1px solid #efefef;text-align: center;" ;="" bgcolor="#ffffff" width="150"> 
                                    <span style="font-family: Arial,Helvetica,sans-serif; font-size: 16px; padding-left: 15px;"> 
                                        <a style="text-decoration: none; color:#000;" target="_blank" href="#">
                                        </a>
                                    </span>
                                </td>
                                <td style="border-top: 1px solid #efefef" ;="" bgcolor="#ffffff" width="150"> 
                                    <span style="font-family: Arial,Helvetica,sans-serif; font-size: 16px; padding-left: 15px;"> 
                                        <a style="text-decoration: none; color:#000;" target="_blank" href="#">
                                        </a>
                                    </span> 
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody></table>
                    </td>
                </tr>
                </tbody></table>
            <!--fin  oferta -->
        </td>
    </tr>
    <tr>
        <td bgcolor="#ebebeb" valign="top" height="14">
            <!--img width="300" height="14" alt="border-bootom" src="http://informacion.quebuenacompra.com/xml/mailqbc/images/border-botoom.jpg"-->
        </td>
    </tr>
    </tbody></table>            <!-- fin ofertas -->