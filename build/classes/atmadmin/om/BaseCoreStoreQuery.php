<?php


/**
 * Base class that represents a query for the 'core_store' table.
 *
 *
 *
 * @method CoreStoreQuery orderByStoreId($order = Criteria::ASC) Order by the store_id column
 * @method CoreStoreQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method CoreStoreQuery orderByWebsiteId($order = Criteria::ASC) Order by the website_id column
 * @method CoreStoreQuery orderByGroupId($order = Criteria::ASC) Order by the group_id column
 * @method CoreStoreQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method CoreStoreQuery orderBySortOrder($order = Criteria::ASC) Order by the sort_order column
 * @method CoreStoreQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 *
 * @method CoreStoreQuery groupByStoreId() Group by the store_id column
 * @method CoreStoreQuery groupByCode() Group by the code column
 * @method CoreStoreQuery groupByWebsiteId() Group by the website_id column
 * @method CoreStoreQuery groupByGroupId() Group by the group_id column
 * @method CoreStoreQuery groupByName() Group by the name column
 * @method CoreStoreQuery groupBySortOrder() Group by the sort_order column
 * @method CoreStoreQuery groupByIsActive() Group by the is_active column
 *
 * @method CoreStoreQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CoreStoreQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CoreStoreQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CoreStoreQuery leftJoinCoreStoreGroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the CoreStoreGroup relation
 * @method CoreStoreQuery rightJoinCoreStoreGroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CoreStoreGroup relation
 * @method CoreStoreQuery innerJoinCoreStoreGroup($relationAlias = null) Adds a INNER JOIN clause to the query using the CoreStoreGroup relation
 *
 * @method CoreStoreQuery leftJoinCoreWebsite($relationAlias = null) Adds a LEFT JOIN clause to the query using the CoreWebsite relation
 * @method CoreStoreQuery rightJoinCoreWebsite($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CoreWebsite relation
 * @method CoreStoreQuery innerJoinCoreWebsite($relationAlias = null) Adds a INNER JOIN clause to the query using the CoreWebsite relation
 *
 * @method CoreStoreQuery leftJoinCustomerEntity($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerEntity relation
 * @method CoreStoreQuery rightJoinCustomerEntity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerEntity relation
 * @method CoreStoreQuery innerJoinCustomerEntity($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerEntity relation
 *
 * @method CoreStoreQuery leftJoinSalesFlatOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesFlatOrder relation
 * @method CoreStoreQuery rightJoinSalesFlatOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesFlatOrder relation
 * @method CoreStoreQuery innerJoinSalesFlatOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesFlatOrder relation
 *
 * @method CoreStoreQuery leftJoinSalesFlatOrderItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesFlatOrderItem relation
 * @method CoreStoreQuery rightJoinSalesFlatOrderItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesFlatOrderItem relation
 * @method CoreStoreQuery innerJoinSalesFlatOrderItem($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesFlatOrderItem relation
 *
 * @method CoreStoreQuery leftJoinEnterpriseBannerContent($relationAlias = null) Adds a LEFT JOIN clause to the query using the EnterpriseBannerContent relation
 * @method CoreStoreQuery rightJoinEnterpriseBannerContent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EnterpriseBannerContent relation
 * @method CoreStoreQuery innerJoinEnterpriseBannerContent($relationAlias = null) Adds a INNER JOIN clause to the query using the EnterpriseBannerContent relation
 *
 * @method CoreStore findOne(PropelPDO $con = null) Return the first CoreStore matching the query
 * @method CoreStore findOneOrCreate(PropelPDO $con = null) Return the first CoreStore matching the query, or a new CoreStore object populated from the query conditions when no match is found
 *
 * @method CoreStore findOneByCode(string $code) Return the first CoreStore filtered by the code column
 * @method CoreStore findOneByWebsiteId(int $website_id) Return the first CoreStore filtered by the website_id column
 * @method CoreStore findOneByGroupId(int $group_id) Return the first CoreStore filtered by the group_id column
 * @method CoreStore findOneByName(string $name) Return the first CoreStore filtered by the name column
 * @method CoreStore findOneBySortOrder(int $sort_order) Return the first CoreStore filtered by the sort_order column
 * @method CoreStore findOneByIsActive(int $is_active) Return the first CoreStore filtered by the is_active column
 *
 * @method array findByStoreId(int $store_id) Return CoreStore objects filtered by the store_id column
 * @method array findByCode(string $code) Return CoreStore objects filtered by the code column
 * @method array findByWebsiteId(int $website_id) Return CoreStore objects filtered by the website_id column
 * @method array findByGroupId(int $group_id) Return CoreStore objects filtered by the group_id column
 * @method array findByName(string $name) Return CoreStore objects filtered by the name column
 * @method array findBySortOrder(int $sort_order) Return CoreStore objects filtered by the sort_order column
 * @method array findByIsActive(int $is_active) Return CoreStore objects filtered by the is_active column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseCoreStoreQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCoreStoreQuery object.
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
            $modelName = 'CoreStore';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CoreStoreQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CoreStoreQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CoreStoreQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CoreStoreQuery) {
            return $criteria;
        }
        $query = new CoreStoreQuery(null, null, $modelAlias);

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
     * @return   CoreStore|CoreStore[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CoreStorePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CoreStorePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CoreStore A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByStoreId($key, $con = null)
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
     * @return                 CoreStore A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT store_id, code, website_id, group_id, name, sort_order, is_active FROM core_store WHERE store_id = :p0';
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
            $obj = new CoreStore();
            $obj->hydrate($row);
            CoreStorePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CoreStore|CoreStore[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CoreStore[]|mixed the list of results, formatted by the current formatter
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
     * @return CoreStoreQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CoreStorePeer::STORE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CoreStoreQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CoreStorePeer::STORE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the store_id column
     *
     * Example usage:
     * <code>
     * $query->filterByStoreId(1234); // WHERE store_id = 1234
     * $query->filterByStoreId(array(12, 34)); // WHERE store_id IN (12, 34)
     * $query->filterByStoreId(array('min' => 12)); // WHERE store_id >= 12
     * $query->filterByStoreId(array('max' => 12)); // WHERE store_id <= 12
     * </code>
     *
     * @param     mixed $storeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreStoreQuery The current query, for fluid interface
     */
    public function filterByStoreId($storeId = null, $comparison = null)
    {
        if (is_array($storeId)) {
            $useMinMax = false;
            if (isset($storeId['min'])) {
                $this->addUsingAlias(CoreStorePeer::STORE_ID, $storeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($storeId['max'])) {
                $this->addUsingAlias(CoreStorePeer::STORE_ID, $storeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CoreStorePeer::STORE_ID, $storeId, $comparison);
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
     * @return CoreStoreQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CoreStorePeer::CODE, $code, $comparison);
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
     * @see       filterByCoreWebsite()
     *
     * @param     mixed $websiteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreStoreQuery The current query, for fluid interface
     */
    public function filterByWebsiteId($websiteId = null, $comparison = null)
    {
        if (is_array($websiteId)) {
            $useMinMax = false;
            if (isset($websiteId['min'])) {
                $this->addUsingAlias(CoreStorePeer::WEBSITE_ID, $websiteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($websiteId['max'])) {
                $this->addUsingAlias(CoreStorePeer::WEBSITE_ID, $websiteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CoreStorePeer::WEBSITE_ID, $websiteId, $comparison);
    }

    /**
     * Filter the query on the group_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGroupId(1234); // WHERE group_id = 1234
     * $query->filterByGroupId(array(12, 34)); // WHERE group_id IN (12, 34)
     * $query->filterByGroupId(array('min' => 12)); // WHERE group_id >= 12
     * $query->filterByGroupId(array('max' => 12)); // WHERE group_id <= 12
     * </code>
     *
     * @see       filterByCoreStoreGroup()
     *
     * @param     mixed $groupId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreStoreQuery The current query, for fluid interface
     */
    public function filterByGroupId($groupId = null, $comparison = null)
    {
        if (is_array($groupId)) {
            $useMinMax = false;
            if (isset($groupId['min'])) {
                $this->addUsingAlias(CoreStorePeer::GROUP_ID, $groupId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($groupId['max'])) {
                $this->addUsingAlias(CoreStorePeer::GROUP_ID, $groupId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CoreStorePeer::GROUP_ID, $groupId, $comparison);
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
     * @return CoreStoreQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CoreStorePeer::NAME, $name, $comparison);
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
     * @return CoreStoreQuery The current query, for fluid interface
     */
    public function filterBySortOrder($sortOrder = null, $comparison = null)
    {
        if (is_array($sortOrder)) {
            $useMinMax = false;
            if (isset($sortOrder['min'])) {
                $this->addUsingAlias(CoreStorePeer::SORT_ORDER, $sortOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sortOrder['max'])) {
                $this->addUsingAlias(CoreStorePeer::SORT_ORDER, $sortOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CoreStorePeer::SORT_ORDER, $sortOrder, $comparison);
    }

    /**
     * Filter the query on the is_active column
     *
     * Example usage:
     * <code>
     * $query->filterByIsActive(1234); // WHERE is_active = 1234
     * $query->filterByIsActive(array(12, 34)); // WHERE is_active IN (12, 34)
     * $query->filterByIsActive(array('min' => 12)); // WHERE is_active >= 12
     * $query->filterByIsActive(array('max' => 12)); // WHERE is_active <= 12
     * </code>
     *
     * @param     mixed $isActive The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreStoreQuery The current query, for fluid interface
     */
    public function filterByIsActive($isActive = null, $comparison = null)
    {
        if (is_array($isActive)) {
            $useMinMax = false;
            if (isset($isActive['min'])) {
                $this->addUsingAlias(CoreStorePeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isActive['max'])) {
                $this->addUsingAlias(CoreStorePeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CoreStorePeer::IS_ACTIVE, $isActive, $comparison);
    }

    /**
     * Filter the query by a related CoreStoreGroup object
     *
     * @param   CoreStoreGroup|PropelObjectCollection $coreStoreGroup The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CoreStoreQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCoreStoreGroup($coreStoreGroup, $comparison = null)
    {
        if ($coreStoreGroup instanceof CoreStoreGroup) {
            return $this
                ->addUsingAlias(CoreStorePeer::GROUP_ID, $coreStoreGroup->getGroupId(), $comparison);
        } elseif ($coreStoreGroup instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CoreStorePeer::GROUP_ID, $coreStoreGroup->toKeyValue('PrimaryKey', 'GroupId'), $comparison);
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
     * @return CoreStoreQuery The current query, for fluid interface
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
     * Filter the query by a related CoreWebsite object
     *
     * @param   CoreWebsite|PropelObjectCollection $coreWebsite The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CoreStoreQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCoreWebsite($coreWebsite, $comparison = null)
    {
        if ($coreWebsite instanceof CoreWebsite) {
            return $this
                ->addUsingAlias(CoreStorePeer::WEBSITE_ID, $coreWebsite->getWebsiteId(), $comparison);
        } elseif ($coreWebsite instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CoreStorePeer::WEBSITE_ID, $coreWebsite->toKeyValue('PrimaryKey', 'WebsiteId'), $comparison);
        } else {
            throw new PropelException('filterByCoreWebsite() only accepts arguments of type CoreWebsite or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CoreWebsite relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CoreStoreQuery The current query, for fluid interface
     */
    public function joinCoreWebsite($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CoreWebsite');

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
            $this->addJoinObject($join, 'CoreWebsite');
        }

        return $this;
    }

    /**
     * Use the CoreWebsite relation CoreWebsite object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CoreWebsiteQuery A secondary query class using the current class as primary query
     */
    public function useCoreWebsiteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCoreWebsite($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CoreWebsite', 'CoreWebsiteQuery');
    }

    /**
     * Filter the query by a related CustomerEntity object
     *
     * @param   CustomerEntity|PropelObjectCollection $customerEntity  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CoreStoreQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCustomerEntity($customerEntity, $comparison = null)
    {
        if ($customerEntity instanceof CustomerEntity) {
            return $this
                ->addUsingAlias(CoreStorePeer::STORE_ID, $customerEntity->getStoreId(), $comparison);
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
     * @return CoreStoreQuery The current query, for fluid interface
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
     * Filter the query by a related SalesFlatOrder object
     *
     * @param   SalesFlatOrder|PropelObjectCollection $salesFlatOrder  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CoreStoreQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySalesFlatOrder($salesFlatOrder, $comparison = null)
    {
        if ($salesFlatOrder instanceof SalesFlatOrder) {
            return $this
                ->addUsingAlias(CoreStorePeer::STORE_ID, $salesFlatOrder->getStoreId(), $comparison);
        } elseif ($salesFlatOrder instanceof PropelObjectCollection) {
            return $this
                ->useSalesFlatOrderQuery()
                ->filterByPrimaryKeys($salesFlatOrder->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySalesFlatOrder() only accepts arguments of type SalesFlatOrder or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesFlatOrder relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CoreStoreQuery The current query, for fluid interface
     */
    public function joinSalesFlatOrder($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesFlatOrder');

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
            $this->addJoinObject($join, 'SalesFlatOrder');
        }

        return $this;
    }

    /**
     * Use the SalesFlatOrder relation SalesFlatOrder object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SalesFlatOrderQuery A secondary query class using the current class as primary query
     */
    public function useSalesFlatOrderQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSalesFlatOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesFlatOrder', 'SalesFlatOrderQuery');
    }

    /**
     * Filter the query by a related SalesFlatOrderItem object
     *
     * @param   SalesFlatOrderItem|PropelObjectCollection $salesFlatOrderItem  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CoreStoreQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySalesFlatOrderItem($salesFlatOrderItem, $comparison = null)
    {
        if ($salesFlatOrderItem instanceof SalesFlatOrderItem) {
            return $this
                ->addUsingAlias(CoreStorePeer::STORE_ID, $salesFlatOrderItem->getStoreId(), $comparison);
        } elseif ($salesFlatOrderItem instanceof PropelObjectCollection) {
            return $this
                ->useSalesFlatOrderItemQuery()
                ->filterByPrimaryKeys($salesFlatOrderItem->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySalesFlatOrderItem() only accepts arguments of type SalesFlatOrderItem or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesFlatOrderItem relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CoreStoreQuery The current query, for fluid interface
     */
    public function joinSalesFlatOrderItem($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesFlatOrderItem');

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
            $this->addJoinObject($join, 'SalesFlatOrderItem');
        }

        return $this;
    }

    /**
     * Use the SalesFlatOrderItem relation SalesFlatOrderItem object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SalesFlatOrderItemQuery A secondary query class using the current class as primary query
     */
    public function useSalesFlatOrderItemQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSalesFlatOrderItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesFlatOrderItem', 'SalesFlatOrderItemQuery');
    }

    /**
     * Filter the query by a related EnterpriseBannerContent object
     *
     * @param   EnterpriseBannerContent|PropelObjectCollection $enterpriseBannerContent  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CoreStoreQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEnterpriseBannerContent($enterpriseBannerContent, $comparison = null)
    {
        if ($enterpriseBannerContent instanceof EnterpriseBannerContent) {
            return $this
                ->addUsingAlias(CoreStorePeer::STORE_ID, $enterpriseBannerContent->getStoreId(), $comparison);
        } elseif ($enterpriseBannerContent instanceof PropelObjectCollection) {
            return $this
                ->useEnterpriseBannerContentQuery()
                ->filterByPrimaryKeys($enterpriseBannerContent->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEnterpriseBannerContent() only accepts arguments of type EnterpriseBannerContent or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EnterpriseBannerContent relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CoreStoreQuery The current query, for fluid interface
     */
    public function joinEnterpriseBannerContent($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EnterpriseBannerContent');

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
            $this->addJoinObject($join, 'EnterpriseBannerContent');
        }

        return $this;
    }

    /**
     * Use the EnterpriseBannerContent relation EnterpriseBannerContent object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EnterpriseBannerContentQuery A secondary query class using the current class as primary query
     */
    public function useEnterpriseBannerContentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEnterpriseBannerContent($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EnterpriseBannerContent', 'EnterpriseBannerContentQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CoreStore $coreStore Object to remove from the list of results
     *
     * @return CoreStoreQuery The current query, for fluid interface
     */
    public function prune($coreStore = null)
    {
        if ($coreStore) {
            $this->addUsingAlias(CoreStorePeer::STORE_ID, $coreStore->getStoreId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
