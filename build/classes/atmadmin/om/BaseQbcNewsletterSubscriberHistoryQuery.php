<?php


/**
 * Base class that represents a query for the 'qbc_newsletter_subscriber_history' table.
 *
 *
 *
 * @method QbcNewsletterSubscriberHistoryQuery orderByHistoryId($order = Criteria::ASC) Order by the history_id column
 * @method QbcNewsletterSubscriberHistoryQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method QbcNewsletterSubscriberHistoryQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method QbcNewsletterSubscriberHistoryQuery orderByUnsubscriptionDate($order = Criteria::ASC) Order by the unsubscription_date column
 * @method QbcNewsletterSubscriberHistoryQuery orderBySubscriptionDate($order = Criteria::ASC) Order by the subscription_date column
 * @method QbcNewsletterSubscriberHistoryQuery orderByListId($order = Criteria::ASC) Order by the list_id column
 * @method QbcNewsletterSubscriberHistoryQuery orderByListName($order = Criteria::ASC) Order by the list_name column
 * @method QbcNewsletterSubscriberHistoryQuery orderByActualized($order = Criteria::ASC) Order by the actualized column
 *
 * @method QbcNewsletterSubscriberHistoryQuery groupByHistoryId() Group by the history_id column
 * @method QbcNewsletterSubscriberHistoryQuery groupByUserId() Group by the user_id column
 * @method QbcNewsletterSubscriberHistoryQuery groupByState() Group by the state column
 * @method QbcNewsletterSubscriberHistoryQuery groupByUnsubscriptionDate() Group by the unsubscription_date column
 * @method QbcNewsletterSubscriberHistoryQuery groupBySubscriptionDate() Group by the subscription_date column
 * @method QbcNewsletterSubscriberHistoryQuery groupByListId() Group by the list_id column
 * @method QbcNewsletterSubscriberHistoryQuery groupByListName() Group by the list_name column
 * @method QbcNewsletterSubscriberHistoryQuery groupByActualized() Group by the actualized column
 *
 * @method QbcNewsletterSubscriberHistoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcNewsletterSubscriberHistoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcNewsletterSubscriberHistoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcNewsletterSubscriberHistory findOne(PropelPDO $con = null) Return the first QbcNewsletterSubscriberHistory matching the query
 * @method QbcNewsletterSubscriberHistory findOneOrCreate(PropelPDO $con = null) Return the first QbcNewsletterSubscriberHistory matching the query, or a new QbcNewsletterSubscriberHistory object populated from the query conditions when no match is found
 *
 * @method QbcNewsletterSubscriberHistory findOneByUserId(int $user_id) Return the first QbcNewsletterSubscriberHistory filtered by the user_id column
 * @method QbcNewsletterSubscriberHistory findOneByState(string $state) Return the first QbcNewsletterSubscriberHistory filtered by the state column
 * @method QbcNewsletterSubscriberHistory findOneByUnsubscriptionDate(string $unsubscription_date) Return the first QbcNewsletterSubscriberHistory filtered by the unsubscription_date column
 * @method QbcNewsletterSubscriberHistory findOneBySubscriptionDate(string $subscription_date) Return the first QbcNewsletterSubscriberHistory filtered by the subscription_date column
 * @method QbcNewsletterSubscriberHistory findOneByListId(string $list_id) Return the first QbcNewsletterSubscriberHistory filtered by the list_id column
 * @method QbcNewsletterSubscriberHistory findOneByListName(string $list_name) Return the first QbcNewsletterSubscriberHistory filtered by the list_name column
 * @method QbcNewsletterSubscriberHistory findOneByActualized(int $actualized) Return the first QbcNewsletterSubscriberHistory filtered by the actualized column
 *
 * @method array findByHistoryId(int $history_id) Return QbcNewsletterSubscriberHistory objects filtered by the history_id column
 * @method array findByUserId(int $user_id) Return QbcNewsletterSubscriberHistory objects filtered by the user_id column
 * @method array findByState(string $state) Return QbcNewsletterSubscriberHistory objects filtered by the state column
 * @method array findByUnsubscriptionDate(string $unsubscription_date) Return QbcNewsletterSubscriberHistory objects filtered by the unsubscription_date column
 * @method array findBySubscriptionDate(string $subscription_date) Return QbcNewsletterSubscriberHistory objects filtered by the subscription_date column
 * @method array findByListId(string $list_id) Return QbcNewsletterSubscriberHistory objects filtered by the list_id column
 * @method array findByListName(string $list_name) Return QbcNewsletterSubscriberHistory objects filtered by the list_name column
 * @method array findByActualized(int $actualized) Return QbcNewsletterSubscriberHistory objects filtered by the actualized column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcNewsletterSubscriberHistoryQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcNewsletterSubscriberHistoryQuery object.
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
            $modelName = 'QbcNewsletterSubscriberHistory';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcNewsletterSubscriberHistoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcNewsletterSubscriberHistoryQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcNewsletterSubscriberHistoryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcNewsletterSubscriberHistoryQuery) {
            return $criteria;
        }
        $query = new QbcNewsletterSubscriberHistoryQuery(null, null, $modelAlias);

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
     * @return   QbcNewsletterSubscriberHistory|QbcNewsletterSubscriberHistory[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcNewsletterSubscriberHistoryPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcNewsletterSubscriberHistoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcNewsletterSubscriberHistory A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByHistoryId($key, $con = null)
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
     * @return                 QbcNewsletterSubscriberHistory A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT history_id, user_id, state, unsubscription_date, subscription_date, list_id, list_name, actualized FROM qbc_newsletter_subscriber_history WHERE history_id = :p0';
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
            $obj = new QbcNewsletterSubscriberHistory();
            $obj->hydrate($row);
            QbcNewsletterSubscriberHistoryPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcNewsletterSubscriberHistory|QbcNewsletterSubscriberHistory[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcNewsletterSubscriberHistory[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcNewsletterSubscriberHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcNewsletterSubscriberHistoryPeer::HISTORY_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcNewsletterSubscriberHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcNewsletterSubscriberHistoryPeer::HISTORY_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the history_id column
     *
     * Example usage:
     * <code>
     * $query->filterByHistoryId(1234); // WHERE history_id = 1234
     * $query->filterByHistoryId(array(12, 34)); // WHERE history_id IN (12, 34)
     * $query->filterByHistoryId(array('min' => 12)); // WHERE history_id >= 12
     * $query->filterByHistoryId(array('max' => 12)); // WHERE history_id <= 12
     * </code>
     *
     * @param     mixed $historyId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcNewsletterSubscriberHistoryQuery The current query, for fluid interface
     */
    public function filterByHistoryId($historyId = null, $comparison = null)
    {
        if (is_array($historyId)) {
            $useMinMax = false;
            if (isset($historyId['min'])) {
                $this->addUsingAlias(QbcNewsletterSubscriberHistoryPeer::HISTORY_ID, $historyId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($historyId['max'])) {
                $this->addUsingAlias(QbcNewsletterSubscriberHistoryPeer::HISTORY_ID, $historyId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcNewsletterSubscriberHistoryPeer::HISTORY_ID, $historyId, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id >= 12
     * $query->filterByUserId(array('max' => 12)); // WHERE user_id <= 12
     * </code>
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcNewsletterSubscriberHistoryQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(QbcNewsletterSubscriberHistoryPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(QbcNewsletterSubscriberHistoryPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcNewsletterSubscriberHistoryPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the state column
     *
     * Example usage:
     * <code>
     * $query->filterByState('fooValue');   // WHERE state = 'fooValue'
     * $query->filterByState('%fooValue%'); // WHERE state LIKE '%fooValue%'
     * </code>
     *
     * @param     string $state The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcNewsletterSubscriberHistoryQuery The current query, for fluid interface
     */
    public function filterByState($state = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($state)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $state)) {
                $state = str_replace('*', '%', $state);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcNewsletterSubscriberHistoryPeer::STATE, $state, $comparison);
    }

    /**
     * Filter the query on the unsubscription_date column
     *
     * Example usage:
     * <code>
     * $query->filterByUnsubscriptionDate('fooValue');   // WHERE unsubscription_date = 'fooValue'
     * $query->filterByUnsubscriptionDate('%fooValue%'); // WHERE unsubscription_date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unsubscriptionDate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcNewsletterSubscriberHistoryQuery The current query, for fluid interface
     */
    public function filterByUnsubscriptionDate($unsubscriptionDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unsubscriptionDate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unsubscriptionDate)) {
                $unsubscriptionDate = str_replace('*', '%', $unsubscriptionDate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcNewsletterSubscriberHistoryPeer::UNSUBSCRIPTION_DATE, $unsubscriptionDate, $comparison);
    }

    /**
     * Filter the query on the subscription_date column
     *
     * Example usage:
     * <code>
     * $query->filterBySubscriptionDate('fooValue');   // WHERE subscription_date = 'fooValue'
     * $query->filterBySubscriptionDate('%fooValue%'); // WHERE subscription_date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subscriptionDate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcNewsletterSubscriberHistoryQuery The current query, for fluid interface
     */
    public function filterBySubscriptionDate($subscriptionDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subscriptionDate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $subscriptionDate)) {
                $subscriptionDate = str_replace('*', '%', $subscriptionDate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcNewsletterSubscriberHistoryPeer::SUBSCRIPTION_DATE, $subscriptionDate, $comparison);
    }

    /**
     * Filter the query on the list_id column
     *
     * Example usage:
     * <code>
     * $query->filterByListId('fooValue');   // WHERE list_id = 'fooValue'
     * $query->filterByListId('%fooValue%'); // WHERE list_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $listId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcNewsletterSubscriberHistoryQuery The current query, for fluid interface
     */
    public function filterByListId($listId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($listId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $listId)) {
                $listId = str_replace('*', '%', $listId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcNewsletterSubscriberHistoryPeer::LIST_ID, $listId, $comparison);
    }

    /**
     * Filter the query on the list_name column
     *
     * Example usage:
     * <code>
     * $query->filterByListName('fooValue');   // WHERE list_name = 'fooValue'
     * $query->filterByListName('%fooValue%'); // WHERE list_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $listName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcNewsletterSubscriberHistoryQuery The current query, for fluid interface
     */
    public function filterByListName($listName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($listName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $listName)) {
                $listName = str_replace('*', '%', $listName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcNewsletterSubscriberHistoryPeer::LIST_NAME, $listName, $comparison);
    }

    /**
     * Filter the query on the actualized column
     *
     * Example usage:
     * <code>
     * $query->filterByActualized(1234); // WHERE actualized = 1234
     * $query->filterByActualized(array(12, 34)); // WHERE actualized IN (12, 34)
     * $query->filterByActualized(array('min' => 12)); // WHERE actualized >= 12
     * $query->filterByActualized(array('max' => 12)); // WHERE actualized <= 12
     * </code>
     *
     * @param     mixed $actualized The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcNewsletterSubscriberHistoryQuery The current query, for fluid interface
     */
    public function filterByActualized($actualized = null, $comparison = null)
    {
        if (is_array($actualized)) {
            $useMinMax = false;
            if (isset($actualized['min'])) {
                $this->addUsingAlias(QbcNewsletterSubscriberHistoryPeer::ACTUALIZED, $actualized['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actualized['max'])) {
                $this->addUsingAlias(QbcNewsletterSubscriberHistoryPeer::ACTUALIZED, $actualized['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcNewsletterSubscriberHistoryPeer::ACTUALIZED, $actualized, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcNewsletterSubscriberHistory $qbcNewsletterSubscriberHistory Object to remove from the list of results
     *
     * @return QbcNewsletterSubscriberHistoryQuery The current query, for fluid interface
     */
    public function prune($qbcNewsletterSubscriberHistory = null)
    {
        if ($qbcNewsletterSubscriberHistory) {
            $this->addUsingAlias(QbcNewsletterSubscriberHistoryPeer::HISTORY_ID, $qbcNewsletterSubscriberHistory->getHistoryId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
