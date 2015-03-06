<?php


/**
 * Base class that represents a query for the 'enterprise_banner_content' table.
 *
 *
 *
 * @method EnterpriseBannerContentQuery orderByBannerId($order = Criteria::ASC) Order by the banner_id column
 * @method EnterpriseBannerContentQuery orderByStoreId($order = Criteria::ASC) Order by the store_id column
 * @method EnterpriseBannerContentQuery orderByBannerContent($order = Criteria::ASC) Order by the banner_content column
 *
 * @method EnterpriseBannerContentQuery groupByBannerId() Group by the banner_id column
 * @method EnterpriseBannerContentQuery groupByStoreId() Group by the store_id column
 * @method EnterpriseBannerContentQuery groupByBannerContent() Group by the banner_content column
 *
 * @method EnterpriseBannerContentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EnterpriseBannerContentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EnterpriseBannerContentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EnterpriseBannerContentQuery leftJoinCoreStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the CoreStore relation
 * @method EnterpriseBannerContentQuery rightJoinCoreStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CoreStore relation
 * @method EnterpriseBannerContentQuery innerJoinCoreStore($relationAlias = null) Adds a INNER JOIN clause to the query using the CoreStore relation
 *
 * @method EnterpriseBannerContentQuery leftJoinEnterpriseBanner($relationAlias = null) Adds a LEFT JOIN clause to the query using the EnterpriseBanner relation
 * @method EnterpriseBannerContentQuery rightJoinEnterpriseBanner($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EnterpriseBanner relation
 * @method EnterpriseBannerContentQuery innerJoinEnterpriseBanner($relationAlias = null) Adds a INNER JOIN clause to the query using the EnterpriseBanner relation
 *
 * @method EnterpriseBannerContent findOne(PropelPDO $con = null) Return the first EnterpriseBannerContent matching the query
 * @method EnterpriseBannerContent findOneOrCreate(PropelPDO $con = null) Return the first EnterpriseBannerContent matching the query, or a new EnterpriseBannerContent object populated from the query conditions when no match is found
 *
 * @method EnterpriseBannerContent findOneByBannerId(int $banner_id) Return the first EnterpriseBannerContent filtered by the banner_id column
 * @method EnterpriseBannerContent findOneByStoreId(int $store_id) Return the first EnterpriseBannerContent filtered by the store_id column
 * @method EnterpriseBannerContent findOneByBannerContent(string $banner_content) Return the first EnterpriseBannerContent filtered by the banner_content column
 *
 * @method array findByBannerId(int $banner_id) Return EnterpriseBannerContent objects filtered by the banner_id column
 * @method array findByStoreId(int $store_id) Return EnterpriseBannerContent objects filtered by the store_id column
 * @method array findByBannerContent(string $banner_content) Return EnterpriseBannerContent objects filtered by the banner_content column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseEnterpriseBannerContentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEnterpriseBannerContentQuery object.
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
            $modelName = 'EnterpriseBannerContent';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EnterpriseBannerContentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EnterpriseBannerContentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EnterpriseBannerContentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EnterpriseBannerContentQuery) {
            return $criteria;
        }
        $query = new EnterpriseBannerContentQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$banner_id, $store_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   EnterpriseBannerContent|EnterpriseBannerContent[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EnterpriseBannerContentPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EnterpriseBannerContentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 EnterpriseBannerContent A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT banner_id, store_id, banner_content FROM enterprise_banner_content WHERE banner_id = :p0 AND store_id = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new EnterpriseBannerContent();
            $obj->hydrate($row);
            EnterpriseBannerContentPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return EnterpriseBannerContent|EnterpriseBannerContent[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|EnterpriseBannerContent[]|mixed the list of results, formatted by the current formatter
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
     * @return EnterpriseBannerContentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(EnterpriseBannerContentPeer::BANNER_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(EnterpriseBannerContentPeer::STORE_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EnterpriseBannerContentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(EnterpriseBannerContentPeer::BANNER_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(EnterpriseBannerContentPeer::STORE_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the banner_id column
     *
     * Example usage:
     * <code>
     * $query->filterByBannerId(1234); // WHERE banner_id = 1234
     * $query->filterByBannerId(array(12, 34)); // WHERE banner_id IN (12, 34)
     * $query->filterByBannerId(array('min' => 12)); // WHERE banner_id >= 12
     * $query->filterByBannerId(array('max' => 12)); // WHERE banner_id <= 12
     * </code>
     *
     * @see       filterByEnterpriseBanner()
     *
     * @param     mixed $bannerId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnterpriseBannerContentQuery The current query, for fluid interface
     */
    public function filterByBannerId($bannerId = null, $comparison = null)
    {
        if (is_array($bannerId)) {
            $useMinMax = false;
            if (isset($bannerId['min'])) {
                $this->addUsingAlias(EnterpriseBannerContentPeer::BANNER_ID, $bannerId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bannerId['max'])) {
                $this->addUsingAlias(EnterpriseBannerContentPeer::BANNER_ID, $bannerId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EnterpriseBannerContentPeer::BANNER_ID, $bannerId, $comparison);
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
     * @see       filterByCoreStore()
     *
     * @param     mixed $storeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnterpriseBannerContentQuery The current query, for fluid interface
     */
    public function filterByStoreId($storeId = null, $comparison = null)
    {
        if (is_array($storeId)) {
            $useMinMax = false;
            if (isset($storeId['min'])) {
                $this->addUsingAlias(EnterpriseBannerContentPeer::STORE_ID, $storeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($storeId['max'])) {
                $this->addUsingAlias(EnterpriseBannerContentPeer::STORE_ID, $storeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EnterpriseBannerContentPeer::STORE_ID, $storeId, $comparison);
    }

    /**
     * Filter the query on the banner_content column
     *
     * Example usage:
     * <code>
     * $query->filterByBannerContent('fooValue');   // WHERE banner_content = 'fooValue'
     * $query->filterByBannerContent('%fooValue%'); // WHERE banner_content LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bannerContent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnterpriseBannerContentQuery The current query, for fluid interface
     */
    public function filterByBannerContent($bannerContent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bannerContent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bannerContent)) {
                $bannerContent = str_replace('*', '%', $bannerContent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EnterpriseBannerContentPeer::BANNER_CONTENT, $bannerContent, $comparison);
    }

    /**
     * Filter the query by a related CoreStore object
     *
     * @param   CoreStore|PropelObjectCollection $coreStore The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EnterpriseBannerContentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCoreStore($coreStore, $comparison = null)
    {
        if ($coreStore instanceof CoreStore) {
            return $this
                ->addUsingAlias(EnterpriseBannerContentPeer::STORE_ID, $coreStore->getStoreId(), $comparison);
        } elseif ($coreStore instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EnterpriseBannerContentPeer::STORE_ID, $coreStore->toKeyValue('PrimaryKey', 'StoreId'), $comparison);
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
     * @return EnterpriseBannerContentQuery The current query, for fluid interface
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
     * Filter the query by a related EnterpriseBanner object
     *
     * @param   EnterpriseBanner|PropelObjectCollection $enterpriseBanner The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EnterpriseBannerContentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEnterpriseBanner($enterpriseBanner, $comparison = null)
    {
        if ($enterpriseBanner instanceof EnterpriseBanner) {
            return $this
                ->addUsingAlias(EnterpriseBannerContentPeer::BANNER_ID, $enterpriseBanner->getBannerId(), $comparison);
        } elseif ($enterpriseBanner instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EnterpriseBannerContentPeer::BANNER_ID, $enterpriseBanner->toKeyValue('PrimaryKey', 'BannerId'), $comparison);
        } else {
            throw new PropelException('filterByEnterpriseBanner() only accepts arguments of type EnterpriseBanner or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EnterpriseBanner relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EnterpriseBannerContentQuery The current query, for fluid interface
     */
    public function joinEnterpriseBanner($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EnterpriseBanner');

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
            $this->addJoinObject($join, 'EnterpriseBanner');
        }

        return $this;
    }

    /**
     * Use the EnterpriseBanner relation EnterpriseBanner object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EnterpriseBannerQuery A secondary query class using the current class as primary query
     */
    public function useEnterpriseBannerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEnterpriseBanner($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EnterpriseBanner', 'EnterpriseBannerQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   EnterpriseBannerContent $enterpriseBannerContent Object to remove from the list of results
     *
     * @return EnterpriseBannerContentQuery The current query, for fluid interface
     */
    public function prune($enterpriseBannerContent = null)
    {
        if ($enterpriseBannerContent) {
            $this->addCond('pruneCond0', $this->getAliasedColName(EnterpriseBannerContentPeer::BANNER_ID), $enterpriseBannerContent->getBannerId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(EnterpriseBannerContentPeer::STORE_ID), $enterpriseBannerContent->getStoreId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
