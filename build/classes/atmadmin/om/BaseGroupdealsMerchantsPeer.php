<?php


/**
 * Base static class for performing query and update operations on the 'groupdeals_merchants' table.
 *
 *
 *
 * @package propel.generator.atmadmin.om
 */
abstract class BaseGroupdealsMerchantsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'atmadmin';

    /** the table name for this class */
    const TABLE_NAME = 'groupdeals_merchants';

    /** the related Propel class for this table */
    const OM_CLASS = 'GroupdealsMerchants';

    /** the related TableMap class for this table */
    const TM_CLASS = 'GroupdealsMerchantsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 29;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 29;

    /** the column name for the merchants_id field */
    const MERCHANTS_ID = 'groupdeals_merchants.merchants_id';

    /** the column name for the user_id field */
    const USER_ID = 'groupdeals_merchants.user_id';

    /** the column name for the permissions field */
    const PERMISSIONS = 'groupdeals_merchants.permissions';

    /** the column name for the name field */
    const NAME = 'groupdeals_merchants.name';

    /** the column name for the merchant_logo field */
    const MERCHANT_LOGO = 'groupdeals_merchants.merchant_logo';

    /** the column name for the description field */
    const DESCRIPTION = 'groupdeals_merchants.description';

    /** the column name for the website field */
    const WEBSITE = 'groupdeals_merchants.website';

    /** the column name for the email field */
    const EMAIL = 'groupdeals_merchants.email';

    /** the column name for the facebook field */
    const FACEBOOK = 'groupdeals_merchants.facebook';

    /** the column name for the twitter field */
    const TWITTER = 'groupdeals_merchants.twitter';

    /** the column name for the phone field */
    const PHONE = 'groupdeals_merchants.phone';

    /** the column name for the mobile field */
    const MOBILE = 'groupdeals_merchants.mobile';

    /** the column name for the business_hours field */
    const BUSINESS_HOURS = 'groupdeals_merchants.business_hours';

    /** the column name for the address field */
    const ADDRESS = 'groupdeals_merchants.address';

    /** the column name for the redeem field */
    const REDEEM = 'groupdeals_merchants.redeem';

    /** the column name for the paypal_email field */
    const PAYPAL_EMAIL = 'groupdeals_merchants.paypal_email';

    /** the column name for the authorize_info field */
    const AUTHORIZE_INFO = 'groupdeals_merchants.authorize_info';

    /** the column name for the bank_info field */
    const BANK_INFO = 'groupdeals_merchants.bank_info';

    /** the column name for the other field */
    const OTHER = 'groupdeals_merchants.other';

    /** the column name for the status field */
    const STATUS = 'groupdeals_merchants.status';

    /** the column name for the nit_number field */
    const NIT_NUMBER = 'groupdeals_merchants.nit_number';

    /** the column name for the agent field */
    const AGENT = 'groupdeals_merchants.agent';

    /** the column name for the service_provided field */
    const SERVICE_PROVIDED = 'groupdeals_merchants.service_provided';

    /** the column name for the city field */
    const CITY = 'groupdeals_merchants.city';

    /** the column name for the country field */
    const COUNTRY = 'groupdeals_merchants.country';

    /** the column name for the primary_contact field */
    const PRIMARY_CONTACT = 'groupdeals_merchants.primary_contact';

    /** the column name for the secondary_contact field */
    const SECONDARY_CONTACT = 'groupdeals_merchants.secondary_contact';

    /** the column name for the legal_name field */
    const LEGAL_NAME = 'groupdeals_merchants.legal_name';

    /** the column name for the branch field */
    const BRANCH = 'groupdeals_merchants.branch';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GroupdealsMerchants objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GroupdealsMerchants[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GroupdealsMerchantsPeer::$fieldNames[GroupdealsMerchantsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('MerchantsId', 'UserId', 'Permissions', 'Name', 'MerchantLogo', 'Description', 'Website', 'Email', 'Facebook', 'Twitter', 'Phone', 'Mobile', 'BusinessHours', 'Address', 'Redeem', 'PaypalEmail', 'AuthorizeInfo', 'BankInfo', 'Other', 'Status', 'NitNumber', 'Agent', 'ServiceProvided', 'City', 'Country', 'PrimaryContact', 'SecondaryContact', 'LegalName', 'Branch', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('merchantsId', 'userId', 'permissions', 'name', 'merchantLogo', 'description', 'website', 'email', 'facebook', 'twitter', 'phone', 'mobile', 'businessHours', 'address', 'redeem', 'paypalEmail', 'authorizeInfo', 'bankInfo', 'other', 'status', 'nitNumber', 'agent', 'serviceProvided', 'city', 'country', 'primaryContact', 'secondaryContact', 'legalName', 'branch', ),
        BasePeer::TYPE_COLNAME => array (GroupdealsMerchantsPeer::MERCHANTS_ID, GroupdealsMerchantsPeer::USER_ID, GroupdealsMerchantsPeer::PERMISSIONS, GroupdealsMerchantsPeer::NAME, GroupdealsMerchantsPeer::MERCHANT_LOGO, GroupdealsMerchantsPeer::DESCRIPTION, GroupdealsMerchantsPeer::WEBSITE, GroupdealsMerchantsPeer::EMAIL, GroupdealsMerchantsPeer::FACEBOOK, GroupdealsMerchantsPeer::TWITTER, GroupdealsMerchantsPeer::PHONE, GroupdealsMerchantsPeer::MOBILE, GroupdealsMerchantsPeer::BUSINESS_HOURS, GroupdealsMerchantsPeer::ADDRESS, GroupdealsMerchantsPeer::REDEEM, GroupdealsMerchantsPeer::PAYPAL_EMAIL, GroupdealsMerchantsPeer::AUTHORIZE_INFO, GroupdealsMerchantsPeer::BANK_INFO, GroupdealsMerchantsPeer::OTHER, GroupdealsMerchantsPeer::STATUS, GroupdealsMerchantsPeer::NIT_NUMBER, GroupdealsMerchantsPeer::AGENT, GroupdealsMerchantsPeer::SERVICE_PROVIDED, GroupdealsMerchantsPeer::CITY, GroupdealsMerchantsPeer::COUNTRY, GroupdealsMerchantsPeer::PRIMARY_CONTACT, GroupdealsMerchantsPeer::SECONDARY_CONTACT, GroupdealsMerchantsPeer::LEGAL_NAME, GroupdealsMerchantsPeer::BRANCH, ),
        BasePeer::TYPE_RAW_COLNAME => array ('MERCHANTS_ID', 'USER_ID', 'PERMISSIONS', 'NAME', 'MERCHANT_LOGO', 'DESCRIPTION', 'WEBSITE', 'EMAIL', 'FACEBOOK', 'TWITTER', 'PHONE', 'MOBILE', 'BUSINESS_HOURS', 'ADDRESS', 'REDEEM', 'PAYPAL_EMAIL', 'AUTHORIZE_INFO', 'BANK_INFO', 'OTHER', 'STATUS', 'NIT_NUMBER', 'AGENT', 'SERVICE_PROVIDED', 'CITY', 'COUNTRY', 'PRIMARY_CONTACT', 'SECONDARY_CONTACT', 'LEGAL_NAME', 'BRANCH', ),
        BasePeer::TYPE_FIELDNAME => array ('merchants_id', 'user_id', 'permissions', 'name', 'merchant_logo', 'description', 'website', 'email', 'facebook', 'twitter', 'phone', 'mobile', 'business_hours', 'address', 'redeem', 'paypal_email', 'authorize_info', 'bank_info', 'other', 'status', 'nit_number', 'agent', 'service_provided', 'city', 'country', 'primary_contact', 'secondary_contact', 'legal_name', 'branch', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GroupdealsMerchantsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('MerchantsId' => 0, 'UserId' => 1, 'Permissions' => 2, 'Name' => 3, 'MerchantLogo' => 4, 'Description' => 5, 'Website' => 6, 'Email' => 7, 'Facebook' => 8, 'Twitter' => 9, 'Phone' => 10, 'Mobile' => 11, 'BusinessHours' => 12, 'Address' => 13, 'Redeem' => 14, 'PaypalEmail' => 15, 'AuthorizeInfo' => 16, 'BankInfo' => 17, 'Other' => 18, 'Status' => 19, 'NitNumber' => 20, 'Agent' => 21, 'ServiceProvided' => 22, 'City' => 23, 'Country' => 24, 'PrimaryContact' => 25, 'SecondaryContact' => 26, 'LegalName' => 27, 'Branch' => 28, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('merchantsId' => 0, 'userId' => 1, 'permissions' => 2, 'name' => 3, 'merchantLogo' => 4, 'description' => 5, 'website' => 6, 'email' => 7, 'facebook' => 8, 'twitter' => 9, 'phone' => 10, 'mobile' => 11, 'businessHours' => 12, 'address' => 13, 'redeem' => 14, 'paypalEmail' => 15, 'authorizeInfo' => 16, 'bankInfo' => 17, 'other' => 18, 'status' => 19, 'nitNumber' => 20, 'agent' => 21, 'serviceProvided' => 22, 'city' => 23, 'country' => 24, 'primaryContact' => 25, 'secondaryContact' => 26, 'legalName' => 27, 'branch' => 28, ),
        BasePeer::TYPE_COLNAME => array (GroupdealsMerchantsPeer::MERCHANTS_ID => 0, GroupdealsMerchantsPeer::USER_ID => 1, GroupdealsMerchantsPeer::PERMISSIONS => 2, GroupdealsMerchantsPeer::NAME => 3, GroupdealsMerchantsPeer::MERCHANT_LOGO => 4, GroupdealsMerchantsPeer::DESCRIPTION => 5, GroupdealsMerchantsPeer::WEBSITE => 6, GroupdealsMerchantsPeer::EMAIL => 7, GroupdealsMerchantsPeer::FACEBOOK => 8, GroupdealsMerchantsPeer::TWITTER => 9, GroupdealsMerchantsPeer::PHONE => 10, GroupdealsMerchantsPeer::MOBILE => 11, GroupdealsMerchantsPeer::BUSINESS_HOURS => 12, GroupdealsMerchantsPeer::ADDRESS => 13, GroupdealsMerchantsPeer::REDEEM => 14, GroupdealsMerchantsPeer::PAYPAL_EMAIL => 15, GroupdealsMerchantsPeer::AUTHORIZE_INFO => 16, GroupdealsMerchantsPeer::BANK_INFO => 17, GroupdealsMerchantsPeer::OTHER => 18, GroupdealsMerchantsPeer::STATUS => 19, GroupdealsMerchantsPeer::NIT_NUMBER => 20, GroupdealsMerchantsPeer::AGENT => 21, GroupdealsMerchantsPeer::SERVICE_PROVIDED => 22, GroupdealsMerchantsPeer::CITY => 23, GroupdealsMerchantsPeer::COUNTRY => 24, GroupdealsMerchantsPeer::PRIMARY_CONTACT => 25, GroupdealsMerchantsPeer::SECONDARY_CONTACT => 26, GroupdealsMerchantsPeer::LEGAL_NAME => 27, GroupdealsMerchantsPeer::BRANCH => 28, ),
        BasePeer::TYPE_RAW_COLNAME => array ('MERCHANTS_ID' => 0, 'USER_ID' => 1, 'PERMISSIONS' => 2, 'NAME' => 3, 'MERCHANT_LOGO' => 4, 'DESCRIPTION' => 5, 'WEBSITE' => 6, 'EMAIL' => 7, 'FACEBOOK' => 8, 'TWITTER' => 9, 'PHONE' => 10, 'MOBILE' => 11, 'BUSINESS_HOURS' => 12, 'ADDRESS' => 13, 'REDEEM' => 14, 'PAYPAL_EMAIL' => 15, 'AUTHORIZE_INFO' => 16, 'BANK_INFO' => 17, 'OTHER' => 18, 'STATUS' => 19, 'NIT_NUMBER' => 20, 'AGENT' => 21, 'SERVICE_PROVIDED' => 22, 'CITY' => 23, 'COUNTRY' => 24, 'PRIMARY_CONTACT' => 25, 'SECONDARY_CONTACT' => 26, 'LEGAL_NAME' => 27, 'BRANCH' => 28, ),
        BasePeer::TYPE_FIELDNAME => array ('merchants_id' => 0, 'user_id' => 1, 'permissions' => 2, 'name' => 3, 'merchant_logo' => 4, 'description' => 5, 'website' => 6, 'email' => 7, 'facebook' => 8, 'twitter' => 9, 'phone' => 10, 'mobile' => 11, 'business_hours' => 12, 'address' => 13, 'redeem' => 14, 'paypal_email' => 15, 'authorize_info' => 16, 'bank_info' => 17, 'other' => 18, 'status' => 19, 'nit_number' => 20, 'agent' => 21, 'service_provided' => 22, 'city' => 23, 'country' => 24, 'primary_contact' => 25, 'secondary_contact' => 26, 'legal_name' => 27, 'branch' => 28, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
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
        $toNames = GroupdealsMerchantsPeer::getFieldNames($toType);
        $key = isset(GroupdealsMerchantsPeer::$fieldKeys[$fromType][$name]) ? GroupdealsMerchantsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GroupdealsMerchantsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GroupdealsMerchantsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GroupdealsMerchantsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GroupdealsMerchantsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GroupdealsMerchantsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::MERCHANTS_ID);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::USER_ID);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::PERMISSIONS);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::NAME);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::MERCHANT_LOGO);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::DESCRIPTION);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::WEBSITE);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::EMAIL);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::FACEBOOK);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::TWITTER);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::PHONE);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::MOBILE);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::BUSINESS_HOURS);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::ADDRESS);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::REDEEM);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::PAYPAL_EMAIL);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::AUTHORIZE_INFO);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::BANK_INFO);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::OTHER);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::STATUS);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::NIT_NUMBER);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::AGENT);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::SERVICE_PROVIDED);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::CITY);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::COUNTRY);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::PRIMARY_CONTACT);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::SECONDARY_CONTACT);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::LEGAL_NAME);
            $criteria->addSelectColumn(GroupdealsMerchantsPeer::BRANCH);
        } else {
            $criteria->addSelectColumn($alias . '.merchants_id');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.permissions');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.merchant_logo');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.website');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.facebook');
            $criteria->addSelectColumn($alias . '.twitter');
            $criteria->addSelectColumn($alias . '.phone');
            $criteria->addSelectColumn($alias . '.mobile');
            $criteria->addSelectColumn($alias . '.business_hours');
            $criteria->addSelectColumn($alias . '.address');
            $criteria->addSelectColumn($alias . '.redeem');
            $criteria->addSelectColumn($alias . '.paypal_email');
            $criteria->addSelectColumn($alias . '.authorize_info');
            $criteria->addSelectColumn($alias . '.bank_info');
            $criteria->addSelectColumn($alias . '.other');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.nit_number');
            $criteria->addSelectColumn($alias . '.agent');
            $criteria->addSelectColumn($alias . '.service_provided');
            $criteria->addSelectColumn($alias . '.city');
            $criteria->addSelectColumn($alias . '.country');
            $criteria->addSelectColumn($alias . '.primary_contact');
            $criteria->addSelectColumn($alias . '.secondary_contact');
            $criteria->addSelectColumn($alias . '.legal_name');
            $criteria->addSelectColumn($alias . '.branch');
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
        $criteria->setPrimaryTableName(GroupdealsMerchantsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GroupdealsMerchantsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GroupdealsMerchantsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GroupdealsMerchantsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GroupdealsMerchants
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GroupdealsMerchantsPeer::doSelect($critcopy, $con);
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
        return GroupdealsMerchantsPeer::populateObjects(GroupdealsMerchantsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GroupdealsMerchantsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GroupdealsMerchantsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GroupdealsMerchantsPeer::DATABASE_NAME);

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
     * @param GroupdealsMerchants $obj A GroupdealsMerchants object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getMerchantsId();
            } // if key === null
            GroupdealsMerchantsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GroupdealsMerchants object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GroupdealsMerchants) {
                $key = (string) $value->getMerchantsId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GroupdealsMerchants object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GroupdealsMerchantsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GroupdealsMerchants Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GroupdealsMerchantsPeer::$instances[$key])) {
                return GroupdealsMerchantsPeer::$instances[$key];
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
        foreach (GroupdealsMerchantsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GroupdealsMerchantsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to groupdeals_merchants
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in QbcMerchantsCommercialNamesPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        QbcMerchantsCommercialNamesPeer::clearInstancePool();
        // Invalidate objects in QbcMerchantsContactsPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        QbcMerchantsContactsPeer::clearInstancePool();
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
        $cls = GroupdealsMerchantsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GroupdealsMerchantsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GroupdealsMerchantsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GroupdealsMerchantsPeer::addInstanceToPool($obj, $key);
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
     * @return array (GroupdealsMerchants object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GroupdealsMerchantsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GroupdealsMerchantsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GroupdealsMerchantsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GroupdealsMerchantsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GroupdealsMerchantsPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related MerchantBankInfo table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinMerchantBankInfo(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GroupdealsMerchantsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GroupdealsMerchantsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GroupdealsMerchantsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GroupdealsMerchantsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GroupdealsMerchantsPeer::BANK_INFO, MerchantBankInfoPeer::INFO_ID, $join_behavior);

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
     * Selects a collection of GroupdealsMerchants objects pre-filled with their MerchantBankInfo objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GroupdealsMerchants objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinMerchantBankInfo(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GroupdealsMerchantsPeer::DATABASE_NAME);
        }

        GroupdealsMerchantsPeer::addSelectColumns($criteria);
        $startcol = GroupdealsMerchantsPeer::NUM_HYDRATE_COLUMNS;
        MerchantBankInfoPeer::addSelectColumns($criteria);

        $criteria->addJoin(GroupdealsMerchantsPeer::BANK_INFO, MerchantBankInfoPeer::INFO_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GroupdealsMerchantsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GroupdealsMerchantsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GroupdealsMerchantsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GroupdealsMerchantsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = MerchantBankInfoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = MerchantBankInfoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = MerchantBankInfoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    MerchantBankInfoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GroupdealsMerchants) to $obj2 (MerchantBankInfo)
                $obj2->addGroupdealsMerchants($obj1);

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
        $criteria->setPrimaryTableName(GroupdealsMerchantsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GroupdealsMerchantsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GroupdealsMerchantsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GroupdealsMerchantsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GroupdealsMerchantsPeer::BANK_INFO, MerchantBankInfoPeer::INFO_ID, $join_behavior);

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
     * Selects a collection of GroupdealsMerchants objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GroupdealsMerchants objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GroupdealsMerchantsPeer::DATABASE_NAME);
        }

        GroupdealsMerchantsPeer::addSelectColumns($criteria);
        $startcol2 = GroupdealsMerchantsPeer::NUM_HYDRATE_COLUMNS;

        MerchantBankInfoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + MerchantBankInfoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GroupdealsMerchantsPeer::BANK_INFO, MerchantBankInfoPeer::INFO_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GroupdealsMerchantsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GroupdealsMerchantsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GroupdealsMerchantsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GroupdealsMerchantsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined MerchantBankInfo rows

            $key2 = MerchantBankInfoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = MerchantBankInfoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = MerchantBankInfoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    MerchantBankInfoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (GroupdealsMerchants) to the collection in $obj2 (MerchantBankInfo)
                $obj2->addGroupdealsMerchants($obj1);
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
        return Propel::getDatabaseMap(GroupdealsMerchantsPeer::DATABASE_NAME)->getTable(GroupdealsMerchantsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGroupdealsMerchantsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGroupdealsMerchantsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \GroupdealsMerchantsTableMap());
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
        return GroupdealsMerchantsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GroupdealsMerchants or Criteria object.
     *
     * @param      mixed $values Criteria or GroupdealsMerchants object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GroupdealsMerchantsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GroupdealsMerchants object
        }

        if ($criteria->containsKey(GroupdealsMerchantsPeer::MERCHANTS_ID) && $criteria->keyContainsValue(GroupdealsMerchantsPeer::MERCHANTS_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.GroupdealsMerchantsPeer::MERCHANTS_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(GroupdealsMerchantsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GroupdealsMerchants or Criteria object.
     *
     * @param      mixed $values Criteria or GroupdealsMerchants object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GroupdealsMerchantsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GroupdealsMerchantsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GroupdealsMerchantsPeer::MERCHANTS_ID);
            $value = $criteria->remove(GroupdealsMerchantsPeer::MERCHANTS_ID);
            if ($value) {
                $selectCriteria->add(GroupdealsMerchantsPeer::MERCHANTS_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GroupdealsMerchantsPeer::TABLE_NAME);
            }

        } else { // $values is GroupdealsMerchants object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GroupdealsMerchantsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the groupdeals_merchants table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GroupdealsMerchantsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GroupdealsMerchantsPeer::TABLE_NAME, $con, GroupdealsMerchantsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GroupdealsMerchantsPeer::clearInstancePool();
            GroupdealsMerchantsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GroupdealsMerchants or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GroupdealsMerchants object or primary key or array of primary keys
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
            $con = Propel::getConnection(GroupdealsMerchantsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GroupdealsMerchantsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GroupdealsMerchants) { // it's a model object
            // invalidate the cache for this single object
            GroupdealsMerchantsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GroupdealsMerchantsPeer::DATABASE_NAME);
            $criteria->add(GroupdealsMerchantsPeer::MERCHANTS_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GroupdealsMerchantsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GroupdealsMerchantsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GroupdealsMerchantsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GroupdealsMerchants object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GroupdealsMerchants $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GroupdealsMerchantsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GroupdealsMerchantsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GroupdealsMerchantsPeer::DATABASE_NAME, GroupdealsMerchantsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GroupdealsMerchants
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GroupdealsMerchantsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GroupdealsMerchantsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GroupdealsMerchantsPeer::DATABASE_NAME);
        $criteria->add(GroupdealsMerchantsPeer::MERCHANTS_ID, $pk);

        $v = GroupdealsMerchantsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GroupdealsMerchants[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GroupdealsMerchantsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GroupdealsMerchantsPeer::DATABASE_NAME);
            $criteria->add(GroupdealsMerchantsPeer::MERCHANTS_ID, $pks, Criteria::IN);
            $objs = GroupdealsMerchantsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGroupdealsMerchantsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGroupdealsMerchantsPeer::buildTableMap();

