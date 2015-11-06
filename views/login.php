<!DOCTYPE html>
<html lang="es">
<?php require_once('./views/head.php'); ?>
<body role="document">
    <div class="container">
        <div class="col-md-4"></div>    
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <img src="./img/logo.jpg">
                    </div>
                    <form role="form" class="form-signin" method="POST">
                        <fieldset>
                            <div class="form-group">
                                <label for="username">Usuario</label>
                                <input name="username" type="text" autofocus="" required="" placeholder="Usuario" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="password" type="password" required="" placeholder="Password" class="form-control">
                            </div>
                            <div class="text-center">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-qbc btn-block">Ingresar</button>
                            </div>
                            </div>
                        </fieldset>
                    </form>
                    <?php if(isset($validation['validate']) && $validation['validate'] === false): ?>
                        <div class="alert alert-danger">
                            <h4>No se pudo validar el usuario, intente nuevamente por favor</h4>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>
</html>



