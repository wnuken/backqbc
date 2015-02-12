
<?php
/*
$mysqli = new mysqli("localhost", "magento", "m4g3nt0CEET", "qa.qbc.com");
if ($mysqli->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


/*$client = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379,
]);
$client->set('foo', 'bar');
$value = $client->get('foo');

/*
$pipeline = $client->pipeline();
  $pipeline->flushall();
$responses = $pipeline->execute();
*/
/*$responses = $client->flushall();
print '<pre>';
print_r($responses);
print '</pre>';*/

$text1 = "set @id_camp = 'CampignID';

set @product_id = (select g.product_id from
groupdeals g
where g.groupdeals_id = @id_camp);

select oi.item_id, oi.order_id, o.increment_id, oi.created_at, oi.product_id,
oi.product_type, oi.sku, oi.name, oi.qty_canceled, oi.qty_invoiced, oi.qty_ordered,
oi.qty_refunded, oi.qty_returned, oi.qty_redeemed, oi.qty_to_redeem, o.total_qty_ordered, oi.price,
oi.row_total_incl_tax, oi.consultant, o.state, o.`status`, o.customer_id,
o.customer_email, o.customer_firstname, o.customer_lastname,
o.customer_identification from
sales_flat_order_item oi
join sales_flat_order o
on oi.order_id = o.entity_id
and oi.product_id = @product_id
and oi.qty_redeemed > 0;

drop table if exists temp_order_redemeed;
CREATE TEMPORARY TABLE temp_order_redemeed as select o.increment_id as ids from
sales_flat_order_item oi
join sales_flat_order o
on oi.order_id = o.entity_id
and oi.product_id = @product_id
and oi.qty_redeemed > 0;

select * from
qbc_sci_sell ss
join
qbc_sci_sell_doc sd
on ss.petition_id = sd.petition_id
and ss.order_id in
(
select ids from temp_order_redemeed
);

select sd.document_id
-- ,sd.doc_date, sd.doc_value, ss.order_id, ss.item_id
from
qbc_sci_sell ss
join
qbc_sci_sell_doc sd
on ss.petition_id = sd.petition_id
-- and ss.processed = 0
and ss.order_id in
(
select ids from temp_order_redemeed
);

select * from
qbc_sci_devolution dv
join
qbc_sci_devolution_doc dvd
on dv.petition_id = dvd.petition_id
and dv.coupon in
(
select ids from temp_order_redemeed
);

select * from
qbc_sci_devolution dv
join
qbc_sci_devolution_doc dvd
on dv.petition_id = dvd.petition_id
and dv.campaign_id in
(
@id_camp
);";

$text2 = "select * from
DocumentoContableVenta dv
where
dv.Numero in
(
'1300521335','1300521117'
)
and (dv.InterfaceId = 2 or dv.InterfaceId = 4);


select dv.Numero, count(dv.Numero) as cantidad from
DocumentoContableVenta dv
where
dv.Numero in
(
'1300521335','1300521117'
)
and (dv.InterfaceId = 2 or dv.InterfaceId = 4)
-- and count(dv.Numero) > 1
group by dv.Numero
order by cantidad desc;


select dv.Numero, count(dv.Numero) as cantidad from
DocumentoContableVenta dv
where
dv.Numero in
(
'1300521335','1300521117'
)
and (dv.InterfaceId = 2)
group by dv.Numero;


select dv.Numero, count(dv.Numero) as cantidad from
DocumentoContableVenta dv
where
dv.Numero in
(
'1300521335','1300521117'
)
and (dv.InterfaceId = 4)
group by dv.Numero;

select dv.PadreId from
DocumentoContableVenta dv
where
dv.Numero in
(
'1300521335','1300521117'
)
and (dv.InterfaceId = 4)
group by dv.PadreId;";

?>
<div class="row">
    <div class="col-md-4">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Servidor Base de datos</h3>
            </div>
            <div class="panel-body">
                <?php 
//print $mysqli->host_info . '<br />';
print 'MySQL Server';
                ?>
            </div>
        </div>    
    </div>

    <div class="col-md-4">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Generar ID Petición</h3>
            </div>
            <div class="panel-body">
                <?php 
$actualTime = strtotime('now');
$md5 = md5($actualTime);
print $actualTime . '<br />';
print substr($md5, 0 ,24);
                ?>
            </div>
        </div>    
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h3 class="panel-title">Querys Pago Aliado</h3>
                </a>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <textarea id="xmltext" class="xmltext" data-mode="text/x-mysql"><?php print $text1; ?>
                    </textarea>
                </div>
            </div>
        </div>   
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Querys Pago Aliado</h3>
            </div>
            <div class="panel-body">
                <textarea id="xmltext1" class="xmltext" data-mode="text/x-mysql"><?php print $text2; ?></textarea>
            </div>
        </div>   
    </div>
</div>




