<?php


/**
 * Base static class for performing query and update operations on the 'qbc_sci_closure' table.
 *
 *
 *
 * @package propel.generator.atmadmin.om
 */
abstract class BaseQbcSciClosurePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'atmadmin';

    /** the table name for this class */
    const TABLE_NAME = 'qbc_sci_closure';

    /** the related Propel class for this table */
    const OM_CLASS = 'QbcSciClosure';

    /** the related TableMap class for this table */
    const TM_CLASS = 'QbcSciClosureTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the Id field */
    const ID = 'qbc_sci_closure.Id';

    /** the column name for the nit_aliado field */
    const NIT_ALIADO = 'qbc_sci_closure.nit_aliado';

    /** the column name for the campaign_id field */
    const CAMPAIGN_ID = 'qbc_sci_closure.campaign_id';

    /** the column name for the sell_doc field */
    const SELL_DOC = 'qbc_sci_closure.sell_doc';

    /** the column name for the sell_date field */
    const SELL_DATE = 'qbc_sci_closure.sell_date';

    /** the column name for the sell_value field */
    const SELL_VALUE = 'qbc_sci_closure.sell_value';

    /** the column name for the dev_doc field */
    const DEV_DOC = 'qbc_sci_closure.dev_doc';

    /** the column name for the dev_date field */
    const DEV_DATE = 'qbc_sci_closure.dev_date';

    /** the column name for the dev_value field */
    const DEV_VALUE = 'qbc_sci_closure.dev_value';

    /** the column name for the pay_id field */
    const PAY_ID = 'qbc_sci_closure.pay_id';

    /** the column name for the porcentaje_comision field */
    const PORCENTAJE_COMISION = 'qbc_sci_closure.porcentaje_comision';

    /** the column name for the porcentaje_iva field */
    const PORCENTAJE_IVA = 'qbc_sci_closure.porcentaje_iva';

    /** the column name for the status field */
    const STATUS = 'qbc_sci_closure.status';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of QbcSciClosure objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array QbcSciClosure[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. QbcSciClosurePeer::$fieldNames[QbcSciClosurePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'NitAliado', 'CampaignId', 'SellDoc', 'SellDate', 'SellValue', 'DevDoc', 'DevDate', 'DevValue', 'PayId', 'PorcentajeComision', 'PorcentajeIva', 'Status', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'nitAliado', 'campaignId', 'sellDoc', 'sellDate', 'sellValue', 'devDoc', 'devDate', 'devValue', 'payId', 'porcentajeComision', 'porcentajeIva', 'status', ),
        BasePeer::TYPE_COLNAME => array (QbcSciClosurePeer::ID, QbcSciClosurePeer::NIT_ALIADO, QbcSciClosurePeer::CAMPAIGN_ID, QbcSciClosurePeer::SELL_DOC, QbcSciClosurePeer::SELL_DATE, QbcSciClosurePeer::SELL_VALUE, QbcSciClosurePeer::DEV_DOC, QbcSciClosurePeer::DEV_DATE, QbcSciClosurePeer::DEV_VALUE, QbcSciClosurePeer::PAY_ID, QbcSciClosurePeer::PORCENTAJE_COMISION, QbcSciClosurePeer::PORCENTAJE_IVA, QbcSciClosurePeer::STATUS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'NIT_ALIADO', 'CAMPAIGN_ID', 'SELL_DOC', 'SELL_DATE', 'SELL_VALUE', 'DEV_DOC', 'DEV_DATE', 'DEV_VALUE', 'PAY_ID', 'PORCENTAJE_COMISION', 'PORCENTAJE_IVA', 'STATUS', ),
        BasePeer::TYPE_FIELDNAME => array ('Id', 'nit_aliado', 'campaign_id', 'sell_doc', 'sell_date', 'sell_value', 'dev_doc', 'dev_date', 'dev_value', 'pay_id', 'porcentaje_comision', 'porcentaje_iva', 'status', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. QbcSciClosurePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'NitAliado' => 1, 'CampaignId' => 2, 'SellDoc' => 3, 'SellDate' => 4, 'SellValue' => 5, 'DevDoc' => 6, 'DevDate' => 7, 'DevValue' => 8, 'PayId' => 9, 'PorcentajeComision' => 10, 'PorcentajeIva' => 11, 'Status' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'nitAliado' => 1, 'campaignId' => 2, 'sellDoc' => 3, 'sellDate' => 4, 'sellValue' => 5, 'devDoc' => 6, 'devDate' => 7, 'devValue' => 8, 'payId' => 9, 'porcentajeComision' => 10, 'porcentajeIva' => 11, 'status' => 12, ),
        BasePeer::TYPE_COLNAME => array (QbcSciClosurePeer::ID => 0, QbcSciClosurePeer::NIT_ALIADO => 1, QbcSciClosurePeer::CAMPAIGN_ID => 2, QbcSciClosurePeer::SELL_DOC => 3, QbcSciClosurePeer::SELL_DATE => 4, QbcSciClosurePeer::SELL_VALUE => 5, QbcSciClosurePeer::DEV_DOC => 6, QbcSciClosurePeer::DEV_DATE => 7, QbcSciClosurePeer::DEV_VALUE => 8, QbcSciClosurePeer::PAY_ID => 9, QbcSciClosurePeer::PORCENTAJE_COMISION => 10, QbcSciClosurePeer::PORCENTAJE_IVA => 11, QbcSciClosurePeer::STATUS => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'NIT_ALIADO' => 1, 'CAMPAIGN_ID' => 2, 'SELL_DOC' => 3, 'SELL_DATE' => 4, 'SELL_VALUE' => 5, 'DEV_DOC' => 6, 'DEV_DATE' => 7, 'DEV_VALUE' => 8, 'PAY_ID' => 9, 'PORCENTAJE_COMISION' => 10, 'PORCENTAJE_IVA' => 11, 'STATUS' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('Id' => 0, 'nit_aliado' => 1, 'campaign_id' => 2, 'sell_doc' => 3, 'sell_date' => 4, 'sell_value' => 5, 'dev_doc' => 6, 'dev_date' => 7, 'dev_value' => 8, 'pay_id' => 9, 'porcentaje_comision' => 10, 'porcentaje_iva' => 11, 'status' => 12, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
        $toNames = QbcSciClosurePeer::getFieldNames($toType);
        $key = isset(QbcSciClosurePeer::$fieldKeys[$fromType][$name]) ? QbcSciClosurePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(QbcSciClosurePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, QbcSciClosurePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return QbcSciClosurePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. QbcSciClosurePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(QbcSciClosurePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(QbcSciClosurePeer::ID);
            $criteria->addSelectColumn(QbcSciClosurePeer::NIT_ALIADO);
            $criteria->addSelectColumn(QbcSciClosurePeer::CAMPAIGN_ID);
            $criteria->addSelectColumn(QbcSciClosurePeer::SELL_DOC);
            $criteria->addSelectColumn(QbcSciClosurePeer::SELL_DATE);
            $criteria->addSelectColumn(QbcSciClosurePeer::SELL_VALUE);
            $criteria->addSelectColumn(QbcSciClosurePeer::DEV_DOC);
            $criteria->addSelectColumn(QbcSciClosurePeer::DEV_DATE);
            $criteria->addSelectColumn(QbcSciClosurePeer::DEV_VALUE);
            $criteria->addSelectColumn(QbcSciClosurePeer::PAY_ID);
            $criteria->addSelectColumn(QbcSciClosurePeer::PORCENTAJE_COMISION);
            $criteria->addSelectColumn(QbcSciClosurePeer::PORCENTAJE_IVA);
            $criteria->addSelectColumn(QbcSciClosurePeer::STATUS);
        } else {
            $criteria->addSelectColumn($alias . '.Id');
            $criteria->addSelectColumn($alias . '.nit_aliado');
            $criteria->addSelectColumn($alias . '.campaign_id');
            $criteria->addSelectColumn($alias . '.sell_doc');
            $criteria->addSelectColumn($alias . '.sell_date');
            $criteria->addSelectColumn($alias . '.sell_value');
            $criteria->addSelectColumn($alias . '.dev_doc');
            $criteria->addSelectColumn($alias . '.dev_date');
            $criteria->addSelectColumn($alias . '.dev_value');
            $criteria->addSelectColumn($alias . '.pay_id');
            $criteria->addSelectColumn($alias . '.porcentaje_comision');
            $criteria->addSelectColumn($alias . '.porcentaje_iva');
            $criteria->addSelectColumn($alias . '.status');
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
        $criteria->setPrimaryTableName(QbcSciClosurePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            QbcSciClosurePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(QbcSciClosurePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(QbcSciClosurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return QbcSciClosure
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = QbcSciClosurePeer::doSelect($critcopy, $con);
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
        return QbcSciClosurePeer::populateObjects(QbcSciClosurePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(QbcSciClosurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            QbcSciClosurePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(QbcSciClosurePeer::DATABASE_NAME);

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
     * @param QbcSciClosure $obj A QbcSciClosure object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            QbcSciClosurePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A QbcSciClosure object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof QbcSciClosure) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or QbcSciClosure object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(QbcSciClosurePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return QbcSciClosure Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(QbcSciClosurePeer::$instances[$key])) {
                return QbcSciClosurePeer::$instances[$key];
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
        foreach (QbcSciClosurePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        QbcSciClosurePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to qbc_sci_closure
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
        $cls = QbcSciClosurePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = QbcSciClosurePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = QbcSciClosurePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                QbcSciClosurePeer::addInstanceToPool($obj, $key);
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
     * @return array (QbcSciClosure object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = QbcSciClosurePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = QbcSciClosurePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + QbcSciClosurePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = QbcSciClosurePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            QbcSciClosurePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(QbcSciClosurePeer::DATABASE_NAME)->getTable(QbcSciClosurePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseQbcSciClosurePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseQbcSciClosurePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \QbcSciClosureTableMap());
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
        return QbcSciClosurePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a QbcSciClosure or Criteria object.
     *
     * @param      mixed $values Criteria or QbcSciClosure object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcSciClosurePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from QbcSciClosure object
        }

        if ($criteria->containsKey(QbcSciClosurePeer::ID) && $criteria->keyContainsValue(QbcSciClosurePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.QbcSciClosurePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(QbcSciClosurePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a QbcSciClosure or Criteria object.
     *
     * @param      mixed $values Criteria or QbcSciClosure object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcSciClosurePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(QbcSciClosurePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(QbcSciClosurePeer::ID);
            $value = $criteria->remove(QbcSciClosurePeer::ID);
            if ($value) {
                $selectCriteria->add(QbcSciClosurePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(QbcSciClosurePeer::TABLE_NAME);
            }

        } else { // $values is QbcSciClosure object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(QbcSciClosurePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the qbc_sci_closure table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcSciClosurePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(QbcSciClosurePeer::TABLE_NAME, $con, QbcSciClosurePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            QbcSciClosurePeer::clearInstancePool();
            QbcSciClosurePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a QbcSciClosure or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or QbcSciClosure object or primary key or array of primary keys
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
            $con = Propel::getConnection(QbcSciClosurePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            QbcSciClosurePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof QbcSciClosure) { // it's a model object
            // invalidate the cache for this single object
            QbcSciClosurePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(QbcSciClosurePeer::DATABASE_NAME);
            $criteria->add(QbcSciClosurePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                QbcSciClosurePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(QbcSciClosurePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            QbcSciClosurePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given QbcSciClosure object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param QbcSciClosure $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(QbcSciClosurePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(QbcSciClosurePeer::TABLE_NAME);

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

        return BasePeer::doValidate(QbcSciClosurePeer::DATABASE_NAME, QbcSciClosurePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return QbcSciClosure
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = QbcSciClosurePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(QbcSciClosurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(QbcSciClosurePeer::DATABASE_NAME);
        $criteria->add(QbcSciClosurePeer::ID, $pk);

        $v = QbcSciClosurePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return QbcSciClosure[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcSciClosurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(QbcSciClosurePeer::DATABASE_NAME);
            $criteria->add(QbcSciClosurePeer::ID, $pks, Criteria::IN);
            $objs = QbcSciClosurePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseQbcSciClosurePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseQbcSciClosurePeer::buildTableMap();

