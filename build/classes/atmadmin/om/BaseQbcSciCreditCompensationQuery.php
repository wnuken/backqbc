<?php


/**
 * Base class that represents a query for the 'qbc_sci_credit_compensation' table.
 *
 *
 *
 * @method QbcSciCreditCompensationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QbcSciCreditCompensationQuery orderByPetitionId($order = Criteria::ASC) Order by the petition_id column
 * @method QbcSciCreditCompensationQuery orderByRewardType($order = Criteria::ASC) Order by the reward_type column
 * @method QbcSciCreditCompensationQuery orderByDelta($order = Criteria::ASC) Order by the delta column
 * @method QbcSciCreditCompensationQuery orderByRewardId($order = Criteria::ASC) Order by the reward_id column
 *
 * @method QbcSciCreditCompensationQuery groupById() Group by the id column
 * @method QbcSciCreditCompensationQuery groupByPetitionId() Group by the petition_id column
 * @method QbcSciCreditCompensationQuery groupByRewardType() Group by the reward_type column
 * @method QbcSciCreditCompensationQuery groupByDelta() Group by the delta column
 * @method QbcSciCreditCompensationQuery groupByRewardId() Group by the reward_id column
 *
 * @method QbcSciCreditCompensationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSciCreditCompensationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSciCreditCompensationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSciCreditCompensation findOne(PropelPDO $con = null) Return the first QbcSciCreditCompensation matching the query
 * @method QbcSciCreditCompensation findOneOrCreate(PropelPDO $con = null) Return the first QbcSciCreditCompensation matching the query, or a new QbcSciCreditCompensation object populated from the query conditions when no match is found
 *
 * @method QbcSciCreditCompensation findOneByPetitionId(string $petition_id) Return the first QbcSciCreditCompensation filtered by the petition_id column
 * @method QbcSciCreditCompensation findOneByRewardType(string $reward_type) Return the first QbcSciCreditCompensation filtered by the reward_type column
 * @method QbcSciCreditCompensation findOneByDelta(string $delta) Return the first QbcSciCreditCompensation filtered by the delta column
 * @method QbcSciCreditCompensation findOneByRewardId(string $reward_id) Return the first QbcSciCreditCompensation filtered by the reward_id column
 *
 * @method array findById(int $id) Return QbcSciCreditCompensation objects filtered by the id column
 * @method array findByPetitionId(string $petition_id) Return QbcSciCreditCompensation objects filtered by the petition_id column
 * @method array findByRewardType(string $reward_type) Return QbcSciCreditCompensation objects filtered by the reward_type column
 * @method array findByDelta(string $delta) Return QbcSciCreditCompensation objects filtered by the delta column
 * @method array findByRewardId(string $reward_id) Return QbcSciCreditCompensation objects filtered by the reward_id column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciCreditCompensationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcSciCreditCompensationQuery object.
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
            $modelName = 'QbcSciCreditCompensation';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcSciCreditCompensationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcSciCreditCompensationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcSciCreditCompensationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcSciCreditCompensationQuery) {
            return $criteria;
        }
        $query = new QbcSciCreditCompensationQuery(null, null, $modelAlias);

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
     * @return   QbcSciCreditCompensation|QbcSciCreditCompensation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcSciCreditCompensationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcSciCreditCompensationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcSciCreditCompensation A model object, or null if the key is not found
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
     * @return                 QbcSciCreditCompensation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, petition_id, reward_type, delta, reward_id FROM qbc_sci_credit_compensation WHERE id = :p0';
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
            $obj = new QbcSciCreditCompensation();
            $obj->hydrate($row);
            QbcSciCreditCompensationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcSciCreditCompensation|QbcSciCreditCompensation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcSciCreditCompensation[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcSciCreditCompensationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcSciCreditCompensationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcSciCreditCompensationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcSciCreditCompensationPeer::ID, $keys, Criteria::IN);
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
     * @return QbcSciCreditCompensationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcSciCreditCompensationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcSciCreditCompensationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciCreditCompensationPeer::ID, $id, $comparison);
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
     * @return QbcSciCreditCompensationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciCreditCompensationPeer::PETITION_ID, $petitionId, $comparison);
    }

    /**
     * Filter the query on the reward_type column
     *
     * Example usage:
     * <code>
     * $query->filterByRewardType('fooValue');   // WHERE reward_type = 'fooValue'
     * $query->filterByRewardType('%fooValue%'); // WHERE reward_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rewardType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciCreditCompensationQuery The current query, for fluid interface
     */
    public function filterByRewardType($rewardType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rewardType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rewardType)) {
                $rewardType = str_replace('*', '%', $rewardType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciCreditCompensationPeer::REWARD_TYPE, $rewardType, $comparison);
    }

    /**
     * Filter the query on the delta column
     *
     * Example usage:
     * <code>
     * $query->filterByDelta('fooValue');   // WHERE delta = 'fooValue'
     * $query->filterByDelta('%fooValue%'); // WHERE delta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $delta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciCreditCompensationQuery The current query, for fluid interface
     */
    public function filterByDelta($delta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($delta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $delta)) {
                $delta = str_replace('*', '%', $delta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciCreditCompensationPeer::DELTA, $delta, $comparison);
    }

    /**
     * Filter the query on the reward_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRewardId('fooValue');   // WHERE reward_id = 'fooValue'
     * $query->filterByRewardId('%fooValue%'); // WHERE reward_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rewardId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciCreditCompensationQuery The current query, for fluid interface
     */
    public function filterByRewardId($rewardId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rewardId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rewardId)) {
                $rewardId = str_replace('*', '%', $rewardId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciCreditCompensationPeer::REWARD_ID, $rewardId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcSciCreditCompensation $qbcSciCreditCompensation Object to remove from the list of results
     *
     * @return QbcSciCreditCompensationQuery The current query, for fluid interface
     */
    public function prune($qbcSciCreditCompensation = null)
    {
        if ($qbcSciCreditCompensation) {
            $this->addUsingAlias(QbcSciCreditCompensationPeer::ID, $qbcSciCreditCompensation->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
