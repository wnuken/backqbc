<?php


/**
 * Base class that represents a row from the 'enterprise_banner_content' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseEnterpriseBannerContent extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EnterpriseBannerContentPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EnterpriseBannerContentPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the banner_id field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $banner_id;

    /**
     * The value for the store_id field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $store_id;

    /**
     * The value for the banner_content field.
     * @var        string
     */
    protected $banner_content;

    /**
     * @var        CoreStore
     */
    protected $aCoreStore;

    /**
     * @var        EnterpriseBanner
     */
    protected $aEnterpriseBanner;

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
        $this->banner_id = 0;
        $this->store_id = 0;
    }

    /**
     * Initializes internal state of BaseEnterpriseBannerContent object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [banner_id] column value.
     *
     * @return int
     */
    public function getBannerId()
    {

        return $this->banner_id;
    }

    /**
     * Get the [store_id] column value.
     *
     * @return int
     */
    public function getStoreId()
    {

        return $this->store_id;
    }

    /**
     * Get the [banner_content] column value.
     *
     * @return string
     */
    public function getBannerContent()
    {

        return $this->banner_content;
    }

    /**
     * Set the value of [banner_id] column.
     *
     * @param  int $v new value
     * @return EnterpriseBannerContent The current object (for fluent API support)
     */
    public function setBannerId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->banner_id !== $v) {
            $this->banner_id = $v;
            $this->modifiedColumns[] = EnterpriseBannerContentPeer::BANNER_ID;
        }

        if ($this->aEnterpriseBanner !== null && $this->aEnterpriseBanner->getBannerId() !== $v) {
            $this->aEnterpriseBanner = null;
        }


        return $this;
    } // setBannerId()

    /**
     * Set the value of [store_id] column.
     *
     * @param  int $v new value
     * @return EnterpriseBannerContent The current object (for fluent API support)
     */
    public function setStoreId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->store_id !== $v) {
            $this->store_id = $v;
            $this->modifiedColumns[] = EnterpriseBannerContentPeer::STORE_ID;
        }

        if ($this->aCoreStore !== null && $this->aCoreStore->getStoreId() !== $v) {
            $this->aCoreStore = null;
        }


        return $this;
    } // setStoreId()

    /**
     * Set the value of [banner_content] column.
     *
     * @param  string $v new value
     * @return EnterpriseBannerContent The current object (for fluent API support)
     */
    public function setBannerContent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->banner_content !== $v) {
            $this->banner_content = $v;
            $this->modifiedColumns[] = EnterpriseBannerContentPeer::BANNER_CONTENT;
        }


        return $this;
    } // setBannerContent()

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
            if ($this->banner_id !== 0) {
                return false;
            }

            if ($this->store_id !== 0) {
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

            $this->banner_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->store_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->banner_content = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = EnterpriseBannerContentPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating EnterpriseBannerContent object", $e);
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

        if ($this->aEnterpriseBanner !== null && $this->banner_id !== $this->aEnterpriseBanner->getBannerId()) {
            $this->aEnterpriseBanner = null;
        }
        if ($this->aCoreStore !== null && $this->store_id !== $this->aCoreStore->getStoreId()) {
            $this->aCoreStore = null;
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
            $con = Propel::getConnection(EnterpriseBannerContentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EnterpriseBannerContentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCoreStore = null;
            $this->aEnterpriseBanner = null;
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
            $con = Propel::getConnection(EnterpriseBannerContentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EnterpriseBannerContentQuery::create()
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
            $con = Propel::getConnection(EnterpriseBannerContentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EnterpriseBannerContentPeer::addInstanceToPool($this);
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

            if ($this->aCoreStore !== null) {
                if ($this->aCoreStore->isModified() || $this->aCoreStore->isNew()) {
                    $affectedRows += $this->aCoreStore->save($con);
                }
                $this->setCoreStore($this->aCoreStore);
            }

            if ($this->aEnterpriseBanner !== null) {
                if ($this->aEnterpriseBanner->isModified() || $this->aEnterpriseBanner->isNew()) {
                    $affectedRows += $this->aEnterpriseBanner->save($con);
                }
                $this->setEnterpriseBanner($this->aEnterpriseBanner);
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EnterpriseBannerContentPeer::BANNER_ID)) {
            $modifiedColumns[':p' . $index++]  = 'banner_id';
        }
        if ($this->isColumnModified(EnterpriseBannerContentPeer::STORE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'store_id';
        }
        if ($this->isColumnModified(EnterpriseBannerContentPeer::BANNER_CONTENT)) {
            $modifiedColumns[':p' . $index++]  = 'banner_content';
        }

        $sql = sprintf(
            'INSERT INTO enterprise_banner_content (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'banner_id':
                        $stmt->bindValue($identifier, $this->banner_id, PDO::PARAM_INT);
                        break;
                    case 'store_id':
                        $stmt->bindValue($identifier, $this->store_id, PDO::PARAM_INT);
                        break;
                    case 'banner_content':
                        $stmt->bindValue($identifier, $this->banner_content, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

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

            if ($this->aCoreStore !== null) {
                if (!$this->aCoreStore->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCoreStore->getValidationFailures());
                }
            }

            if ($this->aEnterpriseBanner !== null) {
                if (!$this->aEnterpriseBanner->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEnterpriseBanner->getValidationFailures());
                }
            }


            if (($retval = EnterpriseBannerContentPeer::doValidate($this, $columns)) !== true) {
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
        $pos = EnterpriseBannerContentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getBannerId();
                break;
            case 1:
                return $this->getStoreId();
                break;
            case 2:
                return $this->getBannerContent();
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
        if (isset($alreadyDumpedObjects['EnterpriseBannerContent'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['EnterpriseBannerContent'][serialize($this->getPrimaryKey())] = true;
        $keys = EnterpriseBannerContentPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBannerId(),
            $keys[1] => $this->getStoreId(),
            $keys[2] => $this->getBannerContent(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach($virtualColumns as $key => $virtualColumn)
        {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCoreStore) {
                $result['CoreStore'] = $this->aCoreStore->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEnterpriseBanner) {
                $result['EnterpriseBanner'] = $this->aEnterpriseBanner->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = EnterpriseBannerContentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setBannerId($value);
                break;
            case 1:
                $this->setStoreId($value);
                break;
            case 2:
                $this->setBannerContent($value);
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
        $keys = EnterpriseBannerContentPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBannerId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStoreId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setBannerContent($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EnterpriseBannerContentPeer::DATABASE_NAME);

        if ($this->isColumnModified(EnterpriseBannerContentPeer::BANNER_ID)) $criteria->add(EnterpriseBannerContentPeer::BANNER_ID, $this->banner_id);
        if ($this->isColumnModified(EnterpriseBannerContentPeer::STORE_ID)) $criteria->add(EnterpriseBannerContentPeer::STORE_ID, $this->store_id);
        if ($this->isColumnModified(EnterpriseBannerContentPeer::BANNER_CONTENT)) $criteria->add(EnterpriseBannerContentPeer::BANNER_CONTENT, $this->banner_content);

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
        $criteria = new Criteria(EnterpriseBannerContentPeer::DATABASE_NAME);
        $criteria->add(EnterpriseBannerContentPeer::BANNER_ID, $this->banner_id);
        $criteria->add(EnterpriseBannerContentPeer::STORE_ID, $this->store_id);

        return $criteria;
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getBannerId();
        $pks[1] = $this->getStoreId();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setBannerId($keys[0]);
        $this->setStoreId($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getBannerId()) && (null === $this->getStoreId());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of EnterpriseBannerContent (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBannerId($this->getBannerId());
        $copyObj->setStoreId($this->getStoreId());
        $copyObj->setBannerContent($this->getBannerContent());

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
     * @return EnterpriseBannerContent Clone of current object.
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
     * @return EnterpriseBannerContentPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EnterpriseBannerContentPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CoreStore object.
     *
     * @param                  CoreStore $v
     * @return EnterpriseBannerContent The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCoreStore(CoreStore $v = null)
    {
        if ($v === null) {
            $this->setStoreId(0);
        } else {
            $this->setStoreId($v->getStoreId());
        }

        $this->aCoreStore = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CoreStore object, it will not be re-added.
        if ($v !== null) {
            $v->addEnterpriseBannerContent($this);
        }


        return $this;
    }


    /**
     * Get the associated CoreStore object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CoreStore The associated CoreStore object.
     * @throws PropelException
     */
    public function getCoreStore(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCoreStore === null && ($this->store_id !== null) && $doQuery) {
            $this->aCoreStore = CoreStoreQuery::create()->findPk($this->store_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCoreStore->addEnterpriseBannerContents($this);
             */
        }

        return $this->aCoreStore;
    }

    /**
     * Declares an association between this object and a EnterpriseBanner object.
     *
     * @param                  EnterpriseBanner $v
     * @return EnterpriseBannerContent The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEnterpriseBanner(EnterpriseBanner $v = null)
    {
        if ($v === null) {
            $this->setBannerId(0);
        } else {
            $this->setBannerId($v->getBannerId());
        }

        $this->aEnterpriseBanner = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the EnterpriseBanner object, it will not be re-added.
        if ($v !== null) {
            $v->addEnterpriseBannerContent($this);
        }


        return $this;
    }


    /**
     * Get the associated EnterpriseBanner object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return EnterpriseBanner The associated EnterpriseBanner object.
     * @throws PropelException
     */
    public function getEnterpriseBanner(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEnterpriseBanner === null && ($this->banner_id !== null) && $doQuery) {
            $this->aEnterpriseBanner = EnterpriseBannerQuery::create()->findPk($this->banner_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEnterpriseBanner->addEnterpriseBannerContents($this);
             */
        }

        return $this->aEnterpriseBanner;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->banner_id = null;
        $this->store_id = null;
        $this->banner_content = null;
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
            if ($this->aCoreStore instanceof Persistent) {
              $this->aCoreStore->clearAllReferences($deep);
            }
            if ($this->aEnterpriseBanner instanceof Persistent) {
              $this->aEnterpriseBanner->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCoreStore = null;
        $this->aEnterpriseBanner = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EnterpriseBannerContentPeer::DEFAULT_STRING_FORMAT);
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
