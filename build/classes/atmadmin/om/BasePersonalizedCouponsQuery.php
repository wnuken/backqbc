<?php


/**
 * Base class that represents a query for the 'personalized_coupons' table.
 *
 *
 *
 * @method PersonalizedCouponsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method PersonalizedCouponsQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method PersonalizedCouponsQuery orderByGroupdealsId($order = Criteria::ASC) Order by the groupdeals_id column
 * @method PersonalizedCouponsQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method PersonalizedCouponsQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method PersonalizedCouponsQuery groupById() Group by the id column
 * @method PersonalizedCouponsQuery groupByCode() Group by the code column
 * @method PersonalizedCouponsQuery groupByGroupdealsId() Group by the groupdeals_id column
 * @method PersonalizedCouponsQuery groupByStatus() Group by the status column
 * @method PersonalizedCouponsQuery groupByCreatedAt() Group by the created_at column
 *
 * @method PersonalizedCouponsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PersonalizedCouponsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PersonalizedCouponsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PersonalizedCouponsQuery leftJoinCouponMapping($relationAlias = null) Adds a LEFT JOIN clause to the query using the CouponMapping relation
 * @method PersonalizedCouponsQuery rightJoinCouponMapping($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CouponMapping relation
 * @method PersonalizedCouponsQuery innerJoinCouponMapping($relationAlias = null) Adds a INNER JOIN clause to the query using the CouponMapping relation
 *
 * @method PersonalizedCoupons findOne(PropelPDO $con = null) Return the first PersonalizedCoupons matching the query
 * @method PersonalizedCoupons findOneOrCreate(PropelPDO $con = null) Return the first PersonalizedCoupons matching the query, or a new PersonalizedCoupons object populated from the query conditions when no match is found
 *
 * @method PersonalizedCoupons findOneByCode(string $code) Return the first PersonalizedCoupons filtered by the code column
 * @method PersonalizedCoupons findOneByGroupdealsId(int $groupdeals_id) Return the first PersonalizedCoupons filtered by the groupdeals_id column
 * @method PersonalizedCoupons findOneByStatus(int $status) Return the first PersonalizedCoupons filtered by the status column
 * @method PersonalizedCoupons findOneByCreatedAt(string $created_at) Return the first PersonalizedCoupons filtered by the created_at column
 *
 * @method array findById(int $id) Return PersonalizedCoupons objects filtered by the id column
 * @method array findByCode(string $code) Return PersonalizedCoupons objects filtered by the code column
 * @method array findByGroupdealsId(int $groupdeals_id) Return PersonalizedCoupons objects filtered by the groupdeals_id column
 * @method array findByStatus(int $status) Return PersonalizedCoupons objects filtered by the status column
 * @method array findByCreatedAt(string $created_at) Return PersonalizedCoupons objects filtered by the created_at column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BasePersonalizedCouponsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePersonalizedCouponsQuery object.
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
            $modelName = 'PersonalizedCoupons';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PersonalizedCouponsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PersonalizedCouponsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PersonalizedCouponsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PersonalizedCouponsQuery) {
            return $criteria;
        }
        $query = new PersonalizedCouponsQuery(null, null, $modelAlias);

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
     * @return   PersonalizedCoupons|PersonalizedCoupons[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PersonalizedCouponsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PersonalizedCouponsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PersonalizedCoupons A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
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
     * @return                 PersonalizedCoupons A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, code, groupdeals_id, status, created_at FROM personalized_coupons WHERE id = :p0';
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
            $obj = new PersonalizedCoupons();
            $obj->hydrate($row);
            PersonalizedCouponsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PersonalizedCoupons|PersonalizedCoupons[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PersonalizedCoupons[]|mixed the list of results, formatted by the current formatter
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
     * @return PersonalizedCouponsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PersonalizedCouponsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PersonalizedCouponsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PersonalizedCouponsPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonalizedCouponsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(PersonalizedCouponsPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(PersonalizedCouponsPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonalizedCouponsPeer::ID, $id, $comparison);
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
     * @return PersonalizedCouponsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PersonalizedCouponsPeer::CODE, $code, $comparison);
    }

    /**
     * Filter the query on the groupdeals_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGroupdealsId(1234); // WHERE groupdeals_id = 1234
     * $query->filterByGroupdealsId(array(12, 34)); // WHERE groupdeals_id IN (12, 34)
     * $query->filterByGroupdealsId(array('min' => 12)); // WHERE groupdeals_id >= 12
     * $query->filterByGroupdealsId(array('max' => 12)); // WHERE groupdeals_id <= 12
     * </code>
     *
     * @param     mixed $groupdealsId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonalizedCouponsQuery The current query, for fluid interface
     */
    public function filterByGroupdealsId($groupdealsId = null, $comparison = null)
    {
        if (is_array($groupdealsId)) {
            $useMinMax = false;
            if (isset($groupdealsId['min'])) {
                $this->addUsingAlias(PersonalizedCouponsPeer::GROUPDEALS_ID, $groupdealsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($groupdealsId['max'])) {
                $this->addUsingAlias(PersonalizedCouponsPeer::GROUPDEALS_ID, $groupdealsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonalizedCouponsPeer::GROUPDEALS_ID, $groupdealsId, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus(1234); // WHERE status = 1234
     * $query->filterByStatus(array(12, 34)); // WHERE status IN (12, 34)
     * $query->filterByStatus(array('min' => 12)); // WHERE status >= 12
     * $query->filterByStatus(array('max' => 12)); // WHERE status <= 12
     * </code>
     *
     * @param     mixed $status The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonalizedCouponsQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (is_array($status)) {
            $useMinMax = false;
            if (isset($status['min'])) {
                $this->addUsingAlias(PersonalizedCouponsPeer::STATUS, $status['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($status['max'])) {
                $this->addUsingAlias(PersonalizedCouponsPeer::STATUS, $status['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonalizedCouponsPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonalizedCouponsQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(PersonalizedCouponsPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(PersonalizedCouponsPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonalizedCouponsPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query by a related CouponMapping object
     *
     * @param   CouponMapping|PropelObjectCollection $couponMapping  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PersonalizedCouponsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCouponMapping($couponMapping, $comparison = null)
    {
        if ($couponMapping instanceof CouponMapping) {
            return $this
                ->addUsingAlias(PersonalizedCouponsPeer::ID, $couponMapping->getPersonalizedCoupon(), $comparison);
        } elseif ($couponMapping instanceof PropelObjectCollection) {
            return $this
                ->useCouponMappingQuery()
                ->filterByPrimaryKeys($couponMapping->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCouponMapping() only accepts arguments of type CouponMapping or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CouponMapping relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonalizedCouponsQuery The current query, for fluid interface
     */
    public function joinCouponMapping($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CouponMapping');

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
            $this->addJoinObject($join, 'CouponMapping');
        }

        return $this;
    }

    /**
     * Use the CouponMapping relation CouponMapping object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CouponMappingQuery A secondary query class using the current class as primary query
     */
    public function useCouponMappingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCouponMapping($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CouponMapping', 'CouponMappingQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   PersonalizedCoupons $personalizedCoupons Object to remove from the list of results
     *
     * @return PersonalizedCouponsQuery The current query, for fluid interface
     */
    public function prune($personalizedCoupons = null)
    {
        if ($personalizedCoupons) {
            $this->addUsingAlias(PersonalizedCouponsPeer::ID, $personalizedCoupons->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
