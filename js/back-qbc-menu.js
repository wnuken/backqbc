var messageError = new Array();

var ERROR_GENERAL = "Rayos parece que no puedo traer datos";
var ERROR_QUERY = 'No hay documento contable';
var ERROR_ID_CLIENT = 'Debe elegir un Cliente'
messageError['error_general'] = ERROR_GENERAL;
messageError['error_query'] = ERROR_QUERY;
messageError['error_id_client'] = ERROR_ID_CLIENT;

/*$.fn.getAtmMenu = function(params){
    var that = this;
    $.ajax({
        type: "POST",
        url: "./views/" + params.view + ".php",
        dataType: 'html',
        data: params,
        async: true,
        success: function(response) {
            $('div#content').html(response);
        },
        error: function() {
            _isUploading = false;
            var message = {};
            message.status = "error";
            message.cliente = "Rayos parece que no puedo traer datos";

            console.log(message);
            $('div#content', $sellForm).html(message.cliente);
        }
    });
}

$.fn.getProcess = function(params){
    var that = this;
    $('div#loader').css({'display':'block'});
    console.log('loader');
    $.ajax({
        type: "POST",
        url: "./views/preproccess.php",
        dataType: 'html',
        data: params,
        async: true,
        success: function(response) {
            $('div#response').html(response);
            $('div#progress').css({'display':'none'});
            $('button#summit').button('reset');
        },
        error: function() {
            //console.log('da error');
            var message = "Rayos parece que no puedo traer datos";
            $('div#response').html(message);
            $('div#loader').css({'display':'none'});
        }
    });

}*/


$.fn.getFuntions = function(params){
    var $that = $(this);
    $('div#loader').css({'display':'block'});
    $.ajax({
        type: "POST",
        url: params.class,
        dataType: 'html',
        data: params,
        async: true,
        success: function(response) {
            $('div#progress_bar').css({'width':'95%'});
            $('div#progress_bar').attr({'aria-valuenow': 95});
            $('div#progress').fadeOut( "slow");
            $('div#response').fadeIn(3000, function() {
                $('div#response').html(response);
            });
            $('div#response').html(response);
            $('button#summit', $that).button('reset');
        },
        error: function() {
            //console.log('da error');
            var message = "Rayos parece que no puedo traer datos";
            $('div#response').html(message);
            $('div#loader').css({'display':'none'});
        }
    });

}

// Pago Aliado

var $form = $('form#sendpay');
var $formxml = $('form#sendpayxml');
var $bar = $('div#progress_bar');
//var $sendchange = $('ul#sendchange', $form);
var $sendchange = $('ul#sendchange');
//var $sendchange1 = $('ul#sendchange', $formxml);
// var $button_send = $('#button_send');
//var $button_send1 = $('#button_send', $formxml);
var $sendclose = $('form#sendclose');
var myVar = '';

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
    $form.getFuntions({'params':params, 'class':'sendpay'});

    myVar = setInterval(progresbar, 100);
});

$('a', $sendchange).on('click', function(e){
    e.preventDefault();
    $that = $(this);
    var valsend = $that.attr('value-send');
    var $divParent = $that.parents()[2];
    var $button_send = $('#button_send', $divParent);
    $('input#sci_send', $divParent).val(valsend);
    if(valsend == 0){
        $('i', $button_send).removeClass('glyphicon-ok-sign');
        $('i', $button_send).addClass('glyphicon-remove-sign');
        $('span#text_send', $button_send).html(' No Enviar ');
    }else{
        $('i', $button_send).removeClass('glyphicon-remove-sign');
        $('i', $button_send).addClass('glyphicon-ok-sign');
        $('span#text_send', $button_send).html(' Enviar ');
    }
});


/*$('a', $sendchange1).on('click', function(e){
    e.preventDefault();
    $that = $(this);
    var valsend = $that.attr('value-send');
    console.log(valsend);
    $('input#sci_send', $sendchange1).val(valsend);
    if(valsend == 0){
        $('i', $button_send1).removeClass('glyphicon-ok-sign');
        $('i', $button_send1).addClass('glyphicon-remove-sign');
        $('span#text_send', $button_send1).html(' No Enviar ');
    }else{
        $('i', $button_send1).removeClass('glyphicon-remove-sign');
        $('i', $button_send1).addClass('glyphicon-ok-sign');
        $('span#text_send', $button_send1).html(' Enviar ');
    }
});*/

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


/*var editorPay = CodeMirror.fromTextArea(document.getElementById("xml-pay"), {
    lineNumbers: true,
    mode: "application/xml",
    matchBrackets: true,
    styleActiveLine: true,
    lineWrapping: true
});*/

$('button#summit', $formxml).on('click', function(e){
    var $that = $(this);
    $that.button('loading');
    e.preventDefault();
    editorPay.save();
    var params = {
        'file': $('textarea#xml-pay', $formxml).val(),
        'send' : $('input#sci_send', $formxml).val()
    };
    $('div#progress').css({'display':'block'});
    $('div#response').html('');
    $('div#response').css({'display':'none'});
    $formxml.getFuntions({'params':params, 'class':'sendpayxml'});

    myVar = setInterval(progresbar, 100);
});

$('button#summit', $sendclose).on('click', function(e){
    var $that = $(this);
    $that.button('loading');
    e.preventDefault();
    var params = {
        'idcampaign': $('input#campaing_id', $sendclose).val(),
        'pcam': $('input#campaing_tax', $sendclose).val(),
        'send' : $('input#sci_send', $sendclose).val()
    };
    $('div#progress').css({'display':'block'});
    $('div#response').html('');
    $('div#response').css({'display':'none'});
    $sendclose.getFuntions({'params':params, 'class':'closuresend'});

    myVar = setInterval(progresbar, 100);
});
