<?php


/**
 * Base class that represents a row from the 'enterprise_banner' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseEnterpriseBanner extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EnterpriseBannerPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EnterpriseBannerPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the banner_id field.
     * @var        int
     */
    protected $banner_id;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the is_enabled field.
     * @var        int
     */
    protected $is_enabled;

    /**
     * The value for the types field.
     * @var        string
     */
    protected $types;

    /**
     * The value for the subhome field.
     * @var        string
     */
    protected $subhome;

    /**
     * The value for the start_date field.
     * @var        string
     */
    protected $start_date;

    /**
     * The value for the end_date field.
     * @var        string
     */
    protected $end_date;

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
    protected $enterpriseBannerContentsScheduledForDeletion = null;

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
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {

        return $this->name;
    }

    /**
     * Get the [is_enabled] column value.
     *
     * @return int
     */
    public function getIsEnabled()
    {

        return $this->is_enabled;
    }

    /**
     * Get the [types] column value.
     *
     * @return string
     */
    public function getTypes()
    {

        return $this->types;
    }

    /**
     * Get the [subhome] column value.
     *
     * @return string
     */
    public function getSubhome()
    {

        return $this->subhome;
    }

    /**
     * Get the [optionally formatted] temporal [start_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getStartDate($format = 'Y-m-d H:i:s')
    {
        if ($this->start_date === null) {
            return null;
        }

        if ($this->start_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->start_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->start_date, true), $x);
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
     * Get the [optionally formatted] temporal [end_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEndDate($format = 'Y-m-d H:i:s')
    {
        if ($this->end_date === null) {
            return null;
        }

        if ($this->end_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->end_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->end_date, true), $x);
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
     * Set the value of [banner_id] column.
     *
     * @param  int $v new value
     * @return EnterpriseBanner The current object (for fluent API support)
     */
    public function setBannerId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->banner_id !== $v) {
            $this->banner_id = $v;
            $this->modifiedColumns[] = EnterpriseBannerPeer::BANNER_ID;
        }


        return $this;
    } // setBannerId()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return EnterpriseBanner The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = EnterpriseBannerPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [is_enabled] column.
     *
     * @param  int $v new value
     * @return EnterpriseBanner The current object (for fluent API support)
     */
    public function setIsEnabled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_enabled !== $v) {
            $this->is_enabled = $v;
            $this->modifiedColumns[] = EnterpriseBannerPeer::IS_ENABLED;
        }


        return $this;
    } // setIsEnabled()

    /**
     * Set the value of [types] column.
     *
     * @param  string $v new value
     * @return EnterpriseBanner The current object (for fluent API support)
     */
    public function setTypes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->types !== $v) {
            $this->types = $v;
            $this->modifiedColumns[] = EnterpriseBannerPeer::TYPES;
        }


        return $this;
    } // setTypes()

    /**
     * Set the value of [subhome] column.
     *
     * @param  string $v new value
     * @return EnterpriseBanner The current object (for fluent API support)
     */
    public function setSubhome($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->subhome !== $v) {
            $this->subhome = $v;
            $this->modifiedColumns[] = EnterpriseBannerPeer::SUBHOME;
        }


        return $this;
    } // setSubhome()

    /**
     * Sets the value of [start_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return EnterpriseBanner The current object (for fluent API support)
     */
    public function setStartDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->start_date !== null || $dt !== null) {
            $currentDateAsString = ($this->start_date !== null && $tmpDt = new DateTime($this->start_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->start_date = $newDateAsString;
                $this->modifiedColumns[] = EnterpriseBannerPeer::START_DATE;
            }
        } // if either are not null


        return $this;
    } // setStartDate()

    /**
     * Sets the value of [end_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return EnterpriseBanner The current object (for fluent API support)
     */
    public function setEndDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->end_date !== null || $dt !== null) {
            $currentDateAsString = ($this->end_date !== null && $tmpDt = new DateTime($this->end_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->end_date = $newDateAsString;
                $this->modifiedColumns[] = EnterpriseBannerPeer::END_DATE;
            }
        } // if either are not null


        return $this;
    } // setEndDate()

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

            $this->banner_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->is_enabled = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->types = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->subhome = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->start_date = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->end_date = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = EnterpriseBannerPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating EnterpriseBanner object", $e);
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
            $con = Propel::getConnection(EnterpriseBannerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EnterpriseBannerPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

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
            $con = Propel::getConnection(EnterpriseBannerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EnterpriseBannerQuery::create()
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
            $con = Propel::getConnection(EnterpriseBannerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EnterpriseBannerPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = EnterpriseBannerPeer::BANNER_ID;
        if (null !== $this->banner_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EnterpriseBannerPeer::BANNER_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EnterpriseBannerPeer::BANNER_ID)) {
            $modifiedColumns[':p' . $index++]  = 'banner_id';
        }
        if ($this->isColumnModified(EnterpriseBannerPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }
        if ($this->isColumnModified(EnterpriseBannerPeer::IS_ENABLED)) {
            $modifiedColumns[':p' . $index++]  = 'is_enabled';
        }
        if ($this->isColumnModified(EnterpriseBannerPeer::TYPES)) {
            $modifiedColumns[':p' . $index++]  = 'types';
        }
        if ($this->isColumnModified(EnterpriseBannerPeer::SUBHOME)) {
            $modifiedColumns[':p' . $index++]  = 'subhome';
        }
        if ($this->isColumnModified(EnterpriseBannerPeer::START_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'start_date';
        }
        if ($this->isColumnModified(EnterpriseBannerPeer::END_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'end_date';
        }

        $sql = sprintf(
            'INSERT INTO enterprise_banner (%s) VALUES (%s)',
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
                    case 'name':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case 'is_enabled':
                        $stmt->bindValue($identifier, $this->is_enabled, PDO::PARAM_INT);
                        break;
                    case 'types':
                        $stmt->bindValue($identifier, $this->types, PDO::PARAM_STR);
                        break;
                    case 'subhome':
                        $stmt->bindValue($identifier, $this->subhome, PDO::PARAM_STR);
                        break;
                    case 'start_date':
                        $stmt->bindValue($identifier, $this->start_date, PDO::PARAM_STR);
                        break;
                    case 'end_date':
                        $stmt->bindValue($identifier, $this->end_date, PDO::PARAM_STR);
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
        $this->setBannerId($pk);

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


            if (($retval = EnterpriseBannerPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = EnterpriseBannerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getName();
                break;
            case 2:
                return $this->getIsEnabled();
                break;
            case 3:
                return $this->getTypes();
                break;
            case 4:
                return $this->getSubhome();
                break;
            case 5:
                return $this->getStartDate();
                break;
            case 6:
                return $this->getEndDate();
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
        if (isset($alreadyDumpedObjects['EnterpriseBanner'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['EnterpriseBanner'][$this->getPrimaryKey()] = true;
        $keys = EnterpriseBannerPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBannerId(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getIsEnabled(),
            $keys[3] => $this->getTypes(),
            $keys[4] => $this->getSubhome(),
            $keys[5] => $this->getStartDate(),
            $keys[6] => $this->getEndDate(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach($virtualColumns as $key => $virtualColumn)
        {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
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
        $pos = EnterpriseBannerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setName($value);
                break;
            case 2:
                $this->setIsEnabled($value);
                break;
            case 3:
                $this->setTypes($value);
                break;
            case 4:
                $this->setSubhome($value);
                break;
            case 5:
                $this->setStartDate($value);
                break;
            case 6:
                $this->setEndDate($value);
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
        $keys = EnterpriseBannerPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBannerId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIsEnabled($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTypes($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSubhome($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setStartDate($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEndDate($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EnterpriseBannerPeer::DATABASE_NAME);

        if ($this->isColumnModified(EnterpriseBannerPeer::BANNER_ID)) $criteria->add(EnterpriseBannerPeer::BANNER_ID, $this->banner_id);
        if ($this->isColumnModified(EnterpriseBannerPeer::NAME)) $criteria->add(EnterpriseBannerPeer::NAME, $this->name);
        if ($this->isColumnModified(EnterpriseBannerPeer::IS_ENABLED)) $criteria->add(EnterpriseBannerPeer::IS_ENABLED, $this->is_enabled);
        if ($this->isColumnModified(EnterpriseBannerPeer::TYPES)) $criteria->add(EnterpriseBannerPeer::TYPES, $this->types);
        if ($this->isColumnModified(EnterpriseBannerPeer::SUBHOME)) $criteria->add(EnterpriseBannerPeer::SUBHOME, $this->subhome);
        if ($this->isColumnModified(EnterpriseBannerPeer::START_DATE)) $criteria->add(EnterpriseBannerPeer::START_DATE, $this->start_date);
        if ($this->isColumnModified(EnterpriseBannerPeer::END_DATE)) $criteria->add(EnterpriseBannerPeer::END_DATE, $this->end_date);

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
        $criteria = new Criteria(EnterpriseBannerPeer::DATABASE_NAME);
        $criteria->add(EnterpriseBannerPeer::BANNER_ID, $this->banner_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getBannerId();
    }

    /**
     * Generic method to set the primary key (banner_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setBannerId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getBannerId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of EnterpriseBanner (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setIsEnabled($this->getIsEnabled());
        $copyObj->setTypes($this->getTypes());
        $copyObj->setSubhome($this->getSubhome());
        $copyObj->setStartDate($this->getStartDate());
        $copyObj->setEndDate($this->getEndDate());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

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
            $copyObj->setBannerId(NULL); // this is a auto-increment column, so set to default value
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
     * @return EnterpriseBanner Clone of current object.
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
     * @return EnterpriseBannerPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EnterpriseBannerPeer();
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
        if ('EnterpriseBannerContent' == $relationName) {
            $this->initEnterpriseBannerContents();
        }
    }

    /**
     * Clears out the collEnterpriseBannerContents collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return EnterpriseBanner The current object (for fluent API support)
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
     * If this EnterpriseBanner is new, it will return
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
                    ->filterByEnterpriseBanner($this)
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
     * @return EnterpriseBanner The current object (for fluent API support)
     */
    public function setEnterpriseBannerContents(PropelCollection $enterpriseBannerContents, PropelPDO $con = null)
    {
        $enterpriseBannerContentsToDelete = $this->getEnterpriseBannerContents(new Criteria(), $con)->diff($enterpriseBannerContents);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->enterpriseBannerContentsScheduledForDeletion = clone $enterpriseBannerContentsToDelete;

        foreach ($enterpriseBannerContentsToDelete as $enterpriseBannerContentRemoved) {
            $enterpriseBannerContentRemoved->setEnterpriseBanner(null);
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
                ->filterByEnterpriseBanner($this)
                ->count($con);
        }

        return count($this->collEnterpriseBannerContents);
    }

    /**
     * Method called to associate a EnterpriseBannerContent object to this object
     * through the EnterpriseBannerContent foreign key attribute.
     *
     * @param    EnterpriseBannerContent $l EnterpriseBannerContent
     * @return EnterpriseBanner The current object (for fluent API support)
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
        $enterpriseBannerContent->setEnterpriseBanner($this);
    }

    /**
     * @param	EnterpriseBannerContent $enterpriseBannerContent The enterpriseBannerContent object to remove.
     * @return EnterpriseBanner The current object (for fluent API support)
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
            $enterpriseBannerContent->setEnterpriseBanner(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this EnterpriseBanner is new, it will return
     * an empty collection; or if this EnterpriseBanner has previously
     * been saved, it will retrieve related EnterpriseBannerContents from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in EnterpriseBanner.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|EnterpriseBannerContent[] List of EnterpriseBannerContent objects
     */
    public function getEnterpriseBannerContentsJoinCoreStore($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EnterpriseBannerContentQuery::create(null, $criteria);
        $query->joinWith('CoreStore', $join_behavior);

        return $this->getEnterpriseBannerContents($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->banner_id = null;
        $this->name = null;
        $this->is_enabled = null;
        $this->types = null;
        $this->subhome = null;
        $this->start_date = null;
        $this->end_date = null;
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
            if ($this->collEnterpriseBannerContents) {
                foreach ($this->collEnterpriseBannerContents as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collEnterpriseBannerContents instanceof PropelCollection) {
            $this->collEnterpriseBannerContents->clearIterator();
        }
        $this->collEnterpriseBannerContents = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EnterpriseBannerPeer::DEFAULT_STRING_FORMAT);
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
