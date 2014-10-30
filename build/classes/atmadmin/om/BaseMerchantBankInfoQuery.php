<?php


/**
 * Base class that represents a query for the 'merchant_bank_info' table.
 *
 *
 *
 * @method MerchantBankInfoQuery orderByInfoId($order = Criteria::ASC) Order by the info_id column
 * @method MerchantBankInfoQuery orderByBankCountry($order = Criteria::ASC) Order by the bank_country column
 * @method MerchantBankInfoQuery orderByAccountType($order = Criteria::ASC) Order by the account_type column
 * @method MerchantBankInfoQuery orderByHolder($order = Criteria::ASC) Order by the holder column
 * @method MerchantBankInfoQuery orderByBank($order = Criteria::ASC) Order by the bank column
 * @method MerchantBankInfoQuery orderByAccountNumber($order = Criteria::ASC) Order by the account_number column
 * @method MerchantBankInfoQuery orderByCurrency($order = Criteria::ASC) Order by the currency column
 * @method MerchantBankInfoQuery orderByIsFiduciary($order = Criteria::ASC) Order by the is_fiduciary column
 *
 * @method MerchantBankInfoQuery groupByInfoId() Group by the info_id column
 * @method MerchantBankInfoQuery groupByBankCountry() Group by the bank_country column
 * @method MerchantBankInfoQuery groupByAccountType() Group by the account_type column
 * @method MerchantBankInfoQuery groupByHolder() Group by the holder column
 * @method MerchantBankInfoQuery groupByBank() Group by the bank column
 * @method MerchantBankInfoQuery groupByAccountNumber() Group by the account_number column
 * @method MerchantBankInfoQuery groupByCurrency() Group by the currency column
 * @method MerchantBankInfoQuery groupByIsFiduciary() Group by the is_fiduciary column
 *
 * @method MerchantBankInfoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MerchantBankInfoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MerchantBankInfoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method MerchantBankInfoQuery leftJoinGroupdealsMerchants($relationAlias = null) Adds a LEFT JOIN clause to the query using the GroupdealsMerchants relation
 * @method MerchantBankInfoQuery rightJoinGroupdealsMerchants($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GroupdealsMerchants relation
 * @method MerchantBankInfoQuery innerJoinGroupdealsMerchants($relationAlias = null) Adds a INNER JOIN clause to the query using the GroupdealsMerchants relation
 *
 * @method MerchantBankInfo findOne(PropelPDO $con = null) Return the first MerchantBankInfo matching the query
 * @method MerchantBankInfo findOneOrCreate(PropelPDO $con = null) Return the first MerchantBankInfo matching the query, or a new MerchantBankInfo object populated from the query conditions when no match is found
 *
 * @method MerchantBankInfo findOneByBankCountry(string $bank_country) Return the first MerchantBankInfo filtered by the bank_country column
 * @method MerchantBankInfo findOneByAccountType(string $account_type) Return the first MerchantBankInfo filtered by the account_type column
 * @method MerchantBankInfo findOneByHolder(string $holder) Return the first MerchantBankInfo filtered by the holder column
 * @method MerchantBankInfo findOneByBank(string $bank) Return the first MerchantBankInfo filtered by the bank column
 * @method MerchantBankInfo findOneByAccountNumber(string $account_number) Return the first MerchantBankInfo filtered by the account_number column
 * @method MerchantBankInfo findOneByCurrency(string $currency) Return the first MerchantBankInfo filtered by the currency column
 * @method MerchantBankInfo findOneByIsFiduciary(int $is_fiduciary) Return the first MerchantBankInfo filtered by the is_fiduciary column
 *
 * @method array findByInfoId(int $info_id) Return MerchantBankInfo objects filtered by the info_id column
 * @method array findByBankCountry(string $bank_country) Return MerchantBankInfo objects filtered by the bank_country column
 * @method array findByAccountType(string $account_type) Return MerchantBankInfo objects filtered by the account_type column
 * @method array findByHolder(string $holder) Return MerchantBankInfo objects filtered by the holder column
 * @method array findByBank(string $bank) Return MerchantBankInfo objects filtered by the bank column
 * @method array findByAccountNumber(string $account_number) Return MerchantBankInfo objects filtered by the account_number column
 * @method array findByCurrency(string $currency) Return MerchantBankInfo objects filtered by the currency column
 * @method array findByIsFiduciary(int $is_fiduciary) Return MerchantBankInfo objects filtered by the is_fiduciary column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseMerchantBankInfoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMerchantBankInfoQuery object.
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
            $modelName = 'MerchantBankInfo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MerchantBankInfoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MerchantBankInfoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MerchantBankInfoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MerchantBankInfoQuery) {
            return $criteria;
        }
        $query = new MerchantBankInfoQuery(null, null, $modelAlias);

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
     * @return   MerchantBankInfo|MerchantBankInfo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MerchantBankInfoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MerchantBankInfoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 MerchantBankInfo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByInfoId($key, $con = null)
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
     * @return                 MerchantBankInfo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT info_id, bank_country, account_type, holder, bank, account_number, currency, is_fiduciary FROM merchant_bank_info WHERE info_id = :p0';
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
            $obj = new MerchantBankInfo();
            $obj->hydrate($row);
            MerchantBankInfoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return MerchantBankInfo|MerchantBankInfo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|MerchantBankInfo[]|mixed the list of results, formatted by the current formatter
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
     * @return MerchantBankInfoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MerchantBankInfoPeer::INFO_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MerchantBankInfoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MerchantBankInfoPeer::INFO_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the info_id column
     *
     * Example usage:
     * <code>
     * $query->filterByInfoId(1234); // WHERE info_id = 1234
     * $query->filterByInfoId(array(12, 34)); // WHERE info_id IN (12, 34)
     * $query->filterByInfoId(array('min' => 12)); // WHERE info_id >= 12
     * $query->filterByInfoId(array('max' => 12)); // WHERE info_id <= 12
     * </code>
     *
     * @param     mixed $infoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MerchantBankInfoQuery The current query, for fluid interface
     */
    public function filterByInfoId($infoId = null, $comparison = null)
    {
        if (is_array($infoId)) {
            $useMinMax = false;
            if (isset($infoId['min'])) {
                $this->addUsingAlias(MerchantBankInfoPeer::INFO_ID, $infoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($infoId['max'])) {
                $this->addUsingAlias(MerchantBankInfoPeer::INFO_ID, $infoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MerchantBankInfoPeer::INFO_ID, $infoId, $comparison);
    }

    /**
     * Filter the query on the bank_country column
     *
     * Example usage:
     * <code>
     * $query->filterByBankCountry('fooValue');   // WHERE bank_country = 'fooValue'
     * $query->filterByBankCountry('%fooValue%'); // WHERE bank_country LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bankCountry The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MerchantBankInfoQuery The current query, for fluid interface
     */
    public function filterByBankCountry($bankCountry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bankCountry)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bankCountry)) {
                $bankCountry = str_replace('*', '%', $bankCountry);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MerchantBankInfoPeer::BANK_COUNTRY, $bankCountry, $comparison);
    }

    /**
     * Filter the query on the account_type column
     *
     * Example usage:
     * <code>
     * $query->filterByAccountType('fooValue');   // WHERE account_type = 'fooValue'
     * $query->filterByAccountType('%fooValue%'); // WHERE account_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accountType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MerchantBankInfoQuery The current query, for fluid interface
     */
    public function filterByAccountType($accountType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accountType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accountType)) {
                $accountType = str_replace('*', '%', $accountType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MerchantBankInfoPeer::ACCOUNT_TYPE, $accountType, $comparison);
    }

    /**
     * Filter the query on the holder column
     *
     * Example usage:
     * <code>
     * $query->filterByHolder('fooValue');   // WHERE holder = 'fooValue'
     * $query->filterByHolder('%fooValue%'); // WHERE holder LIKE '%fooValue%'
     * </code>
     *
     * @param     string $holder The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MerchantBankInfoQuery The current query, for fluid interface
     */
    public function filterByHolder($holder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($holder)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $holder)) {
                $holder = str_replace('*', '%', $holder);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MerchantBankInfoPeer::HOLDER, $holder, $comparison);
    }

    /**
     * Filter the query on the bank column
     *
     * Example usage:
     * <code>
     * $query->filterByBank('fooValue');   // WHERE bank = 'fooValue'
     * $query->filterByBank('%fooValue%'); // WHERE bank LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bank The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MerchantBankInfoQuery The current query, for fluid interface
     */
    public function filterByBank($bank = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bank)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bank)) {
                $bank = str_replace('*', '%', $bank);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MerchantBankInfoPeer::BANK, $bank, $comparison);
    }

    /**
     * Filter the query on the account_number column
     *
     * Example usage:
     * <code>
     * $query->filterByAccountNumber('fooValue');   // WHERE account_number = 'fooValue'
     * $query->filterByAccountNumber('%fooValue%'); // WHERE account_number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accountNumber The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MerchantBankInfoQuery The current query, for fluid interface
     */
    public function filterByAccountNumber($accountNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accountNumber)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accountNumber)) {
                $accountNumber = str_replace('*', '%', $accountNumber);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MerchantBankInfoPeer::ACCOUNT_NUMBER, $accountNumber, $comparison);
    }

    /**
     * Filter the query on the currency column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrency('fooValue');   // WHERE currency = 'fooValue'
     * $query->filterByCurrency('%fooValue%'); // WHERE currency LIKE '%fooValue%'
     * </code>
     *
     * @param     string $currency The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MerchantBankInfoQuery The current query, for fluid interface
     */
    public function filterByCurrency($currency = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($currency)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $currency)) {
                $currency = str_replace('*', '%', $currency);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MerchantBankInfoPeer::CURRENCY, $currency, $comparison);
    }

    /**
     * Filter the query on the is_fiduciary column
     *
     * Example usage:
     * <code>
     * $query->filterByIsFiduciary(1234); // WHERE is_fiduciary = 1234
     * $query->filterByIsFiduciary(array(12, 34)); // WHERE is_fiduciary IN (12, 34)
     * $query->filterByIsFiduciary(array('min' => 12)); // WHERE is_fiduciary >= 12
     * $query->filterByIsFiduciary(array('max' => 12)); // WHERE is_fiduciary <= 12
     * </code>
     *
     * @param     mixed $isFiduciary The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MerchantBankInfoQuery The current query, for fluid interface
     */
    public function filterByIsFiduciary($isFiduciary = null, $comparison = null)
    {
        if (is_array($isFiduciary)) {
            $useMinMax = false;
            if (isset($isFiduciary['min'])) {
                $this->addUsingAlias(MerchantBankInfoPeer::IS_FIDUCIARY, $isFiduciary['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isFiduciary['max'])) {
                $this->addUsingAlias(MerchantBankInfoPeer::IS_FIDUCIARY, $isFiduciary['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MerchantBankInfoPeer::IS_FIDUCIARY, $isFiduciary, $comparison);
    }

    /**
     * Filter the query by a related GroupdealsMerchants object
     *
     * @param   GroupdealsMerchants|PropelObjectCollection $groupdealsMerchants  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MerchantBankInfoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGroupdealsMerchants($groupdealsMerchants, $comparison = null)
    {
        if ($groupdealsMerchants instanceof GroupdealsMerchants) {
            return $this
                ->addUsingAlias(MerchantBankInfoPeer::INFO_ID, $groupdealsMerchants->getBankInfo(), $comparison);
        } elseif ($groupdealsMerchants instanceof PropelObjectCollection) {
            return $this
                ->useGroupdealsMerchantsQuery()
                ->filterByPrimaryKeys($groupdealsMerchants->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGroupdealsMerchants() only accepts arguments of type GroupdealsMerchants or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GroupdealsMerchants relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MerchantBankInfoQuery The current query, for fluid interface
     */
    public function joinGroupdealsMerchants($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GroupdealsMerchants');

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
            $this->addJoinObject($join, 'GroupdealsMerchants');
        }

        return $this;
    }

    /**
     * Use the GroupdealsMerchants relation GroupdealsMerchants object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   GroupdealsMerchantsQuery A secondary query class using the current class as primary query
     */
    public function useGroupdealsMerchantsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGroupdealsMerchants($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GroupdealsMerchants', 'GroupdealsMerchantsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   MerchantBankInfo $merchantBankInfo Object to remove from the list of results
     *
     * @return MerchantBankInfoQuery The current query, for fluid interface
     */
    public function prune($merchantBankInfo = null)
    {
        if ($merchantBankInfo) {
            $this->addUsingAlias(MerchantBankInfoPeer::INFO_ID, $merchantBankInfo->getInfoId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
