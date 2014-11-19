<?php
// Include 
///require_once '../classes.php';
?>
<div class="row"> 
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Enviar Venta</h3>
            </div>
            <div class="panel-body">
                <h2>Reenviar peticion fallida</h2>
                <form id="vfallidas" name="vfallidas" method='POST'>
                    <input placeholder="Pedido a procesar" id="text" name="text" type="text" >
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