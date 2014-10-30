<?php


/**
 * Base class that represents a query for the 'qbc_rma' table.
 *
 *
 *
 * @method QbcRmaQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QbcRmaQuery orderByOrderId($order = Criteria::ASC) Order by the order_id column
 * @method QbcRmaQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method QbcRmaQuery orderByCredits($order = Criteria::ASC) Order by the credits column
 * @method QbcRmaQuery orderByCash($order = Criteria::ASC) Order by the cash column
 * @method QbcRmaQuery orderByTransactionids($order = Criteria::ASC) Order by the transactionIDs column
 *
 * @method QbcRmaQuery groupById() Group by the id column
 * @method QbcRmaQuery groupByOrderId() Group by the order_id column
 * @method QbcRmaQuery groupByItemId() Group by the item_id column
 * @method QbcRmaQuery groupByCredits() Group by the credits column
 * @method QbcRmaQuery groupByCash() Group by the cash column
 * @method QbcRmaQuery groupByTransactionids() Group by the transactionIDs column
 *
 * @method QbcRmaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcRmaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcRmaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcRma findOne(PropelPDO $con = null) Return the first QbcRma matching the query
 * @method QbcRma findOneOrCreate(PropelPDO $con = null) Return the first QbcRma matching the query, or a new QbcRma object populated from the query conditions when no match is found
 *
 * @method QbcRma findOneByOrderId(string $order_id) Return the first QbcRma filtered by the order_id column
 * @method QbcRma findOneByItemId(string $item_id) Return the first QbcRma filtered by the item_id column
 * @method QbcRma findOneByCredits(string $credits) Return the first QbcRma filtered by the credits column
 * @method QbcRma findOneByCash(string $cash) Return the first QbcRma filtered by the cash column
 * @method QbcRma findOneByTransactionids(int $transactionIDs) Return the first QbcRma filtered by the transactionIDs column
 *
 * @method array findById(int $id) Return QbcRma objects filtered by the id column
 * @method array findByOrderId(string $order_id) Return QbcRma objects filtered by the order_id column
 * @method array findByItemId(string $item_id) Return QbcRma objects filtered by the item_id column
 * @method array findByCredits(string $credits) Return QbcRma objects filtered by the credits column
 * @method array findByCash(string $cash) Return QbcRma objects filtered by the cash column
 * @method array findByTransactionids(int $transactionIDs) Return QbcRma objects filtered by the transactionIDs column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcRmaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcRmaQuery object.
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
            $modelName = 'QbcRma';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcRmaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcRmaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcRmaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcRmaQuery) {
            return $criteria;
        }
        $query = new QbcRmaQuery(null, null, $modelAlias);

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
     * @return   QbcRma|QbcRma[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcRmaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcRmaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcRma A model object, or null if the key is not found
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
     * @return                 QbcRma A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, order_id, item_id, credits, cash, transactionIDs FROM qbc_rma WHERE id = :p0';
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
            $obj = new QbcRma();
            $obj->hydrate($row);
            QbcRmaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcRma|QbcRma[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcRma[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcRmaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcRmaPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcRmaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcRmaPeer::ID, $keys, Criteria::IN);
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
     * @return QbcRmaQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcRmaPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcRmaPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcRmaPeer::ID, $id, $comparison);
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
     * @return QbcRmaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcRmaPeer::ORDER_ID, $orderId, $comparison);
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
     * @return QbcRmaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcRmaPeer::ITEM_ID, $itemId, $comparison);
    }

    /**
     * Filter the query on the credits column
     *
     * Example usage:
     * <code>
     * $query->filterByCredits('fooValue');   // WHERE credits = 'fooValue'
     * $query->filterByCredits('%fooValue%'); // WHERE credits LIKE '%fooValue%'
     * </code>
     *
     * @param     string $credits The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcRmaQuery The current query, for fluid interface
     */
    public function filterByCredits($credits = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($credits)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $credits)) {
                $credits = str_replace('*', '%', $credits);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcRmaPeer::CREDITS, $credits, $comparison);
    }

    /**
     * Filter the query on the cash column
     *
     * Example usage:
     * <code>
     * $query->filterByCash('fooValue');   // WHERE cash = 'fooValue'
     * $query->filterByCash('%fooValue%'); // WHERE cash LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cash The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcRmaQuery The current query, for fluid interface
     */
    public function filterByCash($cash = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cash)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cash)) {
                $cash = str_replace('*', '%', $cash);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcRmaPeer::CASH, $cash, $comparison);
    }

    /**
     * Filter the query on the transactionIDs column
     *
     * Example usage:
     * <code>
     * $query->filterByTransactionids(1234); // WHERE transactionIDs = 1234
     * $query->filterByTransactionids(array(12, 34)); // WHERE transactionIDs IN (12, 34)
     * $query->filterByTransactionids(array('min' => 12)); // WHERE transactionIDs >= 12
     * $query->filterByTransactionids(array('max' => 12)); // WHERE transactionIDs <= 12
     * </code>
     *
     * @param     mixed $transactionids The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcRmaQuery The current query, for fluid interface
     */
    public function filterByTransactionids($transactionids = null, $comparison = null)
    {
        if (is_array($transactionids)) {
            $useMinMax = false;
            if (isset($transactionids['min'])) {
                $this->addUsingAlias(QbcRmaPeer::TRANSACTIONIDS, $transactionids['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($transactionids['max'])) {
                $this->addUsingAlias(QbcRmaPeer::TRANSACTIONIDS, $transactionids['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcRmaPeer::TRANSACTIONIDS, $transactionids, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcRma $qbcRma Object to remove from the list of results
     *
     * @return QbcRmaQuery The current query, for fluid interface
     */
    public function prune($qbcRma = null)
    {
        if ($qbcRma) {
            $this->addUsingAlias(QbcRmaPeer::ID, $qbcRma->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
