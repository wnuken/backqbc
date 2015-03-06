<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Envar / Consultar Cierre</h3>
            </div>
            <div class="panel-body">
                <form id="conpensationsend" class="formsend">
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
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="send" id="send1" autocomplete="off" checked value="0"> No enviar
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="send" id="send2" autocomplete="off" value="1"> Enviar
                            </label>
                        </div>
                        <div class="btn-group pull-right">
                            <button class="btn btn-danger" id="submit" type="submit">Procesar</button>
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