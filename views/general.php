<!DOCTYPE html>
<html lang="es">
    <?php require_once('./views/head.php'); ?>
    <body role="document">
        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <?php require_once('./views/menu.php'); ?>
                <div class="container-fluid" id="content" role="main">
                    <?php getRoute()->run(); ?>
                </div>
            </div>

        </div>
    </body>
    <script>
        $('div#prueba').on('click', function(){
            console.log('oo');
        });
    </script>
</html>