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
                            <label for="exampleInputEmail1">ID Campaña</label>
                            <input type="text" class="form-control" id="campaing_id" placeholder="Id Campaña">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Porcentaje Campaña</label>
                            <input type="text" class="form-control" id="campaing_tax" placeholder="Porcentaje Campaña" value="16">
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">Enviar al Mediador</label>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" id="button_send">
                                <i class="glyphicon glyphicon-remove-sign"></i><span id="text_send"> Enviar al Mediador </span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" id='sendchange'>
                                <li><a href="javascript:void(0);" value-send="0">No</a></li>
                                <li><a href="javascript:void(0);" value-send="1">Si</a></li>
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
    <div class="col-md-4">
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

<script type="text/javascript">
    var $form = $('form#sendpay');
    var myVar = '';
    var $bar = $('div#progress_bar');
    var $sendchange = $('ul#sendchange', $form);
    var $button_send = $('#button_send', $form);
    $('button#summit', $form).on('click', function(e){
        var $that = $(this);
        $that.button('loading');
        e.preventDefault();
        var params = {
            'idcampaign': $('input#campaing_id', $form).val(),
            'pcam': $('input#campaing_tax', $form).val(),
            'send' : $('input#sci_send', $form).val()
        };
        $('div#progress').css({'display':'block'});
        $('div#response').html('');
        $('div#response').css({'display':'none'});
        $().getFuntions({'params':params, 'class':'sendpay'});

        myVar = setInterval(progresbar, 100);
    });

    $('a', $sendchange).on('click', function(e){
        e.preventDefault();
        $that = $(this);
        var valsend = $that.attr('value-send');
        console.log(valsend);
        $('input#sci_send', $sendchange).val(valsend);
        if(valsend == 0){
            $('i', $button_send).removeClass('glyphicon-ok-sign');
            $('i', $button_send).addClass('glyphicon-remove-sign');
            $('span#text_send', $button_send).html(' No ');
        }else{
            $('i', $button_send).removeClass('glyphicon-remove-sign');
            $('i', $button_send).addClass('glyphicon-ok-sign');
            $('span#text_send', $button_send).html(' Si ');
        }
    });

    function progresbar(){
        var invar = $bar.attr('aria-valuenow');
        invar = parseInt(invar);
        var porcent = invar + 1;
        $bar.attr('aria-valuenow', porcent);
        $bar.css({'width':porcent + '%'});
        if(invar == 100){
            $bar.attr('aria-valuenow', '0');
            $bar.css({'width':'0%'});
            clearInterval(myVar);
        }
    }


</script>