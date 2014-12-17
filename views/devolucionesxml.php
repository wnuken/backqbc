<div class="row">
    <div class="col-md-12">
        <h2>Devoluciones XML</h2>
        <form id="sendxmldev" name="sendxmldev" method='POST'>
            <div class="form-group">
                <textarea placeholder="Pedido a procesar" id="xmltext" class="xmltext" name="xmltext"></textarea>
            </div>
            <div class="btn-group pull-right">
                <button class="btn btn-danger" id="summit" type="submit">Procesar</button>
            </div>
        </form>
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
