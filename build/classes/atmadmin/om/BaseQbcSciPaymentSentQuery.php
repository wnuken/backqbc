<?php


/**
 * Base class that represents a query for the 'qbc_sci_payment_sent' table.
 *
 *
 *
 * @method QbcSciPaymentSentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QbcSciPaymentSentQuery orderByPetitionId($order = Criteria::ASC) Order by the petition_id column
 * @method QbcSciPaymentSentQuery orderByGdId($order = Criteria::ASC) Order by the gd_id column
 * @method QbcSciPaymentSentQuery orderByProcessDate($order = Criteria::ASC) Order by the process_date column
 * @method QbcSciPaymentSentQuery orderBySentDate($order = Criteria::ASC) Order by the sent_date column
 * @method QbcSciPaymentSentQuery orderByUpdateDate($order = Criteria::ASC) Order by the update_date column
 * @method QbcSciPaymentSentQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method QbcSciPaymentSentQuery orderByResend($order = Criteria::ASC) Order by the resend column
 * @method QbcSciPaymentSentQuery orderBySapDoc($order = Criteria::ASC) Order by the sap_doc column
 * @method QbcSciPaymentSentQuery orderBySellDate($order = Criteria::ASC) Order by the sell_date column
 *
 * @method QbcSciPaymentSentQuery groupById() Group by the id column
 * @method QbcSciPaymentSentQuery groupByPetitionId() Group by the petition_id column
 * @method QbcSciPaymentSentQuery groupByGdId() Group by the gd_id column
 * @method QbcSciPaymentSentQuery groupByProcessDate() Group by the process_date column
 * @method QbcSciPaymentSentQuery groupBySentDate() Group by the sent_date column
 * @method QbcSciPaymentSentQuery groupByUpdateDate() Group by the update_date column
 * @method QbcSciPaymentSentQuery groupByStatus() Group by the status column
 * @method QbcSciPaymentSentQuery groupByResend() Group by the resend column
 * @method QbcSciPaymentSentQuery groupBySapDoc() Group by the sap_doc column
 * @method QbcSciPaymentSentQuery groupBySellDate() Group by the sell_date column
 *
 * @method QbcSciPaymentSentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSciPaymentSentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSciPaymentSentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSciPaymentSent findOne(PropelPDO $con = null) Return the first QbcSciPaymentSent matching the query
 * @method QbcSciPaymentSent findOneOrCreate(PropelPDO $con = null) Return the first QbcSciPaymentSent matching the query, or a new QbcSciPaymentSent object populated from the query conditions when no match is found
 *
 * @method QbcSciPaymentSent findOneByPetitionId(string $petition_id) Return the first QbcSciPaymentSent filtered by the petition_id column
 * @method QbcSciPaymentSent findOneByGdId(string $gd_id) Return the first QbcSciPaymentSent filtered by the gd_id column
 * @method QbcSciPaymentSent findOneByProcessDate(string $process_date) Return the first QbcSciPaymentSent filtered by the process_date column
 * @method QbcSciPaymentSent findOneBySentDate(string $sent_date) Return the first QbcSciPaymentSent filtered by the sent_date column
 * @method QbcSciPaymentSent findOneByUpdateDate(string $update_date) Return the first QbcSciPaymentSent filtered by the update_date column
 * @method QbcSciPaymentSent findOneByStatus(string $status) Return the first QbcSciPaymentSent filtered by the status column
 * @method QbcSciPaymentSent findOneByResend(int $resend) Return the first QbcSciPaymentSent filtered by the resend column
 * @method QbcSciPaymentSent findOneBySapDoc(string $sap_doc) Return the first QbcSciPaymentSent filtered by the sap_doc column
 * @method QbcSciPaymentSent findOneBySellDate(string $sell_date) Return the first QbcSciPaymentSent filtered by the sell_date column
 *
 * @method array findById(int $id) Return QbcSciPaymentSent objects filtered by the id column
 * @method array findByPetitionId(string $petition_id) Return QbcSciPaymentSent objects filtered by the petition_id column
 * @method array findByGdId(string $gd_id) Return QbcSciPaymentSent objects filtered by the gd_id column
 * @method array findByProcessDate(string $process_date) Return QbcSciPaymentSent objects filtered by the process_date column
 * @method array findBySentDate(string $sent_date) Return QbcSciPaymentSent objects filtered by the sent_date column
 * @method array findByUpdateDate(string $update_date) Return QbcSciPaymentSent objects filtered by the update_date column
 * @method array findByStatus(string $status) Return QbcSciPaymentSent objects filtered by the status column
 * @method array findByResend(int $resend) Return QbcSciPaymentSent objects filtered by the resend column
 * @method array findBySapDoc(string $sap_doc) Return QbcSciPaymentSent objects filtered by the sap_doc column
 * @method array findBySellDate(string $sell_date) Return QbcSciPaymentSent objects filtered by the sell_date column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciPaymentSentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcSciPaymentSentQuery object.
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
            $modelName = 'QbcSciPaymentSent';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcSciPaymentSentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcSciPaymentSentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcSciPaymentSentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcSciPaymentSentQuery) {
            return $criteria;
        }
        $query = new QbcSciPaymentSentQuery(null, null, $modelAlias);

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
     * @return   QbcSciPaymentSent|QbcSciPaymentSent[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcSciPaymentSentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcSciPaymentSentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcSciPaymentSent A model object, or null if the key is not found
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
     * @return                 QbcSciPaymentSent A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, petition_id, gd_id, process_date, sent_date, update_date, status, resend, sap_doc, sell_date FROM qbc_sci_payment_sent WHERE id = :p0';
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
            $obj = new QbcSciPaymentSent();
            $obj->hydrate($row);
            QbcSciPaymentSentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcSciPaymentSent|QbcSciPaymentSent[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcSciPaymentSent[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcSciPaymentSentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcSciPaymentSentPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcSciPaymentSentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcSciPaymentSentPeer::ID, $keys, Criteria::IN);
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
     * @return QbcSciPaymentSentQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcSciPaymentSentPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcSciPaymentSentPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentSentPeer::ID, $id, $comparison);
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
     * @return QbcSciPaymentSentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciPaymentSentPeer::PETITION_ID, $petitionId, $comparison);
    }

    /**
     * Filter the query on the gd_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGdId('fooValue');   // WHERE gd_id = 'fooValue'
     * $query->filterByGdId('%fooValue%'); // WHERE gd_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gdId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciPaymentSentQuery The current query, for fluid interface
     */
    public function filterByGdId($gdId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gdId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gdId)) {
                $gdId = str_replace('*', '%', $gdId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentSentPeer::GD_ID, $gdId, $comparison);
    }

    /**
     * Filter the query on the process_date column
     *
     * Example usage:
     * <code>
     * $query->filterByProcessDate('2011-03-14'); // WHERE process_date = '2011-03-14'
     * $query->filterByProcessDate('now'); // WHERE process_date = '2011-03-14'
     * $query->filterByProcessDate(array('max' => 'yesterday')); // WHERE process_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $processDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciPaymentSentQuery The current query, for fluid interface
     */
    public function filterByProcessDate($processDate = null, $comparison = null)
    {
        if (is_array($processDate)) {
            $useMinMax = false;
            if (isset($processDate['min'])) {
                $this->addUsingAlias(QbcSciPaymentSentPeer::PROCESS_DATE, $processDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($processDate['max'])) {
                $this->addUsingAlias(QbcSciPaymentSentPeer::PROCESS_DATE, $processDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentSentPeer::PROCESS_DATE, $processDate, $comparison);
    }

    /**
     * Filter the query on the sent_date column
     *
     * Example usage:
     * <code>
     * $query->filterBySentDate('2011-03-14'); // WHERE sent_date = '2011-03-14'
     * $query->filterBySentDate('now'); // WHERE sent_date = '2011-03-14'
     * $query->filterBySentDate(array('max' => 'yesterday')); // WHERE sent_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $sentDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciPaymentSentQuery The current query, for fluid interface
     */
    public function filterBySentDate($sentDate = null, $comparison = null)
    {
        if (is_array($sentDate)) {
            $useMinMax = false;
            if (isset($sentDate['min'])) {
                $this->addUsingAlias(QbcSciPaymentSentPeer::SENT_DATE, $sentDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sentDate['max'])) {
                $this->addUsingAlias(QbcSciPaymentSentPeer::SENT_DATE, $sentDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentSentPeer::SENT_DATE, $sentDate, $comparison);
    }

    /**
     * Filter the query on the update_date column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdateDate('2011-03-14'); // WHERE update_date = '2011-03-14'
     * $query->filterByUpdateDate('now'); // WHERE update_date = '2011-03-14'
     * $query->filterByUpdateDate(array('max' => 'yesterday')); // WHERE update_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $updateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciPaymentSentQuery The current query, for fluid interface
     */
    public function filterByUpdateDate($updateDate = null, $comparison = null)
    {
        if (is_array($updateDate)) {
            $useMinMax = false;
            if (isset($updateDate['min'])) {
                $this->addUsingAlias(QbcSciPaymentSentPeer::UPDATE_DATE, $updateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updateDate['max'])) {
                $this->addUsingAlias(QbcSciPaymentSentPeer::UPDATE_DATE, $updateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentSentPeer::UPDATE_DATE, $updateDate, $comparison);
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
     * @return QbcSciPaymentSentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciPaymentSentPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the resend column
     *
     * Example usage:
     * <code>
     * $query->filterByResend(1234); // WHERE resend = 1234
     * $query->filterByResend(array(12, 34)); // WHERE resend IN (12, 34)
     * $query->filterByResend(array('min' => 12)); // WHERE resend >= 12
     * $query->filterByResend(array('max' => 12)); // WHERE resend <= 12
     * </code>
     *
     * @param     mixed $resend The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciPaymentSentQuery The current query, for fluid interface
     */
    public function filterByResend($resend = null, $comparison = null)
    {
        if (is_array($resend)) {
            $useMinMax = false;
            if (isset($resend['min'])) {
                $this->addUsingAlias(QbcSciPaymentSentPeer::RESEND, $resend['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($resend['max'])) {
                $this->addUsingAlias(QbcSciPaymentSentPeer::RESEND, $resend['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentSentPeer::RESEND, $resend, $comparison);
    }

    /**
     * Filter the query on the sap_doc column
     *
     * Example usage:
     * <code>
     * $query->filterBySapDoc('fooValue');   // WHERE sap_doc = 'fooValue'
     * $query->filterBySapDoc('%fooValue%'); // WHERE sap_doc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sapDoc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciPaymentSentQuery The current query, for fluid interface
     */
    public function filterBySapDoc($sapDoc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sapDoc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sapDoc)) {
                $sapDoc = str_replace('*', '%', $sapDoc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentSentPeer::SAP_DOC, $sapDoc, $comparison);
    }

    /**
     * Filter the query on the sell_date column
     *
     * Example usage:
     * <code>
     * $query->filterBySellDate('2011-03-14'); // WHERE sell_date = '2011-03-14'
     * $query->filterBySellDate('now'); // WHERE sell_date = '2011-03-14'
     * $query->filterBySellDate(array('max' => 'yesterday')); // WHERE sell_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $sellDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciPaymentSentQuery The current query, for fluid interface
     */
    public function filterBySellDate($sellDate = null, $comparison = null)
    {
        if (is_array($sellDate)) {
            $useMinMax = false;
            if (isset($sellDate['min'])) {
                $this->addUsingAlias(QbcSciPaymentSentPeer::SELL_DATE, $sellDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sellDate['max'])) {
                $this->addUsingAlias(QbcSciPaymentSentPeer::SELL_DATE, $sellDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentSentPeer::SELL_DATE, $sellDate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcSciPaymentSent $qbcSciPaymentSent Object to remove from the list of results
     *
     * @return QbcSciPaymentSentQuery The current query, for fluid interface
     */
    public function prune($qbcSciPaymentSent = null)
    {
        if ($qbcSciPaymentSent) {
            $this->addUsingAlias(QbcSciPaymentSentPeer::ID, $qbcSciPaymentSent->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
