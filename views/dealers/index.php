<div class="container">
	<div class="row">
		<?php include './views/menus/lateral-menu.php'; ?>	
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Procesos Aliados</h3>
				</div>
				<div class="panel-body">
					<div class="col-md-6 ">
					<h3 class="panel-title"><strong>Pagos</strong></h3>
					<br />
						<form id="paysend" class="formsend thumbnail">
							<fieldset>
								<div class="form-group">
									<label for="selectpicker">ID Campaña</label>
									<select class="selectpicker" name="campaing_id" id="campaing_id">
										<?php 
										foreach($result as $ofer){
											print "<option value='".$ofer->getCampaignId()."'>" .$ofer->getCampaignId() . "</option>";
										}
										?>
									</select>

								</div>
								<div class="form-group">
									<label for="campaing_tax">Porcentaje Campaña</label>
									<input type="text" class="form-control" id="campaing_tax" name="campaing_tax" placeholder="Porcentaje Campaña" value="16">
								</div>
								<div class="form-group">
									<label for="currency">Moneda <small>COP / USD</small></label>
									<input type="text" class="form-control" id="currency" name="currency" placeholder="Porcentaje Campaña" value="COP">
								</div>
								<div class="form-group">
									<label for="send">Enviar al Mediador</label>
								</div>
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-qbc active">
										<input type="radio" name="send" id="send1" autocomplete="off" checked value="0"> No enviar
									</label>
									<label class="btn btn-qbc">
										<input type="radio" name="send" id="send2" autocomplete="off" value="1"> Enviar
									</label>

								</div>
								<input type="hidden" id="status" name="status" value="0">
								<div class="btn-group pull-right">
									<button class="btn btn-qbc" id="submit" type="submit">Procesar</button>
								</div>
							</fieldset>
						</form>
					</div>

					<div class="col-md-6">
					<h3 class="panel-title"><strong>Cierres</strong></h3>
					<br />
						<form id="closuresend" class="formsend thumbnail ">
							<fieldset>
								<div class="form-group">
									<label for="exampleInputEmail1">ID Campaña</label>
									<select class="selectpicker" name="campaing_id" id="campaing_id">
										<?php 
										foreach($result as $ofer){
											print "<option value='".$ofer->getCampaignId()."'>" .$ofer->getCampaignId() . "</option>";
										}
										?>
									</select>

								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Porcentaje Campaña</label>
									<input type="text" class="form-control" id="campaing_tax" name="campaing_tax" placeholder="Porcentaje Campaña" value="16">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Enviar al Mediador</label>
								</div>
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-qbc active">
										<input type="radio" name="send" id="send1" autocomplete="off" checked value="0"> No enviar
									</label>
									<label class="btn btn-qbc">
										<input type="radio" name="send" id="send2" autocomplete="off" value="1"> Enviar
									</label>

								</div>
								<input type="hidden" id="status" name="status" value="0">
								<div class="btn-group pull-right">
									<button class="btn btn-qbc" id="submit" type="submit">Procesar</button>
								</div>
							</fieldset>
						</form>
					</div>

				</div>






			</div> <!-- panel -->

			


			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Resultado</h3>
				</div>
				<div class="panel-body">
					<div>
						<div class="progress" id="progress" style="display:none;">
							<div id="progress_bar" class="progress-bar progress-bar-success progress-bar-striped active"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
								<span class="sr-only">Complete...</span>
							</div>
						</div>
					</div>
					<div>
						<div id="response" style="display:none;"></div>
					</div>
				</div>
			</div> <!-- panel -->
		</div> <!-- col-md-9 -->
	</div> <!-- row -->
</div> <!-- container -->