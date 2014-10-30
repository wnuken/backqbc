<?php


/**
 * Base class that represents a row from the 'qbc_merchants_contacts' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcMerchantsContacts extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'QbcMerchantsContactsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        QbcMerchantsContactsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the contact_id field.
     * @var        int
     */
    protected $contact_id;

    /**
     * The value for the merchants_id field.
     * @var        int
     */
    protected $merchants_id;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the surname field.
     * @var        string
     */
    protected $surname;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the phone field.
     * @var        string
     */
    protected $phone;

    /**
     * The value for the job_title field.
     * @var        string
     */
    protected $job_title;

    /**
     * The value for the office_address field.
     * @var        string
     */
    protected $office_address;

    /**
     * The value for the cell_phone field.
     * @var        string
     */
    protected $cell_phone;

    /**
     * The value for the first_contact field.
     * @var        boolean
     */
    protected $first_contact;

    /**
     * @var        GroupdealsMerchants
     */
    protected $aGroupdealsMerchants;

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
     * Get the [contact_id] column value.
     *
     * @return int
     */
    public function getContactId()
    {

        return $this->contact_id;
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
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {

        return $this->name;
    }

    /**
     * Get the [surname] column value.
     *
     * @return string
     */
    public function getSurname()
    {

        return $this->surname;
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
     * Get the [phone] column value.
     *
     * @return string
     */
    public function getPhone()
    {

        return $this->phone;
    }

    /**
     * Get the [job_title] column value.
     *
     * @return string
     */
    public function getJobTitle()
    {

        return $this->job_title;
    }

    /**
     * Get the [office_address] column value.
     *
     * @return string
     */
    public function getOfficeAddress()
    {

        return $this->office_address;
    }

    /**
     * Get the [cell_phone] column value.
     *
     * @return string
     */
    public function getCellPhone()
    {

        return $this->cell_phone;
    }

    /**
     * Get the [first_contact] column value.
     *
     * @return boolean
     */
    public function getFirstContact()
    {

        return $this->first_contact;
    }

    /**
     * Set the value of [contact_id] column.
     *
     * @param  int $v new value
     * @return QbcMerchantsContacts The current object (for fluent API support)
     */
    public function setContactId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->contact_id !== $v) {
            $this->contact_id = $v;
            $this->modifiedColumns[] = QbcMerchantsContactsPeer::CONTACT_ID;
        }


        return $this;
    } // setContactId()

    /**
     * Set the value of [merchants_id] column.
     *
     * @param  int $v new value
     * @return QbcMerchantsContacts The current object (for fluent API support)
     */
    public function setMerchantsId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->merchants_id !== $v) {
            $this->merchants_id = $v;
            $this->modifiedColumns[] = QbcMerchantsContactsPeer::MERCHANTS_ID;
        }

        if ($this->aGroupdealsMerchants !== null && $this->aGroupdealsMerchants->getMerchantsId() !== $v) {
            $this->aGroupdealsMerchants = null;
        }


        return $this;
    } // setMerchantsId()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsContacts The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = QbcMerchantsContactsPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [surname] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsContacts The current object (for fluent API support)
     */
    public function setSurname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->surname !== $v) {
            $this->surname = $v;
            $this->modifiedColumns[] = QbcMerchantsContactsPeer::SURNAME;
        }


        return $this;
    } // setSurname()

    /**
     * Set the value of [email] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsContacts The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = QbcMerchantsContactsPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [phone] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsContacts The current object (for fluent API support)
     */
    public function setPhone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->phone !== $v) {
            $this->phone = $v;
            $this->modifiedColumns[] = QbcMerchantsContactsPeer::PHONE;
        }


        return $this;
    } // setPhone()

    /**
     * Set the value of [job_title] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsContacts The current object (for fluent API support)
     */
    public function setJobTitle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->job_title !== $v) {
            $this->job_title = $v;
            $this->modifiedColumns[] = QbcMerchantsContactsPeer::JOB_TITLE;
        }


        return $this;
    } // setJobTitle()

    /**
     * Set the value of [office_address] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsContacts The current object (for fluent API support)
     */
    public function setOfficeAddress($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->office_address !== $v) {
            $this->office_address = $v;
            $this->modifiedColumns[] = QbcMerchantsContactsPeer::OFFICE_ADDRESS;
        }


        return $this;
    } // setOfficeAddress()

    /**
     * Set the value of [cell_phone] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsContacts The current object (for fluent API support)
     */
    public function setCellPhone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cell_phone !== $v) {
            $this->cell_phone = $v;
            $this->modifiedColumns[] = QbcMerchantsContactsPeer::CELL_PHONE;
        }


        return $this;
    } // setCellPhone()

    /**
     * Sets the value of the [first_contact] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return QbcMerchantsContacts The current object (for fluent API support)
     */
    public function setFirstContact($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->first_contact !== $v) {
            $this->first_contact = $v;
            $this->modifiedColumns[] = QbcMerchantsContactsPeer::FIRST_CONTACT;
        }


        return $this;
    } // setFirstContact()

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

            $this->contact_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->merchants_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->surname = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->email = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->phone = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->job_title = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->office_address = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->cell_phone = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->first_contact = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = QbcMerchantsContactsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating QbcMerchantsContacts object", $e);
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
            $con = Propel::getConnection(QbcMerchantsContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = QbcMerchantsContactsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGroupdealsMerchants = null;
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
            $con = Propel::getConnection(QbcMerchantsContactsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = QbcMerchantsContactsQuery::create()
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
            $con = Propel::getConnection(QbcMerchantsContactsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                QbcMerchantsContactsPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = QbcMerchantsContactsPeer::CONTACT_ID;
        if (null !== $this->contact_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . QbcMerchantsContactsPeer::CONTACT_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(QbcMerchantsContactsPeer::CONTACT_ID)) {
            $modifiedColumns[':p' . $index++]  = 'contact_id';
        }
        if ($this->isColumnModified(QbcMerchantsContactsPeer::MERCHANTS_ID)) {
            $modifiedColumns[':p' . $index++]  = 'merchants_id';
        }
        if ($this->isColumnModified(QbcMerchantsContactsPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }
        if ($this->isColumnModified(QbcMerchantsContactsPeer::SURNAME)) {
            $modifiedColumns[':p' . $index++]  = 'surname';
        }
        if ($this->isColumnModified(QbcMerchantsContactsPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'email';
        }
        if ($this->isColumnModified(QbcMerchantsContactsPeer::PHONE)) {
            $modifiedColumns[':p' . $index++]  = 'phone';
        }
        if ($this->isColumnModified(QbcMerchantsContactsPeer::JOB_TITLE)) {
            $modifiedColumns[':p' . $index++]  = 'job_title';
        }
        if ($this->isColumnModified(QbcMerchantsContactsPeer::OFFICE_ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = 'office_address';
        }
        if ($this->isColumnModified(QbcMerchantsContactsPeer::CELL_PHONE)) {
            $modifiedColumns[':p' . $index++]  = 'cell_phone';
        }
        if ($this->isColumnModified(QbcMerchantsContactsPeer::FIRST_CONTACT)) {
            $modifiedColumns[':p' . $index++]  = 'first_contact';
        }

        $sql = sprintf(
            'INSERT INTO qbc_merchants_contacts (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'contact_id':
                        $stmt->bindValue($identifier, $this->contact_id, PDO::PARAM_INT);
                        break;
                    case 'merchants_id':
                        $stmt->bindValue($identifier, $this->merchants_id, PDO::PARAM_INT);
                        break;
                    case 'name':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case 'surname':
                        $stmt->bindValue($identifier, $this->surname, PDO::PARAM_STR);
                        break;
                    case 'email':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case 'phone':
                        $stmt->bindValue($identifier, $this->phone, PDO::PARAM_STR);
                        break;
                    case 'job_title':
                        $stmt->bindValue($identifier, $this->job_title, PDO::PARAM_STR);
                        break;
                    case 'office_address':
                        $stmt->bindValue($identifier, $this->office_address, PDO::PARAM_STR);
                        break;
                    case 'cell_phone':
                        $stmt->bindValue($identifier, $this->cell_phone, PDO::PARAM_STR);
                        break;
                    case 'first_contact':
                        $stmt->bindValue($identifier, (int) $this->first_contact, PDO::PARAM_INT);
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
        $this->setContactId($pk);

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


            if (($retval = QbcMerchantsContactsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = QbcMerchantsContactsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getContactId();
                break;
            case 1:
                return $this->getMerchantsId();
                break;
            case 2:
                return $this->getName();
                break;
            case 3:
                return $this->getSurname();
                break;
            case 4:
                return $this->getEmail();
                break;
            case 5:
                return $this->getPhone();
                break;
            case 6:
                return $this->getJobTitle();
                break;
            case 7:
                return $this->getOfficeAddress();
                break;
            case 8:
                return $this->getCellPhone();
                break;
            case 9:
                return $this->getFirstContact();
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
        if (isset($alreadyDumpedObjects['QbcMerchantsContacts'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['QbcMerchantsContacts'][$this->getPrimaryKey()] = true;
        $keys = QbcMerchantsContactsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getContactId(),
            $keys[1] => $this->getMerchantsId(),
            $keys[2] => $this->getName(),
            $keys[3] => $this->getSurname(),
            $keys[4] => $this->getEmail(),
            $keys[5] => $this->getPhone(),
            $keys[6] => $this->getJobTitle(),
            $keys[7] => $this->getOfficeAddress(),
            $keys[8] => $this->getCellPhone(),
            $keys[9] => $this->getFirstContact(),
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
        $pos = QbcMerchantsContactsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setContactId($value);
                break;
            case 1:
                $this->setMerchantsId($value);
                break;
            case 2:
                $this->setName($value);
                break;
            case 3:
                $this->setSurname($value);
                break;
            case 4:
                $this->setEmail($value);
                break;
            case 5:
                $this->setPhone($value);
                break;
            case 6:
                $this->setJobTitle($value);
                break;
            case 7:
                $this->setOfficeAddress($value);
                break;
            case 8:
                $this->setCellPhone($value);
                break;
            case 9:
                $this->setFirstContact($value);
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
        $keys = QbcMerchantsContactsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setContactId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMerchantsId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSurname($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEmail($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPhone($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setJobTitle($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOfficeAddress($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCellPhone($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setFirstContact($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(QbcMerchantsContactsPeer::DATABASE_NAME);

        if ($this->isColumnModified(QbcMerchantsContactsPeer::CONTACT_ID)) $criteria->add(QbcMerchantsContactsPeer::CONTACT_ID, $this->contact_id);
        if ($this->isColumnModified(QbcMerchantsContactsPeer::MERCHANTS_ID)) $criteria->add(QbcMerchantsContactsPeer::MERCHANTS_ID, $this->merchants_id);
        if ($this->isColumnModified(QbcMerchantsContactsPeer::NAME)) $criteria->add(QbcMerchantsContactsPeer::NAME, $this->name);
        if ($this->isColumnModified(QbcMerchantsContactsPeer::SURNAME)) $criteria->add(QbcMerchantsContactsPeer::SURNAME, $this->surname);
        if ($this->isColumnModified(QbcMerchantsContactsPeer::EMAIL)) $criteria->add(QbcMerchantsContactsPeer::EMAIL, $this->email);
        if ($this->isColumnModified(QbcMerchantsContactsPeer::PHONE)) $criteria->add(QbcMerchantsContactsPeer::PHONE, $this->phone);
        if ($this->isColumnModified(QbcMerchantsContactsPeer::JOB_TITLE)) $criteria->add(QbcMerchantsContactsPeer::JOB_TITLE, $this->job_title);
        if ($this->isColumnModified(QbcMerchantsContactsPeer::OFFICE_ADDRESS)) $criteria->add(QbcMerchantsContactsPeer::OFFICE_ADDRESS, $this->office_address);
        if ($this->isColumnModified(QbcMerchantsContactsPeer::CELL_PHONE)) $criteria->add(QbcMerchantsContactsPeer::CELL_PHONE, $this->cell_phone);
        if ($this->isColumnModified(QbcMerchantsContactsPeer::FIRST_CONTACT)) $criteria->add(QbcMerchantsContactsPeer::FIRST_CONTACT, $this->first_contact);

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
        $criteria = new Criteria(QbcMerchantsContactsPeer::DATABASE_NAME);
        $criteria->add(QbcMerchantsContactsPeer::CONTACT_ID, $this->contact_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getContactId();
    }

    /**
     * Generic method to set the primary key (contact_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setContactId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getContactId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of QbcMerchantsContacts (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setMerchantsId($this->getMerchantsId());
        $copyObj->setName($this->getName());
        $copyObj->setSurname($this->getSurname());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setPhone($this->getPhone());
        $copyObj->setJobTitle($this->getJobTitle());
        $copyObj->setOfficeAddress($this->getOfficeAddress());
        $copyObj->setCellPhone($this->getCellPhone());
        $copyObj->setFirstContact($this->getFirstContact());

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
            $copyObj->setContactId(NULL); // this is a auto-increment column, so set to default value
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
     * @return QbcMerchantsContacts Clone of current object.
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
     * @return QbcMerchantsContactsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new QbcMerchantsContactsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GroupdealsMerchants object.
     *
     * @param                  GroupdealsMerchants $v
     * @return QbcMerchantsContacts The current object (for fluent API support)
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
            $v->addQbcMerchantsContacts($this);
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
                $this->aGroupdealsMerchants->addQbcMerchantsContactss($this);
             */
        }

        return $this->aGroupdealsMerchants;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->contact_id = null;
        $this->merchants_id = null;
        $this->name = null;
        $this->surname = null;
        $this->email = null;
        $this->phone = null;
        $this->job_title = null;
        $this->office_address = null;
        $this->cell_phone = null;
        $this->first_contact = null;
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
            if ($this->aGroupdealsMerchants instanceof Persistent) {
              $this->aGroupdealsMerchants->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aGroupdealsMerchants = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(QbcMerchantsContactsPeer::DEFAULT_STRING_FORMAT);
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
