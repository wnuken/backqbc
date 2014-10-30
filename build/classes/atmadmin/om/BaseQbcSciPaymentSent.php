<?php


/**
 * Base class that represents a row from the 'qbc_sci_payment_sent' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciPaymentSent extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'QbcSciPaymentSentPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        QbcSciPaymentSentPeer
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
     * The value for the petition_id field.
     * @var        string
     */
    protected $petition_id;

    /**
     * The value for the gd_id field.
     * @var        string
     */
    protected $gd_id;

    /**
     * The value for the process_date field.
     * @var        string
     */
    protected $process_date;

    /**
     * The value for the sent_date field.
     * @var        string
     */
    protected $sent_date;

    /**
     * The value for the update_date field.
     * @var        string
     */
    protected $update_date;

    /**
     * The value for the status field.
     * @var        string
     */
    protected $status;

    /**
     * The value for the resend field.
     * @var        int
     */
    protected $resend;

    /**
     * The value for the sap_doc field.
     * @var        string
     */
    protected $sap_doc;

    /**
     * The value for the sell_date field.
     * @var        string
     */
    protected $sell_date;

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
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [petition_id] column value.
     *
     * @return string
     */
    public function getPetitionId()
    {

        return $this->petition_id;
    }

    /**
     * Get the [gd_id] column value.
     *
     * @return string
     */
    public function getGdId()
    {

        return $this->gd_id;
    }

    /**
     * Get the [optionally formatted] temporal [process_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getProcessDate($format = '%x')
    {
        if ($this->process_date === null) {
            return null;
        }

        if ($this->process_date === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->process_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->process_date, true), $x);
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
     * Get the [optionally formatted] temporal [sent_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getSentDate($format = 'Y-m-d H:i:s')
    {
        if ($this->sent_date === null) {
            return null;
        }

        if ($this->sent_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->sent_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->sent_date, true), $x);
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
     * Get the [optionally formatted] temporal [update_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUpdateDate($format = 'Y-m-d H:i:s')
    {
        if ($this->update_date === null) {
            return null;
        }

        if ($this->update_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->update_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->update_date, true), $x);
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
     * Get the [status] column value.
     *
     * @return string
     */
    public function getStatus()
    {

        return $this->status;
    }

    /**
     * Get the [resend] column value.
     *
     * @return int
     */
    public function getResend()
    {

        return $this->resend;
    }

    /**
     * Get the [sap_doc] column value.
     *
     * @return string
     */
    public function getSapDoc()
    {

        return $this->sap_doc;
    }

    /**
     * Get the [optionally formatted] temporal [sell_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getSellDate($format = '%x')
    {
        if ($this->sell_date === null) {
            return null;
        }

        if ($this->sell_date === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->sell_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->sell_date, true), $x);
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
     * @return QbcSciPaymentSent The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = QbcSciPaymentSentPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [petition_id] column.
     *
     * @param  string $v new value
     * @return QbcSciPaymentSent The current object (for fluent API support)
     */
    public function setPetitionId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->petition_id !== $v) {
            $this->petition_id = $v;
            $this->modifiedColumns[] = QbcSciPaymentSentPeer::PETITION_ID;
        }


        return $this;
    } // setPetitionId()

    /**
     * Set the value of [gd_id] column.
     *
     * @param  string $v new value
     * @return QbcSciPaymentSent The current object (for fluent API support)
     */
    public function setGdId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gd_id !== $v) {
            $this->gd_id = $v;
            $this->modifiedColumns[] = QbcSciPaymentSentPeer::GD_ID;
        }


        return $this;
    } // setGdId()

    /**
     * Sets the value of [process_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return QbcSciPaymentSent The current object (for fluent API support)
     */
    public function setProcessDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->process_date !== null || $dt !== null) {
            $currentDateAsString = ($this->process_date !== null && $tmpDt = new DateTime($this->process_date)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->process_date = $newDateAsString;
                $this->modifiedColumns[] = QbcSciPaymentSentPeer::PROCESS_DATE;
            }
        } // if either are not null


        return $this;
    } // setProcessDate()

    /**
     * Sets the value of [sent_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return QbcSciPaymentSent The current object (for fluent API support)
     */
    public function setSentDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->sent_date !== null || $dt !== null) {
            $currentDateAsString = ($this->sent_date !== null && $tmpDt = new DateTime($this->sent_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->sent_date = $newDateAsString;
                $this->modifiedColumns[] = QbcSciPaymentSentPeer::SENT_DATE;
            }
        } // if either are not null


        return $this;
    } // setSentDate()

    /**
     * Sets the value of [update_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return QbcSciPaymentSent The current object (for fluent API support)
     */
    public function setUpdateDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->update_date !== null || $dt !== null) {
            $currentDateAsString = ($this->update_date !== null && $tmpDt = new DateTime($this->update_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->update_date = $newDateAsString;
                $this->modifiedColumns[] = QbcSciPaymentSentPeer::UPDATE_DATE;
            }
        } // if either are not null


        return $this;
    } // setUpdateDate()

    /**
     * Set the value of [status] column.
     *
     * @param  string $v new value
     * @return QbcSciPaymentSent The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[] = QbcSciPaymentSentPeer::STATUS;
        }


        return $this;
    } // setStatus()

    /**
     * Set the value of [resend] column.
     *
     * @param  int $v new value
     * @return QbcSciPaymentSent The current object (for fluent API support)
     */
    public function setResend($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->resend !== $v) {
            $this->resend = $v;
            $this->modifiedColumns[] = QbcSciPaymentSentPeer::RESEND;
        }


        return $this;
    } // setResend()

    /**
     * Set the value of [sap_doc] column.
     *
     * @param  string $v new value
     * @return QbcSciPaymentSent The current object (for fluent API support)
     */
    public function setSapDoc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sap_doc !== $v) {
            $this->sap_doc = $v;
            $this->modifiedColumns[] = QbcSciPaymentSentPeer::SAP_DOC;
        }


        return $this;
    } // setSapDoc()

    /**
     * Sets the value of [sell_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return QbcSciPaymentSent The current object (for fluent API support)
     */
    public function setSellDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->sell_date !== null || $dt !== null) {
            $currentDateAsString = ($this->sell_date !== null && $tmpDt = new DateTime($this->sell_date)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->sell_date = $newDateAsString;
                $this->modifiedColumns[] = QbcSciPaymentSentPeer::SELL_DATE;
            }
        } // if either are not null


        return $this;
    } // setSellDate()

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

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->petition_id = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->gd_id = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->process_date = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->sent_date = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->update_date = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->status = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resend = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->sap_doc = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->sell_date = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = QbcSciPaymentSentPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating QbcSciPaymentSent object", $e);
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
            $con = Propel::getConnection(QbcSciPaymentSentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = QbcSciPaymentSentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(QbcSciPaymentSentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = QbcSciPaymentSentQuery::create()
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
            $con = Propel::getConnection(QbcSciPaymentSentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                QbcSciPaymentSentPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = QbcSciPaymentSentPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . QbcSciPaymentSentPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(QbcSciPaymentSentPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = 'id';
        }
        if ($this->isColumnModified(QbcSciPaymentSentPeer::PETITION_ID)) {
            $modifiedColumns[':p' . $index++]  = 'petition_id';
        }
        if ($this->isColumnModified(QbcSciPaymentSentPeer::GD_ID)) {
            $modifiedColumns[':p' . $index++]  = 'gd_id';
        }
        if ($this->isColumnModified(QbcSciPaymentSentPeer::PROCESS_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'process_date';
        }
        if ($this->isColumnModified(QbcSciPaymentSentPeer::SENT_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'sent_date';
        }
        if ($this->isColumnModified(QbcSciPaymentSentPeer::UPDATE_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'update_date';
        }
        if ($this->isColumnModified(QbcSciPaymentSentPeer::STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(QbcSciPaymentSentPeer::RESEND)) {
            $modifiedColumns[':p' . $index++]  = 'resend';
        }
        if ($this->isColumnModified(QbcSciPaymentSentPeer::SAP_DOC)) {
            $modifiedColumns[':p' . $index++]  = 'sap_doc';
        }
        if ($this->isColumnModified(QbcSciPaymentSentPeer::SELL_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'sell_date';
        }

        $sql = sprintf(
            'INSERT INTO qbc_sci_payment_sent (%s) VALUES (%s)',
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
                    case 'petition_id':
                        $stmt->bindValue($identifier, $this->petition_id, PDO::PARAM_STR);
                        break;
                    case 'gd_id':
                        $stmt->bindValue($identifier, $this->gd_id, PDO::PARAM_STR);
                        break;
                    case 'process_date':
                        $stmt->bindValue($identifier, $this->process_date, PDO::PARAM_STR);
                        break;
                    case 'sent_date':
                        $stmt->bindValue($identifier, $this->sent_date, PDO::PARAM_STR);
                        break;
                    case 'update_date':
                        $stmt->bindValue($identifier, $this->update_date, PDO::PARAM_STR);
                        break;
                    case 'status':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case 'resend':
                        $stmt->bindValue($identifier, $this->resend, PDO::PARAM_INT);
                        break;
                    case 'sap_doc':
                        $stmt->bindValue($identifier, $this->sap_doc, PDO::PARAM_STR);
                        break;
                    case 'sell_date':
                        $stmt->bindValue($identifier, $this->sell_date, PDO::PARAM_STR);
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


            if (($retval = QbcSciPaymentSentPeer::doValidate($this, $columns)) !== true) {
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
        $pos = QbcSciPaymentSentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getPetitionId();
                break;
            case 2:
                return $this->getGdId();
                break;
            case 3:
                return $this->getProcessDate();
                break;
            case 4:
                return $this->getSentDate();
                break;
            case 5:
                return $this->getUpdateDate();
                break;
            case 6:
                return $this->getStatus();
                break;
            case 7:
                return $this->getResend();
                break;
            case 8:
                return $this->getSapDoc();
                break;
            case 9:
                return $this->getSellDate();
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
        if (isset($alreadyDumpedObjects['QbcSciPaymentSent'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['QbcSciPaymentSent'][$this->getPrimaryKey()] = true;
        $keys = QbcSciPaymentSentPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getPetitionId(),
            $keys[2] => $this->getGdId(),
            $keys[3] => $this->getProcessDate(),
            $keys[4] => $this->getSentDate(),
            $keys[5] => $this->getUpdateDate(),
            $keys[6] => $this->getStatus(),
            $keys[7] => $this->getResend(),
            $keys[8] => $this->getSapDoc(),
            $keys[9] => $this->getSellDate(),
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
        $pos = QbcSciPaymentSentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setPetitionId($value);
                break;
            case 2:
                $this->setGdId($value);
                break;
            case 3:
                $this->setProcessDate($value);
                break;
            case 4:
                $this->setSentDate($value);
                break;
            case 5:
                $this->setUpdateDate($value);
                break;
            case 6:
                $this->setStatus($value);
                break;
            case 7:
                $this->setResend($value);
                break;
            case 8:
                $this->setSapDoc($value);
                break;
            case 9:
                $this->setSellDate($value);
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
        $keys = QbcSciPaymentSentPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setPetitionId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setGdId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setProcessDate($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSentDate($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setUpdateDate($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setStatus($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setResend($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setSapDoc($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSellDate($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(QbcSciPaymentSentPeer::DATABASE_NAME);

        if ($this->isColumnModified(QbcSciPaymentSentPeer::ID)) $criteria->add(QbcSciPaymentSentPeer::ID, $this->id);
        if ($this->isColumnModified(QbcSciPaymentSentPeer::PETITION_ID)) $criteria->add(QbcSciPaymentSentPeer::PETITION_ID, $this->petition_id);
        if ($this->isColumnModified(QbcSciPaymentSentPeer::GD_ID)) $criteria->add(QbcSciPaymentSentPeer::GD_ID, $this->gd_id);
        if ($this->isColumnModified(QbcSciPaymentSentPeer::PROCESS_DATE)) $criteria->add(QbcSciPaymentSentPeer::PROCESS_DATE, $this->process_date);
        if ($this->isColumnModified(QbcSciPaymentSentPeer::SENT_DATE)) $criteria->add(QbcSciPaymentSentPeer::SENT_DATE, $this->sent_date);
        if ($this->isColumnModified(QbcSciPaymentSentPeer::UPDATE_DATE)) $criteria->add(QbcSciPaymentSentPeer::UPDATE_DATE, $this->update_date);
        if ($this->isColumnModified(QbcSciPaymentSentPeer::STATUS)) $criteria->add(QbcSciPaymentSentPeer::STATUS, $this->status);
        if ($this->isColumnModified(QbcSciPaymentSentPeer::RESEND)) $criteria->add(QbcSciPaymentSentPeer::RESEND, $this->resend);
        if ($this->isColumnModified(QbcSciPaymentSentPeer::SAP_DOC)) $criteria->add(QbcSciPaymentSentPeer::SAP_DOC, $this->sap_doc);
        if ($this->isColumnModified(QbcSciPaymentSentPeer::SELL_DATE)) $criteria->add(QbcSciPaymentSentPeer::SELL_DATE, $this->sell_date);

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
        $criteria = new Criteria(QbcSciPaymentSentPeer::DATABASE_NAME);
        $criteria->add(QbcSciPaymentSentPeer::ID, $this->id);

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
     * @param object $copyObj An object of QbcSciPaymentSent (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPetitionId($this->getPetitionId());
        $copyObj->setGdId($this->getGdId());
        $copyObj->setProcessDate($this->getProcessDate());
        $copyObj->setSentDate($this->getSentDate());
        $copyObj->setUpdateDate($this->getUpdateDate());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setResend($this->getResend());
        $copyObj->setSapDoc($this->getSapDoc());
        $copyObj->setSellDate($this->getSellDate());
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
     * @return QbcSciPaymentSent Clone of current object.
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
     * @return QbcSciPaymentSentPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new QbcSciPaymentSentPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->petition_id = null;
        $this->gd_id = null;
        $this->process_date = null;
        $this->sent_date = null;
        $this->update_date = null;
        $this->status = null;
        $this->resend = null;
        $this->sap_doc = null;
        $this->sell_date = null;
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
        return (string) $this->exportTo(QbcSciPaymentSentPeer::DEFAULT_STRING_FORMAT);
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
