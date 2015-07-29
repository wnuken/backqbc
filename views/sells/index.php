<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php include './views/menus/lateral-menu.php'; ?>
			
		</div> <!-- col-md-3 -->
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Procesar ventas en SCMP</h3>
				</div>
				<div class="panel-body">
		


					<div class="col-md-12 thumbnail">
					<div class="">
                    <form id="sendxmlsell" name="sendxmlsell" method='POST' class="formsend">
                    <div class="form-group">
								<label for="xmltext">Enviar XML </label>
							</div>
                        <div class="form-group">
                            <textarea placeholder="Pedido a procesar" id="xmltext" class="xmltext" name="xmltext" data-mode="application/xml"></textarea>
                        </div>
                        <div class="btn-group pull-right">
                            <button class="btn btn-qbc" id="submit" type="submit">Procesar</button>
                        </div>
                    </form>
                    </div>
                </div>

                <div class="col-md-6">
					 <div class="thumbnail">
						<form id="vfallidas" class="formsend">
							<fieldset>
								<div class="form-group">
									<label for="id">Pedido Proceso Magento</label>
									<input placeholder="Pedido a procesar" id="id_pedido" name="id" type="text" class="form-control">
									<input id="one" name="one" type="hidden" value="1">
								</div>
								<div class="btn-group pull-right">
									<button class="btn btn-qbc" id="submit" type="submit">Procesar</button>
								</div>
							</fieldset>
						</form>
						</div>
					</div>
					<div class="col-md-6">
					<div class="thumbnail">
						<form id="sendselldiscount" class="formsend img-rounded">
							<div class="form-group">
								<label for="text">Pedido PAID/Descuento/FAIL</label>
								<input class="form-control" placeholder="Pedido a procesar" id="text" name="id" type="text" >
								<input type="hidden" id="one" name="one" value="1">
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