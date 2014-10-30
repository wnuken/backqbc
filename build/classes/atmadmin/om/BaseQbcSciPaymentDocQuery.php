<?php


/**
 * Base class that represents a query for the 'qbc_sci_payment_doc' table.
 *
 *
 *
 * @method QbcSciPaymentDocQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QbcSciPaymentDocQuery orderByPetitionId($order = Criteria::ASC) Order by the petition_id column
 * @method QbcSciPaymentDocQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method QbcSciPaymentDocQuery orderByDetail($order = Criteria::ASC) Order by the detail column
 * @method QbcSciPaymentDocQuery orderByRequestInvoiceNumber($order = Criteria::ASC) Order by the request_invoice_number column
 * @method QbcSciPaymentDocQuery orderByRequestInvoicePosition($order = Criteria::ASC) Order by the request_invoice_position column
 * @method QbcSciPaymentDocQuery orderByRequestInvoiceDate($order = Criteria::ASC) Order by the request_invoice_date column
 * @method QbcSciPaymentDocQuery orderByRequestInvoiceValue($order = Criteria::ASC) Order by the request_invoice_value column
 * @method QbcSciPaymentDocQuery orderByFinancialDocument($order = Criteria::ASC) Order by the financial_document column
 * @method QbcSciPaymentDocQuery orderByCommissionPaymentNumber($order = Criteria::ASC) Order by the commission_payment_number column
 * @method QbcSciPaymentDocQuery orderByCompensationNumber($order = Criteria::ASC) Order by the compensation_number column
 * @method QbcSciPaymentDocQuery orderByDocumentId($order = Criteria::ASC) Order by the document_id column
 * @method QbcSciPaymentDocQuery orderByDocPosition($order = Criteria::ASC) Order by the doc_position column
 * @method QbcSciPaymentDocQuery orderByDocValue($order = Criteria::ASC) Order by the doc_value column
 * @method QbcSciPaymentDocQuery orderByDocDate($order = Criteria::ASC) Order by the doc_date column
 *
 * @method QbcSciPaymentDocQuery groupById() Group by the id column
 * @method QbcSciPaymentDocQuery groupByPetitionId() Group by the petition_id column
 * @method QbcSciPaymentDocQuery groupByState() Group by the state column
 * @method QbcSciPaymentDocQuery groupByDetail() Group by the detail column
 * @method QbcSciPaymentDocQuery groupByRequestInvoiceNumber() Group by the request_invoice_number column
 * @method QbcSciPaymentDocQuery groupByRequestInvoicePosition() Group by the request_invoice_position column
 * @method QbcSciPaymentDocQuery groupByRequestInvoiceDate() Group by the request_invoice_date column
 * @method QbcSciPaymentDocQuery groupByRequestInvoiceValue() Group by the request_invoice_value column
 * @method QbcSciPaymentDocQuery groupByFinancialDocument() Group by the financial_document column
 * @method QbcSciPaymentDocQuery groupByCommissionPaymentNumber() Group by the commission_payment_number column
 * @method QbcSciPaymentDocQuery groupByCompensationNumber() Group by the compensation_number column
 * @method QbcSciPaymentDocQuery groupByDocumentId() Group by the document_id column
 * @method QbcSciPaymentDocQuery groupByDocPosition() Group by the doc_position column
 * @method QbcSciPaymentDocQuery groupByDocValue() Group by the doc_value column
 * @method QbcSciPaymentDocQuery groupByDocDate() Group by the doc_date column
 *
 * @method QbcSciPaymentDocQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSciPaymentDocQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSciPaymentDocQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSciPaymentDoc findOne(PropelPDO $con = null) Return the first QbcSciPaymentDoc matching the query
 * @method QbcSciPaymentDoc findOneOrCreate(PropelPDO $con = null) Return the first QbcSciPaymentDoc matching the query, or a new QbcSciPaymentDoc object populated from the query conditions when no match is found
 *
 * @method QbcSciPaymentDoc findOneByPetitionId(string $petition_id) Return the first QbcSciPaymentDoc filtered by the petition_id column
 * @method QbcSciPaymentDoc findOneByState(string $state) Return the first QbcSciPaymentDoc filtered by the state column
 * @method QbcSciPaymentDoc findOneByDetail(string $detail) Return the first QbcSciPaymentDoc filtered by the detail column
 * @method QbcSciPaymentDoc findOneByRequestInvoiceNumber(string $request_invoice_number) Return the first QbcSciPaymentDoc filtered by the request_invoice_number column
 * @method QbcSciPaymentDoc findOneByRequestInvoicePosition(int $request_invoice_position) Return the first QbcSciPaymentDoc filtered by the request_invoice_position column
 * @method QbcSciPaymentDoc findOneByRequestInvoiceDate(string $request_invoice_date) Return the first QbcSciPaymentDoc filtered by the request_invoice_date column
 * @method QbcSciPaymentDoc findOneByRequestInvoiceValue(string $request_invoice_value) Return the first QbcSciPaymentDoc filtered by the request_invoice_value column
 * @method QbcSciPaymentDoc findOneByFinancialDocument(string $financial_document) Return the first QbcSciPaymentDoc filtered by the financial_document column
 * @method QbcSciPaymentDoc findOneByCommissionPaymentNumber(string $commission_payment_number) Return the first QbcSciPaymentDoc filtered by the commission_payment_number column
 * @method QbcSciPaymentDoc findOneByCompensationNumber(string $compensation_number) Return the first QbcSciPaymentDoc filtered by the compensation_number column
 * @method QbcSciPaymentDoc findOneByDocumentId(string $document_id) Return the first QbcSciPaymentDoc filtered by the document_id column
 * @method QbcSciPaymentDoc findOneByDocPosition(int $doc_position) Return the first QbcSciPaymentDoc filtered by the doc_position column
 * @method QbcSciPaymentDoc findOneByDocValue(string $doc_value) Return the first QbcSciPaymentDoc filtered by the doc_value column
 * @method QbcSciPaymentDoc findOneByDocDate(string $doc_date) Return the first QbcSciPaymentDoc filtered by the doc_date column
 *
 * @method array findById(int $id) Return QbcSciPaymentDoc objects filtered by the id column
 * @method array findByPetitionId(string $petition_id) Return QbcSciPaymentDoc objects filtered by the petition_id column
 * @method array findByState(string $state) Return QbcSciPaymentDoc objects filtered by the state column
 * @method array findByDetail(string $detail) Return QbcSciPaymentDoc objects filtered by the detail column
 * @method array findByRequestInvoiceNumber(string $request_invoice_number) Return QbcSciPaymentDoc objects filtered by the request_invoice_number column
 * @method array findByRequestInvoicePosition(int $request_invoice_position) Return QbcSciPaymentDoc objects filtered by the request_invoice_position column
 * @method array findByRequestInvoiceDate(string $request_invoice_date) Return QbcSciPaymentDoc objects filtered by the request_invoice_date column
 * @method array findByRequestInvoiceValue(string $request_invoice_value) Return QbcSciPaymentDoc objects filtered by the request_invoice_value column
 * @method array findByFinancialDocument(string $financial_document) Return QbcSciPaymentDoc objects filtered by the financial_document column
 * @method array findByCommissionPaymentNumber(string $commission_payment_number) Return QbcSciPaymentDoc objects filtered by the commission_payment_number column
 * @method array findByCompensationNumber(string $compensation_number) Return QbcSciPaymentDoc objects filtered by the compensation_number column
 * @method array findByDocumentId(string $document_id) Return QbcSciPaymentDoc objects filtered by the document_id column
 * @method array findByDocPosition(int $doc_position) Return QbcSciPaymentDoc objects filtered by the doc_position column
 * @method array findByDocValue(string $doc_value) Return QbcSciPaymentDoc objects filtered by the doc_value column
 * @method array findByDocDate(string $doc_date) Return QbcSciPaymentDoc objects filtered by the doc_date column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciPaymentDocQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcSciPaymentDocQuery object.
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
            $modelName = 'QbcSciPaymentDoc';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcSciPaymentDocQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcSciPaymentDocQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcSciPaymentDocQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcSciPaymentDocQuery) {
            return $criteria;
        }
        $query = new QbcSciPaymentDocQuery(null, null, $modelAlias);

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
     * @return   QbcSciPaymentDoc|QbcSciPaymentDoc[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcSciPaymentDocPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcSciPaymentDocPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcSciPaymentDoc A model object, or null if the key is not found
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
     * @return                 QbcSciPaymentDoc A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, petition_id, state, detail, request_invoice_number, request_invoice_position, request_invoice_date, request_invoice_value, financial_document, commission_payment_number, compensation_number, document_id, doc_position, doc_value, doc_date FROM qbc_sci_payment_doc WHERE id = :p0';
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
            $obj = new QbcSciPaymentDoc();
            $obj->hydrate($row);
            QbcSciPaymentDocPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcSciPaymentDoc|QbcSciPaymentDoc[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcSciPaymentDoc[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcSciPaymentDocQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcSciPaymentDocPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcSciPaymentDocQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcSciPaymentDocPeer::ID, $keys, Criteria::IN);
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
     * @return QbcSciPaymentDocQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcSciPaymentDocPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcSciPaymentDocPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentDocPeer::ID, $id, $comparison);
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
     * @return QbcSciPaymentDocQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciPaymentDocPeer::PETITION_ID, $petitionId, $comparison);
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
     * @return QbcSciPaymentDocQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciPaymentDocPeer::STATE, $state, $comparison);
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
     * @return QbcSciPaymentDocQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciPaymentDocPeer::DETAIL, $detail, $comparison);
    }

    /**
     * Filter the query on the request_invoice_number column
     *
     * Example usage:
     * <code>
     * $query->filterByRequestInvoiceNumber('fooValue');   // WHERE request_invoice_number = 'fooValue'
     * $query->filterByRequestInvoiceNumber('%fooValue%'); // WHERE request_invoice_number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $requestInvoiceNumber The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciPaymentDocQuery The current query, for fluid interface
     */
    public function filterByRequestInvoiceNumber($requestInvoiceNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($requestInvoiceNumber)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $requestInvoiceNumber)) {
                $requestInvoiceNumber = str_replace('*', '%', $requestInvoiceNumber);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentDocPeer::REQUEST_INVOICE_NUMBER, $requestInvoiceNumber, $comparison);
    }

    /**
     * Filter the query on the request_invoice_position column
     *
     * Example usage:
     * <code>
     * $query->filterByRequestInvoicePosition(1234); // WHERE request_invoice_position = 1234
     * $query->filterByRequestInvoicePosition(array(12, 34)); // WHERE request_invoice_position IN (12, 34)
     * $query->filterByRequestInvoicePosition(array('min' => 12)); // WHERE request_invoice_position >= 12
     * $query->filterByRequestInvoicePosition(array('max' => 12)); // WHERE request_invoice_position <= 12
     * </code>
     *
     * @param     mixed $requestInvoicePosition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciPaymentDocQuery The current query, for fluid interface
     */
    public function filterByRequestInvoicePosition($requestInvoicePosition = null, $comparison = null)
    {
        if (is_array($requestInvoicePosition)) {
            $useMinMax = false;
            if (isset($requestInvoicePosition['min'])) {
                $this->addUsingAlias(QbcSciPaymentDocPeer::REQUEST_INVOICE_POSITION, $requestInvoicePosition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($requestInvoicePosition['max'])) {
                $this->addUsingAlias(QbcSciPaymentDocPeer::REQUEST_INVOICE_POSITION, $requestInvoicePosition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentDocPeer::REQUEST_INVOICE_POSITION, $requestInvoicePosition, $comparison);
    }

    /**
     * Filter the query on the request_invoice_date column
     *
     * Example usage:
     * <code>
     * $query->filterByRequestInvoiceDate('fooValue');   // WHERE request_invoice_date = 'fooValue'
     * $query->filterByRequestInvoiceDate('%fooValue%'); // WHERE request_invoice_date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $requestInvoiceDate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciPaymentDocQuery The current query, for fluid interface
     */
    public function filterByRequestInvoiceDate($requestInvoiceDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($requestInvoiceDate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $requestInvoiceDate)) {
                $requestInvoiceDate = str_replace('*', '%', $requestInvoiceDate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentDocPeer::REQUEST_INVOICE_DATE, $requestInvoiceDate, $comparison);
    }

    /**
     * Filter the query on the request_invoice_value column
     *
     * Example usage:
     * <code>
     * $query->filterByRequestInvoiceValue(1234); // WHERE request_invoice_value = 1234
     * $query->filterByRequestInvoiceValue(array(12, 34)); // WHERE request_invoice_value IN (12, 34)
     * $query->filterByRequestInvoiceValue(array('min' => 12)); // WHERE request_invoice_value >= 12
     * $query->filterByRequestInvoiceValue(array('max' => 12)); // WHERE request_invoice_value <= 12
     * </code>
     *
     * @param     mixed $requestInvoiceValue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciPaymentDocQuery The current query, for fluid interface
     */
    public function filterByRequestInvoiceValue($requestInvoiceValue = null, $comparison = null)
    {
        if (is_array($requestInvoiceValue)) {
            $useMinMax = false;
            if (isset($requestInvoiceValue['min'])) {
                $this->addUsingAlias(QbcSciPaymentDocPeer::REQUEST_INVOICE_VALUE, $requestInvoiceValue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($requestInvoiceValue['max'])) {
                $this->addUsingAlias(QbcSciPaymentDocPeer::REQUEST_INVOICE_VALUE, $requestInvoiceValue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentDocPeer::REQUEST_INVOICE_VALUE, $requestInvoiceValue, $comparison);
    }

    /**
     * Filter the query on the financial_document column
     *
     * Example usage:
     * <code>
     * $query->filterByFinancialDocument('fooValue');   // WHERE financial_document = 'fooValue'
     * $query->filterByFinancialDocument('%fooValue%'); // WHERE financial_document LIKE '%fooValue%'
     * </code>
     *
     * @param     string $financialDocument The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciPaymentDocQuery The current query, for fluid interface
     */
    public function filterByFinancialDocument($financialDocument = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($financialDocument)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $financialDocument)) {
                $financialDocument = str_replace('*', '%', $financialDocument);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentDocPeer::FINANCIAL_DOCUMENT, $financialDocument, $comparison);
    }

    /**
     * Filter the query on the commission_payment_number column
     *
     * Example usage:
     * <code>
     * $query->filterByCommissionPaymentNumber('fooValue');   // WHERE commission_payment_number = 'fooValue'
     * $query->filterByCommissionPaymentNumber('%fooValue%'); // WHERE commission_payment_number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commissionPaymentNumber The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciPaymentDocQuery The current query, for fluid interface
     */
    public function filterByCommissionPaymentNumber($commissionPaymentNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commissionPaymentNumber)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commissionPaymentNumber)) {
                $commissionPaymentNumber = str_replace('*', '%', $commissionPaymentNumber);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentDocPeer::COMMISSION_PAYMENT_NUMBER, $commissionPaymentNumber, $comparison);
    }

    /**
     * Filter the query on the compensation_number column
     *
     * Example usage:
     * <code>
     * $query->filterByCompensationNumber('fooValue');   // WHERE compensation_number = 'fooValue'
     * $query->filterByCompensationNumber('%fooValue%'); // WHERE compensation_number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compensationNumber The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciPaymentDocQuery The current query, for fluid interface
     */
    public function filterByCompensationNumber($compensationNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compensationNumber)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compensationNumber)) {
                $compensationNumber = str_replace('*', '%', $compensationNumber);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentDocPeer::COMPENSATION_NUMBER, $compensationNumber, $comparison);
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
     * @return QbcSciPaymentDocQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciPaymentDocPeer::DOCUMENT_ID, $documentId, $comparison);
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
     * @return QbcSciPaymentDocQuery The current query, for fluid interface
     */
    public function filterByDocPosition($docPosition = null, $comparison = null)
    {
        if (is_array($docPosition)) {
            $useMinMax = false;
            if (isset($docPosition['min'])) {
                $this->addUsingAlias(QbcSciPaymentDocPeer::DOC_POSITION, $docPosition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($docPosition['max'])) {
                $this->addUsingAlias(QbcSciPaymentDocPeer::DOC_POSITION, $docPosition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentDocPeer::DOC_POSITION, $docPosition, $comparison);
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
     * @return QbcSciPaymentDocQuery The current query, for fluid interface
     */
    public function filterByDocValue($docValue = null, $comparison = null)
    {
        if (is_array($docValue)) {
            $useMinMax = false;
            if (isset($docValue['min'])) {
                $this->addUsingAlias(QbcSciPaymentDocPeer::DOC_VALUE, $docValue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($docValue['max'])) {
                $this->addUsingAlias(QbcSciPaymentDocPeer::DOC_VALUE, $docValue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciPaymentDocPeer::DOC_VALUE, $docValue, $comparison);
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
     * @return QbcSciPaymentDocQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciPaymentDocPeer::DOC_DATE, $docDate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcSciPaymentDoc $qbcSciPaymentDoc Object to remove from the list of results
     *
     * @return QbcSciPaymentDocQuery The current query, for fluid interface
     */
    public function prune($qbcSciPaymentDoc = null)
    {
        if ($qbcSciPaymentDoc) {
            $this->addUsingAlias(QbcSciPaymentDocPeer::ID, $qbcSciPaymentDoc->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
