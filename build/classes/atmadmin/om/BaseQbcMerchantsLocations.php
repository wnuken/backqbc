<?php


/**
 * Base class that represents a row from the 'qbc_merchants_locations' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcMerchantsLocations extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'QbcMerchantsLocationsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        QbcMerchantsLocationsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the location_id field.
     * @var        int
     */
    protected $location_id;

    /**
     * The value for the commercial_name_id field.
     * @var        int
     */
    protected $commercial_name_id;

    /**
     * The value for the address field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $address;

    /**
     * The value for the city field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $city;

    /**
     * The value for the phone field.
     * @var        string
     */
    protected $phone;

    /**
     * The value for the mobile_phone field.
     * @var        string
     */
    protected $mobile_phone;

    /**
     * The value for the image field.
     * @var        string
     */
    protected $image;

    /**
     * The value for the status field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $status;

    /**
     * The value for the contact_name field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $contact_name;

    /**
     * The value for the google_map_lat field.
     * Note: this column has a database default value of: '4.598071'
     * @var        string
     */
    protected $google_map_lat;

    /**
     * The value for the google_map_log field.
     * Note: this column has a database default value of: '-74.075832'
     * @var        string
     */
    protected $google_map_log;

    /**
     * The value for the service_hour field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $service_hour;

    /**
     * @var        QbcMerchantsCommercialNames
     */
    protected $aQbcMerchantsCommercialNames;

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
        $this->address = '';
        $this->city = '';
        $this->status = false;
        $this->contact_name = '';
        $this->google_map_lat = '4.598071';
        $this->google_map_log = '-74.075832';
        $this->service_hour = '';
    }

    /**
     * Initializes internal state of BaseQbcMerchantsLocations object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [location_id] column value.
     *
     * @return int
     */
    public function getLocationId()
    {

        return $this->location_id;
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
     * Get the [address] column value.
     *
     * @return string
     */
    public function getAddress()
    {

        return $this->address;
    }

    /**
     * Get the [city] column value.
     *
     * @return string
     */
    public function getCity()
    {

        return $this->city;
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
     * Get the [mobile_phone] column value.
     *
     * @return string
     */
    public function getMobilePhone()
    {

        return $this->mobile_phone;
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
     * Get the [status] column value.
     *
     * @return boolean
     */
    public function getStatus()
    {

        return $this->status;
    }

    /**
     * Get the [contact_name] column value.
     *
     * @return string
     */
    public function getContactName()
    {

        return $this->contact_name;
    }

    /**
     * Get the [google_map_lat] column value.
     *
     * @return string
     */
    public function getGoogleMapLat()
    {

        return $this->google_map_lat;
    }

    /**
     * Get the [google_map_log] column value.
     *
     * @return string
     */
    public function getGoogleMapLog()
    {

        return $this->google_map_log;
    }

    /**
     * Get the [service_hour] column value.
     *
     * @return string
     */
    public function getServiceHour()
    {

        return $this->service_hour;
    }

    /**
     * Set the value of [location_id] column.
     *
     * @param  int $v new value
     * @return QbcMerchantsLocations The current object (for fluent API support)
     */
    public function setLocationId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->location_id !== $v) {
            $this->location_id = $v;
            $this->modifiedColumns[] = QbcMerchantsLocationsPeer::LOCATION_ID;
        }


        return $this;
    } // setLocationId()

    /**
     * Set the value of [commercial_name_id] column.
     *
     * @param  int $v new value
     * @return QbcMerchantsLocations The current object (for fluent API support)
     */
    public function setCommercialNameId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->commercial_name_id !== $v) {
            $this->commercial_name_id = $v;
            $this->modifiedColumns[] = QbcMerchantsLocationsPeer::COMMERCIAL_NAME_ID;
        }

        if ($this->aQbcMerchantsCommercialNames !== null && $this->aQbcMerchantsCommercialNames->getCommercialNameId() !== $v) {
            $this->aQbcMerchantsCommercialNames = null;
        }


        return $this;
    } // setCommercialNameId()

    /**
     * Set the value of [address] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsLocations The current object (for fluent API support)
     */
    public function setAddress($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->address !== $v) {
            $this->address = $v;
            $this->modifiedColumns[] = QbcMerchantsLocationsPeer::ADDRESS;
        }


        return $this;
    } // setAddress()

    /**
     * Set the value of [city] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsLocations The current object (for fluent API support)
     */
    public function setCity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->city !== $v) {
            $this->city = $v;
            $this->modifiedColumns[] = QbcMerchantsLocationsPeer::CITY;
        }


        return $this;
    } // setCity()

    /**
     * Set the value of [phone] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsLocations The current object (for fluent API support)
     */
    public function setPhone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->phone !== $v) {
            $this->phone = $v;
            $this->modifiedColumns[] = QbcMerchantsLocationsPeer::PHONE;
        }


        return $this;
    } // setPhone()

    /**
     * Set the value of [mobile_phone] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsLocations The current object (for fluent API support)
     */
    public function setMobilePhone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mobile_phone !== $v) {
            $this->mobile_phone = $v;
            $this->modifiedColumns[] = QbcMerchantsLocationsPeer::MOBILE_PHONE;
        }


        return $this;
    } // setMobilePhone()

    /**
     * Set the value of [image] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsLocations The current object (for fluent API support)
     */
    public function setImage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->image !== $v) {
            $this->image = $v;
            $this->modifiedColumns[] = QbcMerchantsLocationsPeer::IMAGE;
        }


        return $this;
    } // setImage()

    /**
     * Sets the value of the [status] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return QbcMerchantsLocations The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[] = QbcMerchantsLocationsPeer::STATUS;
        }


        return $this;
    } // setStatus()

    /**
     * Set the value of [contact_name] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsLocations The current object (for fluent API support)
     */
    public function setContactName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->contact_name !== $v) {
            $this->contact_name = $v;
            $this->modifiedColumns[] = QbcMerchantsLocationsPeer::CONTACT_NAME;
        }


        return $this;
    } // setContactName()

    /**
     * Set the value of [google_map_lat] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsLocations The current object (for fluent API support)
     */
    public function setGoogleMapLat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->google_map_lat !== $v) {
            $this->google_map_lat = $v;
            $this->modifiedColumns[] = QbcMerchantsLocationsPeer::GOOGLE_MAP_LAT;
        }


        return $this;
    } // setGoogleMapLat()

    /**
     * Set the value of [google_map_log] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsLocations The current object (for fluent API support)
     */
    public function setGoogleMapLog($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->google_map_log !== $v) {
            $this->google_map_log = $v;
            $this->modifiedColumns[] = QbcMerchantsLocationsPeer::GOOGLE_MAP_LOG;
        }


        return $this;
    } // setGoogleMapLog()

    /**
     * Set the value of [service_hour] column.
     *
     * @param  string $v new value
     * @return QbcMerchantsLocations The current object (for fluent API support)
     */
    public function setServiceHour($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->service_hour !== $v) {
            $this->service_hour = $v;
            $this->modifiedColumns[] = QbcMerchantsLocationsPeer::SERVICE_HOUR;
        }


        return $this;
    } // setServiceHour()

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
            if ($this->address !== '') {
                return false;
            }

            if ($this->city !== '') {
                return false;
            }

            if ($this->status !== false) {
                return false;
            }

            if ($this->contact_name !== '') {
                return false;
            }

            if ($this->google_map_lat !== '4.598071') {
                return false;
            }

            if ($this->google_map_log !== '-74.075832') {
                return false;
            }

            if ($this->service_hour !== '') {
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

            $this->location_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->commercial_name_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->address = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->city = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->phone = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->mobile_phone = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->image = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->status = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->contact_name = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->google_map_lat = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->google_map_log = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->service_hour = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = QbcMerchantsLocationsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating QbcMerchantsLocations object", $e);
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

        if ($this->aQbcMerchantsCommercialNames !== null && $this->commercial_name_id !== $this->aQbcMerchantsCommercialNames->getCommercialNameId()) {
            $this->aQbcMerchantsCommercialNames = null;
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
            $con = Propel::getConnection(QbcMerchantsLocationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = QbcMerchantsLocationsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aQbcMerchantsCommercialNames = null;
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
            $con = Propel::getConnection(QbcMerchantsLocationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = QbcMerchantsLocationsQuery::create()
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
            $con = Propel::getConnection(QbcMerchantsLocationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                QbcMerchantsLocationsPeer::addInstanceToPool($this);
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

            if ($this->aQbcMerchantsCommercialNames !== null) {
                if ($this->aQbcMerchantsCommercialNames->isModified() || $this->aQbcMerchantsCommercialNames->isNew()) {
                    $affectedRows += $this->aQbcMerchantsCommercialNames->save($con);
                }
                $this->setQbcMerchantsCommercialNames($this->aQbcMerchantsCommercialNames);
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

        $this->modifiedColumns[] = QbcMerchantsLocationsPeer::LOCATION_ID;
        if (null !== $this->location_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . QbcMerchantsLocationsPeer::LOCATION_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::LOCATION_ID)) {
            $modifiedColumns[':p' . $index++]  = 'location_id';
        }
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::COMMERCIAL_NAME_ID)) {
            $modifiedColumns[':p' . $index++]  = 'commercial_name_id';
        }
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = 'address';
        }
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::CITY)) {
            $modifiedColumns[':p' . $index++]  = 'city';
        }
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::PHONE)) {
            $modifiedColumns[':p' . $index++]  = 'phone';
        }
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::MOBILE_PHONE)) {
            $modifiedColumns[':p' . $index++]  = 'mobile_phone';
        }
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::IMAGE)) {
            $modifiedColumns[':p' . $index++]  = 'image';
        }
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::CONTACT_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'contact_name';
        }
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::GOOGLE_MAP_LAT)) {
            $modifiedColumns[':p' . $index++]  = 'google_map_lat';
        }
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::GOOGLE_MAP_LOG)) {
            $modifiedColumns[':p' . $index++]  = 'google_map_log';
        }
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::SERVICE_HOUR)) {
            $modifiedColumns[':p' . $index++]  = 'service_hour';
        }

        $sql = sprintf(
            'INSERT INTO qbc_merchants_locations (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'location_id':
                        $stmt->bindValue($identifier, $this->location_id, PDO::PARAM_INT);
                        break;
                    case 'commercial_name_id':
                        $stmt->bindValue($identifier, $this->commercial_name_id, PDO::PARAM_INT);
                        break;
                    case 'address':
                        $stmt->bindValue($identifier, $this->address, PDO::PARAM_STR);
                        break;
                    case 'city':
                        $stmt->bindValue($identifier, $this->city, PDO::PARAM_STR);
                        break;
                    case 'phone':
                        $stmt->bindValue($identifier, $this->phone, PDO::PARAM_STR);
                        break;
                    case 'mobile_phone':
                        $stmt->bindValue($identifier, $this->mobile_phone, PDO::PARAM_STR);
                        break;
                    case 'image':
                        $stmt->bindValue($identifier, $this->image, PDO::PARAM_STR);
                        break;
                    case 'status':
                        $stmt->bindValue($identifier, (int) $this->status, PDO::PARAM_INT);
                        break;
                    case 'contact_name':
                        $stmt->bindValue($identifier, $this->contact_name, PDO::PARAM_STR);
                        break;
                    case 'google_map_lat':
                        $stmt->bindValue($identifier, $this->google_map_lat, PDO::PARAM_STR);
                        break;
                    case 'google_map_log':
                        $stmt->bindValue($identifier, $this->google_map_log, PDO::PARAM_STR);
                        break;
                    case 'service_hour':
                        $stmt->bindValue($identifier, $this->service_hour, PDO::PARAM_STR);
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
        $this->setLocationId($pk);

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

            if ($this->aQbcMerchantsCommercialNames !== null) {
                if (!$this->aQbcMerchantsCommercialNames->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aQbcMerchantsCommercialNames->getValidationFailures());
                }
            }


            if (($retval = QbcMerchantsLocationsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = QbcMerchantsLocationsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLocationId();
                break;
            case 1:
                return $this->getCommercialNameId();
                break;
            case 2:
                return $this->getAddress();
                break;
            case 3:
                return $this->getCity();
                break;
            case 4:
                return $this->getPhone();
                break;
            case 5:
                return $this->getMobilePhone();
                break;
            case 6:
                return $this->getImage();
                break;
            case 7:
                return $this->getStatus();
                break;
            case 8:
                return $this->getContactName();
                break;
            case 9:
                return $this->getGoogleMapLat();
                break;
            case 10:
                return $this->getGoogleMapLog();
                break;
            case 11:
                return $this->getServiceHour();
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
        if (isset($alreadyDumpedObjects['QbcMerchantsLocations'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['QbcMerchantsLocations'][$this->getPrimaryKey()] = true;
        $keys = QbcMerchantsLocationsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getLocationId(),
            $keys[1] => $this->getCommercialNameId(),
            $keys[2] => $this->getAddress(),
            $keys[3] => $this->getCity(),
            $keys[4] => $this->getPhone(),
            $keys[5] => $this->getMobilePhone(),
            $keys[6] => $this->getImage(),
            $keys[7] => $this->getStatus(),
            $keys[8] => $this->getContactName(),
            $keys[9] => $this->getGoogleMapLat(),
            $keys[10] => $this->getGoogleMapLog(),
            $keys[11] => $this->getServiceHour(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach($virtualColumns as $key => $virtualColumn)
        {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aQbcMerchantsCommercialNames) {
                $result['QbcMerchantsCommercialNames'] = $this->aQbcMerchantsCommercialNames->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = QbcMerchantsLocationsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLocationId($value);
                break;
            case 1:
                $this->setCommercialNameId($value);
                break;
            case 2:
                $this->setAddress($value);
                break;
            case 3:
                $this->setCity($value);
                break;
            case 4:
                $this->setPhone($value);
                break;
            case 5:
                $this->setMobilePhone($value);
                break;
            case 6:
                $this->setImage($value);
                break;
            case 7:
                $this->setStatus($value);
                break;
            case 8:
                $this->setContactName($value);
                break;
            case 9:
                $this->setGoogleMapLat($value);
                break;
            case 10:
                $this->setGoogleMapLog($value);
                break;
            case 11:
                $this->setServiceHour($value);
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
        $keys = QbcMerchantsLocationsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setLocationId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCommercialNameId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAddress($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCity($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPhone($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMobilePhone($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setImage($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setStatus($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setContactName($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setGoogleMapLat($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setGoogleMapLog($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setServiceHour($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(QbcMerchantsLocationsPeer::DATABASE_NAME);

        if ($this->isColumnModified(QbcMerchantsLocationsPeer::LOCATION_ID)) $criteria->add(QbcMerchantsLocationsPeer::LOCATION_ID, $this->location_id);
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::COMMERCIAL_NAME_ID)) $criteria->add(QbcMerchantsLocationsPeer::COMMERCIAL_NAME_ID, $this->commercial_name_id);
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::ADDRESS)) $criteria->add(QbcMerchantsLocationsPeer::ADDRESS, $this->address);
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::CITY)) $criteria->add(QbcMerchantsLocationsPeer::CITY, $this->city);
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::PHONE)) $criteria->add(QbcMerchantsLocationsPeer::PHONE, $this->phone);
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::MOBILE_PHONE)) $criteria->add(QbcMerchantsLocationsPeer::MOBILE_PHONE, $this->mobile_phone);
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::IMAGE)) $criteria->add(QbcMerchantsLocationsPeer::IMAGE, $this->image);
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::STATUS)) $criteria->add(QbcMerchantsLocationsPeer::STATUS, $this->status);
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::CONTACT_NAME)) $criteria->add(QbcMerchantsLocationsPeer::CONTACT_NAME, $this->contact_name);
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::GOOGLE_MAP_LAT)) $criteria->add(QbcMerchantsLocationsPeer::GOOGLE_MAP_LAT, $this->google_map_lat);
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::GOOGLE_MAP_LOG)) $criteria->add(QbcMerchantsLocationsPeer::GOOGLE_MAP_LOG, $this->google_map_log);
        if ($this->isColumnModified(QbcMerchantsLocationsPeer::SERVICE_HOUR)) $criteria->add(QbcMerchantsLocationsPeer::SERVICE_HOUR, $this->service_hour);

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
        $criteria = new Criteria(QbcMerchantsLocationsPeer::DATABASE_NAME);
        $criteria->add(QbcMerchantsLocationsPeer::LOCATION_ID, $this->location_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getLocationId();
    }

    /**
     * Generic method to set the primary key (location_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setLocationId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getLocationId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of QbcMerchantsLocations (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCommercialNameId($this->getCommercialNameId());
        $copyObj->setAddress($this->getAddress());
        $copyObj->setCity($this->getCity());
        $copyObj->setPhone($this->getPhone());
        $copyObj->setMobilePhone($this->getMobilePhone());
        $copyObj->setImage($this->getImage());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setContactName($this->getContactName());
        $copyObj->setGoogleMapLat($this->getGoogleMapLat());
        $copyObj->setGoogleMapLog($this->getGoogleMapLog());
        $copyObj->setServiceHour($this->getServiceHour());

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
            $copyObj->setLocationId(NULL); // this is a auto-increment column, so set to default value
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
     * @return QbcMerchantsLocations Clone of current object.
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
     * @return QbcMerchantsLocationsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new QbcMerchantsLocationsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a QbcMerchantsCommercialNames object.
     *
     * @param                  QbcMerchantsCommercialNames $v
     * @return QbcMerchantsLocations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setQbcMerchantsCommercialNames(QbcMerchantsCommercialNames $v = null)
    {
        if ($v === null) {
            $this->setCommercialNameId(NULL);
        } else {
            $this->setCommercialNameId($v->getCommercialNameId());
        }

        $this->aQbcMerchantsCommercialNames = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the QbcMerchantsCommercialNames object, it will not be re-added.
        if ($v !== null) {
            $v->addQbcMerchantsLocations($this);
        }


        return $this;
    }


    /**
     * Get the associated QbcMerchantsCommercialNames object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return QbcMerchantsCommercialNames The associated QbcMerchantsCommercialNames object.
     * @throws PropelException
     */
    public function getQbcMerchantsCommercialNames(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aQbcMerchantsCommercialNames === null && ($this->commercial_name_id !== null) && $doQuery) {
            $this->aQbcMerchantsCommercialNames = QbcMerchantsCommercialNamesQuery::create()->findPk($this->commercial_name_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aQbcMerchantsCommercialNames->addQbcMerchantsLocationss($this);
             */
        }

        return $this->aQbcMerchantsCommercialNames;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->location_id = null;
        $this->commercial_name_id = null;
        $this->address = null;
        $this->city = null;
        $this->phone = null;
        $this->mobile_phone = null;
        $this->image = null;
        $this->status = null;
        $this->contact_name = null;
        $this->google_map_lat = null;
        $this->google_map_log = null;
        $this->service_hour = null;
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
            if ($this->aQbcMerchantsCommercialNames instanceof Persistent) {
              $this->aQbcMerchantsCommercialNames->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aQbcMerchantsCommercialNames = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(QbcMerchantsLocationsPeer::DEFAULT_STRING_FORMAT);
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
