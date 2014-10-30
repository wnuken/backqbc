<?php


/**
 * Base class that represents a query for the 'core_website' table.
 *
 *
 *
 * @method CoreWebsiteQuery orderByWebsiteId($order = Criteria::ASC) Order by the website_id column
 * @method CoreWebsiteQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method CoreWebsiteQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method CoreWebsiteQuery orderBySortOrder($order = Criteria::ASC) Order by the sort_order column
 * @method CoreWebsiteQuery orderByDefaultGroupId($order = Criteria::ASC) Order by the default_group_id column
 * @method CoreWebsiteQuery orderByIsDefault($order = Criteria::ASC) Order by the is_default column
 * @method CoreWebsiteQuery orderByIsStaging($order = Criteria::ASC) Order by the is_staging column
 * @method CoreWebsiteQuery orderByMasterLogin($order = Criteria::ASC) Order by the master_login column
 * @method CoreWebsiteQuery orderByMasterPassword($order = Criteria::ASC) Order by the master_password column
 * @method CoreWebsiteQuery orderByVisibility($order = Criteria::ASC) Order by the visibility column
 * @method CoreWebsiteQuery orderByIsVisible($order = Criteria::ASC) Order by the is_visible column
 * @method CoreWebsiteQuery orderByDepartment($order = Criteria::ASC) Order by the department column
 *
 * @method CoreWebsiteQuery groupByWebsiteId() Group by the website_id column
 * @method CoreWebsiteQuery groupByCode() Group by the code column
 * @method CoreWebsiteQuery groupByName() Group by the name column
 * @method CoreWebsiteQuery groupBySortOrder() Group by the sort_order column
 * @method CoreWebsiteQuery groupByDefaultGroupId() Group by the default_group_id column
 * @method CoreWebsiteQuery groupByIsDefault() Group by the is_default column
 * @method CoreWebsiteQuery groupByIsStaging() Group by the is_staging column
 * @method CoreWebsiteQuery groupByMasterLogin() Group by the master_login column
 * @method CoreWebsiteQuery groupByMasterPassword() Group by the master_password column
 * @method CoreWebsiteQuery groupByVisibility() Group by the visibility column
 * @method CoreWebsiteQuery groupByIsVisible() Group by the is_visible column
 * @method CoreWebsiteQuery groupByDepartment() Group by the department column
 *
 * @method CoreWebsiteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CoreWebsiteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CoreWebsiteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CoreWebsiteQuery leftJoinCoreStoreGroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the CoreStoreGroup relation
 * @method CoreWebsiteQuery rightJoinCoreStoreGroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CoreStoreGroup relation
 * @method CoreWebsiteQuery innerJoinCoreStoreGroup($relationAlias = null) Adds a INNER JOIN clause to the query using the CoreStoreGroup relation
 *
 * @method CoreWebsiteQuery leftJoinCoreStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the CoreStore relation
 * @method CoreWebsiteQuery rightJoinCoreStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CoreStore relation
 * @method CoreWebsiteQuery innerJoinCoreStore($relationAlias = null) Adds a INNER JOIN clause to the query using the CoreStore relation
 *
 * @method CoreWebsiteQuery leftJoinCustomerEntity($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerEntity relation
 * @method CoreWebsiteQuery rightJoinCustomerEntity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerEntity relation
 * @method CoreWebsiteQuery innerJoinCustomerEntity($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerEntity relation
 *
 * @method CoreWebsite findOne(PropelPDO $con = null) Return the first CoreWebsite matching the query
 * @method CoreWebsite findOneOrCreate(PropelPDO $con = null) Return the first CoreWebsite matching the query, or a new CoreWebsite object populated from the query conditions when no match is found
 *
 * @method CoreWebsite findOneByCode(string $code) Return the first CoreWebsite filtered by the code column
 * @method CoreWebsite findOneByName(string $name) Return the first CoreWebsite filtered by the name column
 * @method CoreWebsite findOneBySortOrder(int $sort_order) Return the first CoreWebsite filtered by the sort_order column
 * @method CoreWebsite findOneByDefaultGroupId(int $default_group_id) Return the first CoreWebsite filtered by the default_group_id column
 * @method CoreWebsite findOneByIsDefault(int $is_default) Return the first CoreWebsite filtered by the is_default column
 * @method CoreWebsite findOneByIsStaging(boolean $is_staging) Return the first CoreWebsite filtered by the is_staging column
 * @method CoreWebsite findOneByMasterLogin(string $master_login) Return the first CoreWebsite filtered by the master_login column
 * @method CoreWebsite findOneByMasterPassword(string $master_password) Return the first CoreWebsite filtered by the master_password column
 * @method CoreWebsite findOneByVisibility(string $visibility) Return the first CoreWebsite filtered by the visibility column
 * @method CoreWebsite findOneByIsVisible(string $is_visible) Return the first CoreWebsite filtered by the is_visible column
 * @method CoreWebsite findOneByDepartment(string $department) Return the first CoreWebsite filtered by the department column
 *
 * @method array findByWebsiteId(int $website_id) Return CoreWebsite objects filtered by the website_id column
 * @method array findByCode(string $code) Return CoreWebsite objects filtered by the code column
 * @method array findByName(string $name) Return CoreWebsite objects filtered by the name column
 * @method array findBySortOrder(int $sort_order) Return CoreWebsite objects filtered by the sort_order column
 * @method array findByDefaultGroupId(int $default_group_id) Return CoreWebsite objects filtered by the default_group_id column
 * @method array findByIsDefault(int $is_default) Return CoreWebsite objects filtered by the is_default column
 * @method array findByIsStaging(boolean $is_staging) Return CoreWebsite objects filtered by the is_staging column
 * @method array findByMasterLogin(string $master_login) Return CoreWebsite objects filtered by the master_login column
 * @method array findByMasterPassword(string $master_password) Return CoreWebsite objects filtered by the master_password column
 * @method array findByVisibility(string $visibility) Return CoreWebsite objects filtered by the visibility column
 * @method array findByIsVisible(string $is_visible) Return CoreWebsite objects filtered by the is_visible column
 * @method array findByDepartment(string $department) Return CoreWebsite objects filtered by the department column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseCoreWebsiteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCoreWebsiteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'atmadmin';
        }
        if (null === $modelName) {
            $modelName = 'CoreWebsite';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CoreWebsiteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CoreWebsiteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CoreWebsiteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CoreWebsiteQuery) {
            return $criteria;
        }
        $query = new CoreWebsiteQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CoreWebsite|CoreWebsite[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CoreWebsitePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CoreWebsitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CoreWebsite A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByWebsiteId($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CoreWebsite A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT website_id, code, name, sort_order, default_group_id, is_default, is_staging, master_login, master_password, visibility, is_visible, department FROM core_website WHERE website_id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CoreWebsite();
            $obj->hydrate($row);
            CoreWebsitePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CoreWebsite|CoreWebsite[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CoreWebsite[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CoreWebsiteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CoreWebsitePeer::WEBSITE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CoreWebsiteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CoreWebsitePeer::WEBSITE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the website_id column
     *
     * Example usage:
     * <code>
     * $query->filterByWebsiteId(1234); // WHERE website_id = 1234
     * $query->filterByWebsiteId(array(12, 34)); // WHERE website_id IN (12, 34)
     * $query->filterByWebsiteId(array('min' => 12)); // WHERE website_id >= 12
     * $query->filterByWebsiteId(array('max' => 12)); // WHERE website_id <= 12
     * </code>
     *
     * @param     mixed $websiteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreWebsiteQuery The current query, for fluid interface
     */
    public function filterByWebsiteId($websiteId = null, $comparison = null)
    {
        if (is_array($websiteId)) {
            $useMinMax = false;
            if (isset($websiteId['min'])) {
                $this->addUsingAlias(CoreWebsitePeer::WEBSITE_ID, $websiteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($websiteId['max'])) {
                $this->addUsingAlias(CoreWebsitePeer::WEBSITE_ID, $websiteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CoreWebsitePeer::WEBSITE_ID, $websiteId, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%'); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreWebsiteQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $code)) {
                $code = str_replace('*', '%', $code);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CoreWebsitePeer::CODE, $code, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreWebsiteQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CoreWebsitePeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the sort_order column
     *
     * Example usage:
     * <code>
     * $query->filterBySortOrder(1234); // WHERE sort_order = 1234
     * $query->filterBySortOrder(array(12, 34)); // WHERE sort_order IN (12, 34)
     * $query->filterBySortOrder(array('min' => 12)); // WHERE sort_order >= 12
     * $query->filterBySortOrder(array('max' => 12)); // WHERE sort_order <= 12
     * </code>
     *
     * @param     mixed $sortOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreWebsiteQuery The current query, for fluid interface
     */
    public function filterBySortOrder($sortOrder = null, $comparison = null)
    {
        if (is_array($sortOrder)) {
            $useMinMax = false;
            if (isset($sortOrder['min'])) {
                $this->addUsingAlias(CoreWebsitePeer::SORT_ORDER, $sortOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sortOrder['max'])) {
                $this->addUsingAlias(CoreWebsitePeer::SORT_ORDER, $sortOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CoreWebsitePeer::SORT_ORDER, $sortOrder, $comparison);
    }

    /**
     * Filter the query on the default_group_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDefaultGroupId(1234); // WHERE default_group_id = 1234
     * $query->filterByDefaultGroupId(array(12, 34)); // WHERE default_group_id IN (12, 34)
     * $query->filterByDefaultGroupId(array('min' => 12)); // WHERE default_group_id >= 12
     * $query->filterByDefaultGroupId(array('max' => 12)); // WHERE default_group_id <= 12
     * </code>
     *
     * @param     mixed $defaultGroupId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreWebsiteQuery The current query, for fluid interface
     */
    public function filterByDefaultGroupId($defaultGroupId = null, $comparison = null)
    {
        if (is_array($defaultGroupId)) {
            $useMinMax = false;
            if (isset($defaultGroupId['min'])) {
                $this->addUsingAlias(CoreWebsitePeer::DEFAULT_GROUP_ID, $defaultGroupId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($defaultGroupId['max'])) {
                $this->addUsingAlias(CoreWebsitePeer::DEFAULT_GROUP_ID, $defaultGroupId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CoreWebsitePeer::DEFAULT_GROUP_ID, $defaultGroupId, $comparison);
    }

    /**
     * Filter the query on the is_default column
     *
     * Example usage:
     * <code>
     * $query->filterByIsDefault(1234); // WHERE is_default = 1234
     * $query->filterByIsDefault(array(12, 34)); // WHERE is_default IN (12, 34)
     * $query->filterByIsDefault(array('min' => 12)); // WHERE is_default >= 12
     * $query->filterByIsDefault(array('max' => 12)); // WHERE is_default <= 12
     * </code>
     *
     * @param     mixed $isDefault The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreWebsiteQuery The current query, for fluid interface
     */
    public function filterByIsDefault($isDefault = null, $comparison = null)
    {
        if (is_array($isDefault)) {
            $useMinMax = false;
            if (isset($isDefault['min'])) {
                $this->addUsingAlias(CoreWebsitePeer::IS_DEFAULT, $isDefault['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isDefault['max'])) {
                $this->addUsingAlias(CoreWebsitePeer::IS_DEFAULT, $isDefault['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CoreWebsitePeer::IS_DEFAULT, $isDefault, $comparison);
    }

    /**
     * Filter the query on the is_staging column
     *
     * Example usage:
     * <code>
     * $query->filterByIsStaging(true); // WHERE is_staging = true
     * $query->filterByIsStaging('yes'); // WHERE is_staging = true
     * </code>
     *
     * @param     boolean|string $isStaging The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreWebsiteQuery The current query, for fluid interface
     */
    public function filterByIsStaging($isStaging = null, $comparison = null)
    {
        if (is_string($isStaging)) {
            $isStaging = in_array(strtolower($isStaging), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CoreWebsitePeer::IS_STAGING, $isStaging, $comparison);
    }

    /**
     * Filter the query on the master_login column
     *
     * Example usage:
     * <code>
     * $query->filterByMasterLogin('fooValue');   // WHERE master_login = 'fooValue'
     * $query->filterByMasterLogin('%fooValue%'); // WHERE master_login LIKE '%fooValue%'
     * </code>
     *
     * @param     string $masterLogin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreWebsiteQuery The current query, for fluid interface
     */
    public function filterByMasterLogin($masterLogin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($masterLogin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $masterLogin)) {
                $masterLogin = str_replace('*', '%', $masterLogin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CoreWebsitePeer::MASTER_LOGIN, $masterLogin, $comparison);
    }

    /**
     * Filter the query on the master_password column
     *
     * Example usage:
     * <code>
     * $query->filterByMasterPassword('fooValue');   // WHERE master_password = 'fooValue'
     * $query->filterByMasterPassword('%fooValue%'); // WHERE master_password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $masterPassword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreWebsiteQuery The current query, for fluid interface
     */
    public function filterByMasterPassword($masterPassword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($masterPassword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $masterPassword)) {
                $masterPassword = str_replace('*', '%', $masterPassword);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CoreWebsitePeer::MASTER_PASSWORD, $masterPassword, $comparison);
    }

    /**
     * Filter the query on the visibility column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibility('fooValue');   // WHERE visibility = 'fooValue'
     * $query->filterByVisibility('%fooValue%'); // WHERE visibility LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibility The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreWebsiteQuery The current query, for fluid interface
     */
    public function filterByVisibility($visibility = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibility)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibility)) {
                $visibility = str_replace('*', '%', $visibility);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CoreWebsitePeer::VISIBILITY, $visibility, $comparison);
    }

    /**
     * Filter the query on the is_visible column
     *
     * Example usage:
     * <code>
     * $query->filterByIsVisible('fooValue');   // WHERE is_visible = 'fooValue'
     * $query->filterByIsVisible('%fooValue%'); // WHERE is_visible LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isVisible The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreWebsiteQuery The current query, for fluid interface
     */
    public function filterByIsVisible($isVisible = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isVisible)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $isVisible)) {
                $isVisible = str_replace('*', '%', $isVisible);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CoreWebsitePeer::IS_VISIBLE, $isVisible, $comparison);
    }

    /**
     * Filter the query on the department column
     *
     * Example usage:
     * <code>
     * $query->filterByDepartment('fooValue');   // WHERE department = 'fooValue'
     * $query->filterByDepartment('%fooValue%'); // WHERE department LIKE '%fooValue%'
     * </code>
     *
     * @param     string $department The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreWebsiteQuery The current query, for fluid interface
     */
    public function filterByDepartment($department = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($department)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $department)) {
                $department = str_replace('*', '%', $department);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CoreWebsitePeer::DEPARTMENT, $department, $comparison);
    }

    /**
     * Filter the query by a related CoreStoreGroup object
     *
     * @param   CoreStoreGroup|PropelObjectCollection $coreStoreGroup  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CoreWebsiteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCoreStoreGroup($coreStoreGroup, $comparison = null)
    {
        if ($coreStoreGroup instanceof CoreStoreGroup) {
            return $this
                ->addUsingAlias(CoreWebsitePeer::WEBSITE_ID, $coreStoreGroup->getWebsiteId(), $comparison);
        } elseif ($coreStoreGroup instanceof PropelObjectCollection) {
            return $this
                ->useCoreStoreGroupQuery()
                ->filterByPrimaryKeys($coreStoreGroup->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCoreStoreGroup() only accepts arguments of type CoreStoreGroup or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CoreStoreGroup relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CoreWebsiteQuery The current query, for fluid interface
     */
    public function joinCoreStoreGroup($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CoreStoreGroup');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CoreStoreGroup');
        }

        return $this;
    }

    /**
     * Use the CoreStoreGroup relation CoreStoreGroup object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CoreStoreGroupQuery A secondary query class using the current class as primary query
     */
    public function useCoreStoreGroupQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCoreStoreGroup($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CoreStoreGroup', 'CoreStoreGroupQuery');
    }

    /**
     * Filter the query by a related CoreStore object
     *
     * @param   CoreStore|PropelObjectCollection $coreStore  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CoreWebsiteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCoreStore($coreStore, $comparison = null)
    {
        if ($coreStore instanceof CoreStore) {
            return $this
                ->addUsingAlias(CoreWebsitePeer::WEBSITE_ID, $coreStore->getWebsiteId(), $comparison);
        } elseif ($coreStore instanceof PropelObjectCollection) {
            return $this
                ->useCoreStoreQuery()
                ->filterByPrimaryKeys($coreStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCoreStore() only accepts arguments of type CoreStore or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CoreStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CoreWebsiteQuery The current query, for fluid interface
     */
    public function joinCoreStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CoreStore');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CoreStore');
        }

        return $this;
    }

    /**
     * Use the CoreStore relation CoreStore object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CoreStoreQuery A secondary query class using the current class as primary query
     */
    public function useCoreStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCoreStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CoreStore', 'CoreStoreQuery');
    }

    /**
     * Filter the query by a related CustomerEntity object
     *
     * @param   CustomerEntity|PropelObjectCollection $customerEntity  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CoreWebsiteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCustomerEntity($customerEntity, $comparison = null)
    {
        if ($customerEntity instanceof CustomerEntity) {
            return $this
                ->addUsingAlias(CoreWebsitePeer::WEBSITE_ID, $customerEntity->getWebsiteId(), $comparison);
        } elseif ($customerEntity instanceof PropelObjectCollection) {
            return $this
                ->useCustomerEntityQuery()
                ->filterByPrimaryKeys($customerEntity->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCustomerEntity() only accepts arguments of type CustomerEntity or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CustomerEntity relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CoreWebsiteQuery The current query, for fluid interface
     */
    public function joinCustomerEntity($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CustomerEntity');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CustomerEntity');
        }

        return $this;
    }

    /**
     * Use the CustomerEntity relation CustomerEntity object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CustomerEntityQuery A secondary query class using the current class as primary query
     */
    public function useCustomerEntityQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCustomerEntity($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CustomerEntity', 'CustomerEntityQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CoreWebsite $coreWebsite Object to remove from the list of results
     *
     * @return CoreWebsiteQuery The current query, for fluid interface
     */
    public function prune($coreWebsite = null)
    {
        if ($coreWebsite) {
            $this->addUsingAlias(CoreWebsitePeer::WEBSITE_ID, $coreWebsite->getWebsiteId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
