<?php


/**
 * Base static class for performing query and update operations on the 'pagosonline' table.
 *
 *
 *
 * @package propel.generator.atmadmin.om
 */
abstract class BasePagosonlinePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'atmadmin';

    /** the table name for this class */
    const TABLE_NAME = 'pagosonline';

    /** the related Propel class for this table */
    const OM_CLASS = 'Pagosonline';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PagosonlineTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 54;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 54;

    /** the column name for the pagosonline_id field */
    const PAGOSONLINE_ID = 'pagosonline.pagosonline_id';

    /** the column name for the order_id field */
    const ORDER_ID = 'pagosonline.order_id';

    /** the column name for the estado_pol field */
    const ESTADO_POL = 'pagosonline.estado_pol';

    /** the column name for the riesgo field */
    const RIESGO = 'pagosonline.riesgo';

    /** the column name for the codigo_respuesta_pol field */
    const CODIGO_RESPUESTA_POL = 'pagosonline.codigo_respuesta_pol';

    /** the column name for the ref_pol field */
    const REF_POL = 'pagosonline.ref_pol';

    /** the column name for the extra_uno field */
    const EXTRA_UNO = 'pagosonline.extra_uno';

    /** the column name for the extra_dos field */
    const EXTRA_DOS = 'pagosonline.extra_dos';

    /** the column name for the medio_pago field */
    const MEDIO_PAGO = 'pagosonline.medio_pago';

    /** the column name for the tipo_medio_pago field */
    const TIPO_MEDIO_PAGO = 'pagosonline.tipo_medio_pago';

    /** the column name for the cuotas field */
    const CUOTAS = 'pagosonline.cuotas';

    /** the column name for the valor field */
    const VALOR = 'pagosonline.valor';

    /** the column name for the iva field */
    const IVA = 'pagosonline.iva';

    /** the column name for the valor_adicional field */
    const VALOR_ADICIONAL = 'pagosonline.valor_adicional';

    /** the column name for the fecha_transaccion field */
    const FECHA_TRANSACCION = 'pagosonline.fecha_transaccion';

    /** the column name for the cus field */
    const CUS = 'pagosonline.cus';

    /** the column name for the banco_pse field */
    const BANCO_PSE = 'pagosonline.banco_pse';

    /** the column name for the transaccion_id field */
    const TRANSACCION_ID = 'pagosonline.transaccion_id';

    /** the column name for the usuario_id field */
    const USUARIO_ID = 'pagosonline.usuario_id';

    /** the column name for the banco_id field */
    const BANCO_ID = 'pagosonline.banco_id';

    /** the column name for the medio_pago_id field */
    const MEDIO_PAGO_ID = 'pagosonline.medio_pago_id';

    /** the column name for the comision_pol field */
    const COMISION_POL = 'pagosonline.comision_pol';

    /** the column name for the estado_transaccion field */
    const ESTADO_TRANSACCION = 'pagosonline.estado_transaccion';

    /** the column name for the transaccion_banco_id field */
    const TRANSACCION_BANCO_ID = 'pagosonline.transaccion_banco_id';

    /** the column name for the codigo_autorizacion field */
    const CODIGO_AUTORIZACION = 'pagosonline.codigo_autorizacion';

    /** the column name for the email_comprador field */
    const EMAIL_COMPRADOR = 'pagosonline.email_comprador';

    /** the column name for the nickname_comprador field */
    const NICKNAME_COMPRADOR = 'pagosonline.nickname_comprador';

    /** the column name for the nickname_vendedor field */
    const NICKNAME_VENDEDOR = 'pagosonline.nickname_vendedor';

    /** the column name for the descripcion field */
    const DESCRIPCION = 'pagosonline.descripcion';

    /** the column name for the intentos field */
    const INTENTOS = 'pagosonline.intentos';

    /** the column name for the ciclo_pse field */
    const CICLO_PSE = 'pagosonline.ciclo_pse';

    /** the column name for the fecha field */
    const FECHA = 'pagosonline.fecha';

    /** the column name for the moneda field */
    const MONEDA = 'pagosonline.moneda';

    /** the column name for the mensaje_respuesta_pol field */
    const MENSAJE_RESPUESTA_POL = 'pagosonline.mensaje_respuesta_pol';

    /** the column name for the mensaje_error_banco field */
    const MENSAJE_ERROR_BANCO = 'pagosonline.mensaje_error_banco';

    /** the column name for the codigo_error_banco field */
    const CODIGO_ERROR_BANCO = 'pagosonline.codigo_error_banco';

    /** the column name for the tasa_cambio field */
    const TASA_CAMBIO = 'pagosonline.tasa_cambio';

    /** the column name for the ip field */
    const IP = 'pagosonline.ip';

    /** the column name for the numero_cliente field */
    const NUMERO_CLIENTE = 'pagosonline.numero_cliente';

    /** the column name for the pago_recurrente field */
    const PAGO_RECURRENTE = 'pagosonline.pago_recurrente';

    /** the column name for the numero_visible field */
    const NUMERO_VISIBLE = 'pagosonline.numero_visible';

    /** the column name for the tarjeta_habiente field */
    const TARJETA_HABIENTE = 'pagosonline.tarjeta_habiente';

    /** the column name for the franquicia field */
    const FRANQUICIA = 'pagosonline.franquicia';

    /** the column name for the direccion_cobro field */
    const DIRECCION_COBRO = 'pagosonline.direccion_cobro';

    /** the column name for the ciudad_cobro field */
    const CIUDAD_COBRO = 'pagosonline.ciudad_cobro';

    /** the column name for the direccion_envio field */
    const DIRECCION_ENVIO = 'pagosonline.direccion_envio';

    /** the column name for the ciudad_envio field */
    const CIUDAD_ENVIO = 'pagosonline.ciudad_envio';

    /** the column name for the telefono field */
    const TELEFONO = 'pagosonline.telefono';

    /** the column name for the telefono_oficina field */
    const TELEFONO_OFICINA = 'pagosonline.telefono_oficina';

    /** the column name for the pais_envio field */
    const PAIS_ENVIO = 'pagosonline.pais_envio';

    /** the column name for the pais_cobro field */
    const PAIS_COBRO = 'pagosonline.pais_cobro';

    /** the column name for the pse_referencia_uno field */
    const PSE_REFERENCIA_UNO = 'pagosonline.pse_referencia_uno';

    /** the column name for the pse_referencia_dos field */
    const PSE_REFERENCIA_DOS = 'pagosonline.pse_referencia_dos';

    /** the column name for the pse_referencia_tres field */
    const PSE_REFERENCIA_TRES = 'pagosonline.pse_referencia_tres';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Pagosonline objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Pagosonline[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PagosonlinePeer::$fieldNames[PagosonlinePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('PagosonlineId', 'OrderId', 'EstadoPol', 'Riesgo', 'CodigoRespuestaPol', 'RefPol', 'ExtraUno', 'ExtraDos', 'MedioPago', 'TipoMedioPago', 'Cuotas', 'Valor', 'Iva', 'ValorAdicional', 'FechaTransaccion', 'Cus', 'BancoPse', 'TransaccionId', 'UsuarioId', 'BancoId', 'MedioPagoId', 'ComisionPol', 'EstadoTransaccion', 'TransaccionBancoId', 'CodigoAutorizacion', 'EmailComprador', 'NicknameComprador', 'NicknameVendedor', 'Descripcion', 'Intentos', 'CicloPse', 'Fecha', 'Moneda', 'MensajeRespuestaPol', 'MensajeErrorBanco', 'CodigoErrorBanco', 'TasaCambio', 'Ip', 'NumeroCliente', 'PagoRecurrente', 'NumeroVisible', 'TarjetaHabiente', 'Franquicia', 'DireccionCobro', 'CiudadCobro', 'DireccionEnvio', 'CiudadEnvio', 'Telefono', 'TelefonoOficina', 'PaisEnvio', 'PaisCobro', 'PseReferenciaUno', 'PseReferenciaDos', 'PseReferenciaTres', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('pagosonlineId', 'orderId', 'estadoPol', 'riesgo', 'codigoRespuestaPol', 'refPol', 'extraUno', 'extraDos', 'medioPago', 'tipoMedioPago', 'cuotas', 'valor', 'iva', 'valorAdicional', 'fechaTransaccion', 'cus', 'bancoPse', 'transaccionId', 'usuarioId', 'bancoId', 'medioPagoId', 'comisionPol', 'estadoTransaccion', 'transaccionBancoId', 'codigoAutorizacion', 'emailComprador', 'nicknameComprador', 'nicknameVendedor', 'descripcion', 'intentos', 'cicloPse', 'fecha', 'moneda', 'mensajeRespuestaPol', 'mensajeErrorBanco', 'codigoErrorBanco', 'tasaCambio', 'ip', 'numeroCliente', 'pagoRecurrente', 'numeroVisible', 'tarjetaHabiente', 'franquicia', 'direccionCobro', 'ciudadCobro', 'direccionEnvio', 'ciudadEnvio', 'telefono', 'telefonoOficina', 'paisEnvio', 'paisCobro', 'pseReferenciaUno', 'pseReferenciaDos', 'pseReferenciaTres', ),
        BasePeer::TYPE_COLNAME => array (PagosonlinePeer::PAGOSONLINE_ID, PagosonlinePeer::ORDER_ID, PagosonlinePeer::ESTADO_POL, PagosonlinePeer::RIESGO, PagosonlinePeer::CODIGO_RESPUESTA_POL, PagosonlinePeer::REF_POL, PagosonlinePeer::EXTRA_UNO, PagosonlinePeer::EXTRA_DOS, PagosonlinePeer::MEDIO_PAGO, PagosonlinePeer::TIPO_MEDIO_PAGO, PagosonlinePeer::CUOTAS, PagosonlinePeer::VALOR, PagosonlinePeer::IVA, PagosonlinePeer::VALOR_ADICIONAL, PagosonlinePeer::FECHA_TRANSACCION, PagosonlinePeer::CUS, PagosonlinePeer::BANCO_PSE, PagosonlinePeer::TRANSACCION_ID, PagosonlinePeer::USUARIO_ID, PagosonlinePeer::BANCO_ID, PagosonlinePeer::MEDIO_PAGO_ID, PagosonlinePeer::COMISION_POL, PagosonlinePeer::ESTADO_TRANSACCION, PagosonlinePeer::TRANSACCION_BANCO_ID, PagosonlinePeer::CODIGO_AUTORIZACION, PagosonlinePeer::EMAIL_COMPRADOR, PagosonlinePeer::NICKNAME_COMPRADOR, PagosonlinePeer::NICKNAME_VENDEDOR, PagosonlinePeer::DESCRIPCION, PagosonlinePeer::INTENTOS, PagosonlinePeer::CICLO_PSE, PagosonlinePeer::FECHA, PagosonlinePeer::MONEDA, PagosonlinePeer::MENSAJE_RESPUESTA_POL, PagosonlinePeer::MENSAJE_ERROR_BANCO, PagosonlinePeer::CODIGO_ERROR_BANCO, PagosonlinePeer::TASA_CAMBIO, PagosonlinePeer::IP, PagosonlinePeer::NUMERO_CLIENTE, PagosonlinePeer::PAGO_RECURRENTE, PagosonlinePeer::NUMERO_VISIBLE, PagosonlinePeer::TARJETA_HABIENTE, PagosonlinePeer::FRANQUICIA, PagosonlinePeer::DIRECCION_COBRO, PagosonlinePeer::CIUDAD_COBRO, PagosonlinePeer::DIRECCION_ENVIO, PagosonlinePeer::CIUDAD_ENVIO, PagosonlinePeer::TELEFONO, PagosonlinePeer::TELEFONO_OFICINA, PagosonlinePeer::PAIS_ENVIO, PagosonlinePeer::PAIS_COBRO, PagosonlinePeer::PSE_REFERENCIA_UNO, PagosonlinePeer::PSE_REFERENCIA_DOS, PagosonlinePeer::PSE_REFERENCIA_TRES, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PAGOSONLINE_ID', 'ORDER_ID', 'ESTADO_POL', 'RIESGO', 'CODIGO_RESPUESTA_POL', 'REF_POL', 'EXTRA_UNO', 'EXTRA_DOS', 'MEDIO_PAGO', 'TIPO_MEDIO_PAGO', 'CUOTAS', 'VALOR', 'IVA', 'VALOR_ADICIONAL', 'FECHA_TRANSACCION', 'CUS', 'BANCO_PSE', 'TRANSACCION_ID', 'USUARIO_ID', 'BANCO_ID', 'MEDIO_PAGO_ID', 'COMISION_POL', 'ESTADO_TRANSACCION', 'TRANSACCION_BANCO_ID', 'CODIGO_AUTORIZACION', 'EMAIL_COMPRADOR', 'NICKNAME_COMPRADOR', 'NICKNAME_VENDEDOR', 'DESCRIPCION', 'INTENTOS', 'CICLO_PSE', 'FECHA', 'MONEDA', 'MENSAJE_RESPUESTA_POL', 'MENSAJE_ERROR_BANCO', 'CODIGO_ERROR_BANCO', 'TASA_CAMBIO', 'IP', 'NUMERO_CLIENTE', 'PAGO_RECURRENTE', 'NUMERO_VISIBLE', 'TARJETA_HABIENTE', 'FRANQUICIA', 'DIRECCION_COBRO', 'CIUDAD_COBRO', 'DIRECCION_ENVIO', 'CIUDAD_ENVIO', 'TELEFONO', 'TELEFONO_OFICINA', 'PAIS_ENVIO', 'PAIS_COBRO', 'PSE_REFERENCIA_UNO', 'PSE_REFERENCIA_DOS', 'PSE_REFERENCIA_TRES', ),
        BasePeer::TYPE_FIELDNAME => array ('pagosonline_id', 'order_id', 'estado_pol', 'riesgo', 'codigo_respuesta_pol', 'ref_pol', 'extra_uno', 'extra_dos', 'medio_pago', 'tipo_medio_pago', 'cuotas', 'valor', 'iva', 'valor_adicional', 'fecha_transaccion', 'cus', 'banco_pse', 'transaccion_id', 'usuario_id', 'banco_id', 'medio_pago_id', 'comision_pol', 'estado_transaccion', 'transaccion_banco_id', 'codigo_autorizacion', 'email_comprador', 'nickname_comprador', 'nickname_vendedor', 'descripcion', 'intentos', 'ciclo_pse', 'fecha', 'moneda', 'mensaje_respuesta_pol', 'mensaje_error_banco', 'codigo_error_banco', 'tasa_cambio', 'ip', 'numero_cliente', 'pago_recurrente', 'numero_visible', 'tarjeta_habiente', 'franquicia', 'direccion_cobro', 'ciudad_cobro', 'direccion_envio', 'ciudad_envio', 'telefono', 'telefono_oficina', 'pais_envio', 'pais_cobro', 'pse_referencia_uno', 'pse_referencia_dos', 'pse_referencia_tres', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PagosonlinePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('PagosonlineId' => 0, 'OrderId' => 1, 'EstadoPol' => 2, 'Riesgo' => 3, 'CodigoRespuestaPol' => 4, 'RefPol' => 5, 'ExtraUno' => 6, 'ExtraDos' => 7, 'MedioPago' => 8, 'TipoMedioPago' => 9, 'Cuotas' => 10, 'Valor' => 11, 'Iva' => 12, 'ValorAdicional' => 13, 'FechaTransaccion' => 14, 'Cus' => 15, 'BancoPse' => 16, 'TransaccionId' => 17, 'UsuarioId' => 18, 'BancoId' => 19, 'MedioPagoId' => 20, 'ComisionPol' => 21, 'EstadoTransaccion' => 22, 'TransaccionBancoId' => 23, 'CodigoAutorizacion' => 24, 'EmailComprador' => 25, 'NicknameComprador' => 26, 'NicknameVendedor' => 27, 'Descripcion' => 28, 'Intentos' => 29, 'CicloPse' => 30, 'Fecha' => 31, 'Moneda' => 32, 'MensajeRespuestaPol' => 33, 'MensajeErrorBanco' => 34, 'CodigoErrorBanco' => 35, 'TasaCambio' => 36, 'Ip' => 37, 'NumeroCliente' => 38, 'PagoRecurrente' => 39, 'NumeroVisible' => 40, 'TarjetaHabiente' => 41, 'Franquicia' => 42, 'DireccionCobro' => 43, 'CiudadCobro' => 44, 'DireccionEnvio' => 45, 'CiudadEnvio' => 46, 'Telefono' => 47, 'TelefonoOficina' => 48, 'PaisEnvio' => 49, 'PaisCobro' => 50, 'PseReferenciaUno' => 51, 'PseReferenciaDos' => 52, 'PseReferenciaTres' => 53, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('pagosonlineId' => 0, 'orderId' => 1, 'estadoPol' => 2, 'riesgo' => 3, 'codigoRespuestaPol' => 4, 'refPol' => 5, 'extraUno' => 6, 'extraDos' => 7, 'medioPago' => 8, 'tipoMedioPago' => 9, 'cuotas' => 10, 'valor' => 11, 'iva' => 12, 'valorAdicional' => 13, 'fechaTransaccion' => 14, 'cus' => 15, 'bancoPse' => 16, 'transaccionId' => 17, 'usuarioId' => 18, 'bancoId' => 19, 'medioPagoId' => 20, 'comisionPol' => 21, 'estadoTransaccion' => 22, 'transaccionBancoId' => 23, 'codigoAutorizacion' => 24, 'emailComprador' => 25, 'nicknameComprador' => 26, 'nicknameVendedor' => 27, 'descripcion' => 28, 'intentos' => 29, 'cicloPse' => 30, 'fecha' => 31, 'moneda' => 32, 'mensajeRespuestaPol' => 33, 'mensajeErrorBanco' => 34, 'codigoErrorBanco' => 35, 'tasaCambio' => 36, 'ip' => 37, 'numeroCliente' => 38, 'pagoRecurrente' => 39, 'numeroVisible' => 40, 'tarjetaHabiente' => 41, 'franquicia' => 42, 'direccionCobro' => 43, 'ciudadCobro' => 44, 'direccionEnvio' => 45, 'ciudadEnvio' => 46, 'telefono' => 47, 'telefonoOficina' => 48, 'paisEnvio' => 49, 'paisCobro' => 50, 'pseReferenciaUno' => 51, 'pseReferenciaDos' => 52, 'pseReferenciaTres' => 53, ),
        BasePeer::TYPE_COLNAME => array (PagosonlinePeer::PAGOSONLINE_ID => 0, PagosonlinePeer::ORDER_ID => 1, PagosonlinePeer::ESTADO_POL => 2, PagosonlinePeer::RIESGO => 3, PagosonlinePeer::CODIGO_RESPUESTA_POL => 4, PagosonlinePeer::REF_POL => 5, PagosonlinePeer::EXTRA_UNO => 6, PagosonlinePeer::EXTRA_DOS => 7, PagosonlinePeer::MEDIO_PAGO => 8, PagosonlinePeer::TIPO_MEDIO_PAGO => 9, PagosonlinePeer::CUOTAS => 10, PagosonlinePeer::VALOR => 11, PagosonlinePeer::IVA => 12, PagosonlinePeer::VALOR_ADICIONAL => 13, PagosonlinePeer::FECHA_TRANSACCION => 14, PagosonlinePeer::CUS => 15, PagosonlinePeer::BANCO_PSE => 16, PagosonlinePeer::TRANSACCION_ID => 17, PagosonlinePeer::USUARIO_ID => 18, PagosonlinePeer::BANCO_ID => 19, PagosonlinePeer::MEDIO_PAGO_ID => 20, PagosonlinePeer::COMISION_POL => 21, PagosonlinePeer::ESTADO_TRANSACCION => 22, PagosonlinePeer::TRANSACCION_BANCO_ID => 23, PagosonlinePeer::CODIGO_AUTORIZACION => 24, PagosonlinePeer::EMAIL_COMPRADOR => 25, PagosonlinePeer::NICKNAME_COMPRADOR => 26, PagosonlinePeer::NICKNAME_VENDEDOR => 27, PagosonlinePeer::DESCRIPCION => 28, PagosonlinePeer::INTENTOS => 29, PagosonlinePeer::CICLO_PSE => 30, PagosonlinePeer::FECHA => 31, PagosonlinePeer::MONEDA => 32, PagosonlinePeer::MENSAJE_RESPUESTA_POL => 33, PagosonlinePeer::MENSAJE_ERROR_BANCO => 34, PagosonlinePeer::CODIGO_ERROR_BANCO => 35, PagosonlinePeer::TASA_CAMBIO => 36, PagosonlinePeer::IP => 37, PagosonlinePeer::NUMERO_CLIENTE => 38, PagosonlinePeer::PAGO_RECURRENTE => 39, PagosonlinePeer::NUMERO_VISIBLE => 40, PagosonlinePeer::TARJETA_HABIENTE => 41, PagosonlinePeer::FRANQUICIA => 42, PagosonlinePeer::DIRECCION_COBRO => 43, PagosonlinePeer::CIUDAD_COBRO => 44, PagosonlinePeer::DIRECCION_ENVIO => 45, PagosonlinePeer::CIUDAD_ENVIO => 46, PagosonlinePeer::TELEFONO => 47, PagosonlinePeer::TELEFONO_OFICINA => 48, PagosonlinePeer::PAIS_ENVIO => 49, PagosonlinePeer::PAIS_COBRO => 50, PagosonlinePeer::PSE_REFERENCIA_UNO => 51, PagosonlinePeer::PSE_REFERENCIA_DOS => 52, PagosonlinePeer::PSE_REFERENCIA_TRES => 53, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PAGOSONLINE_ID' => 0, 'ORDER_ID' => 1, 'ESTADO_POL' => 2, 'RIESGO' => 3, 'CODIGO_RESPUESTA_POL' => 4, 'REF_POL' => 5, 'EXTRA_UNO' => 6, 'EXTRA_DOS' => 7, 'MEDIO_PAGO' => 8, 'TIPO_MEDIO_PAGO' => 9, 'CUOTAS' => 10, 'VALOR' => 11, 'IVA' => 12, 'VALOR_ADICIONAL' => 13, 'FECHA_TRANSACCION' => 14, 'CUS' => 15, 'BANCO_PSE' => 16, 'TRANSACCION_ID' => 17, 'USUARIO_ID' => 18, 'BANCO_ID' => 19, 'MEDIO_PAGO_ID' => 20, 'COMISION_POL' => 21, 'ESTADO_TRANSACCION' => 22, 'TRANSACCION_BANCO_ID' => 23, 'CODIGO_AUTORIZACION' => 24, 'EMAIL_COMPRADOR' => 25, 'NICKNAME_COMPRADOR' => 26, 'NICKNAME_VENDEDOR' => 27, 'DESCRIPCION' => 28, 'INTENTOS' => 29, 'CICLO_PSE' => 30, 'FECHA' => 31, 'MONEDA' => 32, 'MENSAJE_RESPUESTA_POL' => 33, 'MENSAJE_ERROR_BANCO' => 34, 'CODIGO_ERROR_BANCO' => 35, 'TASA_CAMBIO' => 36, 'IP' => 37, 'NUMERO_CLIENTE' => 38, 'PAGO_RECURRENTE' => 39, 'NUMERO_VISIBLE' => 40, 'TARJETA_HABIENTE' => 41, 'FRANQUICIA' => 42, 'DIRECCION_COBRO' => 43, 'CIUDAD_COBRO' => 44, 'DIRECCION_ENVIO' => 45, 'CIUDAD_ENVIO' => 46, 'TELEFONO' => 47, 'TELEFONO_OFICINA' => 48, 'PAIS_ENVIO' => 49, 'PAIS_COBRO' => 50, 'PSE_REFERENCIA_UNO' => 51, 'PSE_REFERENCIA_DOS' => 52, 'PSE_REFERENCIA_TRES' => 53, ),
        BasePeer::TYPE_FIELDNAME => array ('pagosonline_id' => 0, 'order_id' => 1, 'estado_pol' => 2, 'riesgo' => 3, 'codigo_respuesta_pol' => 4, 'ref_pol' => 5, 'extra_uno' => 6, 'extra_dos' => 7, 'medio_pago' => 8, 'tipo_medio_pago' => 9, 'cuotas' => 10, 'valor' => 11, 'iva' => 12, 'valor_adicional' => 13, 'fecha_transaccion' => 14, 'cus' => 15, 'banco_pse' => 16, 'transaccion_id' => 17, 'usuario_id' => 18, 'banco_id' => 19, 'medio_pago_id' => 20, 'comision_pol' => 21, 'estado_transaccion' => 22, 'transaccion_banco_id' => 23, 'codigo_autorizacion' => 24, 'email_comprador' => 25, 'nickname_comprador' => 26, 'nickname_vendedor' => 27, 'descripcion' => 28, 'intentos' => 29, 'ciclo_pse' => 30, 'fecha' => 31, 'moneda' => 32, 'mensaje_respuesta_pol' => 33, 'mensaje_error_banco' => 34, 'codigo_error_banco' => 35, 'tasa_cambio' => 36, 'ip' => 37, 'numero_cliente' => 38, 'pago_recurrente' => 39, 'numero_visible' => 40, 'tarjeta_habiente' => 41, 'franquicia' => 42, 'direccion_cobro' => 43, 'ciudad_cobro' => 44, 'direccion_envio' => 45, 'ciudad_envio' => 46, 'telefono' => 47, 'telefono_oficina' => 48, 'pais_envio' => 49, 'pais_cobro' => 50, 'pse_referencia_uno' => 51, 'pse_referencia_dos' => 52, 'pse_referencia_tres' => 53, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = PagosonlinePeer::getFieldNames($toType);
        $key = isset(PagosonlinePeer::$fieldKeys[$fromType][$name]) ? PagosonlinePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PagosonlinePeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, PagosonlinePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PagosonlinePeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. PagosonlinePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PagosonlinePeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(PagosonlinePeer::PAGOSONLINE_ID);
            $criteria->addSelectColumn(PagosonlinePeer::ORDER_ID);
            $criteria->addSelectColumn(PagosonlinePeer::ESTADO_POL);
            $criteria->addSelectColumn(PagosonlinePeer::RIESGO);
            $criteria->addSelectColumn(PagosonlinePeer::CODIGO_RESPUESTA_POL);
            $criteria->addSelectColumn(PagosonlinePeer::REF_POL);
            $criteria->addSelectColumn(PagosonlinePeer::EXTRA_UNO);
            $criteria->addSelectColumn(PagosonlinePeer::EXTRA_DOS);
            $criteria->addSelectColumn(PagosonlinePeer::MEDIO_PAGO);
            $criteria->addSelectColumn(PagosonlinePeer::TIPO_MEDIO_PAGO);
            $criteria->addSelectColumn(PagosonlinePeer::CUOTAS);
            $criteria->addSelectColumn(PagosonlinePeer::VALOR);
            $criteria->addSelectColumn(PagosonlinePeer::IVA);
            $criteria->addSelectColumn(PagosonlinePeer::VALOR_ADICIONAL);
            $criteria->addSelectColumn(PagosonlinePeer::FECHA_TRANSACCION);
            $criteria->addSelectColumn(PagosonlinePeer::CUS);
            $criteria->addSelectColumn(PagosonlinePeer::BANCO_PSE);
            $criteria->addSelectColumn(PagosonlinePeer::TRANSACCION_ID);
            $criteria->addSelectColumn(PagosonlinePeer::USUARIO_ID);
            $criteria->addSelectColumn(PagosonlinePeer::BANCO_ID);
            $criteria->addSelectColumn(PagosonlinePeer::MEDIO_PAGO_ID);
            $criteria->addSelectColumn(PagosonlinePeer::COMISION_POL);
            $criteria->addSelectColumn(PagosonlinePeer::ESTADO_TRANSACCION);
            $criteria->addSelectColumn(PagosonlinePeer::TRANSACCION_BANCO_ID);
            $criteria->addSelectColumn(PagosonlinePeer::CODIGO_AUTORIZACION);
            $criteria->addSelectColumn(PagosonlinePeer::EMAIL_COMPRADOR);
            $criteria->addSelectColumn(PagosonlinePeer::NICKNAME_COMPRADOR);
            $criteria->addSelectColumn(PagosonlinePeer::NICKNAME_VENDEDOR);
            $criteria->addSelectColumn(PagosonlinePeer::DESCRIPCION);
            $criteria->addSelectColumn(PagosonlinePeer::INTENTOS);
            $criteria->addSelectColumn(PagosonlinePeer::CICLO_PSE);
            $criteria->addSelectColumn(PagosonlinePeer::FECHA);
            $criteria->addSelectColumn(PagosonlinePeer::MONEDA);
            $criteria->addSelectColumn(PagosonlinePeer::MENSAJE_RESPUESTA_POL);
            $criteria->addSelectColumn(PagosonlinePeer::MENSAJE_ERROR_BANCO);
            $criteria->addSelectColumn(PagosonlinePeer::CODIGO_ERROR_BANCO);
            $criteria->addSelectColumn(PagosonlinePeer::TASA_CAMBIO);
            $criteria->addSelectColumn(PagosonlinePeer::IP);
            $criteria->addSelectColumn(PagosonlinePeer::NUMERO_CLIENTE);
            $criteria->addSelectColumn(PagosonlinePeer::PAGO_RECURRENTE);
            $criteria->addSelectColumn(PagosonlinePeer::NUMERO_VISIBLE);
            $criteria->addSelectColumn(PagosonlinePeer::TARJETA_HABIENTE);
            $criteria->addSelectColumn(PagosonlinePeer::FRANQUICIA);
            $criteria->addSelectColumn(PagosonlinePeer::DIRECCION_COBRO);
            $criteria->addSelectColumn(PagosonlinePeer::CIUDAD_COBRO);
            $criteria->addSelectColumn(PagosonlinePeer::DIRECCION_ENVIO);
            $criteria->addSelectColumn(PagosonlinePeer::CIUDAD_ENVIO);
            $criteria->addSelectColumn(PagosonlinePeer::TELEFONO);
            $criteria->addSelectColumn(PagosonlinePeer::TELEFONO_OFICINA);
            $criteria->addSelectColumn(PagosonlinePeer::PAIS_ENVIO);
            $criteria->addSelectColumn(PagosonlinePeer::PAIS_COBRO);
            $criteria->addSelectColumn(PagosonlinePeer::PSE_REFERENCIA_UNO);
            $criteria->addSelectColumn(PagosonlinePeer::PSE_REFERENCIA_DOS);
            $criteria->addSelectColumn(PagosonlinePeer::PSE_REFERENCIA_TRES);
        } else {
            $criteria->addSelectColumn($alias . '.pagosonline_id');
            $criteria->addSelectColumn($alias . '.order_id');
            $criteria->addSelectColumn($alias . '.estado_pol');
            $criteria->addSelectColumn($alias . '.riesgo');
            $criteria->addSelectColumn($alias . '.codigo_respuesta_pol');
            $criteria->addSelectColumn($alias . '.ref_pol');
            $criteria->addSelectColumn($alias . '.extra_uno');
            $criteria->addSelectColumn($alias . '.extra_dos');
            $criteria->addSelectColumn($alias . '.medio_pago');
            $criteria->addSelectColumn($alias . '.tipo_medio_pago');
            $criteria->addSelectColumn($alias . '.cuotas');
            $criteria->addSelectColumn($alias . '.valor');
            $criteria->addSelectColumn($alias . '.iva');
            $criteria->addSelectColumn($alias . '.valor_adicional');
            $criteria->addSelectColumn($alias . '.fecha_transaccion');
            $criteria->addSelectColumn($alias . '.cus');
            $criteria->addSelectColumn($alias . '.banco_pse');
            $criteria->addSelectColumn($alias . '.transaccion_id');
            $criteria->addSelectColumn($alias . '.usuario_id');
            $criteria->addSelectColumn($alias . '.banco_id');
            $criteria->addSelectColumn($alias . '.medio_pago_id');
            $criteria->addSelectColumn($alias . '.comision_pol');
            $criteria->addSelectColumn($alias . '.estado_transaccion');
            $criteria->addSelectColumn($alias . '.transaccion_banco_id');
            $criteria->addSelectColumn($alias . '.codigo_autorizacion');
            $criteria->addSelectColumn($alias . '.email_comprador');
            $criteria->addSelectColumn($alias . '.nickname_comprador');
            $criteria->addSelectColumn($alias . '.nickname_vendedor');
            $criteria->addSelectColumn($alias . '.descripcion');
            $criteria->addSelectColumn($alias . '.intentos');
            $criteria->addSelectColumn($alias . '.ciclo_pse');
            $criteria->addSelectColumn($alias . '.fecha');
            $criteria->addSelectColumn($alias . '.moneda');
            $criteria->addSelectColumn($alias . '.mensaje_respuesta_pol');
            $criteria->addSelectColumn($alias . '.mensaje_error_banco');
            $criteria->addSelectColumn($alias . '.codigo_error_banco');
            $criteria->addSelectColumn($alias . '.tasa_cambio');
            $criteria->addSelectColumn($alias . '.ip');
            $criteria->addSelectColumn($alias . '.numero_cliente');
            $criteria->addSelectColumn($alias . '.pago_recurrente');
            $criteria->addSelectColumn($alias . '.numero_visible');
            $criteria->addSelectColumn($alias . '.tarjeta_habiente');
            $criteria->addSelectColumn($alias . '.franquicia');
            $criteria->addSelectColumn($alias . '.direccion_cobro');
            $criteria->addSelectColumn($alias . '.ciudad_cobro');
            $criteria->addSelectColumn($alias . '.direccion_envio');
            $criteria->addSelectColumn($alias . '.ciudad_envio');
            $criteria->addSelectColumn($alias . '.telefono');
            $criteria->addSelectColumn($alias . '.telefono_oficina');
            $criteria->addSelectColumn($alias . '.pais_envio');
            $criteria->addSelectColumn($alias . '.pais_cobro');
            $criteria->addSelectColumn($alias . '.pse_referencia_uno');
            $criteria->addSelectColumn($alias . '.pse_referencia_dos');
            $criteria->addSelectColumn($alias . '.pse_referencia_tres');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PagosonlinePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PagosonlinePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PagosonlinePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PagosonlinePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Pagosonline
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PagosonlinePeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return PagosonlinePeer::populateObjects(PagosonlinePeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PagosonlinePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PagosonlinePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PagosonlinePeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Pagosonline $obj A Pagosonline object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getPagosonlineId();
            } // if key === null
            PagosonlinePeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Pagosonline object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Pagosonline) {
                $key = (string) $value->getPagosonlineId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Pagosonline object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PagosonlinePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Pagosonline Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PagosonlinePeer::$instances[$key])) {
                return PagosonlinePeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (PagosonlinePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PagosonlinePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to pagosonline
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = PagosonlinePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PagosonlinePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PagosonlinePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PagosonlinePeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Pagosonline object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PagosonlinePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PagosonlinePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PagosonlinePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PagosonlinePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PagosonlinePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(PagosonlinePeer::DATABASE_NAME)->getTable(PagosonlinePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePagosonlinePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePagosonlinePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PagosonlineTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return PagosonlinePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Pagosonline or Criteria object.
     *
     * @param      mixed $values Criteria or Pagosonline object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PagosonlinePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Pagosonline object
        }

        if ($criteria->containsKey(PagosonlinePeer::PAGOSONLINE_ID) && $criteria->keyContainsValue(PagosonlinePeer::PAGOSONLINE_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PagosonlinePeer::PAGOSONLINE_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PagosonlinePeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Pagosonline or Criteria object.
     *
     * @param      mixed $values Criteria or Pagosonline object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PagosonlinePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PagosonlinePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PagosonlinePeer::PAGOSONLINE_ID);
            $value = $criteria->remove(PagosonlinePeer::PAGOSONLINE_ID);
            if ($value) {
                $selectCriteria->add(PagosonlinePeer::PAGOSONLINE_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PagosonlinePeer::TABLE_NAME);
            }

        } else { // $values is Pagosonline object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PagosonlinePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the pagosonline table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PagosonlinePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PagosonlinePeer::TABLE_NAME, $con, PagosonlinePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PagosonlinePeer::clearInstancePool();
            PagosonlinePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Pagosonline or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Pagosonline object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(PagosonlinePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PagosonlinePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Pagosonline) { // it's a model object
            // invalidate the cache for this single object
            PagosonlinePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PagosonlinePeer::DATABASE_NAME);
            $criteria->add(PagosonlinePeer::PAGOSONLINE_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PagosonlinePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PagosonlinePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PagosonlinePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Pagosonline object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Pagosonline $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PagosonlinePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PagosonlinePeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(PagosonlinePeer::DATABASE_NAME, PagosonlinePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Pagosonline
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PagosonlinePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PagosonlinePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PagosonlinePeer::DATABASE_NAME);
        $criteria->add(PagosonlinePeer::PAGOSONLINE_ID, $pk);

        $v = PagosonlinePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Pagosonline[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PagosonlinePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PagosonlinePeer::DATABASE_NAME);
            $criteria->add(PagosonlinePeer::PAGOSONLINE_ID, $pks, Criteria::IN);
            $objs = PagosonlinePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePagosonlinePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePagosonlinePeer::buildTableMap();

