<?php


/**
 * Base class that represents a query for the 'core_store_group' table.
 *
 *
 *
 * @method CoreStoreGroupQuery orderByGroupId($order = Criteria::ASC) Order by the group_id column
 * @method CoreStoreGroupQuery orderByWebsiteId($order = Criteria::ASC) Order by the website_id column
 * @method CoreStoreGroupQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method CoreStoreGroupQuery orderByRootCategoryId($order = Criteria::ASC) Order by the root_category_id column
 * @method CoreStoreGroupQuery orderByDefaultStoreId($order = Criteria::ASC) Order by the default_store_id column
 *
 * @method CoreStoreGroupQuery groupByGroupId() Group by the group_id column
 * @method CoreStoreGroupQuery groupByWebsiteId() Group by the website_id column
 * @method CoreStoreGroupQuery groupByName() Group by the name column
 * @method CoreStoreGroupQuery groupByRootCategoryId() Group by the root_category_id column
 * @method CoreStoreGroupQuery groupByDefaultStoreId() Group by the default_store_id column
 *
 * @method CoreStoreGroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CoreStoreGroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CoreStoreGroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CoreStoreGroupQuery leftJoinCoreWebsite($relationAlias = null) Adds a LEFT JOIN clause to the query using the CoreWebsite relation
 * @method CoreStoreGroupQuery rightJoinCoreWebsite($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CoreWebsite relation
 * @method CoreStoreGroupQuery innerJoinCoreWebsite($relationAlias = null) Adds a INNER JOIN clause to the query using the CoreWebsite relation
 *
 * @method CoreStoreGroupQuery leftJoinCoreStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the CoreStore relation
 * @method CoreStoreGroupQuery rightJoinCoreStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CoreStore relation
 * @method CoreStoreGroupQuery innerJoinCoreStore($relationAlias = null) Adds a INNER JOIN clause to the query using the CoreStore relation
 *
 * @method CoreStoreGroup findOne(PropelPDO $con = null) Return the first CoreStoreGroup matching the query
 * @method CoreStoreGroup findOneOrCreate(PropelPDO $con = null) Return the first CoreStoreGroup matching the query, or a new CoreStoreGroup object populated from the query conditions when no match is found
 *
 * @method CoreStoreGroup findOneByWebsiteId(int $website_id) Return the first CoreStoreGroup filtered by the website_id column
 * @method CoreStoreGroup findOneByName(string $name) Return the first CoreStoreGroup filtered by the name column
 * @method CoreStoreGroup findOneByRootCategoryId(int $root_category_id) Return the first CoreStoreGroup filtered by the root_category_id column
 * @method CoreStoreGroup findOneByDefaultStoreId(int $default_store_id) Return the first CoreStoreGroup filtered by the default_store_id column
 *
 * @method array findByGroupId(int $group_id) Return CoreStoreGroup objects filtered by the group_id column
 * @method array findByWebsiteId(int $website_id) Return CoreStoreGroup objects filtered by the website_id column
 * @method array findByName(string $name) Return CoreStoreGroup objects filtered by the name column
 * @method array findByRootCategoryId(int $root_category_id) Return CoreStoreGroup objects filtered by the root_category_id column
 * @method array findByDefaultStoreId(int $default_store_id) Return CoreStoreGroup objects filtered by the default_store_id column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseCoreStoreGroupQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCoreStoreGroupQuery object.
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
            $modelName = 'CoreStoreGroup';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CoreStoreGroupQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CoreStoreGroupQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CoreStoreGroupQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CoreStoreGroupQuery) {
            return $criteria;
        }
        $query = new CoreStoreGroupQuery(null, null, $modelAlias);

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
     * @return   CoreStoreGroup|CoreStoreGroup[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CoreStoreGroupPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CoreStoreGroupPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CoreStoreGroup A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByGroupId($key, $con = null)
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
     * @return                 CoreStoreGroup A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT group_id, website_id, name, root_category_id, default_store_id FROM core_store_group WHERE group_id = :p0';
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
            $obj = new CoreStoreGroup();
            $obj->hydrate($row);
            CoreStoreGroupPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CoreStoreGroup|CoreStoreGroup[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CoreStoreGroup[]|mixed the list of results, formatted by the current formatter
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
     * @return CoreStoreGroupQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CoreStoreGroupPeer::GROUP_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CoreStoreGroupQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CoreStoreGroupPeer::GROUP_ID, $keys, Criteria::IN);
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
     * @param     mixed $groupId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreStoreGroupQuery The current query, for fluid interface
     */
    public function filterByGroupId($groupId = null, $comparison = null)
    {
        if (is_array($groupId)) {
            $useMinMax = false;
            if (isset($groupId['min'])) {
                $this->addUsingAlias(CoreStoreGroupPeer::GROUP_ID, $groupId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($groupId['max'])) {
                $this->addUsingAlias(CoreStoreGroupPeer::GROUP_ID, $groupId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CoreStoreGroupPeer::GROUP_ID, $groupId, $comparison);
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
     * @return CoreStoreGroupQuery The current query, for fluid interface
     */
    public function filterByWebsiteId($websiteId = null, $comparison = null)
    {
        if (is_array($websiteId)) {
            $useMinMax = false;
            if (isset($websiteId['min'])) {
                $this->addUsingAlias(CoreStoreGroupPeer::WEBSITE_ID, $websiteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($websiteId['max'])) {
                $this->addUsingAlias(CoreStoreGroupPeer::WEBSITE_ID, $websiteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CoreStoreGroupPeer::WEBSITE_ID, $websiteId, $comparison);
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
     * @return CoreStoreGroupQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CoreStoreGroupPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the root_category_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRootCategoryId(1234); // WHERE root_category_id = 1234
     * $query->filterByRootCategoryId(array(12, 34)); // WHERE root_category_id IN (12, 34)
     * $query->filterByRootCategoryId(array('min' => 12)); // WHERE root_category_id >= 12
     * $query->filterByRootCategoryId(array('max' => 12)); // WHERE root_category_id <= 12
     * </code>
     *
     * @param     mixed $rootCategoryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreStoreGroupQuery The current query, for fluid interface
     */
    public function filterByRootCategoryId($rootCategoryId = null, $comparison = null)
    {
        if (is_array($rootCategoryId)) {
            $useMinMax = false;
            if (isset($rootCategoryId['min'])) {
                $this->addUsingAlias(CoreStoreGroupPeer::ROOT_CATEGORY_ID, $rootCategoryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rootCategoryId['max'])) {
                $this->addUsingAlias(CoreStoreGroupPeer::ROOT_CATEGORY_ID, $rootCategoryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CoreStoreGroupPeer::ROOT_CATEGORY_ID, $rootCategoryId, $comparison);
    }

    /**
     * Filter the query on the default_store_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDefaultStoreId(1234); // WHERE default_store_id = 1234
     * $query->filterByDefaultStoreId(array(12, 34)); // WHERE default_store_id IN (12, 34)
     * $query->filterByDefaultStoreId(array('min' => 12)); // WHERE default_store_id >= 12
     * $query->filterByDefaultStoreId(array('max' => 12)); // WHERE default_store_id <= 12
     * </code>
     *
     * @param     mixed $defaultStoreId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoreStoreGroupQuery The current query, for fluid interface
     */
    public function filterByDefaultStoreId($defaultStoreId = null, $comparison = null)
    {
        if (is_array($defaultStoreId)) {
            $useMinMax = false;
            if (isset($defaultStoreId['min'])) {
                $this->addUsingAlias(CoreStoreGroupPeer::DEFAULT_STORE_ID, $defaultStoreId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($defaultStoreId['max'])) {
                $this->addUsingAlias(CoreStoreGroupPeer::DEFAULT_STORE_ID, $defaultStoreId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CoreStoreGroupPeer::DEFAULT_STORE_ID, $defaultStoreId, $comparison);
    }

    /**
     * Filter the query by a related CoreWebsite object
     *
     * @param   CoreWebsite|PropelObjectCollection $coreWebsite The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CoreStoreGroupQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCoreWebsite($coreWebsite, $comparison = null)
    {
        if ($coreWebsite instanceof CoreWebsite) {
            return $this
                ->addUsingAlias(CoreStoreGroupPeer::WEBSITE_ID, $coreWebsite->getWebsiteId(), $comparison);
        } elseif ($coreWebsite instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CoreStoreGroupPeer::WEBSITE_ID, $coreWebsite->toKeyValue('PrimaryKey', 'WebsiteId'), $comparison);
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
     * @return CoreStoreGroupQuery The current query, for fluid interface
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
     * Filter the query by a related CoreStore object
     *
     * @param   CoreStore|PropelObjectCollection $coreStore  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CoreStoreGroupQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCoreStore($coreStore, $comparison = null)
    {
        if ($coreStore instanceof CoreStore) {
            return $this
                ->addUsingAlias(CoreStoreGroupPeer::GROUP_ID, $coreStore->getGroupId(), $comparison);
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
     * @return CoreStoreGroupQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   CoreStoreGroup $coreStoreGroup Object to remove from the list of results
     *
     * @return CoreStoreGroupQuery The current query, for fluid interface
     */
    public function prune($coreStoreGroup = null)
    {
        if ($coreStoreGroup) {
            $this->addUsingAlias(CoreStoreGroupPeer::GROUP_ID, $coreStoreGroup->getGroupId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
