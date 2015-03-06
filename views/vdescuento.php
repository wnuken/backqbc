<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Enviar Venta</h3>
            </div>
            <div class="panel-body">
                <h2>Enviar peticion descuento</h2>
                <form id="sendselldiscount" class="formsend">
                    <div class="form-group">
                        <label for="text">Pedido a procesar</label>
                        <input class="form-control" placeholder="Pedido a procesar" id="text" name="id" type="text" >
                        <input type="hidden" id="one" name="one" value="1">
                    </div>
                    <div class="form-group">
                        <label for="send">Enviar al Mediador</label>
                    </div>                        
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