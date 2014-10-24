    <div class="div-content">
        <form class="form-horizontal" id="sendpay">
            <fieldset>
            <div class="control-group">
                <label for="campaing_id" class="control-label">ID Campaña</label>
                <div class="controls">
                  <input type="text" placeholder="Escribir id Campaña" id="campaing_id" class="input-xlarge">
                </div>
            </div>
            <div class="control-group">
                <label for="campaing_tax" class="control-label">Porcentaje Campaña</label>
                <div class="controls">
                    <input type="text" placeholder="Porcentaje Campaña" id="campaing_tax" class="input-xlarge">
                </div>
            </div>
            <div class="control-group">
                <label for="sci_send" class="control-label">Enviar al Mediador</label>
                <div class="controls">
                  <select id="sci_send">
				      <option value="0">No</option>
                      <option value="1">Si</option>
                  </select>
                </div>
            </div>
            <div class="form-actions">
                <button class="btn btn-primary" id="summit" type="submit">Procesar</button>
			</div>
            </fieldset>
          </form>
    </div>
<div id="response"></div>

<script type="text/javascript">
    var $form = $('form#sendpay');
	$('button#summit', $form).on('click', function(e){
		e.preventDefault();
		var params = {
			'idcampaign': $('input#campaing_id', $form).val(),
			'pcam': $('input#campaing_tax', $form).val(),
			'send' : $('select#sci_send', $form).val()
		};
		$().getFuntions({'params':params, 'class':'sendpay'});
	});
</script>