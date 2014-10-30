<?php


/**
 * Base class that represents a query for the 'coupon_history' table.
 *
 *
 *
 * @method CouponHistoryQuery orderByHistoryId($order = Criteria::ASC) Order by the history_id column
 * @method CouponHistoryQuery orderByCampaignName($order = Criteria::ASC) Order by the campaign_name column
 * @method CouponHistoryQuery orderByCouponCode($order = Criteria::ASC) Order by the coupon_code column
 * @method CouponHistoryQuery orderByRedemptionDate($order = Criteria::ASC) Order by the redemption_date column
 * @method CouponHistoryQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method CouponHistoryQuery orderByMerchantId($order = Criteria::ASC) Order by the merchant_id column
 * @method CouponHistoryQuery orderByCampaignId($order = Criteria::ASC) Order by the campaign_id column
 * @method CouponHistoryQuery orderByOrderId($order = Criteria::ASC) Order by the order_id column
 * @method CouponHistoryQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method CouponHistoryQuery orderByProcessed($order = Criteria::ASC) Order by the processed column
 * @method CouponHistoryQuery orderByUnit($order = Criteria::ASC) Order by the unit column
 *
 * @method CouponHistoryQuery groupByHistoryId() Group by the history_id column
 * @method CouponHistoryQuery groupByCampaignName() Group by the campaign_name column
 * @method CouponHistoryQuery groupByCouponCode() Group by the coupon_code column
 * @method CouponHistoryQuery groupByRedemptionDate() Group by the redemption_date column
 * @method CouponHistoryQuery groupByValue() Group by the value column
 * @method CouponHistoryQuery groupByMerchantId() Group by the merchant_id column
 * @method CouponHistoryQuery groupByCampaignId() Group by the campaign_id column
 * @method CouponHistoryQuery groupByOrderId() Group by the order_id column
 * @method CouponHistoryQuery groupByItemId() Group by the item_id column
 * @method CouponHistoryQuery groupByProcessed() Group by the processed column
 * @method CouponHistoryQuery groupByUnit() Group by the unit column
 *
 * @method CouponHistoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CouponHistoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CouponHistoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CouponHistory findOne(PropelPDO $con = null) Return the first CouponHistory matching the query
 * @method CouponHistory findOneOrCreate(PropelPDO $con = null) Return the first CouponHistory matching the query, or a new CouponHistory object populated from the query conditions when no match is found
 *
 * @method CouponHistory findOneByCampaignName(string $campaign_name) Return the first CouponHistory filtered by the campaign_name column
 * @method CouponHistory findOneByCouponCode(string $coupon_code) Return the first CouponHistory filtered by the coupon_code column
 * @method CouponHistory findOneByRedemptionDate(string $redemption_date) Return the first CouponHistory filtered by the redemption_date column
 * @method CouponHistory findOneByValue(string $value) Return the first CouponHistory filtered by the value column
 * @method CouponHistory findOneByMerchantId(int $merchant_id) Return the first CouponHistory filtered by the merchant_id column
 * @method CouponHistory findOneByCampaignId(string $campaign_id) Return the first CouponHistory filtered by the campaign_id column
 * @method CouponHistory findOneByOrderId(string $order_id) Return the first CouponHistory filtered by the order_id column
 * @method CouponHistory findOneByItemId(string $item_id) Return the first CouponHistory filtered by the item_id column
 * @method CouponHistory findOneByProcessed(int $processed) Return the first CouponHistory filtered by the processed column
 * @method CouponHistory findOneByUnit(int $unit) Return the first CouponHistory filtered by the unit column
 *
 * @method array findByHistoryId(int $history_id) Return CouponHistory objects filtered by the history_id column
 * @method array findByCampaignName(string $campaign_name) Return CouponHistory objects filtered by the campaign_name column
 * @method array findByCouponCode(string $coupon_code) Return CouponHistory objects filtered by the coupon_code column
 * @method array findByRedemptionDate(string $redemption_date) Return CouponHistory objects filtered by the redemption_date column
 * @method array findByValue(string $value) Return CouponHistory objects filtered by the value column
 * @method array findByMerchantId(int $merchant_id) Return CouponHistory objects filtered by the merchant_id column
 * @method array findByCampaignId(string $campaign_id) Return CouponHistory objects filtered by the campaign_id column
 * @method array findByOrderId(string $order_id) Return CouponHistory objects filtered by the order_id column
 * @method array findByItemId(string $item_id) Return CouponHistory objects filtered by the item_id column
 * @method array findByProcessed(int $processed) Return CouponHistory objects filtered by the processed column
 * @method array findByUnit(int $unit) Return CouponHistory objects filtered by the unit column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseCouponHistoryQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCouponHistoryQuery object.
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
            $modelName = 'CouponHistory';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CouponHistoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CouponHistoryQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CouponHistoryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CouponHistoryQuery) {
            return $criteria;
        }
        $query = new CouponHistoryQuery(null, null, $modelAlias);

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
     * @return   CouponHistory|CouponHistory[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CouponHistoryPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CouponHistoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CouponHistory A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByHistoryId($key, $con = null)
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
     * @return                 CouponHistory A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT history_id, campaign_name, coupon_code, redemption_date, value, merchant_id, campaign_id, order_id, item_id, processed, unit FROM coupon_history WHERE history_id = :p0';
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
            $obj = new CouponHistory();
            $obj->hydrate($row);
            CouponHistoryPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CouponHistory|CouponHistory[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CouponHistory[]|mixed the list of results, formatted by the current formatter
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
     * @return CouponHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CouponHistoryPeer::HISTORY_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CouponHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CouponHistoryPeer::HISTORY_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the history_id column
     *
     * Example usage:
     * <code>
     * $query->filterByHistoryId(1234); // WHERE history_id = 1234
     * $query->filterByHistoryId(array(12, 34)); // WHERE history_id IN (12, 34)
     * $query->filterByHistoryId(array('min' => 12)); // WHERE history_id >= 12
     * $query->filterByHistoryId(array('max' => 12)); // WHERE history_id <= 12
     * </code>
     *
     * @param     mixed $historyId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponHistoryQuery The current query, for fluid interface
     */
    public function filterByHistoryId($historyId = null, $comparison = null)
    {
        if (is_array($historyId)) {
            $useMinMax = false;
            if (isset($historyId['min'])) {
                $this->addUsingAlias(CouponHistoryPeer::HISTORY_ID, $historyId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($historyId['max'])) {
                $this->addUsingAlias(CouponHistoryPeer::HISTORY_ID, $historyId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CouponHistoryPeer::HISTORY_ID, $historyId, $comparison);
    }

    /**
     * Filter the query on the campaign_name column
     *
     * Example usage:
     * <code>
     * $query->filterByCampaignName('fooValue');   // WHERE campaign_name = 'fooValue'
     * $query->filterByCampaignName('%fooValue%'); // WHERE campaign_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $campaignName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponHistoryQuery The current query, for fluid interface
     */
    public function filterByCampaignName($campaignName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($campaignName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $campaignName)) {
                $campaignName = str_replace('*', '%', $campaignName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CouponHistoryPeer::CAMPAIGN_NAME, $campaignName, $comparison);
    }

    /**
     * Filter the query on the coupon_code column
     *
     * Example usage:
     * <code>
     * $query->filterByCouponCode('fooValue');   // WHERE coupon_code = 'fooValue'
     * $query->filterByCouponCode('%fooValue%'); // WHERE coupon_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $couponCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponHistoryQuery The current query, for fluid interface
     */
    public function filterByCouponCode($couponCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($couponCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $couponCode)) {
                $couponCode = str_replace('*', '%', $couponCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CouponHistoryPeer::COUPON_CODE, $couponCode, $comparison);
    }

    /**
     * Filter the query on the redemption_date column
     *
     * Example usage:
     * <code>
     * $query->filterByRedemptionDate('2011-03-14'); // WHERE redemption_date = '2011-03-14'
     * $query->filterByRedemptionDate('now'); // WHERE redemption_date = '2011-03-14'
     * $query->filterByRedemptionDate(array('max' => 'yesterday')); // WHERE redemption_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $redemptionDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponHistoryQuery The current query, for fluid interface
     */
    public function filterByRedemptionDate($redemptionDate = null, $comparison = null)
    {
        if (is_array($redemptionDate)) {
            $useMinMax = false;
            if (isset($redemptionDate['min'])) {
                $this->addUsingAlias(CouponHistoryPeer::REDEMPTION_DATE, $redemptionDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($redemptionDate['max'])) {
                $this->addUsingAlias(CouponHistoryPeer::REDEMPTION_DATE, $redemptionDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CouponHistoryPeer::REDEMPTION_DATE, $redemptionDate, $comparison);
    }

    /**
     * Filter the query on the value column
     *
     * Example usage:
     * <code>
     * $query->filterByValue(1234); // WHERE value = 1234
     * $query->filterByValue(array(12, 34)); // WHERE value IN (12, 34)
     * $query->filterByValue(array('min' => 12)); // WHERE value >= 12
     * $query->filterByValue(array('max' => 12)); // WHERE value <= 12
     * </code>
     *
     * @param     mixed $value The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponHistoryQuery The current query, for fluid interface
     */
    public function filterByValue($value = null, $comparison = null)
    {
        if (is_array($value)) {
            $useMinMax = false;
            if (isset($value['min'])) {
                $this->addUsingAlias(CouponHistoryPeer::VALUE, $value['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($value['max'])) {
                $this->addUsingAlias(CouponHistoryPeer::VALUE, $value['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CouponHistoryPeer::VALUE, $value, $comparison);
    }

    /**
     * Filter the query on the merchant_id column
     *
     * Example usage:
     * <code>
     * $query->filterByMerchantId(1234); // WHERE merchant_id = 1234
     * $query->filterByMerchantId(array(12, 34)); // WHERE merchant_id IN (12, 34)
     * $query->filterByMerchantId(array('min' => 12)); // WHERE merchant_id >= 12
     * $query->filterByMerchantId(array('max' => 12)); // WHERE merchant_id <= 12
     * </code>
     *
     * @param     mixed $merchantId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponHistoryQuery The current query, for fluid interface
     */
    public function filterByMerchantId($merchantId = null, $comparison = null)
    {
        if (is_array($merchantId)) {
            $useMinMax = false;
            if (isset($merchantId['min'])) {
                $this->addUsingAlias(CouponHistoryPeer::MERCHANT_ID, $merchantId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($merchantId['max'])) {
                $this->addUsingAlias(CouponHistoryPeer::MERCHANT_ID, $merchantId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CouponHistoryPeer::MERCHANT_ID, $merchantId, $comparison);
    }

    /**
     * Filter the query on the campaign_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCampaignId('fooValue');   // WHERE campaign_id = 'fooValue'
     * $query->filterByCampaignId('%fooValue%'); // WHERE campaign_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $campaignId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponHistoryQuery The current query, for fluid interface
     */
    public function filterByCampaignId($campaignId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($campaignId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $campaignId)) {
                $campaignId = str_replace('*', '%', $campaignId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CouponHistoryPeer::CAMPAIGN_ID, $campaignId, $comparison);
    }

    /**
     * Filter the query on the order_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderId('fooValue');   // WHERE order_id = 'fooValue'
     * $query->filterByOrderId('%fooValue%'); // WHERE order_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $orderId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponHistoryQuery The current query, for fluid interface
     */
    public function filterByOrderId($orderId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($orderId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $orderId)) {
                $orderId = str_replace('*', '%', $orderId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CouponHistoryPeer::ORDER_ID, $orderId, $comparison);
    }

    /**
     * Filter the query on the item_id column
     *
     * Example usage:
     * <code>
     * $query->filterByItemId('fooValue');   // WHERE item_id = 'fooValue'
     * $query->filterByItemId('%fooValue%'); // WHERE item_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponHistoryQuery The current query, for fluid interface
     */
    public function filterByItemId($itemId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $itemId)) {
                $itemId = str_replace('*', '%', $itemId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CouponHistoryPeer::ITEM_ID, $itemId, $comparison);
    }

    /**
     * Filter the query on the processed column
     *
     * Example usage:
     * <code>
     * $query->filterByProcessed(1234); // WHERE processed = 1234
     * $query->filterByProcessed(array(12, 34)); // WHERE processed IN (12, 34)
     * $query->filterByProcessed(array('min' => 12)); // WHERE processed >= 12
     * $query->filterByProcessed(array('max' => 12)); // WHERE processed <= 12
     * </code>
     *
     * @param     mixed $processed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CouponHistoryQuery The current query, for fluid interface
     */
    public function filterByProcessed($processed = null, $comparison = null)
    {
        if (is_array($processed)) {
            $useMinMax = false;
            if (isset($processed['min'])) {
                $this->addUsingAlias(CouponHistoryPeer::PROCESSED, $processed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($processed['max'])) {
                $this->addUsingAlias(CouponHistoryPeer::PROCESSED, $processed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CouponHistoryPeer::PROCESSED, $processed, $comparison);
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
     * @return CouponHistoryQuery The current query, for fluid interface
     */
    public function filterByUnit($unit = null, $comparison = null)
    {
        if (is_array($unit)) {
            $useMinMax = false;
            if (isset($unit['min'])) {
                $this->addUsingAlias(CouponHistoryPeer::UNIT, $unit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unit['max'])) {
                $this->addUsingAlias(CouponHistoryPeer::UNIT, $unit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CouponHistoryPeer::UNIT, $unit, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CouponHistory $couponHistory Object to remove from the list of results
     *
     * @return CouponHistoryQuery The current query, for fluid interface
     */
    public function prune($couponHistory = null)
    {
        if ($couponHistory) {
            $this->addUsingAlias(CouponHistoryPeer::HISTORY_ID, $couponHistory->getHistoryId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
