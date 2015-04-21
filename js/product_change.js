var $productChange = $('input.product_change');
var $preview = $('button#previewloe');
var $blockpreview = $('div#blockpreview');
var $cantOfer  = $('select#contofertas');
var $oferselect = $('ul#oferselect');


$.fn.getPreview = function(params){
    var $that = $(this);
    $('div#loader').css({'display':'block'});
    $.ajax({
        type: "POST",
        url: params.class,
        dataType: 'html',
        data: params,
        async: true,
        success: function(response) {
            $('div#loe-preview', $that).html(response);
        },
        error: function() {
            var message = "Rayos parece que no puedo traer datos";
            $('div#response').html(message);
            $('div#loader').css({'display':'none'});
        }
    });

};

$productChange.on('change', function(){
    var $that = $(this);
    var value = $that.val();
    var $content = $that.closest('.formpositions');
    if(value == 0){
        $('div#information_box', $content).postUrl('./views/newsletter/formbox1.php');
        $blockpreview.postUrl('./views/newsletter/loetype' + value + '.php');
    }else if(value == 1){
        $('div#information_box', $content).postUrl('./views/newsletter/formbox2.php');
        $blockpreview.postUrl('./views/newsletter/loetype' + value + '.php');
    }else if(value == 2){
        $('div#information_box', $content).postUrl('./views/newsletter/formbox3.php');
        $('div#information_box', $content).html('');
        $blockpreview.postUrl('./views/newsletter/loetype' + value + '.php');
    }
});

$preview.on('click', function(){
    var params = {};
    var $that = $(this);
    var url = $that.attr('data-url');
    console.log(url);
    $.ajax({
        type: "POST",
        url: url,
        dataType: 'html',
        data: params,
        async: true,
        success: function(response) {
            $('div#previewloe').fadeOut( "fast");
            $('div#previewloe').html(response);           
            $('div#previewloe').fadeIn(3000, function() {

            });
        },
        error: function() {
            var message = "Rayos parece que no puedo traer datos";
            $('div#previewloe').html(message);
        }
    });

});


$('div#previewNews').on('shown.bs.modal',function(){
    $that = $(this);
    var $datePicker = $('div#datepicker');
    var datePreview = $('input#date', $datePicker).val();
    var path = 'loe-preview';
    var params = {class: path, date:datePreview};
    $that.getPreview(params);

});

$cantOfer.on('change', function(){
    var $that = $(this);
    var cant = $that.val();
    var url = '/';
    console.log(cant);
    $.post('./views/newsletter/numberofer.php?cant=' + cant, { url: url }, function(data) {
        $('div#ofercant').html(data);
        $oferselect = $('ul#oferselect');
    });
});

/*$('div#datepicker input').on('change', function(){
    var $that = $(this);
    var date = $that.val();
    $('form#newsloe1 input[name="fecha"]').attr('value', date);
});*/

function oferselect(data){
    var ProductDate = $('div#datepicker input').val();
    var $formNewsloe1 = $('form#newsloe1');
    $('li', $oferselect).removeClass('active');
    $('li#li' + data, $oferselect).addClass('active');
    $('h3#ofertitle span').html(data);
    $formNewsloe1.fadeOut( "slow", function(){
        var $that = $(this);
        $blockpreview.postUrl('./views/newsletter/loetype0.php');
        $('div#information_box', $that).postUrl('./views/newsletter/formbox1.php');
        var $label1 = $('input#type1a', $that).closest('label');
        $label1.addClass('active');
        var $label2 = $('input#type1b', $that).closest('label');
        $label2.removeClass('active');
        var $label3 = $('input#type1c', $that).closest('label');
        $label3.removeClass('active');
    });

    $formNewsloe1.fadeIn("slow", function(){
        var $that = $(this);
        $that.reset();
    });

    $('input#position', $formNewsloe1).val(data);
    $('input#fecha', $formNewsloe1).val(ProductDate);

}

$.fn.postUrl = function(params){
    var $that = $(this);
    var url = "/";
    $.post(params, { url: url }, function(data) {
        $that.html(data);
    });
};


$.fn.UpdateElement = function(){
    var $that = $(this);
    var params = $that.serializeArray();

    if(params[0].value == 0){
        var title = params[2].value;
        var url = params[3].value;
        var image = params[4].value;
        var retaila = params[5].value;
        var valuea = params[6].value;
        var urla = params[7].value;
        var retailb = params[8].value;
        var valueb = params[9].value;
        var urlb = params[10].value;
        var retailc = params[11].value;
        var valuec = params[12].value;
        var urlc = params[13].value;
        var retaild = params[14].value;
        var valued = params[15].value;
        var urld = params[16].value;
        var position = params[17].value;

        $('#type0title', $blockpreview).html(title);
        $('a#type0url', $blockpreview).attr('href',url);
        $('img#type0image', $blockpreview).attr('src',image);

        $('a#type0retailer1', $blockpreview).html(retaila);
        $('a#type0value1', $blockpreview).html(valuea);
        $('a#type0value1', $blockpreview).attr('href',urla);
        $('a#type0retailer1', $blockpreview).attr('href',urla);

        $('a#type0retailer2', $blockpreview).html(retailb);
        $('a#type0value2', $blockpreview).html(valueb);
        $('a#type0value2', $blockpreview).attr('href',urlb);
        $('a#type0retailer2', $blockpreview).attr('href',urlb);

        $('a#type0retailer3', $blockpreview).html(retailc);
        $('a#type0value3', $blockpreview).html(valuec);
        $('a#type0value3', $blockpreview).attr('href',urlc);
        $('a#type0retailer3', $blockpreview).attr('href',urlc);

        $('a#type0retailer4', $blockpreview).html(retaild);
        $('a#type0value4', $blockpreview).html(valued);
        $('a#type0value4', $blockpreview).attr('href',urld);
        $('a#type0retailer4', $blockpreview).attr('href',urld);
    }

    if(params[0].value == 1){

        var title = params[2].value;
        var url = params[3].value;
        var image = params[4].value;
        var percent = params[5].value;
        var retailer = params[6].value;
        var value = params[7].value;
        var valbton = params[8].value;
        var position = params[9].value;
        var fecha = params[10].value;

        var canvasScream = document.getElementById("canvasscream");
        var ctxScream = canvasScream.getContext("2d");
        var imgreal = document.getElementById("scream");
        ctxScream.drawImage(imgreal,0,0);
        ctxScream.textAlign = 'center';
        ctxScream.font = "40px Arial";
        ctxScream.fillStyle = 'white';
        ctxScream.fillText(percent,60,63);

        ctxScream.font = "20px Arial";
        ctxScream.fillStyle = 'black';

        ctxScream.fillText(retailer,210,30);
        ctxScream.fillText(value,210,80);

        var imgScream = canvasScream.toDataURL("image/png");

        $('#type1title', $blockpreview).html(title);
        $('a#type1url', $blockpreview).attr('href',url);
        $('img#type1image1', $blockpreview).attr('src',image);
        $('img#type1image2', $blockpreview).attr('src',imgScream);

        var canvasArrow = document.getElementById("canvasarrow");
        var ctxArrow = canvasArrow.getContext("2d");
        var imageArrow = document.getElementById("imagearrow");
        var textArrow = "El texto va aqui";
        ctxArrow.drawImage(imageArrow,0,0);
        ctxArrow.textAlign = 'center';
        ctxArrow.font = "Bold 16px Arial";
        ctxArrow.fillStyle = 'white';
        ctxArrow.fillText(valbton,70,23);

        var imgArrow = canvasArrow.toDataURL("image/png");

        $('img#imagearrow', $blockpreview).attr('src',imgArrow);

        $().saveImageBlock({
            'path':'saveimageblock',
            'imgscream':imgScream,
            'position':position,
            'fecha':fecha,
            'imgarrow':imgArrow,
            'namearrow':valbton
        });
    }

    if(params[0].value == 2){

        var title = params[2].value;
        var url = params[3].value;
        var image = params[4].value;
        var valbton = params[5].value;
        var position = params[6].value;
        
        var canvasArrow = document.getElementById("canvasarrow");
        var ctxArrow = canvasArrow.getContext("2d");
        var imageArrow = document.getElementById("imagearrow");
        var textArrow = "El texto va aqui";
        ctxArrow.drawImage(imageArrow,0,0);
        ctxArrow.textAlign = 'center';
        ctxArrow.font = "Bold 16px Arial";
        ctxArrow.fillStyle = 'white';
        ctxArrow.fillText(valbton,70,23);

        var imgArrow = canvasArrow.toDataURL("image/png");
        

        $('#type2title', $blockpreview).html(title);
        $('a#type2url', $blockpreview).attr('href',url);
        $('img#type1image', $blockpreview).attr('src',image);
        $('img#imagearrow', $blockpreview).attr('src',imgArrow);


    }


};