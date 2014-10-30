<?php


/**
 * Base static class for performing query and update operations on the 'qbc_sci_devolution' table.
 *
 *
 *
 * @package propel.generator.atmadmin.om
 */
abstract class BaseQbcSciDevolutionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'atmadmin';

    /** the table name for this class */
    const TABLE_NAME = 'qbc_sci_devolution';

    /** the related Propel class for this table */
    const OM_CLASS = 'QbcSciDevolution';

    /** the related TableMap class for this table */
    const TM_CLASS = 'QbcSciDevolutionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the id field */
    const ID = 'qbc_sci_devolution.id';

    /** the column name for the petition_id field */
    const PETITION_ID = 'qbc_sci_devolution.petition_id';

    /** the column name for the campaign_id field */
    const CAMPAIGN_ID = 'qbc_sci_devolution.campaign_id';

    /** the column name for the sell_document field */
    const SELL_DOCUMENT = 'qbc_sci_devolution.sell_document';

    /** the column name for the order_item field */
    const ORDER_ITEM = 'qbc_sci_devolution.order_item';

    /** the column name for the order_id field */
    const ORDER_ID = 'qbc_sci_devolution.order_id';

    /** the column name for the credits field */
    const CREDITS = 'qbc_sci_devolution.credits';

    /** the column name for the cash field */
    const CASH = 'qbc_sci_devolution.cash';

    /** the column name for the coupon field */
    const COUPON = 'qbc_sci_devolution.coupon';

    /** the column name for the unit field */
    const UNIT = 'qbc_sci_devolution.unit';

    /** the column name for the processed field */
    const PROCESSED = 'qbc_sci_devolution.processed';

    /** the column name for the start_date field */
    const START_DATE = 'qbc_sci_devolution.start_date';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of QbcSciDevolution objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array QbcSciDevolution[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. QbcSciDevolutionPeer::$fieldNames[QbcSciDevolutionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'PetitionId', 'CampaignId', 'SellDocument', 'OrderItem', 'OrderId', 'Credits', 'Cash', 'Coupon', 'Unit', 'Processed', 'StartDate', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'petitionId', 'campaignId', 'sellDocument', 'orderItem', 'orderId', 'credits', 'cash', 'coupon', 'unit', 'processed', 'startDate', ),
        BasePeer::TYPE_COLNAME => array (QbcSciDevolutionPeer::ID, QbcSciDevolutionPeer::PETITION_ID, QbcSciDevolutionPeer::CAMPAIGN_ID, QbcSciDevolutionPeer::SELL_DOCUMENT, QbcSciDevolutionPeer::ORDER_ITEM, QbcSciDevolutionPeer::ORDER_ID, QbcSciDevolutionPeer::CREDITS, QbcSciDevolutionPeer::CASH, QbcSciDevolutionPeer::COUPON, QbcSciDevolutionPeer::UNIT, QbcSciDevolutionPeer::PROCESSED, QbcSciDevolutionPeer::START_DATE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'PETITION_ID', 'CAMPAIGN_ID', 'SELL_DOCUMENT', 'ORDER_ITEM', 'ORDER_ID', 'CREDITS', 'CASH', 'COUPON', 'UNIT', 'PROCESSED', 'START_DATE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'petition_id', 'campaign_id', 'sell_document', 'order_item', 'order_id', 'credits', 'cash', 'coupon', 'unit', 'processed', 'start_date', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. QbcSciDevolutionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'PetitionId' => 1, 'CampaignId' => 2, 'SellDocument' => 3, 'OrderItem' => 4, 'OrderId' => 5, 'Credits' => 6, 'Cash' => 7, 'Coupon' => 8, 'Unit' => 9, 'Processed' => 10, 'StartDate' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'petitionId' => 1, 'campaignId' => 2, 'sellDocument' => 3, 'orderItem' => 4, 'orderId' => 5, 'credits' => 6, 'cash' => 7, 'coupon' => 8, 'unit' => 9, 'processed' => 10, 'startDate' => 11, ),
        BasePeer::TYPE_COLNAME => array (QbcSciDevolutionPeer::ID => 0, QbcSciDevolutionPeer::PETITION_ID => 1, QbcSciDevolutionPeer::CAMPAIGN_ID => 2, QbcSciDevolutionPeer::SELL_DOCUMENT => 3, QbcSciDevolutionPeer::ORDER_ITEM => 4, QbcSciDevolutionPeer::ORDER_ID => 5, QbcSciDevolutionPeer::CREDITS => 6, QbcSciDevolutionPeer::CASH => 7, QbcSciDevolutionPeer::COUPON => 8, QbcSciDevolutionPeer::UNIT => 9, QbcSciDevolutionPeer::PROCESSED => 10, QbcSciDevolutionPeer::START_DATE => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'PETITION_ID' => 1, 'CAMPAIGN_ID' => 2, 'SELL_DOCUMENT' => 3, 'ORDER_ITEM' => 4, 'ORDER_ID' => 5, 'CREDITS' => 6, 'CASH' => 7, 'COUPON' => 8, 'UNIT' => 9, 'PROCESSED' => 10, 'START_DATE' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'petition_id' => 1, 'campaign_id' => 2, 'sell_document' => 3, 'order_item' => 4, 'order_id' => 5, 'credits' => 6, 'cash' => 7, 'coupon' => 8, 'unit' => 9, 'processed' => 10, 'start_date' => 11, ),
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
        $toNames = QbcSciDevolutionPeer::getFieldNames($toType);
        $key = isset(QbcSciDevolutionPeer::$fieldKeys[$fromType][$name]) ? QbcSciDevolutionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(QbcSciDevolutionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, QbcSciDevolutionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return QbcSciDevolutionPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. QbcSciDevolutionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(QbcSciDevolutionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(QbcSciDevolutionPeer::ID);
            $criteria->addSelectColumn(QbcSciDevolutionPeer::PETITION_ID);
            $criteria->addSelectColumn(QbcSciDevolutionPeer::CAMPAIGN_ID);
            $criteria->addSelectColumn(QbcSciDevolutionPeer::SELL_DOCUMENT);
            $criteria->addSelectColumn(QbcSciDevolutionPeer::ORDER_ITEM);
            $criteria->addSelectColumn(QbcSciDevolutionPeer::ORDER_ID);
            $criteria->addSelectColumn(QbcSciDevolutionPeer::CREDITS);
            $criteria->addSelectColumn(QbcSciDevolutionPeer::CASH);
            $criteria->addSelectColumn(QbcSciDevolutionPeer::COUPON);
            $criteria->addSelectColumn(QbcSciDevolutionPeer::UNIT);
            $criteria->addSelectColumn(QbcSciDevolutionPeer::PROCESSED);
            $criteria->addSelectColumn(QbcSciDevolutionPeer::START_DATE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.petition_id');
            $criteria->addSelectColumn($alias . '.campaign_id');
            $criteria->addSelectColumn($alias . '.sell_document');
            $criteria->addSelectColumn($alias . '.order_item');
            $criteria->addSelectColumn($alias . '.order_id');
            $criteria->addSelectColumn($alias . '.credits');
            $criteria->addSelectColumn($alias . '.cash');
            $criteria->addSelectColumn($alias . '.coupon');
            $criteria->addSelectColumn($alias . '.unit');
            $criteria->addSelectColumn($alias . '.processed');
            $criteria->addSelectColumn($alias . '.start_date');
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
        $criteria->setPrimaryTableName(QbcSciDevolutionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            QbcSciDevolutionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(QbcSciDevolutionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(QbcSciDevolutionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return QbcSciDevolution
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = QbcSciDevolutionPeer::doSelect($critcopy, $con);
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
        return QbcSciDevolutionPeer::populateObjects(QbcSciDevolutionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(QbcSciDevolutionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            QbcSciDevolutionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(QbcSciDevolutionPeer::DATABASE_NAME);

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
     * @param QbcSciDevolution $obj A QbcSciDevolution object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            QbcSciDevolutionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A QbcSciDevolution object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof QbcSciDevolution) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or QbcSciDevolution object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(QbcSciDevolutionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return QbcSciDevolution Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(QbcSciDevolutionPeer::$instances[$key])) {
                return QbcSciDevolutionPeer::$instances[$key];
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
        foreach (QbcSciDevolutionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        QbcSciDevolutionPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to qbc_sci_devolution
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
        $cls = QbcSciDevolutionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = QbcSciDevolutionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = QbcSciDevolutionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                QbcSciDevolutionPeer::addInstanceToPool($obj, $key);
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
     * @return array (QbcSciDevolution object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = QbcSciDevolutionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = QbcSciDevolutionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + QbcSciDevolutionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = QbcSciDevolutionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            QbcSciDevolutionPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(QbcSciDevolutionPeer::DATABASE_NAME)->getTable(QbcSciDevolutionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseQbcSciDevolutionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseQbcSciDevolutionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \QbcSciDevolutionTableMap());
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
        return QbcSciDevolutionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a QbcSciDevolution or Criteria object.
     *
     * @param      mixed $values Criteria or QbcSciDevolution object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcSciDevolutionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from QbcSciDevolution object
        }

        if ($criteria->containsKey(QbcSciDevolutionPeer::ID) && $criteria->keyContainsValue(QbcSciDevolutionPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.QbcSciDevolutionPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(QbcSciDevolutionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a QbcSciDevolution or Criteria object.
     *
     * @param      mixed $values Criteria or QbcSciDevolution object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcSciDevolutionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(QbcSciDevolutionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(QbcSciDevolutionPeer::ID);
            $value = $criteria->remove(QbcSciDevolutionPeer::ID);
            if ($value) {
                $selectCriteria->add(QbcSciDevolutionPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(QbcSciDevolutionPeer::TABLE_NAME);
            }

        } else { // $values is QbcSciDevolution object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(QbcSciDevolutionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the qbc_sci_devolution table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcSciDevolutionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(QbcSciDevolutionPeer::TABLE_NAME, $con, QbcSciDevolutionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            QbcSciDevolutionPeer::clearInstancePool();
            QbcSciDevolutionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a QbcSciDevolution or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or QbcSciDevolution object or primary key or array of primary keys
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
            $con = Propel::getConnection(QbcSciDevolutionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            QbcSciDevolutionPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof QbcSciDevolution) { // it's a model object
            // invalidate the cache for this single object
            QbcSciDevolutionPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(QbcSciDevolutionPeer::DATABASE_NAME);
            $criteria->add(QbcSciDevolutionPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                QbcSciDevolutionPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(QbcSciDevolutionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            QbcSciDevolutionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given QbcSciDevolution object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param QbcSciDevolution $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(QbcSciDevolutionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(QbcSciDevolutionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(QbcSciDevolutionPeer::DATABASE_NAME, QbcSciDevolutionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return QbcSciDevolution
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = QbcSciDevolutionPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(QbcSciDevolutionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(QbcSciDevolutionPeer::DATABASE_NAME);
        $criteria->add(QbcSciDevolutionPeer::ID, $pk);

        $v = QbcSciDevolutionPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return QbcSciDevolution[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcSciDevolutionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(QbcSciDevolutionPeer::DATABASE_NAME);
            $criteria->add(QbcSciDevolutionPeer::ID, $pks, Criteria::IN);
            $objs = QbcSciDevolutionPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseQbcSciDevolutionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseQbcSciDevolutionPeer::buildTableMap();

