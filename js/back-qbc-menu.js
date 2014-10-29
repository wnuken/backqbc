var messageError = new Array();

var ERROR_GENERAL = "Rayos parece que no puedo traer datos";
var ERROR_QUERY = 'No hay documento contable';
var ERROR_ID_CLIENT = 'Debe elegir un Cliente'
messageError['error_general'] = ERROR_GENERAL;
messageError['error_query'] = ERROR_QUERY;
messageError['error_id_client'] = ERROR_ID_CLIENT;

$.fn.getAtmMenu = function(params){
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

}


$.fn.getFuntions = function(params){
	var that = this;
	$('div#loader').css({'display':'block'});
	$.ajax({
		type: "POST",
		url: params.class,
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

}