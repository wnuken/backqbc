<?php


/**
 * Base class that represents a query for the 'qbc_sci_credit_construct' table.
 *
 *
 *
 * @method QbcSciCreditConstructQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QbcSciCreditConstructQuery orderByPetitionId($order = Criteria::ASC) Order by the petition_id column
 * @method QbcSciCreditConstructQuery orderByRewardType($order = Criteria::ASC) Order by the reward_type column
 * @method QbcSciCreditConstructQuery orderByDelta($order = Criteria::ASC) Order by the delta column
 * @method QbcSciCreditConstructQuery orderByRewardId($order = Criteria::ASC) Order by the reward_id column
 * @method QbcSciCreditConstructQuery orderByRewardHistoryId($order = Criteria::ASC) Order by the reward_history_id column
 *
 * @method QbcSciCreditConstructQuery groupById() Group by the id column
 * @method QbcSciCreditConstructQuery groupByPetitionId() Group by the petition_id column
 * @method QbcSciCreditConstructQuery groupByRewardType() Group by the reward_type column
 * @method QbcSciCreditConstructQuery groupByDelta() Group by the delta column
 * @method QbcSciCreditConstructQuery groupByRewardId() Group by the reward_id column
 * @method QbcSciCreditConstructQuery groupByRewardHistoryId() Group by the reward_history_id column
 *
 * @method QbcSciCreditConstructQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSciCreditConstructQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSciCreditConstructQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSciCreditConstruct findOne(PropelPDO $con = null) Return the first QbcSciCreditConstruct matching the query
 * @method QbcSciCreditConstruct findOneOrCreate(PropelPDO $con = null) Return the first QbcSciCreditConstruct matching the query, or a new QbcSciCreditConstruct object populated from the query conditions when no match is found
 *
 * @method QbcSciCreditConstruct findOneByPetitionId(string $petition_id) Return the first QbcSciCreditConstruct filtered by the petition_id column
 * @method QbcSciCreditConstruct findOneByRewardType(string $reward_type) Return the first QbcSciCreditConstruct filtered by the reward_type column
 * @method QbcSciCreditConstruct findOneByDelta(string $delta) Return the first QbcSciCreditConstruct filtered by the delta column
 * @method QbcSciCreditConstruct findOneByRewardId(int $reward_id) Return the first QbcSciCreditConstruct filtered by the reward_id column
 * @method QbcSciCreditConstruct findOneByRewardHistoryId(int $reward_history_id) Return the first QbcSciCreditConstruct filtered by the reward_history_id column
 *
 * @method array findById(int $id) Return QbcSciCreditConstruct objects filtered by the id column
 * @method array findByPetitionId(string $petition_id) Return QbcSciCreditConstruct objects filtered by the petition_id column
 * @method array findByRewardType(string $reward_type) Return QbcSciCreditConstruct objects filtered by the reward_type column
 * @method array findByDelta(string $delta) Return QbcSciCreditConstruct objects filtered by the delta column
 * @method array findByRewardId(int $reward_id) Return QbcSciCreditConstruct objects filtered by the reward_id column
 * @method array findByRewardHistoryId(int $reward_history_id) Return QbcSciCreditConstruct objects filtered by the reward_history_id column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciCreditConstructQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcSciCreditConstructQuery object.
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
            $modelName = 'QbcSciCreditConstruct';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcSciCreditConstructQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcSciCreditConstructQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcSciCreditConstructQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcSciCreditConstructQuery) {
            return $criteria;
        }
        $query = new QbcSciCreditConstructQuery(null, null, $modelAlias);

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
     * @return   QbcSciCreditConstruct|QbcSciCreditConstruct[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcSciCreditConstructPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcSciCreditConstructPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcSciCreditConstruct A model object, or null if the key is not found
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
     * @return                 QbcSciCreditConstruct A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, petition_id, reward_type, delta, reward_id, reward_history_id FROM qbc_sci_credit_construct WHERE id = :p0';
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
            $obj = new QbcSciCreditConstruct();
            $obj->hydrate($row);
            QbcSciCreditConstructPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcSciCreditConstruct|QbcSciCreditConstruct[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcSciCreditConstruct[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcSciCreditConstructQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcSciCreditConstructPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcSciCreditConstructQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcSciCreditConstructPeer::ID, $keys, Criteria::IN);
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
     * @return QbcSciCreditConstructQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcSciCreditConstructPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcSciCreditConstructPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciCreditConstructPeer::ID, $id, $comparison);
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
     * @return QbcSciCreditConstructQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciCreditConstructPeer::PETITION_ID, $petitionId, $comparison);
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
     * @return QbcSciCreditConstructQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciCreditConstructPeer::REWARD_TYPE, $rewardType, $comparison);
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
     * @return QbcSciCreditConstructQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciCreditConstructPeer::DELTA, $delta, $comparison);
    }

    /**
     * Filter the query on the reward_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRewardId(1234); // WHERE reward_id = 1234
     * $query->filterByRewardId(array(12, 34)); // WHERE reward_id IN (12, 34)
     * $query->filterByRewardId(array('min' => 12)); // WHERE reward_id >= 12
     * $query->filterByRewardId(array('max' => 12)); // WHERE reward_id <= 12
     * </code>
     *
     * @param     mixed $rewardId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciCreditConstructQuery The current query, for fluid interface
     */
    public function filterByRewardId($rewardId = null, $comparison = null)
    {
        if (is_array($rewardId)) {
            $useMinMax = false;
            if (isset($rewardId['min'])) {
                $this->addUsingAlias(QbcSciCreditConstructPeer::REWARD_ID, $rewardId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rewardId['max'])) {
                $this->addUsingAlias(QbcSciCreditConstructPeer::REWARD_ID, $rewardId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciCreditConstructPeer::REWARD_ID, $rewardId, $comparison);
    }

    /**
     * Filter the query on the reward_history_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRewardHistoryId(1234); // WHERE reward_history_id = 1234
     * $query->filterByRewardHistoryId(array(12, 34)); // WHERE reward_history_id IN (12, 34)
     * $query->filterByRewardHistoryId(array('min' => 12)); // WHERE reward_history_id >= 12
     * $query->filterByRewardHistoryId(array('max' => 12)); // WHERE reward_history_id <= 12
     * </code>
     *
     * @param     mixed $rewardHistoryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciCreditConstructQuery The current query, for fluid interface
     */
    public function filterByRewardHistoryId($rewardHistoryId = null, $comparison = null)
    {
        if (is_array($rewardHistoryId)) {
            $useMinMax = false;
            if (isset($rewardHistoryId['min'])) {
                $this->addUsingAlias(QbcSciCreditConstructPeer::REWARD_HISTORY_ID, $rewardHistoryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rewardHistoryId['max'])) {
                $this->addUsingAlias(QbcSciCreditConstructPeer::REWARD_HISTORY_ID, $rewardHistoryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciCreditConstructPeer::REWARD_HISTORY_ID, $rewardHistoryId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcSciCreditConstruct $qbcSciCreditConstruct Object to remove from the list of results
     *
     * @return QbcSciCreditConstructQuery The current query, for fluid interface
     */
    public function prune($qbcSciCreditConstruct = null)
    {
        if ($qbcSciCreditConstruct) {
            $this->addUsingAlias(QbcSciCreditConstructPeer::ID, $qbcSciCreditConstruct->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
