<?php



/**
 * This class defines the structure of the 'pagosonline' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.atmadmin.map
 */
class PagosonlineTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.PagosonlineTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('pagosonline');
        $this->setPhpName('Pagosonline');
        $this->setClassname('Pagosonline');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('pagosonline_id', 'PagosonlineId', 'INTEGER', true, 10, null);
        $this->addColumn('order_id', 'OrderId', 'INTEGER', false, 10, null);
        $this->addColumn('estado_pol', 'EstadoPol', 'INTEGER', false, 10, null);
        $this->addColumn('riesgo', 'Riesgo', 'INTEGER', false, 10, null);
        $this->addColumn('codigo_respuesta_pol', 'CodigoRespuestaPol', 'INTEGER', false, 10, null);
        $this->addColumn('ref_pol', 'RefPol', 'INTEGER', false, 10, null);
        $this->addColumn('extra_uno', 'ExtraUno', 'VARCHAR', false, 255, null);
        $this->addColumn('extra_dos', 'ExtraDos', 'VARCHAR', false, 255, null);
        $this->addColumn('medio_pago', 'MedioPago', 'INTEGER', false, 10, null);
        $this->addColumn('tipo_medio_pago', 'TipoMedioPago', 'VARCHAR', false, 2, null);
        $this->addColumn('cuotas', 'Cuotas', 'INTEGER', false, 10, null);
        $this->addColumn('valor', 'Valor', 'DECIMAL', false, 14, null);
        $this->addColumn('iva', 'Iva', 'DECIMAL', false, 14, null);
        $this->addColumn('valor_adicional', 'ValorAdicional', 'DECIMAL', false, 14, null);
        $this->addColumn('fecha_transaccion', 'FechaTransaccion', 'TIMESTAMP', false, null, null);
        $this->addColumn('cus', 'Cus', 'INTEGER', false, 10, null);
        $this->addColumn('banco_pse', 'BancoPse', 'VARCHAR', false, 25, null);
        $this->addColumn('transaccion_id', 'TransaccionId', 'INTEGER', false, 10, null);
        $this->addColumn('usuario_id', 'UsuarioId', 'INTEGER', false, 10, null);
        $this->addColumn('banco_id', 'BancoId', 'INTEGER', false, 10, null);
        $this->addColumn('medio_pago_id', 'MedioPagoId', 'INTEGER', false, 10, null);
        $this->addColumn('comision_pol', 'ComisionPol', 'VARCHAR', false, 64, null);
        $this->addColumn('estado_transaccion', 'EstadoTransaccion', 'VARCHAR', false, 32, null);
        $this->addColumn('transaccion_banco_id', 'TransaccionBancoId', 'INTEGER', false, 10, null);
        $this->addColumn('codigo_autorizacion', 'CodigoAutorizacion', 'VARCHAR', false, 255, null);
        $this->addColumn('email_comprador', 'EmailComprador', 'VARCHAR', false, 255, null);
        $this->addColumn('nickname_comprador', 'NicknameComprador', 'VARCHAR', false, 255, null);
        $this->addColumn('nickname_vendedor', 'NicknameVendedor', 'VARCHAR', false, 255, null);
        $this->addColumn('descripcion', 'Descripcion', 'VARCHAR', false, 255, null);
        $this->addColumn('intentos', 'Intentos', 'INTEGER', false, 10, null);
        $this->addColumn('ciclo_pse', 'CicloPse', 'VARCHAR', false, 64, null);
        $this->addColumn('fecha', 'Fecha', 'TIMESTAMP', false, null, null);
        $this->addColumn('moneda', 'Moneda', 'VARCHAR', false, 3, null);
        $this->addColumn('mensaje_respuesta_pol', 'MensajeRespuestaPol', 'VARCHAR', false, 64, null);
        $this->addColumn('mensaje_error_banco', 'MensajeErrorBanco', 'VARCHAR', false, 128, null);
        $this->addColumn('codigo_error_banco', 'CodigoErrorBanco', 'VARCHAR', false, 64, null);
        $this->addColumn('tasa_cambio', 'TasaCambio', 'DECIMAL', false, 14, null);
        $this->addColumn('ip', 'Ip', 'VARCHAR', false, 32, null);
        $this->addColumn('numero_cliente', 'NumeroCliente', 'INTEGER', false, 10, null);
        $this->addColumn('pago_recurrente', 'PagoRecurrente', 'INTEGER', false, 10, null);
        $this->addColumn('numero_visible', 'NumeroVisible', 'VARCHAR', false, 16, null);
        $this->addColumn('tarjeta_habiente', 'TarjetaHabiente', 'VARCHAR', false, 50, null);
        $this->addColumn('franquicia', 'Franquicia', 'VARCHAR', false, 64, null);
        $this->addColumn('direccion_cobro', 'DireccionCobro', 'VARCHAR', false, 255, null);
        $this->addColumn('ciudad_cobro', 'CiudadCobro', 'VARCHAR', false, 25, null);
        $this->addColumn('direccion_envio', 'DireccionEnvio', 'VARCHAR', false, 255, null);
        $this->addColumn('ciudad_envio', 'CiudadEnvio', 'VARCHAR', false, 25, null);
        $this->addColumn('telefono', 'Telefono', 'VARCHAR', false, 50, null);
        $this->addColumn('telefono_oficina', 'TelefonoOficina', 'VARCHAR', false, 50, null);
        $this->addColumn('pais_envio', 'PaisEnvio', 'VARCHAR', false, 2, null);
        $this->addColumn('pais_cobro', 'PaisCobro', 'VARCHAR', false, 2, null);
        $this->addColumn('pse_referencia_uno', 'PseReferenciaUno', 'VARCHAR', false, 128, null);
        $this->addColumn('pse_referencia_dos', 'PseReferenciaDos', 'VARCHAR', false, 128, null);
        $this->addColumn('pse_referencia_tres', 'PseReferenciaTres', 'VARCHAR', false, 128, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PagosonlineTableMap
