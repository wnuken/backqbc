<div class="row"> 
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Enviar Venta</h3>
            </div>
            <div class="panel-body">
                <h2>Enviar peticion descuento</h2>
                <form id="vdescuento" name="vdescuento" method='POST'>
                    <div class="form-group">
                        <label for="text">Pedido a procesar</label>
                        <input class="form-control" placeholder="Pedido a procesar" id="text" name="text" type="text" >
                    </div>
                    <div class="form-group">
                        <label for="button">Enviar al Mediador</label>
                    </div>
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

                    <input class="btn btn-primary" id="summit" type='submit' value='Procesar'>
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