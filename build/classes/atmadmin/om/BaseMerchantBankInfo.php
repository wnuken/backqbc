<?php


/**
 * Base class that represents a row from the 'merchant_bank_info' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseMerchantBankInfo extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MerchantBankInfoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MerchantBankInfoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the info_id field.
     * @var        int
     */
    protected $info_id;

    /**
     * The value for the bank_country field.
     * @var        string
     */
    protected $bank_country;

    /**
     * The value for the account_type field.
     * @var        string
     */
    protected $account_type;

    /**
     * The value for the holder field.
     * @var        string
     */
    protected $holder;

    /**
     * The value for the bank field.
     * @var        string
     */
    protected $bank;

    /**
     * The value for the account_number field.
     * @var        string
     */
    protected $account_number;

    /**
     * The value for the currency field.
     * @var        string
     */
    protected $currency;

    /**
     * The value for the is_fiduciary field.
     * @var        int
     */
    protected $is_fiduciary;

    /**
     * @var        PropelObjectCollection|GroupdealsMerchants[] Collection to store aggregation of GroupdealsMerchants objects.
     */
    protected $collGroupdealsMerchantss;
    protected $collGroupdealsMerchantssPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $groupdealsMerchantssScheduledForDeletion = null;

    /**
     * Get the [info_id] column value.
     *
     * @return int
     */
    public function getInfoId()
    {

        return $this->info_id;
    }

    /**
     * Get the [bank_country] column value.
     *
     * @return string
     */
    public function getBankCountry()
    {

        return $this->bank_country;
    }

    /**
     * Get the [account_type] column value.
     *
     * @return string
     */
    public function getAccountType()
    {

        return $this->account_type;
    }

    /**
     * Get the [holder] column value.
     *
     * @return string
     */
    public function getHolder()
    {

        return $this->holder;
    }

    /**
     * Get the [bank] column value.
     *
     * @return string
     */
    public function getBank()
    {

        return $this->bank;
    }

    /**
     * Get the [account_number] column value.
     *
     * @return string
     */
    public function getAccountNumber()
    {

        return $this->account_number;
    }

    /**
     * Get the [currency] column value.
     *
     * @return string
     */
    public function getCurrency()
    {

        return $this->currency;
    }

    /**
     * Get the [is_fiduciary] column value.
     *
     * @return int
     */
    public function getIsFiduciary()
    {

        return $this->is_fiduciary;
    }

    /**
     * Set the value of [info_id] column.
     *
     * @param  int $v new value
     * @return MerchantBankInfo The current object (for fluent API support)
     */
    public function setInfoId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->info_id !== $v) {
            $this->info_id = $v;
            $this->modifiedColumns[] = MerchantBankInfoPeer::INFO_ID;
        }


        return $this;
    } // setInfoId()

    /**
     * Set the value of [bank_country] column.
     *
     * @param  string $v new value
     * @return MerchantBankInfo The current object (for fluent API support)
     */
    public function setBankCountry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bank_country !== $v) {
            $this->bank_country = $v;
            $this->modifiedColumns[] = MerchantBankInfoPeer::BANK_COUNTRY;
        }


        return $this;
    } // setBankCountry()

    /**
     * Set the value of [account_type] column.
     *
     * @param  string $v new value
     * @return MerchantBankInfo The current object (for fluent API support)
     */
    public function setAccountType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->account_type !== $v) {
            $this->account_type = $v;
            $this->modifiedColumns[] = MerchantBankInfoPeer::ACCOUNT_TYPE;
        }


        return $this;
    } // setAccountType()

    /**
     * Set the value of [holder] column.
     *
     * @param  string $v new value
     * @return MerchantBankInfo The current object (for fluent API support)
     */
    public function setHolder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->holder !== $v) {
            $this->holder = $v;
            $this->modifiedColumns[] = MerchantBankInfoPeer::HOLDER;
        }


        return $this;
    } // setHolder()

    /**
     * Set the value of [bank] column.
     *
     * @param  string $v new value
     * @return MerchantBankInfo The current object (for fluent API support)
     */
    public function setBank($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bank !== $v) {
            $this->bank = $v;
            $this->modifiedColumns[] = MerchantBankInfoPeer::BANK;
        }


        return $this;
    } // setBank()

    /**
     * Set the value of [account_number] column.
     *
     * @param  string $v new value
     * @return MerchantBankInfo The current object (for fluent API support)
     */
    public function setAccountNumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->account_number !== $v) {
            $this->account_number = $v;
            $this->modifiedColumns[] = MerchantBankInfoPeer::ACCOUNT_NUMBER;
        }


        return $this;
    } // setAccountNumber()

    /**
     * Set the value of [currency] column.
     *
     * @param  string $v new value
     * @return MerchantBankInfo The current object (for fluent API support)
     */
    public function setCurrency($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->currency !== $v) {
            $this->currency = $v;
            $this->modifiedColumns[] = MerchantBankInfoPeer::CURRENCY;
        }


        return $this;
    } // setCurrency()

    /**
     * Set the value of [is_fiduciary] column.
     *
     * @param  int $v new value
     * @return MerchantBankInfo The current object (for fluent API support)
     */
    public function setIsFiduciary($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_fiduciary !== $v) {
            $this->is_fiduciary = $v;
            $this->modifiedColumns[] = MerchantBankInfoPeer::IS_FIDUCIARY;
        }


        return $this;
    } // setIsFiduciary()

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

            $this->info_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->bank_country = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->account_type = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->holder = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->bank = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->account_number = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->currency = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->is_fiduciary = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = MerchantBankInfoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating MerchantBankInfo object", $e);
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
            $con = Propel::getConnection(MerchantBankInfoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MerchantBankInfoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collGroupdealsMerchantss = null;

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
            $con = Propel::getConnection(MerchantBankInfoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MerchantBankInfoQuery::create()
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
            $con = Propel::getConnection(MerchantBankInfoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                MerchantBankInfoPeer::addInstanceToPool($this);
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

            if ($this->groupdealsMerchantssScheduledForDeletion !== null) {
                if (!$this->groupdealsMerchantssScheduledForDeletion->isEmpty()) {
                    foreach ($this->groupdealsMerchantssScheduledForDeletion as $groupdealsMerchants) {
                        // need to save related object because we set the relation to null
                        $groupdealsMerchants->save($con);
                    }
                    $this->groupdealsMerchantssScheduledForDeletion = null;
                }
            }

            if ($this->collGroupdealsMerchantss !== null) {
                foreach ($this->collGroupdealsMerchantss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = MerchantBankInfoPeer::INFO_ID;
        if (null !== $this->info_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . MerchantBankInfoPeer::INFO_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(MerchantBankInfoPeer::INFO_ID)) {
            $modifiedColumns[':p' . $index++]  = 'info_id';
        }
        if ($this->isColumnModified(MerchantBankInfoPeer::BANK_COUNTRY)) {
            $modifiedColumns[':p' . $index++]  = 'bank_country';
        }
        if ($this->isColumnModified(MerchantBankInfoPeer::ACCOUNT_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'account_type';
        }
        if ($this->isColumnModified(MerchantBankInfoPeer::HOLDER)) {
            $modifiedColumns[':p' . $index++]  = 'holder';
        }
        if ($this->isColumnModified(MerchantBankInfoPeer::BANK)) {
            $modifiedColumns[':p' . $index++]  = 'bank';
        }
        if ($this->isColumnModified(MerchantBankInfoPeer::ACCOUNT_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = 'account_number';
        }
        if ($this->isColumnModified(MerchantBankInfoPeer::CURRENCY)) {
            $modifiedColumns[':p' . $index++]  = 'currency';
        }
        if ($this->isColumnModified(MerchantBankInfoPeer::IS_FIDUCIARY)) {
            $modifiedColumns[':p' . $index++]  = 'is_fiduciary';
        }

        $sql = sprintf(
            'INSERT INTO merchant_bank_info (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'info_id':
                        $stmt->bindValue($identifier, $this->info_id, PDO::PARAM_INT);
                        break;
                    case 'bank_country':
                        $stmt->bindValue($identifier, $this->bank_country, PDO::PARAM_STR);
                        break;
                    case 'account_type':
                        $stmt->bindValue($identifier, $this->account_type, PDO::PARAM_STR);
                        break;
                    case 'holder':
                        $stmt->bindValue($identifier, $this->holder, PDO::PARAM_STR);
                        break;
                    case 'bank':
                        $stmt->bindValue($identifier, $this->bank, PDO::PARAM_STR);
                        break;
                    case 'account_number':
                        $stmt->bindValue($identifier, $this->account_number, PDO::PARAM_STR);
                        break;
                    case 'currency':
                        $stmt->bindValue($identifier, $this->currency, PDO::PARAM_STR);
                        break;
                    case 'is_fiduciary':
                        $stmt->bindValue($identifier, $this->is_fiduciary, PDO::PARAM_INT);
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
        $this->setInfoId($pk);

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


            if (($retval = MerchantBankInfoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collGroupdealsMerchantss !== null) {
                    foreach ($this->collGroupdealsMerchantss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = MerchantBankInfoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getInfoId();
                break;
            case 1:
                return $this->getBankCountry();
                break;
            case 2:
                return $this->getAccountType();
                break;
            case 3:
                return $this->getHolder();
                break;
            case 4:
                return $this->getBank();
                break;
            case 5:
                return $this->getAccountNumber();
                break;
            case 6:
                return $this->getCurrency();
                break;
            case 7:
                return $this->getIsFiduciary();
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
        if (isset($alreadyDumpedObjects['MerchantBankInfo'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['MerchantBankInfo'][$this->getPrimaryKey()] = true;
        $keys = MerchantBankInfoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInfoId(),
            $keys[1] => $this->getBankCountry(),
            $keys[2] => $this->getAccountType(),
            $keys[3] => $this->getHolder(),
            $keys[4] => $this->getBank(),
            $keys[5] => $this->getAccountNumber(),
            $keys[6] => $this->getCurrency(),
            $keys[7] => $this->getIsFiduciary(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach($virtualColumns as $key => $virtualColumn)
        {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collGroupdealsMerchantss) {
                $result['GroupdealsMerchantss'] = $this->collGroupdealsMerchantss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = MerchantBankInfoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setInfoId($value);
                break;
            case 1:
                $this->setBankCountry($value);
                break;
            case 2:
                $this->setAccountType($value);
                break;
            case 3:
                $this->setHolder($value);
                break;
            case 4:
                $this->setBank($value);
                break;
            case 5:
                $this->setAccountNumber($value);
                break;
            case 6:
                $this->setCurrency($value);
                break;
            case 7:
                $this->setIsFiduciary($value);
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
        $keys = MerchantBankInfoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setInfoId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setBankCountry($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAccountType($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setHolder($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setBank($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAccountNumber($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCurrency($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIsFiduciary($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MerchantBankInfoPeer::DATABASE_NAME);

        if ($this->isColumnModified(MerchantBankInfoPeer::INFO_ID)) $criteria->add(MerchantBankInfoPeer::INFO_ID, $this->info_id);
        if ($this->isColumnModified(MerchantBankInfoPeer::BANK_COUNTRY)) $criteria->add(MerchantBankInfoPeer::BANK_COUNTRY, $this->bank_country);
        if ($this->isColumnModified(MerchantBankInfoPeer::ACCOUNT_TYPE)) $criteria->add(MerchantBankInfoPeer::ACCOUNT_TYPE, $this->account_type);
        if ($this->isColumnModified(MerchantBankInfoPeer::HOLDER)) $criteria->add(MerchantBankInfoPeer::HOLDER, $this->holder);
        if ($this->isColumnModified(MerchantBankInfoPeer::BANK)) $criteria->add(MerchantBankInfoPeer::BANK, $this->bank);
        if ($this->isColumnModified(MerchantBankInfoPeer::ACCOUNT_NUMBER)) $criteria->add(MerchantBankInfoPeer::ACCOUNT_NUMBER, $this->account_number);
        if ($this->isColumnModified(MerchantBankInfoPeer::CURRENCY)) $criteria->add(MerchantBankInfoPeer::CURRENCY, $this->currency);
        if ($this->isColumnModified(MerchantBankInfoPeer::IS_FIDUCIARY)) $criteria->add(MerchantBankInfoPeer::IS_FIDUCIARY, $this->is_fiduciary);

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
        $criteria = new Criteria(MerchantBankInfoPeer::DATABASE_NAME);
        $criteria->add(MerchantBankInfoPeer::INFO_ID, $this->info_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getInfoId();
    }

    /**
     * Generic method to set the primary key (info_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setInfoId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getInfoId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of MerchantBankInfo (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBankCountry($this->getBankCountry());
        $copyObj->setAccountType($this->getAccountType());
        $copyObj->setHolder($this->getHolder());
        $copyObj->setBank($this->getBank());
        $copyObj->setAccountNumber($this->getAccountNumber());
        $copyObj->setCurrency($this->getCurrency());
        $copyObj->setIsFiduciary($this->getIsFiduciary());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getGroupdealsMerchantss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGroupdealsMerchants($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setInfoId(NULL); // this is a auto-increment column, so set to default value
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
     * @return MerchantBankInfo Clone of current object.
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
     * @return MerchantBankInfoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MerchantBankInfoPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('GroupdealsMerchants' == $relationName) {
            $this->initGroupdealsMerchantss();
        }
    }

    /**
     * Clears out the collGroupdealsMerchantss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return MerchantBankInfo The current object (for fluent API support)
     * @see        addGroupdealsMerchantss()
     */
    public function clearGroupdealsMerchantss()
    {
        $this->collGroupdealsMerchantss = null; // important to set this to null since that means it is uninitialized
        $this->collGroupdealsMerchantssPartial = null;

        return $this;
    }

    /**
     * reset is the collGroupdealsMerchantss collection loaded partially
     *
     * @return void
     */
    public function resetPartialGroupdealsMerchantss($v = true)
    {
        $this->collGroupdealsMerchantssPartial = $v;
    }

    /**
     * Initializes the collGroupdealsMerchantss collection.
     *
     * By default this just sets the collGroupdealsMerchantss collection to an empty array (like clearcollGroupdealsMerchantss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGroupdealsMerchantss($overrideExisting = true)
    {
        if (null !== $this->collGroupdealsMerchantss && !$overrideExisting) {
            return;
        }
        $this->collGroupdealsMerchantss = new PropelObjectCollection();
        $this->collGroupdealsMerchantss->setModel('GroupdealsMerchants');
    }

    /**
     * Gets an array of GroupdealsMerchants objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this MerchantBankInfo is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GroupdealsMerchants[] List of GroupdealsMerchants objects
     * @throws PropelException
     */
    public function getGroupdealsMerchantss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGroupdealsMerchantssPartial && !$this->isNew();
        if (null === $this->collGroupdealsMerchantss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGroupdealsMerchantss) {
                // return empty collection
                $this->initGroupdealsMerchantss();
            } else {
                $collGroupdealsMerchantss = GroupdealsMerchantsQuery::create(null, $criteria)
                    ->filterByMerchantBankInfo($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGroupdealsMerchantssPartial && count($collGroupdealsMerchantss)) {
                      $this->initGroupdealsMerchantss(false);

                      foreach ($collGroupdealsMerchantss as $obj) {
                        if (false == $this->collGroupdealsMerchantss->contains($obj)) {
                          $this->collGroupdealsMerchantss->append($obj);
                        }
                      }

                      $this->collGroupdealsMerchantssPartial = true;
                    }

                    $collGroupdealsMerchantss->getInternalIterator()->rewind();

                    return $collGroupdealsMerchantss;
                }

                if ($partial && $this->collGroupdealsMerchantss) {
                    foreach ($this->collGroupdealsMerchantss as $obj) {
                        if ($obj->isNew()) {
                            $collGroupdealsMerchantss[] = $obj;
                        }
                    }
                }

                $this->collGroupdealsMerchantss = $collGroupdealsMerchantss;
                $this->collGroupdealsMerchantssPartial = false;
            }
        }

        return $this->collGroupdealsMerchantss;
    }

    /**
     * Sets a collection of GroupdealsMerchants objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $groupdealsMerchantss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return MerchantBankInfo The current object (for fluent API support)
     */
    public function setGroupdealsMerchantss(PropelCollection $groupdealsMerchantss, PropelPDO $con = null)
    {
        $groupdealsMerchantssToDelete = $this->getGroupdealsMerchantss(new Criteria(), $con)->diff($groupdealsMerchantss);


        $this->groupdealsMerchantssScheduledForDeletion = $groupdealsMerchantssToDelete;

        foreach ($groupdealsMerchantssToDelete as $groupdealsMerchantsRemoved) {
            $groupdealsMerchantsRemoved->setMerchantBankInfo(null);
        }

        $this->collGroupdealsMerchantss = null;
        foreach ($groupdealsMerchantss as $groupdealsMerchants) {
            $this->addGroupdealsMerchants($groupdealsMerchants);
        }

        $this->collGroupdealsMerchantss = $groupdealsMerchantss;
        $this->collGroupdealsMerchantssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GroupdealsMerchants objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GroupdealsMerchants objects.
     * @throws PropelException
     */
    public function countGroupdealsMerchantss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGroupdealsMerchantssPartial && !$this->isNew();
        if (null === $this->collGroupdealsMerchantss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGroupdealsMerchantss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGroupdealsMerchantss());
            }
            $query = GroupdealsMerchantsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByMerchantBankInfo($this)
                ->count($con);
        }

        return count($this->collGroupdealsMerchantss);
    }

    /**
     * Method called to associate a GroupdealsMerchants object to this object
     * through the GroupdealsMerchants foreign key attribute.
     *
     * @param    GroupdealsMerchants $l GroupdealsMerchants
     * @return MerchantBankInfo The current object (for fluent API support)
     */
    public function addGroupdealsMerchants(GroupdealsMerchants $l)
    {
        if ($this->collGroupdealsMerchantss === null) {
            $this->initGroupdealsMerchantss();
            $this->collGroupdealsMerchantssPartial = true;
        }

        if (!in_array($l, $this->collGroupdealsMerchantss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGroupdealsMerchants($l);

            if ($this->groupdealsMerchantssScheduledForDeletion and $this->groupdealsMerchantssScheduledForDeletion->contains($l)) {
                $this->groupdealsMerchantssScheduledForDeletion->remove($this->groupdealsMerchantssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GroupdealsMerchants $groupdealsMerchants The groupdealsMerchants object to add.
     */
    protected function doAddGroupdealsMerchants($groupdealsMerchants)
    {
        $this->collGroupdealsMerchantss[]= $groupdealsMerchants;
        $groupdealsMerchants->setMerchantBankInfo($this);
    }

    /**
     * @param	GroupdealsMerchants $groupdealsMerchants The groupdealsMerchants object to remove.
     * @return MerchantBankInfo The current object (for fluent API support)
     */
    public function removeGroupdealsMerchants($groupdealsMerchants)
    {
        if ($this->getGroupdealsMerchantss()->contains($groupdealsMerchants)) {
            $this->collGroupdealsMerchantss->remove($this->collGroupdealsMerchantss->search($groupdealsMerchants));
            if (null === $this->groupdealsMerchantssScheduledForDeletion) {
                $this->groupdealsMerchantssScheduledForDeletion = clone $this->collGroupdealsMerchantss;
                $this->groupdealsMerchantssScheduledForDeletion->clear();
            }
            $this->groupdealsMerchantssScheduledForDeletion[]= $groupdealsMerchants;
            $groupdealsMerchants->setMerchantBankInfo(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->info_id = null;
        $this->bank_country = null;
        $this->account_type = null;
        $this->holder = null;
        $this->bank = null;
        $this->account_number = null;
        $this->currency = null;
        $this->is_fiduciary = null;
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
            if ($this->collGroupdealsMerchantss) {
                foreach ($this->collGroupdealsMerchantss as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collGroupdealsMerchantss instanceof PropelCollection) {
            $this->collGroupdealsMerchantss->clearIterator();
        }
        $this->collGroupdealsMerchantss = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(MerchantBankInfoPeer::DEFAULT_STRING_FORMAT);
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
