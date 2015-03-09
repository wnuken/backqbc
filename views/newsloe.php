<?php
$urlPreview = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] . "loe"
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h3 class="panel-title">Edición Newsletter LOE</h3>
                </a>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3" ofer-position="1">
                            <form id="newsloe1" class="formsend">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="type">Oferta 1</label>
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary active">
                                                <input type="radio" name="type" id="type1a" autocomplete="off" checked value="0" class="product_change"> Multiprecio
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="type" id="type1b" autocomplete="off" value="1" class="product_change"> Descuento
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
                                        <div class="col-md-4">
                                            <div class="form-group"><label>Retailer</label><input class="form-control" id="retaila" name="retaila" placeholder="Retailer" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><label>Valor</label><input class="form-control" id="valuea" name="valuea" placeholder="Valor" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><label>URL</label><input class="form-control" id="urla" name="urla" placeholder="URL" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><input class="form-control" id="retailb" name="retailb" placeholder="Retailer" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><input class="form-control" id="valueb" name="valueb" placeholder="Valor" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><input class="form-control" id="urlb" name="urlb" placeholder="URL" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><input class="form-control" id="retailc" name="retailc" placeholder="Retailer" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><input class="form-control" id="valuec" name="valuec" placeholder="Valor" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><input class="form-control" id="urlc" name="urlc" placeholder="URL" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><input class="form-control" id="retaild" name="retaild" placeholder="Retailer" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><input class="form-control" id="valued" name="valued" placeholder="Valor" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><input class="form-control" id="urld" name="urld" placeholder="URL" type="text"></div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="position" name="position" value="1">
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-danger" id="submit" type="submit">Guardar</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="col-md-3" ofer-position="2">
                            <form id="newsloe2" class="formsend">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="currency">Oferta 2</label>
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary active">
                                                <input type="radio" name="type" id="type2a" autocomplete="off" checked value="0" class="product_change"> Multiprecio
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="type" id="type2b" autocomplete="off" value="1" class="product_change"> Descuento
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
                                        <div class="col-md-4">
                                            <div class="form-group"><label>Retailer</label><input class="form-control" id="retaila" name="retaila" placeholder="Retailer" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><label>Valor</label><input class="form-control" id="valuea" name="valuea" placeholder="Valor" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><label>URL</label><input class="form-control" id="urla" name="urla" placeholder="URL" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><input class="form-control" id="retailb" name="retailb" placeholder="Retailer" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><input class="form-control" id="valueb" name="valueb" placeholder="Valor" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><input class="form-control" id="urlb" name="urlb" placeholder="URL" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><input class="form-control" id="retailc" name="retailc" placeholder="Retailer" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><input class="form-control" id="valuec" name="valuec" placeholder="Valor" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><input class="form-control" id="urlc" name="urlc" placeholder="URL" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><input class="form-control" id="retaild" name="retaild" placeholder="Retailer" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><input class="form-control" id="valued" name="valued" placeholder="Valor" type="text"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><input class="form-control" id="urld" name="urld" placeholder="URL" type="text"></div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="position" name="position" value="2">
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-danger" id="submit" type="submit">Guardar</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>

                        <div class="col-md-3" ofer-position="3">
                            <form id="newsloe3" class="formsend">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="currency">Oferta 3</label>
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary">
                                                <input type="radio" name="type" id="type1a" autocomplete="off" value="0" class="product_change"> Multiprecio
                                            </label>
                                            <label class="btn btn-primary active">
                                                <input type="radio" name="type" id="type1b" autocomplete="off" checked value="1" class="product_change"> Descuento
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Porcentaje</label><input class="form-control" id="percent" name="percent" placeholder="Porcentaje" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Retailer</label><input class="form-control" id="retail" name="retail" placeholder="Retailer" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Valor</label><input class="form-control" id="value" name="value" placeholder="Valor" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="position" name="position" value="3">
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-danger" id="submit" type="submit">Guardar</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="col-md-3" ofer-position="4">
                            <form id="newsloe4" class="formsend">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="currency">Oferta 4</label>
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary">
                                                <input type="radio" name="type" id="type1a" autocomplete="off" value="0" class="product_change"> Multiprecio
                                            </label>
                                            <label class="btn btn-primary active">
                                                <input type="radio" name="type" id="type1b" autocomplete="off" checked value="1" class="product_change"> Descuento
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Porcentaje</label><input class="form-control" id="percent" name="percent" placeholder="Porcentaje" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Retailer</label><input class="form-control" id="retail" name="retail" placeholder="Retailer" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Valor</label><input class="form-control" id="value" name="value" placeholder="Valor" type="text">
                                            </div>
                                        </div>
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
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="btn-group pull-right">
                    <button class="btn btn-primary" id="previewloe" type="submit" style="margin-top: -8px;" data-url="<?php print $urlPreview; ?>">Actualizar</button>
                </div>
                <h3 class="panel-title">Preview </h3>                
            </div>
            <div class="panel-body" id="previewloe">
                <?php include 'preview.php' ?>
            </div>
        </div>   
    </div>
    <div class="col-md-6">
        <div class="progress" id="progress" style="display:none;">
            <div id="progress_bar" class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                <span class="sr-only">Complete...</span>
            </div>
        </div>
        <div id="response" style="display:none;"></div>
    </div>

</div>

