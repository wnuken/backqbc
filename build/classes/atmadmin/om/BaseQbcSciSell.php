<?php


/**
 * Base class that represents a row from the 'qbc_sci_sell' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciSell extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'QbcSciSellPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        QbcSciSellPeer
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
     * The value for the order_id field.
     * @var        string
     */
    protected $order_id;

    /**
     * The value for the pos_number field.
     * @var        string
     */
    protected $pos_number;

    /**
     * The value for the pos_type field.
     * @var        string
     */
    protected $pos_type;

    /**
     * The value for the item_id field.
     * @var        string
     */
    protected $item_id;

    /**
     * The value for the giftcard field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $giftcard;

    /**
     * The value for the processed field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $processed;

    /**
     * The value for the unit field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $unit;

    /**
     * The value for the rewards_used field.
     * @var        string
     */
    protected $rewards_used;

    /**
     * The value for the is_cancell field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $is_cancell;

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
        $this->giftcard = 0;
        $this->processed = 0;
        $this->unit = 1;
        $this->is_cancell = 0;
    }

    /**
     * Initializes internal state of BaseQbcSciSell object.
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
     * Get the [petition_id] column value.
     *
     * @return string
     */
    public function getPetitionId()
    {

        return $this->petition_id;
    }

    /**
     * Get the [order_id] column value.
     *
     * @return string
     */
    public function getOrderId()
    {

        return $this->order_id;
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
     * Get the [pos_type] column value.
     *
     * @return string
     */
    public function getPosType()
    {

        return $this->pos_type;
    }

    /**
     * Get the [item_id] column value.
     *
     * @return string
     */
    public function getItemId()
    {

        return $this->item_id;
    }

    /**
     * Get the [giftcard] column value.
     *
     * @return int
     */
    public function getGiftcard()
    {

        return $this->giftcard;
    }

    /**
     * Get the [processed] column value.
     *
     * @return int
     */
    public function getProcessed()
    {

        return $this->processed;
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
     * Get the [rewards_used] column value.
     *
     * @return string
     */
    public function getRewardsUsed()
    {

        return $this->rewards_used;
    }

    /**
     * Get the [is_cancell] column value.
     *
     * @return int
     */
    public function getIsCancell()
    {

        return $this->is_cancell;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return QbcSciSell The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = QbcSciSellPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [petition_id] column.
     *
     * @param  string $v new value
     * @return QbcSciSell The current object (for fluent API support)
     */
    public function setPetitionId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->petition_id !== $v) {
            $this->petition_id = $v;
            $this->modifiedColumns[] = QbcSciSellPeer::PETITION_ID;
        }


        return $this;
    } // setPetitionId()

    /**
     * Set the value of [order_id] column.
     *
     * @param  string $v new value
     * @return QbcSciSell The current object (for fluent API support)
     */
    public function setOrderId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->order_id !== $v) {
            $this->order_id = $v;
            $this->modifiedColumns[] = QbcSciSellPeer::ORDER_ID;
        }


        return $this;
    } // setOrderId()

    /**
     * Set the value of [pos_number] column.
     *
     * @param  string $v new value
     * @return QbcSciSell The current object (for fluent API support)
     */
    public function setPosNumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pos_number !== $v) {
            $this->pos_number = $v;
            $this->modifiedColumns[] = QbcSciSellPeer::POS_NUMBER;
        }


        return $this;
    } // setPosNumber()

    /**
     * Set the value of [pos_type] column.
     *
     * @param  string $v new value
     * @return QbcSciSell The current object (for fluent API support)
     */
    public function setPosType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pos_type !== $v) {
            $this->pos_type = $v;
            $this->modifiedColumns[] = QbcSciSellPeer::POS_TYPE;
        }


        return $this;
    } // setPosType()

    /**
     * Set the value of [item_id] column.
     *
     * @param  string $v new value
     * @return QbcSciSell The current object (for fluent API support)
     */
    public function setItemId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->item_id !== $v) {
            $this->item_id = $v;
            $this->modifiedColumns[] = QbcSciSellPeer::ITEM_ID;
        }


        return $this;
    } // setItemId()

    /**
     * Set the value of [giftcard] column.
     *
     * @param  int $v new value
     * @return QbcSciSell The current object (for fluent API support)
     */
    public function setGiftcard($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->giftcard !== $v) {
            $this->giftcard = $v;
            $this->modifiedColumns[] = QbcSciSellPeer::GIFTCARD;
        }


        return $this;
    } // setGiftcard()

    /**
     * Set the value of [processed] column.
     *
     * @param  int $v new value
     * @return QbcSciSell The current object (for fluent API support)
     */
    public function setProcessed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->processed !== $v) {
            $this->processed = $v;
            $this->modifiedColumns[] = QbcSciSellPeer::PROCESSED;
        }


        return $this;
    } // setProcessed()

    /**
     * Set the value of [unit] column.
     *
     * @param  int $v new value
     * @return QbcSciSell The current object (for fluent API support)
     */
    public function setUnit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->unit !== $v) {
            $this->unit = $v;
            $this->modifiedColumns[] = QbcSciSellPeer::UNIT;
        }


        return $this;
    } // setUnit()

    /**
     * Set the value of [rewards_used] column.
     *
     * @param  string $v new value
     * @return QbcSciSell The current object (for fluent API support)
     */
    public function setRewardsUsed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rewards_used !== $v) {
            $this->rewards_used = $v;
            $this->modifiedColumns[] = QbcSciSellPeer::REWARDS_USED;
        }


        return $this;
    } // setRewardsUsed()

    /**
     * Set the value of [is_cancell] column.
     *
     * @param  int $v new value
     * @return QbcSciSell The current object (for fluent API support)
     */
    public function setIsCancell($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_cancell !== $v) {
            $this->is_cancell = $v;
            $this->modifiedColumns[] = QbcSciSellPeer::IS_CANCELL;
        }


        return $this;
    } // setIsCancell()

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
            if ($this->giftcard !== 0) {
                return false;
            }

            if ($this->processed !== 0) {
                return false;
            }

            if ($this->unit !== 1) {
                return false;
            }

            if ($this->is_cancell !== 0) {
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
            $this->petition_id = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->order_id = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->pos_number = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->pos_type = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->item_id = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->giftcard = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->processed = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->unit = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->rewards_used = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->is_cancell = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = QbcSciSellPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating QbcSciSell object", $e);
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
            $con = Propel::getConnection(QbcSciSellPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = QbcSciSellPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(QbcSciSellPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = QbcSciSellQuery::create()
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
            $con = Propel::getConnection(QbcSciSellPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                QbcSciSellPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = QbcSciSellPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . QbcSciSellPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(QbcSciSellPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = 'id';
        }
        if ($this->isColumnModified(QbcSciSellPeer::PETITION_ID)) {
            $modifiedColumns[':p' . $index++]  = 'petition_id';
        }
        if ($this->isColumnModified(QbcSciSellPeer::ORDER_ID)) {
            $modifiedColumns[':p' . $index++]  = 'order_id';
        }
        if ($this->isColumnModified(QbcSciSellPeer::POS_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = 'pos_number';
        }
        if ($this->isColumnModified(QbcSciSellPeer::POS_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'pos_type';
        }
        if ($this->isColumnModified(QbcSciSellPeer::ITEM_ID)) {
            $modifiedColumns[':p' . $index++]  = 'item_id';
        }
        if ($this->isColumnModified(QbcSciSellPeer::GIFTCARD)) {
            $modifiedColumns[':p' . $index++]  = 'giftcard';
        }
        if ($this->isColumnModified(QbcSciSellPeer::PROCESSED)) {
            $modifiedColumns[':p' . $index++]  = 'processed';
        }
        if ($this->isColumnModified(QbcSciSellPeer::UNIT)) {
            $modifiedColumns[':p' . $index++]  = 'unit';
        }
        if ($this->isColumnModified(QbcSciSellPeer::REWARDS_USED)) {
            $modifiedColumns[':p' . $index++]  = 'rewards_used';
        }
        if ($this->isColumnModified(QbcSciSellPeer::IS_CANCELL)) {
            $modifiedColumns[':p' . $index++]  = 'is_cancell';
        }

        $sql = sprintf(
            'INSERT INTO qbc_sci_sell (%s) VALUES (%s)',
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
                    case 'order_id':
                        $stmt->bindValue($identifier, $this->order_id, PDO::PARAM_STR);
                        break;
                    case 'pos_number':
                        $stmt->bindValue($identifier, $this->pos_number, PDO::PARAM_STR);
                        break;
                    case 'pos_type':
                        $stmt->bindValue($identifier, $this->pos_type, PDO::PARAM_STR);
                        break;
                    case 'item_id':
                        $stmt->bindValue($identifier, $this->item_id, PDO::PARAM_STR);
                        break;
                    case 'giftcard':
                        $stmt->bindValue($identifier, $this->giftcard, PDO::PARAM_INT);
                        break;
                    case 'processed':
                        $stmt->bindValue($identifier, $this->processed, PDO::PARAM_INT);
                        break;
                    case 'unit':
                        $stmt->bindValue($identifier, $this->unit, PDO::PARAM_INT);
                        break;
                    case 'rewards_used':
                        $stmt->bindValue($identifier, $this->rewards_used, PDO::PARAM_STR);
                        break;
                    case 'is_cancell':
                        $stmt->bindValue($identifier, $this->is_cancell, PDO::PARAM_INT);
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


            if (($retval = QbcSciSellPeer::doValidate($this, $columns)) !== true) {
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
        $pos = QbcSciSellPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOrderId();
                break;
            case 3:
                return $this->getPosNumber();
                break;
            case 4:
                return $this->getPosType();
                break;
            case 5:
                return $this->getItemId();
                break;
            case 6:
                return $this->getGiftcard();
                break;
            case 7:
                return $this->getProcessed();
                break;
            case 8:
                return $this->getUnit();
                break;
            case 9:
                return $this->getRewardsUsed();
                break;
            case 10:
                return $this->getIsCancell();
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
        if (isset($alreadyDumpedObjects['QbcSciSell'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['QbcSciSell'][$this->getPrimaryKey()] = true;
        $keys = QbcSciSellPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getPetitionId(),
            $keys[2] => $this->getOrderId(),
            $keys[3] => $this->getPosNumber(),
            $keys[4] => $this->getPosType(),
            $keys[5] => $this->getItemId(),
            $keys[6] => $this->getGiftcard(),
            $keys[7] => $this->getProcessed(),
            $keys[8] => $this->getUnit(),
            $keys[9] => $this->getRewardsUsed(),
            $keys[10] => $this->getIsCancell(),
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
        $pos = QbcSciSellPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOrderId($value);
                break;
            case 3:
                $this->setPosNumber($value);
                break;
            case 4:
                $this->setPosType($value);
                break;
            case 5:
                $this->setItemId($value);
                break;
            case 6:
                $this->setGiftcard($value);
                break;
            case 7:
                $this->setProcessed($value);
                break;
            case 8:
                $this->setUnit($value);
                break;
            case 9:
                $this->setRewardsUsed($value);
                break;
            case 10:
                $this->setIsCancell($value);
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
        $keys = QbcSciSellPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setPetitionId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOrderId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPosNumber($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPosType($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setItemId($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setGiftcard($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setProcessed($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setUnit($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setRewardsUsed($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIsCancell($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(QbcSciSellPeer::DATABASE_NAME);

        if ($this->isColumnModified(QbcSciSellPeer::ID)) $criteria->add(QbcSciSellPeer::ID, $this->id);
        if ($this->isColumnModified(QbcSciSellPeer::PETITION_ID)) $criteria->add(QbcSciSellPeer::PETITION_ID, $this->petition_id);
        if ($this->isColumnModified(QbcSciSellPeer::ORDER_ID)) $criteria->add(QbcSciSellPeer::ORDER_ID, $this->order_id);
        if ($this->isColumnModified(QbcSciSellPeer::POS_NUMBER)) $criteria->add(QbcSciSellPeer::POS_NUMBER, $this->pos_number);
        if ($this->isColumnModified(QbcSciSellPeer::POS_TYPE)) $criteria->add(QbcSciSellPeer::POS_TYPE, $this->pos_type);
        if ($this->isColumnModified(QbcSciSellPeer::ITEM_ID)) $criteria->add(QbcSciSellPeer::ITEM_ID, $this->item_id);
        if ($this->isColumnModified(QbcSciSellPeer::GIFTCARD)) $criteria->add(QbcSciSellPeer::GIFTCARD, $this->giftcard);
        if ($this->isColumnModified(QbcSciSellPeer::PROCESSED)) $criteria->add(QbcSciSellPeer::PROCESSED, $this->processed);
        if ($this->isColumnModified(QbcSciSellPeer::UNIT)) $criteria->add(QbcSciSellPeer::UNIT, $this->unit);
        if ($this->isColumnModified(QbcSciSellPeer::REWARDS_USED)) $criteria->add(QbcSciSellPeer::REWARDS_USED, $this->rewards_used);
        if ($this->isColumnModified(QbcSciSellPeer::IS_CANCELL)) $criteria->add(QbcSciSellPeer::IS_CANCELL, $this->is_cancell);

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
        $criteria = new Criteria(QbcSciSellPeer::DATABASE_NAME);
        $criteria->add(QbcSciSellPeer::ID, $this->id);

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
     * @param object $copyObj An object of QbcSciSell (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPetitionId($this->getPetitionId());
        $copyObj->setOrderId($this->getOrderId());
        $copyObj->setPosNumber($this->getPosNumber());
        $copyObj->setPosType($this->getPosType());
        $copyObj->setItemId($this->getItemId());
        $copyObj->setGiftcard($this->getGiftcard());
        $copyObj->setProcessed($this->getProcessed());
        $copyObj->setUnit($this->getUnit());
        $copyObj->setRewardsUsed($this->getRewardsUsed());
        $copyObj->setIsCancell($this->getIsCancell());
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
     * @return QbcSciSell Clone of current object.
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
     * @return QbcSciSellPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new QbcSciSellPeer();
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
        $this->order_id = null;
        $this->pos_number = null;
        $this->pos_type = null;
        $this->item_id = null;
        $this->giftcard = null;
        $this->processed = null;
        $this->unit = null;
        $this->rewards_used = null;
        $this->is_cancell = null;
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
        return (string) $this->exportTo(QbcSciSellPeer::DEFAULT_STRING_FORMAT);
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
