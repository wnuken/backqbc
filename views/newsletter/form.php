<div class="formpositions">
    <form id="newsloe1" class="formsend">
        <fieldset>
            <div class="form-group">
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-primary  active">
                        <input name="type" id="type1a" autocomplete="off" checked value="0" class="product_change" type="radio"> Multiprecio
                    </label>
                    <label class="btn btn-primary">
                        <input name="type" id="type1b" autocomplete="off" value="1" class="product_change" type="radio"> Descuento
                    </label>
                    <label class="btn btn-primary ">
                        <input name="type" id="type1c" autocomplete="off" value="2" class="product_change" type="radio"> Imágen
                    </label>
                </div>
                <div class="btn-group pull-right" data-toggle="buttons">
                    <label class="btn btn-primary active" for="title">
                        <input class="form-control" id="active1" name="active" autocomplete="off" checked="" value="1" type="radio">
                        Activa
                    </label>
                    <label class="btn btn-primary" for="title">
                        <input class="form-control" id="active2" name="active" autocomplete="off" value="0" type="radio">
                        Inactiva
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="title">Título</label>
                <input class="form-control" id="title" name="title" placeholder="Título" type="text">
            </div>
            <div class="form-group">
                <label for="url">URL</label>
                <input class="form-control" id="url" name="url" placeholder="URL" type="text">
            </div>
            <div class="form-group">
                <label for="image">Imágen</label>
                <input class="form-control" id="image" name="image" placeholder="Imágen" type="text">
            </div>
            <div id="information_box">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="retaila" name="retaila" placeholder="Retailer">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="valuea" name="valuea" placeholder="Valor">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="urla" name="urla" placeholder="URL">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="retailb" name="retailb" placeholder="Retailer">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="valueb" name="valueb" placeholder="Valor">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="urlb" name="urlb" placeholder="URL">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="retailc" name="retailc" placeholder="Retailer">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="valuec" name="valuec" placeholder="Valor">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="urlc" name="urlc" placeholder="URL">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="retaild" name="retaild" placeholder="Retailer">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="valued" name="valued" placeholder="Valor">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="urld" name="urld" placeholder="URL">
                    </div>
                </div>
            </div>
            <input id="position" name="position" value="1" type="hidden">
            <input id="fecha" name="fecha" value="<?php print date('Y-m-d'); ?>" type="hidden">
            <div class="btn-group pull-right">
                <button class="btn btn-danger" id="submit" type="submit" data-news="1">Guardar</button>
            </div>
        </fieldset>
    </form>
</div>