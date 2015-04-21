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
                    <h3 class="panel-title">Newsletter LOE en QBC</h3>
                </div>
                <div class="panel-body">
                    <?php include 'newsletter/generalnews.php'; ?>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 id="ofertitle" class="panel-title">Oferta <span>1</span></h3>
                </div>
                <div class="panel-body">
                    <div class="col-xs-12 col-sm-12 col-md-8 img-thumbnail">
                        <div id="theform">
                            <?php include 'newsletter/form.php'; ?>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="img-thumbnail">
                            <?php include 'newsletter/loeofer.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <div height="600" width="99.6%" id="loe-preview"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="container">
        <div class="col-md-6">
            <canvas id="canvasscream" width="300" height="93" style="background: #ccc; display:none;"></canvas>
            <img id="scream" src="./loe/images/fondotype1.jpg" alt="The Scream" width="300" height="93" style="display:none;">
        </div>
        <div class="col-md-3">
            <canvas id="canvasarrow" width="144" height="37" style="background: #ccc; display:none;"></canvas>
            <img id="imagearrow" src="./loe/images/fondoflecha.jpg" alt="the Arrow" width="144" height="37" style="display:none;">
        </div>
    </div>
</div>

