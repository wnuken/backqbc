
<?php





/*$client = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379,
]);
$client->set('foo', 'bar');
$value = $client->get('foo');

/*
$pipeline = $client->pipeline();
  $pipeline->flushall();
$responses = $pipeline->execute();
*/
/*$responses = $client->flushall();
print '<pre>';
print_r($responses);
print '</pre>';*/

if($_SESSION['k_rol'] == 1){

    $Setting = new Settings();

    $masterParams = array(
        'server' => SERVER_DB_QBC_MASTER,
        'user' => USER_DB_QBC_MASTER,
        'pass' => PASS_DB_QBC_MASTER,
        'bd' => DB_QBC_MASTER
    );

    $mysqliMaster = $Setting->mysqliConection($masterParams);

    $slaveParams = array(
        'server' => SERVER_DB_QBC_SLAVE,
        'user' => USER_DB_QBC_SLAVE,
        'pass' => PASS_DB_QBC_SLAVE,
        'bd' => DB_QBC_SLAVE
    );

    $mysqliSlave = $Setting->mysqliConection($slaveParams);

    if($mysqliMaster !== false){
        $queryProccesMaster = $mysqliMaster->query("show processlist");
        $numberProcessMaster = $queryProccesMaster->num_rows;

        $keyw1 = 0;
        $ProcessMaster = array();
        while($row = $queryProccesMaster->fetch_assoc()){
            $ProcessMaster[$keyw1]['Id'] = $row['Id'];
            $ProcessMaster[$keyw1]['User'] = $row['User'];
            $ProcessMaster[$keyw1]['Host'] = $row['Host']; 
            $ProcessMaster[$keyw1]['db'] = $row['db'];
            $ProcessMaster[$keyw1]['Command'] = $row['Command'];
            $ProcessMaster[$keyw1]['Time'] = $row['Time'];
            $ProcessMaster[$keyw1]['State'] = $row['State'];
            $ProcessMaster[$keyw1]['Info'] = $row['Info'];
            $keyw1++;
        }

        $queryMasterStatus = $mysqliMaster->query("show master status");

        $keyw1 = 0;
        $MasterStatus = array();
        while($row = $queryMasterStatus->fetch_assoc()){
            $MasterStatus[$keyw1]['File'] = $row['File'];
            $MasterStatus[$keyw1]['Position'] = $row['Position'];
            $MasterStatus[$keyw1]['Binlog_Do_DB'] = $row['Binlog_Do_DB']; 
            $MasterStatus[$keyw1]['Binlog_Ignore_DB'] = $row['Binlog_Ignore_DB'];
            $keyw1++;
        }

    }

    if($mysqliSlave !== false){
        $queryProccesSlave = $mysqliSlave->query("show processlist");
        $numberProcessSlave = $queryProccesSlave->num_rows;

        $keyw2 = 0;
        $ProcessSlave = array();
        while($row = $queryProccesSlave->fetch_assoc()){
            $ProcessSlave[$keyw2]['Id'] = $row['Id'];
            $ProcessSlave[$keyw2]['User'] = $row['User'];
            $ProcessSlave[$keyw2]['Host'] = $row['Host']; 
            $ProcessSlave[$keyw2]['db'] = $row['db'];
            $ProcessSlave[$keyw2]['Command'] = $row['Command'];
            $ProcessSlave[$keyw2]['Time'] = $row['Time'];
            $ProcessSlave[$keyw2]['State'] = $row['State'];
            $ProcessSlave[$keyw2]['Info'] = $row['Info'];
            $keyw2++;
        }

        $querySlaveStatus = $mysqliSlave->query("show slave status");
        
        
        $keyw2 = 0;
        $SlaveStatus = array();
        while($row = $querySlaveStatus->fetch_assoc()){
            $SlaveStatus[$keyw2]['Master_Log_File'] = $row['Master_Log_File'];
            $SlaveStatus[$keyw2]['Slave_IO_Running'] = $row['Slave_IO_Running'];
            $SlaveStatus[$keyw2]['Slave_SQL_Running'] = $row['Slave_SQL_Running']; 
            $SlaveStatus[$keyw2]['Last_Errno'] = $row['Last_Errno'];
            $keyw2++;
        }
        
        
    }



    $text1 = "set @id_camp = 'CampignID';

set @product_id = (select g.product_id from
groupdeals g
where g.groupdeals_id = @id_camp);

select oi.item_id, oi.order_id, o.increment_id, oi.created_at, oi.product_id,
oi.product_type, oi.sku, oi.name, oi.qty_canceled, oi.qty_invoiced, oi.qty_ordered,
oi.qty_refunded, oi.qty_returned, oi.qty_redeemed, oi.qty_to_redeem, o.total_qty_ordered, oi.price,
oi.row_total_incl_tax, oi.consultant, o.state, o.`status`, o.customer_id,
o.customer_email, o.customer_firstname, o.customer_lastname,
o.customer_identification from
sales_flat_order_item oi
join sales_flat_order o
on oi.order_id = o.entity_id
and oi.product_id = @product_id
and oi.qty_redeemed > 0;

drop table if exists temp_order_redemeed;
CREATE TEMPORARY TABLE temp_order_redemeed as select o.increment_id as ids from
sales_flat_order_item oi
join sales_flat_order o
on oi.order_id = o.entity_id
and oi.product_id = @product_id
and oi.qty_redeemed > 0;

select * from
qbc_sci_sell ss
join
qbc_sci_sell_doc sd
on ss.petition_id = sd.petition_id
and ss.order_id in
(
select ids from temp_order_redemeed
);

select sd.document_id
-- ,sd.doc_date, sd.doc_value, ss.order_id, ss.item_id
from
qbc_sci_sell ss
join
qbc_sci_sell_doc sd
on ss.petition_id = sd.petition_id
-- and ss.processed = 0
and ss.order_id in
(
select ids from temp_order_redemeed
);

select * from
qbc_sci_devolution dv
join
qbc_sci_devolution_doc dvd
on dv.petition_id = dvd.petition_id
and dv.coupon in
(
select ids from temp_order_redemeed
);

select * from
qbc_sci_devolution dv
join
qbc_sci_devolution_doc dvd
on dv.petition_id = dvd.petition_id
and dv.campaign_id in
(
@id_camp
);";

    $text2 = "select * from
DocumentoContableVenta dv
where
dv.Numero in
(
'1300521335','1300521117'
)
and (dv.InterfaceId = 2 or dv.InterfaceId = 4);


select dv.Numero, count(dv.Numero) as cantidad from
DocumentoContableVenta dv
where
dv.Numero in
(
'1300521335','1300521117'
)
and (dv.InterfaceId = 2 or dv.InterfaceId = 4)
-- and count(dv.Numero) > 1
group by dv.Numero
order by cantidad desc;


select dv.Numero, count(dv.Numero) as cantidad from
DocumentoContableVenta dv
where
dv.Numero in
(
'1300521335','1300521117'
)
and (dv.InterfaceId = 2)
group by dv.Numero;


select dv.Numero, count(dv.Numero) as cantidad from
DocumentoContableVenta dv
where
dv.Numero in
(
'1300521335','1300521117'
)
and (dv.InterfaceId = 4)
group by dv.Numero;

select dv.PadreId from
DocumentoContableVenta dv
where
dv.Numero in
(
'1300521335','1300521117'
)
and (dv.InterfaceId = 4)
group by dv.PadreId;";




?>
<div class="row">
    <div class="col-md-4">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Servidor Base de datos Master</h3>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <?php if($mysqliMaster !== false){ ?>
                    <li class="list-group-item"><?php printf('MySQL Server versión:<span class="badge"> %s</span>', $mysqliMaster->server_info); ?></li>
                    <li class="list-group-item"><?php printf('MySQL Client versión:<span class="badge"> %s</span>', $mysqliMaster->client_info); ?></li>
                    <li class="list-group-item"><?php printf('Último error:<span class="badge"> %s</span>', mysqli_error($mysqliMaster)); ?></li>
                    <li class="list-group-item"><?php printf('Estado:<span class="badge"> %s</span>', $mysqliMaster->sqlstate); ?></li>
                    <li class="list-group-item">
                        <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#detailProcessMaster"> Detalle</button>
                        Cantidad de procesos actuales:
                        <span class="badge"><?php print($numberProcessMaster); ?></span>
                    </li>
                    <li class="list-group-item">
                        <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#detailMasterStatus"> Detalle</button>
                        Master Status:
                        <span class="badge">File: <?php if(isset($MasterStatus[0]['File'])) print $MasterStatus[0]['File']; ?></span>
                    </li>
                    <?php }else{ ?>
                    <li class="list-group-item"><?php print('No se puede obtener información del servidor'); ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>    
    </div>

    <div class="col-md-4">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Servidor Base de datos Slave</h3>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <?php if($mysqliMaster !== false){ ?>
                    <li class="list-group-item"><?php printf('MySQL Server versión:<span class="badge"> %s</span>', $mysqliMaster->server_info); ?></li>
                    <li class="list-group-item"><?php printf('MySQL Client versión:<span class="badge"> %s</span>', $mysqliMaster->client_info); ?></li>
                    <li class="list-group-item"><?php printf('Último error:<span class="badge"> %s</span>', mysqli_error($mysqliMaster)); ?></li>
                    <li class="list-group-item"><?php printf('Estado:<span class="badge"> %s</span>', $mysqliMaster->sqlstate); ?></li>
                    <li class="list-group-item">
                        <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#detailProcessSlave"> Detalle</button>
                        Cantidad de procesos actuales:
                        <span class="badge"><?php print($numberProcessSlave); ?></span>
                    </li>
                    <li class="list-group-item">
                        <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#detailSlaveStatus"> Detalle</button>
                        Slave Status:
                        <span class="badge"><?php if(isset($SlaveStatus[0]['Slave_IO_Running'])) print $SlaveStatus[0]['Slave_IO_Running']; ?></span>
                        <span class="badge"><?php if(isset($SlaveStatus[0]['Slave_SQL_Running'])) print $SlaveStatus[0]['Slave_SQL_Running']; ?></span>
                    </li>
                    <?php }else{ ?>
                    <li class="list-group-item"><?php print('No se puede obtener información del servidor'); ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>    
    </div>

    <div class="col-md-4">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Generar ID Petición</h3>
            </div>
            <div class="panel-body">
                <?php 
    $actualTime = strtotime('now');
    $md5 = md5($actualTime);
    print $actualTime . '<br />';
    print substr($md5, 0 ,24);
                ?>
            </div>
        </div>    
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h3 class="panel-title">Querys Pago Aliado</h3>
                </a>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <textarea id="xmltext" class="xmltext" data-mode="text/x-mysql"><?php print $text1; ?>
                    </textarea>
                </div>
            </div>
        </div>   
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Querys Pago Aliado</h3>
            </div>
            <div class="panel-body">
                <textarea id="xmltext1" class="xmltext" data-mode="text/x-mysql"><?php print $text2; ?></textarea>
            </div>
        </div>   
    </div>
</div>

<?php if($mysqliMaster !== false): ?>
<div class="modal fade" id="detailProcessMaster" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 95%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Lista de Procesos</h4>
            </div>
            <div class="modal-body">

                <table class="table table-bordered table-striped js-options-table">
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Host</th>
                        <th>Base de datos</th>
                        <th>Comando</th>
                        <th>Tiempo</th>
                        <th>Estado</th>
                        <th>Info</th>
                    </tr>

                    <?php foreach($ProcessMaster as $row): ?>
                    <tr>
                        <td><?php print $row['Id']; ?></td>
                        <td><?php print $row['User']; ?></td>
                        <td><?php print $row['Host']; ?></td>
                        <td><?php print $row['db']; ?></td>
                        <td><?php print $row['Command']; ?></td>
                        <td><?php print $row['Time']; ?></td>
                        <td><?php print $row['State']; ?></td>
                        <td><?php print $row['Info']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="detailMasterStatus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 95%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Master Status</h4>
            </div>
            <div class="modal-body">

                <table class="table table-bordered table-striped js-options-table">
                    <tr>
                        <th>Archivo</th>
                        <th>Posición</th>
                        <th>Base de datos</th>
                        <th>Log</th>
                    </tr>
                    <?php foreach($MasterStatus as $row): ?>
                    <tr>
                        <td><?php print $row['File']; ?></td>
                        <td><?php print $row['Position']; ?></td>
                        <td><?php print $row['Binlog_Do_DB']; ?></td>
                        <td><?php print $row['Binlog_Ignore_DB']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>




<?php endif; ?>

<?php if($mysqliSlave !== false): ?>
<div class="modal fade" id="detailProcessSlave" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 95%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Lista de Procesos</h4>
            </div>
            <div class="modal-body">

                <table class="table table-bordered table-striped js-options-table">
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Host</th>
                        <th>Base de datos</th>
                        <th>Comando</th>
                        <th>Tiempo</th>
                        <th>Estado</th>
                        <th>Info</th>
                    </tr>

                    <?php foreach($ProcessSlave as $row): ?>
                    <tr>
                        <td><?php print $row['Id']; ?></td>
                        <td><?php print $row['User']; ?></td>
                        <td><?php print $row['Host']; ?></td>
                        <td><?php print $row['db']; ?></td>
                        <td><?php print $row['Command']; ?></td>
                        <td><?php print $row['Time']; ?></td>
                        <td><?php print $row['State']; ?></td>
                        <td><?php print $row['Info']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="detailSlaveStatus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 95%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Master Status</h4>
            </div>
            <div class="modal-body">

                <table class="table table-bordered table-striped js-options-table">
                    <tr>
                        <th>Archivo</th>
                        <th>IO Running</th>
                        <th>SQL Running</th>
                        <th>Ultimo Error</th>
                    </tr>
                    <?php foreach($SlaveStatus as $row): ?>
                    <tr>
                        <td><?php print $row['Master_Log_File']; ?></td>
                        <td><?php print $row['Slave_IO_Running']; ?></td>
                        <td><?php print $row['Slave_SQL_Running']; ?></td>
                        <td><?php print $row['Last_Errno']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>


<?php 
    $mysqliMaster->close();
    $mysqliSlave->close();
}else{  
    require_once('./views/newsloe.php'); 
} 
?>


