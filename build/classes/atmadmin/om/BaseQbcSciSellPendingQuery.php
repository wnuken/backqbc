<?php


/**
 * Base class that represents a query for the 'qbc_sci_sell_pending' table.
 *
 *
 *
 * @method QbcSciSellPendingQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QbcSciSellPendingQuery orderByItem($order = Criteria::ASC) Order by the item column
 * @method QbcSciSellPendingQuery orderByUnit($order = Criteria::ASC) Order by the unit column
 * @method QbcSciSellPendingQuery orderByStatus($order = Criteria::ASC) Order by the status column
 *
 * @method QbcSciSellPendingQuery groupById() Group by the id column
 * @method QbcSciSellPendingQuery groupByItem() Group by the item column
 * @method QbcSciSellPendingQuery groupByUnit() Group by the unit column
 * @method QbcSciSellPendingQuery groupByStatus() Group by the status column
 *
 * @method QbcSciSellPendingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSciSellPendingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSciSellPendingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSciSellPending findOne(PropelPDO $con = null) Return the first QbcSciSellPending matching the query
 * @method QbcSciSellPending findOneOrCreate(PropelPDO $con = null) Return the first QbcSciSellPending matching the query, or a new QbcSciSellPending object populated from the query conditions when no match is found
 *
 * @method QbcSciSellPending findOneByItem(string $item) Return the first QbcSciSellPending filtered by the item column
 * @method QbcSciSellPending findOneByUnit(int $unit) Return the first QbcSciSellPending filtered by the unit column
 * @method QbcSciSellPending findOneByStatus(string $status) Return the first QbcSciSellPending filtered by the status column
 *
 * @method array findById(int $id) Return QbcSciSellPending objects filtered by the id column
 * @method array findByItem(string $item) Return QbcSciSellPending objects filtered by the item column
 * @method array findByUnit(int $unit) Return QbcSciSellPending objects filtered by the unit column
 * @method array findByStatus(string $status) Return QbcSciSellPending objects filtered by the status column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciSellPendingQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcSciSellPendingQuery object.
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
            $modelName = 'QbcSciSellPending';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcSciSellPendingQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcSciSellPendingQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcSciSellPendingQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcSciSellPendingQuery) {
            return $criteria;
        }
        $query = new QbcSciSellPendingQuery(null, null, $modelAlias);

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
     * @return   QbcSciSellPending|QbcSciSellPending[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcSciSellPendingPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcSciSellPendingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcSciSellPending A model object, or null if the key is not found
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
     * @return                 QbcSciSellPending A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, item, unit, status FROM qbc_sci_sell_pending WHERE id = :p0';
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
            $obj = new QbcSciSellPending();
            $obj->hydrate($row);
            QbcSciSellPendingPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcSciSellPending|QbcSciSellPending[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcSciSellPending[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcSciSellPendingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcSciSellPendingPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcSciSellPendingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcSciSellPendingPeer::ID, $keys, Criteria::IN);
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
     * @return QbcSciSellPendingQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcSciSellPendingPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcSciSellPendingPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciSellPendingPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the item column
     *
     * Example usage:
     * <code>
     * $query->filterByItem('fooValue');   // WHERE item = 'fooValue'
     * $query->filterByItem('%fooValue%'); // WHERE item LIKE '%fooValue%'
     * </code>
     *
     * @param     string $item The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciSellPendingQuery The current query, for fluid interface
     */
    public function filterByItem($item = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($item)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $item)) {
                $item = str_replace('*', '%', $item);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciSellPendingPeer::ITEM, $item, $comparison);
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
     * @return QbcSciSellPendingQuery The current query, for fluid interface
     */
    public function filterByUnit($unit = null, $comparison = null)
    {
        if (is_array($unit)) {
            $useMinMax = false;
            if (isset($unit['min'])) {
                $this->addUsingAlias(QbcSciSellPendingPeer::UNIT, $unit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unit['max'])) {
                $this->addUsingAlias(QbcSciSellPendingPeer::UNIT, $unit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciSellPendingPeer::UNIT, $unit, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE status = 'fooValue'
     * $query->filterByStatus('%fooValue%'); // WHERE status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciSellPendingQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $status)) {
                $status = str_replace('*', '%', $status);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciSellPendingPeer::STATUS, $status, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcSciSellPending $qbcSciSellPending Object to remove from the list of results
     *
     * @return QbcSciSellPendingQuery The current query, for fluid interface
     */
    public function prune($qbcSciSellPending = null)
    {
        if ($qbcSciSellPending) {
            $this->addUsingAlias(QbcSciSellPendingPeer::ID, $qbcSciSellPending->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
