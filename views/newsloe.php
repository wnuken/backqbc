<?php

$backpath = trim($_SERVER["DOCUMENT_URI"], 'index.php');
$urlPreview = "http://" . $_SERVER["HTTP_HOST"] . $backpath . "loe";

// $contentJson = file_get_contents("http://" . $_SERVER["HTTP_HOST"] . $backpath . "loe/loeproducts.json");
$contentJson = file_get_contents('./loe/loeproducts.json', FILE_USE_INCLUDE_PATH);

if($contentJson !== false){
    $content = json_decode($contentJson,true);
}else{
    // $content = json_decode($contentJson,true);
}

?>
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseNews" aria-expanded="true" aria-controls="collapseOne">
                        <h3 class="panel-title">NEWSLETTER LOE QBC</h3>
                    </a>
                </div>
                <div id="collapseNews" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#previewNews">
                                Preview...
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h3 class="panel-title">Oferta 1</h3>
                    </a>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body" style="min-height: 531px;">
                        <div class="formpositions" ofer-position="1">
                            <form id="newsloe1" class="formsend">
                                <fieldset>
                                    <div class="form-group">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary <?php ($content['dataInfo']['upper'][0]['type'] == 0)? print 'active': print ''; ?>">
                                                <input type="radio" name="type" id="type1a" autocomplete="off" <?php ($content['dataInfo']['upper'][0]['type'] == 0)? print 'checked': print ''; ?> value="0" class="product_change"> Multiprecio
                                            </label>
                                            <label class="btn btn-primary <?php ($content['dataInfo']['upper'][0]['type'] == 1)? print 'active': print ''; ?>">
                                                <input type="radio" name="type" id="type1b" autocomplete="off" <?php ($content['dataInfo']['upper'][0]['type'] == 1)? print 'checked': print ''; ?> value="1" class="product_change"> Descuento
                                            </label>
                                            <label class="btn btn-primary <?php ($content['dataInfo']['upper'][0]['type'] == 2)? print 'active': print ''; ?>">
                                                <input type="radio" name="type" id="type1c" autocomplete="off" <?php ($content['dataInfo']['upper'][0]['type'] == 2)? print 'checked': print ''; ?> value="2" class="product_change"> Imágen
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Título</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Título">
                                    </div>
                                    <div class="form-group">
                                        <label for="url">URL</label>
                                        <input type="text" class="form-control" id="url" name="url" placeholder="URL">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Imágen</label>
                                        <input type="text" class="form-control" id="image" name="image" placeholder="Imágen">
                                    </div>
                                    <div id="information_box">
                                        <?php
if($content['dataInfo']['upper'][0]['type'] == 0){
    include 'loeform0.php';
}
else if($content['dataInfo']['upper'][0]['type'] == 1){
    include 'loeform1.php';
}
                                        ?>
                                    </div>
                                    <input type="hidden" id="position" name="position" value="1">
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-danger" id="submit" type="submit">Guardar</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOnePreview" aria-expanded="true" aria-controls="collapseOne">
                        <h3 class="panel-title">Preview Oferta 1</h3>
                    </a>
                </div>
                <div id="collapseOnePreview" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body" style="min-height: 531px;">

                        <?php
if($content['dataInfo']['upper'][0]['type'] == 0){
    $position = array('upper', '0');
    include 'loetype0.php';
}
else if($content['dataInfo']['upper'][0]['type'] == 1){
    $position = array('upper', '0');
    include 'loetype1.php';
}
else if($content['dataInfo']['upper'][0]['type'] == 2){
    $position = array('upper', '0');
    include 'loetype2.php';
}
                        ?>


                        <div>
                            <div class="progress" id="progress" style="display:none;">
                                <div id="progress_bar" class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                    <span class="sr-only">Complete...</span>
                                </div>
                            </div>
                            <div id="response" style="display:none;"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                        <h3 class="panel-title">Oferta 2</h3>
                    </a>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body" style="min-height: 531px;">
                        <div class="formpositions" ofer-position="2">
                            <form id="newsloe2" class="formsend">
                                <fieldset>
                                    <div class="form-group">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary <?php ($content['dataInfo']['upper'][1]['type'] == 0)? print 'active': print ''; ?>">
                                                <input type="radio" name="type" id="type1a" autocomplete="off" <?php ($content['dataInfo']['upper'][1]['type'] == 0)? print 'checked': print ''; ?> value="0" class="product_change"> Multiprecio
                                            </label>
                                            <label class="btn btn-primary <?php ($content['dataInfo']['upper'][1]['type'] == 1)? print 'active': print ''; ?>">
                                                <input type="radio" name="type" id="type1b" autocomplete="off" <?php ($content['dataInfo']['upper'][1]['type'] == 1)? print 'checked': print ''; ?> value="1" class="product_change"> Descuento
                                            </label>
                                            <label class="btn btn-primary <?php ($content['dataInfo']['upper'][1]['type'] == 2)? print 'active': print ''; ?>">
                                                <input type="radio" name="type" id="type1c" autocomplete="off" <?php ($content['dataInfo']['upper'][1]['type'] == 2)? print 'checked': print ''; ?> value="2" class="product_change"> Imágen
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Título</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Título">
                                    </div>
                                    <div class="form-group">
                                        <label for="url">URL</label>
                                        <input type="text" class="form-control" id="url" name="url" placeholder="URL">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Imágen</label>
                                        <input type="text" class="form-control" id="image" name="image" placeholder="Imágen">
                                    </div>
                                    <div id="information_box">
                                        <?php
if($content['dataInfo']['upper'][1]['type'] == 0){
    include 'loeform0.php';
}
else if($content['dataInfo']['upper'][1]['type'] == 1){
    include 'loeform1.php';
}
                                        ?>
                                    </div>
                                    <input type="hidden" id="position" name="position" value="2">
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-danger" id="submit" type="submit">Guardar</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwoPreview" aria-expanded="true" aria-controls="collapseOne">
                        <h3 class="panel-title">Preview Oferta 2</h3>
                    </a>
                </div>
                <div id="collapseTwoPreview" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body" style="min-height: 531px;">

                        <?php
if($content['dataInfo']['upper'][1]['type'] == 0){
    $position = array('upper', '1');
    include 'loetype0.php';
}
else if($content['dataInfo']['upper'][1]['type'] == 1){
    $position = array('upper', '1');
    include 'loetype1.php';
}
else if($content['dataInfo']['upper'][1]['type'] == 2){
    $position = array('upper', '1');
    include 'loetype2.php';
}
                        ?>


                        <div>
                            <div class="progress" id="progress" style="display:none;">
                                <div id="progress_bar" class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                    <span class="sr-only">Complete...</span>
                                </div>
                            </div>
                            <div id="response" style="display:none;"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                        <h3 class="panel-title">Oferta 3</h3>
                    </a>
                </div>
                <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body" style="min-height: 531px;">
                        <div class="formpositions" ofer-position="3">
                            <form id="newsloe3" class="formsend">
                                <fieldset>
                                    <div class="form-group">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary <?php ($content['dataInfo']['lower'][0]['type'] == 0)? print 'active': print ''; ?>">
                                                <input type="radio" name="type" id="type1a" autocomplete="off" <?php ($content['dataInfo']['lower'][0]['type'] == 0)? print 'checked': print ''; ?> value="0" class="product_change"> Multiprecio
                                            </label>
                                            <label class="btn btn-primary <?php ($content['dataInfo']['lower'][0]['type'] == 1)? print 'active': print ''; ?>">
                                                <input type="radio" name="type" id="type1b" autocomplete="off" <?php ($content['dataInfo']['lower'][0]['type'] == 1)? print 'checked': print ''; ?> value="1" class="product_change"> Descuento
                                            </label>
                                            <label class="btn btn-primary <?php ($content['dataInfo']['lower'][0]['type'] == 2)? print 'active': print ''; ?>">
                                                <input type="radio" name="type" id="type1c" autocomplete="off" <?php ($content['dataInfo']['lower'][0]['type'] == 2)? print 'checked': print ''; ?> value="2" class="product_change"> Imágen
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Título</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Título">
                                    </div>
                                    <div class="form-group">
                                        <label for="url">URL</label>
                                        <input type="text" class="form-control" id="url" name="url" placeholder="URL">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Imágen</label>
                                        <input type="text" class="form-control" id="image" name="image" placeholder="Imágen">
                                    </div>
                                    <div id="information_box">
                                        <?php
if($content['dataInfo']['lower'][0]['type'] == 0){
    include 'loeform0.php';
}
else if($content['dataInfo']['lower'][0]['type'] == 1){
    include 'loeform1.php';
}
                                        ?>
                                    </div>
                                    <input type="hidden" id="position" name="position" value="3">
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-danger" id="submit" type="submit">Guardar</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThreePreview" aria-expanded="true" aria-controls="collapseOne">
                        <h3 class="panel-title">Preview Oferta 3</h3>
                    </a>
                </div>
                <div id="collapseThreePreview" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body" style="min-height: 531px;">

                        <?php
if($content['dataInfo']['lower'][0]['type'] == 0){
    $position = array('lower', '0');
    include 'loetype0.php';
}
else if($content['dataInfo']['lower'][0]['type'] == 1){
    $position = array('lower', '0');
    include 'loetype1.php';
}
else if($content['dataInfo']['lower'][0]['type'] == 2){
    $position = array('lower', '0');
    include 'loetype2.php';
}
                        ?>


                        <div>
                            <div class="progress" id="progress" style="display:none;">
                                <div id="progress_bar" class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                    <span class="sr-only">Complete...</span>
                                </div>
                            </div>
                            <div id="response" style="display:none;"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                        <h3 class="panel-title">Oferta 4</h3>
                    </a>
                </div>
                <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body" style="min-height: 531px;">
                        <div class="formpositions" ofer-position="4">
                            <form id="newsloe4" class="formsend">
                                <fieldset>
                                    <div class="form-group">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary <?php ($content['dataInfo']['lower'][1]['type'] == 0)? print 'active': print ''; ?>">
                                                <input type="radio" name="type" id="type1a" autocomplete="off" <?php ($content['dataInfo']['lower'][1]['type'] == 0)? print 'checked': print ''; ?> value="0" class="product_change"> Multiprecio
                                            </label>
                                            <label class="btn btn-primary <?php ($content['dataInfo']['lower'][1]['type'] == 1)? print 'active': print ''; ?>">
                                                <input type="radio" name="type" id="type1b" autocomplete="off" <?php ($content['dataInfo']['lower'][1]['type'] == 1)? print 'checked': print ''; ?> value="1" class="product_change"> Descuento
                                            </label>
                                            <label class="btn btn-primary <?php ($content['dataInfo']['lower'][1]['type'] == 2)? print 'active': print ''; ?>">
                                                <input type="radio" name="type" id="type1c" autocomplete="off" <?php ($content['dataInfo']['lower'][1]['type'] == 2)? print 'checked': print ''; ?> value="2" class="product_change"> Imágen
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Título</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Título">
                                    </div>
                                    <div class="form-group">
                                        <label for="url">URL</label>
                                        <input type="text" class="form-control" id="url" name="url" placeholder="URL">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Imágen</label>
                                        <input type="text" class="form-control" id="image" name="image" placeholder="Imágen">
                                    </div>
                                    <div id="information_box">
                                        <?php
if($content['dataInfo']['lower'][1]['type'] == 0){
    include 'loeform0.php';
}
else if($content['dataInfo']['lower'][1]['type'] == 1){
    include 'loeform1.php';
}
                                        ?>
                                    </div>
                                    <input type="hidden" id="position" name="position" value="4">
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-danger" id="submit" type="submit">Guardar</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFourPreview" aria-expanded="true" aria-controls="collapseOne">
                        <h3 class="panel-title">Preview Oferta 4</h3>
                    </a>
                </div>
                <div id="collapseFourPreview" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body" style="min-height: 531px;">

                        <?php
if($content['dataInfo']['lower'][1]['type'] == 0){
    $position = array('lower', '1');
    include 'loetype0.php';
}
else if($content['dataInfo']['lower'][1]['type'] == 1){
    $position = array('lower', '1');
    include 'loetype1.php';
}
else if($content['dataInfo']['lower'][1]['type'] == 2){
    $position = array('lower', '1');
    include 'loetype2.php';
}
                        ?>


                        <div>
                            <div class="progress" id="progress" style="display:none;">
                                <div id="progress_bar" class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                    <span class="sr-only">Complete...</span>
                                </div>
                            </div>
                            <div id="response" style="display:none;"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
    </div>
</div>

<div class="modal fade" id="previewNews" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-url="<?php print $urlPreview; ?>">
  <div class="modal-dialog" style="width:710px">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Preview</h4>
      </div>
      <div class="modal-body">
        <iframe src="<?php print $urlPreview; ?>"  height="600" width="99.6%" style="zoom:0.60" frameborder="0"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--div class="row">
<div class="container">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">
<div class="btn-group pull-right">
<button class="btn btn-primary" id="previewloe" type="submit" style="margin-top: -8px;" data-url="<?php print $urlPreview; ?>">Actualizar</button>
</div>
<h3 class="panel-title">Preview </h3>                
</div>
<div class="panel-body" id="previewloe">
<?php // include 'preview.php'
?>
</div>
</div>   
</div>
</div>
</div-->
