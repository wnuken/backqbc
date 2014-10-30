<?php


/**
 * Base class that represents a query for the 'qbc_security_reset_password_history' table.
 *
 *
 *
 * @method QbcSecurityResetPasswordHistoryQuery orderByMail($order = Criteria::ASC) Order by the mail column
 * @method QbcSecurityResetPasswordHistoryQuery orderByLastSend($order = Criteria::ASC) Order by the last_send column
 *
 * @method QbcSecurityResetPasswordHistoryQuery groupByMail() Group by the mail column
 * @method QbcSecurityResetPasswordHistoryQuery groupByLastSend() Group by the last_send column
 *
 * @method QbcSecurityResetPasswordHistoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSecurityResetPasswordHistoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSecurityResetPasswordHistoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSecurityResetPasswordHistory findOne(PropelPDO $con = null) Return the first QbcSecurityResetPasswordHistory matching the query
 * @method QbcSecurityResetPasswordHistory findOneOrCreate(PropelPDO $con = null) Return the first QbcSecurityResetPasswordHistory matching the query, or a new QbcSecurityResetPasswordHistory object populated from the query conditions when no match is found
 *
 * @method QbcSecurityResetPasswordHistory findOneByLastSend(string $last_send) Return the first QbcSecurityResetPasswordHistory filtered by the last_send column
 *
 * @method array findByMail(string $mail) Return QbcSecurityResetPasswordHistory objects filtered by the mail column
 * @method array findByLastSend(string $last_send) Return QbcSecurityResetPasswordHistory objects filtered by the last_send column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSecurityResetPasswordHistoryQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcSecurityResetPasswordHistoryQuery object.
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
            $modelName = 'QbcSecurityResetPasswordHistory';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcSecurityResetPasswordHistoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcSecurityResetPasswordHistoryQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcSecurityResetPasswordHistoryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcSecurityResetPasswordHistoryQuery) {
            return $criteria;
        }
        $query = new QbcSecurityResetPasswordHistoryQuery(null, null, $modelAlias);

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
     * @return   QbcSecurityResetPasswordHistory|QbcSecurityResetPasswordHistory[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcSecurityResetPasswordHistoryPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcSecurityResetPasswordHistoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcSecurityResetPasswordHistory A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByMail($key, $con = null)
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
     * @return                 QbcSecurityResetPasswordHistory A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT mail, last_send FROM qbc_security_reset_password_history WHERE mail = :p0';
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
            $obj = new QbcSecurityResetPasswordHistory();
            $obj->hydrate($row);
            QbcSecurityResetPasswordHistoryPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcSecurityResetPasswordHistory|QbcSecurityResetPasswordHistory[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcSecurityResetPasswordHistory[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcSecurityResetPasswordHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcSecurityResetPasswordHistoryPeer::MAIL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcSecurityResetPasswordHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcSecurityResetPasswordHistoryPeer::MAIL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the mail column
     *
     * Example usage:
     * <code>
     * $query->filterByMail('fooValue');   // WHERE mail = 'fooValue'
     * $query->filterByMail('%fooValue%'); // WHERE mail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSecurityResetPasswordHistoryQuery The current query, for fluid interface
     */
    public function filterByMail($mail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mail)) {
                $mail = str_replace('*', '%', $mail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSecurityResetPasswordHistoryPeer::MAIL, $mail, $comparison);
    }

    /**
     * Filter the query on the last_send column
     *
     * Example usage:
     * <code>
     * $query->filterByLastSend('fooValue');   // WHERE last_send = 'fooValue'
     * $query->filterByLastSend('%fooValue%'); // WHERE last_send LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lastSend The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSecurityResetPasswordHistoryQuery The current query, for fluid interface
     */
    public function filterByLastSend($lastSend = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lastSend)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lastSend)) {
                $lastSend = str_replace('*', '%', $lastSend);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSecurityResetPasswordHistoryPeer::LAST_SEND, $lastSend, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcSecurityResetPasswordHistory $qbcSecurityResetPasswordHistory Object to remove from the list of results
     *
     * @return QbcSecurityResetPasswordHistoryQuery The current query, for fluid interface
     */
    public function prune($qbcSecurityResetPasswordHistory = null)
    {
        if ($qbcSecurityResetPasswordHistory) {
            $this->addUsingAlias(QbcSecurityResetPasswordHistoryPeer::MAIL, $qbcSecurityResetPasswordHistory->getMail(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
