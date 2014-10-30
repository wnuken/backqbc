<?php


/**
 * Base class that represents a query for the 'pagosonline_response' table.
 *
 *
 *
 * @method PagosonlineResponseQuery orderByResponseId($order = Criteria::ASC) Order by the response_id column
 * @method PagosonlineResponseQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method PagosonlineResponseQuery orderByLabel($order = Criteria::ASC) Order by the label column
 *
 * @method PagosonlineResponseQuery groupByResponseId() Group by the response_id column
 * @method PagosonlineResponseQuery groupByCode() Group by the code column
 * @method PagosonlineResponseQuery groupByLabel() Group by the label column
 *
 * @method PagosonlineResponseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PagosonlineResponseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PagosonlineResponseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PagosonlineResponse findOne(PropelPDO $con = null) Return the first PagosonlineResponse matching the query
 * @method PagosonlineResponse findOneOrCreate(PropelPDO $con = null) Return the first PagosonlineResponse matching the query, or a new PagosonlineResponse object populated from the query conditions when no match is found
 *
 * @method PagosonlineResponse findOneByCode(int $code) Return the first PagosonlineResponse filtered by the code column
 * @method PagosonlineResponse findOneByLabel(string $label) Return the first PagosonlineResponse filtered by the label column
 *
 * @method array findByResponseId(int $response_id) Return PagosonlineResponse objects filtered by the response_id column
 * @method array findByCode(int $code) Return PagosonlineResponse objects filtered by the code column
 * @method array findByLabel(string $label) Return PagosonlineResponse objects filtered by the label column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BasePagosonlineResponseQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePagosonlineResponseQuery object.
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
            $modelName = 'PagosonlineResponse';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PagosonlineResponseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PagosonlineResponseQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PagosonlineResponseQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PagosonlineResponseQuery) {
            return $criteria;
        }
        $query = new PagosonlineResponseQuery(null, null, $modelAlias);

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
     * @return   PagosonlineResponse|PagosonlineResponse[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PagosonlineResponsePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PagosonlineResponsePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PagosonlineResponse A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByResponseId($key, $con = null)
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
     * @return                 PagosonlineResponse A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT response_id, code, label FROM pagosonline_response WHERE response_id = :p0';
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
            $obj = new PagosonlineResponse();
            $obj->hydrate($row);
            PagosonlineResponsePeer::addInstanceToPool($obj, (string) $key);
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
     * @return PagosonlineResponse|PagosonlineResponse[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PagosonlineResponse[]|mixed the list of results, formatted by the current formatter
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
     * @return PagosonlineResponseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PagosonlineResponsePeer::RESPONSE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PagosonlineResponseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PagosonlineResponsePeer::RESPONSE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the response_id column
     *
     * Example usage:
     * <code>
     * $query->filterByResponseId(1234); // WHERE response_id = 1234
     * $query->filterByResponseId(array(12, 34)); // WHERE response_id IN (12, 34)
     * $query->filterByResponseId(array('min' => 12)); // WHERE response_id >= 12
     * $query->filterByResponseId(array('max' => 12)); // WHERE response_id <= 12
     * </code>
     *
     * @param     mixed $responseId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineResponseQuery The current query, for fluid interface
     */
    public function filterByResponseId($responseId = null, $comparison = null)
    {
        if (is_array($responseId)) {
            $useMinMax = false;
            if (isset($responseId['min'])) {
                $this->addUsingAlias(PagosonlineResponsePeer::RESPONSE_ID, $responseId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($responseId['max'])) {
                $this->addUsingAlias(PagosonlineResponsePeer::RESPONSE_ID, $responseId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlineResponsePeer::RESPONSE_ID, $responseId, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode(1234); // WHERE code = 1234
     * $query->filterByCode(array(12, 34)); // WHERE code IN (12, 34)
     * $query->filterByCode(array('min' => 12)); // WHERE code >= 12
     * $query->filterByCode(array('max' => 12)); // WHERE code <= 12
     * </code>
     *
     * @param     mixed $code The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineResponseQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (is_array($code)) {
            $useMinMax = false;
            if (isset($code['min'])) {
                $this->addUsingAlias(PagosonlineResponsePeer::CODE, $code['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($code['max'])) {
                $this->addUsingAlias(PagosonlineResponsePeer::CODE, $code['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagosonlineResponsePeer::CODE, $code, $comparison);
    }

    /**
     * Filter the query on the label column
     *
     * Example usage:
     * <code>
     * $query->filterByLabel('fooValue');   // WHERE label = 'fooValue'
     * $query->filterByLabel('%fooValue%'); // WHERE label LIKE '%fooValue%'
     * </code>
     *
     * @param     string $label The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagosonlineResponseQuery The current query, for fluid interface
     */
    public function filterByLabel($label = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($label)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $label)) {
                $label = str_replace('*', '%', $label);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagosonlineResponsePeer::LABEL, $label, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PagosonlineResponse $pagosonlineResponse Object to remove from the list of results
     *
     * @return PagosonlineResponseQuery The current query, for fluid interface
     */
    public function prune($pagosonlineResponse = null)
    {
        if ($pagosonlineResponse) {
            $this->addUsingAlias(PagosonlineResponsePeer::RESPONSE_ID, $pagosonlineResponse->getResponseId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
