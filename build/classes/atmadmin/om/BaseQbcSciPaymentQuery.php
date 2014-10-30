<?php


/**
 * Base class that represents a query for the 'qbc_sci_payment' table.
 *
 *
 *
 * @method QbcSciPaymentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QbcSciPaymentQuery orderByPetitionId($order = Criteria::ASC) Order by the petition_id column
 * @method QbcSciPaymentQuery orderByOrderId($order = Criteria::ASC) Order by the order_id column
 * @method QbcSciPaymentQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method QbcSciPaymentQuery orderByExtraData($order = Criteria::ASC) Order by the extra_data column
 * @method QbcSciPaymentQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method QbcSciPaymentQuery orderByUnit($order = Criteria::ASC) Order by the unit column
 *
 * @method QbcSciPaymentQuery groupById() Group by the id column
 * @method QbcSciPaymentQuery groupByPetitionId() Group by the petition_id column
 * @method QbcSciPaymentQuery groupByOrderId() Group by the order_id column
 * @method QbcSciPaymentQuery groupByItemId() Group by the item_id column
 * @method QbcSciPaymentQuery groupByExtraData() Group by the extra_data column
 * @method QbcSciPaymentQuery groupByCreatedAt() Group by the created_at column
 * @method QbcSciPaymentQuery groupByUnit() Group by the unit column
 *
 * @method QbcSciPaymentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSciPaymentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSciPaymentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSciPayment findOne(PropelPDO $con = null) Return the first QbcSciPayment matching the query
 * @method QbcSciPayment findOneOrCreate(PropelPDO $con = null) Return the first QbcSciPayment matching the query, or a new QbcSciPayment object populated from the query conditions when no match is found
 *
 * @method QbcSciPayment findOneByPetitionId(string $petition_id) Return the first QbcSciPayment filtered by the petition_id column
 * @method QbcSciPayment findOneByOrderId(string $order_id) Return the first QbcSciPayment filtered by the order_id column
 * @method QbcSciPayment findOneByItemId(string $item_id) Return the first QbcSciPayment filtered by the item_id column
 * @method QbcSciPayment findOneByExtraData(string $extra_data) Return the first QbcSciPayment filtered by the extra_data column
 * @method QbcSciPayment findOneByCreatedAt(string $created_at) Return the first QbcSciPayment filtered by the created_at column
 * @method QbcSciPayment findOneByUnit(int $unit) Return the first QbcSciPayment filtered by the unit column
 *
 * @method array findById(int $id) Return QbcSciPayment objects filtered by the id column
 * @method array findByPetitionId(string $petition_id) Return QbcSciPayment objects filtered by the petition_id column
 * @method array findByOrderId(string $order_id) Return QbcSciPayment objects filtered by the order_id column
 * @method array findByItemId(string $item_id) Return QbcSciPayment objects filtered by the item_id column
 * @method array findByExtraData(string $extra_data) Return QbcSciPayment objects filtered by the extra_data column
 * @method array findByCreatedAt(string $created_at) Return QbcSciPayment objects filtered by the created_at column
 * @method array findByUnit(int $unit) Return QbcSciPayment objects filtered by the unit column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciPaymentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcSciPaymentQuery object.
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
            $modelName = 'QbcSciPayment';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcSciPaymentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcSciPaymentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcSciPaymentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcSciPaymentQuery) {
            return $criteria;
        }
        $query = new QbcSciPaymentQuery(null, null, $modelAlias);

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
     * @return   QbcSciPayment|QbcSciPayment[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcSciPaymentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcSciPaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcSciPayment A model object, or null if the key is not found
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
     * @return                 QbcSciPayment A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, petition_id, order_id, item_id, extra_data, created_at, unit FROM qbc_sci_payment WHERE id = :p0';
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
            $obj = new QbcSciPayment();
            $obj->hydrate($row);
            QbcSciPaymentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcSciPayment|QbcSciPayment[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcSciPayment[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcSciPaymentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcSciPaymentPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcSciPaymentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcSciPaymentPeer::ID, $keys, Criteria::IN);
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
     * @return QbcSciPaymentQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcSciPaymentPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcSciPaymentPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentPeer::ID, $id, $comparison);
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
     * @return QbcSciPaymentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciPaymentPeer::PETITION_ID, $petitionId, $comparison);
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
     * @return QbcSciPaymentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciPaymentPeer::ORDER_ID, $orderId, $comparison);
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
     * @return QbcSciPaymentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciPaymentPeer::ITEM_ID, $itemId, $comparison);
    }

    /**
     * Filter the query on the extra_data column
     *
     * Example usage:
     * <code>
     * $query->filterByExtraData('fooValue');   // WHERE extra_data = 'fooValue'
     * $query->filterByExtraData('%fooValue%'); // WHERE extra_data LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extraData The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciPaymentQuery The current query, for fluid interface
     */
    public function filterByExtraData($extraData = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extraData)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $extraData)) {
                $extraData = str_replace('*', '%', $extraData);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentPeer::EXTRA_DATA, $extraData, $comparison);
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
     * @return QbcSciPaymentQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(QbcSciPaymentPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(QbcSciPaymentPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return QbcSciPaymentQuery The current query, for fluid interface
     */
    public function filterByUnit($unit = null, $comparison = null)
    {
        if (is_array($unit)) {
            $useMinMax = false;
            if (isset($unit['min'])) {
                $this->addUsingAlias(QbcSciPaymentPeer::UNIT, $unit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unit['max'])) {
                $this->addUsingAlias(QbcSciPaymentPeer::UNIT, $unit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentPeer::UNIT, $unit, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcSciPayment $qbcSciPayment Object to remove from the list of results
     *
     * @return QbcSciPaymentQuery The current query, for fluid interface
     */
    public function prune($qbcSciPayment = null)
    {
        if ($qbcSciPayment) {
            $this->addUsingAlias(QbcSciPaymentPeer::ID, $qbcSciPayment->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
