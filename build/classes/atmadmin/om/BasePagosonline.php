<?php


/**
 * Base class that represents a row from the 'pagosonline' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BasePagosonline extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PagosonlinePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PagosonlinePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the pagosonline_id field.
     * @var        int
     */
    protected $pagosonline_id;

    /**
     * The value for the order_id field.
     * @var        int
     */
    protected $order_id;

    /**
     * The value for the estado_pol field.
     * @var        int
     */
    protected $estado_pol;

    /**
     * The value for the riesgo field.
     * @var        int
     */
    protected $riesgo;

    /**
     * The value for the codigo_respuesta_pol field.
     * @var        int
     */
    protected $codigo_respuesta_pol;

    /**
     * The value for the ref_pol field.
     * @var        int
     */
    protected $ref_pol;

    /**
     * The value for the extra_uno field.
     * @var        string
     */
    protected $extra_uno;

    /**
     * The value for the extra_dos field.
     * @var        string
     */
    protected $extra_dos;

    /**
     * The value for the medio_pago field.
     * @var        int
     */
    protected $medio_pago;

    /**
     * The value for the tipo_medio_pago field.
     * @var        string
     */
    protected $tipo_medio_pago;

    /**
     * The value for the cuotas field.
     * @var        int
     */
    protected $cuotas;

    /**
     * The value for the valor field.
     * @var        string
     */
    protected $valor;

    /**
     * The value for the iva field.
     * @var        string
     */
    protected $iva;

    /**
     * The value for the valor_adicional field.
     * @var        string
     */
    protected $valor_adicional;

    /**
     * The value for the fecha_transaccion field.
     * @var        string
     */
    protected $fecha_transaccion;

    /**
     * The value for the cus field.
     * @var        int
     */
    protected $cus;

    /**
     * The value for the banco_pse field.
     * @var        string
     */
    protected $banco_pse;

    /**
     * The value for the transaccion_id field.
     * @var        int
     */
    protected $transaccion_id;

    /**
     * The value for the usuario_id field.
     * @var        int
     */
    protected $usuario_id;

    /**
     * The value for the banco_id field.
     * @var        int
     */
    protected $banco_id;

    /**
     * The value for the medio_pago_id field.
     * @var        int
     */
    protected $medio_pago_id;

    /**
     * The value for the comision_pol field.
     * @var        string
     */
    protected $comision_pol;

    /**
     * The value for the estado_transaccion field.
     * @var        string
     */
    protected $estado_transaccion;

    /**
     * The value for the transaccion_banco_id field.
     * @var        int
     */
    protected $transaccion_banco_id;

    /**
     * The value for the codigo_autorizacion field.
     * @var        string
     */
    protected $codigo_autorizacion;

    /**
     * The value for the email_comprador field.
     * @var        string
     */
    protected $email_comprador;

    /**
     * The value for the nickname_comprador field.
     * @var        string
     */
    protected $nickname_comprador;

    /**
     * The value for the nickname_vendedor field.
     * @var        string
     */
    protected $nickname_vendedor;

    /**
     * The value for the descripcion field.
     * @var        string
     */
    protected $descripcion;

    /**
     * The value for the intentos field.
     * @var        int
     */
    protected $intentos;

    /**
     * The value for the ciclo_pse field.
     * @var        string
     */
    protected $ciclo_pse;

    /**
     * The value for the fecha field.
     * @var        string
     */
    protected $fecha;

    /**
     * The value for the moneda field.
     * @var        string
     */
    protected $moneda;

    /**
     * The value for the mensaje_respuesta_pol field.
     * @var        string
     */
    protected $mensaje_respuesta_pol;

    /**
     * The value for the mensaje_error_banco field.
     * @var        string
     */
    protected $mensaje_error_banco;

    /**
     * The value for the codigo_error_banco field.
     * @var        string
     */
    protected $codigo_error_banco;

    /**
     * The value for the tasa_cambio field.
     * @var        string
     */
    protected $tasa_cambio;

    /**
     * The value for the ip field.
     * @var        string
     */
    protected $ip;

    /**
     * The value for the numero_cliente field.
     * @var        int
     */
    protected $numero_cliente;

    /**
     * The value for the pago_recurrente field.
     * @var        int
     */
    protected $pago_recurrente;

    /**
     * The value for the numero_visible field.
     * @var        string
     */
    protected $numero_visible;

    /**
     * The value for the tarjeta_habiente field.
     * @var        string
     */
    protected $tarjeta_habiente;

    /**
     * The value for the franquicia field.
     * @var        string
     */
    protected $franquicia;

    /**
     * The value for the direccion_cobro field.
     * @var        string
     */
    protected $direccion_cobro;

    /**
     * The value for the ciudad_cobro field.
     * @var        string
     */
    protected $ciudad_cobro;

    /**
     * The value for the direccion_envio field.
     * @var        string
     */
    protected $direccion_envio;

    /**
     * The value for the ciudad_envio field.
     * @var        string
     */
    protected $ciudad_envio;

    /**
     * The value for the telefono field.
     * @var        string
     */
    protected $telefono;

    /**
     * The value for the telefono_oficina field.
     * @var        string
     */
    protected $telefono_oficina;

    /**
     * The value for the pais_envio field.
     * @var        string
     */
    protected $pais_envio;

    /**
     * The value for the pais_cobro field.
     * @var        string
     */
    protected $pais_cobro;

    /**
     * The value for the pse_referencia_uno field.
     * @var        string
     */
    protected $pse_referencia_uno;

    /**
     * The value for the pse_referencia_dos field.
     * @var        string
     */
    protected $pse_referencia_dos;

    /**
     * The value for the pse_referencia_tres field.
     * @var        string
     */
    protected $pse_referencia_tres;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Get the [pagosonline_id] column value.
     *
     * @return int
     */
    public function getPagosonlineId()
    {

        return $this->pagosonline_id;
    }

    /**
     * Get the [order_id] column value.
     *
     * @return int
     */
    public function getOrderId()
    {

        return $this->order_id;
    }

    /**
     * Get the [estado_pol] column value.
     *
     * @return int
     */
    public function getEstadoPol()
    {

        return $this->estado_pol;
    }

    /**
     * Get the [riesgo] column value.
     *
     * @return int
     */
    public function getRiesgo()
    {

        return $this->riesgo;
    }

    /**
     * Get the [codigo_respuesta_pol] column value.
     *
     * @return int
     */
    public function getCodigoRespuestaPol()
    {

        return $this->codigo_respuesta_pol;
    }

    /**
     * Get the [ref_pol] column value.
     *
     * @return int
     */
    public function getRefPol()
    {

        return $this->ref_pol;
    }

    /**
     * Get the [extra_uno] column value.
     *
     * @return string
     */
    public function getExtraUno()
    {

        return $this->extra_uno;
    }

    /**
     * Get the [extra_dos] column value.
     *
     * @return string
     */
    public function getExtraDos()
    {

        return $this->extra_dos;
    }

    /**
     * Get the [medio_pago] column value.
     *
     * @return int
     */
    public function getMedioPago()
    {

        return $this->medio_pago;
    }

    /**
     * Get the [tipo_medio_pago] column value.
     *
     * @return string
     */
    public function getTipoMedioPago()
    {

        return $this->tipo_medio_pago;
    }

    /**
     * Get the [cuotas] column value.
     *
     * @return int
     */
    public function getCuotas()
    {

        return $this->cuotas;
    }

    /**
     * Get the [valor] column value.
     *
     * @return string
     */
    public function getValor()
    {

        return $this->valor;
    }

    /**
     * Get the [iva] column value.
     *
     * @return string
     */
    public function getIva()
    {

        return $this->iva;
    }

    /**
     * Get the [valor_adicional] column value.
     *
     * @return string
     */
    public function getValorAdicional()
    {

        return $this->valor_adicional;
    }

    /**
     * Get the [optionally formatted] temporal [fecha_transaccion] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFechaTransaccion($format = 'Y-m-d H:i:s')
    {
        if ($this->fecha_transaccion === null) {
            return null;
        }

        if ($this->fecha_transaccion === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->fecha_transaccion);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fecha_transaccion, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [cus] column value.
     *
     * @return int
     */
    public function getCus()
    {

        return $this->cus;
    }

    /**
     * Get the [banco_pse] column value.
     *
     * @return string
     */
    public function getBancoPse()
    {

        return $this->banco_pse;
    }

    /**
     * Get the [transaccion_id] column value.
     *
     * @return int
     */
    public function getTransaccionId()
    {

        return $this->transaccion_id;
    }

    /**
     * Get the [usuario_id] column value.
     *
     * @return int
     */
    public function getUsuarioId()
    {

        return $this->usuario_id;
    }

    /**
     * Get the [banco_id] column value.
     *
     * @return int
     */
    public function getBancoId()
    {

        return $this->banco_id;
    }

    /**
     * Get the [medio_pago_id] column value.
     *
     * @return int
     */
    public function getMedioPagoId()
    {

        return $this->medio_pago_id;
    }

    /**
     * Get the [comision_pol] column value.
     *
     * @return string
     */
    public function getComisionPol()
    {

        return $this->comision_pol;
    }

    /**
     * Get the [estado_transaccion] column value.
     *
     * @return string
     */
    public function getEstadoTransaccion()
    {

        return $this->estado_transaccion;
    }

    /**
     * Get the [transaccion_banco_id] column value.
     *
     * @return int
     */
    public function getTransaccionBancoId()
    {

        return $this->transaccion_banco_id;
    }

    /**
     * Get the [codigo_autorizacion] column value.
     *
     * @return string
     */
    public function getCodigoAutorizacion()
    {

        return $this->codigo_autorizacion;
    }

    /**
     * Get the [email_comprador] column value.
     *
     * @return string
     */
    public function getEmailComprador()
    {

        return $this->email_comprador;
    }

    /**
     * Get the [nickname_comprador] column value.
     *
     * @return string
     */
    public function getNicknameComprador()
    {

        return $this->nickname_comprador;
    }

    /**
     * Get the [nickname_vendedor] column value.
     *
     * @return string
     */
    public function getNicknameVendedor()
    {

        return $this->nickname_vendedor;
    }

    /**
     * Get the [descripcion] column value.
     *
     * @return string
     */
    public function getDescripcion()
    {

        return $this->descripcion;
    }

    /**
     * Get the [intentos] column value.
     *
     * @return int
     */
    public function getIntentos()
    {

        return $this->intentos;
    }

    /**
     * Get the [ciclo_pse] column value.
     *
     * @return string
     */
    public function getCicloPse()
    {

        return $this->ciclo_pse;
    }

    /**
     * Get the [optionally formatted] temporal [fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFecha($format = 'Y-m-d H:i:s')
    {
        if ($this->fecha === null) {
            return null;
        }

        if ($this->fecha === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fecha, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [moneda] column value.
     *
     * @return string
     */
    public function getMoneda()
    {

        return $this->moneda;
    }

    /**
     * Get the [mensaje_respuesta_pol] column value.
     *
     * @return string
     */
    public function getMensajeRespuestaPol()
    {

        return $this->mensaje_respuesta_pol;
    }

    /**
     * Get the [mensaje_error_banco] column value.
     *
     * @return string
     */
    public function getMensajeErrorBanco()
    {

        return $this->mensaje_error_banco;
    }

    /**
     * Get the [codigo_error_banco] column value.
     *
     * @return string
     */
    public function getCodigoErrorBanco()
    {

        return $this->codigo_error_banco;
    }

    /**
     * Get the [tasa_cambio] column value.
     *
     * @return string
     */
    public function getTasaCambio()
    {

        return $this->tasa_cambio;
    }

    /**
     * Get the [ip] column value.
     *
     * @return string
     */
    public function getIp()
    {

        return $this->ip;
    }

    /**
     * Get the [numero_cliente] column value.
     *
     * @return int
     */
    public function getNumeroCliente()
    {

        return $this->numero_cliente;
    }

    /**
     * Get the [pago_recurrente] column value.
     *
     * @return int
     */
    public function getPagoRecurrente()
    {

        return $this->pago_recurrente;
    }

    /**
     * Get the [numero_visible] column value.
     *
     * @return string
     */
    public function getNumeroVisible()
    {

        return $this->numero_visible;
    }

    /**
     * Get the [tarjeta_habiente] column value.
     *
     * @return string
     */
    public function getTarjetaHabiente()
    {

        return $this->tarjeta_habiente;
    }

    /**
     * Get the [franquicia] column value.
     *
     * @return string
     */
    public function getFranquicia()
    {

        return $this->franquicia;
    }

    /**
     * Get the [direccion_cobro] column value.
     *
     * @return string
     */
    public function getDireccionCobro()
    {

        return $this->direccion_cobro;
    }

    /**
     * Get the [ciudad_cobro] column value.
     *
     * @return string
     */
    public function getCiudadCobro()
    {

        return $this->ciudad_cobro;
    }

    /**
     * Get the [direccion_envio] column value.
     *
     * @return string
     */
    public function getDireccionEnvio()
    {

        return $this->direccion_envio;
    }

    /**
     * Get the [ciudad_envio] column value.
     *
     * @return string
     */
    public function getCiudadEnvio()
    {

        return $this->ciudad_envio;
    }

    /**
     * Get the [telefono] column value.
     *
     * @return string
     */
    public function getTelefono()
    {

        return $this->telefono;
    }

    /**
     * Get the [telefono_oficina] column value.
     *
     * @return string
     */
    public function getTelefonoOficina()
    {

        return $this->telefono_oficina;
    }

    /**
     * Get the [pais_envio] column value.
     *
     * @return string
     */
    public function getPaisEnvio()
    {

        return $this->pais_envio;
    }

    /**
     * Get the [pais_cobro] column value.
     *
     * @return string
     */
    public function getPaisCobro()
    {

        return $this->pais_cobro;
    }

    /**
     * Get the [pse_referencia_uno] column value.
     *
     * @return string
     */
    public function getPseReferenciaUno()
    {

        return $this->pse_referencia_uno;
    }

    /**
     * Get the [pse_referencia_dos] column value.
     *
     * @return string
     */
    public function getPseReferenciaDos()
    {

        return $this->pse_referencia_dos;
    }

    /**
     * Get the [pse_referencia_tres] column value.
     *
     * @return string
     */
    public function getPseReferenciaTres()
    {

        return $this->pse_referencia_tres;
    }

    /**
     * Set the value of [pagosonline_id] column.
     *
     * @param  int $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setPagosonlineId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pagosonline_id !== $v) {
            $this->pagosonline_id = $v;
            $this->modifiedColumns[] = PagosonlinePeer::PAGOSONLINE_ID;
        }


        return $this;
    } // setPagosonlineId()

    /**
     * Set the value of [order_id] column.
     *
     * @param  int $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setOrderId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->order_id !== $v) {
            $this->order_id = $v;
            $this->modifiedColumns[] = PagosonlinePeer::ORDER_ID;
        }


        return $this;
    } // setOrderId()

    /**
     * Set the value of [estado_pol] column.
     *
     * @param  int $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setEstadoPol($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->estado_pol !== $v) {
            $this->estado_pol = $v;
            $this->modifiedColumns[] = PagosonlinePeer::ESTADO_POL;
        }


        return $this;
    } // setEstadoPol()

    /**
     * Set the value of [riesgo] column.
     *
     * @param  int $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setRiesgo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->riesgo !== $v) {
            $this->riesgo = $v;
            $this->modifiedColumns[] = PagosonlinePeer::RIESGO;
        }


        return $this;
    } // setRiesgo()

    /**
     * Set the value of [codigo_respuesta_pol] column.
     *
     * @param  int $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setCodigoRespuestaPol($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->codigo_respuesta_pol !== $v) {
            $this->codigo_respuesta_pol = $v;
            $this->modifiedColumns[] = PagosonlinePeer::CODIGO_RESPUESTA_POL;
        }


        return $this;
    } // setCodigoRespuestaPol()

    /**
     * Set the value of [ref_pol] column.
     *
     * @param  int $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setRefPol($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ref_pol !== $v) {
            $this->ref_pol = $v;
            $this->modifiedColumns[] = PagosonlinePeer::REF_POL;
        }


        return $this;
    } // setRefPol()

    /**
     * Set the value of [extra_uno] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setExtraUno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->extra_uno !== $v) {
            $this->extra_uno = $v;
            $this->modifiedColumns[] = PagosonlinePeer::EXTRA_UNO;
        }


        return $this;
    } // setExtraUno()

    /**
     * Set the value of [extra_dos] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setExtraDos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->extra_dos !== $v) {
            $this->extra_dos = $v;
            $this->modifiedColumns[] = PagosonlinePeer::EXTRA_DOS;
        }


        return $this;
    } // setExtraDos()

    /**
     * Set the value of [medio_pago] column.
     *
     * @param  int $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setMedioPago($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->medio_pago !== $v) {
            $this->medio_pago = $v;
            $this->modifiedColumns[] = PagosonlinePeer::MEDIO_PAGO;
        }


        return $this;
    } // setMedioPago()

    /**
     * Set the value of [tipo_medio_pago] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setTipoMedioPago($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tipo_medio_pago !== $v) {
            $this->tipo_medio_pago = $v;
            $this->modifiedColumns[] = PagosonlinePeer::TIPO_MEDIO_PAGO;
        }


        return $this;
    } // setTipoMedioPago()

    /**
     * Set the value of [cuotas] column.
     *
     * @param  int $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setCuotas($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cuotas !== $v) {
            $this->cuotas = $v;
            $this->modifiedColumns[] = PagosonlinePeer::CUOTAS;
        }


        return $this;
    } // setCuotas()

    /**
     * Set the value of [valor] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setValor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valor !== $v) {
            $this->valor = $v;
            $this->modifiedColumns[] = PagosonlinePeer::VALOR;
        }


        return $this;
    } // setValor()

    /**
     * Set the value of [iva] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setIva($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->iva !== $v) {
            $this->iva = $v;
            $this->modifiedColumns[] = PagosonlinePeer::IVA;
        }


        return $this;
    } // setIva()

    /**
     * Set the value of [valor_adicional] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setValorAdicional($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valor_adicional !== $v) {
            $this->valor_adicional = $v;
            $this->modifiedColumns[] = PagosonlinePeer::VALOR_ADICIONAL;
        }


        return $this;
    } // setValorAdicional()

    /**
     * Sets the value of [fecha_transaccion] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setFechaTransaccion($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fecha_transaccion !== null || $dt !== null) {
            $currentDateAsString = ($this->fecha_transaccion !== null && $tmpDt = new DateTime($this->fecha_transaccion)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fecha_transaccion = $newDateAsString;
                $this->modifiedColumns[] = PagosonlinePeer::FECHA_TRANSACCION;
            }
        } // if either are not null


        return $this;
    } // setFechaTransaccion()

    /**
     * Set the value of [cus] column.
     *
     * @param  int $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setCus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cus !== $v) {
            $this->cus = $v;
            $this->modifiedColumns[] = PagosonlinePeer::CUS;
        }


        return $this;
    } // setCus()

    /**
     * Set the value of [banco_pse] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setBancoPse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->banco_pse !== $v) {
            $this->banco_pse = $v;
            $this->modifiedColumns[] = PagosonlinePeer::BANCO_PSE;
        }


        return $this;
    } // setBancoPse()

    /**
     * Set the value of [transaccion_id] column.
     *
     * @param  int $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setTransaccionId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->transaccion_id !== $v) {
            $this->transaccion_id = $v;
            $this->modifiedColumns[] = PagosonlinePeer::TRANSACCION_ID;
        }


        return $this;
    } // setTransaccionId()

    /**
     * Set the value of [usuario_id] column.
     *
     * @param  int $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setUsuarioId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->usuario_id !== $v) {
            $this->usuario_id = $v;
            $this->modifiedColumns[] = PagosonlinePeer::USUARIO_ID;
        }


        return $this;
    } // setUsuarioId()

    /**
     * Set the value of [banco_id] column.
     *
     * @param  int $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setBancoId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->banco_id !== $v) {
            $this->banco_id = $v;
            $this->modifiedColumns[] = PagosonlinePeer::BANCO_ID;
        }


        return $this;
    } // setBancoId()

    /**
     * Set the value of [medio_pago_id] column.
     *
     * @param  int $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setMedioPagoId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->medio_pago_id !== $v) {
            $this->medio_pago_id = $v;
            $this->modifiedColumns[] = PagosonlinePeer::MEDIO_PAGO_ID;
        }


        return $this;
    } // setMedioPagoId()

    /**
     * Set the value of [comision_pol] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setComisionPol($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comision_pol !== $v) {
            $this->comision_pol = $v;
            $this->modifiedColumns[] = PagosonlinePeer::COMISION_POL;
        }


        return $this;
    } // setComisionPol()

    /**
     * Set the value of [estado_transaccion] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setEstadoTransaccion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->estado_transaccion !== $v) {
            $this->estado_transaccion = $v;
            $this->modifiedColumns[] = PagosonlinePeer::ESTADO_TRANSACCION;
        }


        return $this;
    } // setEstadoTransaccion()

    /**
     * Set the value of [transaccion_banco_id] column.
     *
     * @param  int $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setTransaccionBancoId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->transaccion_banco_id !== $v) {
            $this->transaccion_banco_id = $v;
            $this->modifiedColumns[] = PagosonlinePeer::TRANSACCION_BANCO_ID;
        }


        return $this;
    } // setTransaccionBancoId()

    /**
     * Set the value of [codigo_autorizacion] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setCodigoAutorizacion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->codigo_autorizacion !== $v) {
            $this->codigo_autorizacion = $v;
            $this->modifiedColumns[] = PagosonlinePeer::CODIGO_AUTORIZACION;
        }


        return $this;
    } // setCodigoAutorizacion()

    /**
     * Set the value of [email_comprador] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setEmailComprador($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email_comprador !== $v) {
            $this->email_comprador = $v;
            $this->modifiedColumns[] = PagosonlinePeer::EMAIL_COMPRADOR;
        }


        return $this;
    } // setEmailComprador()

    /**
     * Set the value of [nickname_comprador] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setNicknameComprador($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nickname_comprador !== $v) {
            $this->nickname_comprador = $v;
            $this->modifiedColumns[] = PagosonlinePeer::NICKNAME_COMPRADOR;
        }


        return $this;
    } // setNicknameComprador()

    /**
     * Set the value of [nickname_vendedor] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setNicknameVendedor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nickname_vendedor !== $v) {
            $this->nickname_vendedor = $v;
            $this->modifiedColumns[] = PagosonlinePeer::NICKNAME_VENDEDOR;
        }


        return $this;
    } // setNicknameVendedor()

    /**
     * Set the value of [descripcion] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setDescripcion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->descripcion !== $v) {
            $this->descripcion = $v;
            $this->modifiedColumns[] = PagosonlinePeer::DESCRIPCION;
        }


        return $this;
    } // setDescripcion()

    /**
     * Set the value of [intentos] column.
     *
     * @param  int $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setIntentos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->intentos !== $v) {
            $this->intentos = $v;
            $this->modifiedColumns[] = PagosonlinePeer::INTENTOS;
        }


        return $this;
    } // setIntentos()

    /**
     * Set the value of [ciclo_pse] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setCicloPse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ciclo_pse !== $v) {
            $this->ciclo_pse = $v;
            $this->modifiedColumns[] = PagosonlinePeer::CICLO_PSE;
        }


        return $this;
    } // setCicloPse()

    /**
     * Sets the value of [fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->fecha !== null && $tmpDt = new DateTime($this->fecha)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fecha = $newDateAsString;
                $this->modifiedColumns[] = PagosonlinePeer::FECHA;
            }
        } // if either are not null


        return $this;
    } // setFecha()

    /**
     * Set the value of [moneda] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setMoneda($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->moneda !== $v) {
            $this->moneda = $v;
            $this->modifiedColumns[] = PagosonlinePeer::MONEDA;
        }


        return $this;
    } // setMoneda()

    /**
     * Set the value of [mensaje_respuesta_pol] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setMensajeRespuestaPol($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mensaje_respuesta_pol !== $v) {
            $this->mensaje_respuesta_pol = $v;
            $this->modifiedColumns[] = PagosonlinePeer::MENSAJE_RESPUESTA_POL;
        }


        return $this;
    } // setMensajeRespuestaPol()

    /**
     * Set the value of [mensaje_error_banco] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setMensajeErrorBanco($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mensaje_error_banco !== $v) {
            $this->mensaje_error_banco = $v;
            $this->modifiedColumns[] = PagosonlinePeer::MENSAJE_ERROR_BANCO;
        }


        return $this;
    } // setMensajeErrorBanco()

    /**
     * Set the value of [codigo_error_banco] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setCodigoErrorBanco($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->codigo_error_banco !== $v) {
            $this->codigo_error_banco = $v;
            $this->modifiedColumns[] = PagosonlinePeer::CODIGO_ERROR_BANCO;
        }


        return $this;
    } // setCodigoErrorBanco()

    /**
     * Set the value of [tasa_cambio] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setTasaCambio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tasa_cambio !== $v) {
            $this->tasa_cambio = $v;
            $this->modifiedColumns[] = PagosonlinePeer::TASA_CAMBIO;
        }


        return $this;
    } // setTasaCambio()

    /**
     * Set the value of [ip] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setIp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ip !== $v) {
            $this->ip = $v;
            $this->modifiedColumns[] = PagosonlinePeer::IP;
        }


        return $this;
    } // setIp()

    /**
     * Set the value of [numero_cliente] column.
     *
     * @param  int $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setNumeroCliente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->numero_cliente !== $v) {
            $this->numero_cliente = $v;
            $this->modifiedColumns[] = PagosonlinePeer::NUMERO_CLIENTE;
        }


        return $this;
    } // setNumeroCliente()

    /**
     * Set the value of [pago_recurrente] column.
     *
     * @param  int $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setPagoRecurrente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pago_recurrente !== $v) {
            $this->pago_recurrente = $v;
            $this->modifiedColumns[] = PagosonlinePeer::PAGO_RECURRENTE;
        }


        return $this;
    } // setPagoRecurrente()

    /**
     * Set the value of [numero_visible] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setNumeroVisible($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_visible !== $v) {
            $this->numero_visible = $v;
            $this->modifiedColumns[] = PagosonlinePeer::NUMERO_VISIBLE;
        }


        return $this;
    } // setNumeroVisible()

    /**
     * Set the value of [tarjeta_habiente] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setTarjetaHabiente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tarjeta_habiente !== $v) {
            $this->tarjeta_habiente = $v;
            $this->modifiedColumns[] = PagosonlinePeer::TARJETA_HABIENTE;
        }


        return $this;
    } // setTarjetaHabiente()

    /**
     * Set the value of [franquicia] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setFranquicia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->franquicia !== $v) {
            $this->franquicia = $v;
            $this->modifiedColumns[] = PagosonlinePeer::FRANQUICIA;
        }


        return $this;
    } // setFranquicia()

    /**
     * Set the value of [direccion_cobro] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setDireccionCobro($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->direccion_cobro !== $v) {
            $this->direccion_cobro = $v;
            $this->modifiedColumns[] = PagosonlinePeer::DIRECCION_COBRO;
        }


        return $this;
    } // setDireccionCobro()

    /**
     * Set the value of [ciudad_cobro] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setCiudadCobro($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ciudad_cobro !== $v) {
            $this->ciudad_cobro = $v;
            $this->modifiedColumns[] = PagosonlinePeer::CIUDAD_COBRO;
        }


        return $this;
    } // setCiudadCobro()

    /**
     * Set the value of [direccion_envio] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setDireccionEnvio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->direccion_envio !== $v) {
            $this->direccion_envio = $v;
            $this->modifiedColumns[] = PagosonlinePeer::DIRECCION_ENVIO;
        }


        return $this;
    } // setDireccionEnvio()

    /**
     * Set the value of [ciudad_envio] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setCiudadEnvio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ciudad_envio !== $v) {
            $this->ciudad_envio = $v;
            $this->modifiedColumns[] = PagosonlinePeer::CIUDAD_ENVIO;
        }


        return $this;
    } // setCiudadEnvio()

    /**
     * Set the value of [telefono] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setTelefono($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telefono !== $v) {
            $this->telefono = $v;
            $this->modifiedColumns[] = PagosonlinePeer::TELEFONO;
        }


        return $this;
    } // setTelefono()

    /**
     * Set the value of [telefono_oficina] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setTelefonoOficina($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telefono_oficina !== $v) {
            $this->telefono_oficina = $v;
            $this->modifiedColumns[] = PagosonlinePeer::TELEFONO_OFICINA;
        }


        return $this;
    } // setTelefonoOficina()

    /**
     * Set the value of [pais_envio] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setPaisEnvio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pais_envio !== $v) {
            $this->pais_envio = $v;
            $this->modifiedColumns[] = PagosonlinePeer::PAIS_ENVIO;
        }


        return $this;
    } // setPaisEnvio()

    /**
     * Set the value of [pais_cobro] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setPaisCobro($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pais_cobro !== $v) {
            $this->pais_cobro = $v;
            $this->modifiedColumns[] = PagosonlinePeer::PAIS_COBRO;
        }


        return $this;
    } // setPaisCobro()

    /**
     * Set the value of [pse_referencia_uno] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setPseReferenciaUno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pse_referencia_uno !== $v) {
            $this->pse_referencia_uno = $v;
            $this->modifiedColumns[] = PagosonlinePeer::PSE_REFERENCIA_UNO;
        }


        return $this;
    } // setPseReferenciaUno()

    /**
     * Set the value of [pse_referencia_dos] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setPseReferenciaDos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pse_referencia_dos !== $v) {
            $this->pse_referencia_dos = $v;
            $this->modifiedColumns[] = PagosonlinePeer::PSE_REFERENCIA_DOS;
        }


        return $this;
    } // setPseReferenciaDos()

    /**
     * Set the value of [pse_referencia_tres] column.
     *
     * @param  string $v new value
     * @return Pagosonline The current object (for fluent API support)
     */
    public function setPseReferenciaTres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pse_referencia_tres !== $v) {
            $this->pse_referencia_tres = $v;
            $this->modifiedColumns[] = PagosonlinePeer::PSE_REFERENCIA_TRES;
        }


        return $this;
    } // setPseReferenciaTres()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->pagosonline_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->order_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->estado_pol = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->riesgo = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->codigo_respuesta_pol = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->ref_pol = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->extra_uno = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->extra_dos = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->medio_pago = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->tipo_medio_pago = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->cuotas = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->valor = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->iva = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->valor_adicional = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->fecha_transaccion = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->cus = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->banco_pse = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->transaccion_id = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->usuario_id = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->banco_id = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->medio_pago_id = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->comision_pol = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->estado_transaccion = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->transaccion_banco_id = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->codigo_autorizacion = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->email_comprador = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->nickname_comprador = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->nickname_vendedor = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->descripcion = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->intentos = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->ciclo_pse = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->fecha = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->moneda = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->mensaje_respuesta_pol = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->mensaje_error_banco = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->codigo_error_banco = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->tasa_cambio = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->ip = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->numero_cliente = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->pago_recurrente = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->numero_visible = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->tarjeta_habiente = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->franquicia = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->direccion_cobro = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->ciudad_cobro = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->direccion_envio = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->ciudad_envio = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->telefono = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->telefono_oficina = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->pais_envio = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->pais_cobro = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->pse_referencia_uno = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->pse_referencia_dos = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->pse_referencia_tres = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 54; // 54 = PagosonlinePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Pagosonline object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PagosonlinePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PagosonlinePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PagosonlinePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PagosonlineQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PagosonlinePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                PagosonlinePeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = PagosonlinePeer::PAGOSONLINE_ID;
        if (null !== $this->pagosonline_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PagosonlinePeer::PAGOSONLINE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PagosonlinePeer::PAGOSONLINE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'pagosonline_id';
        }
        if ($this->isColumnModified(PagosonlinePeer::ORDER_ID)) {
            $modifiedColumns[':p' . $index++]  = 'order_id';
        }
        if ($this->isColumnModified(PagosonlinePeer::ESTADO_POL)) {
            $modifiedColumns[':p' . $index++]  = 'estado_pol';
        }
        if ($this->isColumnModified(PagosonlinePeer::RIESGO)) {
            $modifiedColumns[':p' . $index++]  = 'riesgo';
        }
        if ($this->isColumnModified(PagosonlinePeer::CODIGO_RESPUESTA_POL)) {
            $modifiedColumns[':p' . $index++]  = 'codigo_respuesta_pol';
        }
        if ($this->isColumnModified(PagosonlinePeer::REF_POL)) {
            $modifiedColumns[':p' . $index++]  = 'ref_pol';
        }
        if ($this->isColumnModified(PagosonlinePeer::EXTRA_UNO)) {
            $modifiedColumns[':p' . $index++]  = 'extra_uno';
        }
        if ($this->isColumnModified(PagosonlinePeer::EXTRA_DOS)) {
            $modifiedColumns[':p' . $index++]  = 'extra_dos';
        }
        if ($this->isColumnModified(PagosonlinePeer::MEDIO_PAGO)) {
            $modifiedColumns[':p' . $index++]  = 'medio_pago';
        }
        if ($this->isColumnModified(PagosonlinePeer::TIPO_MEDIO_PAGO)) {
            $modifiedColumns[':p' . $index++]  = 'tipo_medio_pago';
        }
        if ($this->isColumnModified(PagosonlinePeer::CUOTAS)) {
            $modifiedColumns[':p' . $index++]  = 'cuotas';
        }
        if ($this->isColumnModified(PagosonlinePeer::VALOR)) {
            $modifiedColumns[':p' . $index++]  = 'valor';
        }
        if ($this->isColumnModified(PagosonlinePeer::IVA)) {
            $modifiedColumns[':p' . $index++]  = 'iva';
        }
        if ($this->isColumnModified(PagosonlinePeer::VALOR_ADICIONAL)) {
            $modifiedColumns[':p' . $index++]  = 'valor_adicional';
        }
        if ($this->isColumnModified(PagosonlinePeer::FECHA_TRANSACCION)) {
            $modifiedColumns[':p' . $index++]  = 'fecha_transaccion';
        }
        if ($this->isColumnModified(PagosonlinePeer::CUS)) {
            $modifiedColumns[':p' . $index++]  = 'cus';
        }
        if ($this->isColumnModified(PagosonlinePeer::BANCO_PSE)) {
            $modifiedColumns[':p' . $index++]  = 'banco_pse';
        }
        if ($this->isColumnModified(PagosonlinePeer::TRANSACCION_ID)) {
            $modifiedColumns[':p' . $index++]  = 'transaccion_id';
        }
        if ($this->isColumnModified(PagosonlinePeer::USUARIO_ID)) {
            $modifiedColumns[':p' . $index++]  = 'usuario_id';
        }
        if ($this->isColumnModified(PagosonlinePeer::BANCO_ID)) {
            $modifiedColumns[':p' . $index++]  = 'banco_id';
        }
        if ($this->isColumnModified(PagosonlinePeer::MEDIO_PAGO_ID)) {
            $modifiedColumns[':p' . $index++]  = 'medio_pago_id';
        }
        if ($this->isColumnModified(PagosonlinePeer::COMISION_POL)) {
            $modifiedColumns[':p' . $index++]  = 'comision_pol';
        }
        if ($this->isColumnModified(PagosonlinePeer::ESTADO_TRANSACCION)) {
            $modifiedColumns[':p' . $index++]  = 'estado_transaccion';
        }
        if ($this->isColumnModified(PagosonlinePeer::TRANSACCION_BANCO_ID)) {
            $modifiedColumns[':p' . $index++]  = 'transaccion_banco_id';
        }
        if ($this->isColumnModified(PagosonlinePeer::CODIGO_AUTORIZACION)) {
            $modifiedColumns[':p' . $index++]  = 'codigo_autorizacion';
        }
        if ($this->isColumnModified(PagosonlinePeer::EMAIL_COMPRADOR)) {
            $modifiedColumns[':p' . $index++]  = 'email_comprador';
        }
        if ($this->isColumnModified(PagosonlinePeer::NICKNAME_COMPRADOR)) {
            $modifiedColumns[':p' . $index++]  = 'nickname_comprador';
        }
        if ($this->isColumnModified(PagosonlinePeer::NICKNAME_VENDEDOR)) {
            $modifiedColumns[':p' . $index++]  = 'nickname_vendedor';
        }
        if ($this->isColumnModified(PagosonlinePeer::DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = 'descripcion';
        }
        if ($this->isColumnModified(PagosonlinePeer::INTENTOS)) {
            $modifiedColumns[':p' . $index++]  = 'intentos';
        }
        if ($this->isColumnModified(PagosonlinePeer::CICLO_PSE)) {
            $modifiedColumns[':p' . $index++]  = 'ciclo_pse';
        }
        if ($this->isColumnModified(PagosonlinePeer::FECHA)) {
            $modifiedColumns[':p' . $index++]  = 'fecha';
        }
        if ($this->isColumnModified(PagosonlinePeer::MONEDA)) {
            $modifiedColumns[':p' . $index++]  = 'moneda';
        }
        if ($this->isColumnModified(PagosonlinePeer::MENSAJE_RESPUESTA_POL)) {
            $modifiedColumns[':p' . $index++]  = 'mensaje_respuesta_pol';
        }
        if ($this->isColumnModified(PagosonlinePeer::MENSAJE_ERROR_BANCO)) {
            $modifiedColumns[':p' . $index++]  = 'mensaje_error_banco';
        }
        if ($this->isColumnModified(PagosonlinePeer::CODIGO_ERROR_BANCO)) {
            $modifiedColumns[':p' . $index++]  = 'codigo_error_banco';
        }
        if ($this->isColumnModified(PagosonlinePeer::TASA_CAMBIO)) {
            $modifiedColumns[':p' . $index++]  = 'tasa_cambio';
        }
        if ($this->isColumnModified(PagosonlinePeer::IP)) {
            $modifiedColumns[':p' . $index++]  = 'ip';
        }
        if ($this->isColumnModified(PagosonlinePeer::NUMERO_CLIENTE)) {
            $modifiedColumns[':p' . $index++]  = 'numero_cliente';
        }
        if ($this->isColumnModified(PagosonlinePeer::PAGO_RECURRENTE)) {
            $modifiedColumns[':p' . $index++]  = 'pago_recurrente';
        }
        if ($this->isColumnModified(PagosonlinePeer::NUMERO_VISIBLE)) {
            $modifiedColumns[':p' . $index++]  = 'numero_visible';
        }
        if ($this->isColumnModified(PagosonlinePeer::TARJETA_HABIENTE)) {
            $modifiedColumns[':p' . $index++]  = 'tarjeta_habiente';
        }
        if ($this->isColumnModified(PagosonlinePeer::FRANQUICIA)) {
            $modifiedColumns[':p' . $index++]  = 'franquicia';
        }
        if ($this->isColumnModified(PagosonlinePeer::DIRECCION_COBRO)) {
            $modifiedColumns[':p' . $index++]  = 'direccion_cobro';
        }
        if ($this->isColumnModified(PagosonlinePeer::CIUDAD_COBRO)) {
            $modifiedColumns[':p' . $index++]  = 'ciudad_cobro';
        }
        if ($this->isColumnModified(PagosonlinePeer::DIRECCION_ENVIO)) {
            $modifiedColumns[':p' . $index++]  = 'direccion_envio';
        }
        if ($this->isColumnModified(PagosonlinePeer::CIUDAD_ENVIO)) {
            $modifiedColumns[':p' . $index++]  = 'ciudad_envio';
        }
        if ($this->isColumnModified(PagosonlinePeer::TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = 'telefono';
        }
        if ($this->isColumnModified(PagosonlinePeer::TELEFONO_OFICINA)) {
            $modifiedColumns[':p' . $index++]  = 'telefono_oficina';
        }
        if ($this->isColumnModified(PagosonlinePeer::PAIS_ENVIO)) {
            $modifiedColumns[':p' . $index++]  = 'pais_envio';
        }
        if ($this->isColumnModified(PagosonlinePeer::PAIS_COBRO)) {
            $modifiedColumns[':p' . $index++]  = 'pais_cobro';
        }
        if ($this->isColumnModified(PagosonlinePeer::PSE_REFERENCIA_UNO)) {
            $modifiedColumns[':p' . $index++]  = 'pse_referencia_uno';
        }
        if ($this->isColumnModified(PagosonlinePeer::PSE_REFERENCIA_DOS)) {
            $modifiedColumns[':p' . $index++]  = 'pse_referencia_dos';
        }
        if ($this->isColumnModified(PagosonlinePeer::PSE_REFERENCIA_TRES)) {
            $modifiedColumns[':p' . $index++]  = 'pse_referencia_tres';
        }

        $sql = sprintf(
            'INSERT INTO pagosonline (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'pagosonline_id':
                        $stmt->bindValue($identifier, $this->pagosonline_id, PDO::PARAM_INT);
                        break;
                    case 'order_id':
                        $stmt->bindValue($identifier, $this->order_id, PDO::PARAM_INT);
                        break;
                    case 'estado_pol':
                        $stmt->bindValue($identifier, $this->estado_pol, PDO::PARAM_INT);
                        break;
                    case 'riesgo':
                        $stmt->bindValue($identifier, $this->riesgo, PDO::PARAM_INT);
                        break;
                    case 'codigo_respuesta_pol':
                        $stmt->bindValue($identifier, $this->codigo_respuesta_pol, PDO::PARAM_INT);
                        break;
                    case 'ref_pol':
                        $stmt->bindValue($identifier, $this->ref_pol, PDO::PARAM_INT);
                        break;
                    case 'extra_uno':
                        $stmt->bindValue($identifier, $this->extra_uno, PDO::PARAM_STR);
                        break;
                    case 'extra_dos':
                        $stmt->bindValue($identifier, $this->extra_dos, PDO::PARAM_STR);
                        break;
                    case 'medio_pago':
                        $stmt->bindValue($identifier, $this->medio_pago, PDO::PARAM_INT);
                        break;
                    case 'tipo_medio_pago':
                        $stmt->bindValue($identifier, $this->tipo_medio_pago, PDO::PARAM_STR);
                        break;
                    case 'cuotas':
                        $stmt->bindValue($identifier, $this->cuotas, PDO::PARAM_INT);
                        break;
                    case 'valor':
                        $stmt->bindValue($identifier, $this->valor, PDO::PARAM_STR);
                        break;
                    case 'iva':
                        $stmt->bindValue($identifier, $this->iva, PDO::PARAM_STR);
                        break;
                    case 'valor_adicional':
                        $stmt->bindValue($identifier, $this->valor_adicional, PDO::PARAM_STR);
                        break;
                    case 'fecha_transaccion':
                        $stmt->bindValue($identifier, $this->fecha_transaccion, PDO::PARAM_STR);
                        break;
                    case 'cus':
                        $stmt->bindValue($identifier, $this->cus, PDO::PARAM_INT);
                        break;
                    case 'banco_pse':
                        $stmt->bindValue($identifier, $this->banco_pse, PDO::PARAM_STR);
                        break;
                    case 'transaccion_id':
                        $stmt->bindValue($identifier, $this->transaccion_id, PDO::PARAM_INT);
                        break;
                    case 'usuario_id':
                        $stmt->bindValue($identifier, $this->usuario_id, PDO::PARAM_INT);
                        break;
                    case 'banco_id':
                        $stmt->bindValue($identifier, $this->banco_id, PDO::PARAM_INT);
                        break;
                    case 'medio_pago_id':
                        $stmt->bindValue($identifier, $this->medio_pago_id, PDO::PARAM_INT);
                        break;
                    case 'comision_pol':
                        $stmt->bindValue($identifier, $this->comision_pol, PDO::PARAM_STR);
                        break;
                    case 'estado_transaccion':
                        $stmt->bindValue($identifier, $this->estado_transaccion, PDO::PARAM_STR);
                        break;
                    case 'transaccion_banco_id':
                        $stmt->bindValue($identifier, $this->transaccion_banco_id, PDO::PARAM_INT);
                        break;
                    case 'codigo_autorizacion':
                        $stmt->bindValue($identifier, $this->codigo_autorizacion, PDO::PARAM_STR);
                        break;
                    case 'email_comprador':
                        $stmt->bindValue($identifier, $this->email_comprador, PDO::PARAM_STR);
                        break;
                    case 'nickname_comprador':
                        $stmt->bindValue($identifier, $this->nickname_comprador, PDO::PARAM_STR);
                        break;
                    case 'nickname_vendedor':
                        $stmt->bindValue($identifier, $this->nickname_vendedor, PDO::PARAM_STR);
                        break;
                    case 'descripcion':
                        $stmt->bindValue($identifier, $this->descripcion, PDO::PARAM_STR);
                        break;
                    case 'intentos':
                        $stmt->bindValue($identifier, $this->intentos, PDO::PARAM_INT);
                        break;
                    case 'ciclo_pse':
                        $stmt->bindValue($identifier, $this->ciclo_pse, PDO::PARAM_STR);
                        break;
                    case 'fecha':
                        $stmt->bindValue($identifier, $this->fecha, PDO::PARAM_STR);
                        break;
                    case 'moneda':
                        $stmt->bindValue($identifier, $this->moneda, PDO::PARAM_STR);
                        break;
                    case 'mensaje_respuesta_pol':
                        $stmt->bindValue($identifier, $this->mensaje_respuesta_pol, PDO::PARAM_STR);
                        break;
                    case 'mensaje_error_banco':
                        $stmt->bindValue($identifier, $this->mensaje_error_banco, PDO::PARAM_STR);
                        break;
                    case 'codigo_error_banco':
                        $stmt->bindValue($identifier, $this->codigo_error_banco, PDO::PARAM_STR);
                        break;
                    case 'tasa_cambio':
                        $stmt->bindValue($identifier, $this->tasa_cambio, PDO::PARAM_STR);
                        break;
                    case 'ip':
                        $stmt->bindValue($identifier, $this->ip, PDO::PARAM_STR);
                        break;
                    case 'numero_cliente':
                        $stmt->bindValue($identifier, $this->numero_cliente, PDO::PARAM_INT);
                        break;
                    case 'pago_recurrente':
                        $stmt->bindValue($identifier, $this->pago_recurrente, PDO::PARAM_INT);
                        break;
                    case 'numero_visible':
                        $stmt->bindValue($identifier, $this->numero_visible, PDO::PARAM_STR);
                        break;
                    case 'tarjeta_habiente':
                        $stmt->bindValue($identifier, $this->tarjeta_habiente, PDO::PARAM_STR);
                        break;
                    case 'franquicia':
                        $stmt->bindValue($identifier, $this->franquicia, PDO::PARAM_STR);
                        break;
                    case 'direccion_cobro':
                        $stmt->bindValue($identifier, $this->direccion_cobro, PDO::PARAM_STR);
                        break;
                    case 'ciudad_cobro':
                        $stmt->bindValue($identifier, $this->ciudad_cobro, PDO::PARAM_STR);
                        break;
                    case 'direccion_envio':
                        $stmt->bindValue($identifier, $this->direccion_envio, PDO::PARAM_STR);
                        break;
                    case 'ciudad_envio':
                        $stmt->bindValue($identifier, $this->ciudad_envio, PDO::PARAM_STR);
                        break;
                    case 'telefono':
                        $stmt->bindValue($identifier, $this->telefono, PDO::PARAM_STR);
                        break;
                    case 'telefono_oficina':
                        $stmt->bindValue($identifier, $this->telefono_oficina, PDO::PARAM_STR);
                        break;
                    case 'pais_envio':
                        $stmt->bindValue($identifier, $this->pais_envio, PDO::PARAM_STR);
                        break;
                    case 'pais_cobro':
                        $stmt->bindValue($identifier, $this->pais_cobro, PDO::PARAM_STR);
                        break;
                    case 'pse_referencia_uno':
                        $stmt->bindValue($identifier, $this->pse_referencia_uno, PDO::PARAM_STR);
                        break;
                    case 'pse_referencia_dos':
                        $stmt->bindValue($identifier, $this->pse_referencia_dos, PDO::PARAM_STR);
                        break;
                    case 'pse_referencia_tres':
                        $stmt->bindValue($identifier, $this->pse_referencia_tres, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setPagosonlineId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = PagosonlinePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = PagosonlinePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getPagosonlineId();
                break;
            case 1:
                return $this->getOrderId();
                break;
            case 2:
                return $this->getEstadoPol();
                break;
            case 3:
                return $this->getRiesgo();
                break;
            case 4:
                return $this->getCodigoRespuestaPol();
                break;
            case 5:
                return $this->getRefPol();
                break;
            case 6:
                return $this->getExtraUno();
                break;
            case 7:
                return $this->getExtraDos();
                break;
            case 8:
                return $this->getMedioPago();
                break;
            case 9:
                return $this->getTipoMedioPago();
                break;
            case 10:
                return $this->getCuotas();
                break;
            case 11:
                return $this->getValor();
                break;
            case 12:
                return $this->getIva();
                break;
            case 13:
                return $this->getValorAdicional();
                break;
            case 14:
                return $this->getFechaTransaccion();
                break;
            case 15:
                return $this->getCus();
                break;
            case 16:
                return $this->getBancoPse();
                break;
            case 17:
                return $this->getTransaccionId();
                break;
            case 18:
                return $this->getUsuarioId();
                break;
            case 19:
                return $this->getBancoId();
                break;
            case 20:
                return $this->getMedioPagoId();
                break;
            case 21:
                return $this->getComisionPol();
                break;
            case 22:
                return $this->getEstadoTransaccion();
                break;
            case 23:
                return $this->getTransaccionBancoId();
                break;
            case 24:
                return $this->getCodigoAutorizacion();
                break;
            case 25:
                return $this->getEmailComprador();
                break;
            case 26:
                return $this->getNicknameComprador();
                break;
            case 27:
                return $this->getNicknameVendedor();
                break;
            case 28:
                return $this->getDescripcion();
                break;
            case 29:
                return $this->getIntentos();
                break;
            case 30:
                return $this->getCicloPse();
                break;
            case 31:
                return $this->getFecha();
                break;
            case 32:
                return $this->getMoneda();
                break;
            case 33:
                return $this->getMensajeRespuestaPol();
                break;
            case 34:
                return $this->getMensajeErrorBanco();
                break;
            case 35:
                return $this->getCodigoErrorBanco();
                break;
            case 36:
                return $this->getTasaCambio();
                break;
            case 37:
                return $this->getIp();
                break;
            case 38:
                return $this->getNumeroCliente();
                break;
            case 39:
                return $this->getPagoRecurrente();
                break;
            case 40:
                return $this->getNumeroVisible();
                break;
            case 41:
                return $this->getTarjetaHabiente();
                break;
            case 42:
                return $this->getFranquicia();
                break;
            case 43:
                return $this->getDireccionCobro();
                break;
            case 44:
                return $this->getCiudadCobro();
                break;
            case 45:
                return $this->getDireccionEnvio();
                break;
            case 46:
                return $this->getCiudadEnvio();
                break;
            case 47:
                return $this->getTelefono();
                break;
            case 48:
                return $this->getTelefonoOficina();
                break;
            case 49:
                return $this->getPaisEnvio();
                break;
            case 50:
                return $this->getPaisCobro();
                break;
            case 51:
                return $this->getPseReferenciaUno();
                break;
            case 52:
                return $this->getPseReferenciaDos();
                break;
            case 53:
                return $this->getPseReferenciaTres();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['Pagosonline'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Pagosonline'][$this->getPrimaryKey()] = true;
        $keys = PagosonlinePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPagosonlineId(),
            $keys[1] => $this->getOrderId(),
            $keys[2] => $this->getEstadoPol(),
            $keys[3] => $this->getRiesgo(),
            $keys[4] => $this->getCodigoRespuestaPol(),
            $keys[5] => $this->getRefPol(),
            $keys[6] => $this->getExtraUno(),
            $keys[7] => $this->getExtraDos(),
            $keys[8] => $this->getMedioPago(),
            $keys[9] => $this->getTipoMedioPago(),
            $keys[10] => $this->getCuotas(),
            $keys[11] => $this->getValor(),
            $keys[12] => $this->getIva(),
            $keys[13] => $this->getValorAdicional(),
            $keys[14] => $this->getFechaTransaccion(),
            $keys[15] => $this->getCus(),
            $keys[16] => $this->getBancoPse(),
            $keys[17] => $this->getTransaccionId(),
            $keys[18] => $this->getUsuarioId(),
            $keys[19] => $this->getBancoId(),
            $keys[20] => $this->getMedioPagoId(),
            $keys[21] => $this->getComisionPol(),
            $keys[22] => $this->getEstadoTransaccion(),
            $keys[23] => $this->getTransaccionBancoId(),
            $keys[24] => $this->getCodigoAutorizacion(),
            $keys[25] => $this->getEmailComprador(),
            $keys[26] => $this->getNicknameComprador(),
            $keys[27] => $this->getNicknameVendedor(),
            $keys[28] => $this->getDescripcion(),
            $keys[29] => $this->getIntentos(),
            $keys[30] => $this->getCicloPse(),
            $keys[31] => $this->getFecha(),
            $keys[32] => $this->getMoneda(),
            $keys[33] => $this->getMensajeRespuestaPol(),
            $keys[34] => $this->getMensajeErrorBanco(),
            $keys[35] => $this->getCodigoErrorBanco(),
            $keys[36] => $this->getTasaCambio(),
            $keys[37] => $this->getIp(),
            $keys[38] => $this->getNumeroCliente(),
            $keys[39] => $this->getPagoRecurrente(),
            $keys[40] => $this->getNumeroVisible(),
            $keys[41] => $this->getTarjetaHabiente(),
            $keys[42] => $this->getFranquicia(),
            $keys[43] => $this->getDireccionCobro(),
            $keys[44] => $this->getCiudadCobro(),
            $keys[45] => $this->getDireccionEnvio(),
            $keys[46] => $this->getCiudadEnvio(),
            $keys[47] => $this->getTelefono(),
            $keys[48] => $this->getTelefonoOficina(),
            $keys[49] => $this->getPaisEnvio(),
            $keys[50] => $this->getPaisCobro(),
            $keys[51] => $this->getPseReferenciaUno(),
            $keys[52] => $this->getPseReferenciaDos(),
            $keys[53] => $this->getPseReferenciaTres(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach($virtualColumns as $key => $virtualColumn)
        {
            $result[$key] = $virtualColumn;
        }


        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = PagosonlinePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setPagosonlineId($value);
                break;
            case 1:
                $this->setOrderId($value);
                break;
            case 2:
                $this->setEstadoPol($value);
                break;
            case 3:
                $this->setRiesgo($value);
                break;
            case 4:
                $this->setCodigoRespuestaPol($value);
                break;
            case 5:
                $this->setRefPol($value);
                break;
            case 6:
                $this->setExtraUno($value);
                break;
            case 7:
                $this->setExtraDos($value);
                break;
            case 8:
                $this->setMedioPago($value);
                break;
            case 9:
                $this->setTipoMedioPago($value);
                break;
            case 10:
                $this->setCuotas($value);
                break;
            case 11:
                $this->setValor($value);
                break;
            case 12:
                $this->setIva($value);
                break;
            case 13:
                $this->setValorAdicional($value);
                break;
            case 14:
                $this->setFechaTransaccion($value);
                break;
            case 15:
                $this->setCus($value);
                break;
            case 16:
                $this->setBancoPse($value);
                break;
            case 17:
                $this->setTransaccionId($value);
                break;
            case 18:
                $this->setUsuarioId($value);
                break;
            case 19:
                $this->setBancoId($value);
                break;
            case 20:
                $this->setMedioPagoId($value);
                break;
            case 21:
                $this->setComisionPol($value);
                break;
            case 22:
                $this->setEstadoTransaccion($value);
                break;
            case 23:
                $this->setTransaccionBancoId($value);
                break;
            case 24:
                $this->setCodigoAutorizacion($value);
                break;
            case 25:
                $this->setEmailComprador($value);
                break;
            case 26:
                $this->setNicknameComprador($value);
                break;
            case 27:
                $this->setNicknameVendedor($value);
                break;
            case 28:
                $this->setDescripcion($value);
                break;
            case 29:
                $this->setIntentos($value);
                break;
            case 30:
                $this->setCicloPse($value);
                break;
            case 31:
                $this->setFecha($value);
                break;
            case 32:
                $this->setMoneda($value);
                break;
            case 33:
                $this->setMensajeRespuestaPol($value);
                break;
            case 34:
                $this->setMensajeErrorBanco($value);
                break;
            case 35:
                $this->setCodigoErrorBanco($value);
                break;
            case 36:
                $this->setTasaCambio($value);
                break;
            case 37:
                $this->setIp($value);
                break;
            case 38:
                $this->setNumeroCliente($value);
                break;
            case 39:
                $this->setPagoRecurrente($value);
                break;
            case 40:
                $this->setNumeroVisible($value);
                break;
            case 41:
                $this->setTarjetaHabiente($value);
                break;
            case 42:
                $this->setFranquicia($value);
                break;
            case 43:
                $this->setDireccionCobro($value);
                break;
            case 44:
                $this->setCiudadCobro($value);
                break;
            case 45:
                $this->setDireccionEnvio($value);
                break;
            case 46:
                $this->setCiudadEnvio($value);
                break;
            case 47:
                $this->setTelefono($value);
                break;
            case 48:
                $this->setTelefonoOficina($value);
                break;
            case 49:
                $this->setPaisEnvio($value);
                break;
            case 50:
                $this->setPaisCobro($value);
                break;
            case 51:
                $this->setPseReferenciaUno($value);
                break;
            case 52:
                $this->setPseReferenciaDos($value);
                break;
            case 53:
                $this->setPseReferenciaTres($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = PagosonlinePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setPagosonlineId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrderId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEstadoPol($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRiesgo($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCodigoRespuestaPol($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRefPol($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setExtraUno($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setExtraDos($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setMedioPago($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTipoMedioPago($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCuotas($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setValor($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setIva($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setValorAdicional($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setFechaTransaccion($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setCus($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setBancoPse($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setTransaccionId($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setUsuarioId($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setBancoId($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setMedioPagoId($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setComisionPol($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setEstadoTransaccion($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setTransaccionBancoId($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setCodigoAutorizacion($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setEmailComprador($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setNicknameComprador($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setNicknameVendedor($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setDescripcion($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setIntentos($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setCicloPse($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setFecha($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setMoneda($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setMensajeRespuestaPol($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setMensajeErrorBanco($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setCodigoErrorBanco($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setTasaCambio($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setIp($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setNumeroCliente($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setPagoRecurrente($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setNumeroVisible($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setTarjetaHabiente($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setFranquicia($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setDireccionCobro($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setCiudadCobro($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setDireccionEnvio($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setCiudadEnvio($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setTelefono($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setTelefonoOficina($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setPaisEnvio($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setPaisCobro($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setPseReferenciaUno($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setPseReferenciaDos($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setPseReferenciaTres($arr[$keys[53]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PagosonlinePeer::DATABASE_NAME);

        if ($this->isColumnModified(PagosonlinePeer::PAGOSONLINE_ID)) $criteria->add(PagosonlinePeer::PAGOSONLINE_ID, $this->pagosonline_id);
        if ($this->isColumnModified(PagosonlinePeer::ORDER_ID)) $criteria->add(PagosonlinePeer::ORDER_ID, $this->order_id);
        if ($this->isColumnModified(PagosonlinePeer::ESTADO_POL)) $criteria->add(PagosonlinePeer::ESTADO_POL, $this->estado_pol);
        if ($this->isColumnModified(PagosonlinePeer::RIESGO)) $criteria->add(PagosonlinePeer::RIESGO, $this->riesgo);
        if ($this->isColumnModified(PagosonlinePeer::CODIGO_RESPUESTA_POL)) $criteria->add(PagosonlinePeer::CODIGO_RESPUESTA_POL, $this->codigo_respuesta_pol);
        if ($this->isColumnModified(PagosonlinePeer::REF_POL)) $criteria->add(PagosonlinePeer::REF_POL, $this->ref_pol);
        if ($this->isColumnModified(PagosonlinePeer::EXTRA_UNO)) $criteria->add(PagosonlinePeer::EXTRA_UNO, $this->extra_uno);
        if ($this->isColumnModified(PagosonlinePeer::EXTRA_DOS)) $criteria->add(PagosonlinePeer::EXTRA_DOS, $this->extra_dos);
        if ($this->isColumnModified(PagosonlinePeer::MEDIO_PAGO)) $criteria->add(PagosonlinePeer::MEDIO_PAGO, $this->medio_pago);
        if ($this->isColumnModified(PagosonlinePeer::TIPO_MEDIO_PAGO)) $criteria->add(PagosonlinePeer::TIPO_MEDIO_PAGO, $this->tipo_medio_pago);
        if ($this->isColumnModified(PagosonlinePeer::CUOTAS)) $criteria->add(PagosonlinePeer::CUOTAS, $this->cuotas);
        if ($this->isColumnModified(PagosonlinePeer::VALOR)) $criteria->add(PagosonlinePeer::VALOR, $this->valor);
        if ($this->isColumnModified(PagosonlinePeer::IVA)) $criteria->add(PagosonlinePeer::IVA, $this->iva);
        if ($this->isColumnModified(PagosonlinePeer::VALOR_ADICIONAL)) $criteria->add(PagosonlinePeer::VALOR_ADICIONAL, $this->valor_adicional);
        if ($this->isColumnModified(PagosonlinePeer::FECHA_TRANSACCION)) $criteria->add(PagosonlinePeer::FECHA_TRANSACCION, $this->fecha_transaccion);
        if ($this->isColumnModified(PagosonlinePeer::CUS)) $criteria->add(PagosonlinePeer::CUS, $this->cus);
        if ($this->isColumnModified(PagosonlinePeer::BANCO_PSE)) $criteria->add(PagosonlinePeer::BANCO_PSE, $this->banco_pse);
        if ($this->isColumnModified(PagosonlinePeer::TRANSACCION_ID)) $criteria->add(PagosonlinePeer::TRANSACCION_ID, $this->transaccion_id);
        if ($this->isColumnModified(PagosonlinePeer::USUARIO_ID)) $criteria->add(PagosonlinePeer::USUARIO_ID, $this->usuario_id);
        if ($this->isColumnModified(PagosonlinePeer::BANCO_ID)) $criteria->add(PagosonlinePeer::BANCO_ID, $this->banco_id);
        if ($this->isColumnModified(PagosonlinePeer::MEDIO_PAGO_ID)) $criteria->add(PagosonlinePeer::MEDIO_PAGO_ID, $this->medio_pago_id);
        if ($this->isColumnModified(PagosonlinePeer::COMISION_POL)) $criteria->add(PagosonlinePeer::COMISION_POL, $this->comision_pol);
        if ($this->isColumnModified(PagosonlinePeer::ESTADO_TRANSACCION)) $criteria->add(PagosonlinePeer::ESTADO_TRANSACCION, $this->estado_transaccion);
        if ($this->isColumnModified(PagosonlinePeer::TRANSACCION_BANCO_ID)) $criteria->add(PagosonlinePeer::TRANSACCION_BANCO_ID, $this->transaccion_banco_id);
        if ($this->isColumnModified(PagosonlinePeer::CODIGO_AUTORIZACION)) $criteria->add(PagosonlinePeer::CODIGO_AUTORIZACION, $this->codigo_autorizacion);
        if ($this->isColumnModified(PagosonlinePeer::EMAIL_COMPRADOR)) $criteria->add(PagosonlinePeer::EMAIL_COMPRADOR, $this->email_comprador);
        if ($this->isColumnModified(PagosonlinePeer::NICKNAME_COMPRADOR)) $criteria->add(PagosonlinePeer::NICKNAME_COMPRADOR, $this->nickname_comprador);
        if ($this->isColumnModified(PagosonlinePeer::NICKNAME_VENDEDOR)) $criteria->add(PagosonlinePeer::NICKNAME_VENDEDOR, $this->nickname_vendedor);
        if ($this->isColumnModified(PagosonlinePeer::DESCRIPCION)) $criteria->add(PagosonlinePeer::DESCRIPCION, $this->descripcion);
        if ($this->isColumnModified(PagosonlinePeer::INTENTOS)) $criteria->add(PagosonlinePeer::INTENTOS, $this->intentos);
        if ($this->isColumnModified(PagosonlinePeer::CICLO_PSE)) $criteria->add(PagosonlinePeer::CICLO_PSE, $this->ciclo_pse);
        if ($this->isColumnModified(PagosonlinePeer::FECHA)) $criteria->add(PagosonlinePeer::FECHA, $this->fecha);
        if ($this->isColumnModified(PagosonlinePeer::MONEDA)) $criteria->add(PagosonlinePeer::MONEDA, $this->moneda);
        if ($this->isColumnModified(PagosonlinePeer::MENSAJE_RESPUESTA_POL)) $criteria->add(PagosonlinePeer::MENSAJE_RESPUESTA_POL, $this->mensaje_respuesta_pol);
        if ($this->isColumnModified(PagosonlinePeer::MENSAJE_ERROR_BANCO)) $criteria->add(PagosonlinePeer::MENSAJE_ERROR_BANCO, $this->mensaje_error_banco);
        if ($this->isColumnModified(PagosonlinePeer::CODIGO_ERROR_BANCO)) $criteria->add(PagosonlinePeer::CODIGO_ERROR_BANCO, $this->codigo_error_banco);
        if ($this->isColumnModified(PagosonlinePeer::TASA_CAMBIO)) $criteria->add(PagosonlinePeer::TASA_CAMBIO, $this->tasa_cambio);
        if ($this->isColumnModified(PagosonlinePeer::IP)) $criteria->add(PagosonlinePeer::IP, $this->ip);
        if ($this->isColumnModified(PagosonlinePeer::NUMERO_CLIENTE)) $criteria->add(PagosonlinePeer::NUMERO_CLIENTE, $this->numero_cliente);
        if ($this->isColumnModified(PagosonlinePeer::PAGO_RECURRENTE)) $criteria->add(PagosonlinePeer::PAGO_RECURRENTE, $this->pago_recurrente);
        if ($this->isColumnModified(PagosonlinePeer::NUMERO_VISIBLE)) $criteria->add(PagosonlinePeer::NUMERO_VISIBLE, $this->numero_visible);
        if ($this->isColumnModified(PagosonlinePeer::TARJETA_HABIENTE)) $criteria->add(PagosonlinePeer::TARJETA_HABIENTE, $this->tarjeta_habiente);
        if ($this->isColumnModified(PagosonlinePeer::FRANQUICIA)) $criteria->add(PagosonlinePeer::FRANQUICIA, $this->franquicia);
        if ($this->isColumnModified(PagosonlinePeer::DIRECCION_COBRO)) $criteria->add(PagosonlinePeer::DIRECCION_COBRO, $this->direccion_cobro);
        if ($this->isColumnModified(PagosonlinePeer::CIUDAD_COBRO)) $criteria->add(PagosonlinePeer::CIUDAD_COBRO, $this->ciudad_cobro);
        if ($this->isColumnModified(PagosonlinePeer::DIRECCION_ENVIO)) $criteria->add(PagosonlinePeer::DIRECCION_ENVIO, $this->direccion_envio);
        if ($this->isColumnModified(PagosonlinePeer::CIUDAD_ENVIO)) $criteria->add(PagosonlinePeer::CIUDAD_ENVIO, $this->ciudad_envio);
        if ($this->isColumnModified(PagosonlinePeer::TELEFONO)) $criteria->add(PagosonlinePeer::TELEFONO, $this->telefono);
        if ($this->isColumnModified(PagosonlinePeer::TELEFONO_OFICINA)) $criteria->add(PagosonlinePeer::TELEFONO_OFICINA, $this->telefono_oficina);
        if ($this->isColumnModified(PagosonlinePeer::PAIS_ENVIO)) $criteria->add(PagosonlinePeer::PAIS_ENVIO, $this->pais_envio);
        if ($this->isColumnModified(PagosonlinePeer::PAIS_COBRO)) $criteria->add(PagosonlinePeer::PAIS_COBRO, $this->pais_cobro);
        if ($this->isColumnModified(PagosonlinePeer::PSE_REFERENCIA_UNO)) $criteria->add(PagosonlinePeer::PSE_REFERENCIA_UNO, $this->pse_referencia_uno);
        if ($this->isColumnModified(PagosonlinePeer::PSE_REFERENCIA_DOS)) $criteria->add(PagosonlinePeer::PSE_REFERENCIA_DOS, $this->pse_referencia_dos);
        if ($this->isColumnModified(PagosonlinePeer::PSE_REFERENCIA_TRES)) $criteria->add(PagosonlinePeer::PSE_REFERENCIA_TRES, $this->pse_referencia_tres);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(PagosonlinePeer::DATABASE_NAME);
        $criteria->add(PagosonlinePeer::PAGOSONLINE_ID, $this->pagosonline_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getPagosonlineId();
    }

    /**
     * Generic method to set the primary key (pagosonline_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setPagosonlineId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getPagosonlineId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Pagosonline (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrderId($this->getOrderId());
        $copyObj->setEstadoPol($this->getEstadoPol());
        $copyObj->setRiesgo($this->getRiesgo());
        $copyObj->setCodigoRespuestaPol($this->getCodigoRespuestaPol());
        $copyObj->setRefPol($this->getRefPol());
        $copyObj->setExtraUno($this->getExtraUno());
        $copyObj->setExtraDos($this->getExtraDos());
        $copyObj->setMedioPago($this->getMedioPago());
        $copyObj->setTipoMedioPago($this->getTipoMedioPago());
        $copyObj->setCuotas($this->getCuotas());
        $copyObj->setValor($this->getValor());
        $copyObj->setIva($this->getIva());
        $copyObj->setValorAdicional($this->getValorAdicional());
        $copyObj->setFechaTransaccion($this->getFechaTransaccion());
        $copyObj->setCus($this->getCus());
        $copyObj->setBancoPse($this->getBancoPse());
        $copyObj->setTransaccionId($this->getTransaccionId());
        $copyObj->setUsuarioId($this->getUsuarioId());
        $copyObj->setBancoId($this->getBancoId());
        $copyObj->setMedioPagoId($this->getMedioPagoId());
        $copyObj->setComisionPol($this->getComisionPol());
        $copyObj->setEstadoTransaccion($this->getEstadoTransaccion());
        $copyObj->setTransaccionBancoId($this->getTransaccionBancoId());
        $copyObj->setCodigoAutorizacion($this->getCodigoAutorizacion());
        $copyObj->setEmailComprador($this->getEmailComprador());
        $copyObj->setNicknameComprador($this->getNicknameComprador());
        $copyObj->setNicknameVendedor($this->getNicknameVendedor());
        $copyObj->setDescripcion($this->getDescripcion());
        $copyObj->setIntentos($this->getIntentos());
        $copyObj->setCicloPse($this->getCicloPse());
        $copyObj->setFecha($this->getFecha());
        $copyObj->setMoneda($this->getMoneda());
        $copyObj->setMensajeRespuestaPol($this->getMensajeRespuestaPol());
        $copyObj->setMensajeErrorBanco($this->getMensajeErrorBanco());
        $copyObj->setCodigoErrorBanco($this->getCodigoErrorBanco());
        $copyObj->setTasaCambio($this->getTasaCambio());
        $copyObj->setIp($this->getIp());
        $copyObj->setNumeroCliente($this->getNumeroCliente());
        $copyObj->setPagoRecurrente($this->getPagoRecurrente());
        $copyObj->setNumeroVisible($this->getNumeroVisible());
        $copyObj->setTarjetaHabiente($this->getTarjetaHabiente());
        $copyObj->setFranquicia($this->getFranquicia());
        $copyObj->setDireccionCobro($this->getDireccionCobro());
        $copyObj->setCiudadCobro($this->getCiudadCobro());
        $copyObj->setDireccionEnvio($this->getDireccionEnvio());
        $copyObj->setCiudadEnvio($this->getCiudadEnvio());
        $copyObj->setTelefono($this->getTelefono());
        $copyObj->setTelefonoOficina($this->getTelefonoOficina());
        $copyObj->setPaisEnvio($this->getPaisEnvio());
        $copyObj->setPaisCobro($this->getPaisCobro());
        $copyObj->setPseReferenciaUno($this->getPseReferenciaUno());
        $copyObj->setPseReferenciaDos($this->getPseReferenciaDos());
        $copyObj->setPseReferenciaTres($this->getPseReferenciaTres());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setPagosonlineId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Pagosonline Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return PagosonlinePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PagosonlinePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->pagosonline_id = null;
        $this->order_id = null;
        $this->estado_pol = null;
        $this->riesgo = null;
        $this->codigo_respuesta_pol = null;
        $this->ref_pol = null;
        $this->extra_uno = null;
        $this->extra_dos = null;
        $this->medio_pago = null;
        $this->tipo_medio_pago = null;
        $this->cuotas = null;
        $this->valor = null;
        $this->iva = null;
        $this->valor_adicional = null;
        $this->fecha_transaccion = null;
        $this->cus = null;
        $this->banco_pse = null;
        $this->transaccion_id = null;
        $this->usuario_id = null;
        $this->banco_id = null;
        $this->medio_pago_id = null;
        $this->comision_pol = null;
        $this->estado_transaccion = null;
        $this->transaccion_banco_id = null;
        $this->codigo_autorizacion = null;
        $this->email_comprador = null;
        $this->nickname_comprador = null;
        $this->nickname_vendedor = null;
        $this->descripcion = null;
        $this->intentos = null;
        $this->ciclo_pse = null;
        $this->fecha = null;
        $this->moneda = null;
        $this->mensaje_respuesta_pol = null;
        $this->mensaje_error_banco = null;
        $this->codigo_error_banco = null;
        $this->tasa_cambio = null;
        $this->ip = null;
        $this->numero_cliente = null;
        $this->pago_recurrente = null;
        $this->numero_visible = null;
        $this->tarjeta_habiente = null;
        $this->franquicia = null;
        $this->direccion_cobro = null;
        $this->ciudad_cobro = null;
        $this->direccion_envio = null;
        $this->ciudad_envio = null;
        $this->telefono = null;
        $this->telefono_oficina = null;
        $this->pais_envio = null;
        $this->pais_cobro = null;
        $this->pse_referencia_uno = null;
        $this->pse_referencia_dos = null;
        $this->pse_referencia_tres = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PagosonlinePeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
