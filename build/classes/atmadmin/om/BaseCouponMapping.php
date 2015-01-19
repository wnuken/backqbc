<?php


/**
 * Base class that represents a row from the 'coupon_mapping' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseCouponMapping extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CouponMappingPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CouponMappingPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the mapping_id field.
     * @var        int
     */
    protected $mapping_id;

    /**
     * The value for the coupon field.
     * @var        string
     */
    protected $coupon;

    /**
     * The value for the coupon_md5 field.
     * @var        string
     */
    protected $coupon_md5;

    /**
     * The value for the expiration_date field.
     * @var        string
     */
    protected $expiration_date;

    /**
     * The value for the customer_id field.
     * @var        int
     */
    protected $customer_id;

    /**
     * The value for the can_send field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $can_send;

    /**
     * The value for the status field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $status;

    /**
     * The value for the order_id field.
     * @var        int
     */
    protected $order_id;

    /**
     * The value for the item_id field.
     * @var        int
     */
    protected $item_id;

    /**
     * The value for the payed_for_return field.
     * @var        int
     */
    protected $payed_for_return;

    /**
     * The value for the increment_id field.
     * @var        string
     */
    protected $increment_id;

    /**
     * The value for the unit field.
     * @var        int
     */
    protected $unit;

    /**
     * The value for the personalized_coupon field.
     * @var        int
     */
    protected $personalized_coupon;

    /**
     * The value for the pos_number field.
     * @var        string
     */
    protected $pos_number;

    /**
     * The value for the hash field.
     * @var        string
     */
    protected $hash;

    /**
     * @var        SalesFlatOrder
     */
    protected $aSalesFlatOrder;

    /**
     * @var        PersonalizedCoupons
     */
    protected $aPersonalizedCoupons;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->can_send = 1;
        $this->status = 1;
    }

    /**
     * Initializes internal state of BaseCouponMapping object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [mapping_id] column value.
     *
     * @return int
     */
    public function getMappingId()
    {

        return $this->mapping_id;
    }

    /**
     * Get the [coupon] column value.
     *
     * @return string
     */
    public function getCoupon()
    {

        return $this->coupon;
    }

    /**
     * Get the [coupon_md5] column value.
     *
     * @return string
     */
    public function getCouponMd5()
    {

        return $this->coupon_md5;
    }

    /**
     * Get the [optionally formatted] temporal [expiration_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getExpirationDate($format = 'Y-m-d H:i:s')
    {
        if ($this->expiration_date === null) {
            return null;
        }

        if ($this->expiration_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->expiration_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->expiration_date, true), $x);
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
     * Get the [customer_id] column value.
     *
     * @return int
     */
    public function getCustomerId()
    {

        return $this->customer_id;
    }

    /**
     * Get the [can_send] column value.
     *
     * @return int
     */
    public function getCanSend()
    {

        return $this->can_send;
    }

    /**
     * Get the [status] column value.
     *
     * @return int
     */
    public function getStatus()
    {

        return $this->status;
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
     * Get the [item_id] column value.
     *
     * @return int
     */
    public function getItemId()
    {

        return $this->item_id;
    }

    /**
     * Get the [payed_for_return] column value.
     *
     * @return int
     */
    public function getPayedForReturn()
    {

        return $this->payed_for_return;
    }

    /**
     * Get the [increment_id] column value.
     *
     * @return string
     */
    public function getIncrementId()
    {

        return $this->increment_id;
    }

    /**
     * Get the [unit] column value.
     *
     * @return int
     */
    public function getUnit()
    {

        return $this->unit;
    }

    /**
     * Get the [personalized_coupon] column value.
     *
     * @return int
     */
    public function getPersonalizedCoupon()
    {

        return $this->personalized_coupon;
    }

    /**
     * Get the [pos_number] column value.
     *
     * @return string
     */
    public function getPosNumber()
    {

        return $this->pos_number;
    }

    /**
     * Get the [hash] column value.
     *
     * @return string
     */
    public function getHash()
    {

        return $this->hash;
    }

    /**
     * Set the value of [mapping_id] column.
     *
     * @param  int $v new value
     * @return CouponMapping The current object (for fluent API support)
     */
    public function setMappingId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mapping_id !== $v) {
            $this->mapping_id = $v;
            $this->modifiedColumns[] = CouponMappingPeer::MAPPING_ID;
        }


        return $this;
    } // setMappingId()

    /**
     * Set the value of [coupon] column.
     *
     * @param  string $v new value
     * @return CouponMapping The current object (for fluent API support)
     */
    public function setCoupon($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->coupon !== $v) {
            $this->coupon = $v;
            $this->modifiedColumns[] = CouponMappingPeer::COUPON;
        }


        return $this;
    } // setCoupon()

    /**
     * Set the value of [coupon_md5] column.
     *
     * @param  string $v new value
     * @return CouponMapping The current object (for fluent API support)
     */
    public function setCouponMd5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->coupon_md5 !== $v) {
            $this->coupon_md5 = $v;
            $this->modifiedColumns[] = CouponMappingPeer::COUPON_MD5;
        }


        return $this;
    } // setCouponMd5()

    /**
     * Sets the value of [expiration_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CouponMapping The current object (for fluent API support)
     */
    public function setExpirationDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->expiration_date !== null || $dt !== null) {
            $currentDateAsString = ($this->expiration_date !== null && $tmpDt = new DateTime($this->expiration_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->expiration_date = $newDateAsString;
                $this->modifiedColumns[] = CouponMappingPeer::EXPIRATION_DATE;
            }
        } // if either are not null


        return $this;
    } // setExpirationDate()

    /**
     * Set the value of [customer_id] column.
     *
     * @param  int $v new value
     * @return CouponMapping The current object (for fluent API support)
     */
    public function setCustomerId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->customer_id !== $v) {
            $this->customer_id = $v;
            $this->modifiedColumns[] = CouponMappingPeer::CUSTOMER_ID;
        }


        return $this;
    } // setCustomerId()

    /**
     * Set the value of [can_send] column.
     *
     * @param  int $v new value
     * @return CouponMapping The current object (for fluent API support)
     */
    public function setCanSend($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->can_send !== $v) {
            $this->can_send = $v;
            $this->modifiedColumns[] = CouponMappingPeer::CAN_SEND;
        }


        return $this;
    } // setCanSend()

    /**
     * Set the value of [status] column.
     *
     * @param  int $v new value
     * @return CouponMapping The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[] = CouponMappingPeer::STATUS;
        }


        return $this;
    } // setStatus()

    /**
     * Set the value of [order_id] column.
     *
     * @param  int $v new value
     * @return CouponMapping The current object (for fluent API support)
     */
    public function setOrderId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->order_id !== $v) {
            $this->order_id = $v;
            $this->modifiedColumns[] = CouponMappingPeer::ORDER_ID;
        }


        return $this;
    } // setOrderId()

    /**
     * Set the value of [item_id] column.
     *
     * @param  int $v new value
     * @return CouponMapping The current object (for fluent API support)
     */
    public function setItemId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->item_id !== $v) {
            $this->item_id = $v;
            $this->modifiedColumns[] = CouponMappingPeer::ITEM_ID;
        }


        return $this;
    } // setItemId()

    /**
     * Set the value of [payed_for_return] column.
     *
     * @param  int $v new value
     * @return CouponMapping The current object (for fluent API support)
     */
    public function setPayedForReturn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->payed_for_return !== $v) {
            $this->payed_for_return = $v;
            $this->modifiedColumns[] = CouponMappingPeer::PAYED_FOR_RETURN;
        }


        return $this;
    } // setPayedForReturn()

    /**
     * Set the value of [increment_id] column.
     *
     * @param  string $v new value
     * @return CouponMapping The current object (for fluent API support)
     */
    public function setIncrementId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->increment_id !== $v) {
            $this->increment_id = $v;
            $this->modifiedColumns[] = CouponMappingPeer::INCREMENT_ID;
        }

        if ($this->aSalesFlatOrder !== null && $this->aSalesFlatOrder->getIncrementId() !== $v) {
            $this->aSalesFlatOrder = null;
        }


        return $this;
    } // setIncrementId()

    /**
     * Set the value of [unit] column.
     *
     * @param  int $v new value
     * @return CouponMapping The current object (for fluent API support)
     */
    public function setUnit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->unit !== $v) {
            $this->unit = $v;
            $this->modifiedColumns[] = CouponMappingPeer::UNIT;
        }


        return $this;
    } // setUnit()

    /**
     * Set the value of [personalized_coupon] column.
     *
     * @param  int $v new value
     * @return CouponMapping The current object (for fluent API support)
     */
    public function setPersonalizedCoupon($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->personalized_coupon !== $v) {
            $this->personalized_coupon = $v;
            $this->modifiedColumns[] = CouponMappingPeer::PERSONALIZED_COUPON;
        }

        if ($this->aPersonalizedCoupons !== null && $this->aPersonalizedCoupons->getId() !== $v) {
            $this->aPersonalizedCoupons = null;
        }


        return $this;
    } // setPersonalizedCoupon()

    /**
     * Set the value of [pos_number] column.
     *
     * @param  string $v new value
     * @return CouponMapping The current object (for fluent API support)
     */
    public function setPosNumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pos_number !== $v) {
            $this->pos_number = $v;
            $this->modifiedColumns[] = CouponMappingPeer::POS_NUMBER;
        }


        return $this;
    } // setPosNumber()

    /**
     * Set the value of [hash] column.
     *
     * @param  string $v new value
     * @return CouponMapping The current object (for fluent API support)
     */
    public function setHash($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hash !== $v) {
            $this->hash = $v;
            $this->modifiedColumns[] = CouponMappingPeer::HASH;
        }


        return $this;
    } // setHash()

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
            if ($this->can_send !== 1) {
                return false;
            }

            if ($this->status !== 1) {
                return false;
            }

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

            $this->mapping_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->coupon = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->coupon_md5 = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->expiration_date = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->customer_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->can_send = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->status = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->order_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->item_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->payed_for_return = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->increment_id = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->unit = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->personalized_coupon = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->pos_number = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->hash = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = CouponMappingPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CouponMapping object", $e);
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

        if ($this->aSalesFlatOrder !== null && $this->increment_id !== $this->aSalesFlatOrder->getIncrementId()) {
            $this->aSalesFlatOrder = null;
        }
        if ($this->aPersonalizedCoupons !== null && $this->personalized_coupon !== $this->aPersonalizedCoupons->getId()) {
            $this->aPersonalizedCoupons = null;
        }
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
            $con = Propel::getConnection(CouponMappingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CouponMappingPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSalesFlatOrder = null;
            $this->aPersonalizedCoupons = null;
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
            $con = Propel::getConnection(CouponMappingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CouponMappingQuery::create()
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
            $con = Propel::getConnection(CouponMappingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CouponMappingPeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aSalesFlatOrder !== null) {
                if ($this->aSalesFlatOrder->isModified() || $this->aSalesFlatOrder->isNew()) {
                    $affectedRows += $this->aSalesFlatOrder->save($con);
                }
                $this->setSalesFlatOrder($this->aSalesFlatOrder);
            }

            if ($this->aPersonalizedCoupons !== null) {
                if ($this->aPersonalizedCoupons->isModified() || $this->aPersonalizedCoupons->isNew()) {
                    $affectedRows += $this->aPersonalizedCoupons->save($con);
                }
                $this->setPersonalizedCoupons($this->aPersonalizedCoupons);
            }

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

        $this->modifiedColumns[] = CouponMappingPeer::MAPPING_ID;
        if (null !== $this->mapping_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CouponMappingPeer::MAPPING_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CouponMappingPeer::MAPPING_ID)) {
            $modifiedColumns[':p' . $index++]  = 'mapping_id';
        }
        if ($this->isColumnModified(CouponMappingPeer::COUPON)) {
            $modifiedColumns[':p' . $index++]  = 'coupon';
        }
        if ($this->isColumnModified(CouponMappingPeer::COUPON_MD5)) {
            $modifiedColumns[':p' . $index++]  = 'coupon_md5';
        }
        if ($this->isColumnModified(CouponMappingPeer::EXPIRATION_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'expiration_date';
        }
        if ($this->isColumnModified(CouponMappingPeer::CUSTOMER_ID)) {
            $modifiedColumns[':p' . $index++]  = 'customer_id';
        }
        if ($this->isColumnModified(CouponMappingPeer::CAN_SEND)) {
            $modifiedColumns[':p' . $index++]  = 'can_send';
        }
        if ($this->isColumnModified(CouponMappingPeer::STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(CouponMappingPeer::ORDER_ID)) {
            $modifiedColumns[':p' . $index++]  = 'order_id';
        }
        if ($this->isColumnModified(CouponMappingPeer::ITEM_ID)) {
            $modifiedColumns[':p' . $index++]  = 'item_id';
        }
        if ($this->isColumnModified(CouponMappingPeer::PAYED_FOR_RETURN)) {
            $modifiedColumns[':p' . $index++]  = 'payed_for_return';
        }
        if ($this->isColumnModified(CouponMappingPeer::INCREMENT_ID)) {
            $modifiedColumns[':p' . $index++]  = 'increment_id';
        }
        if ($this->isColumnModified(CouponMappingPeer::UNIT)) {
            $modifiedColumns[':p' . $index++]  = 'unit';
        }
        if ($this->isColumnModified(CouponMappingPeer::PERSONALIZED_COUPON)) {
            $modifiedColumns[':p' . $index++]  = 'personalized_coupon';
        }
        if ($this->isColumnModified(CouponMappingPeer::POS_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = 'pos_number';
        }
        if ($this->isColumnModified(CouponMappingPeer::HASH)) {
            $modifiedColumns[':p' . $index++]  = 'hash';
        }

        $sql = sprintf(
            'INSERT INTO coupon_mapping (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'mapping_id':
                        $stmt->bindValue($identifier, $this->mapping_id, PDO::PARAM_INT);
                        break;
                    case 'coupon':
                        $stmt->bindValue($identifier, $this->coupon, PDO::PARAM_STR);
                        break;
                    case 'coupon_md5':
                        $stmt->bindValue($identifier, $this->coupon_md5, PDO::PARAM_STR);
                        break;
                    case 'expiration_date':
                        $stmt->bindValue($identifier, $this->expiration_date, PDO::PARAM_STR);
                        break;
                    case 'customer_id':
                        $stmt->bindValue($identifier, $this->customer_id, PDO::PARAM_INT);
                        break;
                    case 'can_send':
                        $stmt->bindValue($identifier, $this->can_send, PDO::PARAM_INT);
                        break;
                    case 'status':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_INT);
                        break;
                    case 'order_id':
                        $stmt->bindValue($identifier, $this->order_id, PDO::PARAM_INT);
                        break;
                    case 'item_id':
                        $stmt->bindValue($identifier, $this->item_id, PDO::PARAM_INT);
                        break;
                    case 'payed_for_return':
                        $stmt->bindValue($identifier, $this->payed_for_return, PDO::PARAM_INT);
                        break;
                    case 'increment_id':
                        $stmt->bindValue($identifier, $this->increment_id, PDO::PARAM_STR);
                        break;
                    case 'unit':
                        $stmt->bindValue($identifier, $this->unit, PDO::PARAM_INT);
                        break;
                    case 'personalized_coupon':
                        $stmt->bindValue($identifier, $this->personalized_coupon, PDO::PARAM_INT);
                        break;
                    case 'pos_number':
                        $stmt->bindValue($identifier, $this->pos_number, PDO::PARAM_STR);
                        break;
                    case 'hash':
                        $stmt->bindValue($identifier, $this->hash, PDO::PARAM_STR);
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
        $this->setMappingId($pk);

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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aSalesFlatOrder !== null) {
                if (!$this->aSalesFlatOrder->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSalesFlatOrder->getValidationFailures());
                }
            }

            if ($this->aPersonalizedCoupons !== null) {
                if (!$this->aPersonalizedCoupons->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPersonalizedCoupons->getValidationFailures());
                }
            }


            if (($retval = CouponMappingPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CouponMappingPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getMappingId();
                break;
            case 1:
                return $this->getCoupon();
                break;
            case 2:
                return $this->getCouponMd5();
                break;
            case 3:
                return $this->getExpirationDate();
                break;
            case 4:
                return $this->getCustomerId();
                break;
            case 5:
                return $this->getCanSend();
                break;
            case 6:
                return $this->getStatus();
                break;
            case 7:
                return $this->getOrderId();
                break;
            case 8:
                return $this->getItemId();
                break;
            case 9:
                return $this->getPayedForReturn();
                break;
            case 10:
                return $this->getIncrementId();
                break;
            case 11:
                return $this->getUnit();
                break;
            case 12:
                return $this->getPersonalizedCoupon();
                break;
            case 13:
                return $this->getPosNumber();
                break;
            case 14:
                return $this->getHash();
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
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['CouponMapping'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CouponMapping'][$this->getPrimaryKey()] = true;
        $keys = CouponMappingPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getMappingId(),
            $keys[1] => $this->getCoupon(),
            $keys[2] => $this->getCouponMd5(),
            $keys[3] => $this->getExpirationDate(),
            $keys[4] => $this->getCustomerId(),
            $keys[5] => $this->getCanSend(),
            $keys[6] => $this->getStatus(),
            $keys[7] => $this->getOrderId(),
            $keys[8] => $this->getItemId(),
            $keys[9] => $this->getPayedForReturn(),
            $keys[10] => $this->getIncrementId(),
            $keys[11] => $this->getUnit(),
            $keys[12] => $this->getPersonalizedCoupon(),
            $keys[13] => $this->getPosNumber(),
            $keys[14] => $this->getHash(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach($virtualColumns as $key => $virtualColumn)
        {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSalesFlatOrder) {
                $result['SalesFlatOrder'] = $this->aSalesFlatOrder->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPersonalizedCoupons) {
                $result['PersonalizedCoupons'] = $this->aPersonalizedCoupons->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
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
        $pos = CouponMappingPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setMappingId($value);
                break;
            case 1:
                $this->setCoupon($value);
                break;
            case 2:
                $this->setCouponMd5($value);
                break;
            case 3:
                $this->setExpirationDate($value);
                break;
            case 4:
                $this->setCustomerId($value);
                break;
            case 5:
                $this->setCanSend($value);
                break;
            case 6:
                $this->setStatus($value);
                break;
            case 7:
                $this->setOrderId($value);
                break;
            case 8:
                $this->setItemId($value);
                break;
            case 9:
                $this->setPayedForReturn($value);
                break;
            case 10:
                $this->setIncrementId($value);
                break;
            case 11:
                $this->setUnit($value);
                break;
            case 12:
                $this->setPersonalizedCoupon($value);
                break;
            case 13:
                $this->setPosNumber($value);
                break;
            case 14:
                $this->setHash($value);
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
        $keys = CouponMappingPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setMappingId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCoupon($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCouponMd5($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setExpirationDate($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCustomerId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCanSend($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setStatus($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOrderId($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setItemId($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPayedForReturn($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIncrementId($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setUnit($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPersonalizedCoupon($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPosNumber($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setHash($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CouponMappingPeer::DATABASE_NAME);

        if ($this->isColumnModified(CouponMappingPeer::MAPPING_ID)) $criteria->add(CouponMappingPeer::MAPPING_ID, $this->mapping_id);
        if ($this->isColumnModified(CouponMappingPeer::COUPON)) $criteria->add(CouponMappingPeer::COUPON, $this->coupon);
        if ($this->isColumnModified(CouponMappingPeer::COUPON_MD5)) $criteria->add(CouponMappingPeer::COUPON_MD5, $this->coupon_md5);
        if ($this->isColumnModified(CouponMappingPeer::EXPIRATION_DATE)) $criteria->add(CouponMappingPeer::EXPIRATION_DATE, $this->expiration_date);
        if ($this->isColumnModified(CouponMappingPeer::CUSTOMER_ID)) $criteria->add(CouponMappingPeer::CUSTOMER_ID, $this->customer_id);
        if ($this->isColumnModified(CouponMappingPeer::CAN_SEND)) $criteria->add(CouponMappingPeer::CAN_SEND, $this->can_send);
        if ($this->isColumnModified(CouponMappingPeer::STATUS)) $criteria->add(CouponMappingPeer::STATUS, $this->status);
        if ($this->isColumnModified(CouponMappingPeer::ORDER_ID)) $criteria->add(CouponMappingPeer::ORDER_ID, $this->order_id);
        if ($this->isColumnModified(CouponMappingPeer::ITEM_ID)) $criteria->add(CouponMappingPeer::ITEM_ID, $this->item_id);
        if ($this->isColumnModified(CouponMappingPeer::PAYED_FOR_RETURN)) $criteria->add(CouponMappingPeer::PAYED_FOR_RETURN, $this->payed_for_return);
        if ($this->isColumnModified(CouponMappingPeer::INCREMENT_ID)) $criteria->add(CouponMappingPeer::INCREMENT_ID, $this->increment_id);
        if ($this->isColumnModified(CouponMappingPeer::UNIT)) $criteria->add(CouponMappingPeer::UNIT, $this->unit);
        if ($this->isColumnModified(CouponMappingPeer::PERSONALIZED_COUPON)) $criteria->add(CouponMappingPeer::PERSONALIZED_COUPON, $this->personalized_coupon);
        if ($this->isColumnModified(CouponMappingPeer::POS_NUMBER)) $criteria->add(CouponMappingPeer::POS_NUMBER, $this->pos_number);
        if ($this->isColumnModified(CouponMappingPeer::HASH)) $criteria->add(CouponMappingPeer::HASH, $this->hash);

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
        $criteria = new Criteria(CouponMappingPeer::DATABASE_NAME);
        $criteria->add(CouponMappingPeer::MAPPING_ID, $this->mapping_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getMappingId();
    }

    /**
     * Generic method to set the primary key (mapping_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setMappingId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getMappingId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CouponMapping (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCoupon($this->getCoupon());
        $copyObj->setCouponMd5($this->getCouponMd5());
        $copyObj->setExpirationDate($this->getExpirationDate());
        $copyObj->setCustomerId($this->getCustomerId());
        $copyObj->setCanSend($this->getCanSend());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setOrderId($this->getOrderId());
        $copyObj->setItemId($this->getItemId());
        $copyObj->setPayedForReturn($this->getPayedForReturn());
        $copyObj->setIncrementId($this->getIncrementId());
        $copyObj->setUnit($this->getUnit());
        $copyObj->setPersonalizedCoupon($this->getPersonalizedCoupon());
        $copyObj->setPosNumber($this->getPosNumber());
        $copyObj->setHash($this->getHash());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setMappingId(NULL); // this is a auto-increment column, so set to default value
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
     * @return CouponMapping Clone of current object.
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
     * @return CouponMappingPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CouponMappingPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a SalesFlatOrder object.
     *
     * @param                  SalesFlatOrder $v
     * @return CouponMapping The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSalesFlatOrder(SalesFlatOrder $v = null)
    {
        if ($v === null) {
            $this->setIncrementId(NULL);
        } else {
            $this->setIncrementId($v->getIncrementId());
        }

        $this->aSalesFlatOrder = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SalesFlatOrder object, it will not be re-added.
        if ($v !== null) {
            $v->addCouponMapping($this);
        }


        return $this;
    }


    /**
     * Get the associated SalesFlatOrder object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return SalesFlatOrder The associated SalesFlatOrder object.
     * @throws PropelException
     */
    public function getSalesFlatOrder(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSalesFlatOrder === null && (($this->increment_id !== "" && $this->increment_id !== null)) && $doQuery) {
            $this->aSalesFlatOrder = SalesFlatOrderQuery::create()
                ->filterByCouponMapping($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSalesFlatOrder->addCouponMappings($this);
             */
        }

        return $this->aSalesFlatOrder;
    }

    /**
     * Declares an association between this object and a PersonalizedCoupons object.
     *
     * @param                  PersonalizedCoupons $v
     * @return CouponMapping The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPersonalizedCoupons(PersonalizedCoupons $v = null)
    {
        if ($v === null) {
            $this->setPersonalizedCoupon(NULL);
        } else {
            $this->setPersonalizedCoupon($v->getId());
        }

        $this->aPersonalizedCoupons = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the PersonalizedCoupons object, it will not be re-added.
        if ($v !== null) {
            $v->addCouponMapping($this);
        }


        return $this;
    }


    /**
     * Get the associated PersonalizedCoupons object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return PersonalizedCoupons The associated PersonalizedCoupons object.
     * @throws PropelException
     */
    public function getPersonalizedCoupons(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPersonalizedCoupons === null && ($this->personalized_coupon !== null) && $doQuery) {
            $this->aPersonalizedCoupons = PersonalizedCouponsQuery::create()->findPk($this->personalized_coupon, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPersonalizedCoupons->addCouponMappings($this);
             */
        }

        return $this->aPersonalizedCoupons;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->mapping_id = null;
        $this->coupon = null;
        $this->coupon_md5 = null;
        $this->expiration_date = null;
        $this->customer_id = null;
        $this->can_send = null;
        $this->status = null;
        $this->order_id = null;
        $this->item_id = null;
        $this->payed_for_return = null;
        $this->increment_id = null;
        $this->unit = null;
        $this->personalized_coupon = null;
        $this->pos_number = null;
        $this->hash = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
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
            if ($this->aSalesFlatOrder instanceof Persistent) {
              $this->aSalesFlatOrder->clearAllReferences($deep);
            }
            if ($this->aPersonalizedCoupons instanceof Persistent) {
              $this->aPersonalizedCoupons->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aSalesFlatOrder = null;
        $this->aPersonalizedCoupons = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CouponMappingPeer::DEFAULT_STRING_FORMAT);
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
