<?php


/**
 * Base class that represents a query for the 'qbc_sci_sell' table.
 *
 *
 *
 * @method QbcSciSellQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QbcSciSellQuery orderByPetitionId($order = Criteria::ASC) Order by the petition_id column
 * @method QbcSciSellQuery orderByOrderId($order = Criteria::ASC) Order by the order_id column
 * @method QbcSciSellQuery orderByPosNumber($order = Criteria::ASC) Order by the pos_number column
 * @method QbcSciSellQuery orderByPosType($order = Criteria::ASC) Order by the pos_type column
 * @method QbcSciSellQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method QbcSciSellQuery orderByGiftcard($order = Criteria::ASC) Order by the giftcard column
 * @method QbcSciSellQuery orderByProcessed($order = Criteria::ASC) Order by the processed column
 * @method QbcSciSellQuery orderByUnit($order = Criteria::ASC) Order by the unit column
 * @method QbcSciSellQuery orderByRewardsUsed($order = Criteria::ASC) Order by the rewards_used column
 * @method QbcSciSellQuery orderByIsCancell($order = Criteria::ASC) Order by the is_cancell column
 *
 * @method QbcSciSellQuery groupById() Group by the id column
 * @method QbcSciSellQuery groupByPetitionId() Group by the petition_id column
 * @method QbcSciSellQuery groupByOrderId() Group by the order_id column
 * @method QbcSciSellQuery groupByPosNumber() Group by the pos_number column
 * @method QbcSciSellQuery groupByPosType() Group by the pos_type column
 * @method QbcSciSellQuery groupByItemId() Group by the item_id column
 * @method QbcSciSellQuery groupByGiftcard() Group by the giftcard column
 * @method QbcSciSellQuery groupByProcessed() Group by the processed column
 * @method QbcSciSellQuery groupByUnit() Group by the unit column
 * @method QbcSciSellQuery groupByRewardsUsed() Group by the rewards_used column
 * @method QbcSciSellQuery groupByIsCancell() Group by the is_cancell column
 *
 * @method QbcSciSellQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSciSellQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSciSellQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSciSell findOne(PropelPDO $con = null) Return the first QbcSciSell matching the query
 * @method QbcSciSell findOneOrCreate(PropelPDO $con = null) Return the first QbcSciSell matching the query, or a new QbcSciSell object populated from the query conditions when no match is found
 *
 * @method QbcSciSell findOneByPetitionId(string $petition_id) Return the first QbcSciSell filtered by the petition_id column
 * @method QbcSciSell findOneByOrderId(string $order_id) Return the first QbcSciSell filtered by the order_id column
 * @method QbcSciSell findOneByPosNumber(string $pos_number) Return the first QbcSciSell filtered by the pos_number column
 * @method QbcSciSell findOneByPosType(string $pos_type) Return the first QbcSciSell filtered by the pos_type column
 * @method QbcSciSell findOneByItemId(string $item_id) Return the first QbcSciSell filtered by the item_id column
 * @method QbcSciSell findOneByGiftcard(int $giftcard) Return the first QbcSciSell filtered by the giftcard column
 * @method QbcSciSell findOneByProcessed(int $processed) Return the first QbcSciSell filtered by the processed column
 * @method QbcSciSell findOneByUnit(int $unit) Return the first QbcSciSell filtered by the unit column
 * @method QbcSciSell findOneByRewardsUsed(string $rewards_used) Return the first QbcSciSell filtered by the rewards_used column
 * @method QbcSciSell findOneByIsCancell(int $is_cancell) Return the first QbcSciSell filtered by the is_cancell column
 *
 * @method array findById(int $id) Return QbcSciSell objects filtered by the id column
 * @method array findByPetitionId(string $petition_id) Return QbcSciSell objects filtered by the petition_id column
 * @method array findByOrderId(string $order_id) Return QbcSciSell objects filtered by the order_id column
 * @method array findByPosNumber(string $pos_number) Return QbcSciSell objects filtered by the pos_number column
 * @method array findByPosType(string $pos_type) Return QbcSciSell objects filtered by the pos_type column
 * @method array findByItemId(string $item_id) Return QbcSciSell objects filtered by the item_id column
 * @method array findByGiftcard(int $giftcard) Return QbcSciSell objects filtered by the giftcard column
 * @method array findByProcessed(int $processed) Return QbcSciSell objects filtered by the processed column
 * @method array findByUnit(int $unit) Return QbcSciSell objects filtered by the unit column
 * @method array findByRewardsUsed(string $rewards_used) Return QbcSciSell objects filtered by the rewards_used column
 * @method array findByIsCancell(int $is_cancell) Return QbcSciSell objects filtered by the is_cancell column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciSellQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcSciSellQuery object.
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
            $modelName = 'QbcSciSell';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcSciSellQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcSciSellQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcSciSellQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcSciSellQuery) {
            return $criteria;
        }
        $query = new QbcSciSellQuery(null, null, $modelAlias);

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
     * @return   QbcSciSell|QbcSciSell[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcSciSellPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcSciSellPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcSciSell A model object, or null if the key is not found
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
     * @return                 QbcSciSell A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, petition_id, order_id, pos_number, pos_type, item_id, giftcard, processed, unit, rewards_used, is_cancell FROM qbc_sci_sell WHERE id = :p0';
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
            $obj = new QbcSciSell();
            $obj->hydrate($row);
            QbcSciSellPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcSciSell|QbcSciSell[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcSciSell[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcSciSellQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcSciSellPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcSciSellQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcSciSellPeer::ID, $keys, Criteria::IN);
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
     * @return QbcSciSellQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcSciSellPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcSciSellPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciSellPeer::ID, $id, $comparison);
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
     * @return QbcSciSellQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciSellPeer::PETITION_ID, $petitionId, $comparison);
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
     * @return QbcSciSellQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciSellPeer::ORDER_ID, $orderId, $comparison);
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
     * @return QbcSciSellQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciSellPeer::POS_NUMBER, $posNumber, $comparison);
    }

    /**
     * Filter the query on the pos_type column
     *
     * Example usage:
     * <code>
     * $query->filterByPosType('fooValue');   // WHERE pos_type = 'fooValue'
     * $query->filterByPosType('%fooValue%'); // WHERE pos_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $posType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciSellQuery The current query, for fluid interface
     */
    public function filterByPosType($posType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($posType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $posType)) {
                $posType = str_replace('*', '%', $posType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciSellPeer::POS_TYPE, $posType, $comparison);
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
     * @return QbcSciSellQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciSellPeer::ITEM_ID, $itemId, $comparison);
    }

    /**
     * Filter the query on the giftcard column
     *
     * Example usage:
     * <code>
     * $query->filterByGiftcard(1234); // WHERE giftcard = 1234
     * $query->filterByGiftcard(array(12, 34)); // WHERE giftcard IN (12, 34)
     * $query->filterByGiftcard(array('min' => 12)); // WHERE giftcard >= 12
     * $query->filterByGiftcard(array('max' => 12)); // WHERE giftcard <= 12
     * </code>
     *
     * @param     mixed $giftcard The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciSellQuery The current query, for fluid interface
     */
    public function filterByGiftcard($giftcard = null, $comparison = null)
    {
        if (is_array($giftcard)) {
            $useMinMax = false;
            if (isset($giftcard['min'])) {
                $this->addUsingAlias(QbcSciSellPeer::GIFTCARD, $giftcard['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($giftcard['max'])) {
                $this->addUsingAlias(QbcSciSellPeer::GIFTCARD, $giftcard['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciSellPeer::GIFTCARD, $giftcard, $comparison);
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
     * @return QbcSciSellQuery The current query, for fluid interface
     */
    public function filterByProcessed($processed = null, $comparison = null)
    {
        if (is_array($processed)) {
            $useMinMax = false;
            if (isset($processed['min'])) {
                $this->addUsingAlias(QbcSciSellPeer::PROCESSED, $processed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($processed['max'])) {
                $this->addUsingAlias(QbcSciSellPeer::PROCESSED, $processed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciSellPeer::PROCESSED, $processed, $comparison);
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
     * @return QbcSciSellQuery The current query, for fluid interface
     */
    public function filterByUnit($unit = null, $comparison = null)
    {
        if (is_array($unit)) {
            $useMinMax = false;
            if (isset($unit['min'])) {
                $this->addUsingAlias(QbcSciSellPeer::UNIT, $unit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unit['max'])) {
                $this->addUsingAlias(QbcSciSellPeer::UNIT, $unit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciSellPeer::UNIT, $unit, $comparison);
    }

    /**
     * Filter the query on the rewards_used column
     *
     * Example usage:
     * <code>
     * $query->filterByRewardsUsed('fooValue');   // WHERE rewards_used = 'fooValue'
     * $query->filterByRewardsUsed('%fooValue%'); // WHERE rewards_used LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rewardsUsed The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciSellQuery The current query, for fluid interface
     */
    public function filterByRewardsUsed($rewardsUsed = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rewardsUsed)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rewardsUsed)) {
                $rewardsUsed = str_replace('*', '%', $rewardsUsed);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciSellPeer::REWARDS_USED, $rewardsUsed, $comparison);
    }

    /**
     * Filter the query on the is_cancell column
     *
     * Example usage:
     * <code>
     * $query->filterByIsCancell(1234); // WHERE is_cancell = 1234
     * $query->filterByIsCancell(array(12, 34)); // WHERE is_cancell IN (12, 34)
     * $query->filterByIsCancell(array('min' => 12)); // WHERE is_cancell >= 12
     * $query->filterByIsCancell(array('max' => 12)); // WHERE is_cancell <= 12
     * </code>
     *
     * @param     mixed $isCancell The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciSellQuery The current query, for fluid interface
     */
    public function filterByIsCancell($isCancell = null, $comparison = null)
    {
        if (is_array($isCancell)) {
            $useMinMax = false;
            if (isset($isCancell['min'])) {
                $this->addUsingAlias(QbcSciSellPeer::IS_CANCELL, $isCancell['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isCancell['max'])) {
                $this->addUsingAlias(QbcSciSellPeer::IS_CANCELL, $isCancell['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciSellPeer::IS_CANCELL, $isCancell, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcSciSell $qbcSciSell Object to remove from the list of results
     *
     * @return QbcSciSellQuery The current query, for fluid interface
     */
    public function prune($qbcSciSell = null)
    {
        if ($qbcSciSell) {
            $this->addUsingAlias(QbcSciSellPeer::ID, $qbcSciSell->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
