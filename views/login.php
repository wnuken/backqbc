<!DOCTYPE html>
<html lang="es">
    <?php require_once('./views/head.php'); ?>
    <body role="document">
        <div class="container">
            <div class="col-md-4"></div>    

            <div class="col-md-4">

                <div class="panel panel-default">
                    <!--div class="panel-heading">
<h3 class="panel-title">Login Metadocument</h3>
</div-->

                    <div class="panel-body">
                        <div class="text-center">
                            <img src="./img/logo.jpg">
                        </div>
                        <form role="form" class="form-signin" method="POST">
                            <fieldset>
                                <h2 class="form-signin-heading">Log in</h2>
                                <div class="form-group">
                                    <label for="username">Usuario</label>
                                    <input name="username" type="text" autofocus="" required="" placeholder="Usuario" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input name="password" type="password" required="" placeholder="Password" class="form-control">
                                </div>
                                <div class="btn-group pull-right">
                                    <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>

        </div>
    </body>
</html>



