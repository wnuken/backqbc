<?php


/**
 * Base class that represents a query for the 'qbc_sci_error' table.
 *
 *
 *
 * @method QbcSciErrorQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QbcSciErrorQuery orderByMethod($order = Criteria::ASC) Order by the method column
 * @method QbcSciErrorQuery orderByArgs($order = Criteria::ASC) Order by the args column
 * @method QbcSciErrorQuery orderByError($order = Criteria::ASC) Order by the error column
 *
 * @method QbcSciErrorQuery groupById() Group by the id column
 * @method QbcSciErrorQuery groupByMethod() Group by the method column
 * @method QbcSciErrorQuery groupByArgs() Group by the args column
 * @method QbcSciErrorQuery groupByError() Group by the error column
 *
 * @method QbcSciErrorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSciErrorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSciErrorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSciError findOne(PropelPDO $con = null) Return the first QbcSciError matching the query
 * @method QbcSciError findOneOrCreate(PropelPDO $con = null) Return the first QbcSciError matching the query, or a new QbcSciError object populated from the query conditions when no match is found
 *
 * @method QbcSciError findOneByMethod(string $method) Return the first QbcSciError filtered by the method column
 * @method QbcSciError findOneByArgs(string $args) Return the first QbcSciError filtered by the args column
 * @method QbcSciError findOneByError(string $error) Return the first QbcSciError filtered by the error column
 *
 * @method array findById(int $id) Return QbcSciError objects filtered by the id column
 * @method array findByMethod(string $method) Return QbcSciError objects filtered by the method column
 * @method array findByArgs(string $args) Return QbcSciError objects filtered by the args column
 * @method array findByError(string $error) Return QbcSciError objects filtered by the error column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciErrorQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcSciErrorQuery object.
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
            $modelName = 'QbcSciError';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcSciErrorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcSciErrorQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcSciErrorQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcSciErrorQuery) {
            return $criteria;
        }
        $query = new QbcSciErrorQuery(null, null, $modelAlias);

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
     * @return   QbcSciError|QbcSciError[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcSciErrorPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcSciErrorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcSciError A model object, or null if the key is not found
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
     * @return                 QbcSciError A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, method, args, error FROM qbc_sci_error WHERE id = :p0';
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
            $obj = new QbcSciError();
            $obj->hydrate($row);
            QbcSciErrorPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcSciError|QbcSciError[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcSciError[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcSciErrorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcSciErrorPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcSciErrorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcSciErrorPeer::ID, $keys, Criteria::IN);
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
     * @return QbcSciErrorQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcSciErrorPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcSciErrorPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciErrorPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the method column
     *
     * Example usage:
     * <code>
     * $query->filterByMethod('fooValue');   // WHERE method = 'fooValue'
     * $query->filterByMethod('%fooValue%'); // WHERE method LIKE '%fooValue%'
     * </code>
     *
     * @param     string $method The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciErrorQuery The current query, for fluid interface
     */
    public function filterByMethod($method = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($method)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $method)) {
                $method = str_replace('*', '%', $method);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciErrorPeer::METHOD, $method, $comparison);
    }

    /**
     * Filter the query on the args column
     *
     * Example usage:
     * <code>
     * $query->filterByArgs('fooValue');   // WHERE args = 'fooValue'
     * $query->filterByArgs('%fooValue%'); // WHERE args LIKE '%fooValue%'
     * </code>
     *
     * @param     string $args The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciErrorQuery The current query, for fluid interface
     */
    public function filterByArgs($args = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($args)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $args)) {
                $args = str_replace('*', '%', $args);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciErrorPeer::ARGS, $args, $comparison);
    }

    /**
     * Filter the query on the error column
     *
     * Example usage:
     * <code>
     * $query->filterByError('fooValue');   // WHERE error = 'fooValue'
     * $query->filterByError('%fooValue%'); // WHERE error LIKE '%fooValue%'
     * </code>
     *
     * @param     string $error The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciErrorQuery The current query, for fluid interface
     */
    public function filterByError($error = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($error)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $error)) {
                $error = str_replace('*', '%', $error);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciErrorPeer::ERROR, $error, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcSciError $qbcSciError Object to remove from the list of results
     *
     * @return QbcSciErrorQuery The current query, for fluid interface
     */
    public function prune($qbcSciError = null)
    {
        if ($qbcSciError) {
            $this->addUsingAlias(QbcSciErrorPeer::ID, $qbcSciError->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
