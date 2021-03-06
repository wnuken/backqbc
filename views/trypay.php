<div class="row">
    <div class="col-md-5">
        <?php if(isset($result)): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Campañas por comisión - <span class="badge"><?php print $result->getNbResults(); ?></span></h3>
            </div>
            <div class="panel-body">

                <ul class="list-group">
                    <?php foreach($result as $campaign): ?>

                    <li class="list-group-item">
                        <span class="badge" data-id="<?php print $campaign->getGroupdealsId(); ?>">Campaña ID: <?php print $campaign->getGroupdealsId(); ?></span>
                        <span class="badge" data-id="<?php print $campaign->getProductId(); ?>">Producto ID: "<?php print $campaign->getProductId(); ?>"</span>
                        <?php print utf8_encode($campaign->getTitleShort()); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <nav class="text-center">
                    <ul id="pagination" class="pagination">
                        <?php if($currentPage == 1){ $liclas = 'class="hide"';}else{ $liclas = '';} ?>
                        <li  <?php print $liclas; ?> id="liprevious">
                            <a href="javascript:void(0)" aria-label="Previous" id="previous" data-ini="1">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>

                        <!--li class="active"><a href="#">1</a></li-->
                        <?php foreach($totalPages as $page): ?>
                        <li <?php if($page == $currentPage){print 'class="active"';} ?>>
                            <a data-num="<?php print $page; ?>" href="javascript:void(0)"><?php print $page; ?></a>
                        </li>
                        <?php if($page == ($currentPage+9)){break;} ?>
                        <?php endforeach; ?>
                        <li id="linext">
                            <a href="javascript:void(0)" aria-label="Next" id="next" data-ini="10" data-end="<?php print $totalForPage; ?>">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <div class="col-md-7">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Información de campaña <span class="badge">ID: XXXX</span></h3>
            </div>
            <div class="panel-body">
            </div>
        </div>
    </div>

</div>