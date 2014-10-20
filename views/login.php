<div class="container-fluid">
	<div class="row-fluid">
		<div class="row-fluid">
			<div class="span12 center login-header">
				<h2>Administracion QBC</h2>
			</div><!--/span-->
		</div><!--/row-->
		<div class="row-fluid">
			<div class="well span5 center login-box">
				<div class="alert alert-info">
					Ingrese con su nombre de usuario y password.
				</div>
				<form class="form-horizontal" action="./" method="POST">
					<fieldset>
						<div class="input-prepend" title="user" data-rel="tooltip">
							<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" placeholder="user" />
						</div>
						<div class="clearfix"></div>
						<div class="input-prepend" title="password" data-rel="tooltip">
							<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" placeholder="password" />
						</div>
						<div class="clearfix"></div>
						<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Recordar cuenta</label>
						</div>
						<div class="clearfix"></div>
						<p class="center span5">
							<button type="submit" class="btn btn-primary">Login</button>
						</p>
					</fieldset>
				</form>
			</div><!--/span-->
		</div><!--/row-->
