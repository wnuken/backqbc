<?php


/**
 * Base class that represents a query for the 'pagosonline' table.
 *
 *
 *
 * @method PagosonlineQuery orderByPagosonlineId($order = Criteria::ASC) Order by the pagosonline_id column
 * @method PagosonlineQuery orderByOrderId($order = Criteria::ASC) Order by the order_id column
 * @method PagosonlineQuery orderByEstadoPol($order = Criteria::ASC) Order by the estado_pol column
 * @method PagosonlineQuery orderByRiesgo($order = Criteria::ASC) Order by the riesgo column
 * @method PagosonlineQuery orderByCodigoRespuestaPol($order = Criteria::ASC) Order by the codigo_respuesta_pol column
 * @method PagosonlineQuery orderByRefPol($order = Criteria::ASC) Order by the ref_pol column
 * @method PagosonlineQuery orderByExtraUno($order = Criteria::ASC) Order by the extra_uno column
 * @method PagosonlineQuery orderByExtraDos($order = Criteria::ASC) Order by the extra_dos column
 * @method PagosonlineQuery orderByMedioPago($order = Criteria::ASC) Order by the medio_pago column
 * @method PagosonlineQuery orderByTipoMedioPago($order = Criteria::ASC) Order by the tipo_medio_pago column
 * @method PagosonlineQuery orderByCuotas($order = Criteria::ASC) Order by the cuotas column
 * @method PagosonlineQuery orderByValor($order = Criteria::ASC) Order by the valor column
 * @method PagosonlineQuery orderByIva($order = Criteria::ASC) Order by the iva column
 * @method PagosonlineQuery orderByValorAdicional($order = Criteria::ASC) Order by the valor_adicional column
 * @method PagosonlineQuery orderByFechaTransaccion($order = Criteria::ASC) Order by the fecha_transaccion column
 * @method PagosonlineQuery orderByCus($order = Criteria::ASC) Order by the cus column
 * @method PagosonlineQuery orderByBancoPse($order = Criteria::ASC) Order by the banco_pse column
 * @method PagosonlineQuery orderByTransaccionId($order = Criteria::ASC) Order by the transaccion_id column
 * @method PagosonlineQuery orderByUsuarioId($order = Criteria::ASC) Order by the usuario_id column
 * @method PagosonlineQuery orderByBancoId($order = Criteria::ASC) Order by the banco_id column
 * @method PagosonlineQuery orderByMedioPagoId($order = Criteria::ASC) Order by the medio_pago_id column
 * @method PagosonlineQuery orderByComisionPol($order = Criteria::ASC) Order by the comision_pol column
 * @method PagosonlineQuery orderByEstadoTransaccion($order = Criteria::ASC) Order by the estado_transaccion column
 * @method PagosonlineQuery orderByTransaccionBancoId($order = Criteria::ASC) Order by the transaccion_banco_id column
 * @method PagosonlineQuery orderByCodigoAutorizacion($order = Criteria::ASC) Order by the codigo_autorizacion column
 * @method PagosonlineQuery orderByEmailComprador($order = Criteria::ASC) Order by the email_comprador column
 * @method PagosonlineQuery orderByNicknameComprador($order = Criteria::ASC) Order by the nickname_comprador column
 * @method PagosonlineQuery orderByNicknameVendedor($order = Criteria::ASC) Order by the nickname_vendedor column
 * @method PagosonlineQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method PagosonlineQuery orderByIntentos($order = Criteria::ASC) Order by the intentos column
 * @method PagosonlineQuery orderByCicloPse($order = Criteria::ASC) Order by the ciclo_pse column
 * @method PagosonlineQuery orderByFecha($order = Criteria::ASC) Order by the fecha column
 * @method PagosonlineQuery orderByMoneda($order = Criteria::ASC) Order by the moneda column
 * @method PagosonlineQuery orderByMensajeRespuestaPol($order = Criteria::ASC) Order by the mensaje_respuesta_pol column
 * @method PagosonlineQuery orderByMensajeErrorBanco($order = Criteria::ASC) Order by the mensaje_error_banco column
 * @method PagosonlineQuery orderByCodigoErrorBanco($order = Criteria::ASC) Order by the codigo_error_banco column
 * @method PagosonlineQuery orderByTasaCambio($order = Criteria::ASC) Order by the tasa_cambio column
 * @method PagosonlineQuery orderByIp($order = Criteria::ASC) Order by the ip column
 * @method PagosonlineQuery orderByNumeroCliente($order = Criteria::ASC) Order by the numero_cliente column
 * @method PagosonlineQuery orderByPagoRecurrente($order = Criteria::ASC) Order by the pago_recurrente column
 * @method PagosonlineQuery orderByNumeroVisible($order = Criteria::ASC) Order by the numero_visible column
 * @method PagosonlineQuery orderByTarjetaHabiente($order = Criteria::ASC) Order by the tarjeta_habiente column
 * @method PagosonlineQuery orderByFranquicia($order = Criteria::ASC) Order by the franquicia column
 * @method PagosonlineQuery orderByDireccionCobro($order = Criteria::ASC) Order by the direccion_cobro column
 * @method PagosonlineQuery orderByCiudadCobro($order = Criteria::ASC) Order by the ciudad_cobro column
 * @method PagosonlineQuery orderByDireccionEnvio($order = Criteria::ASC) Order by the direccion_envio column
 * @method PagosonlineQuery orderByCiudadEnvio($order = Criteria::ASC) Order by the ciudad_envio column
 * @method PagosonlineQuery orderByTelefono($order = Criteria::ASC) Order by the telefono column
 * @method PagosonlineQuery orderByTelefonoOficina($order = Criteria::ASC) Order by the telefono_oficina column
 * @method PagosonlineQuery orderByPaisEnvio($order = Criteria::ASC) Order by the pais_envio column
 * @method PagosonlineQuery orderByPaisCobro($order = Criteria::ASC) Order by the pais_cobro column
 * @method PagosonlineQuery orderByPseReferenciaUno($order = Criteria::ASC) Order by the pse_referencia_uno column
 * @method PagosonlineQuery orderByPseReferenciaDos($order = Criteria::ASC) Order by the pse_referencia_dos column
 * @method PagosonlineQuery orderByPseReferenciaTres($order = Criteria::ASC) Order by the pse_referencia_tres column
 *
 * @method PagosonlineQuery groupByPagosonlineId() Group by the pagosonline_id column
 * @method PagosonlineQuery groupByOrderId() Group by the order_id column
 * @method PagosonlineQuery groupByEstadoPol() Group by the estado_pol column
 * @method PagosonlineQuery groupByRiesgo() Group by the riesgo column
 * @method PagosonlineQuery groupByCodigoRespuestaPol() Group by the codigo_respuesta_pol column
 * @method PagosonlineQuery groupByRefPol() Group by the ref_pol column
 * @method PagosonlineQuery groupByExtraUno() Group by the extra_uno column
 * @method PagosonlineQuery groupByExtraDos() Group by the extra_dos column
 * @method PagosonlineQuery groupByMedioPago() Group by the medio_pago column
 * @method PagosonlineQuery groupByTipoMedioPago() Group by the tipo_medio_pago column
 * @method PagosonlineQuery groupByCuotas() Group by the cuotas column
 * @method PagosonlineQuery groupByValor() Group by the valor column
 * @method PagosonlineQuery groupByIva() Group by the iva column
 * @method PagosonlineQuery groupByValorAdicional() Group by the valor_adicional column
 * @method PagosonlineQuery groupByFechaTransaccion() Group by the fecha_transaccion column
 * @method PagosonlineQuery groupByCus() Group by the cus column
 * @method PagosonlineQuery groupByBancoPse() Group by the banco_pse column
 * @method PagosonlineQuery groupByTransaccionId() Group by the transaccion_id column
 * @method PagosonlineQuery groupByUsuarioId() Group by the usuario_id column
 * @method PagosonlineQuery groupByBancoId() Group by the banco_id column
 * @method PagosonlineQuery groupByMedioPagoId() Group by the medio_pago_id column
 * @method PagosonlineQuery groupByComisionPol() Group by the comision_pol column
 * @method PagosonlineQuery groupByEstadoTransaccion() Group by the estado_transaccion column
 * @method PagosonlineQuery groupByTransaccionBancoId() Group by the transaccion_banco_id column
 * @method PagosonlineQuery groupByCodigoAutorizacion() Group by the codigo_autorizacion column
 * @method PagosonlineQuery groupByEmailComprador() Group by the email_comprador column
 * @method PagosonlineQuery groupByNicknameComprador() Group by the nickname_comprador column
 * @method PagosonlineQuery groupByNicknameVendedor() Group by the nickname_vendedor column
 * @method PagosonlineQuery groupByDescripcion() Group by the descripcion column
 * @method PagosonlineQuery groupByIntentos() Group by the intentos column
 * @method PagosonlineQuery groupByCicloPse() Group by the ciclo_pse column
 * @method PagosonlineQuery groupByFecha() Group by the fecha column
 * @method PagosonlineQuery groupByMoneda() Group by the moneda column
 * @method PagosonlineQuery groupByMensajeRespuestaPol() Group by the mensaje_respuesta_pol column
 * @method PagosonlineQuery groupByMensajeErrorBanco() Group by the mensaje_error_banco column
 * @method PagosonlineQuery groupByCodigoErrorBanco() Group by the codigo_error_banco column
 * @method PagosonlineQuery groupByTasaCambio() Group by the tasa_cambio column
 * @method PagosonlineQuery groupByIp() Group by the ip column
 * @method PagosonlineQuery groupByNumeroCliente() Group by the numero_cliente column
 * @method PagosonlineQuery groupByPagoRecurrente() Group by the pago_recurrente column
 * @method PagosonlineQuery groupByNumeroVisible() Group by the numero_visible column
 * @method PagosonlineQuery groupByTarjetaHabiente() Group by the tarjeta_habiente column
 * @method PagosonlineQuery groupByFranquicia() Group by the franquicia column
 * @method PagosonlineQuery groupByDireccionCobro() Group by the direccion_cobro column
 * @method PagosonlineQuery groupByCiudadCobro() Group by the ciudad_cobro column
 * @method PagosonlineQuery groupByDireccionEnvio() Group by the direccion_envio column
 * @method PagosonlineQuery groupByCiudadEnvio() Group by the ciudad_envio column
 * @method PagosonlineQuery groupByTelefono() Group by the telefono column
 * @method PagosonlineQuery groupByTelefonoOficina() Group by the telefono_oficina column
 * @method PagosonlineQuery groupByPaisEnvio() Group by the pais_envio column
 * @method PagosonlineQuery groupByPaisCobro() Group by the pais_cobro column
 * @method PagosonlineQuery groupByPseReferenciaUno() Group by the pse_referencia_uno column
 * @method PagosonlineQuery groupByPseReferenciaDos() Group by the pse_referencia_dos column
 * @method PagosonlineQuery groupByPseReferenciaTres() Group by the pse_referencia_tres column
 *
 * @method PagosonlineQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PagosonlineQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PagosonlineQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Pagosonline findOne(PropelPDO $con = null) Return the first Pagosonline matching the query
 * @method Pagosonline findOneOrCreate(PropelPDO $con = null) Return the first Pagosonline matching the query, or a new Pagosonline object populated from the query conditions when no match is found
 *
 * @method Pagosonline findOneByOrderId(int $order_id) Return the first Pagosonline filtered by the order_id column
 * @method Pagosonline findOneByEstadoPol(int $estado_pol) Return the first Pagosonline filtered by the estado_pol column
 * @method Pagosonline findOneByRiesgo(int $riesgo) Return the first Pagosonline filtered by the riesgo column
 * @method Pagosonline findOneByCodigoRespuestaPol(int $codigo_respuesta_pol) Return the first Pagosonline filtered by the codigo_respuesta_pol column
 * @method Pagosonline findOneByRefPol(int $ref_pol) Return the first Pagosonline filtered by the ref_pol column
 * @method Pagosonline findOneByExtraUno(string $extra_uno) Return the first Pagosonline filtered by the extra_uno column
 * @method Pagosonline findOneByExtraDos(string $extra_dos) Return the first Pagosonline filtered by the extra_dos column
 * @method Pagosonline findOneByMedioPago(int $medio_pago) Return the first Pagosonline filtered by the medio_pago column
 * @method Pagosonline findOneByTipoMedioPago(string $tipo_medio_pago) Return the first Pagosonline filtered by the tipo_medio_pago column
 * @method Pagosonline findOneByCuotas(int $cuotas) Return the first Pagosonline filtered by the cuotas column
 * @method Pagosonline findOneByValor(string $valor) Return the first Pagosonline filtered by the valor column
 * @method Pagosonline findOneByIva(string $iva) Return the first Pagosonline filtered by the iva column
 * @method Pagosonline findOneByValorAdicional(string $valor_adicional) Return the first Pagosonline filtered by the valor_adicional column
 * @method Pagosonline findOneByFechaTransaccion(string $fecha_transaccion) Return the first Pagosonline filtered by the fecha_transaccion column
 * @method Pagosonline findOneByCus(int $cus) Return the first Pagosonline filtered by the cus column
 * @method Pagosonline findOneByBancoPse(string $banco_pse) Return the first Pagosonline filtered by the banco_pse column
 * @method Pagosonline findOneByTransaccionId(int $transaccion_id) Return the first Pagosonline filtered by the transaccion_id column
 * @method Pagosonline findOneByUsuarioId(int $usuario_id) Return the first Pagosonline filtered by the usuario_id column
 * @method Pagosonline findOneByBancoId(int $banco_id) Return the first Pagosonline filtered by the banco_id column
 * @method Pagosonline findOneByMedioPagoId(int $medio_pago_id) Return the first Pagosonline filtered by the medio_pago_id column
 * @method Pagosonline findOneByComisionPol(string $comision_pol) Return the first Pagosonline filtered by the comision_pol column
 * @method Pagosonline findOneByEstadoTransaccion(string $estado_transaccion) Return the first Pagosonline filtered by the estado_transaccion column
 * @method Pagosonline findOneByTransaccionBancoId(int $transaccion_banco_id) Return the first Pagosonline filtered by the transaccion_banco_id column
 * @method Pagosonline findOneByCodigoAutorizacion(string $codigo_autorizacion) Return the first Pagosonline filtered by the codigo_autorizacion column
 * @method Pagosonline findOneByEmailComprador(string $email_comprador) Return the first Pagosonline filtered by the email_comprador column
 * @method Pagosonline findOneByNicknameComprador(string $nickname_comprador) Return the first Pagosonline filtered by the nickname_comprador column
 * @method Pagosonline findOneByNicknameVendedor(string $nickname_vendedor) Return the first Pagosonline filtered by the nickname_vendedor column
 * @method Pagosonline findOneByDescripcion(string $descripcion) Return the first Pagosonline filtered by the descripcion column
 * @method Pagosonline findOneByIntentos(int $intentos) Return the first Pagosonline filtered by the intentos column
 * @method Pagosonline findOneByCicloPse(string $ciclo_pse) Return the first Pagosonline filtered by the ciclo_pse column
 * @method Pagosonline findOneByFecha(string $fecha) Return the first Pagosonline filtered by the fecha column
 * @method Pagosonline findOneByMoneda(string $moneda) Return the first Pagosonline filtered by the moneda column
 * @method Pagosonline findOneByMensajeRespuestaPol(string $mensaje_respuesta_pol) Return the first Pagosonline filtered by the mensaje_respuesta_pol column
 * @method Pagosonline findOneByMensajeErrorBanco(string $mensaje_error_banco) Return the first Pagosonline filtered by the mensaje_error_banco column
 * @method Pagosonline findOneByCodigoErrorBanco(string $codigo_error_banco) Return the first Pagosonline filtered by the codigo_error_banco column
 * @method Pagosonline findOneByTasaCambio(string $tasa_cambio) Return the first Pagosonline filtered by the tasa_cambio column
 * @method Pagosonline findOneByIp(string $ip) Return the first Pagosonline filtered by the ip column
 * @method Pagosonline findOneByNumeroCliente(int $numero_cliente) Return the first Pagosonline filtered by the numero_cliente column
 * @method Pagosonline findOneByPagoRecurrente(int $pago_recurrente) Return the first Pagosonline filtered by the pago_recurrente column
 * @method Pagosonline findOneByNumeroVisible(string $numero_visible) Return the first Pagosonline filtered by the numero_visible column
 * @method Pagosonline findOneByTarjetaHabiente(string $tarjeta_habiente) Return the first Pagosonline filtered by the tarjeta_habiente column
 * @method Pagosonline findOneByFranquicia(string $franquicia) Return the first Pagosonline filtered by the franquicia column
 * @method Pagosonline findOneByDireccionCobro(string $direccion_cobro) Return the first Pagosonline filtered by the direccion_cobro column
 * @method Pagosonline findOneByCiudadCobro(string $ciudad_cobro) Return the first Pagosonline filtered by the ciudad_cobro column
 * @method Pagosonline findOneByDireccionEnvio(string $direccion_envio) Return the first Pagosonline filtered by the direccion_envio column
 * @method Pagosonline findOneByCiudadEnvio(string $ciudad_envio) Return the first Pagosonline filtered by the ciudad_envio column
 * @method Pagosonline findOneByTelefono(string $telefono) Return the first Pagosonline filtered by the telefono column
 * @method Pagosonline findOneByTelefonoOficina(string $telefono_oficina) Return the first Pagosonline filtered by the telefono_oficina column
 * @method Pagosonline findOneByPaisEnvio(string $pais_envio) Return the first Pagosonline filtered by the pais_envio column
 * @method Pagosonline findOneByPaisCobro(string $pais_cobro) Return the first Pagosonline filtered by the pais_cobro column
 * @method Pagosonline findOneByPseReferenciaUno(string $pse_referencia_uno) Return the first Pagosonline filtered by the pse_referencia_uno column
 * @method Pagosonline findOneByPseReferenciaDos(string $pse_referencia_dos) Return the first Pagosonline filtered by the pse_referencia_dos column
 * @method Pagosonline findOneByPseReferenciaTres(string $pse_referencia_tres) Return the first Pagosonline filtered by the pse_referencia_tres column
 *
 * @method array findByPagosonlineId(int $pagosonline_id) Return Pagosonline objects filtered by the pagosonline_id column
 * @method array findByOrderId(int $order_id) Return Pagosonline objects filtered by the order_id column
 * @method array findByEstadoPol(int $estado_pol) Return Pagosonline objects filtered by the estado_pol column
 * @method array findByRiesgo(int $riesgo) Return Pagosonline objects filtered by the riesgo column
 * @method array findByCodigoRespuestaPol(int $codigo_respuesta_pol) Return Pagosonline objects filtered by the codigo_respuesta_pol column
 * @method array findByRefPol(int $ref_pol) Return Pagosonline objects filtered by the ref_pol column
 * @method array findByExtraUno(string $extra_uno) Return Pagosonline objects filtered by the extra_uno column
 * @method array findByExtraDos(string $extra_dos) Return Pagosonline objects filtered by the extra_dos column
 * @method array findByMedioPago(int $medio_pago) Return Pagosonline objects filtered by the medio_pago column
 * @method array findByTipoMedioPago(string $tipo_medio_pago) Return Pagosonline objects filtered by the tipo_medio_pago column
 * @method array findByCuotas(int $cuotas) Return Pagosonline objects filtered by the cuotas column
 * @method array findByValor(string $valor) Return Pagosonline objects filtered by the valor column
 * @method array findByIva(string $iva) Return Pagosonline objects filtered by the iva column
 * @method array findByValorAdicional(string $valor_adicional) Return Pagosonline objects filtered by the valor_adicional column
 * @method array findByFechaTransaccion(string $fecha_transaccion) Return Pagosonline objects filtered by the fecha_transaccion column
 * @method array findByCus(int $cus) Return Pagosonline objects filtered by the cus column
 * @method array findByBancoPse(string $banco_pse) Return Pagosonline objects filtered by the banco_pse column
 * @method array findByTransaccionId(int $transaccion_id) Return Pagosonline objects filtered by the transaccion_id column
 * @method array findByUsuarioId(int $usuario_id) Return Pagosonline objects filtered by the usuario_id column
 * @method array findByBancoId(int $banco_id) Return Pagosonline objects filtered by the banco_id column
 * @method array findByMedioPagoId(int $medio_pago_id) Return Pagosonline objects filtered by the medio_pago_id column
 * @method array findByComisionPol(string $comision_pol) Return Pagosonline objects filtered by the comision_pol column
 * @method array findByEstadoTransaccion(string $estado_transaccion) Return Pagosonline objects filtered by the estado_transaccion column
 * @method array findByTransaccionBancoId(int $transaccion_banco_id) Return Pagosonline objects filtered by the transaccion_banco_id column
 * @method array findByCodigoAutorizacion(string $codigo_autorizacion) Return Pagosonline objects filtered by the codigo_autorizacion column
 * @method array findByEmailComprador(string $email_comprador) Return Pagosonline objects filtered by the email_comprador column
 * @method array findByNicknameComprador(string $nickname_comprador) Return Pagosonline objects filtered by the nickname_comprador column
 * @method array findByNicknameVendedor(string $nickname_vendedor) Return Pagosonline objects filtered by the nickname_vendedor column
 * @method array findByDescripcion(string $descripcion) Return Pagosonline objects filtered by the descripcion column
 * @method array findByIntentos(int $intentos) Return Pagosonline objects filtered by the intentos column
 * @method array findByCicloPse(string $ciclo_pse) Return Pagosonline objects filtered by the ciclo_pse column
 * @method array findByFecha(string $fecha) Return Pagosonline objects filtered by the fecha column
 * @method array findByMoneda(string $moneda) Return Pagosonline objects filtered by the moneda column
 * @method array findByMensajeRespuestaPol(string $mensaje_respuesta_pol) Return Pagosonline objects filtered by the mensaje_respuesta_pol column
 * @method array findByMensajeErrorBanco(string $mensaje_error_banco) Return Pagosonline objects filtered by the mensaje_error_banco column
 * @method array findByCodigoErrorBanco(string $codigo_error_banco) Return Pagosonline objects filtered by the codigo_error_banco column
 * @method array findByTasaCambio(string $tasa_cambio) Return Pagosonline objects filtered by the tasa_cambio column
 * @method array findByIp(string $ip) Return Pagosonline objects filtered by the ip column
 * @method array findByNumeroCliente(int $numero_cliente) Return Pagosonline objects filtered by the numero_cliente column
 * @method array findByPagoRecurrente(int $pago_recurrente) Return Pagosonline objects filtered by the pago_recurrente column
 * @method array findByNumeroVisible(string $numero_visible) Return Pagosonline objects filtered by the numero_visible column
 * @method array findByTarjetaHabiente(string $tarjeta_habiente) Return Pagosonline objects filtered by the tarjeta_habiente column
 * @method array findByFranquicia(string $franquicia) Return Pagosonline objects filtered by the franquicia column
 * @method array findByDireccionCobro(string $direccion_cobro) Return Pagosonline objects filtered by the direccion_cobro column
 * @method array findByCiudadCobro(string $ciudad_cobro) Return Pagosonline objects filtered by the ciudad_cobro column
 * @method array findByDireccionEnvio(string $direccion_envio) Return Pagosonline objects filtered by the direccion_envio column
 * @method array findByCiudadEnvio(string $ciudad_envio) Return Pagosonline objects filtered by the ciudad_envio column
 * @method array findByTelefono(string $telefono) Return Pagosonline objects filtered by the telefono column
 * @method array findByTelefonoOficina(string $telefono_oficina) Return Pagosonline objects filtered by the telefono_oficina column
 * @method array findByPaisEnvio(string $pais_envio) Return Pagosonline objects filtered by the pais_envio column
 * @method array findByPaisCobro(string $pais_cobro) Return Pagosonline objects filtered by the pais_cobro column
 * @method array findByPseReferenciaUno(string $pse_referencia_uno) Return Pagosonline objects filtered by the pse_referencia_uno column
 * @method array findByPseReferenciaDos(string $pse_referencia_dos) Return Pagosonline objects filtered by the pse_referencia_dos column
 * @method array findByPseReferenciaTres(string $pse_referencia_tres) Return Pagosonline objects filtered by the pse_referencia_tres column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BasePagosonlineQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePagosonlineQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'atmadmin';
        }
        if (null === $modelName) {
            $modelName = 'Pagosonline';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PagosonlineQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PagosonlineQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PagosonlineQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PagosonlineQuery) {
            return $criteria;
        }
        $query = new PagosonlineQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Pagosonline|Pagosonline[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PagosonlinePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PagosonlinePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Pagosonline A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByPagosonlineId($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Pagosonline A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT pagosonline_id, order_id, estado_pol, riesgo, codigo_respuesta_pol, ref_pol, extra_uno, extra_dos, medio_pago, tipo_medio_pago, cuotas, valor, iva, valor_adicional, fecha_transaccion, cus, banco_pse, transaccion_id, usuario_id, banco_id, medio_pago_id, comision_pol, estado_transaccion, transaccion_banco_id, codigo_autorizacion, email_comprador, nickname_comprador, nickname_vendedor, descripcion, intentos, ciclo_pse, fecha, moneda, mensaje_respuesta_pol, mensaje_error_banco, codigo_error_banco, tasa_cambio, ip, numero_cliente, pago_recurrente, numero_visible, tarjeta_habiente, franquicia, direccion_cobro, ciudad_cobro, direccion_envio, ciudad_envio, telefono, telefono_oficina, pais_envio, pais_cobro, pse_referencia_uno, pse_referencia_dos, pse_referencia_tres FROM pagosonline WHERE pagosonline_id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Pagosonline();
            $obj->hydrate($row);
            PagosonlinePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Pagosonline|Pagosonline[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Pagosonline[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PagosonlinePeer::PAGOSONLINE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PagosonlinePeer::PAGOSONLINE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the pagosonline_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPagosonlineId(1234); // WHERE pagosonline_id = 1234
     * $query->filterByPagosonlineId(array(12, 34)); // WHERE pagosonline_id IN (12, 34)
     * $query->filterByPagosonlineId(array('min' => 12)); // WHERE pagosonline_id >= 12
     * $query->filterByPagosonlineId(array('max' => 12)); // WHERE pagosonline_id <= 12
     * </code>
     *
     * @param     mixed $pagosonlineId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByPagosonlineId($pagosonlineId = null, $comparison = null)
    {
        if (is_array($pagosonlineId)) {
            $useMinMax = false;
            if (isset($pagosonlineId['min'])) {
                $this->addUsingAlias(PagosonlinePeer::PAGOSONLINE_ID, $pagosonlineId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pagosonlineId['max'])) {
                $this->addUsingAlias(PagosonlinePeer::PAGOSONLINE_ID, $pagosonlineId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::PAGOSONLINE_ID, $pagosonlineId, $comparison);
    }

    /**
     * Filter the query on the order_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderId(1234); // WHERE order_id = 1234
     * $query->filterByOrderId(array(12, 34)); // WHERE order_id IN (12, 34)
     * $query->filterByOrderId(array('min' => 12)); // WHERE order_id >= 12
     * $query->filterByOrderId(array('max' => 12)); // WHERE order_id <= 12
     * </code>
     *
     * @param     mixed $orderId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByOrderId($orderId = null, $comparison = null)
    {
        if (is_array($orderId)) {
            $useMinMax = false;
            if (isset($orderId['min'])) {
                $this->addUsingAlias(PagosonlinePeer::ORDER_ID, $orderId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($orderId['max'])) {
                $this->addUsingAlias(PagosonlinePeer::ORDER_ID, $orderId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::ORDER_ID, $orderId, $comparison);
    }

    /**
     * Filter the query on the estado_pol column
     *
     * Example usage:
     * <code>
     * $query->filterByEstadoPol(1234); // WHERE estado_pol = 1234
     * $query->filterByEstadoPol(array(12, 34)); // WHERE estado_pol IN (12, 34)
     * $query->filterByEstadoPol(array('min' => 12)); // WHERE estado_pol >= 12
     * $query->filterByEstadoPol(array('max' => 12)); // WHERE estado_pol <= 12
     * </code>
     *
     * @param     mixed $estadoPol The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByEstadoPol($estadoPol = null, $comparison = null)
    {
        if (is_array($estadoPol)) {
            $useMinMax = false;
            if (isset($estadoPol['min'])) {
                $this->addUsingAlias(PagosonlinePeer::ESTADO_POL, $estadoPol['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estadoPol['max'])) {
                $this->addUsingAlias(PagosonlinePeer::ESTADO_POL, $estadoPol['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::ESTADO_POL, $estadoPol, $comparison);
    }

    /**
     * Filter the query on the riesgo column
     *
     * Example usage:
     * <code>
     * $query->filterByRiesgo(1234); // WHERE riesgo = 1234
     * $query->filterByRiesgo(array(12, 34)); // WHERE riesgo IN (12, 34)
     * $query->filterByRiesgo(array('min' => 12)); // WHERE riesgo >= 12
     * $query->filterByRiesgo(array('max' => 12)); // WHERE riesgo <= 12
     * </code>
     *
     * @param     mixed $riesgo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByRiesgo($riesgo = null, $comparison = null)
    {
        if (is_array($riesgo)) {
            $useMinMax = false;
            if (isset($riesgo['min'])) {
                $this->addUsingAlias(PagosonlinePeer::RIESGO, $riesgo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($riesgo['max'])) {
                $this->addUsingAlias(PagosonlinePeer::RIESGO, $riesgo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::RIESGO, $riesgo, $comparison);
    }

    /**
     * Filter the query on the codigo_respuesta_pol column
     *
     * Example usage:
     * <code>
     * $query->filterByCodigoRespuestaPol(1234); // WHERE codigo_respuesta_pol = 1234
     * $query->filterByCodigoRespuestaPol(array(12, 34)); // WHERE codigo_respuesta_pol IN (12, 34)
     * $query->filterByCodigoRespuestaPol(array('min' => 12)); // WHERE codigo_respuesta_pol >= 12
     * $query->filterByCodigoRespuestaPol(array('max' => 12)); // WHERE codigo_respuesta_pol <= 12
     * </code>
     *
     * @param     mixed $codigoRespuestaPol The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByCodigoRespuestaPol($codigoRespuestaPol = null, $comparison = null)
    {
        if (is_array($codigoRespuestaPol)) {
            $useMinMax = false;
            if (isset($codigoRespuestaPol['min'])) {
                $this->addUsingAlias(PagosonlinePeer::CODIGO_RESPUESTA_POL, $codigoRespuestaPol['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($codigoRespuestaPol['max'])) {
                $this->addUsingAlias(PagosonlinePeer::CODIGO_RESPUESTA_POL, $codigoRespuestaPol['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::CODIGO_RESPUESTA_POL, $codigoRespuestaPol, $comparison);
    }

    /**
     * Filter the query on the ref_pol column
     *
     * Example usage:
     * <code>
     * $query->filterByRefPol(1234); // WHERE ref_pol = 1234
     * $query->filterByRefPol(array(12, 34)); // WHERE ref_pol IN (12, 34)
     * $query->filterByRefPol(array('min' => 12)); // WHERE ref_pol >= 12
     * $query->filterByRefPol(array('max' => 12)); // WHERE ref_pol <= 12
     * </code>
     *
     * @param     mixed $refPol The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByRefPol($refPol = null, $comparison = null)
    {
        if (is_array($refPol)) {
            $useMinMax = false;
            if (isset($refPol['min'])) {
                $this->addUsingAlias(PagosonlinePeer::REF_POL, $refPol['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refPol['max'])) {
                $this->addUsingAlias(PagosonlinePeer::REF_POL, $refPol['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::REF_POL, $refPol, $comparison);
    }

    /**
     * Filter the query on the extra_uno column
     *
     * Example usage:
     * <code>
     * $query->filterByExtraUno('fooValue');   // WHERE extra_uno = 'fooValue'
     * $query->filterByExtraUno('%fooValue%'); // WHERE extra_uno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extraUno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByExtraUno($extraUno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extraUno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $extraUno)) {
                $extraUno = str_replace('*', '%', $extraUno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::EXTRA_UNO, $extraUno, $comparison);
    }

    /**
     * Filter the query on the extra_dos column
     *
     * Example usage:
     * <code>
     * $query->filterByExtraDos('fooValue');   // WHERE extra_dos = 'fooValue'
     * $query->filterByExtraDos('%fooValue%'); // WHERE extra_dos LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extraDos The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByExtraDos($extraDos = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extraDos)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $extraDos)) {
                $extraDos = str_replace('*', '%', $extraDos);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::EXTRA_DOS, $extraDos, $comparison);
    }

    /**
     * Filter the query on the medio_pago column
     *
     * Example usage:
     * <code>
     * $query->filterByMedioPago(1234); // WHERE medio_pago = 1234
     * $query->filterByMedioPago(array(12, 34)); // WHERE medio_pago IN (12, 34)
     * $query->filterByMedioPago(array('min' => 12)); // WHERE medio_pago >= 12
     * $query->filterByMedioPago(array('max' => 12)); // WHERE medio_pago <= 12
     * </code>
     *
     * @param     mixed $medioPago The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByMedioPago($medioPago = null, $comparison = null)
    {
        if (is_array($medioPago)) {
            $useMinMax = false;
            if (isset($medioPago['min'])) {
                $this->addUsingAlias(PagosonlinePeer::MEDIO_PAGO, $medioPago['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($medioPago['max'])) {
                $this->addUsingAlias(PagosonlinePeer::MEDIO_PAGO, $medioPago['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::MEDIO_PAGO, $medioPago, $comparison);
    }

    /**
     * Filter the query on the tipo_medio_pago column
     *
     * Example usage:
     * <code>
     * $query->filterByTipoMedioPago('fooValue');   // WHERE tipo_medio_pago = 'fooValue'
     * $query->filterByTipoMedioPago('%fooValue%'); // WHERE tipo_medio_pago LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tipoMedioPago The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByTipoMedioPago($tipoMedioPago = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tipoMedioPago)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tipoMedioPago)) {
                $tipoMedioPago = str_replace('*', '%', $tipoMedioPago);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::TIPO_MEDIO_PAGO, $tipoMedioPago, $comparison);
    }

    /**
     * Filter the query on the cuotas column
     *
     * Example usage:
     * <code>
     * $query->filterByCuotas(1234); // WHERE cuotas = 1234
     * $query->filterByCuotas(array(12, 34)); // WHERE cuotas IN (12, 34)
     * $query->filterByCuotas(array('min' => 12)); // WHERE cuotas >= 12
     * $query->filterByCuotas(array('max' => 12)); // WHERE cuotas <= 12
     * </code>
     *
     * @param     mixed $cuotas The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByCuotas($cuotas = null, $comparison = null)
    {
        if (is_array($cuotas)) {
            $useMinMax = false;
            if (isset($cuotas['min'])) {
                $this->addUsingAlias(PagosonlinePeer::CUOTAS, $cuotas['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cuotas['max'])) {
                $this->addUsingAlias(PagosonlinePeer::CUOTAS, $cuotas['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::CUOTAS, $cuotas, $comparison);
    }

    /**
     * Filter the query on the valor column
     *
     * Example usage:
     * <code>
     * $query->filterByValor(1234); // WHERE valor = 1234
     * $query->filterByValor(array(12, 34)); // WHERE valor IN (12, 34)
     * $query->filterByValor(array('min' => 12)); // WHERE valor >= 12
     * $query->filterByValor(array('max' => 12)); // WHERE valor <= 12
     * </code>
     *
     * @param     mixed $valor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByValor($valor = null, $comparison = null)
    {
        if (is_array($valor)) {
            $useMinMax = false;
            if (isset($valor['min'])) {
                $this->addUsingAlias(PagosonlinePeer::VALOR, $valor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valor['max'])) {
                $this->addUsingAlias(PagosonlinePeer::VALOR, $valor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::VALOR, $valor, $comparison);
    }

    /**
     * Filter the query on the iva column
     *
     * Example usage:
     * <code>
     * $query->filterByIva(1234); // WHERE iva = 1234
     * $query->filterByIva(array(12, 34)); // WHERE iva IN (12, 34)
     * $query->filterByIva(array('min' => 12)); // WHERE iva >= 12
     * $query->filterByIva(array('max' => 12)); // WHERE iva <= 12
     * </code>
     *
     * @param     mixed $iva The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByIva($iva = null, $comparison = null)
    {
        if (is_array($iva)) {
            $useMinMax = false;
            if (isset($iva['min'])) {
                $this->addUsingAlias(PagosonlinePeer::IVA, $iva['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iva['max'])) {
                $this->addUsingAlias(PagosonlinePeer::IVA, $iva['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::IVA, $iva, $comparison);
    }

    /**
     * Filter the query on the valor_adicional column
     *
     * Example usage:
     * <code>
     * $query->filterByValorAdicional(1234); // WHERE valor_adicional = 1234
     * $query->filterByValorAdicional(array(12, 34)); // WHERE valor_adicional IN (12, 34)
     * $query->filterByValorAdicional(array('min' => 12)); // WHERE valor_adicional >= 12
     * $query->filterByValorAdicional(array('max' => 12)); // WHERE valor_adicional <= 12
     * </code>
     *
     * @param     mixed $valorAdicional The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByValorAdicional($valorAdicional = null, $comparison = null)
    {
        if (is_array($valorAdicional)) {
            $useMinMax = false;
            if (isset($valorAdicional['min'])) {
                $this->addUsingAlias(PagosonlinePeer::VALOR_ADICIONAL, $valorAdicional['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valorAdicional['max'])) {
                $this->addUsingAlias(PagosonlinePeer::VALOR_ADICIONAL, $valorAdicional['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::VALOR_ADICIONAL, $valorAdicional, $comparison);
    }

    /**
     * Filter the query on the fecha_transaccion column
     *
     * Example usage:
     * <code>
     * $query->filterByFechaTransaccion('2011-03-14'); // WHERE fecha_transaccion = '2011-03-14'
     * $query->filterByFechaTransaccion('now'); // WHERE fecha_transaccion = '2011-03-14'
     * $query->filterByFechaTransaccion(array('max' => 'yesterday')); // WHERE fecha_transaccion < '2011-03-13'
     * </code>
     *
     * @param     mixed $fechaTransaccion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByFechaTransaccion($fechaTransaccion = null, $comparison = null)
    {
        if (is_array($fechaTransaccion)) {
            $useMinMax = false;
            if (isset($fechaTransaccion['min'])) {
                $this->addUsingAlias(PagosonlinePeer::FECHA_TRANSACCION, $fechaTransaccion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechaTransaccion['max'])) {
                $this->addUsingAlias(PagosonlinePeer::FECHA_TRANSACCION, $fechaTransaccion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::FECHA_TRANSACCION, $fechaTransaccion, $comparison);
    }

    /**
     * Filter the query on the cus column
     *
     * Example usage:
     * <code>
     * $query->filterByCus(1234); // WHERE cus = 1234
     * $query->filterByCus(array(12, 34)); // WHERE cus IN (12, 34)
     * $query->filterByCus(array('min' => 12)); // WHERE cus >= 12
     * $query->filterByCus(array('max' => 12)); // WHERE cus <= 12
     * </code>
     *
     * @param     mixed $cus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByCus($cus = null, $comparison = null)
    {
        if (is_array($cus)) {
            $useMinMax = false;
            if (isset($cus['min'])) {
                $this->addUsingAlias(PagosonlinePeer::CUS, $cus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cus['max'])) {
                $this->addUsingAlias(PagosonlinePeer::CUS, $cus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::CUS, $cus, $comparison);
    }

    /**
     * Filter the query on the banco_pse column
     *
     * Example usage:
     * <code>
     * $query->filterByBancoPse('fooValue');   // WHERE banco_pse = 'fooValue'
     * $query->filterByBancoPse('%fooValue%'); // WHERE banco_pse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bancoPse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByBancoPse($bancoPse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bancoPse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bancoPse)) {
                $bancoPse = str_replace('*', '%', $bancoPse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::BANCO_PSE, $bancoPse, $comparison);
    }

    /**
     * Filter the query on the transaccion_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTransaccionId(1234); // WHERE transaccion_id = 1234
     * $query->filterByTransaccionId(array(12, 34)); // WHERE transaccion_id IN (12, 34)
     * $query->filterByTransaccionId(array('min' => 12)); // WHERE transaccion_id >= 12
     * $query->filterByTransaccionId(array('max' => 12)); // WHERE transaccion_id <= 12
     * </code>
     *
     * @param     mixed $transaccionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByTransaccionId($transaccionId = null, $comparison = null)
    {
        if (is_array($transaccionId)) {
            $useMinMax = false;
            if (isset($transaccionId['min'])) {
                $this->addUsingAlias(PagosonlinePeer::TRANSACCION_ID, $transaccionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($transaccionId['max'])) {
                $this->addUsingAlias(PagosonlinePeer::TRANSACCION_ID, $transaccionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::TRANSACCION_ID, $transaccionId, $comparison);
    }

    /**
     * Filter the query on the usuario_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuarioId(1234); // WHERE usuario_id = 1234
     * $query->filterByUsuarioId(array(12, 34)); // WHERE usuario_id IN (12, 34)
     * $query->filterByUsuarioId(array('min' => 12)); // WHERE usuario_id >= 12
     * $query->filterByUsuarioId(array('max' => 12)); // WHERE usuario_id <= 12
     * </code>
     *
     * @param     mixed $usuarioId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByUsuarioId($usuarioId = null, $comparison = null)
    {
        if (is_array($usuarioId)) {
            $useMinMax = false;
            if (isset($usuarioId['min'])) {
                $this->addUsingAlias(PagosonlinePeer::USUARIO_ID, $usuarioId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usuarioId['max'])) {
                $this->addUsingAlias(PagosonlinePeer::USUARIO_ID, $usuarioId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::USUARIO_ID, $usuarioId, $comparison);
    }

    /**
     * Filter the query on the banco_id column
     *
     * Example usage:
     * <code>
     * $query->filterByBancoId(1234); // WHERE banco_id = 1234
     * $query->filterByBancoId(array(12, 34)); // WHERE banco_id IN (12, 34)
     * $query->filterByBancoId(array('min' => 12)); // WHERE banco_id >= 12
     * $query->filterByBancoId(array('max' => 12)); // WHERE banco_id <= 12
     * </code>
     *
     * @param     mixed $bancoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByBancoId($bancoId = null, $comparison = null)
    {
        if (is_array($bancoId)) {
            $useMinMax = false;
            if (isset($bancoId['min'])) {
                $this->addUsingAlias(PagosonlinePeer::BANCO_ID, $bancoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bancoId['max'])) {
                $this->addUsingAlias(PagosonlinePeer::BANCO_ID, $bancoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::BANCO_ID, $bancoId, $comparison);
    }

    /**
     * Filter the query on the medio_pago_id column
     *
     * Example usage:
     * <code>
     * $query->filterByMedioPagoId(1234); // WHERE medio_pago_id = 1234
     * $query->filterByMedioPagoId(array(12, 34)); // WHERE medio_pago_id IN (12, 34)
     * $query->filterByMedioPagoId(array('min' => 12)); // WHERE medio_pago_id >= 12
     * $query->filterByMedioPagoId(array('max' => 12)); // WHERE medio_pago_id <= 12
     * </code>
     *
     * @param     mixed $medioPagoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByMedioPagoId($medioPagoId = null, $comparison = null)
    {
        if (is_array($medioPagoId)) {
            $useMinMax = false;
            if (isset($medioPagoId['min'])) {
                $this->addUsingAlias(PagosonlinePeer::MEDIO_PAGO_ID, $medioPagoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($medioPagoId['max'])) {
                $this->addUsingAlias(PagosonlinePeer::MEDIO_PAGO_ID, $medioPagoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::MEDIO_PAGO_ID, $medioPagoId, $comparison);
    }

    /**
     * Filter the query on the comision_pol column
     *
     * Example usage:
     * <code>
     * $query->filterByComisionPol('fooValue');   // WHERE comision_pol = 'fooValue'
     * $query->filterByComisionPol('%fooValue%'); // WHERE comision_pol LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comisionPol The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByComisionPol($comisionPol = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comisionPol)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comisionPol)) {
                $comisionPol = str_replace('*', '%', $comisionPol);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::COMISION_POL, $comisionPol, $comparison);
    }

    /**
     * Filter the query on the estado_transaccion column
     *
     * Example usage:
     * <code>
     * $query->filterByEstadoTransaccion('fooValue');   // WHERE estado_transaccion = 'fooValue'
     * $query->filterByEstadoTransaccion('%fooValue%'); // WHERE estado_transaccion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $estadoTransaccion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByEstadoTransaccion($estadoTransaccion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($estadoTransaccion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $estadoTransaccion)) {
                $estadoTransaccion = str_replace('*', '%', $estadoTransaccion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::ESTADO_TRANSACCION, $estadoTransaccion, $comparison);
    }

    /**
     * Filter the query on the transaccion_banco_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTransaccionBancoId(1234); // WHERE transaccion_banco_id = 1234
     * $query->filterByTransaccionBancoId(array(12, 34)); // WHERE transaccion_banco_id IN (12, 34)
     * $query->filterByTransaccionBancoId(array('min' => 12)); // WHERE transaccion_banco_id >= 12
     * $query->filterByTransaccionBancoId(array('max' => 12)); // WHERE transaccion_banco_id <= 12
     * </code>
     *
     * @param     mixed $transaccionBancoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByTransaccionBancoId($transaccionBancoId = null, $comparison = null)
    {
        if (is_array($transaccionBancoId)) {
            $useMinMax = false;
            if (isset($transaccionBancoId['min'])) {
                $this->addUsingAlias(PagosonlinePeer::TRANSACCION_BANCO_ID, $transaccionBancoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($transaccionBancoId['max'])) {
                $this->addUsingAlias(PagosonlinePeer::TRANSACCION_BANCO_ID, $transaccionBancoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::TRANSACCION_BANCO_ID, $transaccionBancoId, $comparison);
    }

    /**
     * Filter the query on the codigo_autorizacion column
     *
     * Example usage:
     * <code>
     * $query->filterByCodigoAutorizacion('fooValue');   // WHERE codigo_autorizacion = 'fooValue'
     * $query->filterByCodigoAutorizacion('%fooValue%'); // WHERE codigo_autorizacion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codigoAutorizacion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByCodigoAutorizacion($codigoAutorizacion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codigoAutorizacion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codigoAutorizacion)) {
                $codigoAutorizacion = str_replace('*', '%', $codigoAutorizacion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::CODIGO_AUTORIZACION, $codigoAutorizacion, $comparison);
    }

    /**
     * Filter the query on the email_comprador column
     *
     * Example usage:
     * <code>
     * $query->filterByEmailComprador('fooValue');   // WHERE email_comprador = 'fooValue'
     * $query->filterByEmailComprador('%fooValue%'); // WHERE email_comprador LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emailComprador The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByEmailComprador($emailComprador = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emailComprador)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emailComprador)) {
                $emailComprador = str_replace('*', '%', $emailComprador);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::EMAIL_COMPRADOR, $emailComprador, $comparison);
    }

    /**
     * Filter the query on the nickname_comprador column
     *
     * Example usage:
     * <code>
     * $query->filterByNicknameComprador('fooValue');   // WHERE nickname_comprador = 'fooValue'
     * $query->filterByNicknameComprador('%fooValue%'); // WHERE nickname_comprador LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nicknameComprador The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByNicknameComprador($nicknameComprador = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nicknameComprador)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nicknameComprador)) {
                $nicknameComprador = str_replace('*', '%', $nicknameComprador);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::NICKNAME_COMPRADOR, $nicknameComprador, $comparison);
    }

    /**
     * Filter the query on the nickname_vendedor column
     *
     * Example usage:
     * <code>
     * $query->filterByNicknameVendedor('fooValue');   // WHERE nickname_vendedor = 'fooValue'
     * $query->filterByNicknameVendedor('%fooValue%'); // WHERE nickname_vendedor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nicknameVendedor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByNicknameVendedor($nicknameVendedor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nicknameVendedor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nicknameVendedor)) {
                $nicknameVendedor = str_replace('*', '%', $nicknameVendedor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::NICKNAME_VENDEDOR, $nicknameVendedor, $comparison);
    }

    /**
     * Filter the query on the descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByDescripcion('fooValue');   // WHERE descripcion = 'fooValue'
     * $query->filterByDescripcion('%fooValue%'); // WHERE descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByDescripcion($descripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descripcion)) {
                $descripcion = str_replace('*', '%', $descripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::DESCRIPCION, $descripcion, $comparison);
    }

    /**
     * Filter the query on the intentos column
     *
     * Example usage:
     * <code>
     * $query->filterByIntentos(1234); // WHERE intentos = 1234
     * $query->filterByIntentos(array(12, 34)); // WHERE intentos IN (12, 34)
     * $query->filterByIntentos(array('min' => 12)); // WHERE intentos >= 12
     * $query->filterByIntentos(array('max' => 12)); // WHERE intentos <= 12
     * </code>
     *
     * @param     mixed $intentos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByIntentos($intentos = null, $comparison = null)
    {
        if (is_array($intentos)) {
            $useMinMax = false;
            if (isset($intentos['min'])) {
                $this->addUsingAlias(PagosonlinePeer::INTENTOS, $intentos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intentos['max'])) {
                $this->addUsingAlias(PagosonlinePeer::INTENTOS, $intentos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::INTENTOS, $intentos, $comparison);
    }

    /**
     * Filter the query on the ciclo_pse column
     *
     * Example usage:
     * <code>
     * $query->filterByCicloPse('fooValue');   // WHERE ciclo_pse = 'fooValue'
     * $query->filterByCicloPse('%fooValue%'); // WHERE ciclo_pse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cicloPse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByCicloPse($cicloPse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cicloPse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cicloPse)) {
                $cicloPse = str_replace('*', '%', $cicloPse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::CICLO_PSE, $cicloPse, $comparison);
    }

    /**
     * Filter the query on the fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByFecha('2011-03-14'); // WHERE fecha = '2011-03-14'
     * $query->filterByFecha('now'); // WHERE fecha = '2011-03-14'
     * $query->filterByFecha(array('max' => 'yesterday')); // WHERE fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $fecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByFecha($fecha = null, $comparison = null)
    {
        if (is_array($fecha)) {
            $useMinMax = false;
            if (isset($fecha['min'])) {
                $this->addUsingAlias(PagosonlinePeer::FECHA, $fecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecha['max'])) {
                $this->addUsingAlias(PagosonlinePeer::FECHA, $fecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::FECHA, $fecha, $comparison);
    }

    /**
     * Filter the query on the moneda column
     *
     * Example usage:
     * <code>
     * $query->filterByMoneda('fooValue');   // WHERE moneda = 'fooValue'
     * $query->filterByMoneda('%fooValue%'); // WHERE moneda LIKE '%fooValue%'
     * </code>
     *
     * @param     string $moneda The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByMoneda($moneda = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($moneda)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $moneda)) {
                $moneda = str_replace('*', '%', $moneda);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::MONEDA, $moneda, $comparison);
    }

    /**
     * Filter the query on the mensaje_respuesta_pol column
     *
     * Example usage:
     * <code>
     * $query->filterByMensajeRespuestaPol('fooValue');   // WHERE mensaje_respuesta_pol = 'fooValue'
     * $query->filterByMensajeRespuestaPol('%fooValue%'); // WHERE mensaje_respuesta_pol LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mensajeRespuestaPol The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByMensajeRespuestaPol($mensajeRespuestaPol = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mensajeRespuestaPol)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mensajeRespuestaPol)) {
                $mensajeRespuestaPol = str_replace('*', '%', $mensajeRespuestaPol);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::MENSAJE_RESPUESTA_POL, $mensajeRespuestaPol, $comparison);
    }

    /**
     * Filter the query on the mensaje_error_banco column
     *
     * Example usage:
     * <code>
     * $query->filterByMensajeErrorBanco('fooValue');   // WHERE mensaje_error_banco = 'fooValue'
     * $query->filterByMensajeErrorBanco('%fooValue%'); // WHERE mensaje_error_banco LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mensajeErrorBanco The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByMensajeErrorBanco($mensajeErrorBanco = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mensajeErrorBanco)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mensajeErrorBanco)) {
                $mensajeErrorBanco = str_replace('*', '%', $mensajeErrorBanco);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::MENSAJE_ERROR_BANCO, $mensajeErrorBanco, $comparison);
    }

    /**
     * Filter the query on the codigo_error_banco column
     *
     * Example usage:
     * <code>
     * $query->filterByCodigoErrorBanco('fooValue');   // WHERE codigo_error_banco = 'fooValue'
     * $query->filterByCodigoErrorBanco('%fooValue%'); // WHERE codigo_error_banco LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codigoErrorBanco The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByCodigoErrorBanco($codigoErrorBanco = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codigoErrorBanco)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codigoErrorBanco)) {
                $codigoErrorBanco = str_replace('*', '%', $codigoErrorBanco);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::CODIGO_ERROR_BANCO, $codigoErrorBanco, $comparison);
    }

    /**
     * Filter the query on the tasa_cambio column
     *
     * Example usage:
     * <code>
     * $query->filterByTasaCambio(1234); // WHERE tasa_cambio = 1234
     * $query->filterByTasaCambio(array(12, 34)); // WHERE tasa_cambio IN (12, 34)
     * $query->filterByTasaCambio(array('min' => 12)); // WHERE tasa_cambio >= 12
     * $query->filterByTasaCambio(array('max' => 12)); // WHERE tasa_cambio <= 12
     * </code>
     *
     * @param     mixed $tasaCambio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByTasaCambio($tasaCambio = null, $comparison = null)
    {
        if (is_array($tasaCambio)) {
            $useMinMax = false;
            if (isset($tasaCambio['min'])) {
                $this->addUsingAlias(PagosonlinePeer::TASA_CAMBIO, $tasaCambio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tasaCambio['max'])) {
                $this->addUsingAlias(PagosonlinePeer::TASA_CAMBIO, $tasaCambio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::TASA_CAMBIO, $tasaCambio, $comparison);
    }

    /**
     * Filter the query on the ip column
     *
     * Example usage:
     * <code>
     * $query->filterByIp('fooValue');   // WHERE ip = 'fooValue'
     * $query->filterByIp('%fooValue%'); // WHERE ip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ip The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByIp($ip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ip)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ip)) {
                $ip = str_replace('*', '%', $ip);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::IP, $ip, $comparison);
    }

    /**
     * Filter the query on the numero_cliente column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroCliente(1234); // WHERE numero_cliente = 1234
     * $query->filterByNumeroCliente(array(12, 34)); // WHERE numero_cliente IN (12, 34)
     * $query->filterByNumeroCliente(array('min' => 12)); // WHERE numero_cliente >= 12
     * $query->filterByNumeroCliente(array('max' => 12)); // WHERE numero_cliente <= 12
     * </code>
     *
     * @param     mixed $numeroCliente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByNumeroCliente($numeroCliente = null, $comparison = null)
    {
        if (is_array($numeroCliente)) {
            $useMinMax = false;
            if (isset($numeroCliente['min'])) {
                $this->addUsingAlias(PagosonlinePeer::NUMERO_CLIENTE, $numeroCliente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numeroCliente['max'])) {
                $this->addUsingAlias(PagosonlinePeer::NUMERO_CLIENTE, $numeroCliente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::NUMERO_CLIENTE, $numeroCliente, $comparison);
    }

    /**
     * Filter the query on the pago_recurrente column
     *
     * Example usage:
     * <code>
     * $query->filterByPagoRecurrente(1234); // WHERE pago_recurrente = 1234
     * $query->filterByPagoRecurrente(array(12, 34)); // WHERE pago_recurrente IN (12, 34)
     * $query->filterByPagoRecurrente(array('min' => 12)); // WHERE pago_recurrente >= 12
     * $query->filterByPagoRecurrente(array('max' => 12)); // WHERE pago_recurrente <= 12
     * </code>
     *
     * @param     mixed $pagoRecurrente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByPagoRecurrente($pagoRecurrente = null, $comparison = null)
    {
        if (is_array($pagoRecurrente)) {
            $useMinMax = false;
            if (isset($pagoRecurrente['min'])) {
                $this->addUsingAlias(PagosonlinePeer::PAGO_RECURRENTE, $pagoRecurrente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pagoRecurrente['max'])) {
                $this->addUsingAlias(PagosonlinePeer::PAGO_RECURRENTE, $pagoRecurrente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::PAGO_RECURRENTE, $pagoRecurrente, $comparison);
    }

    /**
     * Filter the query on the numero_visible column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroVisible('fooValue');   // WHERE numero_visible = 'fooValue'
     * $query->filterByNumeroVisible('%fooValue%'); // WHERE numero_visible LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroVisible The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByNumeroVisible($numeroVisible = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroVisible)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroVisible)) {
                $numeroVisible = str_replace('*', '%', $numeroVisible);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::NUMERO_VISIBLE, $numeroVisible, $comparison);
    }

    /**
     * Filter the query on the tarjeta_habiente column
     *
     * Example usage:
     * <code>
     * $query->filterByTarjetaHabiente('fooValue');   // WHERE tarjeta_habiente = 'fooValue'
     * $query->filterByTarjetaHabiente('%fooValue%'); // WHERE tarjeta_habiente LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tarjetaHabiente The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByTarjetaHabiente($tarjetaHabiente = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tarjetaHabiente)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tarjetaHabiente)) {
                $tarjetaHabiente = str_replace('*', '%', $tarjetaHabiente);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::TARJETA_HABIENTE, $tarjetaHabiente, $comparison);
    }

    /**
     * Filter the query on the franquicia column
     *
     * Example usage:
     * <code>
     * $query->filterByFranquicia('fooValue');   // WHERE franquicia = 'fooValue'
     * $query->filterByFranquicia('%fooValue%'); // WHERE franquicia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $franquicia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByFranquicia($franquicia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($franquicia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $franquicia)) {
                $franquicia = str_replace('*', '%', $franquicia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::FRANQUICIA, $franquicia, $comparison);
    }

    /**
     * Filter the query on the direccion_cobro column
     *
     * Example usage:
     * <code>
     * $query->filterByDireccionCobro('fooValue');   // WHERE direccion_cobro = 'fooValue'
     * $query->filterByDireccionCobro('%fooValue%'); // WHERE direccion_cobro LIKE '%fooValue%'
     * </code>
     *
     * @param     string $direccionCobro The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByDireccionCobro($direccionCobro = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($direccionCobro)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $direccionCobro)) {
                $direccionCobro = str_replace('*', '%', $direccionCobro);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::DIRECCION_COBRO, $direccionCobro, $comparison);
    }

    /**
     * Filter the query on the ciudad_cobro column
     *
     * Example usage:
     * <code>
     * $query->filterByCiudadCobro('fooValue');   // WHERE ciudad_cobro = 'fooValue'
     * $query->filterByCiudadCobro('%fooValue%'); // WHERE ciudad_cobro LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ciudadCobro The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByCiudadCobro($ciudadCobro = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ciudadCobro)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ciudadCobro)) {
                $ciudadCobro = str_replace('*', '%', $ciudadCobro);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::CIUDAD_COBRO, $ciudadCobro, $comparison);
    }

    /**
     * Filter the query on the direccion_envio column
     *
     * Example usage:
     * <code>
     * $query->filterByDireccionEnvio('fooValue');   // WHERE direccion_envio = 'fooValue'
     * $query->filterByDireccionEnvio('%fooValue%'); // WHERE direccion_envio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $direccionEnvio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByDireccionEnvio($direccionEnvio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($direccionEnvio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $direccionEnvio)) {
                $direccionEnvio = str_replace('*', '%', $direccionEnvio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::DIRECCION_ENVIO, $direccionEnvio, $comparison);
    }

    /**
     * Filter the query on the ciudad_envio column
     *
     * Example usage:
     * <code>
     * $query->filterByCiudadEnvio('fooValue');   // WHERE ciudad_envio = 'fooValue'
     * $query->filterByCiudadEnvio('%fooValue%'); // WHERE ciudad_envio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ciudadEnvio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByCiudadEnvio($ciudadEnvio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ciudadEnvio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ciudadEnvio)) {
                $ciudadEnvio = str_replace('*', '%', $ciudadEnvio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::CIUDAD_ENVIO, $ciudadEnvio, $comparison);
    }

    /**
     * Filter the query on the telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByTelefono('fooValue');   // WHERE telefono = 'fooValue'
     * $query->filterByTelefono('%fooValue%'); // WHERE telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByTelefono($telefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telefono)) {
                $telefono = str_replace('*', '%', $telefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::TELEFONO, $telefono, $comparison);
    }

    /**
     * Filter the query on the telefono_oficina column
     *
     * Example usage:
     * <code>
     * $query->filterByTelefonoOficina('fooValue');   // WHERE telefono_oficina = 'fooValue'
     * $query->filterByTelefonoOficina('%fooValue%'); // WHERE telefono_oficina LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telefonoOficina The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByTelefonoOficina($telefonoOficina = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telefonoOficina)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telefonoOficina)) {
                $telefonoOficina = str_replace('*', '%', $telefonoOficina);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::TELEFONO_OFICINA, $telefonoOficina, $comparison);
    }

    /**
     * Filter the query on the pais_envio column
     *
     * Example usage:
     * <code>
     * $query->filterByPaisEnvio('fooValue');   // WHERE pais_envio = 'fooValue'
     * $query->filterByPaisEnvio('%fooValue%'); // WHERE pais_envio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paisEnvio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByPaisEnvio($paisEnvio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paisEnvio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paisEnvio)) {
                $paisEnvio = str_replace('*', '%', $paisEnvio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::PAIS_ENVIO, $paisEnvio, $comparison);
    }

    /**
     * Filter the query on the pais_cobro column
     *
     * Example usage:
     * <code>
     * $query->filterByPaisCobro('fooValue');   // WHERE pais_cobro = 'fooValue'
     * $query->filterByPaisCobro('%fooValue%'); // WHERE pais_cobro LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paisCobro The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByPaisCobro($paisCobro = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paisCobro)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paisCobro)) {
                $paisCobro = str_replace('*', '%', $paisCobro);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::PAIS_COBRO, $paisCobro, $comparison);
    }

    /**
     * Filter the query on the pse_referencia_uno column
     *
     * Example usage:
     * <code>
     * $query->filterByPseReferenciaUno('fooValue');   // WHERE pse_referencia_uno = 'fooValue'
     * $query->filterByPseReferenciaUno('%fooValue%'); // WHERE pse_referencia_uno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pseReferenciaUno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByPseReferenciaUno($pseReferenciaUno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pseReferenciaUno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pseReferenciaUno)) {
                $pseReferenciaUno = str_replace('*', '%', $pseReferenciaUno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::PSE_REFERENCIA_UNO, $pseReferenciaUno, $comparison);
    }

    /**
     * Filter the query on the pse_referencia_dos column
     *
     * Example usage:
     * <code>
     * $query->filterByPseReferenciaDos('fooValue');   // WHERE pse_referencia_dos = 'fooValue'
     * $query->filterByPseReferenciaDos('%fooValue%'); // WHERE pse_referencia_dos LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pseReferenciaDos The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByPseReferenciaDos($pseReferenciaDos = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pseReferenciaDos)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pseReferenciaDos)) {
                $pseReferenciaDos = str_replace('*', '%', $pseReferenciaDos);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::PSE_REFERENCIA_DOS, $pseReferenciaDos, $comparison);
    }

    /**
     * Filter the query on the pse_referencia_tres column
     *
     * Example usage:
     * <code>
     * $query->filterByPseReferenciaTres('fooValue');   // WHERE pse_referencia_tres = 'fooValue'
     * $query->filterByPseReferenciaTres('%fooValue%'); // WHERE pse_referencia_tres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pseReferenciaTres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function filterByPseReferenciaTres($pseReferenciaTres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pseReferenciaTres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pseReferenciaTres)) {
                $pseReferenciaTres = str_replace('*', '%', $pseReferenciaTres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlinePeer::PSE_REFERENCIA_TRES, $pseReferenciaTres, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Pagosonline $pagosonline Object to remove from the list of results
     *
     * @return PagosonlineQuery The current query, for fluid interface
     */
    public function prune($pagosonline = null)
    {
        if ($pagosonline) {
            $this->addUsingAlias(PagosonlinePeer::PAGOSONLINE_ID, $pagosonline->getPagosonlineId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
