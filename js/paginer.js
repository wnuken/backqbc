var $pagination = $("ul#pagination");


$('a#next', $pagination).on('click', function(){
    var $fThat = $(this);
    var dataIni = parseInt($fThat.attr('data-ini'));
    var dataEnd = parseInt($fThat.attr('data-end'));
    $('a#previous', $pagination).attr('data-ini', 1);
    $('li#liprevious', $pagination).removeClass('hide');
    $('a', $pagination).each(function(i){
        var $that = $(this);
        var dataNum = $that.attr('data-num');
        if(isNaN(dataNum) === false && dataIni < dataEnd){
            var realNum = parseInt(dataNum);
            var numNew = realNum + 1;
            $that.attr('data-num', numNew);
            $that.html(numNew);
            $fThat.attr('data-ini', numNew);
            if(dataIni == (dataEnd - 1)){
                $('li#linext', $pagination).addClass('hide');
            }
        }
    });

});

$('a#previous', $pagination).on('click', function(){
    var $fThat = $(this);
    var dataIni = $fThat.attr('data-ini');
    $('li#linext', $pagination).removeClass('hide');
    $('a', $pagination).each(function(i){
        var $that = $(this);
        var dataNum = $that.attr('data-num');
        if(isNaN(dataNum) === false && dataIni > 0){
            var realNum = parseInt(dataNum);
            var numNew = realNum - 1;
            $that.attr('data-num', numNew);
            $that.html(numNew);
            if(numNew == 1){
                $fThat.attr('data-ini', 0);
                $('li#liprevious', $pagination).addClass('hide');
            }
            $('a#next', $pagination).attr('data-ini', numNew);
        }
    });

});




