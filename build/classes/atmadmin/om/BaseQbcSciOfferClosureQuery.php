<?php


/**
 * Base class that represents a query for the 'qbc_sci_offer_closure' table.
 *
 *
 *
 * @method QbcSciOfferClosureQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QbcSciOfferClosureQuery orderByPetitionId($order = Criteria::ASC) Order by the petition_id column
 * @method QbcSciOfferClosureQuery orderByMerchantId($order = Criteria::ASC) Order by the merchant_id column
 * @method QbcSciOfferClosureQuery orderByCampaignId($order = Criteria::ASC) Order by the campaign_id column
 * @method QbcSciOfferClosureQuery orderBySalesDocuments($order = Criteria::ASC) Order by the sales_documents column
 * @method QbcSciOfferClosureQuery orderByDevolutionDocuments($order = Criteria::ASC) Order by the devolution_documents column
 *
 * @method QbcSciOfferClosureQuery groupById() Group by the id column
 * @method QbcSciOfferClosureQuery groupByPetitionId() Group by the petition_id column
 * @method QbcSciOfferClosureQuery groupByMerchantId() Group by the merchant_id column
 * @method QbcSciOfferClosureQuery groupByCampaignId() Group by the campaign_id column
 * @method QbcSciOfferClosureQuery groupBySalesDocuments() Group by the sales_documents column
 * @method QbcSciOfferClosureQuery groupByDevolutionDocuments() Group by the devolution_documents column
 *
 * @method QbcSciOfferClosureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSciOfferClosureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSciOfferClosureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSciOfferClosure findOne(PropelPDO $con = null) Return the first QbcSciOfferClosure matching the query
 * @method QbcSciOfferClosure findOneOrCreate(PropelPDO $con = null) Return the first QbcSciOfferClosure matching the query, or a new QbcSciOfferClosure object populated from the query conditions when no match is found
 *
 * @method QbcSciOfferClosure findOneByPetitionId(string $petition_id) Return the first QbcSciOfferClosure filtered by the petition_id column
 * @method QbcSciOfferClosure findOneByMerchantId(string $merchant_id) Return the first QbcSciOfferClosure filtered by the merchant_id column
 * @method QbcSciOfferClosure findOneByCampaignId(string $campaign_id) Return the first QbcSciOfferClosure filtered by the campaign_id column
 * @method QbcSciOfferClosure findOneBySalesDocuments(string $sales_documents) Return the first QbcSciOfferClosure filtered by the sales_documents column
 * @method QbcSciOfferClosure findOneByDevolutionDocuments(string $devolution_documents) Return the first QbcSciOfferClosure filtered by the devolution_documents column
 *
 * @method array findById(int $id) Return QbcSciOfferClosure objects filtered by the id column
 * @method array findByPetitionId(string $petition_id) Return QbcSciOfferClosure objects filtered by the petition_id column
 * @method array findByMerchantId(string $merchant_id) Return QbcSciOfferClosure objects filtered by the merchant_id column
 * @method array findByCampaignId(string $campaign_id) Return QbcSciOfferClosure objects filtered by the campaign_id column
 * @method array findBySalesDocuments(string $sales_documents) Return QbcSciOfferClosure objects filtered by the sales_documents column
 * @method array findByDevolutionDocuments(string $devolution_documents) Return QbcSciOfferClosure objects filtered by the devolution_documents column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciOfferClosureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcSciOfferClosureQuery object.
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
            $modelName = 'QbcSciOfferClosure';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcSciOfferClosureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcSciOfferClosureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcSciOfferClosureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcSciOfferClosureQuery) {
            return $criteria;
        }
        $query = new QbcSciOfferClosureQuery(null, null, $modelAlias);

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
     * @return   QbcSciOfferClosure|QbcSciOfferClosure[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcSciOfferClosurePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcSciOfferClosurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcSciOfferClosure A model object, or null if the key is not found
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
     * @return                 QbcSciOfferClosure A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, petition_id, merchant_id, campaign_id, sales_documents, devolution_documents FROM qbc_sci_offer_closure WHERE id = :p0';
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
            $obj = new QbcSciOfferClosure();
            $obj->hydrate($row);
            QbcSciOfferClosurePeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcSciOfferClosure|QbcSciOfferClosure[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcSciOfferClosure[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcSciOfferClosureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcSciOfferClosurePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcSciOfferClosureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcSciOfferClosurePeer::ID, $keys, Criteria::IN);
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
     * @return QbcSciOfferClosureQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcSciOfferClosurePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcSciOfferClosurePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciOfferClosurePeer::ID, $id, $comparison);
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
     * @return QbcSciOfferClosureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciOfferClosurePeer::PETITION_ID, $petitionId, $comparison);
    }

    /**
     * Filter the query on the merchant_id column
     *
     * Example usage:
     * <code>
     * $query->filterByMerchantId('fooValue');   // WHERE merchant_id = 'fooValue'
     * $query->filterByMerchantId('%fooValue%'); // WHERE merchant_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $merchantId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciOfferClosureQuery The current query, for fluid interface
     */
    public function filterByMerchantId($merchantId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($merchantId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $merchantId)) {
                $merchantId = str_replace('*', '%', $merchantId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciOfferClosurePeer::MERCHANT_ID, $merchantId, $comparison);
    }

    /**
     * Filter the query on the campaign_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCampaignId('fooValue');   // WHERE campaign_id = 'fooValue'
     * $query->filterByCampaignId('%fooValue%'); // WHERE campaign_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $campaignId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciOfferClosureQuery The current query, for fluid interface
     */
    public function filterByCampaignId($campaignId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($campaignId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $campaignId)) {
                $campaignId = str_replace('*', '%', $campaignId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciOfferClosurePeer::CAMPAIGN_ID, $campaignId, $comparison);
    }

    /**
     * Filter the query on the sales_documents column
     *
     * Example usage:
     * <code>
     * $query->filterBySalesDocuments('fooValue');   // WHERE sales_documents = 'fooValue'
     * $query->filterBySalesDocuments('%fooValue%'); // WHERE sales_documents LIKE '%fooValue%'
     * </code>
     *
     * @param     string $salesDocuments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciOfferClosureQuery The current query, for fluid interface
     */
    public function filterBySalesDocuments($salesDocuments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salesDocuments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $salesDocuments)) {
                $salesDocuments = str_replace('*', '%', $salesDocuments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciOfferClosurePeer::SALES_DOCUMENTS, $salesDocuments, $comparison);
    }

    /**
     * Filter the query on the devolution_documents column
     *
     * Example usage:
     * <code>
     * $query->filterByDevolutionDocuments('fooValue');   // WHERE devolution_documents = 'fooValue'
     * $query->filterByDevolutionDocuments('%fooValue%'); // WHERE devolution_documents LIKE '%fooValue%'
     * </code>
     *
     * @param     string $devolutionDocuments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciOfferClosureQuery The current query, for fluid interface
     */
    public function filterByDevolutionDocuments($devolutionDocuments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($devolutionDocuments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $devolutionDocuments)) {
                $devolutionDocuments = str_replace('*', '%', $devolutionDocuments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciOfferClosurePeer::DEVOLUTION_DOCUMENTS, $devolutionDocuments, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcSciOfferClosure $qbcSciOfferClosure Object to remove from the list of results
     *
     * @return QbcSciOfferClosureQuery The current query, for fluid interface
     */
    public function prune($qbcSciOfferClosure = null)
    {
        if ($qbcSciOfferClosure) {
            $this->addUsingAlias(QbcSciOfferClosurePeer::ID, $qbcSciOfferClosure->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
