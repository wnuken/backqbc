var $productChange = $('input.product_change');

var $preview = $('button#previewloe');

$productChange.on('change', function(){
    var $that = $(this);
    var value = $that.val();
    var $content = $that.closest('.formpositions');
    var position = $content.attr('ofer-position');
    console.log(position);

    var box1 = '<div class="col-md-4"><div class="form-group"><input type="text" class="form-control" id="retaila" name="retaila" placeholder="Retailer"></div></div>'+
        '<div class="col-md-4"><div class="form-group"><input type="text" class="form-control" id="valuea" name="valuea" placeholder="Valor"></div></div>'+
        '<div class="col-md-4"><div class="form-group"><input type="text" class="form-control" id="urla" name="urla" placeholder="URL"></div></div>'+
        '<div class="col-md-4"><div class="form-group"><input type="text" class="form-control" id="retailb" name="retailb" placeholder="Retailer"></div></div>'+
        '<div class="col-md-4"><div class="form-group"><input type="text" class="form-control" id="valueb" name="valueb" placeholder="Valor"></div></div>'+
        '<div class="col-md-4"><div class="form-group"><input type="text" class="form-control" id="urlb" name="urlb" placeholder="URL"></div></div>'+
        '<div class="col-md-4"><div class="form-group"><input type="text" class="form-control" id="retailc" name="retailc" placeholder="Retailer"></div></div>'+
        '<div class="col-md-4"><div class="form-group"><input type="text" class="form-control" id="valuec" name="valuec" placeholder="Valor"></div></div>'+
        '<div class="col-md-4"><div class="form-group"><input type="text" class="form-control" id="urlc" name="urlc" placeholder="URL"></div></div>'+
        '<div class="col-md-4"><div class="form-group"><input type="text" class="form-control" id="retaild" name="retaild" placeholder="Retailer"></div></div>'+
        '<div class="col-md-4"><div class="form-group"><input type="text" class="form-control" id="valued" name="valued" placeholder="Valor"></div></div>'+
        '<div class="col-md-4"><div class="form-group"><input type="text" class="form-control" id="urld" name="urld" placeholder="URL"></div></div>';

    var box2 = '<div class="col-md-4">'+
        '<div class="form-group">'+
        '<label>Porcentaje</label><input type="text" class="form-control" id="percent" name="percent" placeholder="Porcentaje">'+
        '</div></div>'+
        '<div class="col-md-4">'+
        '<div class="form-group">'+
        '<label>Retailer</label><input type="text" class="form-control" id="retail" name="retail" placeholder="Retailer">'+
        '</div>'+
        '</div>'+
        '<div class="col-md-4">'+
        '<div class="form-group">'+
        '<label>Valor</label><input type="text" class="form-control" id="value" name="value" placeholder="Valor">'+
        '</div>'+
        '</div>';

    var url = '/';

    if(value == 0){
        $('div#information_box', $content).html(box1);
        $.post('./views/newsletter/loetype0.php', { url: url }, function(data) {
            $('div#previewpos' + position).html(data);
        });
    }else if(value == 1){
        $('div#information_box', $content).html(box2);
        $.post('./views/newsletter/loetype1.php', { url: url }, function(data) {
            $('div#previewpos' + position).html(data);
        });
    }else if(value == 2){
        $.post('./views/newsletter/loetype2.php', { url: url }, function(data) {
            $('div#previewpos' + position).html(data);
        });
        $('div#information_box', $content).html('');
    }
});

$preview.on('click', function(){

    var params = {};
    var $that = $(this);
    var url = $that.attr('data-url');

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


$('#previewNews').on('shown.bs.modal',function(){      //correct here use 'shown.bs.modal' event which comes in bootstrap3
    $that = $(this);
    var url = $that.attr('data-url');
    $that.find('iframe').attr('src',url);
});

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

        $blockpreview = $('div#previewpos' + position);

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
        var position = params[8].value;

        var canvas = document.getElementById("mycanvas");
        var ctx = canvas.getContext("2d");
        var imgreal = document.getElementById("scream");
        ctx.drawImage(imgreal,0,0);
        ctx.textAlign = 'center';
        ctx.font = "40px Arial";
        ctx.fillStyle = 'white';
        ctx.fillText(percent,60,63);

        ctx.font = "20px Arial";
        ctx.fillStyle = 'black';

        ctx.fillText(retailer,210,30);
        ctx.fillText(value,210,80);

        var img = canvas.toDataURL("image/png");

        $blockpreview = $('div#previewpos' + position);

        $('#type1title', $blockpreview).html(title);
        $('a#type1url', $blockpreview).attr('href',url);
        $('img#type1image1', $blockpreview).attr('src',image);
        $('img#type1image2', $blockpreview).attr('src',img);

        $().saveImageBlock({
            'path':'saveimageblock',
            'data':img,
            'position':position
        });
    }

    if(params[0].value == 2){

        var title = params[2].value;
        var url = params[3].value;
        var image = params[4].value;
        var position = params[5].value;
        
        $blockpreview = $('div#previewpos' + position);

        $('#type2title', $blockpreview).html(title);
        $('a#type2url', $blockpreview).attr('href',url);
        $('img#type1image', $blockpreview).attr('src',image);
        
        
    }
};