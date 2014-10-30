<?php


/**
 * Base class that represents a row from the 'qbc_merchants_commercial_names' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcMerchantsCommercialNames extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'QbcMerchantsCommercialNamesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        QbcMerchantsCommercialNamesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the commercial_name_id field.
     * @var        int
     */
    protected $commercial_name_id;

    /**
     * The value for the merchants_id field.
     * @var        int
     */
    protected $merchants_id;

    /**
     * The value for the commercial_name field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $commercial_name;

    /**
     * The value for the nit field.
     * @var        string
     */
    protected $nit;

    /**
     * The value for the use_parent_nit field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $use_parent_nit;

    /**
     * The value for the bank_account_number field.
     * @var        string
     */
    protected $bank_account_number;

    /**
     * The value for the use_parent_bank_account field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $use_parent_bank_account;

    /**
     * The value for the company_description field.
     * @var        string
     */
    protected $company_description;

    /**
     * The value for the logo field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $logo;

    /**
     * The value for the email field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $email;

    /**
     * @var        GroupdealsMerchants
     */
    protected $aGroupdealsMerchants;

    /**
     * @var        PropelObjectCollection|QbcMerchantsLocations[] Collection to store aggregation of QbcMerchantsLocations objects.
     */
    protected $collQbcMerchantsLocationss;
    protected $collQbcMerchantsLocationssPartial;

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
    protected $qbcMerchantsLocationssScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->commercial_name = '';
        $this->use_parent_nit = false;
        $this->use_parent_bank_account = false;
        $this->logo = '';
        $this->email = '';
    }

    /**
     * Initializes internal state of BaseQbcMerchantsCommercialNames object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [commercial_name_id] column value.
     *
     * @return int
     */
    public function getCommercialNameId()
    {

        return $this->commercial_name_id;
    }

    /**
     * Get the [merchants_id] column value.
     *
     * @return int
     */
    public function getMerchantsId()
    {

        return $this->merchants_id;
    }

    /**
     * Get the [commercial_name] column value.
     *
     * @return string
     */
    public function getCommercialName()
    {

        return $this->commercial_name;
    }

    /**
     * Get the [nit] column value.
     *
     * @return string
     */
    public function getNit()
    {

        return $this->nit;
    }

    /**
     * Get the [use_parent_nit] column value.
     *
     * @return boolean
     */
    public function getUseParentNit()
    {

        return $this->use_parent_nit;
    }

    /**
     * Get the [bank_account_number] column value.
     *
     * @return string
     */
    public function getBankAccountNumber()
    {

        return $this->bank_account_number;
    }

    /**
     * Get the [use_parent_bank_account] column value.
     *
     * @return boolean
     */
    public function getUseParentBankAccount()
    {

        return $this->use_parent_bank_account;
    }

    /**
     * Get the [company_description] column value.
     *
     * @return string
     */
    public function getCompanyDescription()
    {

        return $this->company_description;
    }

    /**
     * Get the [logo] column value.
     *
     * @return string
     */
    public function getLogo()
    {

        return $this->logo;
    }

    /**
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Set the value of [commercial_name_id] column.
     *
     * @param  int $v new value
     * @return QbcMerchantsCommercialNames The current object (for fluent API support)
     */
    public function setCommercialNameId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->commercial_name_id !== $v) {
            $this->commercial_name_id = $v;
            $this->modifiedColumns[] = QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME_ID;
        }


        return $this;
    } // setCommercialNameId()

    /**
     * Set the value of [merchants_id] column.
     *
     * @param  int $v new value
     * @return QbcMerchantsCommercialNames The current object (for fluent API support)
     */
    public function setMerchantsId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->merchants_id !== $v) {
            $this->merchants_id = $v;
            $this->modifiedColumns[] = QbcMerchantsCommercialNamesPeer::MERCHANTS_ID;
        }

        if ($this->aGroupdealsMerchants !== null && $this->aGroupdealsMerchants->getMerchantsId() !== $v) {
            $this->aGroupdealsMerchants = null;
        }


        return $this;
    } // setMerchantsId()

    /**
     * Set the value of [commercial_name] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsCommercialNames The current object (for fluent API support)
     */
    public function setCommercialName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commercial_name !== $v) {
            $this->commercial_name = $v;
            $this->modifiedColumns[] = QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME;
        }


        return $this;
    } // setCommercialName()

    /**
     * Set the value of [nit] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsCommercialNames The current object (for fluent API support)
     */
    public function setNit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nit !== $v) {
            $this->nit = $v;
            $this->modifiedColumns[] = QbcMerchantsCommercialNamesPeer::NIT;
        }


        return $this;
    } // setNit()

    /**
     * Sets the value of the [use_parent_nit] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return QbcMerchantsCommercialNames The current object (for fluent API support)
     */
    public function setUseParentNit($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->use_parent_nit !== $v) {
            $this->use_parent_nit = $v;
            $this->modifiedColumns[] = QbcMerchantsCommercialNamesPeer::USE_PARENT_NIT;
        }


        return $this;
    } // setUseParentNit()

    /**
     * Set the value of [bank_account_number] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsCommercialNames The current object (for fluent API support)
     */
    public function setBankAccountNumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bank_account_number !== $v) {
            $this->bank_account_number = $v;
            $this->modifiedColumns[] = QbcMerchantsCommercialNamesPeer::BANK_ACCOUNT_NUMBER;
        }


        return $this;
    } // setBankAccountNumber()

    /**
     * Sets the value of the [use_parent_bank_account] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return QbcMerchantsCommercialNames The current object (for fluent API support)
     */
    public function setUseParentBankAccount($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->use_parent_bank_account !== $v) {
            $this->use_parent_bank_account = $v;
            $this->modifiedColumns[] = QbcMerchantsCommercialNamesPeer::USE_PARENT_BANK_ACCOUNT;
        }


        return $this;
    } // setUseParentBankAccount()

    /**
     * Set the value of [company_description] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsCommercialNames The current object (for fluent API support)
     */
    public function setCompanyDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->company_description !== $v) {
            $this->company_description = $v;
            $this->modifiedColumns[] = QbcMerchantsCommercialNamesPeer::COMPANY_DESCRIPTION;
        }


        return $this;
    } // setCompanyDescription()

    /**
     * Set the value of [logo] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsCommercialNames The current object (for fluent API support)
     */
    public function setLogo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->logo !== $v) {
            $this->logo = $v;
            $this->modifiedColumns[] = QbcMerchantsCommercialNamesPeer::LOGO;
        }


        return $this;
    } // setLogo()

    /**
     * Set the value of [email] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsCommercialNames The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = QbcMerchantsCommercialNamesPeer::EMAIL;
        }


        return $this;
    } // setEmail()

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
            if ($this->commercial_name !== '') {
                return false;
            }

            if ($this->use_parent_nit !== false) {
                return false;
            }

            if ($this->use_parent_bank_account !== false) {
                return false;
            }

            if ($this->logo !== '') {
                return false;
            }

            if ($this->email !== '') {
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

            $this->commercial_name_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->merchants_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->commercial_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->nit = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->use_parent_nit = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->bank_account_number = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->use_parent_bank_account = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
            $this->company_description = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->logo = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->email = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = QbcMerchantsCommercialNamesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating QbcMerchantsCommercialNames object", $e);
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

        if ($this->aGroupdealsMerchants !== null && $this->merchants_id !== $this->aGroupdealsMerchants->getMerchantsId()) {
            $this->aGroupdealsMerchants = null;
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
            $con = Propel::getConnection(QbcMerchantsCommercialNamesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = QbcMerchantsCommercialNamesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGroupdealsMerchants = null;
            $this->collQbcMerchantsLocationss = null;

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
            $con = Propel::getConnection(QbcMerchantsCommercialNamesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = QbcMerchantsCommercialNamesQuery::create()
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
            $con = Propel::getConnection(QbcMerchantsCommercialNamesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                QbcMerchantsCommercialNamesPeer::addInstanceToPool($this);
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

            if ($this->aGroupdealsMerchants !== null) {
                if ($this->aGroupdealsMerchants->isModified() || $this->aGroupdealsMerchants->isNew()) {
                    $affectedRows += $this->aGroupdealsMerchants->save($con);
                }
                $this->setGroupdealsMerchants($this->aGroupdealsMerchants);
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

            if ($this->qbcMerchantsLocationssScheduledForDeletion !== null) {
                if (!$this->qbcMerchantsLocationssScheduledForDeletion->isEmpty()) {
                    QbcMerchantsLocationsQuery::create()
                        ->filterByPrimaryKeys($this->qbcMerchantsLocationssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->qbcMerchantsLocationssScheduledForDeletion = null;
                }
            }

            if ($this->collQbcMerchantsLocationss !== null) {
                foreach ($this->collQbcMerchantsLocationss as $referrerFK) {
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

        $this->modifiedColumns[] = QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME_ID;
        if (null !== $this->commercial_name_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME_ID)) {
            $modifiedColumns[':p' . $index++]  = 'commercial_name_id';
        }
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::MERCHANTS_ID)) {
            $modifiedColumns[':p' . $index++]  = 'merchants_id';
        }
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'commercial_name';
        }
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::NIT)) {
            $modifiedColumns[':p' . $index++]  = 'nit';
        }
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::USE_PARENT_NIT)) {
            $modifiedColumns[':p' . $index++]  = 'use_parent_nit';
        }
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::BANK_ACCOUNT_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = 'bank_account_number';
        }
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::USE_PARENT_BANK_ACCOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'use_parent_bank_account';
        }
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::COMPANY_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'company_description';
        }
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::LOGO)) {
            $modifiedColumns[':p' . $index++]  = 'logo';
        }
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'email';
        }

        $sql = sprintf(
            'INSERT INTO qbc_merchants_commercial_names (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'commercial_name_id':
                        $stmt->bindValue($identifier, $this->commercial_name_id, PDO::PARAM_INT);
                        break;
                    case 'merchants_id':
                        $stmt->bindValue($identifier, $this->merchants_id, PDO::PARAM_INT);
                        break;
                    case 'commercial_name':
                        $stmt->bindValue($identifier, $this->commercial_name, PDO::PARAM_STR);
                        break;
                    case 'nit':
                        $stmt->bindValue($identifier, $this->nit, PDO::PARAM_STR);
                        break;
                    case 'use_parent_nit':
                        $stmt->bindValue($identifier, (int) $this->use_parent_nit, PDO::PARAM_INT);
                        break;
                    case 'bank_account_number':
                        $stmt->bindValue($identifier, $this->bank_account_number, PDO::PARAM_STR);
                        break;
                    case 'use_parent_bank_account':
                        $stmt->bindValue($identifier, (int) $this->use_parent_bank_account, PDO::PARAM_INT);
                        break;
                    case 'company_description':
                        $stmt->bindValue($identifier, $this->company_description, PDO::PARAM_STR);
                        break;
                    case 'logo':
                        $stmt->bindValue($identifier, $this->logo, PDO::PARAM_STR);
                        break;
                    case 'email':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
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
        $this->setCommercialNameId($pk);

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

            if ($this->aGroupdealsMerchants !== null) {
                if (!$this->aGroupdealsMerchants->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGroupdealsMerchants->getValidationFailures());
                }
            }


            if (($retval = QbcMerchantsCommercialNamesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collQbcMerchantsLocationss !== null) {
                    foreach ($this->collQbcMerchantsLocationss as $referrerFK) {
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
        $pos = QbcMerchantsCommercialNamesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getCommercialNameId();
                break;
            case 1:
                return $this->getMerchantsId();
                break;
            case 2:
                return $this->getCommercialName();
                break;
            case 3:
                return $this->getNit();
                break;
            case 4:
                return $this->getUseParentNit();
                break;
            case 5:
                return $this->getBankAccountNumber();
                break;
            case 6:
                return $this->getUseParentBankAccount();
                break;
            case 7:
                return $this->getCompanyDescription();
                break;
            case 8:
                return $this->getLogo();
                break;
            case 9:
                return $this->getEmail();
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
        if (isset($alreadyDumpedObjects['QbcMerchantsCommercialNames'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['QbcMerchantsCommercialNames'][$this->getPrimaryKey()] = true;
        $keys = QbcMerchantsCommercialNamesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getCommercialNameId(),
            $keys[1] => $this->getMerchantsId(),
            $keys[2] => $this->getCommercialName(),
            $keys[3] => $this->getNit(),
            $keys[4] => $this->getUseParentNit(),
            $keys[5] => $this->getBankAccountNumber(),
            $keys[6] => $this->getUseParentBankAccount(),
            $keys[7] => $this->getCompanyDescription(),
            $keys[8] => $this->getLogo(),
            $keys[9] => $this->getEmail(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach($virtualColumns as $key => $virtualColumn)
        {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aGroupdealsMerchants) {
                $result['GroupdealsMerchants'] = $this->aGroupdealsMerchants->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collQbcMerchantsLocationss) {
                $result['QbcMerchantsLocationss'] = $this->collQbcMerchantsLocationss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = QbcMerchantsCommercialNamesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setCommercialNameId($value);
                break;
            case 1:
                $this->setMerchantsId($value);
                break;
            case 2:
                $this->setCommercialName($value);
                break;
            case 3:
                $this->setNit($value);
                break;
            case 4:
                $this->setUseParentNit($value);
                break;
            case 5:
                $this->setBankAccountNumber($value);
                break;
            case 6:
                $this->setUseParentBankAccount($value);
                break;
            case 7:
                $this->setCompanyDescription($value);
                break;
            case 8:
                $this->setLogo($value);
                break;
            case 9:
                $this->setEmail($value);
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
        $keys = QbcMerchantsCommercialNamesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setCommercialNameId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMerchantsId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCommercialName($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNit($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setUseParentNit($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setBankAccountNumber($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setUseParentBankAccount($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCompanyDescription($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLogo($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEmail($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(QbcMerchantsCommercialNamesPeer::DATABASE_NAME);

        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME_ID)) $criteria->add(QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME_ID, $this->commercial_name_id);
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::MERCHANTS_ID)) $criteria->add(QbcMerchantsCommercialNamesPeer::MERCHANTS_ID, $this->merchants_id);
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME)) $criteria->add(QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME, $this->commercial_name);
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::NIT)) $criteria->add(QbcMerchantsCommercialNamesPeer::NIT, $this->nit);
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::USE_PARENT_NIT)) $criteria->add(QbcMerchantsCommercialNamesPeer::USE_PARENT_NIT, $this->use_parent_nit);
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::BANK_ACCOUNT_NUMBER)) $criteria->add(QbcMerchantsCommercialNamesPeer::BANK_ACCOUNT_NUMBER, $this->bank_account_number);
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::USE_PARENT_BANK_ACCOUNT)) $criteria->add(QbcMerchantsCommercialNamesPeer::USE_PARENT_BANK_ACCOUNT, $this->use_parent_bank_account);
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::COMPANY_DESCRIPTION)) $criteria->add(QbcMerchantsCommercialNamesPeer::COMPANY_DESCRIPTION, $this->company_description);
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::LOGO)) $criteria->add(QbcMerchantsCommercialNamesPeer::LOGO, $this->logo);
        if ($this->isColumnModified(QbcMerchantsCommercialNamesPeer::EMAIL)) $criteria->add(QbcMerchantsCommercialNamesPeer::EMAIL, $this->email);

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
        $criteria = new Criteria(QbcMerchantsCommercialNamesPeer::DATABASE_NAME);
        $criteria->add(QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME_ID, $this->commercial_name_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getCommercialNameId();
    }

    /**
     * Generic method to set the primary key (commercial_name_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCommercialNameId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getCommercialNameId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of QbcMerchantsCommercialNames (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setMerchantsId($this->getMerchantsId());
        $copyObj->setCommercialName($this->getCommercialName());
        $copyObj->setNit($this->getNit());
        $copyObj->setUseParentNit($this->getUseParentNit());
        $copyObj->setBankAccountNumber($this->getBankAccountNumber());
        $copyObj->setUseParentBankAccount($this->getUseParentBankAccount());
        $copyObj->setCompanyDescription($this->getCompanyDescription());
        $copyObj->setLogo($this->getLogo());
        $copyObj->setEmail($this->getEmail());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getQbcMerchantsLocationss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addQbcMerchantsLocations($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setCommercialNameId(NULL); // this is a auto-increment column, so set to default value
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
     * @return QbcMerchantsCommercialNames Clone of current object.
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
     * @return QbcMerchantsCommercialNamesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new QbcMerchantsCommercialNamesPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GroupdealsMerchants object.
     *
     * @param                  GroupdealsMerchants $v
     * @return QbcMerchantsCommercialNames The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGroupdealsMerchants(GroupdealsMerchants $v = null)
    {
        if ($v === null) {
            $this->setMerchantsId(NULL);
        } else {
            $this->setMerchantsId($v->getMerchantsId());
        }

        $this->aGroupdealsMerchants = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GroupdealsMerchants object, it will not be re-added.
        if ($v !== null) {
            $v->addQbcMerchantsCommercialNames($this);
        }


        return $this;
    }


    /**
     * Get the associated GroupdealsMerchants object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GroupdealsMerchants The associated GroupdealsMerchants object.
     * @throws PropelException
     */
    public function getGroupdealsMerchants(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGroupdealsMerchants === null && ($this->merchants_id !== null) && $doQuery) {
            $this->aGroupdealsMerchants = GroupdealsMerchantsQuery::create()->findPk($this->merchants_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGroupdealsMerchants->addQbcMerchantsCommercialNamess($this);
             */
        }

        return $this->aGroupdealsMerchants;
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
        if ('QbcMerchantsLocations' == $relationName) {
            $this->initQbcMerchantsLocationss();
        }
    }

    /**
     * Clears out the collQbcMerchantsLocationss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return QbcMerchantsCommercialNames The current object (for fluent API support)
     * @see        addQbcMerchantsLocationss()
     */
    public function clearQbcMerchantsLocationss()
    {
        $this->collQbcMerchantsLocationss = null; // important to set this to null since that means it is uninitialized
        $this->collQbcMerchantsLocationssPartial = null;

        return $this;
    }

    /**
     * reset is the collQbcMerchantsLocationss collection loaded partially
     *
     * @return void
     */
    public function resetPartialQbcMerchantsLocationss($v = true)
    {
        $this->collQbcMerchantsLocationssPartial = $v;
    }

    /**
     * Initializes the collQbcMerchantsLocationss collection.
     *
     * By default this just sets the collQbcMerchantsLocationss collection to an empty array (like clearcollQbcMerchantsLocationss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initQbcMerchantsLocationss($overrideExisting = true)
    {
        if (null !== $this->collQbcMerchantsLocationss && !$overrideExisting) {
            return;
        }
        $this->collQbcMerchantsLocationss = new PropelObjectCollection();
        $this->collQbcMerchantsLocationss->setModel('QbcMerchantsLocations');
    }

    /**
     * Gets an array of QbcMerchantsLocations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this QbcMerchantsCommercialNames is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|QbcMerchantsLocations[] List of QbcMerchantsLocations objects
     * @throws PropelException
     */
    public function getQbcMerchantsLocationss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collQbcMerchantsLocationssPartial && !$this->isNew();
        if (null === $this->collQbcMerchantsLocationss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collQbcMerchantsLocationss) {
                // return empty collection
                $this->initQbcMerchantsLocationss();
            } else {
                $collQbcMerchantsLocationss = QbcMerchantsLocationsQuery::create(null, $criteria)
                    ->filterByQbcMerchantsCommercialNames($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collQbcMerchantsLocationssPartial && count($collQbcMerchantsLocationss)) {
                      $this->initQbcMerchantsLocationss(false);

                      foreach ($collQbcMerchantsLocationss as $obj) {
                        if (false == $this->collQbcMerchantsLocationss->contains($obj)) {
                          $this->collQbcMerchantsLocationss->append($obj);
                        }
                      }

                      $this->collQbcMerchantsLocationssPartial = true;
                    }

                    $collQbcMerchantsLocationss->getInternalIterator()->rewind();

                    return $collQbcMerchantsLocationss;
                }

                if ($partial && $this->collQbcMerchantsLocationss) {
                    foreach ($this->collQbcMerchantsLocationss as $obj) {
                        if ($obj->isNew()) {
                            $collQbcMerchantsLocationss[] = $obj;
                        }
                    }
                }

                $this->collQbcMerchantsLocationss = $collQbcMerchantsLocationss;
                $this->collQbcMerchantsLocationssPartial = false;
            }
        }

        return $this->collQbcMerchantsLocationss;
    }

    /**
     * Sets a collection of QbcMerchantsLocations objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $qbcMerchantsLocationss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return QbcMerchantsCommercialNames The current object (for fluent API support)
     */
    public function setQbcMerchantsLocationss(PropelCollection $qbcMerchantsLocationss, PropelPDO $con = null)
    {
        $qbcMerchantsLocationssToDelete = $this->getQbcMerchantsLocationss(new Criteria(), $con)->diff($qbcMerchantsLocationss);


        $this->qbcMerchantsLocationssScheduledForDeletion = $qbcMerchantsLocationssToDelete;

        foreach ($qbcMerchantsLocationssToDelete as $qbcMerchantsLocationsRemoved) {
            $qbcMerchantsLocationsRemoved->setQbcMerchantsCommercialNames(null);
        }

        $this->collQbcMerchantsLocationss = null;
        foreach ($qbcMerchantsLocationss as $qbcMerchantsLocations) {
            $this->addQbcMerchantsLocations($qbcMerchantsLocations);
        }

        $this->collQbcMerchantsLocationss = $qbcMerchantsLocationss;
        $this->collQbcMerchantsLocationssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related QbcMerchantsLocations objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related QbcMerchantsLocations objects.
     * @throws PropelException
     */
    public function countQbcMerchantsLocationss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collQbcMerchantsLocationssPartial && !$this->isNew();
        if (null === $this->collQbcMerchantsLocationss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collQbcMerchantsLocationss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getQbcMerchantsLocationss());
            }
            $query = QbcMerchantsLocationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByQbcMerchantsCommercialNames($this)
                ->count($con);
        }

        return count($this->collQbcMerchantsLocationss);
    }

    /**
     * Method called to associate a QbcMerchantsLocations object to this object
     * through the QbcMerchantsLocations foreign key attribute.
     *
     * @param    QbcMerchantsLocations $l QbcMerchantsLocations
     * @return QbcMerchantsCommercialNames The current object (for fluent API support)
     */
    public function addQbcMerchantsLocations(QbcMerchantsLocations $l)
    {
        if ($this->collQbcMerchantsLocationss === null) {
            $this->initQbcMerchantsLocationss();
            $this->collQbcMerchantsLocationssPartial = true;
        }

        if (!in_array($l, $this->collQbcMerchantsLocationss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddQbcMerchantsLocations($l);

            if ($this->qbcMerchantsLocationssScheduledForDeletion and $this->qbcMerchantsLocationssScheduledForDeletion->contains($l)) {
                $this->qbcMerchantsLocationssScheduledForDeletion->remove($this->qbcMerchantsLocationssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	QbcMerchantsLocations $qbcMerchantsLocations The qbcMerchantsLocations object to add.
     */
    protected function doAddQbcMerchantsLocations($qbcMerchantsLocations)
    {
        $this->collQbcMerchantsLocationss[]= $qbcMerchantsLocations;
        $qbcMerchantsLocations->setQbcMerchantsCommercialNames($this);
    }

    /**
     * @param	QbcMerchantsLocations $qbcMerchantsLocations The qbcMerchantsLocations object to remove.
     * @return QbcMerchantsCommercialNames The current object (for fluent API support)
     */
    public function removeQbcMerchantsLocations($qbcMerchantsLocations)
    {
        if ($this->getQbcMerchantsLocationss()->contains($qbcMerchantsLocations)) {
            $this->collQbcMerchantsLocationss->remove($this->collQbcMerchantsLocationss->search($qbcMerchantsLocations));
            if (null === $this->qbcMerchantsLocationssScheduledForDeletion) {
                $this->qbcMerchantsLocationssScheduledForDeletion = clone $this->collQbcMerchantsLocationss;
                $this->qbcMerchantsLocationssScheduledForDeletion->clear();
            }
            $this->qbcMerchantsLocationssScheduledForDeletion[]= clone $qbcMerchantsLocations;
            $qbcMerchantsLocations->setQbcMerchantsCommercialNames(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->commercial_name_id = null;
        $this->merchants_id = null;
        $this->commercial_name = null;
        $this->nit = null;
        $this->use_parent_nit = null;
        $this->bank_account_number = null;
        $this->use_parent_bank_account = null;
        $this->company_description = null;
        $this->logo = null;
        $this->email = null;
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
            if ($this->collQbcMerchantsLocationss) {
                foreach ($this->collQbcMerchantsLocationss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aGroupdealsMerchants instanceof Persistent) {
              $this->aGroupdealsMerchants->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collQbcMerchantsLocationss instanceof PropelCollection) {
            $this->collQbcMerchantsLocationss->clearIterator();
        }
        $this->collQbcMerchantsLocationss = null;
        $this->aGroupdealsMerchants = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(QbcMerchantsCommercialNamesPeer::DEFAULT_STRING_FORMAT);
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
