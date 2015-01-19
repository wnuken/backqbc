<?php


/**
 * Base class that represents a row from the 'core_store' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseCoreStore extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CoreStorePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CoreStorePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the store_id field.
     * @var        int
     */
    protected $store_id;

    /**
     * The value for the code field.
     * @var        string
     */
    protected $code;

    /**
     * The value for the website_id field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $website_id;

    /**
     * The value for the group_id field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $group_id;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the sort_order field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $sort_order;

    /**
     * The value for the is_active field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $is_active;

    /**
     * @var        CoreStoreGroup
     */
    protected $aCoreStoreGroup;

    /**
     * @var        CoreWebsite
     */
    protected $aCoreWebsite;

    /**
     * @var        PropelObjectCollection|CustomerEntity[] Collection to store aggregation of CustomerEntity objects.
     */
    protected $collCustomerEntitys;
    protected $collCustomerEntitysPartial;

    /**
     * @var        PropelObjectCollection|SalesFlatOrder[] Collection to store aggregation of SalesFlatOrder objects.
     */
    protected $collSalesFlatOrders;
    protected $collSalesFlatOrdersPartial;

    /**
     * @var        PropelObjectCollection|SalesFlatOrderItem[] Collection to store aggregation of SalesFlatOrderItem objects.
     */
    protected $collSalesFlatOrderItems;
    protected $collSalesFlatOrderItemsPartial;

    /**
     * @var        PropelObjectCollection|EnterpriseBannerContent[] Collection to store aggregation of EnterpriseBannerContent objects.
     */
    protected $collEnterpriseBannerContents;
    protected $collEnterpriseBannerContentsPartial;

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
    protected $customerEntitysScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $salesFlatOrdersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $salesFlatOrderItemsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $enterpriseBannerContentsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->website_id = 0;
        $this->group_id = 0;
        $this->sort_order = 0;
        $this->is_active = 0;
    }

    /**
     * Initializes internal state of BaseCoreStore object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [code] column value.
     *
     * @return string
     */
    public function getCode()
    {

        return $this->code;
    }

    /**
     * Get the [website_id] column value.
     *
     * @return int
     */
    public function getWebsiteId()
    {

        return $this->website_id;
    }

    /**
     * Get the [group_id] column value.
     *
     * @return int
     */
    public function getGroupId()
    {

        return $this->group_id;
    }

    /**
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {

        return $this->name;
    }

    /**
     * Get the [sort_order] column value.
     *
     * @return int
     */
    public function getSortOrder()
    {

        return $this->sort_order;
    }

    /**
     * Get the [is_active] column value.
     *
     * @return int
     */
    public function getIsActive()
    {

        return $this->is_active;
    }

    /**
     * Set the value of [store_id] column.
     *
     * @param  int $v new value
     * @return CoreStore The current object (for fluent API support)
     */
    public function setStoreId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->store_id !== $v) {
            $this->store_id = $v;
            $this->modifiedColumns[] = CoreStorePeer::STORE_ID;
        }


        return $this;
    } // setStoreId()

    /**
     * Set the value of [code] column.
     *
     * @param  string $v new value
     * @return CoreStore The current object (for fluent API support)
     */
    public function setCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code !== $v) {
            $this->code = $v;
            $this->modifiedColumns[] = CoreStorePeer::CODE;
        }


        return $this;
    } // setCode()

    /**
     * Set the value of [website_id] column.
     *
     * @param  int $v new value
     * @return CoreStore The current object (for fluent API support)
     */
    public function setWebsiteId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->website_id !== $v) {
            $this->website_id = $v;
            $this->modifiedColumns[] = CoreStorePeer::WEBSITE_ID;
        }

        if ($this->aCoreWebsite !== null && $this->aCoreWebsite->getWebsiteId() !== $v) {
            $this->aCoreWebsite = null;
        }


        return $this;
    } // setWebsiteId()

    /**
     * Set the value of [group_id] column.
     *
     * @param  int $v new value
     * @return CoreStore The current object (for fluent API support)
     */
    public function setGroupId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->group_id !== $v) {
            $this->group_id = $v;
            $this->modifiedColumns[] = CoreStorePeer::GROUP_ID;
        }

        if ($this->aCoreStoreGroup !== null && $this->aCoreStoreGroup->getGroupId() !== $v) {
            $this->aCoreStoreGroup = null;
        }


        return $this;
    } // setGroupId()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return CoreStore The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = CoreStorePeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [sort_order] column.
     *
     * @param  int $v new value
     * @return CoreStore The current object (for fluent API support)
     */
    public function setSortOrder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sort_order !== $v) {
            $this->sort_order = $v;
            $this->modifiedColumns[] = CoreStorePeer::SORT_ORDER;
        }


        return $this;
    } // setSortOrder()

    /**
     * Set the value of [is_active] column.
     *
     * @param  int $v new value
     * @return CoreStore The current object (for fluent API support)
     */
    public function setIsActive($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_active !== $v) {
            $this->is_active = $v;
            $this->modifiedColumns[] = CoreStorePeer::IS_ACTIVE;
        }


        return $this;
    } // setIsActive()

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
            if ($this->website_id !== 0) {
                return false;
            }

            if ($this->group_id !== 0) {
                return false;
            }

            if ($this->sort_order !== 0) {
                return false;
            }

            if ($this->is_active !== 0) {
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

            $this->store_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->code = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->website_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->group_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->name = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->sort_order = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->is_active = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = CoreStorePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CoreStore object", $e);
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

        if ($this->aCoreWebsite !== null && $this->website_id !== $this->aCoreWebsite->getWebsiteId()) {
            $this->aCoreWebsite = null;
        }
        if ($this->aCoreStoreGroup !== null && $this->group_id !== $this->aCoreStoreGroup->getGroupId()) {
            $this->aCoreStoreGroup = null;
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
            $con = Propel::getConnection(CoreStorePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CoreStorePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCoreStoreGroup = null;
            $this->aCoreWebsite = null;
            $this->collCustomerEntitys = null;

            $this->collSalesFlatOrders = null;

            $this->collSalesFlatOrderItems = null;

            $this->collEnterpriseBannerContents = null;

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
            $con = Propel::getConnection(CoreStorePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CoreStoreQuery::create()
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
            $con = Propel::getConnection(CoreStorePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CoreStorePeer::addInstanceToPool($this);
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

            if ($this->aCoreStoreGroup !== null) {
                if ($this->aCoreStoreGroup->isModified() || $this->aCoreStoreGroup->isNew()) {
                    $affectedRows += $this->aCoreStoreGroup->save($con);
                }
                $this->setCoreStoreGroup($this->aCoreStoreGroup);
            }

            if ($this->aCoreWebsite !== null) {
                if ($this->aCoreWebsite->isModified() || $this->aCoreWebsite->isNew()) {
                    $affectedRows += $this->aCoreWebsite->save($con);
                }
                $this->setCoreWebsite($this->aCoreWebsite);
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

            if ($this->customerEntitysScheduledForDeletion !== null) {
                if (!$this->customerEntitysScheduledForDeletion->isEmpty()) {
                    foreach ($this->customerEntitysScheduledForDeletion as $customerEntity) {
                        // need to save related object because we set the relation to null
                        $customerEntity->save($con);
                    }
                    $this->customerEntitysScheduledForDeletion = null;
                }
            }

            if ($this->collCustomerEntitys !== null) {
                foreach ($this->collCustomerEntitys as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->salesFlatOrdersScheduledForDeletion !== null) {
                if (!$this->salesFlatOrdersScheduledForDeletion->isEmpty()) {
                    foreach ($this->salesFlatOrdersScheduledForDeletion as $salesFlatOrder) {
                        // need to save related object because we set the relation to null
                        $salesFlatOrder->save($con);
                    }
                    $this->salesFlatOrdersScheduledForDeletion = null;
                }
            }

            if ($this->collSalesFlatOrders !== null) {
                foreach ($this->collSalesFlatOrders as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->salesFlatOrderItemsScheduledForDeletion !== null) {
                if (!$this->salesFlatOrderItemsScheduledForDeletion->isEmpty()) {
                    foreach ($this->salesFlatOrderItemsScheduledForDeletion as $salesFlatOrderItem) {
                        // need to save related object because we set the relation to null
                        $salesFlatOrderItem->save($con);
                    }
                    $this->salesFlatOrderItemsScheduledForDeletion = null;
                }
            }

            if ($this->collSalesFlatOrderItems !== null) {
                foreach ($this->collSalesFlatOrderItems as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->enterpriseBannerContentsScheduledForDeletion !== null) {
                if (!$this->enterpriseBannerContentsScheduledForDeletion->isEmpty()) {
                    EnterpriseBannerContentQuery::create()
                        ->filterByPrimaryKeys($this->enterpriseBannerContentsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->enterpriseBannerContentsScheduledForDeletion = null;
                }
            }

            if ($this->collEnterpriseBannerContents !== null) {
                foreach ($this->collEnterpriseBannerContents as $referrerFK) {
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

        $this->modifiedColumns[] = CoreStorePeer::STORE_ID;
        if (null !== $this->store_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CoreStorePeer::STORE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CoreStorePeer::STORE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'store_id';
        }
        if ($this->isColumnModified(CoreStorePeer::CODE)) {
            $modifiedColumns[':p' . $index++]  = 'code';
        }
        if ($this->isColumnModified(CoreStorePeer::WEBSITE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'website_id';
        }
        if ($this->isColumnModified(CoreStorePeer::GROUP_ID)) {
            $modifiedColumns[':p' . $index++]  = 'group_id';
        }
        if ($this->isColumnModified(CoreStorePeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }
        if ($this->isColumnModified(CoreStorePeer::SORT_ORDER)) {
            $modifiedColumns[':p' . $index++]  = 'sort_order';
        }
        if ($this->isColumnModified(CoreStorePeer::IS_ACTIVE)) {
            $modifiedColumns[':p' . $index++]  = 'is_active';
        }

        $sql = sprintf(
            'INSERT INTO core_store (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'store_id':
                        $stmt->bindValue($identifier, $this->store_id, PDO::PARAM_INT);
                        break;
                    case 'code':
                        $stmt->bindValue($identifier, $this->code, PDO::PARAM_STR);
                        break;
                    case 'website_id':
                        $stmt->bindValue($identifier, $this->website_id, PDO::PARAM_INT);
                        break;
                    case 'group_id':
                        $stmt->bindValue($identifier, $this->group_id, PDO::PARAM_INT);
                        break;
                    case 'name':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case 'sort_order':
                        $stmt->bindValue($identifier, $this->sort_order, PDO::PARAM_INT);
                        break;
                    case 'is_active':
                        $stmt->bindValue($identifier, $this->is_active, PDO::PARAM_INT);
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
        $this->setStoreId($pk);

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

            if ($this->aCoreStoreGroup !== null) {
                if (!$this->aCoreStoreGroup->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCoreStoreGroup->getValidationFailures());
                }
            }

            if ($this->aCoreWebsite !== null) {
                if (!$this->aCoreWebsite->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCoreWebsite->getValidationFailures());
                }
            }


            if (($retval = CoreStorePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCustomerEntitys !== null) {
                    foreach ($this->collCustomerEntitys as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collSalesFlatOrders !== null) {
                    foreach ($this->collSalesFlatOrders as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collSalesFlatOrderItems !== null) {
                    foreach ($this->collSalesFlatOrderItems as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEnterpriseBannerContents !== null) {
                    foreach ($this->collEnterpriseBannerContents as $referrerFK) {
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
        $pos = CoreStorePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getStoreId();
                break;
            case 1:
                return $this->getCode();
                break;
            case 2:
                return $this->getWebsiteId();
                break;
            case 3:
                return $this->getGroupId();
                break;
            case 4:
                return $this->getName();
                break;
            case 5:
                return $this->getSortOrder();
                break;
            case 6:
                return $this->getIsActive();
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
        if (isset($alreadyDumpedObjects['CoreStore'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CoreStore'][$this->getPrimaryKey()] = true;
        $keys = CoreStorePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getStoreId(),
            $keys[1] => $this->getCode(),
            $keys[2] => $this->getWebsiteId(),
            $keys[3] => $this->getGroupId(),
            $keys[4] => $this->getName(),
            $keys[5] => $this->getSortOrder(),
            $keys[6] => $this->getIsActive(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach($virtualColumns as $key => $virtualColumn)
        {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCoreStoreGroup) {
                $result['CoreStoreGroup'] = $this->aCoreStoreGroup->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCoreWebsite) {
                $result['CoreWebsite'] = $this->aCoreWebsite->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCustomerEntitys) {
                $result['CustomerEntitys'] = $this->collCustomerEntitys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSalesFlatOrders) {
                $result['SalesFlatOrders'] = $this->collSalesFlatOrders->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSalesFlatOrderItems) {
                $result['SalesFlatOrderItems'] = $this->collSalesFlatOrderItems->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEnterpriseBannerContents) {
                $result['EnterpriseBannerContents'] = $this->collEnterpriseBannerContents->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CoreStorePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setStoreId($value);
                break;
            case 1:
                $this->setCode($value);
                break;
            case 2:
                $this->setWebsiteId($value);
                break;
            case 3:
                $this->setGroupId($value);
                break;
            case 4:
                $this->setName($value);
                break;
            case 5:
                $this->setSortOrder($value);
                break;
            case 6:
                $this->setIsActive($value);
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
        $keys = CoreStorePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setStoreId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setWebsiteId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setGroupId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setName($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSortOrder($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIsActive($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CoreStorePeer::DATABASE_NAME);

        if ($this->isColumnModified(CoreStorePeer::STORE_ID)) $criteria->add(CoreStorePeer::STORE_ID, $this->store_id);
        if ($this->isColumnModified(CoreStorePeer::CODE)) $criteria->add(CoreStorePeer::CODE, $this->code);
        if ($this->isColumnModified(CoreStorePeer::WEBSITE_ID)) $criteria->add(CoreStorePeer::WEBSITE_ID, $this->website_id);
        if ($this->isColumnModified(CoreStorePeer::GROUP_ID)) $criteria->add(CoreStorePeer::GROUP_ID, $this->group_id);
        if ($this->isColumnModified(CoreStorePeer::NAME)) $criteria->add(CoreStorePeer::NAME, $this->name);
        if ($this->isColumnModified(CoreStorePeer::SORT_ORDER)) $criteria->add(CoreStorePeer::SORT_ORDER, $this->sort_order);
        if ($this->isColumnModified(CoreStorePeer::IS_ACTIVE)) $criteria->add(CoreStorePeer::IS_ACTIVE, $this->is_active);

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
        $criteria = new Criteria(CoreStorePeer::DATABASE_NAME);
        $criteria->add(CoreStorePeer::STORE_ID, $this->store_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getStoreId();
    }

    /**
     * Generic method to set the primary key (store_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setStoreId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getStoreId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CoreStore (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCode($this->getCode());
        $copyObj->setWebsiteId($this->getWebsiteId());
        $copyObj->setGroupId($this->getGroupId());
        $copyObj->setName($this->getName());
        $copyObj->setSortOrder($this->getSortOrder());
        $copyObj->setIsActive($this->getIsActive());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCustomerEntitys() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCustomerEntity($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSalesFlatOrders() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesFlatOrder($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSalesFlatOrderItems() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesFlatOrderItem($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEnterpriseBannerContents() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEnterpriseBannerContent($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setStoreId(NULL); // this is a auto-increment column, so set to default value
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
     * @return CoreStore Clone of current object.
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
     * @return CoreStorePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CoreStorePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CoreStoreGroup object.
     *
     * @param                  CoreStoreGroup $v
     * @return CoreStore The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCoreStoreGroup(CoreStoreGroup $v = null)
    {
        if ($v === null) {
            $this->setGroupId(0);
        } else {
            $this->setGroupId($v->getGroupId());
        }

        $this->aCoreStoreGroup = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CoreStoreGroup object, it will not be re-added.
        if ($v !== null) {
            $v->addCoreStore($this);
        }


        return $this;
    }


    /**
     * Get the associated CoreStoreGroup object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CoreStoreGroup The associated CoreStoreGroup object.
     * @throws PropelException
     */
    public function getCoreStoreGroup(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCoreStoreGroup === null && ($this->group_id !== null) && $doQuery) {
            $this->aCoreStoreGroup = CoreStoreGroupQuery::create()->findPk($this->group_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCoreStoreGroup->addCoreStores($this);
             */
        }

        return $this->aCoreStoreGroup;
    }

    /**
     * Declares an association between this object and a CoreWebsite object.
     *
     * @param                  CoreWebsite $v
     * @return CoreStore The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCoreWebsite(CoreWebsite $v = null)
    {
        if ($v === null) {
            $this->setWebsiteId(0);
        } else {
            $this->setWebsiteId($v->getWebsiteId());
        }

        $this->aCoreWebsite = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CoreWebsite object, it will not be re-added.
        if ($v !== null) {
            $v->addCoreStore($this);
        }


        return $this;
    }


    /**
     * Get the associated CoreWebsite object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CoreWebsite The associated CoreWebsite object.
     * @throws PropelException
     */
    public function getCoreWebsite(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCoreWebsite === null && ($this->website_id !== null) && $doQuery) {
            $this->aCoreWebsite = CoreWebsiteQuery::create()->findPk($this->website_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCoreWebsite->addCoreStores($this);
             */
        }

        return $this->aCoreWebsite;
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
        if ('CustomerEntity' == $relationName) {
            $this->initCustomerEntitys();
        }
        if ('SalesFlatOrder' == $relationName) {
            $this->initSalesFlatOrders();
        }
        if ('SalesFlatOrderItem' == $relationName) {
            $this->initSalesFlatOrderItems();
        }
        if ('EnterpriseBannerContent' == $relationName) {
            $this->initEnterpriseBannerContents();
        }
    }

    /**
     * Clears out the collCustomerEntitys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CoreStore The current object (for fluent API support)
     * @see        addCustomerEntitys()
     */
    public function clearCustomerEntitys()
    {
        $this->collCustomerEntitys = null; // important to set this to null since that means it is uninitialized
        $this->collCustomerEntitysPartial = null;

        return $this;
    }

    /**
     * reset is the collCustomerEntitys collection loaded partially
     *
     * @return void
     */
    public function resetPartialCustomerEntitys($v = true)
    {
        $this->collCustomerEntitysPartial = $v;
    }

    /**
     * Initializes the collCustomerEntitys collection.
     *
     * By default this just sets the collCustomerEntitys collection to an empty array (like clearcollCustomerEntitys());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCustomerEntitys($overrideExisting = true)
    {
        if (null !== $this->collCustomerEntitys && !$overrideExisting) {
            return;
        }
        $this->collCustomerEntitys = new PropelObjectCollection();
        $this->collCustomerEntitys->setModel('CustomerEntity');
    }

    /**
     * Gets an array of CustomerEntity objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CoreStore is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CustomerEntity[] List of CustomerEntity objects
     * @throws PropelException
     */
    public function getCustomerEntitys($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCustomerEntitysPartial && !$this->isNew();
        if (null === $this->collCustomerEntitys || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCustomerEntitys) {
                // return empty collection
                $this->initCustomerEntitys();
            } else {
                $collCustomerEntitys = CustomerEntityQuery::create(null, $criteria)
                    ->filterByCoreStore($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCustomerEntitysPartial && count($collCustomerEntitys)) {
                      $this->initCustomerEntitys(false);

                      foreach ($collCustomerEntitys as $obj) {
                        if (false == $this->collCustomerEntitys->contains($obj)) {
                          $this->collCustomerEntitys->append($obj);
                        }
                      }

                      $this->collCustomerEntitysPartial = true;
                    }

                    $collCustomerEntitys->getInternalIterator()->rewind();

                    return $collCustomerEntitys;
                }

                if ($partial && $this->collCustomerEntitys) {
                    foreach ($this->collCustomerEntitys as $obj) {
                        if ($obj->isNew()) {
                            $collCustomerEntitys[] = $obj;
                        }
                    }
                }

                $this->collCustomerEntitys = $collCustomerEntitys;
                $this->collCustomerEntitysPartial = false;
            }
        }

        return $this->collCustomerEntitys;
    }

    /**
     * Sets a collection of CustomerEntity objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $customerEntitys A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CoreStore The current object (for fluent API support)
     */
    public function setCustomerEntitys(PropelCollection $customerEntitys, PropelPDO $con = null)
    {
        $customerEntitysToDelete = $this->getCustomerEntitys(new Criteria(), $con)->diff($customerEntitys);


        $this->customerEntitysScheduledForDeletion = $customerEntitysToDelete;

        foreach ($customerEntitysToDelete as $customerEntityRemoved) {
            $customerEntityRemoved->setCoreStore(null);
        }

        $this->collCustomerEntitys = null;
        foreach ($customerEntitys as $customerEntity) {
            $this->addCustomerEntity($customerEntity);
        }

        $this->collCustomerEntitys = $customerEntitys;
        $this->collCustomerEntitysPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CustomerEntity objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CustomerEntity objects.
     * @throws PropelException
     */
    public function countCustomerEntitys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCustomerEntitysPartial && !$this->isNew();
        if (null === $this->collCustomerEntitys || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCustomerEntitys) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCustomerEntitys());
            }
            $query = CustomerEntityQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCoreStore($this)
                ->count($con);
        }

        return count($this->collCustomerEntitys);
    }

    /**
     * Method called to associate a CustomerEntity object to this object
     * through the CustomerEntity foreign key attribute.
     *
     * @param    CustomerEntity $l CustomerEntity
     * @return CoreStore The current object (for fluent API support)
     */
    public function addCustomerEntity(CustomerEntity $l)
    {
        if ($this->collCustomerEntitys === null) {
            $this->initCustomerEntitys();
            $this->collCustomerEntitysPartial = true;
        }

        if (!in_array($l, $this->collCustomerEntitys->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCustomerEntity($l);

            if ($this->customerEntitysScheduledForDeletion and $this->customerEntitysScheduledForDeletion->contains($l)) {
                $this->customerEntitysScheduledForDeletion->remove($this->customerEntitysScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	CustomerEntity $customerEntity The customerEntity object to add.
     */
    protected function doAddCustomerEntity($customerEntity)
    {
        $this->collCustomerEntitys[]= $customerEntity;
        $customerEntity->setCoreStore($this);
    }

    /**
     * @param	CustomerEntity $customerEntity The customerEntity object to remove.
     * @return CoreStore The current object (for fluent API support)
     */
    public function removeCustomerEntity($customerEntity)
    {
        if ($this->getCustomerEntitys()->contains($customerEntity)) {
            $this->collCustomerEntitys->remove($this->collCustomerEntitys->search($customerEntity));
            if (null === $this->customerEntitysScheduledForDeletion) {
                $this->customerEntitysScheduledForDeletion = clone $this->collCustomerEntitys;
                $this->customerEntitysScheduledForDeletion->clear();
            }
            $this->customerEntitysScheduledForDeletion[]= $customerEntity;
            $customerEntity->setCoreStore(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CoreStore is new, it will return
     * an empty collection; or if this CoreStore has previously
     * been saved, it will retrieve related CustomerEntitys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CoreStore.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CustomerEntity[] List of CustomerEntity objects
     */
    public function getCustomerEntitysJoinCoreWebsite($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CustomerEntityQuery::create(null, $criteria);
        $query->joinWith('CoreWebsite', $join_behavior);

        return $this->getCustomerEntitys($query, $con);
    }

    /**
     * Clears out the collSalesFlatOrders collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CoreStore The current object (for fluent API support)
     * @see        addSalesFlatOrders()
     */
    public function clearSalesFlatOrders()
    {
        $this->collSalesFlatOrders = null; // important to set this to null since that means it is uninitialized
        $this->collSalesFlatOrdersPartial = null;

        return $this;
    }

    /**
     * reset is the collSalesFlatOrders collection loaded partially
     *
     * @return void
     */
    public function resetPartialSalesFlatOrders($v = true)
    {
        $this->collSalesFlatOrdersPartial = $v;
    }

    /**
     * Initializes the collSalesFlatOrders collection.
     *
     * By default this just sets the collSalesFlatOrders collection to an empty array (like clearcollSalesFlatOrders());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSalesFlatOrders($overrideExisting = true)
    {
        if (null !== $this->collSalesFlatOrders && !$overrideExisting) {
            return;
        }
        $this->collSalesFlatOrders = new PropelObjectCollection();
        $this->collSalesFlatOrders->setModel('SalesFlatOrder');
    }

    /**
     * Gets an array of SalesFlatOrder objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CoreStore is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|SalesFlatOrder[] List of SalesFlatOrder objects
     * @throws PropelException
     */
    public function getSalesFlatOrders($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collSalesFlatOrdersPartial && !$this->isNew();
        if (null === $this->collSalesFlatOrders || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSalesFlatOrders) {
                // return empty collection
                $this->initSalesFlatOrders();
            } else {
                $collSalesFlatOrders = SalesFlatOrderQuery::create(null, $criteria)
                    ->filterByCoreStore($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collSalesFlatOrdersPartial && count($collSalesFlatOrders)) {
                      $this->initSalesFlatOrders(false);

                      foreach ($collSalesFlatOrders as $obj) {
                        if (false == $this->collSalesFlatOrders->contains($obj)) {
                          $this->collSalesFlatOrders->append($obj);
                        }
                      }

                      $this->collSalesFlatOrdersPartial = true;
                    }

                    $collSalesFlatOrders->getInternalIterator()->rewind();

                    return $collSalesFlatOrders;
                }

                if ($partial && $this->collSalesFlatOrders) {
                    foreach ($this->collSalesFlatOrders as $obj) {
                        if ($obj->isNew()) {
                            $collSalesFlatOrders[] = $obj;
                        }
                    }
                }

                $this->collSalesFlatOrders = $collSalesFlatOrders;
                $this->collSalesFlatOrdersPartial = false;
            }
        }

        return $this->collSalesFlatOrders;
    }

    /**
     * Sets a collection of SalesFlatOrder objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $salesFlatOrders A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CoreStore The current object (for fluent API support)
     */
    public function setSalesFlatOrders(PropelCollection $salesFlatOrders, PropelPDO $con = null)
    {
        $salesFlatOrdersToDelete = $this->getSalesFlatOrders(new Criteria(), $con)->diff($salesFlatOrders);


        $this->salesFlatOrdersScheduledForDeletion = $salesFlatOrdersToDelete;

        foreach ($salesFlatOrdersToDelete as $salesFlatOrderRemoved) {
            $salesFlatOrderRemoved->setCoreStore(null);
        }

        $this->collSalesFlatOrders = null;
        foreach ($salesFlatOrders as $salesFlatOrder) {
            $this->addSalesFlatOrder($salesFlatOrder);
        }

        $this->collSalesFlatOrders = $salesFlatOrders;
        $this->collSalesFlatOrdersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SalesFlatOrder objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related SalesFlatOrder objects.
     * @throws PropelException
     */
    public function countSalesFlatOrders(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collSalesFlatOrdersPartial && !$this->isNew();
        if (null === $this->collSalesFlatOrders || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSalesFlatOrders) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSalesFlatOrders());
            }
            $query = SalesFlatOrderQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCoreStore($this)
                ->count($con);
        }

        return count($this->collSalesFlatOrders);
    }

    /**
     * Method called to associate a SalesFlatOrder object to this object
     * through the SalesFlatOrder foreign key attribute.
     *
     * @param    SalesFlatOrder $l SalesFlatOrder
     * @return CoreStore The current object (for fluent API support)
     */
    public function addSalesFlatOrder(SalesFlatOrder $l)
    {
        if ($this->collSalesFlatOrders === null) {
            $this->initSalesFlatOrders();
            $this->collSalesFlatOrdersPartial = true;
        }

        if (!in_array($l, $this->collSalesFlatOrders->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddSalesFlatOrder($l);

            if ($this->salesFlatOrdersScheduledForDeletion and $this->salesFlatOrdersScheduledForDeletion->contains($l)) {
                $this->salesFlatOrdersScheduledForDeletion->remove($this->salesFlatOrdersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	SalesFlatOrder $salesFlatOrder The salesFlatOrder object to add.
     */
    protected function doAddSalesFlatOrder($salesFlatOrder)
    {
        $this->collSalesFlatOrders[]= $salesFlatOrder;
        $salesFlatOrder->setCoreStore($this);
    }

    /**
     * @param	SalesFlatOrder $salesFlatOrder The salesFlatOrder object to remove.
     * @return CoreStore The current object (for fluent API support)
     */
    public function removeSalesFlatOrder($salesFlatOrder)
    {
        if ($this->getSalesFlatOrders()->contains($salesFlatOrder)) {
            $this->collSalesFlatOrders->remove($this->collSalesFlatOrders->search($salesFlatOrder));
            if (null === $this->salesFlatOrdersScheduledForDeletion) {
                $this->salesFlatOrdersScheduledForDeletion = clone $this->collSalesFlatOrders;
                $this->salesFlatOrdersScheduledForDeletion->clear();
            }
            $this->salesFlatOrdersScheduledForDeletion[]= $salesFlatOrder;
            $salesFlatOrder->setCoreStore(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CoreStore is new, it will return
     * an empty collection; or if this CoreStore has previously
     * been saved, it will retrieve related SalesFlatOrders from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CoreStore.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|SalesFlatOrder[] List of SalesFlatOrder objects
     */
    public function getSalesFlatOrdersJoinCustomerEntity($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SalesFlatOrderQuery::create(null, $criteria);
        $query->joinWith('CustomerEntity', $join_behavior);

        return $this->getSalesFlatOrders($query, $con);
    }

    /**
     * Clears out the collSalesFlatOrderItems collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CoreStore The current object (for fluent API support)
     * @see        addSalesFlatOrderItems()
     */
    public function clearSalesFlatOrderItems()
    {
        $this->collSalesFlatOrderItems = null; // important to set this to null since that means it is uninitialized
        $this->collSalesFlatOrderItemsPartial = null;

        return $this;
    }

    /**
     * reset is the collSalesFlatOrderItems collection loaded partially
     *
     * @return void
     */
    public function resetPartialSalesFlatOrderItems($v = true)
    {
        $this->collSalesFlatOrderItemsPartial = $v;
    }

    /**
     * Initializes the collSalesFlatOrderItems collection.
     *
     * By default this just sets the collSalesFlatOrderItems collection to an empty array (like clearcollSalesFlatOrderItems());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSalesFlatOrderItems($overrideExisting = true)
    {
        if (null !== $this->collSalesFlatOrderItems && !$overrideExisting) {
            return;
        }
        $this->collSalesFlatOrderItems = new PropelObjectCollection();
        $this->collSalesFlatOrderItems->setModel('SalesFlatOrderItem');
    }

    /**
     * Gets an array of SalesFlatOrderItem objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CoreStore is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|SalesFlatOrderItem[] List of SalesFlatOrderItem objects
     * @throws PropelException
     */
    public function getSalesFlatOrderItems($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collSalesFlatOrderItemsPartial && !$this->isNew();
        if (null === $this->collSalesFlatOrderItems || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSalesFlatOrderItems) {
                // return empty collection
                $this->initSalesFlatOrderItems();
            } else {
                $collSalesFlatOrderItems = SalesFlatOrderItemQuery::create(null, $criteria)
                    ->filterByCoreStore($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collSalesFlatOrderItemsPartial && count($collSalesFlatOrderItems)) {
                      $this->initSalesFlatOrderItems(false);

                      foreach ($collSalesFlatOrderItems as $obj) {
                        if (false == $this->collSalesFlatOrderItems->contains($obj)) {
                          $this->collSalesFlatOrderItems->append($obj);
                        }
                      }

                      $this->collSalesFlatOrderItemsPartial = true;
                    }

                    $collSalesFlatOrderItems->getInternalIterator()->rewind();

                    return $collSalesFlatOrderItems;
                }

                if ($partial && $this->collSalesFlatOrderItems) {
                    foreach ($this->collSalesFlatOrderItems as $obj) {
                        if ($obj->isNew()) {
                            $collSalesFlatOrderItems[] = $obj;
                        }
                    }
                }

                $this->collSalesFlatOrderItems = $collSalesFlatOrderItems;
                $this->collSalesFlatOrderItemsPartial = false;
            }
        }

        return $this->collSalesFlatOrderItems;
    }

    /**
     * Sets a collection of SalesFlatOrderItem objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $salesFlatOrderItems A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CoreStore The current object (for fluent API support)
     */
    public function setSalesFlatOrderItems(PropelCollection $salesFlatOrderItems, PropelPDO $con = null)
    {
        $salesFlatOrderItemsToDelete = $this->getSalesFlatOrderItems(new Criteria(), $con)->diff($salesFlatOrderItems);


        $this->salesFlatOrderItemsScheduledForDeletion = $salesFlatOrderItemsToDelete;

        foreach ($salesFlatOrderItemsToDelete as $salesFlatOrderItemRemoved) {
            $salesFlatOrderItemRemoved->setCoreStore(null);
        }

        $this->collSalesFlatOrderItems = null;
        foreach ($salesFlatOrderItems as $salesFlatOrderItem) {
            $this->addSalesFlatOrderItem($salesFlatOrderItem);
        }

        $this->collSalesFlatOrderItems = $salesFlatOrderItems;
        $this->collSalesFlatOrderItemsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SalesFlatOrderItem objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related SalesFlatOrderItem objects.
     * @throws PropelException
     */
    public function countSalesFlatOrderItems(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collSalesFlatOrderItemsPartial && !$this->isNew();
        if (null === $this->collSalesFlatOrderItems || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSalesFlatOrderItems) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSalesFlatOrderItems());
            }
            $query = SalesFlatOrderItemQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCoreStore($this)
                ->count($con);
        }

        return count($this->collSalesFlatOrderItems);
    }

    /**
     * Method called to associate a SalesFlatOrderItem object to this object
     * through the SalesFlatOrderItem foreign key attribute.
     *
     * @param    SalesFlatOrderItem $l SalesFlatOrderItem
     * @return CoreStore The current object (for fluent API support)
     */
    public function addSalesFlatOrderItem(SalesFlatOrderItem $l)
    {
        if ($this->collSalesFlatOrderItems === null) {
            $this->initSalesFlatOrderItems();
            $this->collSalesFlatOrderItemsPartial = true;
        }

        if (!in_array($l, $this->collSalesFlatOrderItems->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddSalesFlatOrderItem($l);

            if ($this->salesFlatOrderItemsScheduledForDeletion and $this->salesFlatOrderItemsScheduledForDeletion->contains($l)) {
                $this->salesFlatOrderItemsScheduledForDeletion->remove($this->salesFlatOrderItemsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	SalesFlatOrderItem $salesFlatOrderItem The salesFlatOrderItem object to add.
     */
    protected function doAddSalesFlatOrderItem($salesFlatOrderItem)
    {
        $this->collSalesFlatOrderItems[]= $salesFlatOrderItem;
        $salesFlatOrderItem->setCoreStore($this);
    }

    /**
     * @param	SalesFlatOrderItem $salesFlatOrderItem The salesFlatOrderItem object to remove.
     * @return CoreStore The current object (for fluent API support)
     */
    public function removeSalesFlatOrderItem($salesFlatOrderItem)
    {
        if ($this->getSalesFlatOrderItems()->contains($salesFlatOrderItem)) {
            $this->collSalesFlatOrderItems->remove($this->collSalesFlatOrderItems->search($salesFlatOrderItem));
            if (null === $this->salesFlatOrderItemsScheduledForDeletion) {
                $this->salesFlatOrderItemsScheduledForDeletion = clone $this->collSalesFlatOrderItems;
                $this->salesFlatOrderItemsScheduledForDeletion->clear();
            }
            $this->salesFlatOrderItemsScheduledForDeletion[]= $salesFlatOrderItem;
            $salesFlatOrderItem->setCoreStore(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CoreStore is new, it will return
     * an empty collection; or if this CoreStore has previously
     * been saved, it will retrieve related SalesFlatOrderItems from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CoreStore.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|SalesFlatOrderItem[] List of SalesFlatOrderItem objects
     */
    public function getSalesFlatOrderItemsJoinSalesFlatOrder($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SalesFlatOrderItemQuery::create(null, $criteria);
        $query->joinWith('SalesFlatOrder', $join_behavior);

        return $this->getSalesFlatOrderItems($query, $con);
    }

    /**
     * Clears out the collEnterpriseBannerContents collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CoreStore The current object (for fluent API support)
     * @see        addEnterpriseBannerContents()
     */
    public function clearEnterpriseBannerContents()
    {
        $this->collEnterpriseBannerContents = null; // important to set this to null since that means it is uninitialized
        $this->collEnterpriseBannerContentsPartial = null;

        return $this;
    }

    /**
     * reset is the collEnterpriseBannerContents collection loaded partially
     *
     * @return void
     */
    public function resetPartialEnterpriseBannerContents($v = true)
    {
        $this->collEnterpriseBannerContentsPartial = $v;
    }

    /**
     * Initializes the collEnterpriseBannerContents collection.
     *
     * By default this just sets the collEnterpriseBannerContents collection to an empty array (like clearcollEnterpriseBannerContents());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEnterpriseBannerContents($overrideExisting = true)
    {
        if (null !== $this->collEnterpriseBannerContents && !$overrideExisting) {
            return;
        }
        $this->collEnterpriseBannerContents = new PropelObjectCollection();
        $this->collEnterpriseBannerContents->setModel('EnterpriseBannerContent');
    }

    /**
     * Gets an array of EnterpriseBannerContent objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CoreStore is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|EnterpriseBannerContent[] List of EnterpriseBannerContent objects
     * @throws PropelException
     */
    public function getEnterpriseBannerContents($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEnterpriseBannerContentsPartial && !$this->isNew();
        if (null === $this->collEnterpriseBannerContents || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEnterpriseBannerContents) {
                // return empty collection
                $this->initEnterpriseBannerContents();
            } else {
                $collEnterpriseBannerContents = EnterpriseBannerContentQuery::create(null, $criteria)
                    ->filterByCoreStore($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEnterpriseBannerContentsPartial && count($collEnterpriseBannerContents)) {
                      $this->initEnterpriseBannerContents(false);

                      foreach ($collEnterpriseBannerContents as $obj) {
                        if (false == $this->collEnterpriseBannerContents->contains($obj)) {
                          $this->collEnterpriseBannerContents->append($obj);
                        }
                      }

                      $this->collEnterpriseBannerContentsPartial = true;
                    }

                    $collEnterpriseBannerContents->getInternalIterator()->rewind();

                    return $collEnterpriseBannerContents;
                }

                if ($partial && $this->collEnterpriseBannerContents) {
                    foreach ($this->collEnterpriseBannerContents as $obj) {
                        if ($obj->isNew()) {
                            $collEnterpriseBannerContents[] = $obj;
                        }
                    }
                }

                $this->collEnterpriseBannerContents = $collEnterpriseBannerContents;
                $this->collEnterpriseBannerContentsPartial = false;
            }
        }

        return $this->collEnterpriseBannerContents;
    }

    /**
     * Sets a collection of EnterpriseBannerContent objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $enterpriseBannerContents A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CoreStore The current object (for fluent API support)
     */
    public function setEnterpriseBannerContents(PropelCollection $enterpriseBannerContents, PropelPDO $con = null)
    {
        $enterpriseBannerContentsToDelete = $this->getEnterpriseBannerContents(new Criteria(), $con)->diff($enterpriseBannerContents);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->enterpriseBannerContentsScheduledForDeletion = clone $enterpriseBannerContentsToDelete;

        foreach ($enterpriseBannerContentsToDelete as $enterpriseBannerContentRemoved) {
            $enterpriseBannerContentRemoved->setCoreStore(null);
        }

        $this->collEnterpriseBannerContents = null;
        foreach ($enterpriseBannerContents as $enterpriseBannerContent) {
            $this->addEnterpriseBannerContent($enterpriseBannerContent);
        }

        $this->collEnterpriseBannerContents = $enterpriseBannerContents;
        $this->collEnterpriseBannerContentsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related EnterpriseBannerContent objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related EnterpriseBannerContent objects.
     * @throws PropelException
     */
    public function countEnterpriseBannerContents(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEnterpriseBannerContentsPartial && !$this->isNew();
        if (null === $this->collEnterpriseBannerContents || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEnterpriseBannerContents) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEnterpriseBannerContents());
            }
            $query = EnterpriseBannerContentQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCoreStore($this)
                ->count($con);
        }

        return count($this->collEnterpriseBannerContents);
    }

    /**
     * Method called to associate a EnterpriseBannerContent object to this object
     * through the EnterpriseBannerContent foreign key attribute.
     *
     * @param    EnterpriseBannerContent $l EnterpriseBannerContent
     * @return CoreStore The current object (for fluent API support)
     */
    public function addEnterpriseBannerContent(EnterpriseBannerContent $l)
    {
        if ($this->collEnterpriseBannerContents === null) {
            $this->initEnterpriseBannerContents();
            $this->collEnterpriseBannerContentsPartial = true;
        }

        if (!in_array($l, $this->collEnterpriseBannerContents->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEnterpriseBannerContent($l);

            if ($this->enterpriseBannerContentsScheduledForDeletion and $this->enterpriseBannerContentsScheduledForDeletion->contains($l)) {
                $this->enterpriseBannerContentsScheduledForDeletion->remove($this->enterpriseBannerContentsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	EnterpriseBannerContent $enterpriseBannerContent The enterpriseBannerContent object to add.
     */
    protected function doAddEnterpriseBannerContent($enterpriseBannerContent)
    {
        $this->collEnterpriseBannerContents[]= $enterpriseBannerContent;
        $enterpriseBannerContent->setCoreStore($this);
    }

    /**
     * @param	EnterpriseBannerContent $enterpriseBannerContent The enterpriseBannerContent object to remove.
     * @return CoreStore The current object (for fluent API support)
     */
    public function removeEnterpriseBannerContent($enterpriseBannerContent)
    {
        if ($this->getEnterpriseBannerContents()->contains($enterpriseBannerContent)) {
            $this->collEnterpriseBannerContents->remove($this->collEnterpriseBannerContents->search($enterpriseBannerContent));
            if (null === $this->enterpriseBannerContentsScheduledForDeletion) {
                $this->enterpriseBannerContentsScheduledForDeletion = clone $this->collEnterpriseBannerContents;
                $this->enterpriseBannerContentsScheduledForDeletion->clear();
            }
            $this->enterpriseBannerContentsScheduledForDeletion[]= clone $enterpriseBannerContent;
            $enterpriseBannerContent->setCoreStore(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CoreStore is new, it will return
     * an empty collection; or if this CoreStore has previously
     * been saved, it will retrieve related EnterpriseBannerContents from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CoreStore.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|EnterpriseBannerContent[] List of EnterpriseBannerContent objects
     */
    public function getEnterpriseBannerContentsJoinEnterpriseBanner($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EnterpriseBannerContentQuery::create(null, $criteria);
        $query->joinWith('EnterpriseBanner', $join_behavior);

        return $this->getEnterpriseBannerContents($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->store_id = null;
        $this->code = null;
        $this->website_id = null;
        $this->group_id = null;
        $this->name = null;
        $this->sort_order = null;
        $this->is_active = null;
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
            if ($this->collCustomerEntitys) {
                foreach ($this->collCustomerEntitys as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSalesFlatOrders) {
                foreach ($this->collSalesFlatOrders as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSalesFlatOrderItems) {
                foreach ($this->collSalesFlatOrderItems as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEnterpriseBannerContents) {
                foreach ($this->collEnterpriseBannerContents as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCoreStoreGroup instanceof Persistent) {
              $this->aCoreStoreGroup->clearAllReferences($deep);
            }
            if ($this->aCoreWebsite instanceof Persistent) {
              $this->aCoreWebsite->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCustomerEntitys instanceof PropelCollection) {
            $this->collCustomerEntitys->clearIterator();
        }
        $this->collCustomerEntitys = null;
        if ($this->collSalesFlatOrders instanceof PropelCollection) {
            $this->collSalesFlatOrders->clearIterator();
        }
        $this->collSalesFlatOrders = null;
        if ($this->collSalesFlatOrderItems instanceof PropelCollection) {
            $this->collSalesFlatOrderItems->clearIterator();
        }
        $this->collSalesFlatOrderItems = null;
        if ($this->collEnterpriseBannerContents instanceof PropelCollection) {
            $this->collEnterpriseBannerContents->clearIterator();
        }
        $this->collEnterpriseBannerContents = null;
        $this->aCoreStoreGroup = null;
        $this->aCoreWebsite = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CoreStorePeer::DEFAULT_STRING_FORMAT);
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
