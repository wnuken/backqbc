<?php


/**
 * Base static class for performing query and update operations on the 'qbc_merchants_contacts' table.
 *
 *
 *
 * @package propel.generator.atmadmin.om
 */
abstract class BaseQbcMerchantsContactsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'atmadmin';

    /** the table name for this class */
    const TABLE_NAME = 'qbc_merchants_contacts';

    /** the related Propel class for this table */
    const OM_CLASS = 'QbcMerchantsContacts';

    /** the related TableMap class for this table */
    const TM_CLASS = 'QbcMerchantsContactsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the contact_id field */
    const CONTACT_ID = 'qbc_merchants_contacts.contact_id';

    /** the column name for the merchants_id field */
    const MERCHANTS_ID = 'qbc_merchants_contacts.merchants_id';

    /** the column name for the name field */
    const NAME = 'qbc_merchants_contacts.name';

    /** the column name for the surname field */
    const SURNAME = 'qbc_merchants_contacts.surname';

    /** the column name for the email field */
    const EMAIL = 'qbc_merchants_contacts.email';

    /** the column name for the phone field */
    const PHONE = 'qbc_merchants_contacts.phone';

    /** the column name for the job_title field */
    const JOB_TITLE = 'qbc_merchants_contacts.job_title';

    /** the column name for the office_address field */
    const OFFICE_ADDRESS = 'qbc_merchants_contacts.office_address';

    /** the column name for the cell_phone field */
    const CELL_PHONE = 'qbc_merchants_contacts.cell_phone';

    /** the column name for the first_contact field */
    const FIRST_CONTACT = 'qbc_merchants_contacts.first_contact';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of QbcMerchantsContacts objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array QbcMerchantsContacts[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. QbcMerchantsContactsPeer::$fieldNames[QbcMerchantsContactsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('ContactId', 'MerchantsId', 'Name', 'Surname', 'Email', 'Phone', 'JobTitle', 'OfficeAddress', 'CellPhone', 'FirstContact', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('contactId', 'merchantsId', 'name', 'surname', 'email', 'phone', 'jobTitle', 'officeAddress', 'cellPhone', 'firstContact', ),
        BasePeer::TYPE_COLNAME => array (QbcMerchantsContactsPeer::CONTACT_ID, QbcMerchantsContactsPeer::MERCHANTS_ID, QbcMerchantsContactsPeer::NAME, QbcMerchantsContactsPeer::SURNAME, QbcMerchantsContactsPeer::EMAIL, QbcMerchantsContactsPeer::PHONE, QbcMerchantsContactsPeer::JOB_TITLE, QbcMerchantsContactsPeer::OFFICE_ADDRESS, QbcMerchantsContactsPeer::CELL_PHONE, QbcMerchantsContactsPeer::FIRST_CONTACT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CONTACT_ID', 'MERCHANTS_ID', 'NAME', 'SURNAME', 'EMAIL', 'PHONE', 'JOB_TITLE', 'OFFICE_ADDRESS', 'CELL_PHONE', 'FIRST_CONTACT', ),
        BasePeer::TYPE_FIELDNAME => array ('contact_id', 'merchants_id', 'name', 'surname', 'email', 'phone', 'job_title', 'office_address', 'cell_phone', 'first_contact', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. QbcMerchantsContactsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('ContactId' => 0, 'MerchantsId' => 1, 'Name' => 2, 'Surname' => 3, 'Email' => 4, 'Phone' => 5, 'JobTitle' => 6, 'OfficeAddress' => 7, 'CellPhone' => 8, 'FirstContact' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('contactId' => 0, 'merchantsId' => 1, 'name' => 2, 'surname' => 3, 'email' => 4, 'phone' => 5, 'jobTitle' => 6, 'officeAddress' => 7, 'cellPhone' => 8, 'firstContact' => 9, ),
        BasePeer::TYPE_COLNAME => array (QbcMerchantsContactsPeer::CONTACT_ID => 0, QbcMerchantsContactsPeer::MERCHANTS_ID => 1, QbcMerchantsContactsPeer::NAME => 2, QbcMerchantsContactsPeer::SURNAME => 3, QbcMerchantsContactsPeer::EMAIL => 4, QbcMerchantsContactsPeer::PHONE => 5, QbcMerchantsContactsPeer::JOB_TITLE => 6, QbcMerchantsContactsPeer::OFFICE_ADDRESS => 7, QbcMerchantsContactsPeer::CELL_PHONE => 8, QbcMerchantsContactsPeer::FIRST_CONTACT => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CONTACT_ID' => 0, 'MERCHANTS_ID' => 1, 'NAME' => 2, 'SURNAME' => 3, 'EMAIL' => 4, 'PHONE' => 5, 'JOB_TITLE' => 6, 'OFFICE_ADDRESS' => 7, 'CELL_PHONE' => 8, 'FIRST_CONTACT' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('contact_id' => 0, 'merchants_id' => 1, 'name' => 2, 'surname' => 3, 'email' => 4, 'phone' => 5, 'job_title' => 6, 'office_address' => 7, 'cell_phone' => 8, 'first_contact' => 9, ),
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
        $toNames = QbcMerchantsContactsPeer::getFieldNames($toType);
        $key = isset(QbcMerchantsContactsPeer::$fieldKeys[$fromType][$name]) ? QbcMerchantsContactsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(QbcMerchantsContactsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, QbcMerchantsContactsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return QbcMerchantsContactsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. QbcMerchantsContactsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(QbcMerchantsContactsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(QbcMerchantsContactsPeer::CONTACT_ID);
            $criteria->addSelectColumn(QbcMerchantsContactsPeer::MERCHANTS_ID);
            $criteria->addSelectColumn(QbcMerchantsContactsPeer::NAME);
            $criteria->addSelectColumn(QbcMerchantsContactsPeer::SURNAME);
            $criteria->addSelectColumn(QbcMerchantsContactsPeer::EMAIL);
            $criteria->addSelectColumn(QbcMerchantsContactsPeer::PHONE);
            $criteria->addSelectColumn(QbcMerchantsContactsPeer::JOB_TITLE);
            $criteria->addSelectColumn(QbcMerchantsContactsPeer::OFFICE_ADDRESS);
            $criteria->addSelectColumn(QbcMerchantsContactsPeer::CELL_PHONE);
            $criteria->addSelectColumn(QbcMerchantsContactsPeer::FIRST_CONTACT);
        } else {
            $criteria->addSelectColumn($alias . '.contact_id');
            $criteria->addSelectColumn($alias . '.merchants_id');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.surname');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.phone');
            $criteria->addSelectColumn($alias . '.job_title');
            $criteria->addSelectColumn($alias . '.office_address');
            $criteria->addSelectColumn($alias . '.cell_phone');
            $criteria->addSelectColumn($alias . '.first_contact');
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
        $criteria->setPrimaryTableName(QbcMerchantsContactsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            QbcMerchantsContactsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(QbcMerchantsContactsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return QbcMerchantsContacts
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = QbcMerchantsContactsPeer::doSelect($critcopy, $con);
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
        return QbcMerchantsContactsPeer::populateObjects(QbcMerchantsContactsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(QbcMerchantsContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            QbcMerchantsContactsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(QbcMerchantsContactsPeer::DATABASE_NAME);

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
     * @param QbcMerchantsContacts $obj A QbcMerchantsContacts object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getContactId();
            } // if key === null
            QbcMerchantsContactsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A QbcMerchantsContacts object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof QbcMerchantsContacts) {
                $key = (string) $value->getContactId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or QbcMerchantsContacts object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(QbcMerchantsContactsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return QbcMerchantsContacts Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(QbcMerchantsContactsPeer::$instances[$key])) {
                return QbcMerchantsContactsPeer::$instances[$key];
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
        foreach (QbcMerchantsContactsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        QbcMerchantsContactsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to qbc_merchants_contacts
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
        $cls = QbcMerchantsContactsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = QbcMerchantsContactsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = QbcMerchantsContactsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                QbcMerchantsContactsPeer::addInstanceToPool($obj, $key);
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
     * @return array (QbcMerchantsContacts object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = QbcMerchantsContactsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = QbcMerchantsContactsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + QbcMerchantsContactsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = QbcMerchantsContactsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            QbcMerchantsContactsPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(QbcMerchantsContactsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            QbcMerchantsContactsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(QbcMerchantsContactsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(QbcMerchantsContactsPeer::MERCHANTS_ID, GroupdealsMerchantsPeer::MERCHANTS_ID, $join_behavior);

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
     * Selects a collection of QbcMerchantsContacts objects pre-filled with their GroupdealsMerchants objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of QbcMerchantsContacts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGroupdealsMerchants(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(QbcMerchantsContactsPeer::DATABASE_NAME);
        }

        QbcMerchantsContactsPeer::addSelectColumns($criteria);
        $startcol = QbcMerchantsContactsPeer::NUM_HYDRATE_COLUMNS;
        GroupdealsMerchantsPeer::addSelectColumns($criteria);

        $criteria->addJoin(QbcMerchantsContactsPeer::MERCHANTS_ID, GroupdealsMerchantsPeer::MERCHANTS_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = QbcMerchantsContactsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = QbcMerchantsContactsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = QbcMerchantsContactsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                QbcMerchantsContactsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (QbcMerchantsContacts) to $obj2 (GroupdealsMerchants)
                $obj2->addQbcMerchantsContacts($obj1);

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
        $criteria->setPrimaryTableName(QbcMerchantsContactsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            QbcMerchantsContactsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(QbcMerchantsContactsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(QbcMerchantsContactsPeer::MERCHANTS_ID, GroupdealsMerchantsPeer::MERCHANTS_ID, $join_behavior);

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
     * Selects a collection of QbcMerchantsContacts objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of QbcMerchantsContacts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(QbcMerchantsContactsPeer::DATABASE_NAME);
        }

        QbcMerchantsContactsPeer::addSelectColumns($criteria);
        $startcol2 = QbcMerchantsContactsPeer::NUM_HYDRATE_COLUMNS;

        GroupdealsMerchantsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GroupdealsMerchantsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(QbcMerchantsContactsPeer::MERCHANTS_ID, GroupdealsMerchantsPeer::MERCHANTS_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = QbcMerchantsContactsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = QbcMerchantsContactsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = QbcMerchantsContactsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                QbcMerchantsContactsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (QbcMerchantsContacts) to the collection in $obj2 (GroupdealsMerchants)
                $obj2->addQbcMerchantsContacts($obj1);
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
        return Propel::getDatabaseMap(QbcMerchantsContactsPeer::DATABASE_NAME)->getTable(QbcMerchantsContactsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseQbcMerchantsContactsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseQbcMerchantsContactsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \QbcMerchantsContactsTableMap());
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
        return QbcMerchantsContactsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a QbcMerchantsContacts or Criteria object.
     *
     * @param      mixed $values Criteria or QbcMerchantsContacts object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsContactsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from QbcMerchantsContacts object
        }

        if ($criteria->containsKey(QbcMerchantsContactsPeer::CONTACT_ID) && $criteria->keyContainsValue(QbcMerchantsContactsPeer::CONTACT_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.QbcMerchantsContactsPeer::CONTACT_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(QbcMerchantsContactsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a QbcMerchantsContacts or Criteria object.
     *
     * @param      mixed $values Criteria or QbcMerchantsContacts object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsContactsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(QbcMerchantsContactsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(QbcMerchantsContactsPeer::CONTACT_ID);
            $value = $criteria->remove(QbcMerchantsContactsPeer::CONTACT_ID);
            if ($value) {
                $selectCriteria->add(QbcMerchantsContactsPeer::CONTACT_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(QbcMerchantsContactsPeer::TABLE_NAME);
            }

        } else { // $values is QbcMerchantsContacts object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(QbcMerchantsContactsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the qbc_merchants_contacts table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsContactsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(QbcMerchantsContactsPeer::TABLE_NAME, $con, QbcMerchantsContactsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            QbcMerchantsContactsPeer::clearInstancePool();
            QbcMerchantsContactsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a QbcMerchantsContacts or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or QbcMerchantsContacts object or primary key or array of primary keys
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
            $con = Propel::getConnection(QbcMerchantsContactsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            QbcMerchantsContactsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof QbcMerchantsContacts) { // it's a model object
            // invalidate the cache for this single object
            QbcMerchantsContactsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(QbcMerchantsContactsPeer::DATABASE_NAME);
            $criteria->add(QbcMerchantsContactsPeer::CONTACT_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                QbcMerchantsContactsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(QbcMerchantsContactsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            QbcMerchantsContactsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given QbcMerchantsContacts object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param QbcMerchantsContacts $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(QbcMerchantsContactsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(QbcMerchantsContactsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(QbcMerchantsContactsPeer::DATABASE_NAME, QbcMerchantsContactsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return QbcMerchantsContacts
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = QbcMerchantsContactsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(QbcMerchantsContactsPeer::DATABASE_NAME);
        $criteria->add(QbcMerchantsContactsPeer::CONTACT_ID, $pk);

        $v = QbcMerchantsContactsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return QbcMerchantsContacts[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(QbcMerchantsContactsPeer::DATABASE_NAME);
            $criteria->add(QbcMerchantsContactsPeer::CONTACT_ID, $pks, Criteria::IN);
            $objs = QbcMerchantsContactsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseQbcMerchantsContactsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseQbcMerchantsContactsPeer::buildTableMap();

