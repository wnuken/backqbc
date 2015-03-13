<?php


/**
 * Base static class for performing query and update operations on the 'admin_user' table.
 *
 *
 *
 * @package propel.generator.atmadmin.om
 */
abstract class BaseAdminUserPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'atmadmin';

    /** the table name for this class */
    const TABLE_NAME = 'admin_user';

    /** the related Propel class for this table */
    const OM_CLASS = 'AdminUser';

    /** the related TableMap class for this table */
    const TM_CLASS = 'AdminUserTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 26;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 26;

    /** the column name for the user_id field */
    const USER_ID = 'admin_user.user_id';

    /** the column name for the firstname field */
    const FIRSTNAME = 'admin_user.firstname';

    /** the column name for the lastname field */
    const LASTNAME = 'admin_user.lastname';

    /** the column name for the email field */
    const EMAIL = 'admin_user.email';

    /** the column name for the username field */
    const USERNAME = 'admin_user.username';

    /** the column name for the password field */
    const PASSWORD = 'admin_user.password';

    /** the column name for the created field */
    const CREATED = 'admin_user.created';

    /** the column name for the modified field */
    const MODIFIED = 'admin_user.modified';

    /** the column name for the logdate field */
    const LOGDATE = 'admin_user.logdate';

    /** the column name for the lognum field */
    const LOGNUM = 'admin_user.lognum';

    /** the column name for the reload_acl_flag field */
    const RELOAD_ACL_FLAG = 'admin_user.reload_acl_flag';

    /** the column name for the is_active field */
    const IS_ACTIVE = 'admin_user.is_active';

    /** the column name for the extra field */
    const EXTRA = 'admin_user.extra';

    /** the column name for the rp_token field */
    const RP_TOKEN = 'admin_user.rp_token';

    /** the column name for the rp_token_created_at field */
    const RP_TOKEN_CREATED_AT = 'admin_user.rp_token_created_at';

    /** the column name for the failures_num field */
    const FAILURES_NUM = 'admin_user.failures_num';

    /** the column name for the first_failure field */
    const FIRST_FAILURE = 'admin_user.first_failure';

    /** the column name for the lock_expires field */
    const LOCK_EXPIRES = 'admin_user.lock_expires';

    /** the column name for the movil field */
    const MOVIL = 'admin_user.movil';

    /** the column name for the id_employee field */
    const ID_EMPLOYEE = 'admin_user.id_employee';

    /** the column name for the position field */
    const POSITION = 'admin_user.position';

    /** the column name for the merchant_id field */
    const MERCHANT_ID = 'admin_user.merchant_id';

    /** the column name for the dob field */
    const DOB = 'admin_user.dob';

    /** the column name for the phone field */
    const PHONE = 'admin_user.phone';

    /** the column name for the workmovil field */
    const WORKMOVIL = 'admin_user.workmovil';

    /** the column name for the pos_id field */
    const POS_ID = 'admin_user.pos_id';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of AdminUser objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array AdminUser[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. AdminUserPeer::$fieldNames[AdminUserPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('UserId', 'Firstname', 'Lastname', 'Email', 'Username', 'Password', 'Created', 'Modified', 'Logdate', 'Lognum', 'ReloadAclFlag', 'IsActive', 'Extra', 'RpToken', 'RpTokenCreatedAt', 'FailuresNum', 'FirstFailure', 'LockExpires', 'Movil', 'IdEmployee', 'Position', 'MerchantId', 'Dob', 'Phone', 'Workmovil', 'PosId', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('userId', 'firstname', 'lastname', 'email', 'username', 'password', 'created', 'modified', 'logdate', 'lognum', 'reloadAclFlag', 'isActive', 'extra', 'rpToken', 'rpTokenCreatedAt', 'failuresNum', 'firstFailure', 'lockExpires', 'movil', 'idEmployee', 'position', 'merchantId', 'dob', 'phone', 'workmovil', 'posId', ),
        BasePeer::TYPE_COLNAME => array (AdminUserPeer::USER_ID, AdminUserPeer::FIRSTNAME, AdminUserPeer::LASTNAME, AdminUserPeer::EMAIL, AdminUserPeer::USERNAME, AdminUserPeer::PASSWORD, AdminUserPeer::CREATED, AdminUserPeer::MODIFIED, AdminUserPeer::LOGDATE, AdminUserPeer::LOGNUM, AdminUserPeer::RELOAD_ACL_FLAG, AdminUserPeer::IS_ACTIVE, AdminUserPeer::EXTRA, AdminUserPeer::RP_TOKEN, AdminUserPeer::RP_TOKEN_CREATED_AT, AdminUserPeer::FAILURES_NUM, AdminUserPeer::FIRST_FAILURE, AdminUserPeer::LOCK_EXPIRES, AdminUserPeer::MOVIL, AdminUserPeer::ID_EMPLOYEE, AdminUserPeer::POSITION, AdminUserPeer::MERCHANT_ID, AdminUserPeer::DOB, AdminUserPeer::PHONE, AdminUserPeer::WORKMOVIL, AdminUserPeer::POS_ID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('USER_ID', 'FIRSTNAME', 'LASTNAME', 'EMAIL', 'USERNAME', 'PASSWORD', 'CREATED', 'MODIFIED', 'LOGDATE', 'LOGNUM', 'RELOAD_ACL_FLAG', 'IS_ACTIVE', 'EXTRA', 'RP_TOKEN', 'RP_TOKEN_CREATED_AT', 'FAILURES_NUM', 'FIRST_FAILURE', 'LOCK_EXPIRES', 'MOVIL', 'ID_EMPLOYEE', 'POSITION', 'MERCHANT_ID', 'DOB', 'PHONE', 'WORKMOVIL', 'POS_ID', ),
        BasePeer::TYPE_FIELDNAME => array ('user_id', 'firstname', 'lastname', 'email', 'username', 'password', 'created', 'modified', 'logdate', 'lognum', 'reload_acl_flag', 'is_active', 'extra', 'rp_token', 'rp_token_created_at', 'failures_num', 'first_failure', 'lock_expires', 'movil', 'id_employee', 'position', 'merchant_id', 'dob', 'phone', 'workmovil', 'pos_id', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. AdminUserPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('UserId' => 0, 'Firstname' => 1, 'Lastname' => 2, 'Email' => 3, 'Username' => 4, 'Password' => 5, 'Created' => 6, 'Modified' => 7, 'Logdate' => 8, 'Lognum' => 9, 'ReloadAclFlag' => 10, 'IsActive' => 11, 'Extra' => 12, 'RpToken' => 13, 'RpTokenCreatedAt' => 14, 'FailuresNum' => 15, 'FirstFailure' => 16, 'LockExpires' => 17, 'Movil' => 18, 'IdEmployee' => 19, 'Position' => 20, 'MerchantId' => 21, 'Dob' => 22, 'Phone' => 23, 'Workmovil' => 24, 'PosId' => 25, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('userId' => 0, 'firstname' => 1, 'lastname' => 2, 'email' => 3, 'username' => 4, 'password' => 5, 'created' => 6, 'modified' => 7, 'logdate' => 8, 'lognum' => 9, 'reloadAclFlag' => 10, 'isActive' => 11, 'extra' => 12, 'rpToken' => 13, 'rpTokenCreatedAt' => 14, 'failuresNum' => 15, 'firstFailure' => 16, 'lockExpires' => 17, 'movil' => 18, 'idEmployee' => 19, 'position' => 20, 'merchantId' => 21, 'dob' => 22, 'phone' => 23, 'workmovil' => 24, 'posId' => 25, ),
        BasePeer::TYPE_COLNAME => array (AdminUserPeer::USER_ID => 0, AdminUserPeer::FIRSTNAME => 1, AdminUserPeer::LASTNAME => 2, AdminUserPeer::EMAIL => 3, AdminUserPeer::USERNAME => 4, AdminUserPeer::PASSWORD => 5, AdminUserPeer::CREATED => 6, AdminUserPeer::MODIFIED => 7, AdminUserPeer::LOGDATE => 8, AdminUserPeer::LOGNUM => 9, AdminUserPeer::RELOAD_ACL_FLAG => 10, AdminUserPeer::IS_ACTIVE => 11, AdminUserPeer::EXTRA => 12, AdminUserPeer::RP_TOKEN => 13, AdminUserPeer::RP_TOKEN_CREATED_AT => 14, AdminUserPeer::FAILURES_NUM => 15, AdminUserPeer::FIRST_FAILURE => 16, AdminUserPeer::LOCK_EXPIRES => 17, AdminUserPeer::MOVIL => 18, AdminUserPeer::ID_EMPLOYEE => 19, AdminUserPeer::POSITION => 20, AdminUserPeer::MERCHANT_ID => 21, AdminUserPeer::DOB => 22, AdminUserPeer::PHONE => 23, AdminUserPeer::WORKMOVIL => 24, AdminUserPeer::POS_ID => 25, ),
        BasePeer::TYPE_RAW_COLNAME => array ('USER_ID' => 0, 'FIRSTNAME' => 1, 'LASTNAME' => 2, 'EMAIL' => 3, 'USERNAME' => 4, 'PASSWORD' => 5, 'CREATED' => 6, 'MODIFIED' => 7, 'LOGDATE' => 8, 'LOGNUM' => 9, 'RELOAD_ACL_FLAG' => 10, 'IS_ACTIVE' => 11, 'EXTRA' => 12, 'RP_TOKEN' => 13, 'RP_TOKEN_CREATED_AT' => 14, 'FAILURES_NUM' => 15, 'FIRST_FAILURE' => 16, 'LOCK_EXPIRES' => 17, 'MOVIL' => 18, 'ID_EMPLOYEE' => 19, 'POSITION' => 20, 'MERCHANT_ID' => 21, 'DOB' => 22, 'PHONE' => 23, 'WORKMOVIL' => 24, 'POS_ID' => 25, ),
        BasePeer::TYPE_FIELDNAME => array ('user_id' => 0, 'firstname' => 1, 'lastname' => 2, 'email' => 3, 'username' => 4, 'password' => 5, 'created' => 6, 'modified' => 7, 'logdate' => 8, 'lognum' => 9, 'reload_acl_flag' => 10, 'is_active' => 11, 'extra' => 12, 'rp_token' => 13, 'rp_token_created_at' => 14, 'failures_num' => 15, 'first_failure' => 16, 'lock_expires' => 17, 'movil' => 18, 'id_employee' => 19, 'position' => 20, 'merchant_id' => 21, 'dob' => 22, 'phone' => 23, 'workmovil' => 24, 'pos_id' => 25, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
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
        $toNames = AdminUserPeer::getFieldNames($toType);
        $key = isset(AdminUserPeer::$fieldKeys[$fromType][$name]) ? AdminUserPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(AdminUserPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, AdminUserPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return AdminUserPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. AdminUserPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(AdminUserPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(AdminUserPeer::USER_ID);
            $criteria->addSelectColumn(AdminUserPeer::FIRSTNAME);
            $criteria->addSelectColumn(AdminUserPeer::LASTNAME);
            $criteria->addSelectColumn(AdminUserPeer::EMAIL);
            $criteria->addSelectColumn(AdminUserPeer::USERNAME);
            $criteria->addSelectColumn(AdminUserPeer::PASSWORD);
            $criteria->addSelectColumn(AdminUserPeer::CREATED);
            $criteria->addSelectColumn(AdminUserPeer::MODIFIED);
            $criteria->addSelectColumn(AdminUserPeer::LOGDATE);
            $criteria->addSelectColumn(AdminUserPeer::LOGNUM);
            $criteria->addSelectColumn(AdminUserPeer::RELOAD_ACL_FLAG);
            $criteria->addSelectColumn(AdminUserPeer::IS_ACTIVE);
            $criteria->addSelectColumn(AdminUserPeer::EXTRA);
            $criteria->addSelectColumn(AdminUserPeer::RP_TOKEN);
            $criteria->addSelectColumn(AdminUserPeer::RP_TOKEN_CREATED_AT);
            $criteria->addSelectColumn(AdminUserPeer::FAILURES_NUM);
            $criteria->addSelectColumn(AdminUserPeer::FIRST_FAILURE);
            $criteria->addSelectColumn(AdminUserPeer::LOCK_EXPIRES);
            $criteria->addSelectColumn(AdminUserPeer::MOVIL);
            $criteria->addSelectColumn(AdminUserPeer::ID_EMPLOYEE);
            $criteria->addSelectColumn(AdminUserPeer::POSITION);
            $criteria->addSelectColumn(AdminUserPeer::MERCHANT_ID);
            $criteria->addSelectColumn(AdminUserPeer::DOB);
            $criteria->addSelectColumn(AdminUserPeer::PHONE);
            $criteria->addSelectColumn(AdminUserPeer::WORKMOVIL);
            $criteria->addSelectColumn(AdminUserPeer::POS_ID);
        } else {
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.firstname');
            $criteria->addSelectColumn($alias . '.lastname');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.username');
            $criteria->addSelectColumn($alias . '.password');
            $criteria->addSelectColumn($alias . '.created');
            $criteria->addSelectColumn($alias . '.modified');
            $criteria->addSelectColumn($alias . '.logdate');
            $criteria->addSelectColumn($alias . '.lognum');
            $criteria->addSelectColumn($alias . '.reload_acl_flag');
            $criteria->addSelectColumn($alias . '.is_active');
            $criteria->addSelectColumn($alias . '.extra');
            $criteria->addSelectColumn($alias . '.rp_token');
            $criteria->addSelectColumn($alias . '.rp_token_created_at');
            $criteria->addSelectColumn($alias . '.failures_num');
            $criteria->addSelectColumn($alias . '.first_failure');
            $criteria->addSelectColumn($alias . '.lock_expires');
            $criteria->addSelectColumn($alias . '.movil');
            $criteria->addSelectColumn($alias . '.id_employee');
            $criteria->addSelectColumn($alias . '.position');
            $criteria->addSelectColumn($alias . '.merchant_id');
            $criteria->addSelectColumn($alias . '.dob');
            $criteria->addSelectColumn($alias . '.phone');
            $criteria->addSelectColumn($alias . '.workmovil');
            $criteria->addSelectColumn($alias . '.pos_id');
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
        $criteria->setPrimaryTableName(AdminUserPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AdminUserPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(AdminUserPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(AdminUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return AdminUser
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = AdminUserPeer::doSelect($critcopy, $con);
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
        return AdminUserPeer::populateObjects(AdminUserPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(AdminUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AdminUserPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(AdminUserPeer::DATABASE_NAME);

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
     * @param AdminUser $obj A AdminUser object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getUserId();
            } // if key === null
            AdminUserPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A AdminUser object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof AdminUser) {
                $key = (string) $value->getUserId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or AdminUser object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(AdminUserPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return AdminUser Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(AdminUserPeer::$instances[$key])) {
                return AdminUserPeer::$instances[$key];
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
        foreach (AdminUserPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        AdminUserPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to admin_user
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
        $cls = AdminUserPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = AdminUserPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = AdminUserPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                AdminUserPeer::addInstanceToPool($obj, $key);
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
     * @return array (AdminUser object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = AdminUserPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = AdminUserPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + AdminUserPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = AdminUserPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            AdminUserPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related GroupdealsMerchants table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGroupdealsMerchants(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AdminUserPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AdminUserPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(AdminUserPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AdminUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AdminUserPeer::MERCHANT_ID, GroupdealsMerchantsPeer::MERCHANTS_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related QbcPos table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinQbcPos(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AdminUserPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AdminUserPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(AdminUserPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AdminUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AdminUserPeer::POS_ID, QbcPosPeer::ID, $join_behavior);

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
     * Selects a collection of AdminUser objects pre-filled with their GroupdealsMerchants objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of AdminUser objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGroupdealsMerchants(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AdminUserPeer::DATABASE_NAME);
        }

        AdminUserPeer::addSelectColumns($criteria);
        $startcol = AdminUserPeer::NUM_HYDRATE_COLUMNS;
        GroupdealsMerchantsPeer::addSelectColumns($criteria);

        $criteria->addJoin(AdminUserPeer::MERCHANT_ID, GroupdealsMerchantsPeer::MERCHANTS_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AdminUserPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AdminUserPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AdminUserPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AdminUserPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GroupdealsMerchantsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GroupdealsMerchantsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GroupdealsMerchantsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GroupdealsMerchantsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (AdminUser) to $obj2 (GroupdealsMerchants)
                $obj2->addAdminUser($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of AdminUser objects pre-filled with their QbcPos objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of AdminUser objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinQbcPos(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AdminUserPeer::DATABASE_NAME);
        }

        AdminUserPeer::addSelectColumns($criteria);
        $startcol = AdminUserPeer::NUM_HYDRATE_COLUMNS;
        QbcPosPeer::addSelectColumns($criteria);

        $criteria->addJoin(AdminUserPeer::POS_ID, QbcPosPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AdminUserPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AdminUserPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AdminUserPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AdminUserPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = QbcPosPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = QbcPosPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = QbcPosPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    QbcPosPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (AdminUser) to $obj2 (QbcPos)
                $obj2->addAdminUser($obj1);

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
        $criteria->setPrimaryTableName(AdminUserPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AdminUserPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(AdminUserPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AdminUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AdminUserPeer::MERCHANT_ID, GroupdealsMerchantsPeer::MERCHANTS_ID, $join_behavior);

        $criteria->addJoin(AdminUserPeer::POS_ID, QbcPosPeer::ID, $join_behavior);

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
     * Selects a collection of AdminUser objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of AdminUser objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AdminUserPeer::DATABASE_NAME);
        }

        AdminUserPeer::addSelectColumns($criteria);
        $startcol2 = AdminUserPeer::NUM_HYDRATE_COLUMNS;

        GroupdealsMerchantsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GroupdealsMerchantsPeer::NUM_HYDRATE_COLUMNS;

        QbcPosPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + QbcPosPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AdminUserPeer::MERCHANT_ID, GroupdealsMerchantsPeer::MERCHANTS_ID, $join_behavior);

        $criteria->addJoin(AdminUserPeer::POS_ID, QbcPosPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AdminUserPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AdminUserPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AdminUserPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AdminUserPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined GroupdealsMerchants rows

            $key2 = GroupdealsMerchantsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = GroupdealsMerchantsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GroupdealsMerchantsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GroupdealsMerchantsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (AdminUser) to the collection in $obj2 (GroupdealsMerchants)
                $obj2->addAdminUser($obj1);
            } // if joined row not null

            // Add objects for joined QbcPos rows

            $key3 = QbcPosPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = QbcPosPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = QbcPosPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    QbcPosPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (AdminUser) to the collection in $obj3 (QbcPos)
                $obj3->addAdminUser($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GroupdealsMerchants table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGroupdealsMerchants(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AdminUserPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AdminUserPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(AdminUserPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AdminUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AdminUserPeer::POS_ID, QbcPosPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related QbcPos table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptQbcPos(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AdminUserPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AdminUserPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(AdminUserPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AdminUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AdminUserPeer::MERCHANT_ID, GroupdealsMerchantsPeer::MERCHANTS_ID, $join_behavior);

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
     * Selects a collection of AdminUser objects pre-filled with all related objects except GroupdealsMerchants.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of AdminUser objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGroupdealsMerchants(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AdminUserPeer::DATABASE_NAME);
        }

        AdminUserPeer::addSelectColumns($criteria);
        $startcol2 = AdminUserPeer::NUM_HYDRATE_COLUMNS;

        QbcPosPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + QbcPosPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AdminUserPeer::POS_ID, QbcPosPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AdminUserPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AdminUserPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AdminUserPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AdminUserPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined QbcPos rows

                $key2 = QbcPosPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = QbcPosPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = QbcPosPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    QbcPosPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (AdminUser) to the collection in $obj2 (QbcPos)
                $obj2->addAdminUser($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of AdminUser objects pre-filled with all related objects except QbcPos.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of AdminUser objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptQbcPos(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AdminUserPeer::DATABASE_NAME);
        }

        AdminUserPeer::addSelectColumns($criteria);
        $startcol2 = AdminUserPeer::NUM_HYDRATE_COLUMNS;

        GroupdealsMerchantsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GroupdealsMerchantsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AdminUserPeer::MERCHANT_ID, GroupdealsMerchantsPeer::MERCHANTS_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AdminUserPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AdminUserPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AdminUserPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AdminUserPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GroupdealsMerchants rows

                $key2 = GroupdealsMerchantsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GroupdealsMerchantsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GroupdealsMerchantsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GroupdealsMerchantsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (AdminUser) to the collection in $obj2 (GroupdealsMerchants)
                $obj2->addAdminUser($obj1);

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
        return Propel::getDatabaseMap(AdminUserPeer::DATABASE_NAME)->getTable(AdminUserPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseAdminUserPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseAdminUserPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \AdminUserTableMap());
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
        return AdminUserPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a AdminUser or Criteria object.
     *
     * @param      mixed $values Criteria or AdminUser object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AdminUserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from AdminUser object
        }

        if ($criteria->containsKey(AdminUserPeer::USER_ID) && $criteria->keyContainsValue(AdminUserPeer::USER_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.AdminUserPeer::USER_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(AdminUserPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a AdminUser or Criteria object.
     *
     * @param      mixed $values Criteria or AdminUser object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AdminUserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(AdminUserPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(AdminUserPeer::USER_ID);
            $value = $criteria->remove(AdminUserPeer::USER_ID);
            if ($value) {
                $selectCriteria->add(AdminUserPeer::USER_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AdminUserPeer::TABLE_NAME);
            }

        } else { // $values is AdminUser object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(AdminUserPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the admin_user table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AdminUserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(AdminUserPeer::TABLE_NAME, $con, AdminUserPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AdminUserPeer::clearInstancePool();
            AdminUserPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a AdminUser or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or AdminUser object or primary key or array of primary keys
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
            $con = Propel::getConnection(AdminUserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            AdminUserPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof AdminUser) { // it's a model object
            // invalidate the cache for this single object
            AdminUserPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(AdminUserPeer::DATABASE_NAME);
            $criteria->add(AdminUserPeer::USER_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                AdminUserPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(AdminUserPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            AdminUserPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given AdminUser object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param AdminUser $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(AdminUserPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(AdminUserPeer::TABLE_NAME);

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

        return BasePeer::doValidate(AdminUserPeer::DATABASE_NAME, AdminUserPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return AdminUser
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = AdminUserPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(AdminUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(AdminUserPeer::DATABASE_NAME);
        $criteria->add(AdminUserPeer::USER_ID, $pk);

        $v = AdminUserPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return AdminUser[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AdminUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(AdminUserPeer::DATABASE_NAME);
            $criteria->add(AdminUserPeer::USER_ID, $pks, Criteria::IN);
            $objs = AdminUserPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseAdminUserPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAdminUserPeer::buildTableMap();

