<?php 
$cant = 0;
if(isset($_REQUEST['cant']))
    $cant = $_REQUEST['cant'];
?>
<nav>
    <ul class="pagination" id="oferselect">
        <?php for($i=1; $i <= $cant; $i++): ?>
        <li id="li<?php print $i; ?>" class="<?php ($i==1)?print 'active':print '' ?>" ><a href="javascript:oferselect(<?php print $i; ?>)"><?php print $i; ?></a></li>
        <?php endfor; ?>
    </ul>
</nav>