
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
        <?php include './views/menus/lateral-menu.php'; ?>
        <div class="col-sm-8 col-md-9">
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
                                <button type="button" class="btn btn-qbc btn-xs" data-toggle="modal" data-target="#detailProcessMaster"> Detalle</button>
                                Procesos:
                                <span class="badge"><?php if(isset($ProcessMaster['numberProcess'])) print $ProcessMaster['numberProcess']; ?></span>
                            </li>
                            <li class="list-group-item">
                                <button type="button" class="btn btn-qbc btn-xs" data-toggle="modal" data-target="#detailMasterStatus"> Detalle</button>
                                Master Status:
                                <span class="badge">File: <?php if(isset($MasterStatus[0]['File'])) print $MasterStatus[0]['File']; ?></span>
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
                                <button type="button" class="btn btn-qbc btn-xs" data-toggle="modal" data-target="#detailProcessSlave"> Detalle</button>
                                Procesos:
                                <span class="badge"><?php if(isset($ProcessSlave['numberProcess'])) print $ProcessSlave['numberProcess']; ?></span>
                            </li>
                            <li class="list-group-item">
                                <button type="button" class="btn btn-qbc btn-xs" data-toggle="modal" data-target="#detailSlaveStatus"> Detalle</button>
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


        <div class="col-sm-4 col-md-3">
            <div class="panel panel-default ">
                <div class="panel-heading">
                    <h3 class="panel-title">Total Ventas</h3>
                </div>
                <div class="panel-body">
                 <div id="datepickerHome" class="form-group input-group date">
                    <input type="text" value="<?php print date('Y-m-d') ?>" class="form-control" id="date" name="date">

                    <div class="input-group-btn">
            <button class="btn btn-qbc" type="button"><i class="glyphicon glyphicon-calendar"></i></button>
            
          </div>


                    <!--span class="input-group-addon btn btn-qbc"><i class="glyphicon glyphicon-th"></i></span-->
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

    <div class="col-sm-4 col-md-3">
        
         <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Generar ID Petición</h3>
                </div>
                <div class="panel-body">
                    <div id="getidpetition">
                        <button type="button" class="btn btn-qbc btn-xs" role="button"  data-loading-text="<i class='glyphicon glyphicon-refresh'></i>">
                            <i class="glyphicon glyphicon-random"></i>
                        </button>
                        <span id="newpetition"><?php if(isset($idPetition)) print $idPetition; ?></span>
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

                    <div class="row">
                    <?php foreach($ProcessMaster as $key => $row): 
                    if(is_numeric($key)):
                    ?>
     
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                            <small>ID:</small>
                            <span class="badge max-tam"><?php print $row['Id']; ?></span>
                           </li>

                           <li class="list-group-item">
                            <small>Host:</small>
                            <span class="badge max-tam"><?php print $row['Host']; ?></span>
                           </li>

                           <li class="list-group-item">
                            <small>DB:</small>
                            <span class="badge max-tam"><?php print $row['db']; ?></span>
                           </li>
                           <li class="list-group-item hidden-xs">
                            <small>Command:</small>
                            <span class="badge max-tam"><?php print $row['Command']; ?></span>
                           </li>
                           <li class="list-group-item hidden-xs">
                            <small>Time:</small>
                            <span class="badge max-tam"><?php print $row['Time']; ?></span>
                           </li>
                           <li class="list-group-item hidden-xs">
                            <small>State:</small>
                            <span class="badge max-tam"><?php print $row['State']; ?></span>
                           </li>
                           <li class="list-group-item hidden-xs">
                            <small>Info:</small>
                            <span class="badge max-tam"><?php print $row['Info']; ?></span>
                           </li>

                        </ul>
                    </div>
                    <?php 
                    endif;
                    endforeach; ?>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-qbc" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="detailMasterStatus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Master Status</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                    <?php 
                        if(($MasterStatus !== false)):
                        foreach($MasterStatus as $row): ?>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <ul class="list-group">
                            <li class="list-group-item">
                            <small>File:</small>
                            <span class="badge max-tam"><?php print $row['File']; ?></span>
                           </li>
                           <li class="list-group-item">
                            <small>Position:</small>
                            <span class="badge max-tam"><?php print $row['Position']; ?></span>
                           </li>
                           <li class="list-group-item">
                            <small>Binlog_Do_DB:</small>
                            <span class="badge max-tam"><?php print $row['Binlog_Do_DB']; ?></span>
                           </li>
                           <li class="list-group-item">
                            <small>Binlog_Ignore_DB:</small>
                            <span class="badge max-tam"><?php print $row['Binlog_Ignore_DB']; ?></span>
                           </li>
                           </ul>


                            </div>
                        <?php endforeach; endif; ?>

                    </div>
               </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-qbc" data-dismiss="modal">Cerrar</button>
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

                    <div class="row">
                    <?php foreach($ProcessSlave as $key => $row): 
                    if(is_numeric($key)):
                    ?>
     
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                            <small>ID:</small>
                            <span class="badge max-tam"><?php print $row['Id']; ?></span>
                           </li>

                           <li class="list-group-item">
                            <small>Host:</small>
                            <span class="badge max-tam"><?php print $row['Host']; ?></span>
                           </li>

                           <li class="list-group-item">
                            <small>DB:</small>
                            <span class="badge max-tam"><?php print $row['db']; ?></span>
                           </li>
                           <li class="list-group-item hidden-xs">
                            <small>Command:</small>
                            <span class="badge max-tam"><?php print $row['Command']; ?></span>
                           </li>
                           <li class="list-group-item hidden-xs">
                            <small>Time:</small>
                            <span class="badge max-tam"><?php print $row['Time']; ?></span>
                           </li>
                           <li class="list-group-item hidden-xs">
                            <small>State:</small>
                            <span class="badge max-tam"><?php print $row['State']; ?></span>
                           </li>
                           <li class="list-group-item hidden-xs">
                            <small>Info:</small>
                            <span class="badge max-tam"><?php print $row['Info']; ?></span>
                           </li>

                        </ul>
                    </div>
                    <?php 
                    endif;
                    endforeach; ?>
                    </div>


                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-qbc" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="detailSlaveStatus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Master Status</h4>
                </div>
                <div class="modal-body">


                	<div class="row">
                    <?php 
                        if(($SlaveStatus !== false)):
                        foreach($SlaveStatus as $row): ?>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <ul class="list-group">
                            <li class="list-group-item">
                            <small>Master_Log_File:</small>
                            <span class="badge max-tam"><?php print $row['Master_Log_File']; ?></span>
                           </li>
                           <li class="list-group-item">
                            <small>Slave_IO_Running:</small>
                            <span class="badge max-tam"><?php print $row['Slave_IO_Running']; ?></span>
                           </li>
                           <li class="list-group-item">
                            <small>Slave_SQL_Running:</small>
                            <span class="badge max-tam"><?php print $row['Slave_SQL_Running']; ?></span>
                           </li>
                           <li class="list-group-item">
                            <small>Last_Errno:</small>
                            <span class="badge max-tam"><?php print $row['Last_Errno']; ?></span>
                           </li>
                           </ul>


                            </div>
                        <?php endforeach; endif; ?>
                        </div>
             
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-qbc" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>




