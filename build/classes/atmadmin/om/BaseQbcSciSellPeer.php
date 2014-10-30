<?php


/**
 * Base static class for performing query and update operations on the 'qbc_sci_sell' table.
 *
 *
 *
 * @package propel.generator.atmadmin.om
 */
abstract class BaseQbcSciSellPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'atmadmin';

    /** the table name for this class */
    const TABLE_NAME = 'qbc_sci_sell';

    /** the related Propel class for this table */
    const OM_CLASS = 'QbcSciSell';

    /** the related TableMap class for this table */
    const TM_CLASS = 'QbcSciSellTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the id field */
    const ID = 'qbc_sci_sell.id';

    /** the column name for the petition_id field */
    const PETITION_ID = 'qbc_sci_sell.petition_id';

    /** the column name for the order_id field */
    const ORDER_ID = 'qbc_sci_sell.order_id';

    /** the column name for the pos_number field */
    const POS_NUMBER = 'qbc_sci_sell.pos_number';

    /** the column name for the pos_type field */
    const POS_TYPE = 'qbc_sci_sell.pos_type';

    /** the column name for the item_id field */
    const ITEM_ID = 'qbc_sci_sell.item_id';

    /** the column name for the giftcard field */
    const GIFTCARD = 'qbc_sci_sell.giftcard';

    /** the column name for the processed field */
    const PROCESSED = 'qbc_sci_sell.processed';

    /** the column name for the unit field */
    const UNIT = 'qbc_sci_sell.unit';

    /** the column name for the rewards_used field */
    const REWARDS_USED = 'qbc_sci_sell.rewards_used';

    /** the column name for the is_cancell field */
    const IS_CANCELL = 'qbc_sci_sell.is_cancell';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of QbcSciSell objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array QbcSciSell[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. QbcSciSellPeer::$fieldNames[QbcSciSellPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'PetitionId', 'OrderId', 'PosNumber', 'PosType', 'ItemId', 'Giftcard', 'Processed', 'Unit', 'RewardsUsed', 'IsCancell', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'petitionId', 'orderId', 'posNumber', 'posType', 'itemId', 'giftcard', 'processed', 'unit', 'rewardsUsed', 'isCancell', ),
        BasePeer::TYPE_COLNAME => array (QbcSciSellPeer::ID, QbcSciSellPeer::PETITION_ID, QbcSciSellPeer::ORDER_ID, QbcSciSellPeer::POS_NUMBER, QbcSciSellPeer::POS_TYPE, QbcSciSellPeer::ITEM_ID, QbcSciSellPeer::GIFTCARD, QbcSciSellPeer::PROCESSED, QbcSciSellPeer::UNIT, QbcSciSellPeer::REWARDS_USED, QbcSciSellPeer::IS_CANCELL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'PETITION_ID', 'ORDER_ID', 'POS_NUMBER', 'POS_TYPE', 'ITEM_ID', 'GIFTCARD', 'PROCESSED', 'UNIT', 'REWARDS_USED', 'IS_CANCELL', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'petition_id', 'order_id', 'pos_number', 'pos_type', 'item_id', 'giftcard', 'processed', 'unit', 'rewards_used', 'is_cancell', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. QbcSciSellPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'PetitionId' => 1, 'OrderId' => 2, 'PosNumber' => 3, 'PosType' => 4, 'ItemId' => 5, 'Giftcard' => 6, 'Processed' => 7, 'Unit' => 8, 'RewardsUsed' => 9, 'IsCancell' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'petitionId' => 1, 'orderId' => 2, 'posNumber' => 3, 'posType' => 4, 'itemId' => 5, 'giftcard' => 6, 'processed' => 7, 'unit' => 8, 'rewardsUsed' => 9, 'isCancell' => 10, ),
        BasePeer::TYPE_COLNAME => array (QbcSciSellPeer::ID => 0, QbcSciSellPeer::PETITION_ID => 1, QbcSciSellPeer::ORDER_ID => 2, QbcSciSellPeer::POS_NUMBER => 3, QbcSciSellPeer::POS_TYPE => 4, QbcSciSellPeer::ITEM_ID => 5, QbcSciSellPeer::GIFTCARD => 6, QbcSciSellPeer::PROCESSED => 7, QbcSciSellPeer::UNIT => 8, QbcSciSellPeer::REWARDS_USED => 9, QbcSciSellPeer::IS_CANCELL => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'PETITION_ID' => 1, 'ORDER_ID' => 2, 'POS_NUMBER' => 3, 'POS_TYPE' => 4, 'ITEM_ID' => 5, 'GIFTCARD' => 6, 'PROCESSED' => 7, 'UNIT' => 8, 'REWARDS_USED' => 9, 'IS_CANCELL' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'petition_id' => 1, 'order_id' => 2, 'pos_number' => 3, 'pos_type' => 4, 'item_id' => 5, 'giftcard' => 6, 'processed' => 7, 'unit' => 8, 'rewards_used' => 9, 'is_cancell' => 10, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
        $toNames = QbcSciSellPeer::getFieldNames($toType);
        $key = isset(QbcSciSellPeer::$fieldKeys[$fromType][$name]) ? QbcSciSellPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(QbcSciSellPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, QbcSciSellPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return QbcSciSellPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. QbcSciSellPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(QbcSciSellPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(QbcSciSellPeer::ID);
            $criteria->addSelectColumn(QbcSciSellPeer::PETITION_ID);
            $criteria->addSelectColumn(QbcSciSellPeer::ORDER_ID);
            $criteria->addSelectColumn(QbcSciSellPeer::POS_NUMBER);
            $criteria->addSelectColumn(QbcSciSellPeer::POS_TYPE);
            $criteria->addSelectColumn(QbcSciSellPeer::ITEM_ID);
            $criteria->addSelectColumn(QbcSciSellPeer::GIFTCARD);
            $criteria->addSelectColumn(QbcSciSellPeer::PROCESSED);
            $criteria->addSelectColumn(QbcSciSellPeer::UNIT);
            $criteria->addSelectColumn(QbcSciSellPeer::REWARDS_USED);
            $criteria->addSelectColumn(QbcSciSellPeer::IS_CANCELL);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.petition_id');
            $criteria->addSelectColumn($alias . '.order_id');
            $criteria->addSelectColumn($alias . '.pos_number');
            $criteria->addSelectColumn($alias . '.pos_type');
            $criteria->addSelectColumn($alias . '.item_id');
            $criteria->addSelectColumn($alias . '.giftcard');
            $criteria->addSelectColumn($alias . '.processed');
            $criteria->addSelectColumn($alias . '.unit');
            $criteria->addSelectColumn($alias . '.rewards_used');
            $criteria->addSelectColumn($alias . '.is_cancell');
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
        $criteria->setPrimaryTableName(QbcSciSellPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            QbcSciSellPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(QbcSciSellPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(QbcSciSellPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return QbcSciSell
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = QbcSciSellPeer::doSelect($critcopy, $con);
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
        return QbcSciSellPeer::populateObjects(QbcSciSellPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(QbcSciSellPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            QbcSciSellPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(QbcSciSellPeer::DATABASE_NAME);

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
     * @param QbcSciSell $obj A QbcSciSell object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            QbcSciSellPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A QbcSciSell object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof QbcSciSell) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or QbcSciSell object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(QbcSciSellPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return QbcSciSell Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(QbcSciSellPeer::$instances[$key])) {
                return QbcSciSellPeer::$instances[$key];
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
        foreach (QbcSciSellPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        QbcSciSellPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to qbc_sci_sell
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
        $cls = QbcSciSellPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = QbcSciSellPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = QbcSciSellPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                QbcSciSellPeer::addInstanceToPool($obj, $key);
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
     * @return array (QbcSciSell object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = QbcSciSellPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = QbcSciSellPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + QbcSciSellPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = QbcSciSellPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            QbcSciSellPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(QbcSciSellPeer::DATABASE_NAME)->getTable(QbcSciSellPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseQbcSciSellPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseQbcSciSellPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \QbcSciSellTableMap());
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
        return QbcSciSellPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a QbcSciSell or Criteria object.
     *
     * @param      mixed $values Criteria or QbcSciSell object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcSciSellPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from QbcSciSell object
        }

        if ($criteria->containsKey(QbcSciSellPeer::ID) && $criteria->keyContainsValue(QbcSciSellPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.QbcSciSellPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(QbcSciSellPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a QbcSciSell or Criteria object.
     *
     * @param      mixed $values Criteria or QbcSciSell object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcSciSellPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(QbcSciSellPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(QbcSciSellPeer::ID);
            $value = $criteria->remove(QbcSciSellPeer::ID);
            if ($value) {
                $selectCriteria->add(QbcSciSellPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(QbcSciSellPeer::TABLE_NAME);
            }

        } else { // $values is QbcSciSell object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(QbcSciSellPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the qbc_sci_sell table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcSciSellPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(QbcSciSellPeer::TABLE_NAME, $con, QbcSciSellPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            QbcSciSellPeer::clearInstancePool();
            QbcSciSellPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a QbcSciSell or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or QbcSciSell object or primary key or array of primary keys
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
            $con = Propel::getConnection(QbcSciSellPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            QbcSciSellPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof QbcSciSell) { // it's a model object
            // invalidate the cache for this single object
            QbcSciSellPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(QbcSciSellPeer::DATABASE_NAME);
            $criteria->add(QbcSciSellPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                QbcSciSellPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(QbcSciSellPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            QbcSciSellPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given QbcSciSell object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param QbcSciSell $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(QbcSciSellPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(QbcSciSellPeer::TABLE_NAME);

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

        return BasePeer::doValidate(QbcSciSellPeer::DATABASE_NAME, QbcSciSellPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return QbcSciSell
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = QbcSciSellPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(QbcSciSellPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(QbcSciSellPeer::DATABASE_NAME);
        $criteria->add(QbcSciSellPeer::ID, $pk);

        $v = QbcSciSellPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return QbcSciSell[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcSciSellPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(QbcSciSellPeer::DATABASE_NAME);
            $criteria->add(QbcSciSellPeer::ID, $pks, Criteria::IN);
            $objs = QbcSciSellPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseQbcSciSellPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseQbcSciSellPeer::buildTableMap();

