<?php


/**
 * Base class that represents a query for the 'groupdeals_merchants' table.
 *
 *
 *
 * @method GroupdealsMerchantsQuery orderByMerchantsId($order = Criteria::ASC) Order by the merchants_id column
 * @method GroupdealsMerchantsQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method GroupdealsMerchantsQuery orderByPermissions($order = Criteria::ASC) Order by the permissions column
 * @method GroupdealsMerchantsQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method GroupdealsMerchantsQuery orderByMerchantLogo($order = Criteria::ASC) Order by the merchant_logo column
 * @method GroupdealsMerchantsQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method GroupdealsMerchantsQuery orderByWebsite($order = Criteria::ASC) Order by the website column
 * @method GroupdealsMerchantsQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method GroupdealsMerchantsQuery orderByFacebook($order = Criteria::ASC) Order by the facebook column
 * @method GroupdealsMerchantsQuery orderByTwitter($order = Criteria::ASC) Order by the twitter column
 * @method GroupdealsMerchantsQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method GroupdealsMerchantsQuery orderByMobile($order = Criteria::ASC) Order by the mobile column
 * @method GroupdealsMerchantsQuery orderByBusinessHours($order = Criteria::ASC) Order by the business_hours column
 * @method GroupdealsMerchantsQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method GroupdealsMerchantsQuery orderByRedeem($order = Criteria::ASC) Order by the redeem column
 * @method GroupdealsMerchantsQuery orderByPaypalEmail($order = Criteria::ASC) Order by the paypal_email column
 * @method GroupdealsMerchantsQuery orderByAuthorizeInfo($order = Criteria::ASC) Order by the authorize_info column
 * @method GroupdealsMerchantsQuery orderByBankInfo($order = Criteria::ASC) Order by the bank_info column
 * @method GroupdealsMerchantsQuery orderByOther($order = Criteria::ASC) Order by the other column
 * @method GroupdealsMerchantsQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method GroupdealsMerchantsQuery orderByNitNumber($order = Criteria::ASC) Order by the nit_number column
 * @method GroupdealsMerchantsQuery orderByAgent($order = Criteria::ASC) Order by the agent column
 * @method GroupdealsMerchantsQuery orderByServiceProvided($order = Criteria::ASC) Order by the service_provided column
 * @method GroupdealsMerchantsQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method GroupdealsMerchantsQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method GroupdealsMerchantsQuery orderByPrimaryContact($order = Criteria::ASC) Order by the primary_contact column
 * @method GroupdealsMerchantsQuery orderBySecondaryContact($order = Criteria::ASC) Order by the secondary_contact column
 * @method GroupdealsMerchantsQuery orderByLegalName($order = Criteria::ASC) Order by the legal_name column
 * @method GroupdealsMerchantsQuery orderByBranch($order = Criteria::ASC) Order by the branch column
 *
 * @method GroupdealsMerchantsQuery groupByMerchantsId() Group by the merchants_id column
 * @method GroupdealsMerchantsQuery groupByUserId() Group by the user_id column
 * @method GroupdealsMerchantsQuery groupByPermissions() Group by the permissions column
 * @method GroupdealsMerchantsQuery groupByName() Group by the name column
 * @method GroupdealsMerchantsQuery groupByMerchantLogo() Group by the merchant_logo column
 * @method GroupdealsMerchantsQuery groupByDescription() Group by the description column
 * @method GroupdealsMerchantsQuery groupByWebsite() Group by the website column
 * @method GroupdealsMerchantsQuery groupByEmail() Group by the email column
 * @method GroupdealsMerchantsQuery groupByFacebook() Group by the facebook column
 * @method GroupdealsMerchantsQuery groupByTwitter() Group by the twitter column
 * @method GroupdealsMerchantsQuery groupByPhone() Group by the phone column
 * @method GroupdealsMerchantsQuery groupByMobile() Group by the mobile column
 * @method GroupdealsMerchantsQuery groupByBusinessHours() Group by the business_hours column
 * @method GroupdealsMerchantsQuery groupByAddress() Group by the address column
 * @method GroupdealsMerchantsQuery groupByRedeem() Group by the redeem column
 * @method GroupdealsMerchantsQuery groupByPaypalEmail() Group by the paypal_email column
 * @method GroupdealsMerchantsQuery groupByAuthorizeInfo() Group by the authorize_info column
 * @method GroupdealsMerchantsQuery groupByBankInfo() Group by the bank_info column
 * @method GroupdealsMerchantsQuery groupByOther() Group by the other column
 * @method GroupdealsMerchantsQuery groupByStatus() Group by the status column
 * @method GroupdealsMerchantsQuery groupByNitNumber() Group by the nit_number column
 * @method GroupdealsMerchantsQuery groupByAgent() Group by the agent column
 * @method GroupdealsMerchantsQuery groupByServiceProvided() Group by the service_provided column
 * @method GroupdealsMerchantsQuery groupByCity() Group by the city column
 * @method GroupdealsMerchantsQuery groupByCountry() Group by the country column
 * @method GroupdealsMerchantsQuery groupByPrimaryContact() Group by the primary_contact column
 * @method GroupdealsMerchantsQuery groupBySecondaryContact() Group by the secondary_contact column
 * @method GroupdealsMerchantsQuery groupByLegalName() Group by the legal_name column
 * @method GroupdealsMerchantsQuery groupByBranch() Group by the branch column
 *
 * @method GroupdealsMerchantsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GroupdealsMerchantsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GroupdealsMerchantsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GroupdealsMerchantsQuery leftJoinMerchantBankInfo($relationAlias = null) Adds a LEFT JOIN clause to the query using the MerchantBankInfo relation
 * @method GroupdealsMerchantsQuery rightJoinMerchantBankInfo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the MerchantBankInfo relation
 * @method GroupdealsMerchantsQuery innerJoinMerchantBankInfo($relationAlias = null) Adds a INNER JOIN clause to the query using the MerchantBankInfo relation
 *
 * @method GroupdealsMerchantsQuery leftJoinQbcMerchantsCommercialNames($relationAlias = null) Adds a LEFT JOIN clause to the query using the QbcMerchantsCommercialNames relation
 * @method GroupdealsMerchantsQuery rightJoinQbcMerchantsCommercialNames($relationAlias = null) Adds a RIGHT JOIN clause to the query using the QbcMerchantsCommercialNames relation
 * @method GroupdealsMerchantsQuery innerJoinQbcMerchantsCommercialNames($relationAlias = null) Adds a INNER JOIN clause to the query using the QbcMerchantsCommercialNames relation
 *
 * @method GroupdealsMerchantsQuery leftJoinQbcMerchantsContacts($relationAlias = null) Adds a LEFT JOIN clause to the query using the QbcMerchantsContacts relation
 * @method GroupdealsMerchantsQuery rightJoinQbcMerchantsContacts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the QbcMerchantsContacts relation
 * @method GroupdealsMerchantsQuery innerJoinQbcMerchantsContacts($relationAlias = null) Adds a INNER JOIN clause to the query using the QbcMerchantsContacts relation
 *
 * @method GroupdealsMerchantsQuery leftJoinAdminUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the AdminUser relation
 * @method GroupdealsMerchantsQuery rightJoinAdminUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AdminUser relation
 * @method GroupdealsMerchantsQuery innerJoinAdminUser($relationAlias = null) Adds a INNER JOIN clause to the query using the AdminUser relation
 *
 * @method GroupdealsMerchants findOne(PropelPDO $con = null) Return the first GroupdealsMerchants matching the query
 * @method GroupdealsMerchants findOneOrCreate(PropelPDO $con = null) Return the first GroupdealsMerchants matching the query, or a new GroupdealsMerchants object populated from the query conditions when no match is found
 *
 * @method GroupdealsMerchants findOneByUserId(int $user_id) Return the first GroupdealsMerchants filtered by the user_id column
 * @method GroupdealsMerchants findOneByPermissions(string $permissions) Return the first GroupdealsMerchants filtered by the permissions column
 * @method GroupdealsMerchants findOneByName(string $name) Return the first GroupdealsMerchants filtered by the name column
 * @method GroupdealsMerchants findOneByMerchantLogo(string $merchant_logo) Return the first GroupdealsMerchants filtered by the merchant_logo column
 * @method GroupdealsMerchants findOneByDescription(string $description) Return the first GroupdealsMerchants filtered by the description column
 * @method GroupdealsMerchants findOneByWebsite(string $website) Return the first GroupdealsMerchants filtered by the website column
 * @method GroupdealsMerchants findOneByEmail(string $email) Return the first GroupdealsMerchants filtered by the email column
 * @method GroupdealsMerchants findOneByFacebook(string $facebook) Return the first GroupdealsMerchants filtered by the facebook column
 * @method GroupdealsMerchants findOneByTwitter(string $twitter) Return the first GroupdealsMerchants filtered by the twitter column
 * @method GroupdealsMerchants findOneByPhone(string $phone) Return the first GroupdealsMerchants filtered by the phone column
 * @method GroupdealsMerchants findOneByMobile(string $mobile) Return the first GroupdealsMerchants filtered by the mobile column
 * @method GroupdealsMerchants findOneByBusinessHours(string $business_hours) Return the first GroupdealsMerchants filtered by the business_hours column
 * @method GroupdealsMerchants findOneByAddress(string $address) Return the first GroupdealsMerchants filtered by the address column
 * @method GroupdealsMerchants findOneByRedeem(string $redeem) Return the first GroupdealsMerchants filtered by the redeem column
 * @method GroupdealsMerchants findOneByPaypalEmail(string $paypal_email) Return the first GroupdealsMerchants filtered by the paypal_email column
 * @method GroupdealsMerchants findOneByAuthorizeInfo(string $authorize_info) Return the first GroupdealsMerchants filtered by the authorize_info column
 * @method GroupdealsMerchants findOneByBankInfo(int $bank_info) Return the first GroupdealsMerchants filtered by the bank_info column
 * @method GroupdealsMerchants findOneByOther(string $other) Return the first GroupdealsMerchants filtered by the other column
 * @method GroupdealsMerchants findOneByStatus(int $status) Return the first GroupdealsMerchants filtered by the status column
 * @method GroupdealsMerchants findOneByNitNumber(string $nit_number) Return the first GroupdealsMerchants filtered by the nit_number column
 * @method GroupdealsMerchants findOneByAgent(string $agent) Return the first GroupdealsMerchants filtered by the agent column
 * @method GroupdealsMerchants findOneByServiceProvided(string $service_provided) Return the first GroupdealsMerchants filtered by the service_provided column
 * @method GroupdealsMerchants findOneByCity(string $city) Return the first GroupdealsMerchants filtered by the city column
 * @method GroupdealsMerchants findOneByCountry(string $country) Return the first GroupdealsMerchants filtered by the country column
 * @method GroupdealsMerchants findOneByPrimaryContact(string $primary_contact) Return the first GroupdealsMerchants filtered by the primary_contact column
 * @method GroupdealsMerchants findOneBySecondaryContact(string $secondary_contact) Return the first GroupdealsMerchants filtered by the secondary_contact column
 * @method GroupdealsMerchants findOneByLegalName(string $legal_name) Return the first GroupdealsMerchants filtered by the legal_name column
 * @method GroupdealsMerchants findOneByBranch(int $branch) Return the first GroupdealsMerchants filtered by the branch column
 *
 * @method array findByMerchantsId(int $merchants_id) Return GroupdealsMerchants objects filtered by the merchants_id column
 * @method array findByUserId(int $user_id) Return GroupdealsMerchants objects filtered by the user_id column
 * @method array findByPermissions(string $permissions) Return GroupdealsMerchants objects filtered by the permissions column
 * @method array findByName(string $name) Return GroupdealsMerchants objects filtered by the name column
 * @method array findByMerchantLogo(string $merchant_logo) Return GroupdealsMerchants objects filtered by the merchant_logo column
 * @method array findByDescription(string $description) Return GroupdealsMerchants objects filtered by the description column
 * @method array findByWebsite(string $website) Return GroupdealsMerchants objects filtered by the website column
 * @method array findByEmail(string $email) Return GroupdealsMerchants objects filtered by the email column
 * @method array findByFacebook(string $facebook) Return GroupdealsMerchants objects filtered by the facebook column
 * @method array findByTwitter(string $twitter) Return GroupdealsMerchants objects filtered by the twitter column
 * @method array findByPhone(string $phone) Return GroupdealsMerchants objects filtered by the phone column
 * @method array findByMobile(string $mobile) Return GroupdealsMerchants objects filtered by the mobile column
 * @method array findByBusinessHours(string $business_hours) Return GroupdealsMerchants objects filtered by the business_hours column
 * @method array findByAddress(string $address) Return GroupdealsMerchants objects filtered by the address column
 * @method array findByRedeem(string $redeem) Return GroupdealsMerchants objects filtered by the redeem column
 * @method array findByPaypalEmail(string $paypal_email) Return GroupdealsMerchants objects filtered by the paypal_email column
 * @method array findByAuthorizeInfo(string $authorize_info) Return GroupdealsMerchants objects filtered by the authorize_info column
 * @method array findByBankInfo(int $bank_info) Return GroupdealsMerchants objects filtered by the bank_info column
 * @method array findByOther(string $other) Return GroupdealsMerchants objects filtered by the other column
 * @method array findByStatus(int $status) Return GroupdealsMerchants objects filtered by the status column
 * @method array findByNitNumber(string $nit_number) Return GroupdealsMerchants objects filtered by the nit_number column
 * @method array findByAgent(string $agent) Return GroupdealsMerchants objects filtered by the agent column
 * @method array findByServiceProvided(string $service_provided) Return GroupdealsMerchants objects filtered by the service_provided column
 * @method array findByCity(string $city) Return GroupdealsMerchants objects filtered by the city column
 * @method array findByCountry(string $country) Return GroupdealsMerchants objects filtered by the country column
 * @method array findByPrimaryContact(string $primary_contact) Return GroupdealsMerchants objects filtered by the primary_contact column
 * @method array findBySecondaryContact(string $secondary_contact) Return GroupdealsMerchants objects filtered by the secondary_contact column
 * @method array findByLegalName(string $legal_name) Return GroupdealsMerchants objects filtered by the legal_name column
 * @method array findByBranch(int $branch) Return GroupdealsMerchants objects filtered by the branch column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseGroupdealsMerchantsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGroupdealsMerchantsQuery object.
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
            $modelName = 'GroupdealsMerchants';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GroupdealsMerchantsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GroupdealsMerchantsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GroupdealsMerchantsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GroupdealsMerchantsQuery) {
            return $criteria;
        }
        $query = new GroupdealsMerchantsQuery(null, null, $modelAlias);

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
     * @return   GroupdealsMerchants|GroupdealsMerchants[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GroupdealsMerchantsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GroupdealsMerchantsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GroupdealsMerchants A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByMerchantsId($key, $con = null)
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
     * @return                 GroupdealsMerchants A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT merchants_id, user_id, permissions, name, merchant_logo, description, website, email, facebook, twitter, phone, mobile, business_hours, address, redeem, paypal_email, authorize_info, bank_info, other, status, nit_number, agent, service_provided, city, country, primary_contact, secondary_contact, legal_name, branch FROM groupdeals_merchants WHERE merchants_id = :p0';
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
            $obj = new GroupdealsMerchants();
            $obj->hydrate($row);
            GroupdealsMerchantsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GroupdealsMerchants|GroupdealsMerchants[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GroupdealsMerchants[]|mixed the list of results, formatted by the current formatter
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
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GroupdealsMerchantsPeer::MERCHANTS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GroupdealsMerchantsPeer::MERCHANTS_ID, $keys, Criteria::IN);
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
     * @param     mixed $merchantsId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByMerchantsId($merchantsId = null, $comparison = null)
    {
        if (is_array($merchantsId)) {
            $useMinMax = false;
            if (isset($merchantsId['min'])) {
                $this->addUsingAlias(GroupdealsMerchantsPeer::MERCHANTS_ID, $merchantsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($merchantsId['max'])) {
                $this->addUsingAlias(GroupdealsMerchantsPeer::MERCHANTS_ID, $merchantsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::MERCHANTS_ID, $merchantsId, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id >= 12
     * $query->filterByUserId(array('max' => 12)); // WHERE user_id <= 12
     * </code>
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(GroupdealsMerchantsPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(GroupdealsMerchantsPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the permissions column
     *
     * Example usage:
     * <code>
     * $query->filterByPermissions('fooValue');   // WHERE permissions = 'fooValue'
     * $query->filterByPermissions('%fooValue%'); // WHERE permissions LIKE '%fooValue%'
     * </code>
     *
     * @param     string $permissions The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByPermissions($permissions = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($permissions)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $permissions)) {
                $permissions = str_replace('*', '%', $permissions);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::PERMISSIONS, $permissions, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the merchant_logo column
     *
     * Example usage:
     * <code>
     * $query->filterByMerchantLogo('fooValue');   // WHERE merchant_logo = 'fooValue'
     * $query->filterByMerchantLogo('%fooValue%'); // WHERE merchant_logo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $merchantLogo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByMerchantLogo($merchantLogo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($merchantLogo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $merchantLogo)) {
                $merchantLogo = str_replace('*', '%', $merchantLogo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::MERCHANT_LOGO, $merchantLogo, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the website column
     *
     * Example usage:
     * <code>
     * $query->filterByWebsite('fooValue');   // WHERE website = 'fooValue'
     * $query->filterByWebsite('%fooValue%'); // WHERE website LIKE '%fooValue%'
     * </code>
     *
     * @param     string $website The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByWebsite($website = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($website)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $website)) {
                $website = str_replace('*', '%', $website);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::WEBSITE, $website, $comparison);
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
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GroupdealsMerchantsPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the facebook column
     *
     * Example usage:
     * <code>
     * $query->filterByFacebook('fooValue');   // WHERE facebook = 'fooValue'
     * $query->filterByFacebook('%fooValue%'); // WHERE facebook LIKE '%fooValue%'
     * </code>
     *
     * @param     string $facebook The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByFacebook($facebook = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($facebook)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $facebook)) {
                $facebook = str_replace('*', '%', $facebook);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::FACEBOOK, $facebook, $comparison);
    }

    /**
     * Filter the query on the twitter column
     *
     * Example usage:
     * <code>
     * $query->filterByTwitter('fooValue');   // WHERE twitter = 'fooValue'
     * $query->filterByTwitter('%fooValue%'); // WHERE twitter LIKE '%fooValue%'
     * </code>
     *
     * @param     string $twitter The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByTwitter($twitter = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($twitter)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $twitter)) {
                $twitter = str_replace('*', '%', $twitter);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::TWITTER, $twitter, $comparison);
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
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GroupdealsMerchantsPeer::PHONE, $phone, $comparison);
    }

    /**
     * Filter the query on the mobile column
     *
     * Example usage:
     * <code>
     * $query->filterByMobile('fooValue');   // WHERE mobile = 'fooValue'
     * $query->filterByMobile('%fooValue%'); // WHERE mobile LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mobile The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByMobile($mobile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mobile)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mobile)) {
                $mobile = str_replace('*', '%', $mobile);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::MOBILE, $mobile, $comparison);
    }

    /**
     * Filter the query on the business_hours column
     *
     * Example usage:
     * <code>
     * $query->filterByBusinessHours('fooValue');   // WHERE business_hours = 'fooValue'
     * $query->filterByBusinessHours('%fooValue%'); // WHERE business_hours LIKE '%fooValue%'
     * </code>
     *
     * @param     string $businessHours The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByBusinessHours($businessHours = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($businessHours)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $businessHours)) {
                $businessHours = str_replace('*', '%', $businessHours);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::BUSINESS_HOURS, $businessHours, $comparison);
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
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GroupdealsMerchantsPeer::ADDRESS, $address, $comparison);
    }

    /**
     * Filter the query on the redeem column
     *
     * Example usage:
     * <code>
     * $query->filterByRedeem('fooValue');   // WHERE redeem = 'fooValue'
     * $query->filterByRedeem('%fooValue%'); // WHERE redeem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $redeem The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByRedeem($redeem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($redeem)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $redeem)) {
                $redeem = str_replace('*', '%', $redeem);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::REDEEM, $redeem, $comparison);
    }

    /**
     * Filter the query on the paypal_email column
     *
     * Example usage:
     * <code>
     * $query->filterByPaypalEmail('fooValue');   // WHERE paypal_email = 'fooValue'
     * $query->filterByPaypalEmail('%fooValue%'); // WHERE paypal_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paypalEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByPaypalEmail($paypalEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paypalEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paypalEmail)) {
                $paypalEmail = str_replace('*', '%', $paypalEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::PAYPAL_EMAIL, $paypalEmail, $comparison);
    }

    /**
     * Filter the query on the authorize_info column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthorizeInfo('fooValue');   // WHERE authorize_info = 'fooValue'
     * $query->filterByAuthorizeInfo('%fooValue%'); // WHERE authorize_info LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authorizeInfo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByAuthorizeInfo($authorizeInfo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authorizeInfo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authorizeInfo)) {
                $authorizeInfo = str_replace('*', '%', $authorizeInfo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::AUTHORIZE_INFO, $authorizeInfo, $comparison);
    }

    /**
     * Filter the query on the bank_info column
     *
     * Example usage:
     * <code>
     * $query->filterByBankInfo(1234); // WHERE bank_info = 1234
     * $query->filterByBankInfo(array(12, 34)); // WHERE bank_info IN (12, 34)
     * $query->filterByBankInfo(array('min' => 12)); // WHERE bank_info >= 12
     * $query->filterByBankInfo(array('max' => 12)); // WHERE bank_info <= 12
     * </code>
     *
     * @see       filterByMerchantBankInfo()
     *
     * @param     mixed $bankInfo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByBankInfo($bankInfo = null, $comparison = null)
    {
        if (is_array($bankInfo)) {
            $useMinMax = false;
            if (isset($bankInfo['min'])) {
                $this->addUsingAlias(GroupdealsMerchantsPeer::BANK_INFO, $bankInfo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bankInfo['max'])) {
                $this->addUsingAlias(GroupdealsMerchantsPeer::BANK_INFO, $bankInfo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::BANK_INFO, $bankInfo, $comparison);
    }

    /**
     * Filter the query on the other column
     *
     * Example usage:
     * <code>
     * $query->filterByOther('fooValue');   // WHERE other = 'fooValue'
     * $query->filterByOther('%fooValue%'); // WHERE other LIKE '%fooValue%'
     * </code>
     *
     * @param     string $other The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByOther($other = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($other)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $other)) {
                $other = str_replace('*', '%', $other);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::OTHER, $other, $comparison);
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
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (is_array($status)) {
            $useMinMax = false;
            if (isset($status['min'])) {
                $this->addUsingAlias(GroupdealsMerchantsPeer::STATUS, $status['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($status['max'])) {
                $this->addUsingAlias(GroupdealsMerchantsPeer::STATUS, $status['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the nit_number column
     *
     * Example usage:
     * <code>
     * $query->filterByNitNumber('fooValue');   // WHERE nit_number = 'fooValue'
     * $query->filterByNitNumber('%fooValue%'); // WHERE nit_number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nitNumber The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByNitNumber($nitNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nitNumber)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nitNumber)) {
                $nitNumber = str_replace('*', '%', $nitNumber);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::NIT_NUMBER, $nitNumber, $comparison);
    }

    /**
     * Filter the query on the agent column
     *
     * Example usage:
     * <code>
     * $query->filterByAgent('fooValue');   // WHERE agent = 'fooValue'
     * $query->filterByAgent('%fooValue%'); // WHERE agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByAgent($agent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agent)) {
                $agent = str_replace('*', '%', $agent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::AGENT, $agent, $comparison);
    }

    /**
     * Filter the query on the service_provided column
     *
     * Example usage:
     * <code>
     * $query->filterByServiceProvided('fooValue');   // WHERE service_provided = 'fooValue'
     * $query->filterByServiceProvided('%fooValue%'); // WHERE service_provided LIKE '%fooValue%'
     * </code>
     *
     * @param     string $serviceProvided The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByServiceProvided($serviceProvided = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($serviceProvided)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $serviceProvided)) {
                $serviceProvided = str_replace('*', '%', $serviceProvided);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::SERVICE_PROVIDED, $serviceProvided, $comparison);
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
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GroupdealsMerchantsPeer::CITY, $city, $comparison);
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
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GroupdealsMerchantsPeer::COUNTRY, $country, $comparison);
    }

    /**
     * Filter the query on the primary_contact column
     *
     * Example usage:
     * <code>
     * $query->filterByPrimaryContact('fooValue');   // WHERE primary_contact = 'fooValue'
     * $query->filterByPrimaryContact('%fooValue%'); // WHERE primary_contact LIKE '%fooValue%'
     * </code>
     *
     * @param     string $primaryContact The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByPrimaryContact($primaryContact = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($primaryContact)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $primaryContact)) {
                $primaryContact = str_replace('*', '%', $primaryContact);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::PRIMARY_CONTACT, $primaryContact, $comparison);
    }

    /**
     * Filter the query on the secondary_contact column
     *
     * Example usage:
     * <code>
     * $query->filterBySecondaryContact('fooValue');   // WHERE secondary_contact = 'fooValue'
     * $query->filterBySecondaryContact('%fooValue%'); // WHERE secondary_contact LIKE '%fooValue%'
     * </code>
     *
     * @param     string $secondaryContact The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterBySecondaryContact($secondaryContact = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($secondaryContact)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $secondaryContact)) {
                $secondaryContact = str_replace('*', '%', $secondaryContact);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::SECONDARY_CONTACT, $secondaryContact, $comparison);
    }

    /**
     * Filter the query on the legal_name column
     *
     * Example usage:
     * <code>
     * $query->filterByLegalName('fooValue');   // WHERE legal_name = 'fooValue'
     * $query->filterByLegalName('%fooValue%'); // WHERE legal_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $legalName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByLegalName($legalName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($legalName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $legalName)) {
                $legalName = str_replace('*', '%', $legalName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::LEGAL_NAME, $legalName, $comparison);
    }

    /**
     * Filter the query on the branch column
     *
     * Example usage:
     * <code>
     * $query->filterByBranch(1234); // WHERE branch = 1234
     * $query->filterByBranch(array(12, 34)); // WHERE branch IN (12, 34)
     * $query->filterByBranch(array('min' => 12)); // WHERE branch >= 12
     * $query->filterByBranch(array('max' => 12)); // WHERE branch <= 12
     * </code>
     *
     * @param     mixed $branch The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function filterByBranch($branch = null, $comparison = null)
    {
        if (is_array($branch)) {
            $useMinMax = false;
            if (isset($branch['min'])) {
                $this->addUsingAlias(GroupdealsMerchantsPeer::BRANCH, $branch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($branch['max'])) {
                $this->addUsingAlias(GroupdealsMerchantsPeer::BRANCH, $branch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsMerchantsPeer::BRANCH, $branch, $comparison);
    }

    /**
     * Filter the query by a related MerchantBankInfo object
     *
     * @param   MerchantBankInfo|PropelObjectCollection $merchantBankInfo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GroupdealsMerchantsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMerchantBankInfo($merchantBankInfo, $comparison = null)
    {
        if ($merchantBankInfo instanceof MerchantBankInfo) {
            return $this
                ->addUsingAlias(GroupdealsMerchantsPeer::BANK_INFO, $merchantBankInfo->getInfoId(), $comparison);
        } elseif ($merchantBankInfo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GroupdealsMerchantsPeer::BANK_INFO, $merchantBankInfo->toKeyValue('PrimaryKey', 'InfoId'), $comparison);
        } else {
            throw new PropelException('filterByMerchantBankInfo() only accepts arguments of type MerchantBankInfo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the MerchantBankInfo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function joinMerchantBankInfo($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('MerchantBankInfo');

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
            $this->addJoinObject($join, 'MerchantBankInfo');
        }

        return $this;
    }

    /**
     * Use the MerchantBankInfo relation MerchantBankInfo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MerchantBankInfoQuery A secondary query class using the current class as primary query
     */
    public function useMerchantBankInfoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinMerchantBankInfo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'MerchantBankInfo', 'MerchantBankInfoQuery');
    }

    /**
     * Filter the query by a related QbcMerchantsCommercialNames object
     *
     * @param   QbcMerchantsCommercialNames|PropelObjectCollection $qbcMerchantsCommercialNames  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GroupdealsMerchantsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByQbcMerchantsCommercialNames($qbcMerchantsCommercialNames, $comparison = null)
    {
        if ($qbcMerchantsCommercialNames instanceof QbcMerchantsCommercialNames) {
            return $this
                ->addUsingAlias(GroupdealsMerchantsPeer::MERCHANTS_ID, $qbcMerchantsCommercialNames->getMerchantsId(), $comparison);
        } elseif ($qbcMerchantsCommercialNames instanceof PropelObjectCollection) {
            return $this
                ->useQbcMerchantsCommercialNamesQuery()
                ->filterByPrimaryKeys($qbcMerchantsCommercialNames->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByQbcMerchantsCommercialNames() only accepts arguments of type QbcMerchantsCommercialNames or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the QbcMerchantsCommercialNames relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function joinQbcMerchantsCommercialNames($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('QbcMerchantsCommercialNames');

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
            $this->addJoinObject($join, 'QbcMerchantsCommercialNames');
        }

        return $this;
    }

    /**
     * Use the QbcMerchantsCommercialNames relation QbcMerchantsCommercialNames object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   QbcMerchantsCommercialNamesQuery A secondary query class using the current class as primary query
     */
    public function useQbcMerchantsCommercialNamesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinQbcMerchantsCommercialNames($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'QbcMerchantsCommercialNames', 'QbcMerchantsCommercialNamesQuery');
    }

    /**
     * Filter the query by a related QbcMerchantsContacts object
     *
     * @param   QbcMerchantsContacts|PropelObjectCollection $qbcMerchantsContacts  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GroupdealsMerchantsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByQbcMerchantsContacts($qbcMerchantsContacts, $comparison = null)
    {
        if ($qbcMerchantsContacts instanceof QbcMerchantsContacts) {
            return $this
                ->addUsingAlias(GroupdealsMerchantsPeer::MERCHANTS_ID, $qbcMerchantsContacts->getMerchantsId(), $comparison);
        } elseif ($qbcMerchantsContacts instanceof PropelObjectCollection) {
            return $this
                ->useQbcMerchantsContactsQuery()
                ->filterByPrimaryKeys($qbcMerchantsContacts->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByQbcMerchantsContacts() only accepts arguments of type QbcMerchantsContacts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the QbcMerchantsContacts relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function joinQbcMerchantsContacts($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('QbcMerchantsContacts');

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
            $this->addJoinObject($join, 'QbcMerchantsContacts');
        }

        return $this;
    }

    /**
     * Use the QbcMerchantsContacts relation QbcMerchantsContacts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   QbcMerchantsContactsQuery A secondary query class using the current class as primary query
     */
    public function useQbcMerchantsContactsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinQbcMerchantsContacts($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'QbcMerchantsContacts', 'QbcMerchantsContactsQuery');
    }

    /**
     * Filter the query by a related AdminUser object
     *
     * @param   AdminUser|PropelObjectCollection $adminUser  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GroupdealsMerchantsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAdminUser($adminUser, $comparison = null)
    {
        if ($adminUser instanceof AdminUser) {
            return $this
                ->addUsingAlias(GroupdealsMerchantsPeer::MERCHANTS_ID, $adminUser->getMerchantId(), $comparison);
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
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
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
     * @param   GroupdealsMerchants $groupdealsMerchants Object to remove from the list of results
     *
     * @return GroupdealsMerchantsQuery The current query, for fluid interface
     */
    public function prune($groupdealsMerchants = null)
    {
        if ($groupdealsMerchants) {
            $this->addUsingAlias(GroupdealsMerchantsPeer::MERCHANTS_ID, $groupdealsMerchants->getMerchantsId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
