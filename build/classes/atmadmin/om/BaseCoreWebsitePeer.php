<?php


/**
 * Base static class for performing query and update operations on the 'core_website' table.
 *
 *
 *
 * @package propel.generator.atmadmin.om
 */
abstract class BaseCoreWebsitePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'atmadmin';

    /** the table name for this class */
    const TABLE_NAME = 'core_website';

    /** the related Propel class for this table */
    const OM_CLASS = 'CoreWebsite';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CoreWebsiteTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the website_id field */
    const WEBSITE_ID = 'core_website.website_id';

    /** the column name for the code field */
    const CODE = 'core_website.code';

    /** the column name for the name field */
    const NAME = 'core_website.name';

    /** the column name for the sort_order field */
    const SORT_ORDER = 'core_website.sort_order';

    /** the column name for the default_group_id field */
    const DEFAULT_GROUP_ID = 'core_website.default_group_id';

    /** the column name for the is_default field */
    const IS_DEFAULT = 'core_website.is_default';

    /** the column name for the is_staging field */
    const IS_STAGING = 'core_website.is_staging';

    /** the column name for the master_login field */
    const MASTER_LOGIN = 'core_website.master_login';

    /** the column name for the master_password field */
    const MASTER_PASSWORD = 'core_website.master_password';

    /** the column name for the visibility field */
    const VISIBILITY = 'core_website.visibility';

    /** the column name for the is_visible field */
    const IS_VISIBLE = 'core_website.is_visible';

    /** the column name for the department field */
    const DEPARTMENT = 'core_website.department';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CoreWebsite objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CoreWebsite[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CoreWebsitePeer::$fieldNames[CoreWebsitePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('WebsiteId', 'Code', 'Name', 'SortOrder', 'DefaultGroupId', 'IsDefault', 'IsStaging', 'MasterLogin', 'MasterPassword', 'Visibility', 'IsVisible', 'Department', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('websiteId', 'code', 'name', 'sortOrder', 'defaultGroupId', 'isDefault', 'isStaging', 'masterLogin', 'masterPassword', 'visibility', 'isVisible', 'department', ),
        BasePeer::TYPE_COLNAME => array (CoreWebsitePeer::WEBSITE_ID, CoreWebsitePeer::CODE, CoreWebsitePeer::NAME, CoreWebsitePeer::SORT_ORDER, CoreWebsitePeer::DEFAULT_GROUP_ID, CoreWebsitePeer::IS_DEFAULT, CoreWebsitePeer::IS_STAGING, CoreWebsitePeer::MASTER_LOGIN, CoreWebsitePeer::MASTER_PASSWORD, CoreWebsitePeer::VISIBILITY, CoreWebsitePeer::IS_VISIBLE, CoreWebsitePeer::DEPARTMENT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('WEBSITE_ID', 'CODE', 'NAME', 'SORT_ORDER', 'DEFAULT_GROUP_ID', 'IS_DEFAULT', 'IS_STAGING', 'MASTER_LOGIN', 'MASTER_PASSWORD', 'VISIBILITY', 'IS_VISIBLE', 'DEPARTMENT', ),
        BasePeer::TYPE_FIELDNAME => array ('website_id', 'code', 'name', 'sort_order', 'default_group_id', 'is_default', 'is_staging', 'master_login', 'master_password', 'visibility', 'is_visible', 'department', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CoreWebsitePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('WebsiteId' => 0, 'Code' => 1, 'Name' => 2, 'SortOrder' => 3, 'DefaultGroupId' => 4, 'IsDefault' => 5, 'IsStaging' => 6, 'MasterLogin' => 7, 'MasterPassword' => 8, 'Visibility' => 9, 'IsVisible' => 10, 'Department' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('websiteId' => 0, 'code' => 1, 'name' => 2, 'sortOrder' => 3, 'defaultGroupId' => 4, 'isDefault' => 5, 'isStaging' => 6, 'masterLogin' => 7, 'masterPassword' => 8, 'visibility' => 9, 'isVisible' => 10, 'department' => 11, ),
        BasePeer::TYPE_COLNAME => array (CoreWebsitePeer::WEBSITE_ID => 0, CoreWebsitePeer::CODE => 1, CoreWebsitePeer::NAME => 2, CoreWebsitePeer::SORT_ORDER => 3, CoreWebsitePeer::DEFAULT_GROUP_ID => 4, CoreWebsitePeer::IS_DEFAULT => 5, CoreWebsitePeer::IS_STAGING => 6, CoreWebsitePeer::MASTER_LOGIN => 7, CoreWebsitePeer::MASTER_PASSWORD => 8, CoreWebsitePeer::VISIBILITY => 9, CoreWebsitePeer::IS_VISIBLE => 10, CoreWebsitePeer::DEPARTMENT => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('WEBSITE_ID' => 0, 'CODE' => 1, 'NAME' => 2, 'SORT_ORDER' => 3, 'DEFAULT_GROUP_ID' => 4, 'IS_DEFAULT' => 5, 'IS_STAGING' => 6, 'MASTER_LOGIN' => 7, 'MASTER_PASSWORD' => 8, 'VISIBILITY' => 9, 'IS_VISIBLE' => 10, 'DEPARTMENT' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('website_id' => 0, 'code' => 1, 'name' => 2, 'sort_order' => 3, 'default_group_id' => 4, 'is_default' => 5, 'is_staging' => 6, 'master_login' => 7, 'master_password' => 8, 'visibility' => 9, 'is_visible' => 10, 'department' => 11, ),
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
        $toNames = CoreWebsitePeer::getFieldNames($toType);
        $key = isset(CoreWebsitePeer::$fieldKeys[$fromType][$name]) ? CoreWebsitePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CoreWebsitePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CoreWebsitePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CoreWebsitePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CoreWebsitePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CoreWebsitePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CoreWebsitePeer::WEBSITE_ID);
            $criteria->addSelectColumn(CoreWebsitePeer::CODE);
            $criteria->addSelectColumn(CoreWebsitePeer::NAME);
            $criteria->addSelectColumn(CoreWebsitePeer::SORT_ORDER);
            $criteria->addSelectColumn(CoreWebsitePeer::DEFAULT_GROUP_ID);
            $criteria->addSelectColumn(CoreWebsitePeer::IS_DEFAULT);
            $criteria->addSelectColumn(CoreWebsitePeer::IS_STAGING);
            $criteria->addSelectColumn(CoreWebsitePeer::MASTER_LOGIN);
            $criteria->addSelectColumn(CoreWebsitePeer::MASTER_PASSWORD);
            $criteria->addSelectColumn(CoreWebsitePeer::VISIBILITY);
            $criteria->addSelectColumn(CoreWebsitePeer::IS_VISIBLE);
            $criteria->addSelectColumn(CoreWebsitePeer::DEPARTMENT);
        } else {
            $criteria->addSelectColumn($alias . '.website_id');
            $criteria->addSelectColumn($alias . '.code');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.sort_order');
            $criteria->addSelectColumn($alias . '.default_group_id');
            $criteria->addSelectColumn($alias . '.is_default');
            $criteria->addSelectColumn($alias . '.is_staging');
            $criteria->addSelectColumn($alias . '.master_login');
            $criteria->addSelectColumn($alias . '.master_password');
            $criteria->addSelectColumn($alias . '.visibility');
            $criteria->addSelectColumn($alias . '.is_visible');
            $criteria->addSelectColumn($alias . '.department');
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
        $criteria->setPrimaryTableName(CoreWebsitePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CoreWebsitePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CoreWebsitePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CoreWebsitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return CoreWebsite
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CoreWebsitePeer::doSelect($critcopy, $con);
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
        return CoreWebsitePeer::populateObjects(CoreWebsitePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CoreWebsitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CoreWebsitePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CoreWebsitePeer::DATABASE_NAME);

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
     * @param CoreWebsite $obj A CoreWebsite object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getWebsiteId();
            } // if key === null
            CoreWebsitePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CoreWebsite object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CoreWebsite) {
                $key = (string) $value->getWebsiteId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CoreWebsite object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CoreWebsitePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return CoreWebsite Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CoreWebsitePeer::$instances[$key])) {
                return CoreWebsitePeer::$instances[$key];
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
        foreach (CoreWebsitePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CoreWebsitePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to core_website
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CoreStoreGroupPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CoreStoreGroupPeer::clearInstancePool();
        // Invalidate objects in CoreStorePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CoreStorePeer::clearInstancePool();
        // Invalidate objects in CustomerEntityPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CustomerEntityPeer::clearInstancePool();
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
        $cls = CoreWebsitePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CoreWebsitePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CoreWebsitePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CoreWebsitePeer::addInstanceToPool($obj, $key);
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
     * @return array (CoreWebsite object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CoreWebsitePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CoreWebsitePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CoreWebsitePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CoreWebsitePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CoreWebsitePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CoreWebsitePeer::DATABASE_NAME)->getTable(CoreWebsitePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCoreWebsitePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCoreWebsitePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CoreWebsiteTableMap());
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
        return CoreWebsitePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CoreWebsite or Criteria object.
     *
     * @param      mixed $values Criteria or CoreWebsite object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CoreWebsitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CoreWebsite object
        }

        if ($criteria->containsKey(CoreWebsitePeer::WEBSITE_ID) && $criteria->keyContainsValue(CoreWebsitePeer::WEBSITE_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CoreWebsitePeer::WEBSITE_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CoreWebsitePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CoreWebsite or Criteria object.
     *
     * @param      mixed $values Criteria or CoreWebsite object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CoreWebsitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CoreWebsitePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CoreWebsitePeer::WEBSITE_ID);
            $value = $criteria->remove(CoreWebsitePeer::WEBSITE_ID);
            if ($value) {
                $selectCriteria->add(CoreWebsitePeer::WEBSITE_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CoreWebsitePeer::TABLE_NAME);
            }

        } else { // $values is CoreWebsite object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CoreWebsitePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the core_website table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CoreWebsitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CoreWebsitePeer::TABLE_NAME, $con, CoreWebsitePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CoreWebsitePeer::clearInstancePool();
            CoreWebsitePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CoreWebsite or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CoreWebsite object or primary key or array of primary keys
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
            $con = Propel::getConnection(CoreWebsitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CoreWebsitePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CoreWebsite) { // it's a model object
            // invalidate the cache for this single object
            CoreWebsitePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CoreWebsitePeer::DATABASE_NAME);
            $criteria->add(CoreWebsitePeer::WEBSITE_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CoreWebsitePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CoreWebsitePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CoreWebsitePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CoreWebsite object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param CoreWebsite $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CoreWebsitePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CoreWebsitePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CoreWebsitePeer::DATABASE_NAME, CoreWebsitePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CoreWebsite
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CoreWebsitePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CoreWebsitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CoreWebsitePeer::DATABASE_NAME);
        $criteria->add(CoreWebsitePeer::WEBSITE_ID, $pk);

        $v = CoreWebsitePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CoreWebsite[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CoreWebsitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CoreWebsitePeer::DATABASE_NAME);
            $criteria->add(CoreWebsitePeer::WEBSITE_ID, $pks, Criteria::IN);
            $objs = CoreWebsitePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCoreWebsitePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCoreWebsitePeer::buildTableMap();

