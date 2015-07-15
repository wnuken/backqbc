
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
/*
*/
?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Menu</h3>
                </div>
                <div class="panel-body">
                    <ul class="nav menu-qbc">
                        <li><a href="./ventas"><i class="glyphicon glyphicon-log-out"></i> Ventas</a></li>
                        <li><a href="./devoluciones"><i class="glyphicon glyphicon-log-in"></i> Devoluciones</a></li>
                        <li><a href="./aliados"><i class="glyphicon glyphicon-briefcase"></i> Aliados</a></li>
                        <li><a href="./creditos"><i class="glyphicon glyphicon-edit"></i> Créditos</a></li>
                        <li><a href="./newsletter"><i class="glyphicon glyphicon-envelope"></i> Newsletter</a></li>
                    </ul>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Generar ID Petición</h3>
                </div>
                <div class="panel-body">
                    <div id="getidpetition">
                        <button type="button" class="btn btn-info btn-xs" role="button"  data-loading-text="<i class='glyphicon glyphicon-refresh'></i>">
                            <i class="glyphicon glyphicon-random"></i>
                        </button>
                        <span id="newpetition"><?php if(isset($idPetition)) print $idPetition; ?></span>
                    </div>

                    
                </div>
            </div>

        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Servidores Base de datos</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <h4>Master</h4>
                        <ul class="list-group">
                            <?php if($mysqliConectionMaster !== false){ ?>
                            <li class="list-group-item"><?php printf('MySQL Server versión:<span class="badge"> %s</span>', substr($mysqliConectionMaster->server_info, 0, 6)); ?></li>
                            <li class="list-group-item"><?php printf('MySQL Client versión:<span class="badge"> %s</span>', $mysqliConectionMaster->client_info); ?></li>
                            <li class="list-group-item"><?php printf('Último error:<span class="badge"> %s</span>', mysqli_error($mysqliConectionMaster)); ?></li>
                            <li class="list-group-item"><?php printf('Estado:<span class="badge"> %s</span>', $mysqliConectionMaster->sqlstate); ?></li>
                            <li class="list-group-item">
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#detailProcessMaster"> Detalle</button>
                                Procesos:
                                <span class="badge"><?php if(isset($ProcessMaster['numberProcess'])) print $ProcessMaster['numberProcess']; ?></span>
                            </li>
                            <li class="list-group-item">
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#detailMasterStatus"> Detalle</button>
                                Master Status:
                                <span class="badge">File: <?php if(isset($ProcessMaster[0]['File'])) print $ProcessMaster[0]['File']; ?></span>
                            </li>
                            <?php }else{ ?>
                            <li class="list-group-item"><?php print('No se puede obtener información del servidor'); ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4>Slave</h4>
                        <ul class="list-group">
                            <?php if($mysqliConectionSlave !== false){ ?>
                            <li class="list-group-item"><?php printf('MySQL Server versión:<span class="badge"> %s</span>', substr($mysqliConectionSlave->server_info, 0, 6)); ?></li>
                            <li class="list-group-item"><?php printf('MySQL Client versión:<span class="badge"> %s</span>', $mysqliConectionSlave->client_info); ?></li>
                            <li class="list-group-item"><?php printf('Último error:<span class="badge"> %s</span>', mysqli_error($mysqliConectionSlave)); ?></li>
                            <li class="list-group-item"><?php printf('Estado:<span class="badge"> %s</span>', $mysqliConectionSlave->sqlstate); ?></li>
                            <li class="list-group-item">
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#detailProcessSlave"> Detalle</button>
                                Procesos:
                                <span class="badge"><?php if(isset($ProcessSlave['numberProcess'])) print $ProcessSlave['numberProcess']; ?></span>
                            </li>
                            <li class="list-group-item">
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#detailSlaveStatus"> Detalle</button>
                                Slave Status:
                                <span class="badge"><?php if(isset($SlaveStatus[0]['Master_Log_File'])) print $SlaveStatus[0]['Master_Log_File']; ?></span>
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
        </div> <!-- col-md-9 -->


        <div class="col-md-3">
            <div class="panel panel-default ">
                <div class="panel-heading">
                    <h3 class="panel-title">Total Ventas</h3>
                </div>
                <div class="panel-body">
                 <div id="datepickerHome" class="form-group input-group date">
                    <input type="text" value="<?php print date('Y-m-d') ?>" class="form-control" id="date" name="date">

                    <div class="input-group-btn">
            <button class="btn btn-info" type="button"><i class="glyphicon glyphicon-calendar"></i></button>
            
          </div>


                    <!--span class="input-group-addon btn btn-info"><i class="glyphicon glyphicon-th"></i></span-->
                </div>
                <div id="sellbydate">
                    <?php 
                    if(isset($TotalSell))
                        print $TotalSell;
                    ?>
                </div>
            </div>
        </div>
    </div>


</div> <!-- row -->
<div class="row">
    <div class="col-md-3">


    </div>
    <div class="col-md-9"></div>
</div>


</div>

<?php if($mysqliConectionMaster !== false): ?>
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

<?php if($mysqliConectionSlave !== false): ?>
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




