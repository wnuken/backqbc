<?php


/**
 * Base class that represents a query for the 'enterprise_banner' table.
 *
 *
 *
 * @method EnterpriseBannerQuery orderByBannerId($order = Criteria::ASC) Order by the banner_id column
 * @method EnterpriseBannerQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method EnterpriseBannerQuery orderByIsEnabled($order = Criteria::ASC) Order by the is_enabled column
 * @method EnterpriseBannerQuery orderByTypes($order = Criteria::ASC) Order by the types column
 * @method EnterpriseBannerQuery orderBySubhome($order = Criteria::ASC) Order by the subhome column
 * @method EnterpriseBannerQuery orderByStartDate($order = Criteria::ASC) Order by the start_date column
 * @method EnterpriseBannerQuery orderByEndDate($order = Criteria::ASC) Order by the end_date column
 *
 * @method EnterpriseBannerQuery groupByBannerId() Group by the banner_id column
 * @method EnterpriseBannerQuery groupByName() Group by the name column
 * @method EnterpriseBannerQuery groupByIsEnabled() Group by the is_enabled column
 * @method EnterpriseBannerQuery groupByTypes() Group by the types column
 * @method EnterpriseBannerQuery groupBySubhome() Group by the subhome column
 * @method EnterpriseBannerQuery groupByStartDate() Group by the start_date column
 * @method EnterpriseBannerQuery groupByEndDate() Group by the end_date column
 *
 * @method EnterpriseBannerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EnterpriseBannerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EnterpriseBannerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EnterpriseBannerQuery leftJoinEnterpriseBannerContent($relationAlias = null) Adds a LEFT JOIN clause to the query using the EnterpriseBannerContent relation
 * @method EnterpriseBannerQuery rightJoinEnterpriseBannerContent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EnterpriseBannerContent relation
 * @method EnterpriseBannerQuery innerJoinEnterpriseBannerContent($relationAlias = null) Adds a INNER JOIN clause to the query using the EnterpriseBannerContent relation
 *
 * @method EnterpriseBanner findOne(PropelPDO $con = null) Return the first EnterpriseBanner matching the query
 * @method EnterpriseBanner findOneOrCreate(PropelPDO $con = null) Return the first EnterpriseBanner matching the query, or a new EnterpriseBanner object populated from the query conditions when no match is found
 *
 * @method EnterpriseBanner findOneByName(string $name) Return the first EnterpriseBanner filtered by the name column
 * @method EnterpriseBanner findOneByIsEnabled(int $is_enabled) Return the first EnterpriseBanner filtered by the is_enabled column
 * @method EnterpriseBanner findOneByTypes(string $types) Return the first EnterpriseBanner filtered by the types column
 * @method EnterpriseBanner findOneBySubhome(string $subhome) Return the first EnterpriseBanner filtered by the subhome column
 * @method EnterpriseBanner findOneByStartDate(string $start_date) Return the first EnterpriseBanner filtered by the start_date column
 * @method EnterpriseBanner findOneByEndDate(string $end_date) Return the first EnterpriseBanner filtered by the end_date column
 *
 * @method array findByBannerId(int $banner_id) Return EnterpriseBanner objects filtered by the banner_id column
 * @method array findByName(string $name) Return EnterpriseBanner objects filtered by the name column
 * @method array findByIsEnabled(int $is_enabled) Return EnterpriseBanner objects filtered by the is_enabled column
 * @method array findByTypes(string $types) Return EnterpriseBanner objects filtered by the types column
 * @method array findBySubhome(string $subhome) Return EnterpriseBanner objects filtered by the subhome column
 * @method array findByStartDate(string $start_date) Return EnterpriseBanner objects filtered by the start_date column
 * @method array findByEndDate(string $end_date) Return EnterpriseBanner objects filtered by the end_date column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseEnterpriseBannerQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEnterpriseBannerQuery object.
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
            $modelName = 'EnterpriseBanner';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EnterpriseBannerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EnterpriseBannerQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EnterpriseBannerQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EnterpriseBannerQuery) {
            return $criteria;
        }
        $query = new EnterpriseBannerQuery(null, null, $modelAlias);

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
     * @return   EnterpriseBanner|EnterpriseBanner[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EnterpriseBannerPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EnterpriseBannerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 EnterpriseBanner A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByBannerId($key, $con = null)
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
     * @return                 EnterpriseBanner A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT banner_id, name, is_enabled, types, subhome, start_date, end_date FROM enterprise_banner WHERE banner_id = :p0';
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
            $obj = new EnterpriseBanner();
            $obj->hydrate($row);
            EnterpriseBannerPeer::addInstanceToPool($obj, (string) $key);
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
     * @return EnterpriseBanner|EnterpriseBanner[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|EnterpriseBanner[]|mixed the list of results, formatted by the current formatter
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
     * @return EnterpriseBannerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EnterpriseBannerPeer::BANNER_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EnterpriseBannerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EnterpriseBannerPeer::BANNER_ID, $keys, Criteria::IN);
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
     * @param     mixed $bannerId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnterpriseBannerQuery The current query, for fluid interface
     */
    public function filterByBannerId($bannerId = null, $comparison = null)
    {
        if (is_array($bannerId)) {
            $useMinMax = false;
            if (isset($bannerId['min'])) {
                $this->addUsingAlias(EnterpriseBannerPeer::BANNER_ID, $bannerId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bannerId['max'])) {
                $this->addUsingAlias(EnterpriseBannerPeer::BANNER_ID, $bannerId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EnterpriseBannerPeer::BANNER_ID, $bannerId, $comparison);
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
     * @return EnterpriseBannerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EnterpriseBannerPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the is_enabled column
     *
     * Example usage:
     * <code>
     * $query->filterByIsEnabled(1234); // WHERE is_enabled = 1234
     * $query->filterByIsEnabled(array(12, 34)); // WHERE is_enabled IN (12, 34)
     * $query->filterByIsEnabled(array('min' => 12)); // WHERE is_enabled >= 12
     * $query->filterByIsEnabled(array('max' => 12)); // WHERE is_enabled <= 12
     * </code>
     *
     * @param     mixed $isEnabled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnterpriseBannerQuery The current query, for fluid interface
     */
    public function filterByIsEnabled($isEnabled = null, $comparison = null)
    {
        if (is_array($isEnabled)) {
            $useMinMax = false;
            if (isset($isEnabled['min'])) {
                $this->addUsingAlias(EnterpriseBannerPeer::IS_ENABLED, $isEnabled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isEnabled['max'])) {
                $this->addUsingAlias(EnterpriseBannerPeer::IS_ENABLED, $isEnabled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EnterpriseBannerPeer::IS_ENABLED, $isEnabled, $comparison);
    }

    /**
     * Filter the query on the types column
     *
     * Example usage:
     * <code>
     * $query->filterByTypes('fooValue');   // WHERE types = 'fooValue'
     * $query->filterByTypes('%fooValue%'); // WHERE types LIKE '%fooValue%'
     * </code>
     *
     * @param     string $types The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnterpriseBannerQuery The current query, for fluid interface
     */
    public function filterByTypes($types = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($types)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $types)) {
                $types = str_replace('*', '%', $types);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EnterpriseBannerPeer::TYPES, $types, $comparison);
    }

    /**
     * Filter the query on the subhome column
     *
     * Example usage:
     * <code>
     * $query->filterBySubhome('fooValue');   // WHERE subhome = 'fooValue'
     * $query->filterBySubhome('%fooValue%'); // WHERE subhome LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subhome The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnterpriseBannerQuery The current query, for fluid interface
     */
    public function filterBySubhome($subhome = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subhome)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $subhome)) {
                $subhome = str_replace('*', '%', $subhome);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EnterpriseBannerPeer::SUBHOME, $subhome, $comparison);
    }

    /**
     * Filter the query on the start_date column
     *
     * Example usage:
     * <code>
     * $query->filterByStartDate('2011-03-14'); // WHERE start_date = '2011-03-14'
     * $query->filterByStartDate('now'); // WHERE start_date = '2011-03-14'
     * $query->filterByStartDate(array('max' => 'yesterday')); // WHERE start_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $startDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnterpriseBannerQuery The current query, for fluid interface
     */
    public function filterByStartDate($startDate = null, $comparison = null)
    {
        if (is_array($startDate)) {
            $useMinMax = false;
            if (isset($startDate['min'])) {
                $this->addUsingAlias(EnterpriseBannerPeer::START_DATE, $startDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($startDate['max'])) {
                $this->addUsingAlias(EnterpriseBannerPeer::START_DATE, $startDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EnterpriseBannerPeer::START_DATE, $startDate, $comparison);
    }

    /**
     * Filter the query on the end_date column
     *
     * Example usage:
     * <code>
     * $query->filterByEndDate('2011-03-14'); // WHERE end_date = '2011-03-14'
     * $query->filterByEndDate('now'); // WHERE end_date = '2011-03-14'
     * $query->filterByEndDate(array('max' => 'yesterday')); // WHERE end_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $endDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnterpriseBannerQuery The current query, for fluid interface
     */
    public function filterByEndDate($endDate = null, $comparison = null)
    {
        if (is_array($endDate)) {
            $useMinMax = false;
            if (isset($endDate['min'])) {
                $this->addUsingAlias(EnterpriseBannerPeer::END_DATE, $endDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($endDate['max'])) {
                $this->addUsingAlias(EnterpriseBannerPeer::END_DATE, $endDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EnterpriseBannerPeer::END_DATE, $endDate, $comparison);
    }

    /**
     * Filter the query by a related EnterpriseBannerContent object
     *
     * @param   EnterpriseBannerContent|PropelObjectCollection $enterpriseBannerContent  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EnterpriseBannerQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEnterpriseBannerContent($enterpriseBannerContent, $comparison = null)
    {
        if ($enterpriseBannerContent instanceof EnterpriseBannerContent) {
            return $this
                ->addUsingAlias(EnterpriseBannerPeer::BANNER_ID, $enterpriseBannerContent->getBannerId(), $comparison);
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
     * @return EnterpriseBannerQuery The current query, for fluid interface
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
     * @param   EnterpriseBanner $enterpriseBanner Object to remove from the list of results
     *
     * @return EnterpriseBannerQuery The current query, for fluid interface
     */
    public function prune($enterpriseBanner = null)
    {
        if ($enterpriseBanner) {
            $this->addUsingAlias(EnterpriseBannerPeer::BANNER_ID, $enterpriseBanner->getBannerId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
