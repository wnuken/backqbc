<?php
$sites = $content['dataInfo'][$position[0]][$position[1]]['sites'];
?>

<table align="left" bgcolor="#f2f2f2" border="0" cellpadding="0" cellspacing="0" width="300" height="490"><tbody>
    <tr>
        <td height="14" valign="bottom" bgcolor="#F9F9F9">
            <!--img width="300" height="14" alt="border-top" src="http://informacion.quebuenacompra.com/xml/mailqbc/images/border-top.jpg"-->
        </td>
    </tr>
    <tr style="height: 40px;">
        <td style="padding: 0px 6px;" height="30" valign="top" bgcolor="#f9f9f9">
            <a href="<?php print $content['dataInfo'][$position[0]][$position[1]]['url']; ?>" target="_blank" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#1791da; font-weight:bold; text-decoration:none;">
                <span style="font-size:16px;"><?php print $content['dataInfo'][$position[0]][$position[1]]['title']; ?></span>

            </a>
        </td>
    </tr>
    <tr>
        <td height="8" bgcolor="#f9f9f9">&nbsp;</td>
    </tr>
    <tr>
        <td margin="10" padding="10" align="auto" bgcolor="#f9f9f9" width="270">
            <a style="text-decoration: none; text-align: center" target="blank" href="<?php print $content['dataInfo'][$position[0]][$position[1]]['url']; ?>"> 
                <p style="margin: 0; padding: 0px; text-align: center;">
                    <img style="margin: auto; border: 1px solid #b7b7b7; text-align: center; " title="IMG oferta LOE" alt="IMG oferta LOE" 
                         src="<?php print $content['dataInfo'][$position[0]][$position[1]]['image']; ?>" height="200" width="270">
                </p>
            </a>
        </td>
    </tr>
    <tr>
        <td height="6" bgcolor="#f9f9f9">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#f9f9f9">
            <table border="0" cellpadding="0" cellspacing="0" width="300" height="182"><tbody>
                <?php foreach($sites as $site): ?>
                <tr height="45">
                    <td bgcolor="<?php ($site['active'] == 1)?print '#edf1b0': print '#ffffff'; ?>" width="150" 
                        style="border-top: 1px solid #efefef;text-align: center;" ;=""> 
                        <span style="font-family: Arial,Helvetica,sans-serif; font-size: 16px; padding-left: 15px;"> 
                            <a style="text-decoration: none; color:#000;" target="_blank" href="<?php print $site['url']; ?>">
                                <?php print $site['name']; ?>
                            </a>
                        </span>
                    </td>
                    <td bgcolor="<?php ($site['active'] == 1)?print '#edf1b0': print '#ffffff'; ?>" width="150" style="border-top: 1px solid #efefef" ;=""> 
                        <span style="font-family: Arial,Helvetica,sans-serif; font-size: 16px; padding-left: 15px;"> 
                            <a style="text-decoration: none; color:#000;" target="_blank" href="<?php print $site['url']; ?>">
                                <?php print $site['value']; ?>
                            </a>
                        </span> 
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody></table>
        </td>
    </tr>
    <tr>
        <td height="14" valign="top" bgcolor="#ebebeb">
            <!--img width="300" height="14" alt="border-bootom" src="http://informacion.quebuenacompra.com/xml/mailqbc/images/border-botoom.jpg"-->
        </td>
    </tr>
    </tbody></table>