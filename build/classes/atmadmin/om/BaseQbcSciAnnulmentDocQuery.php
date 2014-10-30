<?php


/**
 * Base class that represents a query for the 'qbc_sci_annulment_doc' table.
 *
 *
 *
 * @method QbcSciAnnulmentDocQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QbcSciAnnulmentDocQuery orderByPetitionId($order = Criteria::ASC) Order by the petition_id column
 * @method QbcSciAnnulmentDocQuery orderByDetail($order = Criteria::ASC) Order by the detail column
 * @method QbcSciAnnulmentDocQuery orderByState($order = Criteria::ASC) Order by the state column
 *
 * @method QbcSciAnnulmentDocQuery groupById() Group by the id column
 * @method QbcSciAnnulmentDocQuery groupByPetitionId() Group by the petition_id column
 * @method QbcSciAnnulmentDocQuery groupByDetail() Group by the detail column
 * @method QbcSciAnnulmentDocQuery groupByState() Group by the state column
 *
 * @method QbcSciAnnulmentDocQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSciAnnulmentDocQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSciAnnulmentDocQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSciAnnulmentDoc findOne(PropelPDO $con = null) Return the first QbcSciAnnulmentDoc matching the query
 * @method QbcSciAnnulmentDoc findOneOrCreate(PropelPDO $con = null) Return the first QbcSciAnnulmentDoc matching the query, or a new QbcSciAnnulmentDoc object populated from the query conditions when no match is found
 *
 * @method QbcSciAnnulmentDoc findOneByPetitionId(string $petition_id) Return the first QbcSciAnnulmentDoc filtered by the petition_id column
 * @method QbcSciAnnulmentDoc findOneByDetail(string $detail) Return the first QbcSciAnnulmentDoc filtered by the detail column
 * @method QbcSciAnnulmentDoc findOneByState(string $state) Return the first QbcSciAnnulmentDoc filtered by the state column
 *
 * @method array findById(int $id) Return QbcSciAnnulmentDoc objects filtered by the id column
 * @method array findByPetitionId(string $petition_id) Return QbcSciAnnulmentDoc objects filtered by the petition_id column
 * @method array findByDetail(string $detail) Return QbcSciAnnulmentDoc objects filtered by the detail column
 * @method array findByState(string $state) Return QbcSciAnnulmentDoc objects filtered by the state column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciAnnulmentDocQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcSciAnnulmentDocQuery object.
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
            $modelName = 'QbcSciAnnulmentDoc';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcSciAnnulmentDocQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcSciAnnulmentDocQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcSciAnnulmentDocQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcSciAnnulmentDocQuery) {
            return $criteria;
        }
        $query = new QbcSciAnnulmentDocQuery(null, null, $modelAlias);

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
     * @return   QbcSciAnnulmentDoc|QbcSciAnnulmentDoc[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcSciAnnulmentDocPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcSciAnnulmentDocPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcSciAnnulmentDoc A model object, or null if the key is not found
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
     * @return                 QbcSciAnnulmentDoc A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, petition_id, detail, state FROM qbc_sci_annulment_doc WHERE id = :p0';
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
            $obj = new QbcSciAnnulmentDoc();
            $obj->hydrate($row);
            QbcSciAnnulmentDocPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcSciAnnulmentDoc|QbcSciAnnulmentDoc[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcSciAnnulmentDoc[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcSciAnnulmentDocQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcSciAnnulmentDocPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcSciAnnulmentDocQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcSciAnnulmentDocPeer::ID, $keys, Criteria::IN);
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
     * @return QbcSciAnnulmentDocQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcSciAnnulmentDocPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcSciAnnulmentDocPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciAnnulmentDocPeer::ID, $id, $comparison);
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
     * @return QbcSciAnnulmentDocQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciAnnulmentDocPeer::PETITION_ID, $petitionId, $comparison);
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
     * @return QbcSciAnnulmentDocQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciAnnulmentDocPeer::DETAIL, $detail, $comparison);
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
     * @return QbcSciAnnulmentDocQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciAnnulmentDocPeer::STATE, $state, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcSciAnnulmentDoc $qbcSciAnnulmentDoc Object to remove from the list of results
     *
     * @return QbcSciAnnulmentDocQuery The current query, for fluid interface
     */
    public function prune($qbcSciAnnulmentDoc = null)
    {
        if ($qbcSciAnnulmentDoc) {
            $this->addUsingAlias(QbcSciAnnulmentDocPeer::ID, $qbcSciAnnulmentDoc->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
