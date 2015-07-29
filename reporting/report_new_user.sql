BEGIN

DECLARE sqlVar text;
DECLARE sqlfiltrosFecha text;
DECLARE sqlFecha text;
DECLARE estatusFiltro int;


set sqlFecha = date(now());

call varchar_entity_update;

SET sqlVar = concat('sselect  ce.email as "Correo cliente", fo.customer_email as "Correo Pedido", pa.email_comprador as "Correo POL", 
concat(vd.nombre, ' ', vd.apellido) as "Nombre cliente", concat(fo.customer_firstname, ' ', fo.customer_lastname) as "Nombre Pedido", 
pa.tarjeta_habiente as "Nombre Tarjeta Habiente", fo.`status` as "Estado", pa.banco_pse as "Banco PSE", fo.increment_id as "Pedido", 
fo.grand_total as "Valor", pa.descripcion as "Descripción", pa.ip as "IP Cliente", pa.numero_visible as "Número Tarjeta", 
pa.franquicia as Franquicia, pa.direccion_cobro as "Dirección de cobro", pa.direccion_envio as "Dirección Envio", pa.ciudad_cobro as "Ciudad",
vd.telefono as "Teléfono Cliente", pa.telefono as "Teléfono POL 1", pa.telefono_oficina as "Teléfono POL 2" 
from customer_entity ce join customer_entity_varchar_data vd on ce.entity_id = vd.entity_id
join sales_flat_order fo on ce.entity_id = fo.customer_id
and fo.`status` not in (
"STATUS_CANCELED_BY_USER",
"STATUS_CANCELED_BY_POL"
)
join pagosonline pa on fo.increment_id = pa.order_id');

set estatusFiltro = 0;
if fechaInit is not null then
	SET sqlfiltrosFecha = CONCAT('where date(ce.created_at) = ', date(fechaInit));
	if fechaFin is not null then
		SET sqlfiltrosFecha = CONCAT('where date(ce.created_at) BETWEEN ', date(fechaInit), ' and ', date(fechaFin));
	END if;
    SET sqlVar = CONCAT( sqlVar ,' ', sqlfiltrosFecha); 
    set estatusFiltro = 1;
END if;


if estatusFiltro = 1 then
SET @s = sqlVar;

PREPARE stmt FROM @s;
EXECUTE stmt;
END if;

END



select  ce.email as "Correo cliente", fo.customer_email as "Correo Pedido", pa.email_comprador as "Correo POL", 
concat(vd.nombre, ' ', vd.apellido) as 'Nombre cliente', concat(fo.customer_firstname, ' ', fo.customer_lastname) as "Nombre Pedido", 
pa.tarjeta_habiente as "Nombre Tarjeta Habiente", fo.`status` as "Estado", pa.banco_pse as "Banco PSE", fo.increment_id as "Pedido", 
fo.grand_total as "Valor", pa.descripcion as "Descripción", pa.ip as "IP Cliente", pa.numero_visible as "Número Tarjeta", 
pa.franquicia as Franquicia, pa.direccion_cobro as "Dirección de cobro", pa.direccion_envio as "Dirección Envio", pa.ciudad_cobro as "Ciudad",
vd.telefono as "Teléfono Cliente", pa.telefono as "Teléfono POL 1", pa.telefono_oficina as "Teléfono POL 2" 
from customer_entity ce join customer_entity_varchar_data vd on ce.entity_id = vd.entity_id
join sales_flat_order fo on ce.entity_id = fo.customer_id
and fo.`status` not in (
"STATUS_CANCELED_BY_USER",
"STATUS_CANCELED_BY_POL"
)
join pagosonline pa on fo.increment_id = pa.order_id
where date(ce.created_at) BETWEEN "2015-07-27" and "2015-07-27";