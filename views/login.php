<!DOCTYPE html>
<html lang="es">
    <?php require_once('./views/head.php'); ?>
    <body role="document">
        <div class="container">
      <form role="form" class="form-signin" method="POST">
        <h2 class="form-signin-heading">Log in</h2>
        <input name="username" type="text" autofocus="" required="" placeholder="Usuario" class="form-control">
        <input name="password" type="password" required="" placeholder="Password" class="form-control">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Recordarme
        </label>
        <button type="submit" class="btn btn-lg btn-primary btn-block">Ingresar</button>
      </form>
    </div>
    </body>
</html>



