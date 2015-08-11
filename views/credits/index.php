<div class="container">
	<div class="row">
		<?php include './views/menus/lateral-menu.php'; ?>	
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Procesar créditos en SCMP</h3>
				</div>
				<div class="panel-body">



					<div class="col-md-12 thumbnail">
						<div class="">
							<form id="creditsend" name="creditsend" method='POST' class="formsend">
								<div class="form-group">
									<label for="text">Documento Cŕedito</label>
									<input placeholder="Documento Cŕedito" id="listcredits" name="listcredits" type="text" class="form-control">
								</div>
								<div class="form-group">
									<label for="text">Saldo Cŕedito</label>
									<input id="saltcredits" name="saltcredits" type="text" class="form-control" value="0">
								</div>
								<div class="form-group">
									<label for="text">Documentos Ventas</label>
									<input placeholder="Documentos Ventas" id="listsells" name="listsells" type="text" class="form-control">
								</div>
								<div class="form-group">
									<label for="text">Fechas Ventas</label>
									<input placeholder="Fechas Ventas" id="listdates" name="listdates" type="text" class="form-control">
								</div>
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-qbc active">
										<input type="radio" name="send" id="send1" autocomplete="off" checked value="0"><i class="glyphicon glyphicon-remove"></i> No enviar
									</label>
									<label class="btn btn-qbc">
										<input type="radio" name="send" id="send2" autocomplete="off" value="1"><i class="glyphicon glyphicon-ok"></i> Enviar
									</label>
								</div>  
								<div class="btn-group pull-right">
									<button class="btn btn-qbc" id="submit" type="submit">Procesar</button>
								</div>
							</form>
						</div>
					</div>


				</div> <!-- panel -->
			</div>





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