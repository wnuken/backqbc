<?php


/**
 * Base class that represents a query for the 'qbc_sales_pfr' table.
 *
 *
 *
 * @method QbcSalesPfrQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QbcSalesPfrQuery orderByOrderId($order = Criteria::ASC) Order by the order_id column
 * @method QbcSalesPfrQuery orderBySate($order = Criteria::ASC) Order by the sate column
 *
 * @method QbcSalesPfrQuery groupById() Group by the id column
 * @method QbcSalesPfrQuery groupByOrderId() Group by the order_id column
 * @method QbcSalesPfrQuery groupBySate() Group by the sate column
 *
 * @method QbcSalesPfrQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSalesPfrQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSalesPfrQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSalesPfr findOne(PropelPDO $con = null) Return the first QbcSalesPfr matching the query
 * @method QbcSalesPfr findOneOrCreate(PropelPDO $con = null) Return the first QbcSalesPfr matching the query, or a new QbcSalesPfr object populated from the query conditions when no match is found
 *
 * @method QbcSalesPfr findOneByOrderId(int $order_id) Return the first QbcSalesPfr filtered by the order_id column
 * @method QbcSalesPfr findOneBySate(string $sate) Return the first QbcSalesPfr filtered by the sate column
 *
 * @method array findById(int $id) Return QbcSalesPfr objects filtered by the id column
 * @method array findByOrderId(int $order_id) Return QbcSalesPfr objects filtered by the order_id column
 * @method array findBySate(string $sate) Return QbcSalesPfr objects filtered by the sate column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSalesPfrQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcSalesPfrQuery object.
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
            $modelName = 'QbcSalesPfr';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcSalesPfrQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcSalesPfrQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcSalesPfrQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcSalesPfrQuery) {
            return $criteria;
        }
        $query = new QbcSalesPfrQuery(null, null, $modelAlias);

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
     * @return   QbcSalesPfr|QbcSalesPfr[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcSalesPfrPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcSalesPfrPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcSalesPfr A model object, or null if the key is not found
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
     * @return                 QbcSalesPfr A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, order_id, sate FROM qbc_sales_pfr WHERE id = :p0';
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
            $obj = new QbcSalesPfr();
            $obj->hydrate($row);
            QbcSalesPfrPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcSalesPfr|QbcSalesPfr[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcSalesPfr[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcSalesPfrQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcSalesPfrPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcSalesPfrQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcSalesPfrPeer::ID, $keys, Criteria::IN);
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
     * @return QbcSalesPfrQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcSalesPfrPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcSalesPfrPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSalesPfrPeer::ID, $id, $comparison);
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
     * @return QbcSalesPfrQuery The current query, for fluid interface
     */
    public function filterByOrderId($orderId = null, $comparison = null)
    {
        if (is_array($orderId)) {
            $useMinMax = false;
            if (isset($orderId['min'])) {
                $this->addUsingAlias(QbcSalesPfrPeer::ORDER_ID, $orderId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($orderId['max'])) {
                $this->addUsingAlias(QbcSalesPfrPeer::ORDER_ID, $orderId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSalesPfrPeer::ORDER_ID, $orderId, $comparison);
    }

    /**
     * Filter the query on the sate column
     *
     * Example usage:
     * <code>
     * $query->filterBySate('fooValue');   // WHERE sate = 'fooValue'
     * $query->filterBySate('%fooValue%'); // WHERE sate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSalesPfrQuery The current query, for fluid interface
     */
    public function filterBySate($sate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sate)) {
                $sate = str_replace('*', '%', $sate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSalesPfrPeer::SATE, $sate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcSalesPfr $qbcSalesPfr Object to remove from the list of results
     *
     * @return QbcSalesPfrQuery The current query, for fluid interface
     */
    public function prune($qbcSalesPfr = null)
    {
        if ($qbcSalesPfr) {
            $this->addUsingAlias(QbcSalesPfrPeer::ID, $qbcSalesPfr->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
