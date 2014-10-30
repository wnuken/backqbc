<?php


/**
 * Base class that represents a row from the 'qbc_migration_order' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcMigrationOrder extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'QbcMigrationOrderPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        QbcMigrationOrderPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the ammount field.
     * @var        string
     */
    protected $ammount;

    /**
     * The value for the credits_used field.
     * @var        string
     */
    protected $credits_used;

    /**
     * The value for the netto_ammount field.
     * @var        string
     */
    protected $netto_ammount;

    /**
     * The value for the status field.
     * @var        string
     */
    protected $status;

    /**
     * The value for the payment_method field.
     * @var        string
     */
    protected $payment_method;

    /**
     * The value for the created_datetime field.
     * @var        string
     */
    protected $created_datetime;

    /**
     * The value for the document_number field.
     * @var        int
     */
    protected $document_number;

    /**
     * The value for the code field.
     * @var        string
     */
    protected $code;

    /**
     * The value for the coupon_status field.
     * @var        string
     */
    protected $coupon_status;

    /**
     * The value for the campaign_sku field.
     * @var        string
     */
    protected $campaign_sku;

    /**
     * The value for the customer_id field.
     * @var        int
     */
    protected $customer_id;

    /**
     * The value for the redeemed field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $redeemed;

    /**
     * The value for the expired_datetime field.
     * @var        string
     */
    protected $expired_datetime;

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
        $this->redeemed = 0;
    }

    /**
     * Initializes internal state of BaseQbcMigrationOrder object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [ammount] column value.
     *
     * @return string
     */
    public function getAmmount()
    {

        return $this->ammount;
    }

    /**
     * Get the [credits_used] column value.
     *
     * @return string
     */
    public function getCreditsUsed()
    {

        return $this->credits_used;
    }

    /**
     * Get the [netto_ammount] column value.
     *
     * @return string
     */
    public function getNettoAmmount()
    {

        return $this->netto_ammount;
    }

    /**
     * Get the [status] column value.
     *
     * @return string
     */
    public function getStatus()
    {

        return $this->status;
    }

    /**
     * Get the [payment_method] column value.
     *
     * @return string
     */
    public function getPaymentMethod()
    {

        return $this->payment_method;
    }

    /**
     * Get the [optionally formatted] temporal [created_datetime] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreatedDatetime($format = '%x')
    {
        if ($this->created_datetime === null) {
            return null;
        }

        if ($this->created_datetime === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->created_datetime);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_datetime, true), $x);
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
     * Get the [document_number] column value.
     *
     * @return int
     */
    public function getDocumentNumber()
    {

        return $this->document_number;
    }

    /**
     * Get the [code] column value.
     *
     * @return string
     */
    public function getCode()
    {

        return $this->code;
    }

    /**
     * Get the [coupon_status] column value.
     *
     * @return string
     */
    public function getCouponStatus()
    {

        return $this->coupon_status;
    }

    /**
     * Get the [campaign_sku] column value.
     *
     * @return string
     */
    public function getCampaignSku()
    {

        return $this->campaign_sku;
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
     * Get the [redeemed] column value.
     *
     * @return int
     */
    public function getRedeemed()
    {

        return $this->redeemed;
    }

    /**
     * Get the [optionally formatted] temporal [expired_datetime] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getExpiredDatetime($format = '%x')
    {
        if ($this->expired_datetime === null) {
            return null;
        }

        if ($this->expired_datetime === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->expired_datetime);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->expired_datetime, true), $x);
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
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return QbcMigrationOrder The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = QbcMigrationOrderPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [ammount] column.
     *
     * @param  string $v new value
     * @return QbcMigrationOrder The current object (for fluent API support)
     */
    public function setAmmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ammount !== $v) {
            $this->ammount = $v;
            $this->modifiedColumns[] = QbcMigrationOrderPeer::AMMOUNT;
        }


        return $this;
    } // setAmmount()

    /**
     * Set the value of [credits_used] column.
     *
     * @param  string $v new value
     * @return QbcMigrationOrder The current object (for fluent API support)
     */
    public function setCreditsUsed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->credits_used !== $v) {
            $this->credits_used = $v;
            $this->modifiedColumns[] = QbcMigrationOrderPeer::CREDITS_USED;
        }


        return $this;
    } // setCreditsUsed()

    /**
     * Set the value of [netto_ammount] column.
     *
     * @param  string $v new value
     * @return QbcMigrationOrder The current object (for fluent API support)
     */
    public function setNettoAmmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->netto_ammount !== $v) {
            $this->netto_ammount = $v;
            $this->modifiedColumns[] = QbcMigrationOrderPeer::NETTO_AMMOUNT;
        }


        return $this;
    } // setNettoAmmount()

    /**
     * Set the value of [status] column.
     *
     * @param  string $v new value
     * @return QbcMigrationOrder The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[] = QbcMigrationOrderPeer::STATUS;
        }


        return $this;
    } // setStatus()

    /**
     * Set the value of [payment_method] column.
     *
     * @param  string $v new value
     * @return QbcMigrationOrder The current object (for fluent API support)
     */
    public function setPaymentMethod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->payment_method !== $v) {
            $this->payment_method = $v;
            $this->modifiedColumns[] = QbcMigrationOrderPeer::PAYMENT_METHOD;
        }


        return $this;
    } // setPaymentMethod()

    /**
     * Sets the value of [created_datetime] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return QbcMigrationOrder The current object (for fluent API support)
     */
    public function setCreatedDatetime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_datetime !== null || $dt !== null) {
            $currentDateAsString = ($this->created_datetime !== null && $tmpDt = new DateTime($this->created_datetime)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->created_datetime = $newDateAsString;
                $this->modifiedColumns[] = QbcMigrationOrderPeer::CREATED_DATETIME;
            }
        } // if either are not null


        return $this;
    } // setCreatedDatetime()

    /**
     * Set the value of [document_number] column.
     *
     * @param  int $v new value
     * @return QbcMigrationOrder The current object (for fluent API support)
     */
    public function setDocumentNumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->document_number !== $v) {
            $this->document_number = $v;
            $this->modifiedColumns[] = QbcMigrationOrderPeer::DOCUMENT_NUMBER;
        }


        return $this;
    } // setDocumentNumber()

    /**
     * Set the value of [code] column.
     *
     * @param  string $v new value
     * @return QbcMigrationOrder The current object (for fluent API support)
     */
    public function setCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code !== $v) {
            $this->code = $v;
            $this->modifiedColumns[] = QbcMigrationOrderPeer::CODE;
        }


        return $this;
    } // setCode()

    /**
     * Set the value of [coupon_status] column.
     *
     * @param  string $v new value
     * @return QbcMigrationOrder The current object (for fluent API support)
     */
    public function setCouponStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->coupon_status !== $v) {
            $this->coupon_status = $v;
            $this->modifiedColumns[] = QbcMigrationOrderPeer::COUPON_STATUS;
        }


        return $this;
    } // setCouponStatus()

    /**
     * Set the value of [campaign_sku] column.
     *
     * @param  string $v new value
     * @return QbcMigrationOrder The current object (for fluent API support)
     */
    public function setCampaignSku($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->campaign_sku !== $v) {
            $this->campaign_sku = $v;
            $this->modifiedColumns[] = QbcMigrationOrderPeer::CAMPAIGN_SKU;
        }


        return $this;
    } // setCampaignSku()

    /**
     * Set the value of [customer_id] column.
     *
     * @param  int $v new value
     * @return QbcMigrationOrder The current object (for fluent API support)
     */
    public function setCustomerId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->customer_id !== $v) {
            $this->customer_id = $v;
            $this->modifiedColumns[] = QbcMigrationOrderPeer::CUSTOMER_ID;
        }


        return $this;
    } // setCustomerId()

    /**
     * Set the value of [redeemed] column.
     *
     * @param  int $v new value
     * @return QbcMigrationOrder The current object (for fluent API support)
     */
    public function setRedeemed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->redeemed !== $v) {
            $this->redeemed = $v;
            $this->modifiedColumns[] = QbcMigrationOrderPeer::REDEEMED;
        }


        return $this;
    } // setRedeemed()

    /**
     * Sets the value of [expired_datetime] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return QbcMigrationOrder The current object (for fluent API support)
     */
    public function setExpiredDatetime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->expired_datetime !== null || $dt !== null) {
            $currentDateAsString = ($this->expired_datetime !== null && $tmpDt = new DateTime($this->expired_datetime)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->expired_datetime = $newDateAsString;
                $this->modifiedColumns[] = QbcMigrationOrderPeer::EXPIRED_DATETIME;
            }
        } // if either are not null


        return $this;
    } // setExpiredDatetime()

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
            if ($this->redeemed !== 0) {
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

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->ammount = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->credits_used = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->netto_ammount = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->status = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->payment_method = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->created_datetime = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->document_number = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->code = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->coupon_status = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->campaign_sku = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->customer_id = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->redeemed = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->expired_datetime = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = QbcMigrationOrderPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating QbcMigrationOrder object", $e);
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
            $con = Propel::getConnection(QbcMigrationOrderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = QbcMigrationOrderPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(QbcMigrationOrderPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = QbcMigrationOrderQuery::create()
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
            $con = Propel::getConnection(QbcMigrationOrderPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                QbcMigrationOrderPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = QbcMigrationOrderPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . QbcMigrationOrderPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(QbcMigrationOrderPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = 'id';
        }
        if ($this->isColumnModified(QbcMigrationOrderPeer::AMMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'ammount';
        }
        if ($this->isColumnModified(QbcMigrationOrderPeer::CREDITS_USED)) {
            $modifiedColumns[':p' . $index++]  = 'credits_used';
        }
        if ($this->isColumnModified(QbcMigrationOrderPeer::NETTO_AMMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'netto_ammount';
        }
        if ($this->isColumnModified(QbcMigrationOrderPeer::STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(QbcMigrationOrderPeer::PAYMENT_METHOD)) {
            $modifiedColumns[':p' . $index++]  = 'payment_method';
        }
        if ($this->isColumnModified(QbcMigrationOrderPeer::CREATED_DATETIME)) {
            $modifiedColumns[':p' . $index++]  = 'created_datetime';
        }
        if ($this->isColumnModified(QbcMigrationOrderPeer::DOCUMENT_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = 'document_number';
        }
        if ($this->isColumnModified(QbcMigrationOrderPeer::CODE)) {
            $modifiedColumns[':p' . $index++]  = 'code';
        }
        if ($this->isColumnModified(QbcMigrationOrderPeer::COUPON_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'coupon_status';
        }
        if ($this->isColumnModified(QbcMigrationOrderPeer::CAMPAIGN_SKU)) {
            $modifiedColumns[':p' . $index++]  = 'campaign_sku';
        }
        if ($this->isColumnModified(QbcMigrationOrderPeer::CUSTOMER_ID)) {
            $modifiedColumns[':p' . $index++]  = 'customer_id';
        }
        if ($this->isColumnModified(QbcMigrationOrderPeer::REDEEMED)) {
            $modifiedColumns[':p' . $index++]  = 'redeemed';
        }
        if ($this->isColumnModified(QbcMigrationOrderPeer::EXPIRED_DATETIME)) {
            $modifiedColumns[':p' . $index++]  = 'expired_datetime';
        }

        $sql = sprintf(
            'INSERT INTO qbc_migration_order (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case 'ammount':
                        $stmt->bindValue($identifier, $this->ammount, PDO::PARAM_STR);
                        break;
                    case 'credits_used':
                        $stmt->bindValue($identifier, $this->credits_used, PDO::PARAM_STR);
                        break;
                    case 'netto_ammount':
                        $stmt->bindValue($identifier, $this->netto_ammount, PDO::PARAM_STR);
                        break;
                    case 'status':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case 'payment_method':
                        $stmt->bindValue($identifier, $this->payment_method, PDO::PARAM_STR);
                        break;
                    case 'created_datetime':
                        $stmt->bindValue($identifier, $this->created_datetime, PDO::PARAM_STR);
                        break;
                    case 'document_number':
                        $stmt->bindValue($identifier, $this->document_number, PDO::PARAM_INT);
                        break;
                    case 'code':
                        $stmt->bindValue($identifier, $this->code, PDO::PARAM_STR);
                        break;
                    case 'coupon_status':
                        $stmt->bindValue($identifier, $this->coupon_status, PDO::PARAM_STR);
                        break;
                    case 'campaign_sku':
                        $stmt->bindValue($identifier, $this->campaign_sku, PDO::PARAM_STR);
                        break;
                    case 'customer_id':
                        $stmt->bindValue($identifier, $this->customer_id, PDO::PARAM_INT);
                        break;
                    case 'redeemed':
                        $stmt->bindValue($identifier, $this->redeemed, PDO::PARAM_INT);
                        break;
                    case 'expired_datetime':
                        $stmt->bindValue($identifier, $this->expired_datetime, PDO::PARAM_STR);
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
        $this->setId($pk);

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


            if (($retval = QbcMigrationOrderPeer::doValidate($this, $columns)) !== true) {
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
        $pos = QbcMigrationOrderPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getId();
                break;
            case 1:
                return $this->getAmmount();
                break;
            case 2:
                return $this->getCreditsUsed();
                break;
            case 3:
                return $this->getNettoAmmount();
                break;
            case 4:
                return $this->getStatus();
                break;
            case 5:
                return $this->getPaymentMethod();
                break;
            case 6:
                return $this->getCreatedDatetime();
                break;
            case 7:
                return $this->getDocumentNumber();
                break;
            case 8:
                return $this->getCode();
                break;
            case 9:
                return $this->getCouponStatus();
                break;
            case 10:
                return $this->getCampaignSku();
                break;
            case 11:
                return $this->getCustomerId();
                break;
            case 12:
                return $this->getRedeemed();
                break;
            case 13:
                return $this->getExpiredDatetime();
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
        if (isset($alreadyDumpedObjects['QbcMigrationOrder'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['QbcMigrationOrder'][$this->getPrimaryKey()] = true;
        $keys = QbcMigrationOrderPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getAmmount(),
            $keys[2] => $this->getCreditsUsed(),
            $keys[3] => $this->getNettoAmmount(),
            $keys[4] => $this->getStatus(),
            $keys[5] => $this->getPaymentMethod(),
            $keys[6] => $this->getCreatedDatetime(),
            $keys[7] => $this->getDocumentNumber(),
            $keys[8] => $this->getCode(),
            $keys[9] => $this->getCouponStatus(),
            $keys[10] => $this->getCampaignSku(),
            $keys[11] => $this->getCustomerId(),
            $keys[12] => $this->getRedeemed(),
            $keys[13] => $this->getExpiredDatetime(),
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
        $pos = QbcMigrationOrderPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setId($value);
                break;
            case 1:
                $this->setAmmount($value);
                break;
            case 2:
                $this->setCreditsUsed($value);
                break;
            case 3:
                $this->setNettoAmmount($value);
                break;
            case 4:
                $this->setStatus($value);
                break;
            case 5:
                $this->setPaymentMethod($value);
                break;
            case 6:
                $this->setCreatedDatetime($value);
                break;
            case 7:
                $this->setDocumentNumber($value);
                break;
            case 8:
                $this->setCode($value);
                break;
            case 9:
                $this->setCouponStatus($value);
                break;
            case 10:
                $this->setCampaignSku($value);
                break;
            case 11:
                $this->setCustomerId($value);
                break;
            case 12:
                $this->setRedeemed($value);
                break;
            case 13:
                $this->setExpiredDatetime($value);
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
        $keys = QbcMigrationOrderPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setAmmount($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCreditsUsed($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNettoAmmount($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setStatus($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPaymentMethod($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCreatedDatetime($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDocumentNumber($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCode($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCouponStatus($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCampaignSku($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCustomerId($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setRedeemed($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setExpiredDatetime($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(QbcMigrationOrderPeer::DATABASE_NAME);

        if ($this->isColumnModified(QbcMigrationOrderPeer::ID)) $criteria->add(QbcMigrationOrderPeer::ID, $this->id);
        if ($this->isColumnModified(QbcMigrationOrderPeer::AMMOUNT)) $criteria->add(QbcMigrationOrderPeer::AMMOUNT, $this->ammount);
        if ($this->isColumnModified(QbcMigrationOrderPeer::CREDITS_USED)) $criteria->add(QbcMigrationOrderPeer::CREDITS_USED, $this->credits_used);
        if ($this->isColumnModified(QbcMigrationOrderPeer::NETTO_AMMOUNT)) $criteria->add(QbcMigrationOrderPeer::NETTO_AMMOUNT, $this->netto_ammount);
        if ($this->isColumnModified(QbcMigrationOrderPeer::STATUS)) $criteria->add(QbcMigrationOrderPeer::STATUS, $this->status);
        if ($this->isColumnModified(QbcMigrationOrderPeer::PAYMENT_METHOD)) $criteria->add(QbcMigrationOrderPeer::PAYMENT_METHOD, $this->payment_method);
        if ($this->isColumnModified(QbcMigrationOrderPeer::CREATED_DATETIME)) $criteria->add(QbcMigrationOrderPeer::CREATED_DATETIME, $this->created_datetime);
        if ($this->isColumnModified(QbcMigrationOrderPeer::DOCUMENT_NUMBER)) $criteria->add(QbcMigrationOrderPeer::DOCUMENT_NUMBER, $this->document_number);
        if ($this->isColumnModified(QbcMigrationOrderPeer::CODE)) $criteria->add(QbcMigrationOrderPeer::CODE, $this->code);
        if ($this->isColumnModified(QbcMigrationOrderPeer::COUPON_STATUS)) $criteria->add(QbcMigrationOrderPeer::COUPON_STATUS, $this->coupon_status);
        if ($this->isColumnModified(QbcMigrationOrderPeer::CAMPAIGN_SKU)) $criteria->add(QbcMigrationOrderPeer::CAMPAIGN_SKU, $this->campaign_sku);
        if ($this->isColumnModified(QbcMigrationOrderPeer::CUSTOMER_ID)) $criteria->add(QbcMigrationOrderPeer::CUSTOMER_ID, $this->customer_id);
        if ($this->isColumnModified(QbcMigrationOrderPeer::REDEEMED)) $criteria->add(QbcMigrationOrderPeer::REDEEMED, $this->redeemed);
        if ($this->isColumnModified(QbcMigrationOrderPeer::EXPIRED_DATETIME)) $criteria->add(QbcMigrationOrderPeer::EXPIRED_DATETIME, $this->expired_datetime);

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
        $criteria = new Criteria(QbcMigrationOrderPeer::DATABASE_NAME);
        $criteria->add(QbcMigrationOrderPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of QbcMigrationOrder (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAmmount($this->getAmmount());
        $copyObj->setCreditsUsed($this->getCreditsUsed());
        $copyObj->setNettoAmmount($this->getNettoAmmount());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setPaymentMethod($this->getPaymentMethod());
        $copyObj->setCreatedDatetime($this->getCreatedDatetime());
        $copyObj->setDocumentNumber($this->getDocumentNumber());
        $copyObj->setCode($this->getCode());
        $copyObj->setCouponStatus($this->getCouponStatus());
        $copyObj->setCampaignSku($this->getCampaignSku());
        $copyObj->setCustomerId($this->getCustomerId());
        $copyObj->setRedeemed($this->getRedeemed());
        $copyObj->setExpiredDatetime($this->getExpiredDatetime());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
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
     * @return QbcMigrationOrder Clone of current object.
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
     * @return QbcMigrationOrderPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new QbcMigrationOrderPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->ammount = null;
        $this->credits_used = null;
        $this->netto_ammount = null;
        $this->status = null;
        $this->payment_method = null;
        $this->created_datetime = null;
        $this->document_number = null;
        $this->code = null;
        $this->coupon_status = null;
        $this->campaign_sku = null;
        $this->customer_id = null;
        $this->redeemed = null;
        $this->expired_datetime = null;
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
        return (string) $this->exportTo(QbcMigrationOrderPeer::DEFAULT_STRING_FORMAT);
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
