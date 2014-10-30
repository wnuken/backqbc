<?php


/**
 * Base class that represents a row from the 'qbc_subhome' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSubhome extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'QbcSubhomePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        QbcSubhomePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the entity_id field.
     * @var        int
     */
    protected $entity_id;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the color field.
     * Note: this column has a database default value of: 'default'
     * @var        string
     */
    protected $color;

    /**
     * The value for the identifier field.
     * Note: this column has a database default value of: 'default'
     * @var        string
     */
    protected $identifier;

    /**
     * The value for the page_id field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $page_id;

    /**
     * The value for the option_id field.
     * @var        string
     */
    protected $option_id;

    /**
     * The value for the is_visible field.
     * @var        int
     */
    protected $is_visible;

    /**
     * The value for the image field.
     * @var        string
     */
    protected $image;

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
        $this->color = 'default';
        $this->identifier = 'default';
        $this->page_id = '1';
    }

    /**
     * Initializes internal state of BaseQbcSubhome object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [entity_id] column value.
     *
     * @return int
     */
    public function getEntityId()
    {

        return $this->entity_id;
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
     * Get the [color] column value.
     *
     * @return string
     */
    public function getColor()
    {

        return $this->color;
    }

    /**
     * Get the [identifier] column value.
     *
     * @return string
     */
    public function getIdentifier()
    {

        return $this->identifier;
    }

    /**
     * Get the [page_id] column value.
     *
     * @return string
     */
    public function getPageId()
    {

        return $this->page_id;
    }

    /**
     * Get the [option_id] column value.
     *
     * @return string
     */
    public function getOptionId()
    {

        return $this->option_id;
    }

    /**
     * Get the [is_visible] column value.
     *
     * @return int
     */
    public function getIsVisible()
    {

        return $this->is_visible;
    }

    /**
     * Get the [image] column value.
     *
     * @return string
     */
    public function getImage()
    {

        return $this->image;
    }

    /**
     * Set the value of [entity_id] column.
     *
     * @param  int $v new value
     * @return QbcSubhome The current object (for fluent API support)
     */
    public function setEntityId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entity_id !== $v) {
            $this->entity_id = $v;
            $this->modifiedColumns[] = QbcSubhomePeer::ENTITY_ID;
        }


        return $this;
    } // setEntityId()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return QbcSubhome The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = QbcSubhomePeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [color] column.
     *
     * @param  string $v new value
     * @return QbcSubhome The current object (for fluent API support)
     */
    public function setColor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->color !== $v) {
            $this->color = $v;
            $this->modifiedColumns[] = QbcSubhomePeer::COLOR;
        }


        return $this;
    } // setColor()

    /**
     * Set the value of [identifier] column.
     *
     * @param  string $v new value
     * @return QbcSubhome The current object (for fluent API support)
     */
    public function setIdentifier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifier !== $v) {
            $this->identifier = $v;
            $this->modifiedColumns[] = QbcSubhomePeer::IDENTIFIER;
        }


        return $this;
    } // setIdentifier()

    /**
     * Set the value of [page_id] column.
     *
     * @param  string $v new value
     * @return QbcSubhome The current object (for fluent API support)
     */
    public function setPageId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->page_id !== $v) {
            $this->page_id = $v;
            $this->modifiedColumns[] = QbcSubhomePeer::PAGE_ID;
        }


        return $this;
    } // setPageId()

    /**
     * Set the value of [option_id] column.
     *
     * @param  string $v new value
     * @return QbcSubhome The current object (for fluent API support)
     */
    public function setOptionId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->option_id !== $v) {
            $this->option_id = $v;
            $this->modifiedColumns[] = QbcSubhomePeer::OPTION_ID;
        }


        return $this;
    } // setOptionId()

    /**
     * Set the value of [is_visible] column.
     *
     * @param  int $v new value
     * @return QbcSubhome The current object (for fluent API support)
     */
    public function setIsVisible($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_visible !== $v) {
            $this->is_visible = $v;
            $this->modifiedColumns[] = QbcSubhomePeer::IS_VISIBLE;
        }


        return $this;
    } // setIsVisible()

    /**
     * Set the value of [image] column.
     *
     * @param  string $v new value
     * @return QbcSubhome The current object (for fluent API support)
     */
    public function setImage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->image !== $v) {
            $this->image = $v;
            $this->modifiedColumns[] = QbcSubhomePeer::IMAGE;
        }


        return $this;
    } // setImage()

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
            if ($this->color !== 'default') {
                return false;
            }

            if ($this->identifier !== 'default') {
                return false;
            }

            if ($this->page_id !== '1') {
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

            $this->entity_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->color = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->identifier = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->page_id = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->option_id = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->is_visible = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->image = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = QbcSubhomePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating QbcSubhome object", $e);
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
            $con = Propel::getConnection(QbcSubhomePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = QbcSubhomePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(QbcSubhomePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = QbcSubhomeQuery::create()
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
            $con = Propel::getConnection(QbcSubhomePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                QbcSubhomePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = QbcSubhomePeer::ENTITY_ID;
        if (null !== $this->entity_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . QbcSubhomePeer::ENTITY_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(QbcSubhomePeer::ENTITY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'entity_id';
        }
        if ($this->isColumnModified(QbcSubhomePeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }
        if ($this->isColumnModified(QbcSubhomePeer::COLOR)) {
            $modifiedColumns[':p' . $index++]  = 'color';
        }
        if ($this->isColumnModified(QbcSubhomePeer::IDENTIFIER)) {
            $modifiedColumns[':p' . $index++]  = 'identifier';
        }
        if ($this->isColumnModified(QbcSubhomePeer::PAGE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'page_id';
        }
        if ($this->isColumnModified(QbcSubhomePeer::OPTION_ID)) {
            $modifiedColumns[':p' . $index++]  = 'option_id';
        }
        if ($this->isColumnModified(QbcSubhomePeer::IS_VISIBLE)) {
            $modifiedColumns[':p' . $index++]  = 'is_visible';
        }
        if ($this->isColumnModified(QbcSubhomePeer::IMAGE)) {
            $modifiedColumns[':p' . $index++]  = 'image';
        }

        $sql = sprintf(
            'INSERT INTO qbc_subhome (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'entity_id':
                        $stmt->bindValue($identifier, $this->entity_id, PDO::PARAM_INT);
                        break;
                    case 'name':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case 'color':
                        $stmt->bindValue($identifier, $this->color, PDO::PARAM_STR);
                        break;
                    case 'identifier':
                        $stmt->bindValue($identifier, $this->identifier, PDO::PARAM_STR);
                        break;
                    case 'page_id':
                        $stmt->bindValue($identifier, $this->page_id, PDO::PARAM_STR);
                        break;
                    case 'option_id':
                        $stmt->bindValue($identifier, $this->option_id, PDO::PARAM_STR);
                        break;
                    case 'is_visible':
                        $stmt->bindValue($identifier, $this->is_visible, PDO::PARAM_INT);
                        break;
                    case 'image':
                        $stmt->bindValue($identifier, $this->image, PDO::PARAM_STR);
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
        $this->setEntityId($pk);

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


            if (($retval = QbcSubhomePeer::doValidate($this, $columns)) !== true) {
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
        $pos = QbcSubhomePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getEntityId();
                break;
            case 1:
                return $this->getName();
                break;
            case 2:
                return $this->getColor();
                break;
            case 3:
                return $this->getIdentifier();
                break;
            case 4:
                return $this->getPageId();
                break;
            case 5:
                return $this->getOptionId();
                break;
            case 6:
                return $this->getIsVisible();
                break;
            case 7:
                return $this->getImage();
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
        if (isset($alreadyDumpedObjects['QbcSubhome'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['QbcSubhome'][$this->getPrimaryKey()] = true;
        $keys = QbcSubhomePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getEntityId(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getColor(),
            $keys[3] => $this->getIdentifier(),
            $keys[4] => $this->getPageId(),
            $keys[5] => $this->getOptionId(),
            $keys[6] => $this->getIsVisible(),
            $keys[7] => $this->getImage(),
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
        $pos = QbcSubhomePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setEntityId($value);
                break;
            case 1:
                $this->setName($value);
                break;
            case 2:
                $this->setColor($value);
                break;
            case 3:
                $this->setIdentifier($value);
                break;
            case 4:
                $this->setPageId($value);
                break;
            case 5:
                $this->setOptionId($value);
                break;
            case 6:
                $this->setIsVisible($value);
                break;
            case 7:
                $this->setImage($value);
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
        $keys = QbcSubhomePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setEntityId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setColor($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdentifier($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPageId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOptionId($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIsVisible($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setImage($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(QbcSubhomePeer::DATABASE_NAME);

        if ($this->isColumnModified(QbcSubhomePeer::ENTITY_ID)) $criteria->add(QbcSubhomePeer::ENTITY_ID, $this->entity_id);
        if ($this->isColumnModified(QbcSubhomePeer::NAME)) $criteria->add(QbcSubhomePeer::NAME, $this->name);
        if ($this->isColumnModified(QbcSubhomePeer::COLOR)) $criteria->add(QbcSubhomePeer::COLOR, $this->color);
        if ($this->isColumnModified(QbcSubhomePeer::IDENTIFIER)) $criteria->add(QbcSubhomePeer::IDENTIFIER, $this->identifier);
        if ($this->isColumnModified(QbcSubhomePeer::PAGE_ID)) $criteria->add(QbcSubhomePeer::PAGE_ID, $this->page_id);
        if ($this->isColumnModified(QbcSubhomePeer::OPTION_ID)) $criteria->add(QbcSubhomePeer::OPTION_ID, $this->option_id);
        if ($this->isColumnModified(QbcSubhomePeer::IS_VISIBLE)) $criteria->add(QbcSubhomePeer::IS_VISIBLE, $this->is_visible);
        if ($this->isColumnModified(QbcSubhomePeer::IMAGE)) $criteria->add(QbcSubhomePeer::IMAGE, $this->image);

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
        $criteria = new Criteria(QbcSubhomePeer::DATABASE_NAME);
        $criteria->add(QbcSubhomePeer::ENTITY_ID, $this->entity_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getEntityId();
    }

    /**
     * Generic method to set the primary key (entity_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setEntityId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getEntityId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of QbcSubhome (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setColor($this->getColor());
        $copyObj->setIdentifier($this->getIdentifier());
        $copyObj->setPageId($this->getPageId());
        $copyObj->setOptionId($this->getOptionId());
        $copyObj->setIsVisible($this->getIsVisible());
        $copyObj->setImage($this->getImage());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setEntityId(NULL); // this is a auto-increment column, so set to default value
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
     * @return QbcSubhome Clone of current object.
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
     * @return QbcSubhomePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new QbcSubhomePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->entity_id = null;
        $this->name = null;
        $this->color = null;
        $this->identifier = null;
        $this->page_id = null;
        $this->option_id = null;
        $this->is_visible = null;
        $this->image = null;
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
        return (string) $this->exportTo(QbcSubhomePeer::DEFAULT_STRING_FORMAT);
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
