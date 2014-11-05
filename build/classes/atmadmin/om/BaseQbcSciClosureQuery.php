<?php


/**
 * Base class that represents a query for the 'qbc_sci_closure' table.
 *
 *
 *
 * @method QbcSciClosureQuery orderById($order = Criteria::ASC) Order by the Id column
 * @method QbcSciClosureQuery orderByNitaliado($order = Criteria::ASC) Order by the NitAliado column
 * @method QbcSciClosureQuery orderByCampanaid($order = Criteria::ASC) Order by the CampanaId column
 * @method QbcSciClosureQuery orderByVenta($order = Criteria::ASC) Order by the Venta column
 * @method QbcSciClosureQuery orderByFechav($order = Criteria::ASC) Order by the FechaV column
 * @method QbcSciClosureQuery orderByValorv($order = Criteria::ASC) Order by the ValorV column
 * @method QbcSciClosureQuery orderByDevolucion($order = Criteria::ASC) Order by the Devolucion column
 * @method QbcSciClosureQuery orderByFechad($order = Criteria::ASC) Order by the FechaD column
 * @method QbcSciClosureQuery orderByValord($order = Criteria::ASC) Order by the ValorD column
 * @method QbcSciClosureQuery orderByPagoaliado($order = Criteria::ASC) Order by the PagoAliado column
 * @method QbcSciClosureQuery orderByPorcentajecomision($order = Criteria::ASC) Order by the PorcentajeComision column
 * @method QbcSciClosureQuery orderByPorcentajeivacomision($order = Criteria::ASC) Order by the PorcentajeIVAComision column
 *
 * @method QbcSciClosureQuery groupById() Group by the Id column
 * @method QbcSciClosureQuery groupByNitaliado() Group by the NitAliado column
 * @method QbcSciClosureQuery groupByCampanaid() Group by the CampanaId column
 * @method QbcSciClosureQuery groupByVenta() Group by the Venta column
 * @method QbcSciClosureQuery groupByFechav() Group by the FechaV column
 * @method QbcSciClosureQuery groupByValorv() Group by the ValorV column
 * @method QbcSciClosureQuery groupByDevolucion() Group by the Devolucion column
 * @method QbcSciClosureQuery groupByFechad() Group by the FechaD column
 * @method QbcSciClosureQuery groupByValord() Group by the ValorD column
 * @method QbcSciClosureQuery groupByPagoaliado() Group by the PagoAliado column
 * @method QbcSciClosureQuery groupByPorcentajecomision() Group by the PorcentajeComision column
 * @method QbcSciClosureQuery groupByPorcentajeivacomision() Group by the PorcentajeIVAComision column
 *
 * @method QbcSciClosureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSciClosureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSciClosureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSciClosure findOne(PropelPDO $con = null) Return the first QbcSciClosure matching the query
 * @method QbcSciClosure findOneOrCreate(PropelPDO $con = null) Return the first QbcSciClosure matching the query, or a new QbcSciClosure object populated from the query conditions when no match is found
 *
 * @method QbcSciClosure findOneByNitaliado(string $NitAliado) Return the first QbcSciClosure filtered by the NitAliado column
 * @method QbcSciClosure findOneByCampanaid(string $CampanaId) Return the first QbcSciClosure filtered by the CampanaId column
 * @method QbcSciClosure findOneByVenta(string $Venta) Return the first QbcSciClosure filtered by the Venta column
 * @method QbcSciClosure findOneByFechav(string $FechaV) Return the first QbcSciClosure filtered by the FechaV column
 * @method QbcSciClosure findOneByValorv(string $ValorV) Return the first QbcSciClosure filtered by the ValorV column
 * @method QbcSciClosure findOneByDevolucion(string $Devolucion) Return the first QbcSciClosure filtered by the Devolucion column
 * @method QbcSciClosure findOneByFechad(string $FechaD) Return the first QbcSciClosure filtered by the FechaD column
 * @method QbcSciClosure findOneByValord(string $ValorD) Return the first QbcSciClosure filtered by the ValorD column
 * @method QbcSciClosure findOneByPagoaliado(string $PagoAliado) Return the first QbcSciClosure filtered by the PagoAliado column
 * @method QbcSciClosure findOneByPorcentajecomision(string $PorcentajeComision) Return the first QbcSciClosure filtered by the PorcentajeComision column
 * @method QbcSciClosure findOneByPorcentajeivacomision(string $PorcentajeIVAComision) Return the first QbcSciClosure filtered by the PorcentajeIVAComision column
 *
 * @method array findById(int $Id) Return QbcSciClosure objects filtered by the Id column
 * @method array findByNitaliado(string $NitAliado) Return QbcSciClosure objects filtered by the NitAliado column
 * @method array findByCampanaid(string $CampanaId) Return QbcSciClosure objects filtered by the CampanaId column
 * @method array findByVenta(string $Venta) Return QbcSciClosure objects filtered by the Venta column
 * @method array findByFechav(string $FechaV) Return QbcSciClosure objects filtered by the FechaV column
 * @method array findByValorv(string $ValorV) Return QbcSciClosure objects filtered by the ValorV column
 * @method array findByDevolucion(string $Devolucion) Return QbcSciClosure objects filtered by the Devolucion column
 * @method array findByFechad(string $FechaD) Return QbcSciClosure objects filtered by the FechaD column
 * @method array findByValord(string $ValorD) Return QbcSciClosure objects filtered by the ValorD column
 * @method array findByPagoaliado(string $PagoAliado) Return QbcSciClosure objects filtered by the PagoAliado column
 * @method array findByPorcentajecomision(string $PorcentajeComision) Return QbcSciClosure objects filtered by the PorcentajeComision column
 * @method array findByPorcentajeivacomision(string $PorcentajeIVAComision) Return QbcSciClosure objects filtered by the PorcentajeIVAComision column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciClosureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcSciClosureQuery object.
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
            $modelName = 'QbcSciClosure';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcSciClosureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcSciClosureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcSciClosureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcSciClosureQuery) {
            return $criteria;
        }
        $query = new QbcSciClosureQuery(null, null, $modelAlias);

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
     * @return   QbcSciClosure|QbcSciClosure[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcSciClosurePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcSciClosurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcSciClosure A model object, or null if the key is not found
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
     * @return                 QbcSciClosure A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT Id, NitAliado, CampanaId, Venta, FechaV, ValorV, Devolucion, FechaD, ValorD, PagoAliado, PorcentajeComision, PorcentajeIVAComision FROM qbc_sci_closure WHERE Id = :p0';
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
            $obj = new QbcSciClosure();
            $obj->hydrate($row);
            QbcSciClosurePeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcSciClosure|QbcSciClosure[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcSciClosure[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcSciClosurePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcSciClosurePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE Id = 1234
     * $query->filterById(array(12, 34)); // WHERE Id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE Id >= 12
     * $query->filterById(array('max' => 12)); // WHERE Id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcSciClosurePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcSciClosurePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the NitAliado column
     *
     * Example usage:
     * <code>
     * $query->filterByNitaliado('fooValue');   // WHERE NitAliado = 'fooValue'
     * $query->filterByNitaliado('%fooValue%'); // WHERE NitAliado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nitaliado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByNitaliado($nitaliado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nitaliado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nitaliado)) {
                $nitaliado = str_replace('*', '%', $nitaliado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::NITALIADO, $nitaliado, $comparison);
    }

    /**
     * Filter the query on the CampanaId column
     *
     * Example usage:
     * <code>
     * $query->filterByCampanaid('fooValue');   // WHERE CampanaId = 'fooValue'
     * $query->filterByCampanaid('%fooValue%'); // WHERE CampanaId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $campanaid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByCampanaid($campanaid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($campanaid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $campanaid)) {
                $campanaid = str_replace('*', '%', $campanaid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::CAMPANAID, $campanaid, $comparison);
    }

    /**
     * Filter the query on the Venta column
     *
     * Example usage:
     * <code>
     * $query->filterByVenta('fooValue');   // WHERE Venta = 'fooValue'
     * $query->filterByVenta('%fooValue%'); // WHERE Venta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $venta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByVenta($venta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($venta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $venta)) {
                $venta = str_replace('*', '%', $venta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::VENTA, $venta, $comparison);
    }

    /**
     * Filter the query on the FechaV column
     *
     * Example usage:
     * <code>
     * $query->filterByFechav('2011-03-14'); // WHERE FechaV = '2011-03-14'
     * $query->filterByFechav('now'); // WHERE FechaV = '2011-03-14'
     * $query->filterByFechav(array('max' => 'yesterday')); // WHERE FechaV < '2011-03-13'
     * </code>
     *
     * @param     mixed $fechav The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByFechav($fechav = null, $comparison = null)
    {
        if (is_array($fechav)) {
            $useMinMax = false;
            if (isset($fechav['min'])) {
                $this->addUsingAlias(QbcSciClosurePeer::FECHAV, $fechav['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechav['max'])) {
                $this->addUsingAlias(QbcSciClosurePeer::FECHAV, $fechav['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::FECHAV, $fechav, $comparison);
    }

    /**
     * Filter the query on the ValorV column
     *
     * Example usage:
     * <code>
     * $query->filterByValorv(1234); // WHERE ValorV = 1234
     * $query->filterByValorv(array(12, 34)); // WHERE ValorV IN (12, 34)
     * $query->filterByValorv(array('min' => 12)); // WHERE ValorV >= 12
     * $query->filterByValorv(array('max' => 12)); // WHERE ValorV <= 12
     * </code>
     *
     * @param     mixed $valorv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByValorv($valorv = null, $comparison = null)
    {
        if (is_array($valorv)) {
            $useMinMax = false;
            if (isset($valorv['min'])) {
                $this->addUsingAlias(QbcSciClosurePeer::VALORV, $valorv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valorv['max'])) {
                $this->addUsingAlias(QbcSciClosurePeer::VALORV, $valorv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::VALORV, $valorv, $comparison);
    }

    /**
     * Filter the query on the Devolucion column
     *
     * Example usage:
     * <code>
     * $query->filterByDevolucion('fooValue');   // WHERE Devolucion = 'fooValue'
     * $query->filterByDevolucion('%fooValue%'); // WHERE Devolucion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $devolucion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByDevolucion($devolucion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($devolucion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $devolucion)) {
                $devolucion = str_replace('*', '%', $devolucion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::DEVOLUCION, $devolucion, $comparison);
    }

    /**
     * Filter the query on the FechaD column
     *
     * Example usage:
     * <code>
     * $query->filterByFechad('2011-03-14'); // WHERE FechaD = '2011-03-14'
     * $query->filterByFechad('now'); // WHERE FechaD = '2011-03-14'
     * $query->filterByFechad(array('max' => 'yesterday')); // WHERE FechaD < '2011-03-13'
     * </code>
     *
     * @param     mixed $fechad The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByFechad($fechad = null, $comparison = null)
    {
        if (is_array($fechad)) {
            $useMinMax = false;
            if (isset($fechad['min'])) {
                $this->addUsingAlias(QbcSciClosurePeer::FECHAD, $fechad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechad['max'])) {
                $this->addUsingAlias(QbcSciClosurePeer::FECHAD, $fechad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::FECHAD, $fechad, $comparison);
    }

    /**
     * Filter the query on the ValorD column
     *
     * Example usage:
     * <code>
     * $query->filterByValord(1234); // WHERE ValorD = 1234
     * $query->filterByValord(array(12, 34)); // WHERE ValorD IN (12, 34)
     * $query->filterByValord(array('min' => 12)); // WHERE ValorD >= 12
     * $query->filterByValord(array('max' => 12)); // WHERE ValorD <= 12
     * </code>
     *
     * @param     mixed $valord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByValord($valord = null, $comparison = null)
    {
        if (is_array($valord)) {
            $useMinMax = false;
            if (isset($valord['min'])) {
                $this->addUsingAlias(QbcSciClosurePeer::VALORD, $valord['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valord['max'])) {
                $this->addUsingAlias(QbcSciClosurePeer::VALORD, $valord['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::VALORD, $valord, $comparison);
    }

    /**
     * Filter the query on the PagoAliado column
     *
     * Example usage:
     * <code>
     * $query->filterByPagoaliado('fooValue');   // WHERE PagoAliado = 'fooValue'
     * $query->filterByPagoaliado('%fooValue%'); // WHERE PagoAliado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pagoaliado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByPagoaliado($pagoaliado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pagoaliado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pagoaliado)) {
                $pagoaliado = str_replace('*', '%', $pagoaliado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::PAGOALIADO, $pagoaliado, $comparison);
    }

    /**
     * Filter the query on the PorcentajeComision column
     *
     * Example usage:
     * <code>
     * $query->filterByPorcentajecomision(1234); // WHERE PorcentajeComision = 1234
     * $query->filterByPorcentajecomision(array(12, 34)); // WHERE PorcentajeComision IN (12, 34)
     * $query->filterByPorcentajecomision(array('min' => 12)); // WHERE PorcentajeComision >= 12
     * $query->filterByPorcentajecomision(array('max' => 12)); // WHERE PorcentajeComision <= 12
     * </code>
     *
     * @param     mixed $porcentajecomision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByPorcentajecomision($porcentajecomision = null, $comparison = null)
    {
        if (is_array($porcentajecomision)) {
            $useMinMax = false;
            if (isset($porcentajecomision['min'])) {
                $this->addUsingAlias(QbcSciClosurePeer::PORCENTAJECOMISION, $porcentajecomision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($porcentajecomision['max'])) {
                $this->addUsingAlias(QbcSciClosurePeer::PORCENTAJECOMISION, $porcentajecomision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::PORCENTAJECOMISION, $porcentajecomision, $comparison);
    }

    /**
     * Filter the query on the PorcentajeIVAComision column
     *
     * Example usage:
     * <code>
     * $query->filterByPorcentajeivacomision(1234); // WHERE PorcentajeIVAComision = 1234
     * $query->filterByPorcentajeivacomision(array(12, 34)); // WHERE PorcentajeIVAComision IN (12, 34)
     * $query->filterByPorcentajeivacomision(array('min' => 12)); // WHERE PorcentajeIVAComision >= 12
     * $query->filterByPorcentajeivacomision(array('max' => 12)); // WHERE PorcentajeIVAComision <= 12
     * </code>
     *
     * @param     mixed $porcentajeivacomision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByPorcentajeivacomision($porcentajeivacomision = null, $comparison = null)
    {
        if (is_array($porcentajeivacomision)) {
            $useMinMax = false;
            if (isset($porcentajeivacomision['min'])) {
                $this->addUsingAlias(QbcSciClosurePeer::PORCENTAJEIVACOMISION, $porcentajeivacomision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($porcentajeivacomision['max'])) {
                $this->addUsingAlias(QbcSciClosurePeer::PORCENTAJEIVACOMISION, $porcentajeivacomision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::PORCENTAJEIVACOMISION, $porcentajeivacomision, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcSciClosure $qbcSciClosure Object to remove from the list of results
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function prune($qbcSciClosure = null)
    {
        if ($qbcSciClosure) {
            $this->addUsingAlias(QbcSciClosurePeer::ID, $qbcSciClosure->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
