<?php
if(($resultJson)){

    $resultArray = json_decode($resultJson, true);

?>
<div class="col-md-6">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Resultado</h3>
        </div>
        <div class="panel-body">
            <?php
    print '<p>Resultado: ' . $resultArray["message"] . '</p>';
    print '<p>Pedido: ' . $resultArray["pedido"] . '</p>';

    foreach($resultArray["peticion"] as $key => $peticion){
        print '<p>Id Peticion: ' . $peticion . '</p>';
    }
            ?>
        </div>
    </div>    
</div>
<div class="col-md-6">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Resultado</h3>
        </div>
        <div class="panel-body">
            <?php 
    var_dump($resultArray);
            ?>
        </div>
    </div>    
</div>

<?php
}else{
    var_dump($fin);
}
?>