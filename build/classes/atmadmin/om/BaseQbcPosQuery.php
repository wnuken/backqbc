<?php


/**
 * Base class that represents a query for the 'qbc_pos' table.
 *
 *
 *
 * @method QbcPosQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QbcPosQuery orderByPosId($order = Criteria::ASC) Order by the pos_id column
 * @method QbcPosQuery orderByOffice($order = Criteria::ASC) Order by the office column
 * @method QbcPosQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method QbcPosQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method QbcPosQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method QbcPosQuery orderByPostalCode($order = Criteria::ASC) Order by the postal_code column
 * @method QbcPosQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method QbcPosQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 *
 * @method QbcPosQuery groupById() Group by the id column
 * @method QbcPosQuery groupByPosId() Group by the pos_id column
 * @method QbcPosQuery groupByOffice() Group by the office column
 * @method QbcPosQuery groupByCode() Group by the code column
 * @method QbcPosQuery groupByCountry() Group by the country column
 * @method QbcPosQuery groupByCity() Group by the city column
 * @method QbcPosQuery groupByPostalCode() Group by the postal_code column
 * @method QbcPosQuery groupByAddress() Group by the address column
 * @method QbcPosQuery groupByPhone() Group by the phone column
 *
 * @method QbcPosQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcPosQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcPosQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcPosQuery leftJoinAdminUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the AdminUser relation
 * @method QbcPosQuery rightJoinAdminUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AdminUser relation
 * @method QbcPosQuery innerJoinAdminUser($relationAlias = null) Adds a INNER JOIN clause to the query using the AdminUser relation
 *
 * @method QbcPos findOne(PropelPDO $con = null) Return the first QbcPos matching the query
 * @method QbcPos findOneOrCreate(PropelPDO $con = null) Return the first QbcPos matching the query, or a new QbcPos object populated from the query conditions when no match is found
 *
 * @method QbcPos findOneByPosId(string $pos_id) Return the first QbcPos filtered by the pos_id column
 * @method QbcPos findOneByOffice(string $office) Return the first QbcPos filtered by the office column
 * @method QbcPos findOneByCode(string $code) Return the first QbcPos filtered by the code column
 * @method QbcPos findOneByCountry(string $country) Return the first QbcPos filtered by the country column
 * @method QbcPos findOneByCity(string $city) Return the first QbcPos filtered by the city column
 * @method QbcPos findOneByPostalCode(int $postal_code) Return the first QbcPos filtered by the postal_code column
 * @method QbcPos findOneByAddress(string $address) Return the first QbcPos filtered by the address column
 * @method QbcPos findOneByPhone(string $phone) Return the first QbcPos filtered by the phone column
 *
 * @method array findById(int $id) Return QbcPos objects filtered by the id column
 * @method array findByPosId(string $pos_id) Return QbcPos objects filtered by the pos_id column
 * @method array findByOffice(string $office) Return QbcPos objects filtered by the office column
 * @method array findByCode(string $code) Return QbcPos objects filtered by the code column
 * @method array findByCountry(string $country) Return QbcPos objects filtered by the country column
 * @method array findByCity(string $city) Return QbcPos objects filtered by the city column
 * @method array findByPostalCode(int $postal_code) Return QbcPos objects filtered by the postal_code column
 * @method array findByAddress(string $address) Return QbcPos objects filtered by the address column
 * @method array findByPhone(string $phone) Return QbcPos objects filtered by the phone column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcPosQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcPosQuery object.
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
            $modelName = 'QbcPos';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcPosQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcPosQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcPosQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcPosQuery) {
            return $criteria;
        }
        $query = new QbcPosQuery(null, null, $modelAlias);

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
     * @return   QbcPos|QbcPos[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcPosPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcPosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcPos A model object, or null if the key is not found
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
     * @return                 QbcPos A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, pos_id, office, code, country, city, postal_code, address, phone FROM qbc_pos WHERE id = :p0';
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
            $obj = new QbcPos();
            $obj->hydrate($row);
            QbcPosPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcPos|QbcPos[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcPos[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcPosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcPosPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcPosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcPosPeer::ID, $keys, Criteria::IN);
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
     * @return QbcPosQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcPosPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcPosPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcPosPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the pos_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPosId('fooValue');   // WHERE pos_id = 'fooValue'
     * $query->filterByPosId('%fooValue%'); // WHERE pos_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $posId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcPosQuery The current query, for fluid interface
     */
    public function filterByPosId($posId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($posId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $posId)) {
                $posId = str_replace('*', '%', $posId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcPosPeer::POS_ID, $posId, $comparison);
    }

    /**
     * Filter the query on the office column
     *
     * Example usage:
     * <code>
     * $query->filterByOffice('fooValue');   // WHERE office = 'fooValue'
     * $query->filterByOffice('%fooValue%'); // WHERE office LIKE '%fooValue%'
     * </code>
     *
     * @param     string $office The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcPosQuery The current query, for fluid interface
     */
    public function filterByOffice($office = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($office)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $office)) {
                $office = str_replace('*', '%', $office);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcPosPeer::OFFICE, $office, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%'); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcPosQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $code)) {
                $code = str_replace('*', '%', $code);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcPosPeer::CODE, $code, $comparison);
    }

    /**
     * Filter the query on the country column
     *
     * Example usage:
     * <code>
     * $query->filterByCountry('fooValue');   // WHERE country = 'fooValue'
     * $query->filterByCountry('%fooValue%'); // WHERE country LIKE '%fooValue%'
     * </code>
     *
     * @param     string $country The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcPosQuery The current query, for fluid interface
     */
    public function filterByCountry($country = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($country)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $country)) {
                $country = str_replace('*', '%', $country);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcPosPeer::COUNTRY, $country, $comparison);
    }

    /**
     * Filter the query on the city column
     *
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
     * $query->filterByCity('%fooValue%'); // WHERE city LIKE '%fooValue%'
     * </code>
     *
     * @param     string $city The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcPosQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $city)) {
                $city = str_replace('*', '%', $city);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcPosPeer::CITY, $city, $comparison);
    }

    /**
     * Filter the query on the postal_code column
     *
     * Example usage:
     * <code>
     * $query->filterByPostalCode(1234); // WHERE postal_code = 1234
     * $query->filterByPostalCode(array(12, 34)); // WHERE postal_code IN (12, 34)
     * $query->filterByPostalCode(array('min' => 12)); // WHERE postal_code >= 12
     * $query->filterByPostalCode(array('max' => 12)); // WHERE postal_code <= 12
     * </code>
     *
     * @param     mixed $postalCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcPosQuery The current query, for fluid interface
     */
    public function filterByPostalCode($postalCode = null, $comparison = null)
    {
        if (is_array($postalCode)) {
            $useMinMax = false;
            if (isset($postalCode['min'])) {
                $this->addUsingAlias(QbcPosPeer::POSTAL_CODE, $postalCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($postalCode['max'])) {
                $this->addUsingAlias(QbcPosPeer::POSTAL_CODE, $postalCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcPosPeer::POSTAL_CODE, $postalCode, $comparison);
    }

    /**
     * Filter the query on the address column
     *
     * Example usage:
     * <code>
     * $query->filterByAddress('fooValue');   // WHERE address = 'fooValue'
     * $query->filterByAddress('%fooValue%'); // WHERE address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $address The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcPosQuery The current query, for fluid interface
     */
    public function filterByAddress($address = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($address)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $address)) {
                $address = str_replace('*', '%', $address);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcPosPeer::ADDRESS, $address, $comparison);
    }

    /**
     * Filter the query on the phone column
     *
     * Example usage:
     * <code>
     * $query->filterByPhone('fooValue');   // WHERE phone = 'fooValue'
     * $query->filterByPhone('%fooValue%'); // WHERE phone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcPosQuery The current query, for fluid interface
     */
    public function filterByPhone($phone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $phone)) {
                $phone = str_replace('*', '%', $phone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcPosPeer::PHONE, $phone, $comparison);
    }

    /**
     * Filter the query by a related AdminUser object
     *
     * @param   AdminUser|PropelObjectCollection $adminUser  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 QbcPosQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAdminUser($adminUser, $comparison = null)
    {
        if ($adminUser instanceof AdminUser) {
            return $this
                ->addUsingAlias(QbcPosPeer::ID, $adminUser->getPosId(), $comparison);
        } elseif ($adminUser instanceof PropelObjectCollection) {
            return $this
                ->useAdminUserQuery()
                ->filterByPrimaryKeys($adminUser->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAdminUser() only accepts arguments of type AdminUser or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AdminUser relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return QbcPosQuery The current query, for fluid interface
     */
    public function joinAdminUser($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AdminUser');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'AdminUser');
        }

        return $this;
    }

    /**
     * Use the AdminUser relation AdminUser object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AdminUserQuery A secondary query class using the current class as primary query
     */
    public function useAdminUserQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAdminUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AdminUser', 'AdminUserQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   QbcPos $qbcPos Object to remove from the list of results
     *
     * @return QbcPosQuery The current query, for fluid interface
     */
    public function prune($qbcPos = null)
    {
        if ($qbcPos) {
            $this->addUsingAlias(QbcPosPeer::ID, $qbcPos->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
