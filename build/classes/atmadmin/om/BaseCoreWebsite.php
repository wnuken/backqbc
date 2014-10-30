<?php


/**
 * Base class that represents a row from the 'core_website' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseCoreWebsite extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CoreWebsitePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CoreWebsitePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the website_id field.
     * @var        int
     */
    protected $website_id;

    /**
     * The value for the code field.
     * @var        string
     */
    protected $code;

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
     * The value for the default_group_id field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $default_group_id;

    /**
     * The value for the is_default field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $is_default;

    /**
     * The value for the is_staging field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $is_staging;

    /**
     * The value for the master_login field.
     * @var        string
     */
    protected $master_login;

    /**
     * The value for the master_password field.
     * @var        string
     */
    protected $master_password;

    /**
     * The value for the visibility field.
     * @var        string
     */
    protected $visibility;

    /**
     * The value for the is_visible field.
     * @var        string
     */
    protected $is_visible;

    /**
     * The value for the department field.
     * @var        string
     */
    protected $department;

    /**
     * @var        PropelObjectCollection|CoreStoreGroup[] Collection to store aggregation of CoreStoreGroup objects.
     */
    protected $collCoreStoreGroups;
    protected $collCoreStoreGroupsPartial;

    /**
     * @var        PropelObjectCollection|CoreStore[] Collection to store aggregation of CoreStore objects.
     */
    protected $collCoreStores;
    protected $collCoreStoresPartial;

    /**
     * @var        PropelObjectCollection|CustomerEntity[] Collection to store aggregation of CustomerEntity objects.
     */
    protected $collCustomerEntitys;
    protected $collCustomerEntitysPartial;

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
    protected $coreStoreGroupsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $coreStoresScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $customerEntitysScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->sort_order = 0;
        $this->default_group_id = 0;
        $this->is_default = 0;
        $this->is_staging = false;
    }

    /**
     * Initializes internal state of BaseCoreWebsite object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [code] column value.
     *
     * @return string
     */
    public function getCode()
    {

        return $this->code;
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
     * Get the [default_group_id] column value.
     *
     * @return int
     */
    public function getDefaultGroupId()
    {

        return $this->default_group_id;
    }

    /**
     * Get the [is_default] column value.
     *
     * @return int
     */
    public function getIsDefault()
    {

        return $this->is_default;
    }

    /**
     * Get the [is_staging] column value.
     *
     * @return boolean
     */
    public function getIsStaging()
    {

        return $this->is_staging;
    }

    /**
     * Get the [master_login] column value.
     *
     * @return string
     */
    public function getMasterLogin()
    {

        return $this->master_login;
    }

    /**
     * Get the [master_password] column value.
     *
     * @return string
     */
    public function getMasterPassword()
    {

        return $this->master_password;
    }

    /**
     * Get the [visibility] column value.
     *
     * @return string
     */
    public function getVisibility()
    {

        return $this->visibility;
    }

    /**
     * Get the [is_visible] column value.
     *
     * @return string
     */
    public function getIsVisible()
    {

        return $this->is_visible;
    }

    /**
     * Get the [department] column value.
     *
     * @return string
     */
    public function getDepartment()
    {

        return $this->department;
    }

    /**
     * Set the value of [website_id] column.
     *
     * @param  int $v new value
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function setWebsiteId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->website_id !== $v) {
            $this->website_id = $v;
            $this->modifiedColumns[] = CoreWebsitePeer::WEBSITE_ID;
        }


        return $this;
    } // setWebsiteId()

    /**
     * Set the value of [code] column.
     *
     * @param  string $v new value
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function setCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code !== $v) {
            $this->code = $v;
            $this->modifiedColumns[] = CoreWebsitePeer::CODE;
        }


        return $this;
    } // setCode()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = CoreWebsitePeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [sort_order] column.
     *
     * @param  int $v new value
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function setSortOrder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sort_order !== $v) {
            $this->sort_order = $v;
            $this->modifiedColumns[] = CoreWebsitePeer::SORT_ORDER;
        }


        return $this;
    } // setSortOrder()

    /**
     * Set the value of [default_group_id] column.
     *
     * @param  int $v new value
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function setDefaultGroupId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->default_group_id !== $v) {
            $this->default_group_id = $v;
            $this->modifiedColumns[] = CoreWebsitePeer::DEFAULT_GROUP_ID;
        }


        return $this;
    } // setDefaultGroupId()

    /**
     * Set the value of [is_default] column.
     *
     * @param  int $v new value
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function setIsDefault($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_default !== $v) {
            $this->is_default = $v;
            $this->modifiedColumns[] = CoreWebsitePeer::IS_DEFAULT;
        }


        return $this;
    } // setIsDefault()

    /**
     * Sets the value of the [is_staging] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function setIsStaging($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_staging !== $v) {
            $this->is_staging = $v;
            $this->modifiedColumns[] = CoreWebsitePeer::IS_STAGING;
        }


        return $this;
    } // setIsStaging()

    /**
     * Set the value of [master_login] column.
     *
     * @param  string $v new value
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function setMasterLogin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->master_login !== $v) {
            $this->master_login = $v;
            $this->modifiedColumns[] = CoreWebsitePeer::MASTER_LOGIN;
        }


        return $this;
    } // setMasterLogin()

    /**
     * Set the value of [master_password] column.
     *
     * @param  string $v new value
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function setMasterPassword($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->master_password !== $v) {
            $this->master_password = $v;
            $this->modifiedColumns[] = CoreWebsitePeer::MASTER_PASSWORD;
        }


        return $this;
    } // setMasterPassword()

    /**
     * Set the value of [visibility] column.
     *
     * @param  string $v new value
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function setVisibility($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visibility !== $v) {
            $this->visibility = $v;
            $this->modifiedColumns[] = CoreWebsitePeer::VISIBILITY;
        }


        return $this;
    } // setVisibility()

    /**
     * Set the value of [is_visible] column.
     *
     * @param  string $v new value
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function setIsVisible($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->is_visible !== $v) {
            $this->is_visible = $v;
            $this->modifiedColumns[] = CoreWebsitePeer::IS_VISIBLE;
        }


        return $this;
    } // setIsVisible()

    /**
     * Set the value of [department] column.
     *
     * @param  string $v new value
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function setDepartment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->department !== $v) {
            $this->department = $v;
            $this->modifiedColumns[] = CoreWebsitePeer::DEPARTMENT;
        }


        return $this;
    } // setDepartment()

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
            if ($this->sort_order !== 0) {
                return false;
            }

            if ($this->default_group_id !== 0) {
                return false;
            }

            if ($this->is_default !== 0) {
                return false;
            }

            if ($this->is_staging !== false) {
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

            $this->website_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->code = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->sort_order = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->default_group_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->is_default = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->is_staging = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
            $this->master_login = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->master_password = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->visibility = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->is_visible = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->department = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = CoreWebsitePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CoreWebsite object", $e);
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
            $con = Propel::getConnection(CoreWebsitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CoreWebsitePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCoreStoreGroups = null;

            $this->collCoreStores = null;

            $this->collCustomerEntitys = null;

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
            $con = Propel::getConnection(CoreWebsitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CoreWebsiteQuery::create()
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
            $con = Propel::getConnection(CoreWebsitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CoreWebsitePeer::addInstanceToPool($this);
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

            if ($this->coreStoreGroupsScheduledForDeletion !== null) {
                if (!$this->coreStoreGroupsScheduledForDeletion->isEmpty()) {
                    CoreStoreGroupQuery::create()
                        ->filterByPrimaryKeys($this->coreStoreGroupsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->coreStoreGroupsScheduledForDeletion = null;
                }
            }

            if ($this->collCoreStoreGroups !== null) {
                foreach ($this->collCoreStoreGroups as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->coreStoresScheduledForDeletion !== null) {
                if (!$this->coreStoresScheduledForDeletion->isEmpty()) {
                    CoreStoreQuery::create()
                        ->filterByPrimaryKeys($this->coreStoresScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->coreStoresScheduledForDeletion = null;
                }
            }

            if ($this->collCoreStores !== null) {
                foreach ($this->collCoreStores as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = CoreWebsitePeer::WEBSITE_ID;
        if (null !== $this->website_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CoreWebsitePeer::WEBSITE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CoreWebsitePeer::WEBSITE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'website_id';
        }
        if ($this->isColumnModified(CoreWebsitePeer::CODE)) {
            $modifiedColumns[':p' . $index++]  = 'code';
        }
        if ($this->isColumnModified(CoreWebsitePeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }
        if ($this->isColumnModified(CoreWebsitePeer::SORT_ORDER)) {
            $modifiedColumns[':p' . $index++]  = 'sort_order';
        }
        if ($this->isColumnModified(CoreWebsitePeer::DEFAULT_GROUP_ID)) {
            $modifiedColumns[':p' . $index++]  = 'default_group_id';
        }
        if ($this->isColumnModified(CoreWebsitePeer::IS_DEFAULT)) {
            $modifiedColumns[':p' . $index++]  = 'is_default';
        }
        if ($this->isColumnModified(CoreWebsitePeer::IS_STAGING)) {
            $modifiedColumns[':p' . $index++]  = 'is_staging';
        }
        if ($this->isColumnModified(CoreWebsitePeer::MASTER_LOGIN)) {
            $modifiedColumns[':p' . $index++]  = 'master_login';
        }
        if ($this->isColumnModified(CoreWebsitePeer::MASTER_PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = 'master_password';
        }
        if ($this->isColumnModified(CoreWebsitePeer::VISIBILITY)) {
            $modifiedColumns[':p' . $index++]  = 'visibility';
        }
        if ($this->isColumnModified(CoreWebsitePeer::IS_VISIBLE)) {
            $modifiedColumns[':p' . $index++]  = 'is_visible';
        }
        if ($this->isColumnModified(CoreWebsitePeer::DEPARTMENT)) {
            $modifiedColumns[':p' . $index++]  = 'department';
        }

        $sql = sprintf(
            'INSERT INTO core_website (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'website_id':
                        $stmt->bindValue($identifier, $this->website_id, PDO::PARAM_INT);
                        break;
                    case 'code':
                        $stmt->bindValue($identifier, $this->code, PDO::PARAM_STR);
                        break;
                    case 'name':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case 'sort_order':
                        $stmt->bindValue($identifier, $this->sort_order, PDO::PARAM_INT);
                        break;
                    case 'default_group_id':
                        $stmt->bindValue($identifier, $this->default_group_id, PDO::PARAM_INT);
                        break;
                    case 'is_default':
                        $stmt->bindValue($identifier, $this->is_default, PDO::PARAM_INT);
                        break;
                    case 'is_staging':
                        $stmt->bindValue($identifier, (int) $this->is_staging, PDO::PARAM_INT);
                        break;
                    case 'master_login':
                        $stmt->bindValue($identifier, $this->master_login, PDO::PARAM_STR);
                        break;
                    case 'master_password':
                        $stmt->bindValue($identifier, $this->master_password, PDO::PARAM_STR);
                        break;
                    case 'visibility':
                        $stmt->bindValue($identifier, $this->visibility, PDO::PARAM_STR);
                        break;
                    case 'is_visible':
                        $stmt->bindValue($identifier, $this->is_visible, PDO::PARAM_STR);
                        break;
                    case 'department':
                        $stmt->bindValue($identifier, $this->department, PDO::PARAM_STR);
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
        $this->setWebsiteId($pk);

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


            if (($retval = CoreWebsitePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCoreStoreGroups !== null) {
                    foreach ($this->collCoreStoreGroups as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCoreStores !== null) {
                    foreach ($this->collCoreStores as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCustomerEntitys !== null) {
                    foreach ($this->collCustomerEntitys as $referrerFK) {
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
        $pos = CoreWebsitePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getWebsiteId();
                break;
            case 1:
                return $this->getCode();
                break;
            case 2:
                return $this->getName();
                break;
            case 3:
                return $this->getSortOrder();
                break;
            case 4:
                return $this->getDefaultGroupId();
                break;
            case 5:
                return $this->getIsDefault();
                break;
            case 6:
                return $this->getIsStaging();
                break;
            case 7:
                return $this->getMasterLogin();
                break;
            case 8:
                return $this->getMasterPassword();
                break;
            case 9:
                return $this->getVisibility();
                break;
            case 10:
                return $this->getIsVisible();
                break;
            case 11:
                return $this->getDepartment();
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
        if (isset($alreadyDumpedObjects['CoreWebsite'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CoreWebsite'][$this->getPrimaryKey()] = true;
        $keys = CoreWebsitePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getWebsiteId(),
            $keys[1] => $this->getCode(),
            $keys[2] => $this->getName(),
            $keys[3] => $this->getSortOrder(),
            $keys[4] => $this->getDefaultGroupId(),
            $keys[5] => $this->getIsDefault(),
            $keys[6] => $this->getIsStaging(),
            $keys[7] => $this->getMasterLogin(),
            $keys[8] => $this->getMasterPassword(),
            $keys[9] => $this->getVisibility(),
            $keys[10] => $this->getIsVisible(),
            $keys[11] => $this->getDepartment(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach($virtualColumns as $key => $virtualColumn)
        {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collCoreStoreGroups) {
                $result['CoreStoreGroups'] = $this->collCoreStoreGroups->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCoreStores) {
                $result['CoreStores'] = $this->collCoreStores->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCustomerEntitys) {
                $result['CustomerEntitys'] = $this->collCustomerEntitys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CoreWebsitePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setWebsiteId($value);
                break;
            case 1:
                $this->setCode($value);
                break;
            case 2:
                $this->setName($value);
                break;
            case 3:
                $this->setSortOrder($value);
                break;
            case 4:
                $this->setDefaultGroupId($value);
                break;
            case 5:
                $this->setIsDefault($value);
                break;
            case 6:
                $this->setIsStaging($value);
                break;
            case 7:
                $this->setMasterLogin($value);
                break;
            case 8:
                $this->setMasterPassword($value);
                break;
            case 9:
                $this->setVisibility($value);
                break;
            case 10:
                $this->setIsVisible($value);
                break;
            case 11:
                $this->setDepartment($value);
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
        $keys = CoreWebsitePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setWebsiteId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSortOrder($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDefaultGroupId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIsDefault($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIsStaging($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMasterLogin($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setMasterPassword($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setVisibility($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIsVisible($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDepartment($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CoreWebsitePeer::DATABASE_NAME);

        if ($this->isColumnModified(CoreWebsitePeer::WEBSITE_ID)) $criteria->add(CoreWebsitePeer::WEBSITE_ID, $this->website_id);
        if ($this->isColumnModified(CoreWebsitePeer::CODE)) $criteria->add(CoreWebsitePeer::CODE, $this->code);
        if ($this->isColumnModified(CoreWebsitePeer::NAME)) $criteria->add(CoreWebsitePeer::NAME, $this->name);
        if ($this->isColumnModified(CoreWebsitePeer::SORT_ORDER)) $criteria->add(CoreWebsitePeer::SORT_ORDER, $this->sort_order);
        if ($this->isColumnModified(CoreWebsitePeer::DEFAULT_GROUP_ID)) $criteria->add(CoreWebsitePeer::DEFAULT_GROUP_ID, $this->default_group_id);
        if ($this->isColumnModified(CoreWebsitePeer::IS_DEFAULT)) $criteria->add(CoreWebsitePeer::IS_DEFAULT, $this->is_default);
        if ($this->isColumnModified(CoreWebsitePeer::IS_STAGING)) $criteria->add(CoreWebsitePeer::IS_STAGING, $this->is_staging);
        if ($this->isColumnModified(CoreWebsitePeer::MASTER_LOGIN)) $criteria->add(CoreWebsitePeer::MASTER_LOGIN, $this->master_login);
        if ($this->isColumnModified(CoreWebsitePeer::MASTER_PASSWORD)) $criteria->add(CoreWebsitePeer::MASTER_PASSWORD, $this->master_password);
        if ($this->isColumnModified(CoreWebsitePeer::VISIBILITY)) $criteria->add(CoreWebsitePeer::VISIBILITY, $this->visibility);
        if ($this->isColumnModified(CoreWebsitePeer::IS_VISIBLE)) $criteria->add(CoreWebsitePeer::IS_VISIBLE, $this->is_visible);
        if ($this->isColumnModified(CoreWebsitePeer::DEPARTMENT)) $criteria->add(CoreWebsitePeer::DEPARTMENT, $this->department);

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
        $criteria = new Criteria(CoreWebsitePeer::DATABASE_NAME);
        $criteria->add(CoreWebsitePeer::WEBSITE_ID, $this->website_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getWebsiteId();
    }

    /**
     * Generic method to set the primary key (website_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setWebsiteId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getWebsiteId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CoreWebsite (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCode($this->getCode());
        $copyObj->setName($this->getName());
        $copyObj->setSortOrder($this->getSortOrder());
        $copyObj->setDefaultGroupId($this->getDefaultGroupId());
        $copyObj->setIsDefault($this->getIsDefault());
        $copyObj->setIsStaging($this->getIsStaging());
        $copyObj->setMasterLogin($this->getMasterLogin());
        $copyObj->setMasterPassword($this->getMasterPassword());
        $copyObj->setVisibility($this->getVisibility());
        $copyObj->setIsVisible($this->getIsVisible());
        $copyObj->setDepartment($this->getDepartment());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCoreStoreGroups() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCoreStoreGroup($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCoreStores() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCoreStore($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCustomerEntitys() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCustomerEntity($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setWebsiteId(NULL); // this is a auto-increment column, so set to default value
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
     * @return CoreWebsite Clone of current object.
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
     * @return CoreWebsitePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CoreWebsitePeer();
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
        if ('CoreStoreGroup' == $relationName) {
            $this->initCoreStoreGroups();
        }
        if ('CoreStore' == $relationName) {
            $this->initCoreStores();
        }
        if ('CustomerEntity' == $relationName) {
            $this->initCustomerEntitys();
        }
    }

    /**
     * Clears out the collCoreStoreGroups collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CoreWebsite The current object (for fluent API support)
     * @see        addCoreStoreGroups()
     */
    public function clearCoreStoreGroups()
    {
        $this->collCoreStoreGroups = null; // important to set this to null since that means it is uninitialized
        $this->collCoreStoreGroupsPartial = null;

        return $this;
    }

    /**
     * reset is the collCoreStoreGroups collection loaded partially
     *
     * @return void
     */
    public function resetPartialCoreStoreGroups($v = true)
    {
        $this->collCoreStoreGroupsPartial = $v;
    }

    /**
     * Initializes the collCoreStoreGroups collection.
     *
     * By default this just sets the collCoreStoreGroups collection to an empty array (like clearcollCoreStoreGroups());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCoreStoreGroups($overrideExisting = true)
    {
        if (null !== $this->collCoreStoreGroups && !$overrideExisting) {
            return;
        }
        $this->collCoreStoreGroups = new PropelObjectCollection();
        $this->collCoreStoreGroups->setModel('CoreStoreGroup');
    }

    /**
     * Gets an array of CoreStoreGroup objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CoreWebsite is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CoreStoreGroup[] List of CoreStoreGroup objects
     * @throws PropelException
     */
    public function getCoreStoreGroups($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCoreStoreGroupsPartial && !$this->isNew();
        if (null === $this->collCoreStoreGroups || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCoreStoreGroups) {
                // return empty collection
                $this->initCoreStoreGroups();
            } else {
                $collCoreStoreGroups = CoreStoreGroupQuery::create(null, $criteria)
                    ->filterByCoreWebsite($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCoreStoreGroupsPartial && count($collCoreStoreGroups)) {
                      $this->initCoreStoreGroups(false);

                      foreach ($collCoreStoreGroups as $obj) {
                        if (false == $this->collCoreStoreGroups->contains($obj)) {
                          $this->collCoreStoreGroups->append($obj);
                        }
                      }

                      $this->collCoreStoreGroupsPartial = true;
                    }

                    $collCoreStoreGroups->getInternalIterator()->rewind();

                    return $collCoreStoreGroups;
                }

                if ($partial && $this->collCoreStoreGroups) {
                    foreach ($this->collCoreStoreGroups as $obj) {
                        if ($obj->isNew()) {
                            $collCoreStoreGroups[] = $obj;
                        }
                    }
                }

                $this->collCoreStoreGroups = $collCoreStoreGroups;
                $this->collCoreStoreGroupsPartial = false;
            }
        }

        return $this->collCoreStoreGroups;
    }

    /**
     * Sets a collection of CoreStoreGroup objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $coreStoreGroups A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function setCoreStoreGroups(PropelCollection $coreStoreGroups, PropelPDO $con = null)
    {
        $coreStoreGroupsToDelete = $this->getCoreStoreGroups(new Criteria(), $con)->diff($coreStoreGroups);


        $this->coreStoreGroupsScheduledForDeletion = $coreStoreGroupsToDelete;

        foreach ($coreStoreGroupsToDelete as $coreStoreGroupRemoved) {
            $coreStoreGroupRemoved->setCoreWebsite(null);
        }

        $this->collCoreStoreGroups = null;
        foreach ($coreStoreGroups as $coreStoreGroup) {
            $this->addCoreStoreGroup($coreStoreGroup);
        }

        $this->collCoreStoreGroups = $coreStoreGroups;
        $this->collCoreStoreGroupsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CoreStoreGroup objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CoreStoreGroup objects.
     * @throws PropelException
     */
    public function countCoreStoreGroups(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCoreStoreGroupsPartial && !$this->isNew();
        if (null === $this->collCoreStoreGroups || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCoreStoreGroups) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCoreStoreGroups());
            }
            $query = CoreStoreGroupQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCoreWebsite($this)
                ->count($con);
        }

        return count($this->collCoreStoreGroups);
    }

    /**
     * Method called to associate a CoreStoreGroup object to this object
     * through the CoreStoreGroup foreign key attribute.
     *
     * @param    CoreStoreGroup $l CoreStoreGroup
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function addCoreStoreGroup(CoreStoreGroup $l)
    {
        if ($this->collCoreStoreGroups === null) {
            $this->initCoreStoreGroups();
            $this->collCoreStoreGroupsPartial = true;
        }

        if (!in_array($l, $this->collCoreStoreGroups->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCoreStoreGroup($l);

            if ($this->coreStoreGroupsScheduledForDeletion and $this->coreStoreGroupsScheduledForDeletion->contains($l)) {
                $this->coreStoreGroupsScheduledForDeletion->remove($this->coreStoreGroupsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	CoreStoreGroup $coreStoreGroup The coreStoreGroup object to add.
     */
    protected function doAddCoreStoreGroup($coreStoreGroup)
    {
        $this->collCoreStoreGroups[]= $coreStoreGroup;
        $coreStoreGroup->setCoreWebsite($this);
    }

    /**
     * @param	CoreStoreGroup $coreStoreGroup The coreStoreGroup object to remove.
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function removeCoreStoreGroup($coreStoreGroup)
    {
        if ($this->getCoreStoreGroups()->contains($coreStoreGroup)) {
            $this->collCoreStoreGroups->remove($this->collCoreStoreGroups->search($coreStoreGroup));
            if (null === $this->coreStoreGroupsScheduledForDeletion) {
                $this->coreStoreGroupsScheduledForDeletion = clone $this->collCoreStoreGroups;
                $this->coreStoreGroupsScheduledForDeletion->clear();
            }
            $this->coreStoreGroupsScheduledForDeletion[]= clone $coreStoreGroup;
            $coreStoreGroup->setCoreWebsite(null);
        }

        return $this;
    }

    /**
     * Clears out the collCoreStores collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CoreWebsite The current object (for fluent API support)
     * @see        addCoreStores()
     */
    public function clearCoreStores()
    {
        $this->collCoreStores = null; // important to set this to null since that means it is uninitialized
        $this->collCoreStoresPartial = null;

        return $this;
    }

    /**
     * reset is the collCoreStores collection loaded partially
     *
     * @return void
     */
    public function resetPartialCoreStores($v = true)
    {
        $this->collCoreStoresPartial = $v;
    }

    /**
     * Initializes the collCoreStores collection.
     *
     * By default this just sets the collCoreStores collection to an empty array (like clearcollCoreStores());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCoreStores($overrideExisting = true)
    {
        if (null !== $this->collCoreStores && !$overrideExisting) {
            return;
        }
        $this->collCoreStores = new PropelObjectCollection();
        $this->collCoreStores->setModel('CoreStore');
    }

    /**
     * Gets an array of CoreStore objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CoreWebsite is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CoreStore[] List of CoreStore objects
     * @throws PropelException
     */
    public function getCoreStores($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCoreStoresPartial && !$this->isNew();
        if (null === $this->collCoreStores || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCoreStores) {
                // return empty collection
                $this->initCoreStores();
            } else {
                $collCoreStores = CoreStoreQuery::create(null, $criteria)
                    ->filterByCoreWebsite($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCoreStoresPartial && count($collCoreStores)) {
                      $this->initCoreStores(false);

                      foreach ($collCoreStores as $obj) {
                        if (false == $this->collCoreStores->contains($obj)) {
                          $this->collCoreStores->append($obj);
                        }
                      }

                      $this->collCoreStoresPartial = true;
                    }

                    $collCoreStores->getInternalIterator()->rewind();

                    return $collCoreStores;
                }

                if ($partial && $this->collCoreStores) {
                    foreach ($this->collCoreStores as $obj) {
                        if ($obj->isNew()) {
                            $collCoreStores[] = $obj;
                        }
                    }
                }

                $this->collCoreStores = $collCoreStores;
                $this->collCoreStoresPartial = false;
            }
        }

        return $this->collCoreStores;
    }

    /**
     * Sets a collection of CoreStore objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $coreStores A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function setCoreStores(PropelCollection $coreStores, PropelPDO $con = null)
    {
        $coreStoresToDelete = $this->getCoreStores(new Criteria(), $con)->diff($coreStores);


        $this->coreStoresScheduledForDeletion = $coreStoresToDelete;

        foreach ($coreStoresToDelete as $coreStoreRemoved) {
            $coreStoreRemoved->setCoreWebsite(null);
        }

        $this->collCoreStores = null;
        foreach ($coreStores as $coreStore) {
            $this->addCoreStore($coreStore);
        }

        $this->collCoreStores = $coreStores;
        $this->collCoreStoresPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CoreStore objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CoreStore objects.
     * @throws PropelException
     */
    public function countCoreStores(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCoreStoresPartial && !$this->isNew();
        if (null === $this->collCoreStores || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCoreStores) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCoreStores());
            }
            $query = CoreStoreQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCoreWebsite($this)
                ->count($con);
        }

        return count($this->collCoreStores);
    }

    /**
     * Method called to associate a CoreStore object to this object
     * through the CoreStore foreign key attribute.
     *
     * @param    CoreStore $l CoreStore
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function addCoreStore(CoreStore $l)
    {
        if ($this->collCoreStores === null) {
            $this->initCoreStores();
            $this->collCoreStoresPartial = true;
        }

        if (!in_array($l, $this->collCoreStores->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCoreStore($l);

            if ($this->coreStoresScheduledForDeletion and $this->coreStoresScheduledForDeletion->contains($l)) {
                $this->coreStoresScheduledForDeletion->remove($this->coreStoresScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	CoreStore $coreStore The coreStore object to add.
     */
    protected function doAddCoreStore($coreStore)
    {
        $this->collCoreStores[]= $coreStore;
        $coreStore->setCoreWebsite($this);
    }

    /**
     * @param	CoreStore $coreStore The coreStore object to remove.
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function removeCoreStore($coreStore)
    {
        if ($this->getCoreStores()->contains($coreStore)) {
            $this->collCoreStores->remove($this->collCoreStores->search($coreStore));
            if (null === $this->coreStoresScheduledForDeletion) {
                $this->coreStoresScheduledForDeletion = clone $this->collCoreStores;
                $this->coreStoresScheduledForDeletion->clear();
            }
            $this->coreStoresScheduledForDeletion[]= clone $coreStore;
            $coreStore->setCoreWebsite(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CoreWebsite is new, it will return
     * an empty collection; or if this CoreWebsite has previously
     * been saved, it will retrieve related CoreStores from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CoreWebsite.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CoreStore[] List of CoreStore objects
     */
    public function getCoreStoresJoinCoreStoreGroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CoreStoreQuery::create(null, $criteria);
        $query->joinWith('CoreStoreGroup', $join_behavior);

        return $this->getCoreStores($query, $con);
    }

    /**
     * Clears out the collCustomerEntitys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CoreWebsite The current object (for fluent API support)
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
     * If this CoreWebsite is new, it will return
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
                    ->filterByCoreWebsite($this)
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
     * @return CoreWebsite The current object (for fluent API support)
     */
    public function setCustomerEntitys(PropelCollection $customerEntitys, PropelPDO $con = null)
    {
        $customerEntitysToDelete = $this->getCustomerEntitys(new Criteria(), $con)->diff($customerEntitys);


        $this->customerEntitysScheduledForDeletion = $customerEntitysToDelete;

        foreach ($customerEntitysToDelete as $customerEntityRemoved) {
            $customerEntityRemoved->setCoreWebsite(null);
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
                ->filterByCoreWebsite($this)
                ->count($con);
        }

        return count($this->collCustomerEntitys);
    }

    /**
     * Method called to associate a CustomerEntity object to this object
     * through the CustomerEntity foreign key attribute.
     *
     * @param    CustomerEntity $l CustomerEntity
     * @return CoreWebsite The current object (for fluent API support)
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
        $customerEntity->setCoreWebsite($this);
    }

    /**
     * @param	CustomerEntity $customerEntity The customerEntity object to remove.
     * @return CoreWebsite The current object (for fluent API support)
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
            $customerEntity->setCoreWebsite(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CoreWebsite is new, it will return
     * an empty collection; or if this CoreWebsite has previously
     * been saved, it will retrieve related CustomerEntitys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CoreWebsite.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CustomerEntity[] List of CustomerEntity objects
     */
    public function getCustomerEntitysJoinCoreStore($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CustomerEntityQuery::create(null, $criteria);
        $query->joinWith('CoreStore', $join_behavior);

        return $this->getCustomerEntitys($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->website_id = null;
        $this->code = null;
        $this->name = null;
        $this->sort_order = null;
        $this->default_group_id = null;
        $this->is_default = null;
        $this->is_staging = null;
        $this->master_login = null;
        $this->master_password = null;
        $this->visibility = null;
        $this->is_visible = null;
        $this->department = null;
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
            if ($this->collCoreStoreGroups) {
                foreach ($this->collCoreStoreGroups as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCoreStores) {
                foreach ($this->collCoreStores as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCustomerEntitys) {
                foreach ($this->collCustomerEntitys as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCoreStoreGroups instanceof PropelCollection) {
            $this->collCoreStoreGroups->clearIterator();
        }
        $this->collCoreStoreGroups = null;
        if ($this->collCoreStores instanceof PropelCollection) {
            $this->collCoreStores->clearIterator();
        }
        $this->collCoreStores = null;
        if ($this->collCustomerEntitys instanceof PropelCollection) {
            $this->collCustomerEntitys->clearIterator();
        }
        $this->collCustomerEntitys = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CoreWebsitePeer::DEFAULT_STRING_FORMAT);
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
