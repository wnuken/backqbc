<?php


/**
 * Base class that represents a query for the 'qbc_sci_credit_construct_doc' table.
 *
 *
 *
 * @method QbcSciCreditConstructDocQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QbcSciCreditConstructDocQuery orderByPetitionId($order = Criteria::ASC) Order by the petition_id column
 * @method QbcSciCreditConstructDocQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method QbcSciCreditConstructDocQuery orderByDetail($order = Criteria::ASC) Order by the detail column
 * @method QbcSciCreditConstructDocQuery orderByDocumentId($order = Criteria::ASC) Order by the document_id column
 * @method QbcSciCreditConstructDocQuery orderByDocPosition($order = Criteria::ASC) Order by the doc_position column
 * @method QbcSciCreditConstructDocQuery orderByDocValue($order = Criteria::ASC) Order by the doc_value column
 * @method QbcSciCreditConstructDocQuery orderByDocDate($order = Criteria::ASC) Order by the doc_date column
 *
 * @method QbcSciCreditConstructDocQuery groupById() Group by the id column
 * @method QbcSciCreditConstructDocQuery groupByPetitionId() Group by the petition_id column
 * @method QbcSciCreditConstructDocQuery groupByState() Group by the state column
 * @method QbcSciCreditConstructDocQuery groupByDetail() Group by the detail column
 * @method QbcSciCreditConstructDocQuery groupByDocumentId() Group by the document_id column
 * @method QbcSciCreditConstructDocQuery groupByDocPosition() Group by the doc_position column
 * @method QbcSciCreditConstructDocQuery groupByDocValue() Group by the doc_value column
 * @method QbcSciCreditConstructDocQuery groupByDocDate() Group by the doc_date column
 *
 * @method QbcSciCreditConstructDocQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSciCreditConstructDocQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSciCreditConstructDocQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSciCreditConstructDoc findOne(PropelPDO $con = null) Return the first QbcSciCreditConstructDoc matching the query
 * @method QbcSciCreditConstructDoc findOneOrCreate(PropelPDO $con = null) Return the first QbcSciCreditConstructDoc matching the query, or a new QbcSciCreditConstructDoc object populated from the query conditions when no match is found
 *
 * @method QbcSciCreditConstructDoc findOneByPetitionId(string $petition_id) Return the first QbcSciCreditConstructDoc filtered by the petition_id column
 * @method QbcSciCreditConstructDoc findOneByState(string $state) Return the first QbcSciCreditConstructDoc filtered by the state column
 * @method QbcSciCreditConstructDoc findOneByDetail(string $detail) Return the first QbcSciCreditConstructDoc filtered by the detail column
 * @method QbcSciCreditConstructDoc findOneByDocumentId(string $document_id) Return the first QbcSciCreditConstructDoc filtered by the document_id column
 * @method QbcSciCreditConstructDoc findOneByDocPosition(int $doc_position) Return the first QbcSciCreditConstructDoc filtered by the doc_position column
 * @method QbcSciCreditConstructDoc findOneByDocValue(string $doc_value) Return the first QbcSciCreditConstructDoc filtered by the doc_value column
 * @method QbcSciCreditConstructDoc findOneByDocDate(string $doc_date) Return the first QbcSciCreditConstructDoc filtered by the doc_date column
 *
 * @method array findById(int $id) Return QbcSciCreditConstructDoc objects filtered by the id column
 * @method array findByPetitionId(string $petition_id) Return QbcSciCreditConstructDoc objects filtered by the petition_id column
 * @method array findByState(string $state) Return QbcSciCreditConstructDoc objects filtered by the state column
 * @method array findByDetail(string $detail) Return QbcSciCreditConstructDoc objects filtered by the detail column
 * @method array findByDocumentId(string $document_id) Return QbcSciCreditConstructDoc objects filtered by the document_id column
 * @method array findByDocPosition(int $doc_position) Return QbcSciCreditConstructDoc objects filtered by the doc_position column
 * @method array findByDocValue(string $doc_value) Return QbcSciCreditConstructDoc objects filtered by the doc_value column
 * @method array findByDocDate(string $doc_date) Return QbcSciCreditConstructDoc objects filtered by the doc_date column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciCreditConstructDocQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcSciCreditConstructDocQuery object.
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
            $modelName = 'QbcSciCreditConstructDoc';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcSciCreditConstructDocQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcSciCreditConstructDocQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcSciCreditConstructDocQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcSciCreditConstructDocQuery) {
            return $criteria;
        }
        $query = new QbcSciCreditConstructDocQuery(null, null, $modelAlias);

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
     * @return   QbcSciCreditConstructDoc|QbcSciCreditConstructDoc[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcSciCreditConstructDocPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcSciCreditConstructDocPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcSciCreditConstructDoc A model object, or null if the key is not found
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
     * @return                 QbcSciCreditConstructDoc A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, petition_id, state, detail, document_id, doc_position, doc_value, doc_date FROM qbc_sci_credit_construct_doc WHERE id = :p0';
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
            $obj = new QbcSciCreditConstructDoc();
            $obj->hydrate($row);
            QbcSciCreditConstructDocPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcSciCreditConstructDoc|QbcSciCreditConstructDoc[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcSciCreditConstructDoc[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcSciCreditConstructDocQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcSciCreditConstructDocPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcSciCreditConstructDocQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcSciCreditConstructDocPeer::ID, $keys, Criteria::IN);
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
     * @return QbcSciCreditConstructDocQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcSciCreditConstructDocPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcSciCreditConstructDocPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciCreditConstructDocPeer::ID, $id, $comparison);
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
     * @return QbcSciCreditConstructDocQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciCreditConstructDocPeer::PETITION_ID, $petitionId, $comparison);
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
     * @return QbcSciCreditConstructDocQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciCreditConstructDocPeer::STATE, $state, $comparison);
    }

    /**
     * Filter the query on the detail column
     *
     * Example usage:
     * <code>
     * $query->filterByDetail('fooValue');   // WHERE detail = 'fooValue'
     * $query->filterByDetail('%fooValue%'); // WHERE detail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciCreditConstructDocQuery The current query, for fluid interface
     */
    public function filterByDetail($detail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detail)) {
                $detail = str_replace('*', '%', $detail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciCreditConstructDocPeer::DETAIL, $detail, $comparison);
    }

    /**
     * Filter the query on the document_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDocumentId('fooValue');   // WHERE document_id = 'fooValue'
     * $query->filterByDocumentId('%fooValue%'); // WHERE document_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $documentId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciCreditConstructDocQuery The current query, for fluid interface
     */
    public function filterByDocumentId($documentId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($documentId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $documentId)) {
                $documentId = str_replace('*', '%', $documentId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciCreditConstructDocPeer::DOCUMENT_ID, $documentId, $comparison);
    }

    /**
     * Filter the query on the doc_position column
     *
     * Example usage:
     * <code>
     * $query->filterByDocPosition(1234); // WHERE doc_position = 1234
     * $query->filterByDocPosition(array(12, 34)); // WHERE doc_position IN (12, 34)
     * $query->filterByDocPosition(array('min' => 12)); // WHERE doc_position >= 12
     * $query->filterByDocPosition(array('max' => 12)); // WHERE doc_position <= 12
     * </code>
     *
     * @param     mixed $docPosition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciCreditConstructDocQuery The current query, for fluid interface
     */
    public function filterByDocPosition($docPosition = null, $comparison = null)
    {
        if (is_array($docPosition)) {
            $useMinMax = false;
            if (isset($docPosition['min'])) {
                $this->addUsingAlias(QbcSciCreditConstructDocPeer::DOC_POSITION, $docPosition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($docPosition['max'])) {
                $this->addUsingAlias(QbcSciCreditConstructDocPeer::DOC_POSITION, $docPosition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciCreditConstructDocPeer::DOC_POSITION, $docPosition, $comparison);
    }

    /**
     * Filter the query on the doc_value column
     *
     * Example usage:
     * <code>
     * $query->filterByDocValue(1234); // WHERE doc_value = 1234
     * $query->filterByDocValue(array(12, 34)); // WHERE doc_value IN (12, 34)
     * $query->filterByDocValue(array('min' => 12)); // WHERE doc_value >= 12
     * $query->filterByDocValue(array('max' => 12)); // WHERE doc_value <= 12
     * </code>
     *
     * @param     mixed $docValue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciCreditConstructDocQuery The current query, for fluid interface
     */
    public function filterByDocValue($docValue = null, $comparison = null)
    {
        if (is_array($docValue)) {
            $useMinMax = false;
            if (isset($docValue['min'])) {
                $this->addUsingAlias(QbcSciCreditConstructDocPeer::DOC_VALUE, $docValue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($docValue['max'])) {
                $this->addUsingAlias(QbcSciCreditConstructDocPeer::DOC_VALUE, $docValue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciCreditConstructDocPeer::DOC_VALUE, $docValue, $comparison);
    }

    /**
     * Filter the query on the doc_date column
     *
     * Example usage:
     * <code>
     * $query->filterByDocDate('fooValue');   // WHERE doc_date = 'fooValue'
     * $query->filterByDocDate('%fooValue%'); // WHERE doc_date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $docDate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciCreditConstructDocQuery The current query, for fluid interface
     */
    public function filterByDocDate($docDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docDate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $docDate)) {
                $docDate = str_replace('*', '%', $docDate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciCreditConstructDocPeer::DOC_DATE, $docDate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcSciCreditConstructDoc $qbcSciCreditConstructDoc Object to remove from the list of results
     *
     * @return QbcSciCreditConstructDocQuery The current query, for fluid interface
     */
    public function prune($qbcSciCreditConstructDoc = null)
    {
        if ($qbcSciCreditConstructDoc) {
            $this->addUsingAlias(QbcSciCreditConstructDocPeer::ID, $qbcSciCreditConstructDoc->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
