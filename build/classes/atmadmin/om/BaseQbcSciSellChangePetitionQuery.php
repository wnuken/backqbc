<?php


/**
 * Base class that represents a query for the 'qbc_sci_sell_change_petition' table.
 *
 *
 *
 * @method QbcSciSellChangePetitionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QbcSciSellChangePetitionQuery orderByPeticionOld($order = Criteria::ASC) Order by the peticion_old column
 * @method QbcSciSellChangePetitionQuery orderByPeticionNew($order = Criteria::ASC) Order by the peticion_new column
 *
 * @method QbcSciSellChangePetitionQuery groupById() Group by the id column
 * @method QbcSciSellChangePetitionQuery groupByPeticionOld() Group by the peticion_old column
 * @method QbcSciSellChangePetitionQuery groupByPeticionNew() Group by the peticion_new column
 *
 * @method QbcSciSellChangePetitionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSciSellChangePetitionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSciSellChangePetitionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSciSellChangePetition findOne(PropelPDO $con = null) Return the first QbcSciSellChangePetition matching the query
 * @method QbcSciSellChangePetition findOneOrCreate(PropelPDO $con = null) Return the first QbcSciSellChangePetition matching the query, or a new QbcSciSellChangePetition object populated from the query conditions when no match is found
 *
 * @method QbcSciSellChangePetition findOneByPeticionOld(string $peticion_old) Return the first QbcSciSellChangePetition filtered by the peticion_old column
 * @method QbcSciSellChangePetition findOneByPeticionNew(string $peticion_new) Return the first QbcSciSellChangePetition filtered by the peticion_new column
 *
 * @method array findById(int $id) Return QbcSciSellChangePetition objects filtered by the id column
 * @method array findByPeticionOld(string $peticion_old) Return QbcSciSellChangePetition objects filtered by the peticion_old column
 * @method array findByPeticionNew(string $peticion_new) Return QbcSciSellChangePetition objects filtered by the peticion_new column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciSellChangePetitionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcSciSellChangePetitionQuery object.
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
            $modelName = 'QbcSciSellChangePetition';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcSciSellChangePetitionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcSciSellChangePetitionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcSciSellChangePetitionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcSciSellChangePetitionQuery) {
            return $criteria;
        }
        $query = new QbcSciSellChangePetitionQuery(null, null, $modelAlias);

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
     * @return   QbcSciSellChangePetition|QbcSciSellChangePetition[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcSciSellChangePetitionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcSciSellChangePetitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcSciSellChangePetition A model object, or null if the key is not found
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
     * @return                 QbcSciSellChangePetition A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, peticion_old, peticion_new FROM qbc_sci_sell_change_petition WHERE id = :p0';
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
            $obj = new QbcSciSellChangePetition();
            $obj->hydrate($row);
            QbcSciSellChangePetitionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcSciSellChangePetition|QbcSciSellChangePetition[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcSciSellChangePetition[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcSciSellChangePetitionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcSciSellChangePetitionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcSciSellChangePetitionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcSciSellChangePetitionPeer::ID, $keys, Criteria::IN);
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
     * @return QbcSciSellChangePetitionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcSciSellChangePetitionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcSciSellChangePetitionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciSellChangePetitionPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the peticion_old column
     *
     * Example usage:
     * <code>
     * $query->filterByPeticionOld('fooValue');   // WHERE peticion_old = 'fooValue'
     * $query->filterByPeticionOld('%fooValue%'); // WHERE peticion_old LIKE '%fooValue%'
     * </code>
     *
     * @param     string $peticionOld The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciSellChangePetitionQuery The current query, for fluid interface
     */
    public function filterByPeticionOld($peticionOld = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($peticionOld)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $peticionOld)) {
                $peticionOld = str_replace('*', '%', $peticionOld);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciSellChangePetitionPeer::PETICION_OLD, $peticionOld, $comparison);
    }

    /**
     * Filter the query on the peticion_new column
     *
     * Example usage:
     * <code>
     * $query->filterByPeticionNew('fooValue');   // WHERE peticion_new = 'fooValue'
     * $query->filterByPeticionNew('%fooValue%'); // WHERE peticion_new LIKE '%fooValue%'
     * </code>
     *
     * @param     string $peticionNew The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciSellChangePetitionQuery The current query, for fluid interface
     */
    public function filterByPeticionNew($peticionNew = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($peticionNew)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $peticionNew)) {
                $peticionNew = str_replace('*', '%', $peticionNew);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciSellChangePetitionPeer::PETICION_NEW, $peticionNew, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcSciSellChangePetition $qbcSciSellChangePetition Object to remove from the list of results
     *
     * @return QbcSciSellChangePetitionQuery The current query, for fluid interface
     */
    public function prune($qbcSciSellChangePetition = null)
    {
        if ($qbcSciSellChangePetition) {
            $this->addUsingAlias(QbcSciSellChangePetitionPeer::ID, $qbcSciSellChangePetition->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
