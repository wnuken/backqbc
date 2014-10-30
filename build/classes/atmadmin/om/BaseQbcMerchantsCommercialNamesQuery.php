<?php


/**
 * Base class that represents a query for the 'qbc_merchants_commercial_names' table.
 *
 *
 *
 * @method QbcMerchantsCommercialNamesQuery orderByCommercialNameId($order = Criteria::ASC) Order by the commercial_name_id column
 * @method QbcMerchantsCommercialNamesQuery orderByMerchantsId($order = Criteria::ASC) Order by the merchants_id column
 * @method QbcMerchantsCommercialNamesQuery orderByCommercialName($order = Criteria::ASC) Order by the commercial_name column
 * @method QbcMerchantsCommercialNamesQuery orderByNit($order = Criteria::ASC) Order by the nit column
 * @method QbcMerchantsCommercialNamesQuery orderByUseParentNit($order = Criteria::ASC) Order by the use_parent_nit column
 * @method QbcMerchantsCommercialNamesQuery orderByBankAccountNumber($order = Criteria::ASC) Order by the bank_account_number column
 * @method QbcMerchantsCommercialNamesQuery orderByUseParentBankAccount($order = Criteria::ASC) Order by the use_parent_bank_account column
 * @method QbcMerchantsCommercialNamesQuery orderByCompanyDescription($order = Criteria::ASC) Order by the company_description column
 * @method QbcMerchantsCommercialNamesQuery orderByLogo($order = Criteria::ASC) Order by the logo column
 * @method QbcMerchantsCommercialNamesQuery orderByEmail($order = Criteria::ASC) Order by the email column
 *
 * @method QbcMerchantsCommercialNamesQuery groupByCommercialNameId() Group by the commercial_name_id column
 * @method QbcMerchantsCommercialNamesQuery groupByMerchantsId() Group by the merchants_id column
 * @method QbcMerchantsCommercialNamesQuery groupByCommercialName() Group by the commercial_name column
 * @method QbcMerchantsCommercialNamesQuery groupByNit() Group by the nit column
 * @method QbcMerchantsCommercialNamesQuery groupByUseParentNit() Group by the use_parent_nit column
 * @method QbcMerchantsCommercialNamesQuery groupByBankAccountNumber() Group by the bank_account_number column
 * @method QbcMerchantsCommercialNamesQuery groupByUseParentBankAccount() Group by the use_parent_bank_account column
 * @method QbcMerchantsCommercialNamesQuery groupByCompanyDescription() Group by the company_description column
 * @method QbcMerchantsCommercialNamesQuery groupByLogo() Group by the logo column
 * @method QbcMerchantsCommercialNamesQuery groupByEmail() Group by the email column
 *
 * @method QbcMerchantsCommercialNamesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcMerchantsCommercialNamesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcMerchantsCommercialNamesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcMerchantsCommercialNamesQuery leftJoinGroupdealsMerchants($relationAlias = null) Adds a LEFT JOIN clause to the query using the GroupdealsMerchants relation
 * @method QbcMerchantsCommercialNamesQuery rightJoinGroupdealsMerchants($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GroupdealsMerchants relation
 * @method QbcMerchantsCommercialNamesQuery innerJoinGroupdealsMerchants($relationAlias = null) Adds a INNER JOIN clause to the query using the GroupdealsMerchants relation
 *
 * @method QbcMerchantsCommercialNamesQuery leftJoinQbcMerchantsLocations($relationAlias = null) Adds a LEFT JOIN clause to the query using the QbcMerchantsLocations relation
 * @method QbcMerchantsCommercialNamesQuery rightJoinQbcMerchantsLocations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the QbcMerchantsLocations relation
 * @method QbcMerchantsCommercialNamesQuery innerJoinQbcMerchantsLocations($relationAlias = null) Adds a INNER JOIN clause to the query using the QbcMerchantsLocations relation
 *
 * @method QbcMerchantsCommercialNames findOne(PropelPDO $con = null) Return the first QbcMerchantsCommercialNames matching the query
 * @method QbcMerchantsCommercialNames findOneOrCreate(PropelPDO $con = null) Return the first QbcMerchantsCommercialNames matching the query, or a new QbcMerchantsCommercialNames object populated from the query conditions when no match is found
 *
 * @method QbcMerchantsCommercialNames findOneByMerchantsId(int $merchants_id) Return the first QbcMerchantsCommercialNames filtered by the merchants_id column
 * @method QbcMerchantsCommercialNames findOneByCommercialName(string $commercial_name) Return the first QbcMerchantsCommercialNames filtered by the commercial_name column
 * @method QbcMerchantsCommercialNames findOneByNit(string $nit) Return the first QbcMerchantsCommercialNames filtered by the nit column
 * @method QbcMerchantsCommercialNames findOneByUseParentNit(boolean $use_parent_nit) Return the first QbcMerchantsCommercialNames filtered by the use_parent_nit column
 * @method QbcMerchantsCommercialNames findOneByBankAccountNumber(string $bank_account_number) Return the first QbcMerchantsCommercialNames filtered by the bank_account_number column
 * @method QbcMerchantsCommercialNames findOneByUseParentBankAccount(boolean $use_parent_bank_account) Return the first QbcMerchantsCommercialNames filtered by the use_parent_bank_account column
 * @method QbcMerchantsCommercialNames findOneByCompanyDescription(string $company_description) Return the first QbcMerchantsCommercialNames filtered by the company_description column
 * @method QbcMerchantsCommercialNames findOneByLogo(string $logo) Return the first QbcMerchantsCommercialNames filtered by the logo column
 * @method QbcMerchantsCommercialNames findOneByEmail(string $email) Return the first QbcMerchantsCommercialNames filtered by the email column
 *
 * @method array findByCommercialNameId(int $commercial_name_id) Return QbcMerchantsCommercialNames objects filtered by the commercial_name_id column
 * @method array findByMerchantsId(int $merchants_id) Return QbcMerchantsCommercialNames objects filtered by the merchants_id column
 * @method array findByCommercialName(string $commercial_name) Return QbcMerchantsCommercialNames objects filtered by the commercial_name column
 * @method array findByNit(string $nit) Return QbcMerchantsCommercialNames objects filtered by the nit column
 * @method array findByUseParentNit(boolean $use_parent_nit) Return QbcMerchantsCommercialNames objects filtered by the use_parent_nit column
 * @method array findByBankAccountNumber(string $bank_account_number) Return QbcMerchantsCommercialNames objects filtered by the bank_account_number column
 * @method array findByUseParentBankAccount(boolean $use_parent_bank_account) Return QbcMerchantsCommercialNames objects filtered by the use_parent_bank_account column
 * @method array findByCompanyDescription(string $company_description) Return QbcMerchantsCommercialNames objects filtered by the company_description column
 * @method array findByLogo(string $logo) Return QbcMerchantsCommercialNames objects filtered by the logo column
 * @method array findByEmail(string $email) Return QbcMerchantsCommercialNames objects filtered by the email column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcMerchantsCommercialNamesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcMerchantsCommercialNamesQuery object.
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
            $modelName = 'QbcMerchantsCommercialNames';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcMerchantsCommercialNamesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcMerchantsCommercialNamesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcMerchantsCommercialNamesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcMerchantsCommercialNamesQuery) {
            return $criteria;
        }
        $query = new QbcMerchantsCommercialNamesQuery(null, null, $modelAlias);

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
     * @return   QbcMerchantsCommercialNames|QbcMerchantsCommercialNames[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcMerchantsCommercialNamesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsCommercialNamesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcMerchantsCommercialNames A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByCommercialNameId($key, $con = null)
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
     * @return                 QbcMerchantsCommercialNames A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT commercial_name_id, merchants_id, commercial_name, nit, use_parent_nit, bank_account_number, use_parent_bank_account, company_description, logo, email FROM qbc_merchants_commercial_names WHERE commercial_name_id = :p0';
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
            $obj = new QbcMerchantsCommercialNames();
            $obj->hydrate($row);
            QbcMerchantsCommercialNamesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcMerchantsCommercialNames|QbcMerchantsCommercialNames[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcMerchantsCommercialNames[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcMerchantsCommercialNamesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcMerchantsCommercialNamesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the commercial_name_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCommercialNameId(1234); // WHERE commercial_name_id = 1234
     * $query->filterByCommercialNameId(array(12, 34)); // WHERE commercial_name_id IN (12, 34)
     * $query->filterByCommercialNameId(array('min' => 12)); // WHERE commercial_name_id >= 12
     * $query->filterByCommercialNameId(array('max' => 12)); // WHERE commercial_name_id <= 12
     * </code>
     *
     * @param     mixed $commercialNameId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsCommercialNamesQuery The current query, for fluid interface
     */
    public function filterByCommercialNameId($commercialNameId = null, $comparison = null)
    {
        if (is_array($commercialNameId)) {
            $useMinMax = false;
            if (isset($commercialNameId['min'])) {
                $this->addUsingAlias(QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME_ID, $commercialNameId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commercialNameId['max'])) {
                $this->addUsingAlias(QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME_ID, $commercialNameId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME_ID, $commercialNameId, $comparison);
    }

    /**
     * Filter the query on the merchants_id column
     *
     * Example usage:
     * <code>
     * $query->filterByMerchantsId(1234); // WHERE merchants_id = 1234
     * $query->filterByMerchantsId(array(12, 34)); // WHERE merchants_id IN (12, 34)
     * $query->filterByMerchantsId(array('min' => 12)); // WHERE merchants_id >= 12
     * $query->filterByMerchantsId(array('max' => 12)); // WHERE merchants_id <= 12
     * </code>
     *
     * @see       filterByGroupdealsMerchants()
     *
     * @param     mixed $merchantsId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsCommercialNamesQuery The current query, for fluid interface
     */
    public function filterByMerchantsId($merchantsId = null, $comparison = null)
    {
        if (is_array($merchantsId)) {
            $useMinMax = false;
            if (isset($merchantsId['min'])) {
                $this->addUsingAlias(QbcMerchantsCommercialNamesPeer::MERCHANTS_ID, $merchantsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($merchantsId['max'])) {
                $this->addUsingAlias(QbcMerchantsCommercialNamesPeer::MERCHANTS_ID, $merchantsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcMerchantsCommercialNamesPeer::MERCHANTS_ID, $merchantsId, $comparison);
    }

    /**
     * Filter the query on the commercial_name column
     *
     * Example usage:
     * <code>
     * $query->filterByCommercialName('fooValue');   // WHERE commercial_name = 'fooValue'
     * $query->filterByCommercialName('%fooValue%'); // WHERE commercial_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commercialName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsCommercialNamesQuery The current query, for fluid interface
     */
    public function filterByCommercialName($commercialName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commercialName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commercialName)) {
                $commercialName = str_replace('*', '%', $commercialName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME, $commercialName, $comparison);
    }

    /**
     * Filter the query on the nit column
     *
     * Example usage:
     * <code>
     * $query->filterByNit('fooValue');   // WHERE nit = 'fooValue'
     * $query->filterByNit('%fooValue%'); // WHERE nit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsCommercialNamesQuery The current query, for fluid interface
     */
    public function filterByNit($nit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nit)) {
                $nit = str_replace('*', '%', $nit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMerchantsCommercialNamesPeer::NIT, $nit, $comparison);
    }

    /**
     * Filter the query on the use_parent_nit column
     *
     * Example usage:
     * <code>
     * $query->filterByUseParentNit(true); // WHERE use_parent_nit = true
     * $query->filterByUseParentNit('yes'); // WHERE use_parent_nit = true
     * </code>
     *
     * @param     boolean|string $useParentNit The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsCommercialNamesQuery The current query, for fluid interface
     */
    public function filterByUseParentNit($useParentNit = null, $comparison = null)
    {
        if (is_string($useParentNit)) {
            $useParentNit = in_array(strtolower($useParentNit), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(QbcMerchantsCommercialNamesPeer::USE_PARENT_NIT, $useParentNit, $comparison);
    }

    /**
     * Filter the query on the bank_account_number column
     *
     * Example usage:
     * <code>
     * $query->filterByBankAccountNumber('fooValue');   // WHERE bank_account_number = 'fooValue'
     * $query->filterByBankAccountNumber('%fooValue%'); // WHERE bank_account_number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bankAccountNumber The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsCommercialNamesQuery The current query, for fluid interface
     */
    public function filterByBankAccountNumber($bankAccountNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bankAccountNumber)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bankAccountNumber)) {
                $bankAccountNumber = str_replace('*', '%', $bankAccountNumber);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMerchantsCommercialNamesPeer::BANK_ACCOUNT_NUMBER, $bankAccountNumber, $comparison);
    }

    /**
     * Filter the query on the use_parent_bank_account column
     *
     * Example usage:
     * <code>
     * $query->filterByUseParentBankAccount(true); // WHERE use_parent_bank_account = true
     * $query->filterByUseParentBankAccount('yes'); // WHERE use_parent_bank_account = true
     * </code>
     *
     * @param     boolean|string $useParentBankAccount The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsCommercialNamesQuery The current query, for fluid interface
     */
    public function filterByUseParentBankAccount($useParentBankAccount = null, $comparison = null)
    {
        if (is_string($useParentBankAccount)) {
            $useParentBankAccount = in_array(strtolower($useParentBankAccount), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(QbcMerchantsCommercialNamesPeer::USE_PARENT_BANK_ACCOUNT, $useParentBankAccount, $comparison);
    }

    /**
     * Filter the query on the company_description column
     *
     * Example usage:
     * <code>
     * $query->filterByCompanyDescription('fooValue');   // WHERE company_description = 'fooValue'
     * $query->filterByCompanyDescription('%fooValue%'); // WHERE company_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $companyDescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsCommercialNamesQuery The current query, for fluid interface
     */
    public function filterByCompanyDescription($companyDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($companyDescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $companyDescription)) {
                $companyDescription = str_replace('*', '%', $companyDescription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMerchantsCommercialNamesPeer::COMPANY_DESCRIPTION, $companyDescription, $comparison);
    }

    /**
     * Filter the query on the logo column
     *
     * Example usage:
     * <code>
     * $query->filterByLogo('fooValue');   // WHERE logo = 'fooValue'
     * $query->filterByLogo('%fooValue%'); // WHERE logo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $logo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsCommercialNamesQuery The current query, for fluid interface
     */
    public function filterByLogo($logo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($logo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $logo)) {
                $logo = str_replace('*', '%', $logo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMerchantsCommercialNamesPeer::LOGO, $logo, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsCommercialNamesQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMerchantsCommercialNamesPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query by a related GroupdealsMerchants object
     *
     * @param   GroupdealsMerchants|PropelObjectCollection $groupdealsMerchants The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 QbcMerchantsCommercialNamesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGroupdealsMerchants($groupdealsMerchants, $comparison = null)
    {
        if ($groupdealsMerchants instanceof GroupdealsMerchants) {
            return $this
                ->addUsingAlias(QbcMerchantsCommercialNamesPeer::MERCHANTS_ID, $groupdealsMerchants->getMerchantsId(), $comparison);
        } elseif ($groupdealsMerchants instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(QbcMerchantsCommercialNamesPeer::MERCHANTS_ID, $groupdealsMerchants->toKeyValue('PrimaryKey', 'MerchantsId'), $comparison);
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
     * @return QbcMerchantsCommercialNamesQuery The current query, for fluid interface
     */
    public function joinGroupdealsMerchants($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useGroupdealsMerchantsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGroupdealsMerchants($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GroupdealsMerchants', 'GroupdealsMerchantsQuery');
    }

    /**
     * Filter the query by a related QbcMerchantsLocations object
     *
     * @param   QbcMerchantsLocations|PropelObjectCollection $qbcMerchantsLocations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 QbcMerchantsCommercialNamesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByQbcMerchantsLocations($qbcMerchantsLocations, $comparison = null)
    {
        if ($qbcMerchantsLocations instanceof QbcMerchantsLocations) {
            return $this
                ->addUsingAlias(QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME_ID, $qbcMerchantsLocations->getCommercialNameId(), $comparison);
        } elseif ($qbcMerchantsLocations instanceof PropelObjectCollection) {
            return $this
                ->useQbcMerchantsLocationsQuery()
                ->filterByPrimaryKeys($qbcMerchantsLocations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByQbcMerchantsLocations() only accepts arguments of type QbcMerchantsLocations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the QbcMerchantsLocations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return QbcMerchantsCommercialNamesQuery The current query, for fluid interface
     */
    public function joinQbcMerchantsLocations($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('QbcMerchantsLocations');

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
            $this->addJoinObject($join, 'QbcMerchantsLocations');
        }

        return $this;
    }

    /**
     * Use the QbcMerchantsLocations relation QbcMerchantsLocations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   QbcMerchantsLocationsQuery A secondary query class using the current class as primary query
     */
    public function useQbcMerchantsLocationsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinQbcMerchantsLocations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'QbcMerchantsLocations', 'QbcMerchantsLocationsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   QbcMerchantsCommercialNames $qbcMerchantsCommercialNames Object to remove from the list of results
     *
     * @return QbcMerchantsCommercialNamesQuery The current query, for fluid interface
     */
    public function prune($qbcMerchantsCommercialNames = null)
    {
        if ($qbcMerchantsCommercialNames) {
            $this->addUsingAlias(QbcMerchantsCommercialNamesPeer::COMMERCIAL_NAME_ID, $qbcMerchantsCommercialNames->getCommercialNameId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
