<div class="row"> 
    <div class="col-md-4"></div>
    <div class="text-center col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Enviar peticion de venta fallida</h3>
            </div>
            <div class="panel-body">
                <form id="vfallidas" class="formsend">
                    <fieldset>
                        <div class="form-group">
                            <label for="id">ID Pedido</label>
                            <input placeholder="Pedido a procesar" id="id_pedido" name="id" type="text" class="form-control">
                            <input id="one" name="one" type="hidden" value="1">
                        </div>
                        <div class="btn-group pull-right">
                            <button class="btn btn-danger" id="submit" type="submit">Procesar</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
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
    <div class="col-md-12">
        <div id="response" style="display:none;"></div>
    </div>
</div>