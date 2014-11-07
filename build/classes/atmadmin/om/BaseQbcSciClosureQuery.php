<?php


/**
 * Base class that represents a query for the 'qbc_sci_closure' table.
 *
 *
 *
 * @method QbcSciClosureQuery orderById($order = Criteria::ASC) Order by the Id column
 * @method QbcSciClosureQuery orderByNitAliado($order = Criteria::ASC) Order by the nit_aliado column
 * @method QbcSciClosureQuery orderByCampaignId($order = Criteria::ASC) Order by the campaign_id column
 * @method QbcSciClosureQuery orderBySellDoc($order = Criteria::ASC) Order by the sell_doc column
 * @method QbcSciClosureQuery orderBySellDate($order = Criteria::ASC) Order by the sell_date column
 * @method QbcSciClosureQuery orderBySellValue($order = Criteria::ASC) Order by the sell_value column
 * @method QbcSciClosureQuery orderByDevDoc($order = Criteria::ASC) Order by the dev_doc column
 * @method QbcSciClosureQuery orderByDevDate($order = Criteria::ASC) Order by the dev_date column
 * @method QbcSciClosureQuery orderByDevValue($order = Criteria::ASC) Order by the dev_value column
 * @method QbcSciClosureQuery orderByPayId($order = Criteria::ASC) Order by the pay_id column
 * @method QbcSciClosureQuery orderByPorcentajeComision($order = Criteria::ASC) Order by the porcentaje_comision column
 * @method QbcSciClosureQuery orderByPorcentajeIva($order = Criteria::ASC) Order by the porcentaje_iva column
 * @method QbcSciClosureQuery orderByStatus($order = Criteria::ASC) Order by the status column
 *
 * @method QbcSciClosureQuery groupById() Group by the Id column
 * @method QbcSciClosureQuery groupByNitAliado() Group by the nit_aliado column
 * @method QbcSciClosureQuery groupByCampaignId() Group by the campaign_id column
 * @method QbcSciClosureQuery groupBySellDoc() Group by the sell_doc column
 * @method QbcSciClosureQuery groupBySellDate() Group by the sell_date column
 * @method QbcSciClosureQuery groupBySellValue() Group by the sell_value column
 * @method QbcSciClosureQuery groupByDevDoc() Group by the dev_doc column
 * @method QbcSciClosureQuery groupByDevDate() Group by the dev_date column
 * @method QbcSciClosureQuery groupByDevValue() Group by the dev_value column
 * @method QbcSciClosureQuery groupByPayId() Group by the pay_id column
 * @method QbcSciClosureQuery groupByPorcentajeComision() Group by the porcentaje_comision column
 * @method QbcSciClosureQuery groupByPorcentajeIva() Group by the porcentaje_iva column
 * @method QbcSciClosureQuery groupByStatus() Group by the status column
 *
 * @method QbcSciClosureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcSciClosureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcSciClosureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcSciClosure findOne(PropelPDO $con = null) Return the first QbcSciClosure matching the query
 * @method QbcSciClosure findOneOrCreate(PropelPDO $con = null) Return the first QbcSciClosure matching the query, or a new QbcSciClosure object populated from the query conditions when no match is found
 *
 * @method QbcSciClosure findOneByNitAliado(string $nit_aliado) Return the first QbcSciClosure filtered by the nit_aliado column
 * @method QbcSciClosure findOneByCampaignId(string $campaign_id) Return the first QbcSciClosure filtered by the campaign_id column
 * @method QbcSciClosure findOneBySellDoc(string $sell_doc) Return the first QbcSciClosure filtered by the sell_doc column
 * @method QbcSciClosure findOneBySellDate(string $sell_date) Return the first QbcSciClosure filtered by the sell_date column
 * @method QbcSciClosure findOneBySellValue(string $sell_value) Return the first QbcSciClosure filtered by the sell_value column
 * @method QbcSciClosure findOneByDevDoc(string $dev_doc) Return the first QbcSciClosure filtered by the dev_doc column
 * @method QbcSciClosure findOneByDevDate(string $dev_date) Return the first QbcSciClosure filtered by the dev_date column
 * @method QbcSciClosure findOneByDevValue(string $dev_value) Return the first QbcSciClosure filtered by the dev_value column
 * @method QbcSciClosure findOneByPayId(string $pay_id) Return the first QbcSciClosure filtered by the pay_id column
 * @method QbcSciClosure findOneByPorcentajeComision(string $porcentaje_comision) Return the first QbcSciClosure filtered by the porcentaje_comision column
 * @method QbcSciClosure findOneByPorcentajeIva(string $porcentaje_iva) Return the first QbcSciClosure filtered by the porcentaje_iva column
 * @method QbcSciClosure findOneByStatus(int $status) Return the first QbcSciClosure filtered by the status column
 *
 * @method array findById(int $Id) Return QbcSciClosure objects filtered by the Id column
 * @method array findByNitAliado(string $nit_aliado) Return QbcSciClosure objects filtered by the nit_aliado column
 * @method array findByCampaignId(string $campaign_id) Return QbcSciClosure objects filtered by the campaign_id column
 * @method array findBySellDoc(string $sell_doc) Return QbcSciClosure objects filtered by the sell_doc column
 * @method array findBySellDate(string $sell_date) Return QbcSciClosure objects filtered by the sell_date column
 * @method array findBySellValue(string $sell_value) Return QbcSciClosure objects filtered by the sell_value column
 * @method array findByDevDoc(string $dev_doc) Return QbcSciClosure objects filtered by the dev_doc column
 * @method array findByDevDate(string $dev_date) Return QbcSciClosure objects filtered by the dev_date column
 * @method array findByDevValue(string $dev_value) Return QbcSciClosure objects filtered by the dev_value column
 * @method array findByPayId(string $pay_id) Return QbcSciClosure objects filtered by the pay_id column
 * @method array findByPorcentajeComision(string $porcentaje_comision) Return QbcSciClosure objects filtered by the porcentaje_comision column
 * @method array findByPorcentajeIva(string $porcentaje_iva) Return QbcSciClosure objects filtered by the porcentaje_iva column
 * @method array findByStatus(int $status) Return QbcSciClosure objects filtered by the status column
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
        $sql = 'SELECT Id, nit_aliado, campaign_id, sell_doc, sell_date, sell_value, dev_doc, dev_date, dev_value, pay_id, porcentaje_comision, porcentaje_iva, status FROM qbc_sci_closure WHERE Id = :p0';
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
     * Filter the query on the nit_aliado column
     *
     * Example usage:
     * <code>
     * $query->filterByNitAliado('fooValue');   // WHERE nit_aliado = 'fooValue'
     * $query->filterByNitAliado('%fooValue%'); // WHERE nit_aliado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nitAliado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByNitAliado($nitAliado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nitAliado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nitAliado)) {
                $nitAliado = str_replace('*', '%', $nitAliado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::NIT_ALIADO, $nitAliado, $comparison);
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
     * @return QbcSciClosureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcSciClosurePeer::CAMPAIGN_ID, $campaignId, $comparison);
    }

    /**
     * Filter the query on the sell_doc column
     *
     * Example usage:
     * <code>
     * $query->filterBySellDoc('fooValue');   // WHERE sell_doc = 'fooValue'
     * $query->filterBySellDoc('%fooValue%'); // WHERE sell_doc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sellDoc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterBySellDoc($sellDoc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sellDoc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sellDoc)) {
                $sellDoc = str_replace('*', '%', $sellDoc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::SELL_DOC, $sellDoc, $comparison);
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
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterBySellDate($sellDate = null, $comparison = null)
    {
        if (is_array($sellDate)) {
            $useMinMax = false;
            if (isset($sellDate['min'])) {
                $this->addUsingAlias(QbcSciClosurePeer::SELL_DATE, $sellDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sellDate['max'])) {
                $this->addUsingAlias(QbcSciClosurePeer::SELL_DATE, $sellDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::SELL_DATE, $sellDate, $comparison);
    }

    /**
     * Filter the query on the sell_value column
     *
     * Example usage:
     * <code>
     * $query->filterBySellValue(1234); // WHERE sell_value = 1234
     * $query->filterBySellValue(array(12, 34)); // WHERE sell_value IN (12, 34)
     * $query->filterBySellValue(array('min' => 12)); // WHERE sell_value >= 12
     * $query->filterBySellValue(array('max' => 12)); // WHERE sell_value <= 12
     * </code>
     *
     * @param     mixed $sellValue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterBySellValue($sellValue = null, $comparison = null)
    {
        if (is_array($sellValue)) {
            $useMinMax = false;
            if (isset($sellValue['min'])) {
                $this->addUsingAlias(QbcSciClosurePeer::SELL_VALUE, $sellValue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sellValue['max'])) {
                $this->addUsingAlias(QbcSciClosurePeer::SELL_VALUE, $sellValue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::SELL_VALUE, $sellValue, $comparison);
    }

    /**
     * Filter the query on the dev_doc column
     *
     * Example usage:
     * <code>
     * $query->filterByDevDoc('fooValue');   // WHERE dev_doc = 'fooValue'
     * $query->filterByDevDoc('%fooValue%'); // WHERE dev_doc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $devDoc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByDevDoc($devDoc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($devDoc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $devDoc)) {
                $devDoc = str_replace('*', '%', $devDoc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::DEV_DOC, $devDoc, $comparison);
    }

    /**
     * Filter the query on the dev_date column
     *
     * Example usage:
     * <code>
     * $query->filterByDevDate('2011-03-14'); // WHERE dev_date = '2011-03-14'
     * $query->filterByDevDate('now'); // WHERE dev_date = '2011-03-14'
     * $query->filterByDevDate(array('max' => 'yesterday')); // WHERE dev_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $devDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByDevDate($devDate = null, $comparison = null)
    {
        if (is_array($devDate)) {
            $useMinMax = false;
            if (isset($devDate['min'])) {
                $this->addUsingAlias(QbcSciClosurePeer::DEV_DATE, $devDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devDate['max'])) {
                $this->addUsingAlias(QbcSciClosurePeer::DEV_DATE, $devDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::DEV_DATE, $devDate, $comparison);
    }

    /**
     * Filter the query on the dev_value column
     *
     * Example usage:
     * <code>
     * $query->filterByDevValue(1234); // WHERE dev_value = 1234
     * $query->filterByDevValue(array(12, 34)); // WHERE dev_value IN (12, 34)
     * $query->filterByDevValue(array('min' => 12)); // WHERE dev_value >= 12
     * $query->filterByDevValue(array('max' => 12)); // WHERE dev_value <= 12
     * </code>
     *
     * @param     mixed $devValue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByDevValue($devValue = null, $comparison = null)
    {
        if (is_array($devValue)) {
            $useMinMax = false;
            if (isset($devValue['min'])) {
                $this->addUsingAlias(QbcSciClosurePeer::DEV_VALUE, $devValue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devValue['max'])) {
                $this->addUsingAlias(QbcSciClosurePeer::DEV_VALUE, $devValue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::DEV_VALUE, $devValue, $comparison);
    }

    /**
     * Filter the query on the pay_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPayId('fooValue');   // WHERE pay_id = 'fooValue'
     * $query->filterByPayId('%fooValue%'); // WHERE pay_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $payId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByPayId($payId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($payId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $payId)) {
                $payId = str_replace('*', '%', $payId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::PAY_ID, $payId, $comparison);
    }

    /**
     * Filter the query on the porcentaje_comision column
     *
     * Example usage:
     * <code>
     * $query->filterByPorcentajeComision(1234); // WHERE porcentaje_comision = 1234
     * $query->filterByPorcentajeComision(array(12, 34)); // WHERE porcentaje_comision IN (12, 34)
     * $query->filterByPorcentajeComision(array('min' => 12)); // WHERE porcentaje_comision >= 12
     * $query->filterByPorcentajeComision(array('max' => 12)); // WHERE porcentaje_comision <= 12
     * </code>
     *
     * @param     mixed $porcentajeComision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByPorcentajeComision($porcentajeComision = null, $comparison = null)
    {
        if (is_array($porcentajeComision)) {
            $useMinMax = false;
            if (isset($porcentajeComision['min'])) {
                $this->addUsingAlias(QbcSciClosurePeer::PORCENTAJE_COMISION, $porcentajeComision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($porcentajeComision['max'])) {
                $this->addUsingAlias(QbcSciClosurePeer::PORCENTAJE_COMISION, $porcentajeComision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::PORCENTAJE_COMISION, $porcentajeComision, $comparison);
    }

    /**
     * Filter the query on the porcentaje_iva column
     *
     * Example usage:
     * <code>
     * $query->filterByPorcentajeIva(1234); // WHERE porcentaje_iva = 1234
     * $query->filterByPorcentajeIva(array(12, 34)); // WHERE porcentaje_iva IN (12, 34)
     * $query->filterByPorcentajeIva(array('min' => 12)); // WHERE porcentaje_iva >= 12
     * $query->filterByPorcentajeIva(array('max' => 12)); // WHERE porcentaje_iva <= 12
     * </code>
     *
     * @param     mixed $porcentajeIva The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByPorcentajeIva($porcentajeIva = null, $comparison = null)
    {
        if (is_array($porcentajeIva)) {
            $useMinMax = false;
            if (isset($porcentajeIva['min'])) {
                $this->addUsingAlias(QbcSciClosurePeer::PORCENTAJE_IVA, $porcentajeIva['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($porcentajeIva['max'])) {
                $this->addUsingAlias(QbcSciClosurePeer::PORCENTAJE_IVA, $porcentajeIva['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::PORCENTAJE_IVA, $porcentajeIva, $comparison);
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
     * @return QbcSciClosureQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (is_array($status)) {
            $useMinMax = false;
            if (isset($status['min'])) {
                $this->addUsingAlias(QbcSciClosurePeer::STATUS, $status['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($status['max'])) {
                $this->addUsingAlias(QbcSciClosurePeer::STATUS, $status['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcSciClosurePeer::STATUS, $status, $comparison);
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
