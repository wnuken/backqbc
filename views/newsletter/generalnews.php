<div class="col-md-4">
    <form id="generalnews">
        <fieldset>
            <label for="date">Fecha</label>
            <div class="form-group input-group date" id="datepicker">

                <input type="text" type="text" name="date" id="date" class="form-control" value="<?php print date('Y-m-d'); ?>">
                <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
            </div>
            <div class="form-group">
                <label for="ofertas">Cantidad de Ofertas</label>
                <select class="selectpicker" name="contofertas" id="contofertas">
                    <option value="2">2 Ofertas</option>
                    <option value="4">4 Ofertas</option>
                    <option value="6">6 Ofertas</option>
                    <option value="8">8 Ofertas</option>
                    <option value="10">10 Ofertas</option>
                    <option value="12">12 Ofertas</option>
                    <option value="14">14 Ofertas</option>
                    <option value="16">16 Ofertas</option>
                    <option value="18">18 Ofertas</option>
                    <option value="20">20 Ofertas</option>
                </select>


                <!--input type="text" type="text" name="contofertas" id="contofertas" class="form-control" value=""-->
            </div>
        </fieldset>
    </form>
</div>
<div class="col-md-8">
    <h3>Para recargar el Preview antes oprima en Windows => CRTL + R; en Mac => CMD + R</h3>
    
    <div class="btn-group pull-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#previewNews">
            Preview...
        </button>
    </div>

    <div id="ofercant">
        <nav>
            <ul class="pagination" id="oferselect">
                <li id="li1" class="active"><a class="munber" href="javascript:oferselect(1)">1</a></li>
                <li id="li2" ><a class="munber" href="javascript:oferselect(2)">2</a></li>
                <li id="li3" ><a class="munber" href="javascript:oferselect(3)">3</a></li>
                <li id="li4" ><a class="munber" href="javascript:oferselect(4)">4</a></li>
            </ul>
        </nav>
    </div>


    <div class="progress" id="progress" style="display:none;">
        <div id="progress_bar" class="progress-bar progress-bar-striped active"  role="progressbar" 
             aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
            <span class="sr-only">Complete...</span>
        </div>
    </div>
    <div id="response" style="display:none;"></div>




</div>