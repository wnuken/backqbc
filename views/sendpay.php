<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Envar / Consultar Pago</h3>
            </div>
            <div class="panel-body">
                <form id="sendpay">
                    <fieldset>
                        <div class="form-group">
                            <label for="campaing_id">ID Campaña</label>
                            <input type="text" class="form-control" id="campaing_id" name="campaing_id" placeholder="Id Campaña">
                        </div>
                        <div class="form-group">
                            <label for="campaing_tax">Porcentaje Campaña</label>
                            <input type="text" class="form-control" id="campaing_tax" name="campaing_tax" placeholder="Porcentaje Campaña" value="16">
                        </div>
                        <div class="form-group">
                            <label for="currency">Moneda</label>
                        </div>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="currency" id="option1" autocomplete="off" checked value="COP"> Pesos
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="currency" id="option2" autocomplete="off" value="USD"> Dolares
                            </label>
                        </div> <br /><br />
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
                            <button class="btn btn-danger" id="summit" type="submit">Procesar</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Modificar XML manualmente</h3>
            </div>
            <div class="panel-body">
                <form id="sendpayxml">
                    <fieldset>
                        <div class="form-group">
                            <textarea style="width:100%;height:131px;" placeholder="Agrege XML" id="file" name="file" data-mode="application/xml"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enviar al Mediador</label>
                        </div>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="send" id="send3" autocomplete="off" checked value="0"> No enviar
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="send" id="send4" autocomplete="off" value="1"> Enviar
                            </label>
                        </div>
                        <div class="btn-group pull-right">
                            <button class="btn btn-danger" id="summit" type="submit">Procesar</button>
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