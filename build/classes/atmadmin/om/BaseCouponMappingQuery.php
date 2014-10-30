<?php


/**
 * Base class that represents a query for the 'coupon_mapping' table.
 *
 *
 *
 * @method CouponMappingQuery orderByMappingId($order = Criteria::ASC) Order by the mapping_id column
 * @method CouponMappingQuery orderByCoupon($order = Criteria::ASC) Order by the coupon column
 * @method CouponMappingQuery orderByCouponMd5($order = Criteria::ASC) Order by the coupon_md5 column
 * @method CouponMappingQuery orderByExpirationDate($order = Criteria::ASC) Order by the expiration_date column
 * @method CouponMappingQuery orderByCustomerId($order = Criteria::ASC) Order by the customer_id column
 * @method CouponMappingQuery orderByCanSend($order = Criteria::ASC) Order by the can_send column
 * @method CouponMappingQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method CouponMappingQuery orderByOrderId($order = Criteria::ASC) Order by the order_id column
 * @method CouponMappingQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method CouponMappingQuery orderByPayedForReturn($order = Criteria::ASC) Order by the payed_for_return column
 * @method CouponMappingQuery orderByIncrementId($order = Criteria::ASC) Order by the increment_id column
 * @method CouponMappingQuery orderByUnit($order = Criteria::ASC) Order by the unit column
 * @method CouponMappingQuery orderByPersonalizedCoupon($order = Criteria::ASC) Order by the personalized_coupon column
 * @method CouponMappingQuery orderByPosNumber($order = Criteria::ASC) Order by the pos_number column
 *
 * @method CouponMappingQuery groupByMappingId() Group by the mapping_id column
 * @method CouponMappingQuery groupByCoupon() Group by the coupon column
 * @method CouponMappingQuery groupByCouponMd5() Group by the coupon_md5 column
 * @method CouponMappingQuery groupByExpirationDate() Group by the expiration_date column
 * @method CouponMappingQuery groupByCustomerId() Group by the customer_id column
 * @method CouponMappingQuery groupByCanSend() Group by the can_send column
 * @method CouponMappingQuery groupByStatus() Group by the status column
 * @method CouponMappingQuery groupByOrderId() Group by the order_id column
 * @method CouponMappingQuery groupByItemId() Group by the item_id column
 * @method CouponMappingQuery groupByPayedForReturn() Group by the payed_for_return column
 * @method CouponMappingQuery groupByIncrementId() Group by the increment_id column
 * @method CouponMappingQuery groupByUnit() Group by the unit column
 * @method CouponMappingQuery groupByPersonalizedCoupon() Group by the personalized_coupon column
 * @method CouponMappingQuery groupByPosNumber() Group by the pos_number column
 *
 * @method CouponMappingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CouponMappingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CouponMappingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CouponMappingQuery leftJoinSalesFlatOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesFlatOrder relation
 * @method CouponMappingQuery rightJoinSalesFlatOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesFlatOrder relation
 * @method CouponMappingQuery innerJoinSalesFlatOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesFlatOrder relation
 *
 * @method CouponMappingQuery leftJoinPersonalizedCoupons($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonalizedCoupons relation
 * @method CouponMappingQuery rightJoinPersonalizedCoupons($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonalizedCoupons relation
 * @method CouponMappingQuery innerJoinPersonalizedCoupons($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonalizedCoupons relation
 *
 * @method CouponMapping findOne(PropelPDO $con = null) Return the first CouponMapping matching the query
 * @method CouponMapping findOneOrCreate(PropelPDO $con = null) Return the first CouponMapping matching the query, or a new CouponMapping object populated from the query conditions when no match is found
 *
 * @method CouponMapping findOneByCoupon(string $coupon) Return the first CouponMapping filtered by the coupon column
 * @method CouponMapping findOneByCouponMd5(string $coupon_md5) Return the first CouponMapping filtered by the coupon_md5 column
 * @method CouponMapping findOneByExpirationDate(string $expiration_date) Return the first CouponMapping filtered by the expiration_date column
 * @method CouponMapping findOneByCustomerId(int $customer_id) Return the first CouponMapping filtered by the customer_id column
 * @method CouponMapping findOneByCanSend(int $can_send) Return the first CouponMapping filtered by the can_send column
 * @method CouponMapping findOneByStatus(int $status) Return the first CouponMapping filtered by the status column
 * @method CouponMapping findOneByOrderId(int $order_id) Return the first CouponMapping filtered by the order_id column
 * @method CouponMapping findOneByItemId(int $item_id) Return the first CouponMapping filtered by the item_id column
 * @method CouponMapping findOneByPayedForReturn(int $payed_for_return) Return the first CouponMapping filtered by the payed_for_return column
 * @method CouponMapping findOneByIncrementId(string $increment_id) Return the first CouponMapping filtered by the increment_id column
 * @method CouponMapping findOneByUnit(int $unit) Return the first CouponMapping filtered by the unit column
 * @method CouponMapping findOneByPersonalizedCoupon(int $personalized_coupon) Return the first CouponMapping filtered by the personalized_coupon column
 * @method CouponMapping findOneByPosNumber(string $pos_number) Return the first CouponMapping filtered by the pos_number column
 *
 * @method array findByMappingId(int $mapping_id) Return CouponMapping objects filtered by the mapping_id column
 * @method array findByCoupon(string $coupon) Return CouponMapping objects filtered by the coupon column
 * @method array findByCouponMd5(string $coupon_md5) Return CouponMapping objects filtered by the coupon_md5 column
 * @method array findByExpirationDate(string $expiration_date) Return CouponMapping objects filtered by the expiration_date column
 * @method array findByCustomerId(int $customer_id) Return CouponMapping objects filtered by the customer_id column
 * @method array findByCanSend(int $can_send) Return CouponMapping objects filtered by the can_send column
 * @method array findByStatus(int $status) Return CouponMapping objects filtered by the status column
 * @method array findByOrderId(int $order_id) Return CouponMapping objects filtered by the order_id column
 * @method array findByItemId(int $item_id) Return CouponMapping objects filtered by the item_id column
 * @method array findByPayedForReturn(int $payed_for_return) Return CouponMapping objects filtered by the payed_for_return column
 * @method array findByIncrementId(string $increment_id) Return CouponMapping objects filtered by the increment_id column
 * @method array findByUnit(int $unit) Return CouponMapping objects filtered by the unit column
 * @method array findByPersonalizedCoupon(int $personalized_coupon) Return CouponMapping objects filtered by the personalized_coupon column
 * @method array findByPosNumber(string $pos_number) Return CouponMapping objects filtered by the pos_number column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseCouponMappingQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCouponMappingQuery object.
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
            $modelName = 'CouponMapping';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CouponMappingQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CouponMappingQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CouponMappingQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CouponMappingQuery) {
            return $criteria;
        }
        $query = new CouponMappingQuery(null, null, $modelAlias);

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
     * @return   CouponMapping|CouponMapping[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CouponMappingPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CouponMappingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CouponMapping A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByMappingId($key, $con = null)
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
     * @return                 CouponMapping A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT mapping_id, coupon, coupon_md5, expiration_date, customer_id, can_send, status, order_id, item_id, payed_for_return, increment_id, unit, personalized_coupon, pos_number FROM coupon_mapping WHERE mapping_id = :p0';
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
            $obj = new CouponMapping();
            $obj->hydrate($row);
            CouponMappingPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CouponMapping|CouponMapping[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CouponMapping[]|mixed the list of results, formatted by the current formatter
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
     * @return CouponMappingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CouponMappingPeer::MAPPING_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CouponMappingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CouponMappingPeer::MAPPING_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the mapping_id column
     *
     * Example usage:
     * <code>
     * $query->filterByMappingId(1234); // WHERE mapping_id = 1234
     * $query->filterByMappingId(array(12, 34)); // WHERE mapping_id IN (12, 34)
     * $query->filterByMappingId(array('min' => 12)); // WHERE mapping_id >= 12
     * $query->filterByMappingId(array('max' => 12)); // WHERE mapping_id <= 12
     * </code>
     *
     * @param     mixed $mappingId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponMappingQuery The current query, for fluid interface
     */
    public function filterByMappingId($mappingId = null, $comparison = null)
    {
        if (is_array($mappingId)) {
            $useMinMax = false;
            if (isset($mappingId['min'])) {
                $this->addUsingAlias(CouponMappingPeer::MAPPING_ID, $mappingId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mappingId['max'])) {
                $this->addUsingAlias(CouponMappingPeer::MAPPING_ID, $mappingId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CouponMappingPeer::MAPPING_ID, $mappingId, $comparison);
    }

    /**
     * Filter the query on the coupon column
     *
     * Example usage:
     * <code>
     * $query->filterByCoupon('fooValue');   // WHERE coupon = 'fooValue'
     * $query->filterByCoupon('%fooValue%'); // WHERE coupon LIKE '%fooValue%'
     * </code>
     *
     * @param     string $coupon The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponMappingQuery The current query, for fluid interface
     */
    public function filterByCoupon($coupon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($coupon)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $coupon)) {
                $coupon = str_replace('*', '%', $coupon);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CouponMappingPeer::COUPON, $coupon, $comparison);
    }

    /**
     * Filter the query on the coupon_md5 column
     *
     * Example usage:
     * <code>
     * $query->filterByCouponMd5('fooValue');   // WHERE coupon_md5 = 'fooValue'
     * $query->filterByCouponMd5('%fooValue%'); // WHERE coupon_md5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $couponMd5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponMappingQuery The current query, for fluid interface
     */
    public function filterByCouponMd5($couponMd5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($couponMd5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $couponMd5)) {
                $couponMd5 = str_replace('*', '%', $couponMd5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CouponMappingPeer::COUPON_MD5, $couponMd5, $comparison);
    }

    /**
     * Filter the query on the expiration_date column
     *
     * Example usage:
     * <code>
     * $query->filterByExpirationDate('2011-03-14'); // WHERE expiration_date = '2011-03-14'
     * $query->filterByExpirationDate('now'); // WHERE expiration_date = '2011-03-14'
     * $query->filterByExpirationDate(array('max' => 'yesterday')); // WHERE expiration_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $expirationDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponMappingQuery The current query, for fluid interface
     */
    public function filterByExpirationDate($expirationDate = null, $comparison = null)
    {
        if (is_array($expirationDate)) {
            $useMinMax = false;
            if (isset($expirationDate['min'])) {
                $this->addUsingAlias(CouponMappingPeer::EXPIRATION_DATE, $expirationDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expirationDate['max'])) {
                $this->addUsingAlias(CouponMappingPeer::EXPIRATION_DATE, $expirationDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CouponMappingPeer::EXPIRATION_DATE, $expirationDate, $comparison);
    }

    /**
     * Filter the query on the customer_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerId(1234); // WHERE customer_id = 1234
     * $query->filterByCustomerId(array(12, 34)); // WHERE customer_id IN (12, 34)
     * $query->filterByCustomerId(array('min' => 12)); // WHERE customer_id >= 12
     * $query->filterByCustomerId(array('max' => 12)); // WHERE customer_id <= 12
     * </code>
     *
     * @param     mixed $customerId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponMappingQuery The current query, for fluid interface
     */
    public function filterByCustomerId($customerId = null, $comparison = null)
    {
        if (is_array($customerId)) {
            $useMinMax = false;
            if (isset($customerId['min'])) {
                $this->addUsingAlias(CouponMappingPeer::CUSTOMER_ID, $customerId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customerId['max'])) {
                $this->addUsingAlias(CouponMappingPeer::CUSTOMER_ID, $customerId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CouponMappingPeer::CUSTOMER_ID, $customerId, $comparison);
    }

    /**
     * Filter the query on the can_send column
     *
     * Example usage:
     * <code>
     * $query->filterByCanSend(1234); // WHERE can_send = 1234
     * $query->filterByCanSend(array(12, 34)); // WHERE can_send IN (12, 34)
     * $query->filterByCanSend(array('min' => 12)); // WHERE can_send >= 12
     * $query->filterByCanSend(array('max' => 12)); // WHERE can_send <= 12
     * </code>
     *
     * @param     mixed $canSend The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponMappingQuery The current query, for fluid interface
     */
    public function filterByCanSend($canSend = null, $comparison = null)
    {
        if (is_array($canSend)) {
            $useMinMax = false;
            if (isset($canSend['min'])) {
                $this->addUsingAlias(CouponMappingPeer::CAN_SEND, $canSend['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($canSend['max'])) {
                $this->addUsingAlias(CouponMappingPeer::CAN_SEND, $canSend['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CouponMappingPeer::CAN_SEND, $canSend, $comparison);
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
     * @return CouponMappingQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (is_array($status)) {
            $useMinMax = false;
            if (isset($status['min'])) {
                $this->addUsingAlias(CouponMappingPeer::STATUS, $status['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($status['max'])) {
                $this->addUsingAlias(CouponMappingPeer::STATUS, $status['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CouponMappingPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the order_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderId(1234); // WHERE order_id = 1234
     * $query->filterByOrderId(array(12, 34)); // WHERE order_id IN (12, 34)
     * $query->filterByOrderId(array('min' => 12)); // WHERE order_id >= 12
     * $query->filterByOrderId(array('max' => 12)); // WHERE order_id <= 12
     * </code>
     *
     * @param     mixed $orderId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponMappingQuery The current query, for fluid interface
     */
    public function filterByOrderId($orderId = null, $comparison = null)
    {
        if (is_array($orderId)) {
            $useMinMax = false;
            if (isset($orderId['min'])) {
                $this->addUsingAlias(CouponMappingPeer::ORDER_ID, $orderId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($orderId['max'])) {
                $this->addUsingAlias(CouponMappingPeer::ORDER_ID, $orderId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CouponMappingPeer::ORDER_ID, $orderId, $comparison);
    }

    /**
     * Filter the query on the item_id column
     *
     * Example usage:
     * <code>
     * $query->filterByItemId(1234); // WHERE item_id = 1234
     * $query->filterByItemId(array(12, 34)); // WHERE item_id IN (12, 34)
     * $query->filterByItemId(array('min' => 12)); // WHERE item_id >= 12
     * $query->filterByItemId(array('max' => 12)); // WHERE item_id <= 12
     * </code>
     *
     * @param     mixed $itemId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponMappingQuery The current query, for fluid interface
     */
    public function filterByItemId($itemId = null, $comparison = null)
    {
        if (is_array($itemId)) {
            $useMinMax = false;
            if (isset($itemId['min'])) {
                $this->addUsingAlias(CouponMappingPeer::ITEM_ID, $itemId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemId['max'])) {
                $this->addUsingAlias(CouponMappingPeer::ITEM_ID, $itemId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CouponMappingPeer::ITEM_ID, $itemId, $comparison);
    }

    /**
     * Filter the query on the payed_for_return column
     *
     * Example usage:
     * <code>
     * $query->filterByPayedForReturn(1234); // WHERE payed_for_return = 1234
     * $query->filterByPayedForReturn(array(12, 34)); // WHERE payed_for_return IN (12, 34)
     * $query->filterByPayedForReturn(array('min' => 12)); // WHERE payed_for_return >= 12
     * $query->filterByPayedForReturn(array('max' => 12)); // WHERE payed_for_return <= 12
     * </code>
     *
     * @param     mixed $payedForReturn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponMappingQuery The current query, for fluid interface
     */
    public function filterByPayedForReturn($payedForReturn = null, $comparison = null)
    {
        if (is_array($payedForReturn)) {
            $useMinMax = false;
            if (isset($payedForReturn['min'])) {
                $this->addUsingAlias(CouponMappingPeer::PAYED_FOR_RETURN, $payedForReturn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($payedForReturn['max'])) {
                $this->addUsingAlias(CouponMappingPeer::PAYED_FOR_RETURN, $payedForReturn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CouponMappingPeer::PAYED_FOR_RETURN, $payedForReturn, $comparison);
    }

    /**
     * Filter the query on the increment_id column
     *
     * Example usage:
     * <code>
     * $query->filterByIncrementId('fooValue');   // WHERE increment_id = 'fooValue'
     * $query->filterByIncrementId('%fooValue%'); // WHERE increment_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $incrementId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponMappingQuery The current query, for fluid interface
     */
    public function filterByIncrementId($incrementId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($incrementId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $incrementId)) {
                $incrementId = str_replace('*', '%', $incrementId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CouponMappingPeer::INCREMENT_ID, $incrementId, $comparison);
    }

    /**
     * Filter the query on the unit column
     *
     * Example usage:
     * <code>
     * $query->filterByUnit(1234); // WHERE unit = 1234
     * $query->filterByUnit(array(12, 34)); // WHERE unit IN (12, 34)
     * $query->filterByUnit(array('min' => 12)); // WHERE unit >= 12
     * $query->filterByUnit(array('max' => 12)); // WHERE unit <= 12
     * </code>
     *
     * @param     mixed $unit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponMappingQuery The current query, for fluid interface
     */
    public function filterByUnit($unit = null, $comparison = null)
    {
        if (is_array($unit)) {
            $useMinMax = false;
            if (isset($unit['min'])) {
                $this->addUsingAlias(CouponMappingPeer::UNIT, $unit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unit['max'])) {
                $this->addUsingAlias(CouponMappingPeer::UNIT, $unit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CouponMappingPeer::UNIT, $unit, $comparison);
    }

    /**
     * Filter the query on the personalized_coupon column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonalizedCoupon(1234); // WHERE personalized_coupon = 1234
     * $query->filterByPersonalizedCoupon(array(12, 34)); // WHERE personalized_coupon IN (12, 34)
     * $query->filterByPersonalizedCoupon(array('min' => 12)); // WHERE personalized_coupon >= 12
     * $query->filterByPersonalizedCoupon(array('max' => 12)); // WHERE personalized_coupon <= 12
     * </code>
     *
     * @see       filterByPersonalizedCoupons()
     *
     * @param     mixed $personalizedCoupon The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponMappingQuery The current query, for fluid interface
     */
    public function filterByPersonalizedCoupon($personalizedCoupon = null, $comparison = null)
    {
        if (is_array($personalizedCoupon)) {
            $useMinMax = false;
            if (isset($personalizedCoupon['min'])) {
                $this->addUsingAlias(CouponMappingPeer::PERSONALIZED_COUPON, $personalizedCoupon['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personalizedCoupon['max'])) {
                $this->addUsingAlias(CouponMappingPeer::PERSONALIZED_COUPON, $personalizedCoupon['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CouponMappingPeer::PERSONALIZED_COUPON, $personalizedCoupon, $comparison);
    }

    /**
     * Filter the query on the pos_number column
     *
     * Example usage:
     * <code>
     * $query->filterByPosNumber('fooValue');   // WHERE pos_number = 'fooValue'
     * $query->filterByPosNumber('%fooValue%'); // WHERE pos_number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $posNumber The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponMappingQuery The current query, for fluid interface
     */
    public function filterByPosNumber($posNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($posNumber)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $posNumber)) {
                $posNumber = str_replace('*', '%', $posNumber);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CouponMappingPeer::POS_NUMBER, $posNumber, $comparison);
    }

    /**
     * Filter the query by a related SalesFlatOrder object
     *
     * @param   SalesFlatOrder|PropelObjectCollection $salesFlatOrder The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CouponMappingQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySalesFlatOrder($salesFlatOrder, $comparison = null)
    {
        if ($salesFlatOrder instanceof SalesFlatOrder) {
            return $this
                ->addUsingAlias(CouponMappingPeer::INCREMENT_ID, $salesFlatOrder->getIncrementId(), $comparison);
        } elseif ($salesFlatOrder instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CouponMappingPeer::INCREMENT_ID, $salesFlatOrder->toKeyValue('PrimaryKey', 'IncrementId'), $comparison);
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
     * @return CouponMappingQuery The current query, for fluid interface
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
     * Filter the query by a related PersonalizedCoupons object
     *
     * @param   PersonalizedCoupons|PropelObjectCollection $personalizedCoupons The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CouponMappingQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPersonalizedCoupons($personalizedCoupons, $comparison = null)
    {
        if ($personalizedCoupons instanceof PersonalizedCoupons) {
            return $this
                ->addUsingAlias(CouponMappingPeer::PERSONALIZED_COUPON, $personalizedCoupons->getId(), $comparison);
        } elseif ($personalizedCoupons instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CouponMappingPeer::PERSONALIZED_COUPON, $personalizedCoupons->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByPersonalizedCoupons() only accepts arguments of type PersonalizedCoupons or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PersonalizedCoupons relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CouponMappingQuery The current query, for fluid interface
     */
    public function joinPersonalizedCoupons($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PersonalizedCoupons');

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
            $this->addJoinObject($join, 'PersonalizedCoupons');
        }

        return $this;
    }

    /**
     * Use the PersonalizedCoupons relation PersonalizedCoupons object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PersonalizedCouponsQuery A secondary query class using the current class as primary query
     */
    public function usePersonalizedCouponsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPersonalizedCoupons($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PersonalizedCoupons', 'PersonalizedCouponsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CouponMapping $couponMapping Object to remove from the list of results
     *
     * @return CouponMappingQuery The current query, for fluid interface
     */
    public function prune($couponMapping = null)
    {
        if ($couponMapping) {
            $this->addUsingAlias(CouponMappingPeer::MAPPING_ID, $couponMapping->getMappingId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
