<?php


/**
 * Base static class for performing query and update operations on the 'qbc_migration_order' table.
 *
 *
 *
 * @package propel.generator.atmadmin.om
 */
abstract class BaseQbcMigrationOrderPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'atmadmin';

    /** the table name for this class */
    const TABLE_NAME = 'qbc_migration_order';

    /** the related Propel class for this table */
    const OM_CLASS = 'QbcMigrationOrder';

    /** the related TableMap class for this table */
    const TM_CLASS = 'QbcMigrationOrderTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the id field */
    const ID = 'qbc_migration_order.id';

    /** the column name for the ammount field */
    const AMMOUNT = 'qbc_migration_order.ammount';

    /** the column name for the credits_used field */
    const CREDITS_USED = 'qbc_migration_order.credits_used';

    /** the column name for the netto_ammount field */
    const NETTO_AMMOUNT = 'qbc_migration_order.netto_ammount';

    /** the column name for the status field */
    const STATUS = 'qbc_migration_order.status';

    /** the column name for the payment_method field */
    const PAYMENT_METHOD = 'qbc_migration_order.payment_method';

    /** the column name for the created_datetime field */
    const CREATED_DATETIME = 'qbc_migration_order.created_datetime';

    /** the column name for the document_number field */
    const DOCUMENT_NUMBER = 'qbc_migration_order.document_number';

    /** the column name for the code field */
    const CODE = 'qbc_migration_order.code';

    /** the column name for the coupon_status field */
    const COUPON_STATUS = 'qbc_migration_order.coupon_status';

    /** the column name for the campaign_sku field */
    const CAMPAIGN_SKU = 'qbc_migration_order.campaign_sku';

    /** the column name for the customer_id field */
    const CUSTOMER_ID = 'qbc_migration_order.customer_id';

    /** the column name for the redeemed field */
    const REDEEMED = 'qbc_migration_order.redeemed';

    /** the column name for the expired_datetime field */
    const EXPIRED_DATETIME = 'qbc_migration_order.expired_datetime';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of QbcMigrationOrder objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array QbcMigrationOrder[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. QbcMigrationOrderPeer::$fieldNames[QbcMigrationOrderPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Ammount', 'CreditsUsed', 'NettoAmmount', 'Status', 'PaymentMethod', 'CreatedDatetime', 'DocumentNumber', 'Code', 'CouponStatus', 'CampaignSku', 'CustomerId', 'Redeemed', 'ExpiredDatetime', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'ammount', 'creditsUsed', 'nettoAmmount', 'status', 'paymentMethod', 'createdDatetime', 'documentNumber', 'code', 'couponStatus', 'campaignSku', 'customerId', 'redeemed', 'expiredDatetime', ),
        BasePeer::TYPE_COLNAME => array (QbcMigrationOrderPeer::ID, QbcMigrationOrderPeer::AMMOUNT, QbcMigrationOrderPeer::CREDITS_USED, QbcMigrationOrderPeer::NETTO_AMMOUNT, QbcMigrationOrderPeer::STATUS, QbcMigrationOrderPeer::PAYMENT_METHOD, QbcMigrationOrderPeer::CREATED_DATETIME, QbcMigrationOrderPeer::DOCUMENT_NUMBER, QbcMigrationOrderPeer::CODE, QbcMigrationOrderPeer::COUPON_STATUS, QbcMigrationOrderPeer::CAMPAIGN_SKU, QbcMigrationOrderPeer::CUSTOMER_ID, QbcMigrationOrderPeer::REDEEMED, QbcMigrationOrderPeer::EXPIRED_DATETIME, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'AMMOUNT', 'CREDITS_USED', 'NETTO_AMMOUNT', 'STATUS', 'PAYMENT_METHOD', 'CREATED_DATETIME', 'DOCUMENT_NUMBER', 'CODE', 'COUPON_STATUS', 'CAMPAIGN_SKU', 'CUSTOMER_ID', 'REDEEMED', 'EXPIRED_DATETIME', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'ammount', 'credits_used', 'netto_ammount', 'status', 'payment_method', 'created_datetime', 'document_number', 'code', 'coupon_status', 'campaign_sku', 'customer_id', 'redeemed', 'expired_datetime', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. QbcMigrationOrderPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Ammount' => 1, 'CreditsUsed' => 2, 'NettoAmmount' => 3, 'Status' => 4, 'PaymentMethod' => 5, 'CreatedDatetime' => 6, 'DocumentNumber' => 7, 'Code' => 8, 'CouponStatus' => 9, 'CampaignSku' => 10, 'CustomerId' => 11, 'Redeemed' => 12, 'ExpiredDatetime' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'ammount' => 1, 'creditsUsed' => 2, 'nettoAmmount' => 3, 'status' => 4, 'paymentMethod' => 5, 'createdDatetime' => 6, 'documentNumber' => 7, 'code' => 8, 'couponStatus' => 9, 'campaignSku' => 10, 'customerId' => 11, 'redeemed' => 12, 'expiredDatetime' => 13, ),
        BasePeer::TYPE_COLNAME => array (QbcMigrationOrderPeer::ID => 0, QbcMigrationOrderPeer::AMMOUNT => 1, QbcMigrationOrderPeer::CREDITS_USED => 2, QbcMigrationOrderPeer::NETTO_AMMOUNT => 3, QbcMigrationOrderPeer::STATUS => 4, QbcMigrationOrderPeer::PAYMENT_METHOD => 5, QbcMigrationOrderPeer::CREATED_DATETIME => 6, QbcMigrationOrderPeer::DOCUMENT_NUMBER => 7, QbcMigrationOrderPeer::CODE => 8, QbcMigrationOrderPeer::COUPON_STATUS => 9, QbcMigrationOrderPeer::CAMPAIGN_SKU => 10, QbcMigrationOrderPeer::CUSTOMER_ID => 11, QbcMigrationOrderPeer::REDEEMED => 12, QbcMigrationOrderPeer::EXPIRED_DATETIME => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'AMMOUNT' => 1, 'CREDITS_USED' => 2, 'NETTO_AMMOUNT' => 3, 'STATUS' => 4, 'PAYMENT_METHOD' => 5, 'CREATED_DATETIME' => 6, 'DOCUMENT_NUMBER' => 7, 'CODE' => 8, 'COUPON_STATUS' => 9, 'CAMPAIGN_SKU' => 10, 'CUSTOMER_ID' => 11, 'REDEEMED' => 12, 'EXPIRED_DATETIME' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'ammount' => 1, 'credits_used' => 2, 'netto_ammount' => 3, 'status' => 4, 'payment_method' => 5, 'created_datetime' => 6, 'document_number' => 7, 'code' => 8, 'coupon_status' => 9, 'campaign_sku' => 10, 'customer_id' => 11, 'redeemed' => 12, 'expired_datetime' => 13, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $toNames = QbcMigrationOrderPeer::getFieldNames($toType);
        $key = isset(QbcMigrationOrderPeer::$fieldKeys[$fromType][$name]) ? QbcMigrationOrderPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(QbcMigrationOrderPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, QbcMigrationOrderPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return QbcMigrationOrderPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. QbcMigrationOrderPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(QbcMigrationOrderPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(QbcMigrationOrderPeer::ID);
            $criteria->addSelectColumn(QbcMigrationOrderPeer::AMMOUNT);
            $criteria->addSelectColumn(QbcMigrationOrderPeer::CREDITS_USED);
            $criteria->addSelectColumn(QbcMigrationOrderPeer::NETTO_AMMOUNT);
            $criteria->addSelectColumn(QbcMigrationOrderPeer::STATUS);
            $criteria->addSelectColumn(QbcMigrationOrderPeer::PAYMENT_METHOD);
            $criteria->addSelectColumn(QbcMigrationOrderPeer::CREATED_DATETIME);
            $criteria->addSelectColumn(QbcMigrationOrderPeer::DOCUMENT_NUMBER);
            $criteria->addSelectColumn(QbcMigrationOrderPeer::CODE);
            $criteria->addSelectColumn(QbcMigrationOrderPeer::COUPON_STATUS);
            $criteria->addSelectColumn(QbcMigrationOrderPeer::CAMPAIGN_SKU);
            $criteria->addSelectColumn(QbcMigrationOrderPeer::CUSTOMER_ID);
            $criteria->addSelectColumn(QbcMigrationOrderPeer::REDEEMED);
            $criteria->addSelectColumn(QbcMigrationOrderPeer::EXPIRED_DATETIME);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.ammount');
            $criteria->addSelectColumn($alias . '.credits_used');
            $criteria->addSelectColumn($alias . '.netto_ammount');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.payment_method');
            $criteria->addSelectColumn($alias . '.created_datetime');
            $criteria->addSelectColumn($alias . '.document_number');
            $criteria->addSelectColumn($alias . '.code');
            $criteria->addSelectColumn($alias . '.coupon_status');
            $criteria->addSelectColumn($alias . '.campaign_sku');
            $criteria->addSelectColumn($alias . '.customer_id');
            $criteria->addSelectColumn($alias . '.redeemed');
            $criteria->addSelectColumn($alias . '.expired_datetime');
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
        $criteria->setPrimaryTableName(QbcMigrationOrderPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            QbcMigrationOrderPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(QbcMigrationOrderPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(QbcMigrationOrderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return QbcMigrationOrder
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = QbcMigrationOrderPeer::doSelect($critcopy, $con);
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
        return QbcMigrationOrderPeer::populateObjects(QbcMigrationOrderPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(QbcMigrationOrderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            QbcMigrationOrderPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(QbcMigrationOrderPeer::DATABASE_NAME);

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
     * @param QbcMigrationOrder $obj A QbcMigrationOrder object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            QbcMigrationOrderPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A QbcMigrationOrder object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof QbcMigrationOrder) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or QbcMigrationOrder object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(QbcMigrationOrderPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return QbcMigrationOrder Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(QbcMigrationOrderPeer::$instances[$key])) {
                return QbcMigrationOrderPeer::$instances[$key];
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
        foreach (QbcMigrationOrderPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        QbcMigrationOrderPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to qbc_migration_order
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
        $cls = QbcMigrationOrderPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = QbcMigrationOrderPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = QbcMigrationOrderPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                QbcMigrationOrderPeer::addInstanceToPool($obj, $key);
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
     * @return array (QbcMigrationOrder object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = QbcMigrationOrderPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = QbcMigrationOrderPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + QbcMigrationOrderPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = QbcMigrationOrderPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            QbcMigrationOrderPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        return Propel::getDatabaseMap(QbcMigrationOrderPeer::DATABASE_NAME)->getTable(QbcMigrationOrderPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseQbcMigrationOrderPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseQbcMigrationOrderPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \QbcMigrationOrderTableMap());
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
        return QbcMigrationOrderPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a QbcMigrationOrder or Criteria object.
     *
     * @param      mixed $values Criteria or QbcMigrationOrder object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcMigrationOrderPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from QbcMigrationOrder object
        }

        if ($criteria->containsKey(QbcMigrationOrderPeer::ID) && $criteria->keyContainsValue(QbcMigrationOrderPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.QbcMigrationOrderPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(QbcMigrationOrderPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a QbcMigrationOrder or Criteria object.
     *
     * @param      mixed $values Criteria or QbcMigrationOrder object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcMigrationOrderPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(QbcMigrationOrderPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(QbcMigrationOrderPeer::ID);
            $value = $criteria->remove(QbcMigrationOrderPeer::ID);
            if ($value) {
                $selectCriteria->add(QbcMigrationOrderPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(QbcMigrationOrderPeer::TABLE_NAME);
            }

        } else { // $values is QbcMigrationOrder object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(QbcMigrationOrderPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the qbc_migration_order table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcMigrationOrderPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(QbcMigrationOrderPeer::TABLE_NAME, $con, QbcMigrationOrderPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            QbcMigrationOrderPeer::clearInstancePool();
            QbcMigrationOrderPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a QbcMigrationOrder or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or QbcMigrationOrder object or primary key or array of primary keys
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
            $con = Propel::getConnection(QbcMigrationOrderPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            QbcMigrationOrderPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof QbcMigrationOrder) { // it's a model object
            // invalidate the cache for this single object
            QbcMigrationOrderPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(QbcMigrationOrderPeer::DATABASE_NAME);
            $criteria->add(QbcMigrationOrderPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                QbcMigrationOrderPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(QbcMigrationOrderPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            QbcMigrationOrderPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given QbcMigrationOrder object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param QbcMigrationOrder $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(QbcMigrationOrderPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(QbcMigrationOrderPeer::TABLE_NAME);

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

        return BasePeer::doValidate(QbcMigrationOrderPeer::DATABASE_NAME, QbcMigrationOrderPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return QbcMigrationOrder
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = QbcMigrationOrderPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(QbcMigrationOrderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(QbcMigrationOrderPeer::DATABASE_NAME);
        $criteria->add(QbcMigrationOrderPeer::ID, $pk);

        $v = QbcMigrationOrderPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return QbcMigrationOrder[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcMigrationOrderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(QbcMigrationOrderPeer::DATABASE_NAME);
            $criteria->add(QbcMigrationOrderPeer::ID, $pks, Criteria::IN);
            $objs = QbcMigrationOrderPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseQbcMigrationOrderPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseQbcMigrationOrderPeer::buildTableMap();

