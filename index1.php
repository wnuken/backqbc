<?php

$var = 'valor';

?>
<html>
    <head>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    </head>
    <body>
        <div class="prueba" id="prueba">
            <h1>Información</h1>
        </div>
    </body>
    <script>
        $('div#prueba').on('click', function(){
            console.log('oo');
        });
    </script>
</html>