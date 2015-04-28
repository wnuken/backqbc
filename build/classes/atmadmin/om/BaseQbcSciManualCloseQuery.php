<?php


/**
 * Base class that represents a query for the 'qbc_sci_manual_close' table.
 *
 *
 *
 * @method QbcSciManualCloseQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QbcSciManualCloseQuery orderByCampaignId($order = Criteria::ASC) Order by the campaign_id column
 * @method QbcSciManualCloseQuery orderByValueSap($order = Criteria::ASC) Order by the value_sap column
 * @method QbcSciManualCloseQuery orderByDocSap($order = Criteria::ASC) Order by the doc_sap column
 * @method QbcSciManualCloseQuery orderByDateSap($order = Criteria::ASC) Order by the date_sap column
 * @method QbcSciManualCloseQuery orderByStatus($order = Criteria::ASC) Order by the status column
 *
 * @method QbcSciManualCloseQuery groupById() Group by the id column
 * @method QbcSciManualCloseQuery groupByCampaignId() Group by the campaign_id column
 * @method QbcSciManualCloseQuery groupByValueSap() Group by the value_sap column
 * @method QbcSciManualCloseQuery groupByDocSap() Group by the doc_sap column
 * @method QbcSciManualCloseQuery groupByDateSap() Group by the date_sap column
 * @method QbcSciManualCloseQuery groupByStatus() Group by the status column
 *
 * @method QbcSciManualCloseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSciManualCloseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSciManualCloseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSciManualClose findOne(PropelPDO $con = null) Return the first QbcSciManualClose matching the query
 * @method QbcSciManualClose findOneOrCreate(PropelPDO $con = null) Return the first QbcSciManualClose matching the query, or a new QbcSciManualClose object populated from the query conditions when no match is found
 *
 * @method QbcSciManualClose findOneByCampaignId(int $campaign_id) Return the first QbcSciManualClose filtered by the campaign_id column
 * @method QbcSciManualClose findOneByValueSap(int $value_sap) Return the first QbcSciManualClose filtered by the value_sap column
 * @method QbcSciManualClose findOneByDocSap(string $doc_sap) Return the first QbcSciManualClose filtered by the doc_sap column
 * @method QbcSciManualClose findOneByDateSap(string $date_sap) Return the first QbcSciManualClose filtered by the date_sap column
 * @method QbcSciManualClose findOneByStatus(int $status) Return the first QbcSciManualClose filtered by the status column
 *
 * @method array findById(int $id) Return QbcSciManualClose objects filtered by the id column
 * @method array findByCampaignId(int $campaign_id) Return QbcSciManualClose objects filtered by the campaign_id column
 * @method array findByValueSap(int $value_sap) Return QbcSciManualClose objects filtered by the value_sap column
 * @method array findByDocSap(string $doc_sap) Return QbcSciManualClose objects filtered by the doc_sap column
 * @method array findByDateSap(string $date_sap) Return QbcSciManualClose objects filtered by the date_sap column
 * @method array findByStatus(int $status) Return QbcSciManualClose objects filtered by the status column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciManualCloseQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcSciManualCloseQuery object.
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
            $modelName = 'QbcSciManualClose';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcSciManualCloseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcSciManualCloseQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcSciManualCloseQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcSciManualCloseQuery) {
            return $criteria;
        }
        $query = new QbcSciManualCloseQuery(null, null, $modelAlias);

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
     * @return   QbcSciManualClose|QbcSciManualClose[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcSciManualClosePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcSciManualClosePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcSciManualClose A model object, or null if the key is not found
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
     * @return                 QbcSciManualClose A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, campaign_id, value_sap, doc_sap, date_sap, status FROM qbc_sci_manual_close WHERE id = :p0';
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
            $obj = new QbcSciManualClose();
            $obj->hydrate($row);
            QbcSciManualClosePeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcSciManualClose|QbcSciManualClose[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcSciManualClose[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcSciManualCloseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcSciManualClosePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcSciManualCloseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcSciManualClosePeer::ID, $keys, Criteria::IN);
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
     * @return QbcSciManualCloseQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcSciManualClosePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcSciManualClosePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciManualClosePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the campaign_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCampaignId(1234); // WHERE campaign_id = 1234
     * $query->filterByCampaignId(array(12, 34)); // WHERE campaign_id IN (12, 34)
     * $query->filterByCampaignId(array('min' => 12)); // WHERE campaign_id >= 12
     * $query->filterByCampaignId(array('max' => 12)); // WHERE campaign_id <= 12
     * </code>
     *
     * @param     mixed $campaignId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciManualCloseQuery The current query, for fluid interface
     */
    public function filterByCampaignId($campaignId = null, $comparison = null)
    {
        if (is_array($campaignId)) {
            $useMinMax = false;
            if (isset($campaignId['min'])) {
                $this->addUsingAlias(QbcSciManualClosePeer::CAMPAIGN_ID, $campaignId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($campaignId['max'])) {
                $this->addUsingAlias(QbcSciManualClosePeer::CAMPAIGN_ID, $campaignId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciManualClosePeer::CAMPAIGN_ID, $campaignId, $comparison);
    }

    /**
     * Filter the query on the value_sap column
     *
     * Example usage:
     * <code>
     * $query->filterByValueSap(1234); // WHERE value_sap = 1234
     * $query->filterByValueSap(array(12, 34)); // WHERE value_sap IN (12, 34)
     * $query->filterByValueSap(array('min' => 12)); // WHERE value_sap >= 12
     * $query->filterByValueSap(array('max' => 12)); // WHERE value_sap <= 12
     * </code>
     *
     * @param     mixed $valueSap The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciManualCloseQuery The current query, for fluid interface
     */
    public function filterByValueSap($valueSap = null, $comparison = null)
    {
        if (is_array($valueSap)) {
            $useMinMax = false;
            if (isset($valueSap['min'])) {
                $this->addUsingAlias(QbcSciManualClosePeer::VALUE_SAP, $valueSap['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valueSap['max'])) {
                $this->addUsingAlias(QbcSciManualClosePeer::VALUE_SAP, $valueSap['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciManualClosePeer::VALUE_SAP, $valueSap, $comparison);
    }

    /**
     * Filter the query on the doc_sap column
     *
     * Example usage:
     * <code>
     * $query->filterByDocSap('fooValue');   // WHERE doc_sap = 'fooValue'
     * $query->filterByDocSap('%fooValue%'); // WHERE doc_sap LIKE '%fooValue%'
     * </code>
     *
     * @param     string $docSap The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciManualCloseQuery The current query, for fluid interface
     */
    public function filterByDocSap($docSap = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docSap)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $docSap)) {
                $docSap = str_replace('*', '%', $docSap);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciManualClosePeer::DOC_SAP, $docSap, $comparison);
    }

    /**
     * Filter the query on the date_sap column
     *
     * Example usage:
     * <code>
     * $query->filterByDateSap('2011-03-14'); // WHERE date_sap = '2011-03-14'
     * $query->filterByDateSap('now'); // WHERE date_sap = '2011-03-14'
     * $query->filterByDateSap(array('max' => 'yesterday')); // WHERE date_sap < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateSap The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciManualCloseQuery The current query, for fluid interface
     */
    public function filterByDateSap($dateSap = null, $comparison = null)
    {
        if (is_array($dateSap)) {
            $useMinMax = false;
            if (isset($dateSap['min'])) {
                $this->addUsingAlias(QbcSciManualClosePeer::DATE_SAP, $dateSap['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateSap['max'])) {
                $this->addUsingAlias(QbcSciManualClosePeer::DATE_SAP, $dateSap['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciManualClosePeer::DATE_SAP, $dateSap, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus(1234); // WHERE status = 1234
     * $query->filterByStatus(array(12, 34)); // WHERE status IN (12, 34)
     * $query->filterByStatus(array('min' => 12)); // WHERE status >= 12
     * $query->filterByStatus(array('max' => 12)); // WHERE status <= 12
     * </code>
     *
     * @param     mixed $status The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciManualCloseQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (is_array($status)) {
            $useMinMax = false;
            if (isset($status['min'])) {
                $this->addUsingAlias(QbcSciManualClosePeer::STATUS, $status['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($status['max'])) {
                $this->addUsingAlias(QbcSciManualClosePeer::STATUS, $status['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciManualClosePeer::STATUS, $status, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcSciManualClose $qbcSciManualClose Object to remove from the list of results
     *
     * @return QbcSciManualCloseQuery The current query, for fluid interface
     */
    public function prune($qbcSciManualClose = null)
    {
        if ($qbcSciManualClose) {
            $this->addUsingAlias(QbcSciManualClosePeer::ID, $qbcSciManualClose->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
