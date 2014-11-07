<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Envar / Consultar Cierre</h3>
            </div>
            <div class="panel-body">
                <form id="sendcompensation">
                    <fieldset>
                        <!--div class="form-group">
<label for="exampleInputEmail1">ID Campaña</label>
<input type="text" class="form-control" id="campaing_id" placeholder="Id Campaña">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Porcentaje Campaña</label>
<input type="text" class="form-control" id="campaing_tax" placeholder="Porcentaje Campaña" value="16">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Enviar al Mediador</label>
</div-->
                        <div>
                            <?php foreach($result as $key => $id): ?>
                            <div class="form-group col-md-2">
                                <span class="input-group-addon">
                                    <input class="multicheck" type="checkbox" id="<?php print $id; ?>"  name="<?php print $key; ?>" value="<?php print $id; ?>" >
                                </span>
                                <div class="input-group-addon">
                                    <label for="<?php print $id; ?>">Campaña id <?php print $id; ?></label>
                                </div>
                            </div>

                            <?php endforeach;  ?>
                        </div>
                        <div class="row"></div>
                        <div class="btn-group" id="send">
                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" id="button_send">
                                <i class="glyphicon glyphicon-remove-sign"></i><span id="text_send"> No enviar </span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" id='sendchange'>
                                <li><a href="javascript:void(0);" value-send="0">No Enviar</a></li>
                                <li><a href="javascript:void(0);" value-send="1">Enviar</a></li>
                                <input type="hidden" id="sci_send" value="0">
                            </ul>
                        </div>
                        <div class="btn-group pull-right">
                            <button class="btn btn-default" id="summit" type="submit">Procesar</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row"> 
    <div class="col-md-12">
        <div class="progress" id="progress" style="display:none;">
            <div id="progress_bar" class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                <span class="sr-only">Complete...</span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div id="response" style="display:none;"></div>

</div>