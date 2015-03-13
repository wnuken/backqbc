<?php


/**
 * Base static class for performing query and update operations on the 'admin_role' table.
 *
 *
 *
 * @package propel.generator.atmadmin.om
 */
abstract class BaseAdminRolePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'atmadmin';

    /** the table name for this class */
    const TABLE_NAME = 'admin_role';

    /** the related Propel class for this table */
    const OM_CLASS = 'AdminRole';

    /** the related TableMap class for this table */
    const TM_CLASS = 'AdminRoleTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the role_id field */
    const ROLE_ID = 'admin_role.role_id';

    /** the column name for the parent_id field */
    const PARENT_ID = 'admin_role.parent_id';

    /** the column name for the tree_level field */
    const TREE_LEVEL = 'admin_role.tree_level';

    /** the column name for the sort_order field */
    const SORT_ORDER = 'admin_role.sort_order';

    /** the column name for the role_type field */
    const ROLE_TYPE = 'admin_role.role_type';

    /** the column name for the user_id field */
    const USER_ID = 'admin_role.user_id';

    /** the column name for the role_name field */
    const ROLE_NAME = 'admin_role.role_name';

    /** the column name for the gws_is_all field */
    const GWS_IS_ALL = 'admin_role.gws_is_all';

    /** the column name for the gws_websites field */
    const GWS_WEBSITES = 'admin_role.gws_websites';

    /** the column name for the gws_store_groups field */
    const GWS_STORE_GROUPS = 'admin_role.gws_store_groups';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of AdminRole objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array AdminRole[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. AdminRolePeer::$fieldNames[AdminRolePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('RoleId', 'ParentId', 'TreeLevel', 'SortOrder', 'RoleType', 'UserId', 'RoleName', 'GwsIsAll', 'GwsWebsites', 'GwsStoreGroups', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('roleId', 'parentId', 'treeLevel', 'sortOrder', 'roleType', 'userId', 'roleName', 'gwsIsAll', 'gwsWebsites', 'gwsStoreGroups', ),
        BasePeer::TYPE_COLNAME => array (AdminRolePeer::ROLE_ID, AdminRolePeer::PARENT_ID, AdminRolePeer::TREE_LEVEL, AdminRolePeer::SORT_ORDER, AdminRolePeer::ROLE_TYPE, AdminRolePeer::USER_ID, AdminRolePeer::ROLE_NAME, AdminRolePeer::GWS_IS_ALL, AdminRolePeer::GWS_WEBSITES, AdminRolePeer::GWS_STORE_GROUPS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ROLE_ID', 'PARENT_ID', 'TREE_LEVEL', 'SORT_ORDER', 'ROLE_TYPE', 'USER_ID', 'ROLE_NAME', 'GWS_IS_ALL', 'GWS_WEBSITES', 'GWS_STORE_GROUPS', ),
        BasePeer::TYPE_FIELDNAME => array ('role_id', 'parent_id', 'tree_level', 'sort_order', 'role_type', 'user_id', 'role_name', 'gws_is_all', 'gws_websites', 'gws_store_groups', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. AdminRolePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('RoleId' => 0, 'ParentId' => 1, 'TreeLevel' => 2, 'SortOrder' => 3, 'RoleType' => 4, 'UserId' => 5, 'RoleName' => 6, 'GwsIsAll' => 7, 'GwsWebsites' => 8, 'GwsStoreGroups' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('roleId' => 0, 'parentId' => 1, 'treeLevel' => 2, 'sortOrder' => 3, 'roleType' => 4, 'userId' => 5, 'roleName' => 6, 'gwsIsAll' => 7, 'gwsWebsites' => 8, 'gwsStoreGroups' => 9, ),
        BasePeer::TYPE_COLNAME => array (AdminRolePeer::ROLE_ID => 0, AdminRolePeer::PARENT_ID => 1, AdminRolePeer::TREE_LEVEL => 2, AdminRolePeer::SORT_ORDER => 3, AdminRolePeer::ROLE_TYPE => 4, AdminRolePeer::USER_ID => 5, AdminRolePeer::ROLE_NAME => 6, AdminRolePeer::GWS_IS_ALL => 7, AdminRolePeer::GWS_WEBSITES => 8, AdminRolePeer::GWS_STORE_GROUPS => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ROLE_ID' => 0, 'PARENT_ID' => 1, 'TREE_LEVEL' => 2, 'SORT_ORDER' => 3, 'ROLE_TYPE' => 4, 'USER_ID' => 5, 'ROLE_NAME' => 6, 'GWS_IS_ALL' => 7, 'GWS_WEBSITES' => 8, 'GWS_STORE_GROUPS' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('role_id' => 0, 'parent_id' => 1, 'tree_level' => 2, 'sort_order' => 3, 'role_type' => 4, 'user_id' => 5, 'role_name' => 6, 'gws_is_all' => 7, 'gws_websites' => 8, 'gws_store_groups' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
        $toNames = AdminRolePeer::getFieldNames($toType);
        $key = isset(AdminRolePeer::$fieldKeys[$fromType][$name]) ? AdminRolePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(AdminRolePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, AdminRolePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return AdminRolePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. AdminRolePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(AdminRolePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(AdminRolePeer::ROLE_ID);
            $criteria->addSelectColumn(AdminRolePeer::PARENT_ID);
            $criteria->addSelectColumn(AdminRolePeer::TREE_LEVEL);
            $criteria->addSelectColumn(AdminRolePeer::SORT_ORDER);
            $criteria->addSelectColumn(AdminRolePeer::ROLE_TYPE);
            $criteria->addSelectColumn(AdminRolePeer::USER_ID);
            $criteria->addSelectColumn(AdminRolePeer::ROLE_NAME);
            $criteria->addSelectColumn(AdminRolePeer::GWS_IS_ALL);
            $criteria->addSelectColumn(AdminRolePeer::GWS_WEBSITES);
            $criteria->addSelectColumn(AdminRolePeer::GWS_STORE_GROUPS);
        } else {
            $criteria->addSelectColumn($alias . '.role_id');
            $criteria->addSelectColumn($alias . '.parent_id');
            $criteria->addSelectColumn($alias . '.tree_level');
            $criteria->addSelectColumn($alias . '.sort_order');
            $criteria->addSelectColumn($alias . '.role_type');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.role_name');
            $criteria->addSelectColumn($alias . '.gws_is_all');
            $criteria->addSelectColumn($alias . '.gws_websites');
            $criteria->addSelectColumn($alias . '.gws_store_groups');
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
        $criteria->setPrimaryTableName(AdminRolePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AdminRolePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(AdminRolePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(AdminRolePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return AdminRole
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = AdminRolePeer::doSelect($critcopy, $con);
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
        return AdminRolePeer::populateObjects(AdminRolePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(AdminRolePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AdminRolePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(AdminRolePeer::DATABASE_NAME);

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
     * @param AdminRole $obj A AdminRole object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getRoleId();
            } // if key === null
            AdminRolePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A AdminRole object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof AdminRole) {
                $key = (string) $value->getRoleId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or AdminRole object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(AdminRolePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return AdminRole Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(AdminRolePeer::$instances[$key])) {
                return AdminRolePeer::$instances[$key];
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
        foreach (AdminRolePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        AdminRolePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to admin_role
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
        $cls = AdminRolePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = AdminRolePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = AdminRolePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                AdminRolePeer::addInstanceToPool($obj, $key);
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
     * @return array (AdminRole object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = AdminRolePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = AdminRolePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + AdminRolePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = AdminRolePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            AdminRolePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(AdminRolePeer::DATABASE_NAME)->getTable(AdminRolePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseAdminRolePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseAdminRolePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \AdminRoleTableMap());
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
        return AdminRolePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a AdminRole or Criteria object.
     *
     * @param      mixed $values Criteria or AdminRole object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AdminRolePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from AdminRole object
        }

        if ($criteria->containsKey(AdminRolePeer::ROLE_ID) && $criteria->keyContainsValue(AdminRolePeer::ROLE_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.AdminRolePeer::ROLE_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(AdminRolePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a AdminRole or Criteria object.
     *
     * @param      mixed $values Criteria or AdminRole object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AdminRolePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(AdminRolePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(AdminRolePeer::ROLE_ID);
            $value = $criteria->remove(AdminRolePeer::ROLE_ID);
            if ($value) {
                $selectCriteria->add(AdminRolePeer::ROLE_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AdminRolePeer::TABLE_NAME);
            }

        } else { // $values is AdminRole object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(AdminRolePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the admin_role table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AdminRolePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(AdminRolePeer::TABLE_NAME, $con, AdminRolePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AdminRolePeer::clearInstancePool();
            AdminRolePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a AdminRole or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or AdminRole object or primary key or array of primary keys
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
            $con = Propel::getConnection(AdminRolePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            AdminRolePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof AdminRole) { // it's a model object
            // invalidate the cache for this single object
            AdminRolePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(AdminRolePeer::DATABASE_NAME);
            $criteria->add(AdminRolePeer::ROLE_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                AdminRolePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(AdminRolePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            AdminRolePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given AdminRole object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param AdminRole $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(AdminRolePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(AdminRolePeer::TABLE_NAME);

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

        return BasePeer::doValidate(AdminRolePeer::DATABASE_NAME, AdminRolePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return AdminRole
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = AdminRolePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(AdminRolePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(AdminRolePeer::DATABASE_NAME);
        $criteria->add(AdminRolePeer::ROLE_ID, $pk);

        $v = AdminRolePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return AdminRole[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AdminRolePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(AdminRolePeer::DATABASE_NAME);
            $criteria->add(AdminRolePeer::ROLE_ID, $pks, Criteria::IN);
            $objs = AdminRolePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseAdminRolePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAdminRolePeer::buildTableMap();

