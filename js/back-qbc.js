var messageError = new Array();

var ERROR_GENERAL = "Rayos parece que no puedo traer datos";
var ERROR_QUERY = 'No hay documento contable';
var ERROR_ID_CLIENT = 'Debe elegir un Cliente'
messageError['error_general'] = ERROR_GENERAL;
messageError['error_query'] = ERROR_QUERY;
messageError['error_id_client'] = ERROR_ID_CLIENT;

var submitButton = 'button#submit';

var $bar = $('div#progress_bar');
var $sendchange = $('ul#sendchange');
var $menu = $('ul#menunav');
var $formvdescuento = $("form#vdescuento");
var $formPancarta = $("form#pancartas");
var editorPay = {};

var currentUrl = window.location.pathname;
urlSplit =currentUrl.split('/');
console.log(urlSplit[2]);

$('li', $menu).removeClass('active');

var myVar = '';

$.fn.getFuntions = function(path){
    var $that = $(this);
    var params = $that.serialize();
    $('div#loader').css({'display':'block'});
    $.ajax({
        type: "POST",
        url: path.class,
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
            $(submitButton, $that).button('reset');
        },
        error: function() {
            var message = "Rayos parece que no puedo traer datos";
            $('div#response').html(message);
            $('div#loader').css({'display':'none'});
        }
    });

};

$.fn.getLists = function(params){
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
            $(submitButton, $that).button('reset');
        },
        error: function() {
            //console.log('da error');
            var message = "Rayos parece que no puedo traer datos";
            $('div#response').html(message);
            $('div#loader').css({'display':'none'});
        }
    });

};

$.fn.saveImageBlock = function(params){
    // $that = $(this);
    $.ajax({
        type: "POST",
        url: params.path,
        dataType: 'html',
        data: params,
        async: true,
        success: function(response) {
            console.log(response);
        },
        error: function() {
            var message = "Rayos parece que no puedo traer datos";
            $('div#response').html(message);
            $('div#loader').css({'display':'none'});
        }
    });

};


// Resetar formularios
$.fn.reset = function () {
    $(this).each (function() { this.reset(); });
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


$(submitButton).on('click', function(e){
    e.preventDefault();
    if(!$.isEmptyObject(editorPay)){
        editorPay.save();
    }
    var $that = $(this);
    $that.button('loading');
    var $form = $that.closest('form.formsend');
    var className = $form.attr('id');
    $('div#progress').css({'display':'block'});
    $('div#response').html('');
    $('div#response').css({'display':'none'});
    $form.getFuntions({'class':className});

    if($that.attr('data-news') == '1'){
        $form.UpdateElement();
    }

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

$.each($('textarea'), function(){
    $that = $(this);
    // if(typeof($that) !== 'undefined'){
    var idTextarea = $that.attr('id');
    var textmode = $that.attr('data-mode');
    console.log(idTextarea);
    editorPay = CodeMirror.fromTextArea(document.getElementById(idTextarea), {
        indentWithTabs: true,
        smartIndent: true,
        autofocus: true,
        lineNumbers: true,
        mode: textmode,
        matchBrackets: true,
        styleActiveLine: true,
        lineWrapping: true
    });
    // }
});


$('div#datepicker').datepicker({
    language: "es",
    autoclose: true,
    todayHighlight: true,
    format: "yyyy-mm-dd",
    todayBtn: "linked"
}).on('changeDate', function(e){
    var $that = $('div#datepicker input');
    var date = $that.val();
    console.log(date);
    var $formnewsloe1 = $('form#newsloe1');
    $('input#fecha', $formnewsloe1).val(date);

});




