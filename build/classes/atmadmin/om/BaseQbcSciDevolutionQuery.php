<?php


/**
 * Base class that represents a query for the 'qbc_sci_devolution' table.
 *
 *
 *
 * @method QbcSciDevolutionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QbcSciDevolutionQuery orderByPetitionId($order = Criteria::ASC) Order by the petition_id column
 * @method QbcSciDevolutionQuery orderByCampaignId($order = Criteria::ASC) Order by the campaign_id column
 * @method QbcSciDevolutionQuery orderBySellDocument($order = Criteria::ASC) Order by the sell_document column
 * @method QbcSciDevolutionQuery orderByOrderItem($order = Criteria::ASC) Order by the order_item column
 * @method QbcSciDevolutionQuery orderByOrderId($order = Criteria::ASC) Order by the order_id column
 * @method QbcSciDevolutionQuery orderByCredits($order = Criteria::ASC) Order by the credits column
 * @method QbcSciDevolutionQuery orderByCash($order = Criteria::ASC) Order by the cash column
 * @method QbcSciDevolutionQuery orderByCoupon($order = Criteria::ASC) Order by the coupon column
 * @method QbcSciDevolutionQuery orderByUnit($order = Criteria::ASC) Order by the unit column
 * @method QbcSciDevolutionQuery orderByProcessed($order = Criteria::ASC) Order by the processed column
 * @method QbcSciDevolutionQuery orderByStartDate($order = Criteria::ASC) Order by the start_date column
 *
 * @method QbcSciDevolutionQuery groupById() Group by the id column
 * @method QbcSciDevolutionQuery groupByPetitionId() Group by the petition_id column
 * @method QbcSciDevolutionQuery groupByCampaignId() Group by the campaign_id column
 * @method QbcSciDevolutionQuery groupBySellDocument() Group by the sell_document column
 * @method QbcSciDevolutionQuery groupByOrderItem() Group by the order_item column
 * @method QbcSciDevolutionQuery groupByOrderId() Group by the order_id column
 * @method QbcSciDevolutionQuery groupByCredits() Group by the credits column
 * @method QbcSciDevolutionQuery groupByCash() Group by the cash column
 * @method QbcSciDevolutionQuery groupByCoupon() Group by the coupon column
 * @method QbcSciDevolutionQuery groupByUnit() Group by the unit column
 * @method QbcSciDevolutionQuery groupByProcessed() Group by the processed column
 * @method QbcSciDevolutionQuery groupByStartDate() Group by the start_date column
 *
 * @method QbcSciDevolutionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSciDevolutionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSciDevolutionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSciDevolution findOne(PropelPDO $con = null) Return the first QbcSciDevolution matching the query
 * @method QbcSciDevolution findOneOrCreate(PropelPDO $con = null) Return the first QbcSciDevolution matching the query, or a new QbcSciDevolution object populated from the query conditions when no match is found
 *
 * @method QbcSciDevolution findOneByPetitionId(string $petition_id) Return the first QbcSciDevolution filtered by the petition_id column
 * @method QbcSciDevolution findOneByCampaignId(int $campaign_id) Return the first QbcSciDevolution filtered by the campaign_id column
 * @method QbcSciDevolution findOneBySellDocument(string $sell_document) Return the first QbcSciDevolution filtered by the sell_document column
 * @method QbcSciDevolution findOneByOrderItem(int $order_item) Return the first QbcSciDevolution filtered by the order_item column
 * @method QbcSciDevolution findOneByOrderId(int $order_id) Return the first QbcSciDevolution filtered by the order_id column
 * @method QbcSciDevolution findOneByCredits(string $credits) Return the first QbcSciDevolution filtered by the credits column
 * @method QbcSciDevolution findOneByCash(string $cash) Return the first QbcSciDevolution filtered by the cash column
 * @method QbcSciDevolution findOneByCoupon(string $coupon) Return the first QbcSciDevolution filtered by the coupon column
 * @method QbcSciDevolution findOneByUnit(int $unit) Return the first QbcSciDevolution filtered by the unit column
 * @method QbcSciDevolution findOneByProcessed(int $processed) Return the first QbcSciDevolution filtered by the processed column
 * @method QbcSciDevolution findOneByStartDate(string $start_date) Return the first QbcSciDevolution filtered by the start_date column
 *
 * @method array findById(int $id) Return QbcSciDevolution objects filtered by the id column
 * @method array findByPetitionId(string $petition_id) Return QbcSciDevolution objects filtered by the petition_id column
 * @method array findByCampaignId(int $campaign_id) Return QbcSciDevolution objects filtered by the campaign_id column
 * @method array findBySellDocument(string $sell_document) Return QbcSciDevolution objects filtered by the sell_document column
 * @method array findByOrderItem(int $order_item) Return QbcSciDevolution objects filtered by the order_item column
 * @method array findByOrderId(int $order_id) Return QbcSciDevolution objects filtered by the order_id column
 * @method array findByCredits(string $credits) Return QbcSciDevolution objects filtered by the credits column
 * @method array findByCash(string $cash) Return QbcSciDevolution objects filtered by the cash column
 * @method array findByCoupon(string $coupon) Return QbcSciDevolution objects filtered by the coupon column
 * @method array findByUnit(int $unit) Return QbcSciDevolution objects filtered by the unit column
 * @method array findByProcessed(int $processed) Return QbcSciDevolution objects filtered by the processed column
 * @method array findByStartDate(string $start_date) Return QbcSciDevolution objects filtered by the start_date column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciDevolutionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcSciDevolutionQuery object.
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
            $modelName = 'QbcSciDevolution';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcSciDevolutionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcSciDevolutionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcSciDevolutionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcSciDevolutionQuery) {
            return $criteria;
        }
        $query = new QbcSciDevolutionQuery(null, null, $modelAlias);

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
     * @return   QbcSciDevolution|QbcSciDevolution[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcSciDevolutionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcSciDevolutionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcSciDevolution A model object, or null if the key is not found
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
     * @return                 QbcSciDevolution A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, petition_id, campaign_id, sell_document, order_item, order_id, credits, cash, coupon, unit, processed, start_date FROM qbc_sci_devolution WHERE id = :p0';
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
            $obj = new QbcSciDevolution();
            $obj->hydrate($row);
            QbcSciDevolutionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcSciDevolution|QbcSciDevolution[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcSciDevolution[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcSciDevolutionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcSciDevolutionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcSciDevolutionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcSciDevolutionPeer::ID, $keys, Criteria::IN);
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
     * @return QbcSciDevolutionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcSciDevolutionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcSciDevolutionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciDevolutionPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the petition_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPetitionId('fooValue');   // WHERE petition_id = 'fooValue'
     * $query->filterByPetitionId('%fooValue%'); // WHERE petition_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $petitionId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciDevolutionQuery The current query, for fluid interface
     */
    public function filterByPetitionId($petitionId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($petitionId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $petitionId)) {
                $petitionId = str_replace('*', '%', $petitionId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciDevolutionPeer::PETITION_ID, $petitionId, $comparison);
    }

    /**
     * Filter the query on the campaign_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCampaignId(1234); // WHERE campaign_id = 1234
     * $query->filterByCampaignId(array(12, 34)); // WHERE campaign_id IN (12, 34)
     * $query->filterByCampaignId(array('min' => 12)); // WHERE campaign_id >= 12
     * $query->filterByCampaignId(array('max' => 12)); // WHERE campaign_id <= 12
     * </code>
     *
     * @param     mixed $campaignId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciDevolutionQuery The current query, for fluid interface
     */
    public function filterByCampaignId($campaignId = null, $comparison = null)
    {
        if (is_array($campaignId)) {
            $useMinMax = false;
            if (isset($campaignId['min'])) {
                $this->addUsingAlias(QbcSciDevolutionPeer::CAMPAIGN_ID, $campaignId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($campaignId['max'])) {
                $this->addUsingAlias(QbcSciDevolutionPeer::CAMPAIGN_ID, $campaignId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciDevolutionPeer::CAMPAIGN_ID, $campaignId, $comparison);
    }

    /**
     * Filter the query on the sell_document column
     *
     * Example usage:
     * <code>
     * $query->filterBySellDocument('fooValue');   // WHERE sell_document = 'fooValue'
     * $query->filterBySellDocument('%fooValue%'); // WHERE sell_document LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sellDocument The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciDevolutionQuery The current query, for fluid interface
     */
    public function filterBySellDocument($sellDocument = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sellDocument)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sellDocument)) {
                $sellDocument = str_replace('*', '%', $sellDocument);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciDevolutionPeer::SELL_DOCUMENT, $sellDocument, $comparison);
    }

    /**
     * Filter the query on the order_item column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderItem(1234); // WHERE order_item = 1234
     * $query->filterByOrderItem(array(12, 34)); // WHERE order_item IN (12, 34)
     * $query->filterByOrderItem(array('min' => 12)); // WHERE order_item >= 12
     * $query->filterByOrderItem(array('max' => 12)); // WHERE order_item <= 12
     * </code>
     *
     * @param     mixed $orderItem The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciDevolutionQuery The current query, for fluid interface
     */
    public function filterByOrderItem($orderItem = null, $comparison = null)
    {
        if (is_array($orderItem)) {
            $useMinMax = false;
            if (isset($orderItem['min'])) {
                $this->addUsingAlias(QbcSciDevolutionPeer::ORDER_ITEM, $orderItem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($orderItem['max'])) {
                $this->addUsingAlias(QbcSciDevolutionPeer::ORDER_ITEM, $orderItem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciDevolutionPeer::ORDER_ITEM, $orderItem, $comparison);
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
     * @return QbcSciDevolutionQuery The current query, for fluid interface
     */
    public function filterByOrderId($orderId = null, $comparison = null)
    {
        if (is_array($orderId)) {
            $useMinMax = false;
            if (isset($orderId['min'])) {
                $this->addUsingAlias(QbcSciDevolutionPeer::ORDER_ID, $orderId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($orderId['max'])) {
                $this->addUsingAlias(QbcSciDevolutionPeer::ORDER_ID, $orderId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciDevolutionPeer::ORDER_ID, $orderId, $comparison);
    }

    /**
     * Filter the query on the credits column
     *
     * Example usage:
     * <code>
     * $query->filterByCredits(1234); // WHERE credits = 1234
     * $query->filterByCredits(array(12, 34)); // WHERE credits IN (12, 34)
     * $query->filterByCredits(array('min' => 12)); // WHERE credits >= 12
     * $query->filterByCredits(array('max' => 12)); // WHERE credits <= 12
     * </code>
     *
     * @param     mixed $credits The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciDevolutionQuery The current query, for fluid interface
     */
    public function filterByCredits($credits = null, $comparison = null)
    {
        if (is_array($credits)) {
            $useMinMax = false;
            if (isset($credits['min'])) {
                $this->addUsingAlias(QbcSciDevolutionPeer::CREDITS, $credits['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($credits['max'])) {
                $this->addUsingAlias(QbcSciDevolutionPeer::CREDITS, $credits['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciDevolutionPeer::CREDITS, $credits, $comparison);
    }

    /**
     * Filter the query on the cash column
     *
     * Example usage:
     * <code>
     * $query->filterByCash(1234); // WHERE cash = 1234
     * $query->filterByCash(array(12, 34)); // WHERE cash IN (12, 34)
     * $query->filterByCash(array('min' => 12)); // WHERE cash >= 12
     * $query->filterByCash(array('max' => 12)); // WHERE cash <= 12
     * </code>
     *
     * @param     mixed $cash The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciDevolutionQuery The current query, for fluid interface
     */
    public function filterByCash($cash = null, $comparison = null)
    {
        if (is_array($cash)) {
            $useMinMax = false;
            if (isset($cash['min'])) {
                $this->addUsingAlias(QbcSciDevolutionPeer::CASH, $cash['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cash['max'])) {
                $this->addUsingAlias(QbcSciDevolutionPeer::CASH, $cash['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciDevolutionPeer::CASH, $cash, $comparison);
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
     * @return QbcSciDevolutionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciDevolutionPeer::COUPON, $coupon, $comparison);
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
     * @return QbcSciDevolutionQuery The current query, for fluid interface
     */
    public function filterByUnit($unit = null, $comparison = null)
    {
        if (is_array($unit)) {
            $useMinMax = false;
            if (isset($unit['min'])) {
                $this->addUsingAlias(QbcSciDevolutionPeer::UNIT, $unit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unit['max'])) {
                $this->addUsingAlias(QbcSciDevolutionPeer::UNIT, $unit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciDevolutionPeer::UNIT, $unit, $comparison);
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
     * @return QbcSciDevolutionQuery The current query, for fluid interface
     */
    public function filterByProcessed($processed = null, $comparison = null)
    {
        if (is_array($processed)) {
            $useMinMax = false;
            if (isset($processed['min'])) {
                $this->addUsingAlias(QbcSciDevolutionPeer::PROCESSED, $processed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($processed['max'])) {
                $this->addUsingAlias(QbcSciDevolutionPeer::PROCESSED, $processed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciDevolutionPeer::PROCESSED, $processed, $comparison);
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
     * @return QbcSciDevolutionQuery The current query, for fluid interface
     */
    public function filterByStartDate($startDate = null, $comparison = null)
    {
        if (is_array($startDate)) {
            $useMinMax = false;
            if (isset($startDate['min'])) {
                $this->addUsingAlias(QbcSciDevolutionPeer::START_DATE, $startDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($startDate['max'])) {
                $this->addUsingAlias(QbcSciDevolutionPeer::START_DATE, $startDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciDevolutionPeer::START_DATE, $startDate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcSciDevolution $qbcSciDevolution Object to remove from the list of results
     *
     * @return QbcSciDevolutionQuery The current query, for fluid interface
     */
    public function prune($qbcSciDevolution = null)
    {
        if ($qbcSciDevolution) {
            $this->addUsingAlias(QbcSciDevolutionPeer::ID, $qbcSciDevolution->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
