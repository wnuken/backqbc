<?php


/**
 * Base static class for performing query and update operations on the 'qbc_merchants_locations' table.
 *
 *
 *
 * @package propel.generator.atmadmin.om
 */
abstract class BaseQbcMerchantsLocationsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'atmadmin';

    /** the table name for this class */
    const TABLE_NAME = 'qbc_merchants_locations';

    /** the related Propel class for this table */
    const OM_CLASS = 'QbcMerchantsLocations';

    /** the related TableMap class for this table */
    const TM_CLASS = 'QbcMerchantsLocationsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the location_id field */
    const LOCATION_ID = 'qbc_merchants_locations.location_id';

    /** the column name for the commercial_name_id field */
    const COMMERCIAL_NAME_ID = 'qbc_merchants_locations.commercial_name_id';

    /** the column name for the address field */
    const ADDRESS = 'qbc_merchants_locations.address';

    /** the column name for the city field */
    const CITY = 'qbc_merchants_locations.city';

    /** the column name for the phone field */
    const PHONE = 'qbc_merchants_locations.phone';

    /** the column name for the mobile_phone field */
    const MOBILE_PHONE = 'qbc_merchants_locations.mobile_phone';

    /** the column name for the image field */
    const IMAGE = 'qbc_merchants_locations.image';

    /** the column name for the status field */
    const STATUS = 'qbc_merchants_locations.status';

    /** the column name for the contact_name field */
    const CONTACT_NAME = 'qbc_merchants_locations.contact_name';

    /** the column name for the google_map_lat field */
    const GOOGLE_MAP_LAT = 'qbc_merchants_locations.google_map_lat';

    /** the column name for the google_map_log field */
    const GOOGLE_MAP_LOG = 'qbc_merchants_locations.google_map_log';

    /** the column name for the service_hour field */
    const SERVICE_HOUR = 'qbc_merchants_locations.service_hour';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of QbcMerchantsLocations objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array QbcMerchantsLocations[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. QbcMerchantsLocationsPeer::$fieldNames[QbcMerchantsLocationsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('LocationId', 'CommercialNameId', 'Address', 'City', 'Phone', 'MobilePhone', 'Image', 'Status', 'ContactName', 'GoogleMapLat', 'GoogleMapLog', 'ServiceHour', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('locationId', 'commercialNameId', 'address', 'city', 'phone', 'mobilePhone', 'image', 'status', 'contactName', 'googleMapLat', 'googleMapLog', 'serviceHour', ),
        BasePeer::TYPE_COLNAME => array (QbcMerchantsLocationsPeer::LOCATION_ID, QbcMerchantsLocationsPeer::COMMERCIAL_NAME_ID, QbcMerchantsLocationsPeer::ADDRESS, QbcMerchantsLocationsPeer::CITY, QbcMerchantsLocationsPeer::PHONE, QbcMerchantsLocationsPeer::MOBILE_PHONE, QbcMerchantsLocationsPeer::IMAGE, QbcMerchantsLocationsPeer::STATUS, QbcMerchantsLocationsPeer::CONTACT_NAME, QbcMerchantsLocationsPeer::GOOGLE_MAP_LAT, QbcMerchantsLocationsPeer::GOOGLE_MAP_LOG, QbcMerchantsLocationsPeer::SERVICE_HOUR, ),
        BasePeer::TYPE_RAW_COLNAME => array ('LOCATION_ID', 'COMMERCIAL_NAME_ID', 'ADDRESS', 'CITY', 'PHONE', 'MOBILE_PHONE', 'IMAGE', 'STATUS', 'CONTACT_NAME', 'GOOGLE_MAP_LAT', 'GOOGLE_MAP_LOG', 'SERVICE_HOUR', ),
        BasePeer::TYPE_FIELDNAME => array ('location_id', 'commercial_name_id', 'address', 'city', 'phone', 'mobile_phone', 'image', 'status', 'contact_name', 'google_map_lat', 'google_map_log', 'service_hour', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. QbcMerchantsLocationsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('LocationId' => 0, 'CommercialNameId' => 1, 'Address' => 2, 'City' => 3, 'Phone' => 4, 'MobilePhone' => 5, 'Image' => 6, 'Status' => 7, 'ContactName' => 8, 'GoogleMapLat' => 9, 'GoogleMapLog' => 10, 'ServiceHour' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('locationId' => 0, 'commercialNameId' => 1, 'address' => 2, 'city' => 3, 'phone' => 4, 'mobilePhone' => 5, 'image' => 6, 'status' => 7, 'contactName' => 8, 'googleMapLat' => 9, 'googleMapLog' => 10, 'serviceHour' => 11, ),
        BasePeer::TYPE_COLNAME => array (QbcMerchantsLocationsPeer::LOCATION_ID => 0, QbcMerchantsLocationsPeer::COMMERCIAL_NAME_ID => 1, QbcMerchantsLocationsPeer::ADDRESS => 2, QbcMerchantsLocationsPeer::CITY => 3, QbcMerchantsLocationsPeer::PHONE => 4, QbcMerchantsLocationsPeer::MOBILE_PHONE => 5, QbcMerchantsLocationsPeer::IMAGE => 6, QbcMerchantsLocationsPeer::STATUS => 7, QbcMerchantsLocationsPeer::CONTACT_NAME => 8, QbcMerchantsLocationsPeer::GOOGLE_MAP_LAT => 9, QbcMerchantsLocationsPeer::GOOGLE_MAP_LOG => 10, QbcMerchantsLocationsPeer::SERVICE_HOUR => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('LOCATION_ID' => 0, 'COMMERCIAL_NAME_ID' => 1, 'ADDRESS' => 2, 'CITY' => 3, 'PHONE' => 4, 'MOBILE_PHONE' => 5, 'IMAGE' => 6, 'STATUS' => 7, 'CONTACT_NAME' => 8, 'GOOGLE_MAP_LAT' => 9, 'GOOGLE_MAP_LOG' => 10, 'SERVICE_HOUR' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('location_id' => 0, 'commercial_name_id' => 1, 'address' => 2, 'city' => 3, 'phone' => 4, 'mobile_phone' => 5, 'image' => 6, 'status' => 7, 'contact_name' => 8, 'google_map_lat' => 9, 'google_map_log' => 10, 'service_hour' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = QbcMerchantsLocationsPeer::getFieldNames($toType);
        $key = isset(QbcMerchantsLocationsPeer::$fieldKeys[$fromType][$name]) ? QbcMerchantsLocationsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(QbcMerchantsLocationsPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, QbcMerchantsLocationsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return QbcMerchantsLocationsPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. QbcMerchantsLocationsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(QbcMerchantsLocationsPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(QbcMerchantsLocationsPeer::LOCATION_ID);
            $criteria->addSelectColumn(QbcMerchantsLocationsPeer::COMMERCIAL_NAME_ID);
            $criteria->addSelectColumn(QbcMerchantsLocationsPeer::ADDRESS);
            $criteria->addSelectColumn(QbcMerchantsLocationsPeer::CITY);
            $criteria->addSelectColumn(QbcMerchantsLocationsPeer::PHONE);
            $criteria->addSelectColumn(QbcMerchantsLocationsPeer::MOBILE_PHONE);
            $criteria->addSelectColumn(QbcMerchantsLocationsPeer::IMAGE);
            $criteria->addSelectColumn(QbcMerchantsLocationsPeer::STATUS);
            $criteria->addSelectColumn(QbcMerchantsLocationsPeer::CONTACT_NAME);
            $criteria->addSelectColumn(QbcMerchantsLocationsPeer::GOOGLE_MAP_LAT);
            $criteria->addSelectColumn(QbcMerchantsLocationsPeer::GOOGLE_MAP_LOG);
            $criteria->addSelectColumn(QbcMerchantsLocationsPeer::SERVICE_HOUR);
        } else {
            $criteria->addSelectColumn($alias . '.location_id');
            $criteria->addSelectColumn($alias . '.commercial_name_id');
            $criteria->addSelectColumn($alias . '.address');
            $criteria->addSelectColumn($alias . '.city');
            $criteria->addSelectColumn($alias . '.phone');
            $criteria->addSelectColumn($alias . '.mobile_phone');
            $criteria->addSelectColumn($alias . '.image');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.contact_name');
            $criteria->addSelectColumn($alias . '.google_map_lat');
            $criteria->addSelectColumn($alias . '.google_map_log');
            $criteria->addSelectColumn($alias . '.service_hour');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(QbcMerchantsLocationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            QbcMerchantsLocationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(QbcMerchantsLocationsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsLocationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return QbcMerchantsLocations
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = QbcMerchantsLocationsPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return QbcMerchantsLocationsPeer::populateObjects(QbcMerchantsLocationsPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsLocationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            QbcMerchantsLocationsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(QbcMerchantsLocationsPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param QbcMerchantsLocations $obj A QbcMerchantsLocations object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getLocationId();
            } // if key === null
            QbcMerchantsLocationsPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A QbcMerchantsLocations object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof QbcMerchantsLocations) {
                $key = (string) $value->getLocationId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or QbcMerchantsLocations object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(QbcMerchantsLocationsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return QbcMerchantsLocations Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(QbcMerchantsLocationsPeer::$instances[$key])) {
                return QbcMerchantsLocationsPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (QbcMerchantsLocationsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        QbcMerchantsLocationsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to qbc_merchants_locations
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = QbcMerchantsLocationsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = QbcMerchantsLocationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = QbcMerchantsLocationsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                QbcMerchantsLocationsPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (QbcMerchantsLocations object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = QbcMerchantsLocationsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = QbcMerchantsLocationsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + QbcMerchantsLocationsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = QbcMerchantsLocationsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            QbcMerchantsLocationsPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related QbcMerchantsCommercialNames table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinQbcMerchantsCommercialNames(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(QbcMerchantsLocationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            QbcMerchantsLocationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(QbcMerchantsLocationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsLocationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(QbcMerchantsLocationsPeer::COMMERCIAL_NAME_ID, QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of QbcMerchantsLocations objects pre-filled with their QbcMerchantsCommercialNames objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of QbcMerchantsLocations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinQbcMerchantsCommercialNames(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(QbcMerchantsLocationsPeer::DATABASE_NAME);
        }

        QbcMerchantsLocationsPeer::addSelectColumns($criteria);
        $startcol = QbcMerchantsLocationsPeer::NUM_HYDRATE_COLUMNS;
        QbcMerchantsCommercialNamesPeer::addSelectColumns($criteria);

        $criteria->addJoin(QbcMerchantsLocationsPeer::COMMERCIAL_NAME_ID, QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = QbcMerchantsLocationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = QbcMerchantsLocationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = QbcMerchantsLocationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                QbcMerchantsLocationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = QbcMerchantsCommercialNamesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = QbcMerchantsCommercialNamesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = QbcMerchantsCommercialNamesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    QbcMerchantsCommercialNamesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (QbcMerchantsLocations) to $obj2 (QbcMerchantsCommercialNames)
                $obj2->addQbcMerchantsLocations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(QbcMerchantsLocationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            QbcMerchantsLocationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(QbcMerchantsLocationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsLocationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(QbcMerchantsLocationsPeer::COMMERCIAL_NAME_ID, QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of QbcMerchantsLocations objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of QbcMerchantsLocations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(QbcMerchantsLocationsPeer::DATABASE_NAME);
        }

        QbcMerchantsLocationsPeer::addSelectColumns($criteria);
        $startcol2 = QbcMerchantsLocationsPeer::NUM_HYDRATE_COLUMNS;

        QbcMerchantsCommercialNamesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + QbcMerchantsCommercialNamesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(QbcMerchantsLocationsPeer::COMMERCIAL_NAME_ID, QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = QbcMerchantsLocationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = QbcMerchantsLocationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = QbcMerchantsLocationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                QbcMerchantsLocationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined QbcMerchantsCommercialNames rows

            $key2 = QbcMerchantsCommercialNamesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = QbcMerchantsCommercialNamesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = QbcMerchantsCommercialNamesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    QbcMerchantsCommercialNamesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (QbcMerchantsLocations) to the collection in $obj2 (QbcMerchantsCommercialNames)
                $obj2->addQbcMerchantsLocations($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(QbcMerchantsLocationsPeer::DATABASE_NAME)->getTable(QbcMerchantsLocationsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseQbcMerchantsLocationsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseQbcMerchantsLocationsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \QbcMerchantsLocationsTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return QbcMerchantsLocationsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a QbcMerchantsLocations or Criteria object.
     *
     * @param      mixed $values Criteria or QbcMerchantsLocations object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsLocationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from QbcMerchantsLocations object
        }

        if ($criteria->containsKey(QbcMerchantsLocationsPeer::LOCATION_ID) && $criteria->keyContainsValue(QbcMerchantsLocationsPeer::LOCATION_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.QbcMerchantsLocationsPeer::LOCATION_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(QbcMerchantsLocationsPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a QbcMerchantsLocations or Criteria object.
     *
     * @param      mixed $values Criteria or QbcMerchantsLocations object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsLocationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(QbcMerchantsLocationsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(QbcMerchantsLocationsPeer::LOCATION_ID);
            $value = $criteria->remove(QbcMerchantsLocationsPeer::LOCATION_ID);
            if ($value) {
                $selectCriteria->add(QbcMerchantsLocationsPeer::LOCATION_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(QbcMerchantsLocationsPeer::TABLE_NAME);
            }

        } else { // $values is QbcMerchantsLocations object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(QbcMerchantsLocationsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the qbc_merchants_locations table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsLocationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(QbcMerchantsLocationsPeer::TABLE_NAME, $con, QbcMerchantsLocationsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            QbcMerchantsLocationsPeer::clearInstancePool();
            QbcMerchantsLocationsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a QbcMerchantsLocations or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or QbcMerchantsLocations object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsLocationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            QbcMerchantsLocationsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof QbcMerchantsLocations) { // it's a model object
            // invalidate the cache for this single object
            QbcMerchantsLocationsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(QbcMerchantsLocationsPeer::DATABASE_NAME);
            $criteria->add(QbcMerchantsLocationsPeer::LOCATION_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                QbcMerchantsLocationsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(QbcMerchantsLocationsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            QbcMerchantsLocationsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given QbcMerchantsLocations object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param QbcMerchantsLocations $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(QbcMerchantsLocationsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(QbcMerchantsLocationsPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(QbcMerchantsLocationsPeer::DATABASE_NAME, QbcMerchantsLocationsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return QbcMerchantsLocations
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = QbcMerchantsLocationsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsLocationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(QbcMerchantsLocationsPeer::DATABASE_NAME);
        $criteria->add(QbcMerchantsLocationsPeer::LOCATION_ID, $pk);

        $v = QbcMerchantsLocationsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return QbcMerchantsLocations[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsLocationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(QbcMerchantsLocationsPeer::DATABASE_NAME);
            $criteria->add(QbcMerchantsLocationsPeer::LOCATION_ID, $pks, Criteria::IN);
            $objs = QbcMerchantsLocationsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseQbcMerchantsLocationsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseQbcMerchantsLocationsPeer::buildTableMap();

