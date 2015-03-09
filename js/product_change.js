var $productChange = $('input.product_change');

var $preview = $('button#previewloe');

$productChange.on('change', function(){
    var $that = $(this);
    var value = $that.val();
    var $content = $that.closest('.col-md-3');
    var position = $content.attr('ofer-position');
    console.log(position);

    var box1 = '<div class="col-md-4"><div class="form-group"><label>Retailer</label><input type="text" class="form-control" id="retaila" name="retaila" placeholder="Retailer"></div></div>'+
        '<div class="col-md-4"><div class="form-group"><label>Valor</label><input type="text" class="form-control" id="valuea" name="valuea" placeholder="Valor"></div></div>'+
        '<div class="col-md-4"><div class="form-group"><label>URL</label><input type="text" class="form-control" id="urla" name="urla" placeholder="URL"></div></div>'+
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

    if(value == 0){
        $('div#information_box', $content).html(box1);
    }else{
        $('div#information_box', $content).html(box2);
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