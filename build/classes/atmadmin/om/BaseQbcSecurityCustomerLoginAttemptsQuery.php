<?php


/**
 * Base class that represents a query for the 'qbc_security_customer_login_attempts' table.
 *
 *
 *
 * @method QbcSecurityCustomerLoginAttemptsQuery orderByUsername($order = Criteria::ASC) Order by the username column
 * @method QbcSecurityCustomerLoginAttemptsQuery orderByAttempts($order = Criteria::ASC) Order by the attempts column
 *
 * @method QbcSecurityCustomerLoginAttemptsQuery groupByUsername() Group by the username column
 * @method QbcSecurityCustomerLoginAttemptsQuery groupByAttempts() Group by the attempts column
 *
 * @method QbcSecurityCustomerLoginAttemptsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSecurityCustomerLoginAttemptsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSecurityCustomerLoginAttemptsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSecurityCustomerLoginAttempts findOne(PropelPDO $con = null) Return the first QbcSecurityCustomerLoginAttempts matching the query
 * @method QbcSecurityCustomerLoginAttempts findOneOrCreate(PropelPDO $con = null) Return the first QbcSecurityCustomerLoginAttempts matching the query, or a new QbcSecurityCustomerLoginAttempts object populated from the query conditions when no match is found
 *
 * @method QbcSecurityCustomerLoginAttempts findOneByAttempts(int $attempts) Return the first QbcSecurityCustomerLoginAttempts filtered by the attempts column
 *
 * @method array findByUsername(string $username) Return QbcSecurityCustomerLoginAttempts objects filtered by the username column
 * @method array findByAttempts(int $attempts) Return QbcSecurityCustomerLoginAttempts objects filtered by the attempts column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSecurityCustomerLoginAttemptsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcSecurityCustomerLoginAttemptsQuery object.
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
            $modelName = 'QbcSecurityCustomerLoginAttempts';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcSecurityCustomerLoginAttemptsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcSecurityCustomerLoginAttemptsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcSecurityCustomerLoginAttemptsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcSecurityCustomerLoginAttemptsQuery) {
            return $criteria;
        }
        $query = new QbcSecurityCustomerLoginAttemptsQuery(null, null, $modelAlias);

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
     * @return   QbcSecurityCustomerLoginAttempts|QbcSecurityCustomerLoginAttempts[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcSecurityCustomerLoginAttemptsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcSecurityCustomerLoginAttemptsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcSecurityCustomerLoginAttempts A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByUsername($key, $con = null)
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
     * @return                 QbcSecurityCustomerLoginAttempts A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT username, attempts FROM qbc_security_customer_login_attempts WHERE username = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new QbcSecurityCustomerLoginAttempts();
            $obj->hydrate($row);
            QbcSecurityCustomerLoginAttemptsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcSecurityCustomerLoginAttempts|QbcSecurityCustomerLoginAttempts[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcSecurityCustomerLoginAttempts[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcSecurityCustomerLoginAttemptsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcSecurityCustomerLoginAttemptsPeer::USERNAME, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcSecurityCustomerLoginAttemptsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcSecurityCustomerLoginAttemptsPeer::USERNAME, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the username column
     *
     * Example usage:
     * <code>
     * $query->filterByUsername('fooValue');   // WHERE username = 'fooValue'
     * $query->filterByUsername('%fooValue%'); // WHERE username LIKE '%fooValue%'
     * </code>
     *
     * @param     string $username The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSecurityCustomerLoginAttemptsQuery The current query, for fluid interface
     */
    public function filterByUsername($username = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($username)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $username)) {
                $username = str_replace('*', '%', $username);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSecurityCustomerLoginAttemptsPeer::USERNAME, $username, $comparison);
    }

    /**
     * Filter the query on the attempts column
     *
     * Example usage:
     * <code>
     * $query->filterByAttempts(1234); // WHERE attempts = 1234
     * $query->filterByAttempts(array(12, 34)); // WHERE attempts IN (12, 34)
     * $query->filterByAttempts(array('min' => 12)); // WHERE attempts >= 12
     * $query->filterByAttempts(array('max' => 12)); // WHERE attempts <= 12
     * </code>
     *
     * @param     mixed $attempts The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSecurityCustomerLoginAttemptsQuery The current query, for fluid interface
     */
    public function filterByAttempts($attempts = null, $comparison = null)
    {
        if (is_array($attempts)) {
            $useMinMax = false;
            if (isset($attempts['min'])) {
                $this->addUsingAlias(QbcSecurityCustomerLoginAttemptsPeer::ATTEMPTS, $attempts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($attempts['max'])) {
                $this->addUsingAlias(QbcSecurityCustomerLoginAttemptsPeer::ATTEMPTS, $attempts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSecurityCustomerLoginAttemptsPeer::ATTEMPTS, $attempts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcSecurityCustomerLoginAttempts $qbcSecurityCustomerLoginAttempts Object to remove from the list of results
     *
     * @return QbcSecurityCustomerLoginAttemptsQuery The current query, for fluid interface
     */
    public function prune($qbcSecurityCustomerLoginAttempts = null)
    {
        if ($qbcSecurityCustomerLoginAttempts) {
            $this->addUsingAlias(QbcSecurityCustomerLoginAttemptsPeer::USERNAME, $qbcSecurityCustomerLoginAttempts->getUsername(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
