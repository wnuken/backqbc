var messageError = new Array();

var ERROR_GENERAL = "Rayos parece que no puedo traer datos";
var ERROR_QUERY = 'No hay documento contable';
var ERROR_ID_CLIENT = 'Debe elegir un Cliente'
messageError['error_general'] = ERROR_GENERAL;
messageError['error_query'] = ERROR_QUERY;
messageError['error_id_client'] = ERROR_ID_CLIENT;



var $formSendpay = $('form#sendpay');
var $formSendpayXml = $('form#sendpayxml');
var $formChangeId = $('form#change_id');
var $formvfallidas = $("form#vfallidas");
var $FormSendClose = $('form#sendclose');
var $formSendXmlSell = $('form#sendxmlsell');
var $FormSendCompensation = $('form#sendcompensation');
var $bar = $('div#progress_bar');
var $sendchange = $('ul#sendchange');
var $menu = $('ul#menunav');


var currentUrl = window.location.pathname;
urlSplit =currentUrl.split('/');
console.log(urlSplit[2]);

var myVar = '';

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

// Ventas

$('input#summit', $formvfallidas).on('click', function(e){
    var $that = $(this);
    //$that.button('loading');
    e.preventDefault();
    var params = $('input#text').val();
    console.log(params);
    $('div#progress').css({'display':'block'});
    $('div#response').html('');
    $('div#response').css({'display':'none'});
    $formvfallidas.getFuntions({'params':params, 'class':'vfallidas'});
});

$('input#summit', $formChangeId).on('click', function(e){
    e.preventDefault();
    var params = $('textarea#text').val();
    console.log(params);
    $formChangeId.getFuntions({'params':params, 'class':'changeid'});
});

// Pago Aliado

$('button#summit', $formSendpay).on('click', function(e){
    var $that = $(this);
    $that.button('loading');
    e.preventDefault();
    var params = {
        'idcampaign': $('input#campaing_id', $formSendpay).val(),
        'pcam': $('input#campaing_tax', $formSendpay).val(),
        'send' : $('input#sci_send', $formSendpay).val()
    };
    $('div#progress').css({'display':'block'});
    $('div#response').html('');
    $('div#response').css({'display':'none'});
    $formSendpay.getFuntions({'params':params, 'class':'sendpay'});

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

if(typeof($('textarea')[0]) !== 'undefined'){
    var idTextarea = $('textarea').attr('id');
    var editorPay = CodeMirror.fromTextArea(document.getElementById(idTextarea), {
        lineNumbers: true,
        mode: "application/xml",
        matchBrackets: true,
        styleActiveLine: true,
        lineWrapping: true
    });
}

$('button#summit', $formSendpayXml).on('click', function(e){
    var $that = $(this);
    $that.button('loading');
    e.preventDefault();
    editorPay.save();
    var params = {
        'file': $('textarea#xml-pay', $formSendpayXml).val(),
        'send' : $('input#sci_send', $formSendpayXml).val()
    };
    $('div#progress').css({'display':'block'});
    $('div#response').html('');
    $('div#response').css({'display':'none'});
    $formSendpayXml.getFuntions({'params':params, 'class':'sendpayxml'});

    myVar = setInterval(progresbar, 100);
});

$('button#summit', $FormSendClose).on('click', function(e){
    var $that = $(this);
    $that.button('loading');
    e.preventDefault();
    var params = {
        'idcampaign': $('input#campaing_id', $FormSendClose).val(),
        'pcam': $('input#campaing_tax', $FormSendClose).val(),
        'send' : $('input#sci_send', $FormSendClose).val()
    };
    $('div#progress').css({'display':'block'});
    $('div#response').html('');
    $('div#response').css({'display':'none'});
    $FormSendClose.getFuntions({'params':params, 'class':'closuresend'});

    myVar = setInterval(progresbar, 100);
});

$('button#summit', $FormSendCompensation).on('click', function(e){
    var $that = $(this);
    $that.button('loading');
    e.preventDefault();
    var idsCampaigns = $FormSendCompensation.serialize();
    var params = {
        'idcampaign': idsCampaigns,
        'send' : $('input#sci_send', $FormSendCompensation).val()
    };
    $('div#progress').css({'display':'block'});
    $('div#response').html('');
    $('div#response').css({'display':'none'});
    $FormSendCompensation.getFuntions({'params':params, 'class':'conpensationsend'});

    myVar = setInterval(progresbar, 100);
});


$('button#summit', $formSendXmlSell).on('click', function(e){
    var $that = $(this);
    $that.button('loading');
    e.preventDefault();
    editorPay.save();
    var params = {
        'xml' : $('textarea#xmltext', $formSendXmlSell).val()
    };
    $('div#progress').css({'display':'block'});
    $('div#response').html('');
    $('div#response').css({'display':'none'});
    $FormSendCompensation.getFuntions({'params':params, 'class':'sendxmlsell'});

    myVar = setInterval(progresbar, 100);
});





