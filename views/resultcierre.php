<?php
if(is_array($result)){
?>
<div class="col-md-6">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">XML</h3>
        </div>
        <div class="panel-body">
            <?php
    if(isset($result['XML']))
        print htmlentities($result['XML']);
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
    unset($result['XML']);
    print '<pre>'; print_r($result); print '</pre>';
            ?>
        </div>
    </div>    
</div>

<?php
}else{
    var_dump($result);
}
?>