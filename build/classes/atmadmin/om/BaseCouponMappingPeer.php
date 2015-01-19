<?php


/**
 * Base static class for performing query and update operations on the 'coupon_mapping' table.
 *
 *
 *
 * @package propel.generator.atmadmin.om
 */
abstract class BaseCouponMappingPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'atmadmin';

    /** the table name for this class */
    const TABLE_NAME = 'coupon_mapping';

    /** the related Propel class for this table */
    const OM_CLASS = 'CouponMapping';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CouponMappingTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the mapping_id field */
    const MAPPING_ID = 'coupon_mapping.mapping_id';

    /** the column name for the coupon field */
    const COUPON = 'coupon_mapping.coupon';

    /** the column name for the coupon_md5 field */
    const COUPON_MD5 = 'coupon_mapping.coupon_md5';

    /** the column name for the expiration_date field */
    const EXPIRATION_DATE = 'coupon_mapping.expiration_date';

    /** the column name for the customer_id field */
    const CUSTOMER_ID = 'coupon_mapping.customer_id';

    /** the column name for the can_send field */
    const CAN_SEND = 'coupon_mapping.can_send';

    /** the column name for the status field */
    const STATUS = 'coupon_mapping.status';

    /** the column name for the order_id field */
    const ORDER_ID = 'coupon_mapping.order_id';

    /** the column name for the item_id field */
    const ITEM_ID = 'coupon_mapping.item_id';

    /** the column name for the payed_for_return field */
    const PAYED_FOR_RETURN = 'coupon_mapping.payed_for_return';

    /** the column name for the increment_id field */
    const INCREMENT_ID = 'coupon_mapping.increment_id';

    /** the column name for the unit field */
    const UNIT = 'coupon_mapping.unit';

    /** the column name for the personalized_coupon field */
    const PERSONALIZED_COUPON = 'coupon_mapping.personalized_coupon';

    /** the column name for the pos_number field */
    const POS_NUMBER = 'coupon_mapping.pos_number';

    /** the column name for the hash field */
    const HASH = 'coupon_mapping.hash';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CouponMapping objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CouponMapping[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CouponMappingPeer::$fieldNames[CouponMappingPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('MappingId', 'Coupon', 'CouponMd5', 'ExpirationDate', 'CustomerId', 'CanSend', 'Status', 'OrderId', 'ItemId', 'PayedForReturn', 'IncrementId', 'Unit', 'PersonalizedCoupon', 'PosNumber', 'Hash', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('mappingId', 'coupon', 'couponMd5', 'expirationDate', 'customerId', 'canSend', 'status', 'orderId', 'itemId', 'payedForReturn', 'incrementId', 'unit', 'personalizedCoupon', 'posNumber', 'hash', ),
        BasePeer::TYPE_COLNAME => array (CouponMappingPeer::MAPPING_ID, CouponMappingPeer::COUPON, CouponMappingPeer::COUPON_MD5, CouponMappingPeer::EXPIRATION_DATE, CouponMappingPeer::CUSTOMER_ID, CouponMappingPeer::CAN_SEND, CouponMappingPeer::STATUS, CouponMappingPeer::ORDER_ID, CouponMappingPeer::ITEM_ID, CouponMappingPeer::PAYED_FOR_RETURN, CouponMappingPeer::INCREMENT_ID, CouponMappingPeer::UNIT, CouponMappingPeer::PERSONALIZED_COUPON, CouponMappingPeer::POS_NUMBER, CouponMappingPeer::HASH, ),
        BasePeer::TYPE_RAW_COLNAME => array ('MAPPING_ID', 'COUPON', 'COUPON_MD5', 'EXPIRATION_DATE', 'CUSTOMER_ID', 'CAN_SEND', 'STATUS', 'ORDER_ID', 'ITEM_ID', 'PAYED_FOR_RETURN', 'INCREMENT_ID', 'UNIT', 'PERSONALIZED_COUPON', 'POS_NUMBER', 'HASH', ),
        BasePeer::TYPE_FIELDNAME => array ('mapping_id', 'coupon', 'coupon_md5', 'expiration_date', 'customer_id', 'can_send', 'status', 'order_id', 'item_id', 'payed_for_return', 'increment_id', 'unit', 'personalized_coupon', 'pos_number', 'hash', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CouponMappingPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('MappingId' => 0, 'Coupon' => 1, 'CouponMd5' => 2, 'ExpirationDate' => 3, 'CustomerId' => 4, 'CanSend' => 5, 'Status' => 6, 'OrderId' => 7, 'ItemId' => 8, 'PayedForReturn' => 9, 'IncrementId' => 10, 'Unit' => 11, 'PersonalizedCoupon' => 12, 'PosNumber' => 13, 'Hash' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('mappingId' => 0, 'coupon' => 1, 'couponMd5' => 2, 'expirationDate' => 3, 'customerId' => 4, 'canSend' => 5, 'status' => 6, 'orderId' => 7, 'itemId' => 8, 'payedForReturn' => 9, 'incrementId' => 10, 'unit' => 11, 'personalizedCoupon' => 12, 'posNumber' => 13, 'hash' => 14, ),
        BasePeer::TYPE_COLNAME => array (CouponMappingPeer::MAPPING_ID => 0, CouponMappingPeer::COUPON => 1, CouponMappingPeer::COUPON_MD5 => 2, CouponMappingPeer::EXPIRATION_DATE => 3, CouponMappingPeer::CUSTOMER_ID => 4, CouponMappingPeer::CAN_SEND => 5, CouponMappingPeer::STATUS => 6, CouponMappingPeer::ORDER_ID => 7, CouponMappingPeer::ITEM_ID => 8, CouponMappingPeer::PAYED_FOR_RETURN => 9, CouponMappingPeer::INCREMENT_ID => 10, CouponMappingPeer::UNIT => 11, CouponMappingPeer::PERSONALIZED_COUPON => 12, CouponMappingPeer::POS_NUMBER => 13, CouponMappingPeer::HASH => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('MAPPING_ID' => 0, 'COUPON' => 1, 'COUPON_MD5' => 2, 'EXPIRATION_DATE' => 3, 'CUSTOMER_ID' => 4, 'CAN_SEND' => 5, 'STATUS' => 6, 'ORDER_ID' => 7, 'ITEM_ID' => 8, 'PAYED_FOR_RETURN' => 9, 'INCREMENT_ID' => 10, 'UNIT' => 11, 'PERSONALIZED_COUPON' => 12, 'POS_NUMBER' => 13, 'HASH' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('mapping_id' => 0, 'coupon' => 1, 'coupon_md5' => 2, 'expiration_date' => 3, 'customer_id' => 4, 'can_send' => 5, 'status' => 6, 'order_id' => 7, 'item_id' => 8, 'payed_for_return' => 9, 'increment_id' => 10, 'unit' => 11, 'personalized_coupon' => 12, 'pos_number' => 13, 'hash' => 14, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
        $toNames = CouponMappingPeer::getFieldNames($toType);
        $key = isset(CouponMappingPeer::$fieldKeys[$fromType][$name]) ? CouponMappingPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CouponMappingPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CouponMappingPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CouponMappingPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CouponMappingPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CouponMappingPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CouponMappingPeer::MAPPING_ID);
            $criteria->addSelectColumn(CouponMappingPeer::COUPON);
            $criteria->addSelectColumn(CouponMappingPeer::COUPON_MD5);
            $criteria->addSelectColumn(CouponMappingPeer::EXPIRATION_DATE);
            $criteria->addSelectColumn(CouponMappingPeer::CUSTOMER_ID);
            $criteria->addSelectColumn(CouponMappingPeer::CAN_SEND);
            $criteria->addSelectColumn(CouponMappingPeer::STATUS);
            $criteria->addSelectColumn(CouponMappingPeer::ORDER_ID);
            $criteria->addSelectColumn(CouponMappingPeer::ITEM_ID);
            $criteria->addSelectColumn(CouponMappingPeer::PAYED_FOR_RETURN);
            $criteria->addSelectColumn(CouponMappingPeer::INCREMENT_ID);
            $criteria->addSelectColumn(CouponMappingPeer::UNIT);
            $criteria->addSelectColumn(CouponMappingPeer::PERSONALIZED_COUPON);
            $criteria->addSelectColumn(CouponMappingPeer::POS_NUMBER);
            $criteria->addSelectColumn(CouponMappingPeer::HASH);
        } else {
            $criteria->addSelectColumn($alias . '.mapping_id');
            $criteria->addSelectColumn($alias . '.coupon');
            $criteria->addSelectColumn($alias . '.coupon_md5');
            $criteria->addSelectColumn($alias . '.expiration_date');
            $criteria->addSelectColumn($alias . '.customer_id');
            $criteria->addSelectColumn($alias . '.can_send');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.order_id');
            $criteria->addSelectColumn($alias . '.item_id');
            $criteria->addSelectColumn($alias . '.payed_for_return');
            $criteria->addSelectColumn($alias . '.increment_id');
            $criteria->addSelectColumn($alias . '.unit');
            $criteria->addSelectColumn($alias . '.personalized_coupon');
            $criteria->addSelectColumn($alias . '.pos_number');
            $criteria->addSelectColumn($alias . '.hash');
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
        $criteria->setPrimaryTableName(CouponMappingPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CouponMappingPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CouponMappingPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CouponMappingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return CouponMapping
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CouponMappingPeer::doSelect($critcopy, $con);
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
        return CouponMappingPeer::populateObjects(CouponMappingPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CouponMappingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CouponMappingPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CouponMappingPeer::DATABASE_NAME);

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
     * @param CouponMapping $obj A CouponMapping object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getMappingId();
            } // if key === null
            CouponMappingPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CouponMapping object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CouponMapping) {
                $key = (string) $value->getMappingId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CouponMapping object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CouponMappingPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return CouponMapping Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CouponMappingPeer::$instances[$key])) {
                return CouponMappingPeer::$instances[$key];
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
        foreach (CouponMappingPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CouponMappingPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to coupon_mapping
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
        $cls = CouponMappingPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CouponMappingPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CouponMappingPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CouponMappingPeer::addInstanceToPool($obj, $key);
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
     * @return array (CouponMapping object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CouponMappingPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CouponMappingPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CouponMappingPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CouponMappingPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CouponMappingPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related SalesFlatOrder table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSalesFlatOrder(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CouponMappingPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CouponMappingPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CouponMappingPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CouponMappingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CouponMappingPeer::INCREMENT_ID, SalesFlatOrderPeer::INCREMENT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related PersonalizedCoupons table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPersonalizedCoupons(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CouponMappingPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CouponMappingPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CouponMappingPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CouponMappingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CouponMappingPeer::PERSONALIZED_COUPON, PersonalizedCouponsPeer::ID, $join_behavior);

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
     * Selects a collection of CouponMapping objects pre-filled with their SalesFlatOrder objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CouponMapping objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSalesFlatOrder(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CouponMappingPeer::DATABASE_NAME);
        }

        CouponMappingPeer::addSelectColumns($criteria);
        $startcol = CouponMappingPeer::NUM_HYDRATE_COLUMNS;
        SalesFlatOrderPeer::addSelectColumns($criteria);

        $criteria->addJoin(CouponMappingPeer::INCREMENT_ID, SalesFlatOrderPeer::INCREMENT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CouponMappingPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CouponMappingPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CouponMappingPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CouponMappingPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = SalesFlatOrderPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = SalesFlatOrderPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = SalesFlatOrderPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    SalesFlatOrderPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CouponMapping) to $obj2 (SalesFlatOrder)
                $obj2->addCouponMapping($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CouponMapping objects pre-filled with their PersonalizedCoupons objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CouponMapping objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPersonalizedCoupons(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CouponMappingPeer::DATABASE_NAME);
        }

        CouponMappingPeer::addSelectColumns($criteria);
        $startcol = CouponMappingPeer::NUM_HYDRATE_COLUMNS;
        PersonalizedCouponsPeer::addSelectColumns($criteria);

        $criteria->addJoin(CouponMappingPeer::PERSONALIZED_COUPON, PersonalizedCouponsPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CouponMappingPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CouponMappingPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CouponMappingPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CouponMappingPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = PersonalizedCouponsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = PersonalizedCouponsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PersonalizedCouponsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    PersonalizedCouponsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CouponMapping) to $obj2 (PersonalizedCoupons)
                $obj2->addCouponMapping($obj1);

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
        $criteria->setPrimaryTableName(CouponMappingPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CouponMappingPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CouponMappingPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CouponMappingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CouponMappingPeer::INCREMENT_ID, SalesFlatOrderPeer::INCREMENT_ID, $join_behavior);

        $criteria->addJoin(CouponMappingPeer::PERSONALIZED_COUPON, PersonalizedCouponsPeer::ID, $join_behavior);

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
     * Selects a collection of CouponMapping objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CouponMapping objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CouponMappingPeer::DATABASE_NAME);
        }

        CouponMappingPeer::addSelectColumns($criteria);
        $startcol2 = CouponMappingPeer::NUM_HYDRATE_COLUMNS;

        SalesFlatOrderPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + SalesFlatOrderPeer::NUM_HYDRATE_COLUMNS;

        PersonalizedCouponsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + PersonalizedCouponsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CouponMappingPeer::INCREMENT_ID, SalesFlatOrderPeer::INCREMENT_ID, $join_behavior);

        $criteria->addJoin(CouponMappingPeer::PERSONALIZED_COUPON, PersonalizedCouponsPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CouponMappingPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CouponMappingPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CouponMappingPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CouponMappingPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined SalesFlatOrder rows

            $key2 = SalesFlatOrderPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = SalesFlatOrderPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = SalesFlatOrderPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    SalesFlatOrderPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CouponMapping) to the collection in $obj2 (SalesFlatOrder)
                $obj2->addCouponMapping($obj1);
            } // if joined row not null

            // Add objects for joined PersonalizedCoupons rows

            $key3 = PersonalizedCouponsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = PersonalizedCouponsPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = PersonalizedCouponsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    PersonalizedCouponsPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CouponMapping) to the collection in $obj3 (PersonalizedCoupons)
                $obj3->addCouponMapping($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related SalesFlatOrder table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptSalesFlatOrder(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CouponMappingPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CouponMappingPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CouponMappingPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CouponMappingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CouponMappingPeer::PERSONALIZED_COUPON, PersonalizedCouponsPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related PersonalizedCoupons table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptPersonalizedCoupons(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CouponMappingPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CouponMappingPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CouponMappingPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CouponMappingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CouponMappingPeer::INCREMENT_ID, SalesFlatOrderPeer::INCREMENT_ID, $join_behavior);

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
     * Selects a collection of CouponMapping objects pre-filled with all related objects except SalesFlatOrder.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CouponMapping objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptSalesFlatOrder(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CouponMappingPeer::DATABASE_NAME);
        }

        CouponMappingPeer::addSelectColumns($criteria);
        $startcol2 = CouponMappingPeer::NUM_HYDRATE_COLUMNS;

        PersonalizedCouponsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PersonalizedCouponsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CouponMappingPeer::PERSONALIZED_COUPON, PersonalizedCouponsPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CouponMappingPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CouponMappingPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CouponMappingPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CouponMappingPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined PersonalizedCoupons rows

                $key2 = PersonalizedCouponsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = PersonalizedCouponsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = PersonalizedCouponsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PersonalizedCouponsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CouponMapping) to the collection in $obj2 (PersonalizedCoupons)
                $obj2->addCouponMapping($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CouponMapping objects pre-filled with all related objects except PersonalizedCoupons.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CouponMapping objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptPersonalizedCoupons(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CouponMappingPeer::DATABASE_NAME);
        }

        CouponMappingPeer::addSelectColumns($criteria);
        $startcol2 = CouponMappingPeer::NUM_HYDRATE_COLUMNS;

        SalesFlatOrderPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + SalesFlatOrderPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CouponMappingPeer::INCREMENT_ID, SalesFlatOrderPeer::INCREMENT_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CouponMappingPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CouponMappingPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CouponMappingPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CouponMappingPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined SalesFlatOrder rows

                $key2 = SalesFlatOrderPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = SalesFlatOrderPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = SalesFlatOrderPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    SalesFlatOrderPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CouponMapping) to the collection in $obj2 (SalesFlatOrder)
                $obj2->addCouponMapping($obj1);

            } // if joined row is not null

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
        return Propel::getDatabaseMap(CouponMappingPeer::DATABASE_NAME)->getTable(CouponMappingPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCouponMappingPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCouponMappingPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CouponMappingTableMap());
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
        return CouponMappingPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CouponMapping or Criteria object.
     *
     * @param      mixed $values Criteria or CouponMapping object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CouponMappingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CouponMapping object
        }

        if ($criteria->containsKey(CouponMappingPeer::MAPPING_ID) && $criteria->keyContainsValue(CouponMappingPeer::MAPPING_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CouponMappingPeer::MAPPING_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CouponMappingPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CouponMapping or Criteria object.
     *
     * @param      mixed $values Criteria or CouponMapping object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CouponMappingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CouponMappingPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CouponMappingPeer::MAPPING_ID);
            $value = $criteria->remove(CouponMappingPeer::MAPPING_ID);
            if ($value) {
                $selectCriteria->add(CouponMappingPeer::MAPPING_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CouponMappingPeer::TABLE_NAME);
            }

        } else { // $values is CouponMapping object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CouponMappingPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the coupon_mapping table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CouponMappingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CouponMappingPeer::TABLE_NAME, $con, CouponMappingPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CouponMappingPeer::clearInstancePool();
            CouponMappingPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CouponMapping or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CouponMapping object or primary key or array of primary keys
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
            $con = Propel::getConnection(CouponMappingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CouponMappingPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CouponMapping) { // it's a model object
            // invalidate the cache for this single object
            CouponMappingPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CouponMappingPeer::DATABASE_NAME);
            $criteria->add(CouponMappingPeer::MAPPING_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CouponMappingPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CouponMappingPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CouponMappingPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CouponMapping object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param CouponMapping $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CouponMappingPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CouponMappingPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CouponMappingPeer::DATABASE_NAME, CouponMappingPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CouponMapping
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CouponMappingPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CouponMappingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CouponMappingPeer::DATABASE_NAME);
        $criteria->add(CouponMappingPeer::MAPPING_ID, $pk);

        $v = CouponMappingPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CouponMapping[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CouponMappingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CouponMappingPeer::DATABASE_NAME);
            $criteria->add(CouponMappingPeer::MAPPING_ID, $pks, Criteria::IN);
            $objs = CouponMappingPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCouponMappingPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCouponMappingPeer::buildTableMap();

