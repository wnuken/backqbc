<?php


/**
 * Base class that represents a query for the 'admin_user' table.
 *
 *
 *
 * @method AdminUserQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method AdminUserQuery orderByFirstname($order = Criteria::ASC) Order by the firstname column
 * @method AdminUserQuery orderByLastname($order = Criteria::ASC) Order by the lastname column
 * @method AdminUserQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method AdminUserQuery orderByUsername($order = Criteria::ASC) Order by the username column
 * @method AdminUserQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method AdminUserQuery orderByCreated($order = Criteria::ASC) Order by the created column
 * @method AdminUserQuery orderByModified($order = Criteria::ASC) Order by the modified column
 * @method AdminUserQuery orderByLogdate($order = Criteria::ASC) Order by the logdate column
 * @method AdminUserQuery orderByLognum($order = Criteria::ASC) Order by the lognum column
 * @method AdminUserQuery orderByReloadAclFlag($order = Criteria::ASC) Order by the reload_acl_flag column
 * @method AdminUserQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method AdminUserQuery orderByExtra($order = Criteria::ASC) Order by the extra column
 * @method AdminUserQuery orderByRpToken($order = Criteria::ASC) Order by the rp_token column
 * @method AdminUserQuery orderByRpTokenCreatedAt($order = Criteria::ASC) Order by the rp_token_created_at column
 * @method AdminUserQuery orderByFailuresNum($order = Criteria::ASC) Order by the failures_num column
 * @method AdminUserQuery orderByFirstFailure($order = Criteria::ASC) Order by the first_failure column
 * @method AdminUserQuery orderByLockExpires($order = Criteria::ASC) Order by the lock_expires column
 * @method AdminUserQuery orderByMovil($order = Criteria::ASC) Order by the movil column
 * @method AdminUserQuery orderByIdEmployee($order = Criteria::ASC) Order by the id_employee column
 * @method AdminUserQuery orderByPosition($order = Criteria::ASC) Order by the position column
 * @method AdminUserQuery orderByMerchantId($order = Criteria::ASC) Order by the merchant_id column
 * @method AdminUserQuery orderByDob($order = Criteria::ASC) Order by the dob column
 * @method AdminUserQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method AdminUserQuery orderByWorkmovil($order = Criteria::ASC) Order by the workmovil column
 * @method AdminUserQuery orderByPosId($order = Criteria::ASC) Order by the pos_id column
 *
 * @method AdminUserQuery groupByUserId() Group by the user_id column
 * @method AdminUserQuery groupByFirstname() Group by the firstname column
 * @method AdminUserQuery groupByLastname() Group by the lastname column
 * @method AdminUserQuery groupByEmail() Group by the email column
 * @method AdminUserQuery groupByUsername() Group by the username column
 * @method AdminUserQuery groupByPassword() Group by the password column
 * @method AdminUserQuery groupByCreated() Group by the created column
 * @method AdminUserQuery groupByModified() Group by the modified column
 * @method AdminUserQuery groupByLogdate() Group by the logdate column
 * @method AdminUserQuery groupByLognum() Group by the lognum column
 * @method AdminUserQuery groupByReloadAclFlag() Group by the reload_acl_flag column
 * @method AdminUserQuery groupByIsActive() Group by the is_active column
 * @method AdminUserQuery groupByExtra() Group by the extra column
 * @method AdminUserQuery groupByRpToken() Group by the rp_token column
 * @method AdminUserQuery groupByRpTokenCreatedAt() Group by the rp_token_created_at column
 * @method AdminUserQuery groupByFailuresNum() Group by the failures_num column
 * @method AdminUserQuery groupByFirstFailure() Group by the first_failure column
 * @method AdminUserQuery groupByLockExpires() Group by the lock_expires column
 * @method AdminUserQuery groupByMovil() Group by the movil column
 * @method AdminUserQuery groupByIdEmployee() Group by the id_employee column
 * @method AdminUserQuery groupByPosition() Group by the position column
 * @method AdminUserQuery groupByMerchantId() Group by the merchant_id column
 * @method AdminUserQuery groupByDob() Group by the dob column
 * @method AdminUserQuery groupByPhone() Group by the phone column
 * @method AdminUserQuery groupByWorkmovil() Group by the workmovil column
 * @method AdminUserQuery groupByPosId() Group by the pos_id column
 *
 * @method AdminUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AdminUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AdminUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AdminUserQuery leftJoinGroupdealsMerchants($relationAlias = null) Adds a LEFT JOIN clause to the query using the GroupdealsMerchants relation
 * @method AdminUserQuery rightJoinGroupdealsMerchants($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GroupdealsMerchants relation
 * @method AdminUserQuery innerJoinGroupdealsMerchants($relationAlias = null) Adds a INNER JOIN clause to the query using the GroupdealsMerchants relation
 *
 * @method AdminUserQuery leftJoinQbcPos($relationAlias = null) Adds a LEFT JOIN clause to the query using the QbcPos relation
 * @method AdminUserQuery rightJoinQbcPos($relationAlias = null) Adds a RIGHT JOIN clause to the query using the QbcPos relation
 * @method AdminUserQuery innerJoinQbcPos($relationAlias = null) Adds a INNER JOIN clause to the query using the QbcPos relation
 *
 * @method AdminUser findOne(PropelPDO $con = null) Return the first AdminUser matching the query
 * @method AdminUser findOneOrCreate(PropelPDO $con = null) Return the first AdminUser matching the query, or a new AdminUser object populated from the query conditions when no match is found
 *
 * @method AdminUser findOneByFirstname(string $firstname) Return the first AdminUser filtered by the firstname column
 * @method AdminUser findOneByLastname(string $lastname) Return the first AdminUser filtered by the lastname column
 * @method AdminUser findOneByEmail(string $email) Return the first AdminUser filtered by the email column
 * @method AdminUser findOneByUsername(string $username) Return the first AdminUser filtered by the username column
 * @method AdminUser findOneByPassword(string $password) Return the first AdminUser filtered by the password column
 * @method AdminUser findOneByCreated(string $created) Return the first AdminUser filtered by the created column
 * @method AdminUser findOneByModified(string $modified) Return the first AdminUser filtered by the modified column
 * @method AdminUser findOneByLogdate(string $logdate) Return the first AdminUser filtered by the logdate column
 * @method AdminUser findOneByLognum(int $lognum) Return the first AdminUser filtered by the lognum column
 * @method AdminUser findOneByReloadAclFlag(int $reload_acl_flag) Return the first AdminUser filtered by the reload_acl_flag column
 * @method AdminUser findOneByIsActive(int $is_active) Return the first AdminUser filtered by the is_active column
 * @method AdminUser findOneByExtra(string $extra) Return the first AdminUser filtered by the extra column
 * @method AdminUser findOneByRpToken(string $rp_token) Return the first AdminUser filtered by the rp_token column
 * @method AdminUser findOneByRpTokenCreatedAt(string $rp_token_created_at) Return the first AdminUser filtered by the rp_token_created_at column
 * @method AdminUser findOneByFailuresNum(int $failures_num) Return the first AdminUser filtered by the failures_num column
 * @method AdminUser findOneByFirstFailure(string $first_failure) Return the first AdminUser filtered by the first_failure column
 * @method AdminUser findOneByLockExpires(string $lock_expires) Return the first AdminUser filtered by the lock_expires column
 * @method AdminUser findOneByMovil(string $movil) Return the first AdminUser filtered by the movil column
 * @method AdminUser findOneByIdEmployee(string $id_employee) Return the first AdminUser filtered by the id_employee column
 * @method AdminUser findOneByPosition(string $position) Return the first AdminUser filtered by the position column
 * @method AdminUser findOneByMerchantId(int $merchant_id) Return the first AdminUser filtered by the merchant_id column
 * @method AdminUser findOneByDob(string $dob) Return the first AdminUser filtered by the dob column
 * @method AdminUser findOneByPhone(string $phone) Return the first AdminUser filtered by the phone column
 * @method AdminUser findOneByWorkmovil(string $workmovil) Return the first AdminUser filtered by the workmovil column
 * @method AdminUser findOneByPosId(int $pos_id) Return the first AdminUser filtered by the pos_id column
 *
 * @method array findByUserId(int $user_id) Return AdminUser objects filtered by the user_id column
 * @method array findByFirstname(string $firstname) Return AdminUser objects filtered by the firstname column
 * @method array findByLastname(string $lastname) Return AdminUser objects filtered by the lastname column
 * @method array findByEmail(string $email) Return AdminUser objects filtered by the email column
 * @method array findByUsername(string $username) Return AdminUser objects filtered by the username column
 * @method array findByPassword(string $password) Return AdminUser objects filtered by the password column
 * @method array findByCreated(string $created) Return AdminUser objects filtered by the created column
 * @method array findByModified(string $modified) Return AdminUser objects filtered by the modified column
 * @method array findByLogdate(string $logdate) Return AdminUser objects filtered by the logdate column
 * @method array findByLognum(int $lognum) Return AdminUser objects filtered by the lognum column
 * @method array findByReloadAclFlag(int $reload_acl_flag) Return AdminUser objects filtered by the reload_acl_flag column
 * @method array findByIsActive(int $is_active) Return AdminUser objects filtered by the is_active column
 * @method array findByExtra(string $extra) Return AdminUser objects filtered by the extra column
 * @method array findByRpToken(string $rp_token) Return AdminUser objects filtered by the rp_token column
 * @method array findByRpTokenCreatedAt(string $rp_token_created_at) Return AdminUser objects filtered by the rp_token_created_at column
 * @method array findByFailuresNum(int $failures_num) Return AdminUser objects filtered by the failures_num column
 * @method array findByFirstFailure(string $first_failure) Return AdminUser objects filtered by the first_failure column
 * @method array findByLockExpires(string $lock_expires) Return AdminUser objects filtered by the lock_expires column
 * @method array findByMovil(string $movil) Return AdminUser objects filtered by the movil column
 * @method array findByIdEmployee(string $id_employee) Return AdminUser objects filtered by the id_employee column
 * @method array findByPosition(string $position) Return AdminUser objects filtered by the position column
 * @method array findByMerchantId(int $merchant_id) Return AdminUser objects filtered by the merchant_id column
 * @method array findByDob(string $dob) Return AdminUser objects filtered by the dob column
 * @method array findByPhone(string $phone) Return AdminUser objects filtered by the phone column
 * @method array findByWorkmovil(string $workmovil) Return AdminUser objects filtered by the workmovil column
 * @method array findByPosId(int $pos_id) Return AdminUser objects filtered by the pos_id column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseAdminUserQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAdminUserQuery object.
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
            $modelName = 'AdminUser';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AdminUserQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AdminUserQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AdminUserQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AdminUserQuery) {
            return $criteria;
        }
        $query = new AdminUserQuery(null, null, $modelAlias);

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
     * @return   AdminUser|AdminUser[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AdminUserPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AdminUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 AdminUser A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByUserId($key, $con = null)
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
     * @return                 AdminUser A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT user_id, firstname, lastname, email, username, password, created, modified, logdate, lognum, reload_acl_flag, is_active, extra, rp_token, rp_token_created_at, failures_num, first_failure, lock_expires, movil, id_employee, position, merchant_id, dob, phone, workmovil, pos_id FROM admin_user WHERE user_id = :p0';
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
            $obj = new AdminUser();
            $obj->hydrate($row);
            AdminUserPeer::addInstanceToPool($obj, (string) $key);
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
     * @return AdminUser|AdminUser[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|AdminUser[]|mixed the list of results, formatted by the current formatter
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
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AdminUserPeer::USER_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AdminUserPeer::USER_ID, $keys, Criteria::IN);
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
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(AdminUserPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(AdminUserPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the firstname column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstname('fooValue');   // WHERE firstname = 'fooValue'
     * $query->filterByFirstname('%fooValue%'); // WHERE firstname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firstname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByFirstname($firstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firstname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $firstname)) {
                $firstname = str_replace('*', '%', $firstname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::FIRSTNAME, $firstname, $comparison);
    }

    /**
     * Filter the query on the lastname column
     *
     * Example usage:
     * <code>
     * $query->filterByLastname('fooValue');   // WHERE lastname = 'fooValue'
     * $query->filterByLastname('%fooValue%'); // WHERE lastname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lastname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByLastname($lastname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lastname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lastname)) {
                $lastname = str_replace('*', '%', $lastname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::LASTNAME, $lastname, $comparison);
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
     * @return AdminUserQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AdminUserPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the username column
     *
     * Example usage:
     * <code>
     * $query->filterByUsername('fooValue');   // WHERE username = 'fooValue'
     * $query->filterByUsername('%fooValue%'); // WHERE username LIKE '%fooValue%'
     * </code>
     *
     * @param     string $username The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByUsername($username = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($username)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $username)) {
                $username = str_replace('*', '%', $username);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::USERNAME, $username, $comparison);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%'); // WHERE password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $password The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByPassword($password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($password)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $password)) {
                $password = str_replace('*', '%', $password);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::PASSWORD, $password, $comparison);
    }

    /**
     * Filter the query on the created column
     *
     * Example usage:
     * <code>
     * $query->filterByCreated('2011-03-14'); // WHERE created = '2011-03-14'
     * $query->filterByCreated('now'); // WHERE created = '2011-03-14'
     * $query->filterByCreated(array('max' => 'yesterday')); // WHERE created < '2011-03-13'
     * </code>
     *
     * @param     mixed $created The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByCreated($created = null, $comparison = null)
    {
        if (is_array($created)) {
            $useMinMax = false;
            if (isset($created['min'])) {
                $this->addUsingAlias(AdminUserPeer::CREATED, $created['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($created['max'])) {
                $this->addUsingAlias(AdminUserPeer::CREATED, $created['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::CREATED, $created, $comparison);
    }

    /**
     * Filter the query on the modified column
     *
     * Example usage:
     * <code>
     * $query->filterByModified('2011-03-14'); // WHERE modified = '2011-03-14'
     * $query->filterByModified('now'); // WHERE modified = '2011-03-14'
     * $query->filterByModified(array('max' => 'yesterday')); // WHERE modified < '2011-03-13'
     * </code>
     *
     * @param     mixed $modified The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(AdminUserPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(AdminUserPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the logdate column
     *
     * Example usage:
     * <code>
     * $query->filterByLogdate('2011-03-14'); // WHERE logdate = '2011-03-14'
     * $query->filterByLogdate('now'); // WHERE logdate = '2011-03-14'
     * $query->filterByLogdate(array('max' => 'yesterday')); // WHERE logdate < '2011-03-13'
     * </code>
     *
     * @param     mixed $logdate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByLogdate($logdate = null, $comparison = null)
    {
        if (is_array($logdate)) {
            $useMinMax = false;
            if (isset($logdate['min'])) {
                $this->addUsingAlias(AdminUserPeer::LOGDATE, $logdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($logdate['max'])) {
                $this->addUsingAlias(AdminUserPeer::LOGDATE, $logdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::LOGDATE, $logdate, $comparison);
    }

    /**
     * Filter the query on the lognum column
     *
     * Example usage:
     * <code>
     * $query->filterByLognum(1234); // WHERE lognum = 1234
     * $query->filterByLognum(array(12, 34)); // WHERE lognum IN (12, 34)
     * $query->filterByLognum(array('min' => 12)); // WHERE lognum >= 12
     * $query->filterByLognum(array('max' => 12)); // WHERE lognum <= 12
     * </code>
     *
     * @param     mixed $lognum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByLognum($lognum = null, $comparison = null)
    {
        if (is_array($lognum)) {
            $useMinMax = false;
            if (isset($lognum['min'])) {
                $this->addUsingAlias(AdminUserPeer::LOGNUM, $lognum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lognum['max'])) {
                $this->addUsingAlias(AdminUserPeer::LOGNUM, $lognum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::LOGNUM, $lognum, $comparison);
    }

    /**
     * Filter the query on the reload_acl_flag column
     *
     * Example usage:
     * <code>
     * $query->filterByReloadAclFlag(1234); // WHERE reload_acl_flag = 1234
     * $query->filterByReloadAclFlag(array(12, 34)); // WHERE reload_acl_flag IN (12, 34)
     * $query->filterByReloadAclFlag(array('min' => 12)); // WHERE reload_acl_flag >= 12
     * $query->filterByReloadAclFlag(array('max' => 12)); // WHERE reload_acl_flag <= 12
     * </code>
     *
     * @param     mixed $reloadAclFlag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByReloadAclFlag($reloadAclFlag = null, $comparison = null)
    {
        if (is_array($reloadAclFlag)) {
            $useMinMax = false;
            if (isset($reloadAclFlag['min'])) {
                $this->addUsingAlias(AdminUserPeer::RELOAD_ACL_FLAG, $reloadAclFlag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reloadAclFlag['max'])) {
                $this->addUsingAlias(AdminUserPeer::RELOAD_ACL_FLAG, $reloadAclFlag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::RELOAD_ACL_FLAG, $reloadAclFlag, $comparison);
    }

    /**
     * Filter the query on the is_active column
     *
     * Example usage:
     * <code>
     * $query->filterByIsActive(1234); // WHERE is_active = 1234
     * $query->filterByIsActive(array(12, 34)); // WHERE is_active IN (12, 34)
     * $query->filterByIsActive(array('min' => 12)); // WHERE is_active >= 12
     * $query->filterByIsActive(array('max' => 12)); // WHERE is_active <= 12
     * </code>
     *
     * @param     mixed $isActive The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByIsActive($isActive = null, $comparison = null)
    {
        if (is_array($isActive)) {
            $useMinMax = false;
            if (isset($isActive['min'])) {
                $this->addUsingAlias(AdminUserPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isActive['max'])) {
                $this->addUsingAlias(AdminUserPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::IS_ACTIVE, $isActive, $comparison);
    }

    /**
     * Filter the query on the extra column
     *
     * Example usage:
     * <code>
     * $query->filterByExtra('fooValue');   // WHERE extra = 'fooValue'
     * $query->filterByExtra('%fooValue%'); // WHERE extra LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extra The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByExtra($extra = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extra)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $extra)) {
                $extra = str_replace('*', '%', $extra);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::EXTRA, $extra, $comparison);
    }

    /**
     * Filter the query on the rp_token column
     *
     * Example usage:
     * <code>
     * $query->filterByRpToken('fooValue');   // WHERE rp_token = 'fooValue'
     * $query->filterByRpToken('%fooValue%'); // WHERE rp_token LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rpToken The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByRpToken($rpToken = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rpToken)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rpToken)) {
                $rpToken = str_replace('*', '%', $rpToken);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::RP_TOKEN, $rpToken, $comparison);
    }

    /**
     * Filter the query on the rp_token_created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByRpTokenCreatedAt('2011-03-14'); // WHERE rp_token_created_at = '2011-03-14'
     * $query->filterByRpTokenCreatedAt('now'); // WHERE rp_token_created_at = '2011-03-14'
     * $query->filterByRpTokenCreatedAt(array('max' => 'yesterday')); // WHERE rp_token_created_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $rpTokenCreatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByRpTokenCreatedAt($rpTokenCreatedAt = null, $comparison = null)
    {
        if (is_array($rpTokenCreatedAt)) {
            $useMinMax = false;
            if (isset($rpTokenCreatedAt['min'])) {
                $this->addUsingAlias(AdminUserPeer::RP_TOKEN_CREATED_AT, $rpTokenCreatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rpTokenCreatedAt['max'])) {
                $this->addUsingAlias(AdminUserPeer::RP_TOKEN_CREATED_AT, $rpTokenCreatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::RP_TOKEN_CREATED_AT, $rpTokenCreatedAt, $comparison);
    }

    /**
     * Filter the query on the failures_num column
     *
     * Example usage:
     * <code>
     * $query->filterByFailuresNum(1234); // WHERE failures_num = 1234
     * $query->filterByFailuresNum(array(12, 34)); // WHERE failures_num IN (12, 34)
     * $query->filterByFailuresNum(array('min' => 12)); // WHERE failures_num >= 12
     * $query->filterByFailuresNum(array('max' => 12)); // WHERE failures_num <= 12
     * </code>
     *
     * @param     mixed $failuresNum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByFailuresNum($failuresNum = null, $comparison = null)
    {
        if (is_array($failuresNum)) {
            $useMinMax = false;
            if (isset($failuresNum['min'])) {
                $this->addUsingAlias(AdminUserPeer::FAILURES_NUM, $failuresNum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($failuresNum['max'])) {
                $this->addUsingAlias(AdminUserPeer::FAILURES_NUM, $failuresNum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::FAILURES_NUM, $failuresNum, $comparison);
    }

    /**
     * Filter the query on the first_failure column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstFailure('2011-03-14'); // WHERE first_failure = '2011-03-14'
     * $query->filterByFirstFailure('now'); // WHERE first_failure = '2011-03-14'
     * $query->filterByFirstFailure(array('max' => 'yesterday')); // WHERE first_failure < '2011-03-13'
     * </code>
     *
     * @param     mixed $firstFailure The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByFirstFailure($firstFailure = null, $comparison = null)
    {
        if (is_array($firstFailure)) {
            $useMinMax = false;
            if (isset($firstFailure['min'])) {
                $this->addUsingAlias(AdminUserPeer::FIRST_FAILURE, $firstFailure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($firstFailure['max'])) {
                $this->addUsingAlias(AdminUserPeer::FIRST_FAILURE, $firstFailure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::FIRST_FAILURE, $firstFailure, $comparison);
    }

    /**
     * Filter the query on the lock_expires column
     *
     * Example usage:
     * <code>
     * $query->filterByLockExpires('2011-03-14'); // WHERE lock_expires = '2011-03-14'
     * $query->filterByLockExpires('now'); // WHERE lock_expires = '2011-03-14'
     * $query->filterByLockExpires(array('max' => 'yesterday')); // WHERE lock_expires < '2011-03-13'
     * </code>
     *
     * @param     mixed $lockExpires The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByLockExpires($lockExpires = null, $comparison = null)
    {
        if (is_array($lockExpires)) {
            $useMinMax = false;
            if (isset($lockExpires['min'])) {
                $this->addUsingAlias(AdminUserPeer::LOCK_EXPIRES, $lockExpires['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lockExpires['max'])) {
                $this->addUsingAlias(AdminUserPeer::LOCK_EXPIRES, $lockExpires['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::LOCK_EXPIRES, $lockExpires, $comparison);
    }

    /**
     * Filter the query on the movil column
     *
     * Example usage:
     * <code>
     * $query->filterByMovil('fooValue');   // WHERE movil = 'fooValue'
     * $query->filterByMovil('%fooValue%'); // WHERE movil LIKE '%fooValue%'
     * </code>
     *
     * @param     string $movil The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByMovil($movil = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($movil)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $movil)) {
                $movil = str_replace('*', '%', $movil);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::MOVIL, $movil, $comparison);
    }

    /**
     * Filter the query on the id_employee column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEmployee('fooValue');   // WHERE id_employee = 'fooValue'
     * $query->filterByIdEmployee('%fooValue%'); // WHERE id_employee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idEmployee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByIdEmployee($idEmployee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idEmployee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idEmployee)) {
                $idEmployee = str_replace('*', '%', $idEmployee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::ID_EMPLOYEE, $idEmployee, $comparison);
    }

    /**
     * Filter the query on the position column
     *
     * Example usage:
     * <code>
     * $query->filterByPosition('fooValue');   // WHERE position = 'fooValue'
     * $query->filterByPosition('%fooValue%'); // WHERE position LIKE '%fooValue%'
     * </code>
     *
     * @param     string $position The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByPosition($position = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($position)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $position)) {
                $position = str_replace('*', '%', $position);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::POSITION, $position, $comparison);
    }

    /**
     * Filter the query on the merchant_id column
     *
     * Example usage:
     * <code>
     * $query->filterByMerchantId(1234); // WHERE merchant_id = 1234
     * $query->filterByMerchantId(array(12, 34)); // WHERE merchant_id IN (12, 34)
     * $query->filterByMerchantId(array('min' => 12)); // WHERE merchant_id >= 12
     * $query->filterByMerchantId(array('max' => 12)); // WHERE merchant_id <= 12
     * </code>
     *
     * @see       filterByGroupdealsMerchants()
     *
     * @param     mixed $merchantId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByMerchantId($merchantId = null, $comparison = null)
    {
        if (is_array($merchantId)) {
            $useMinMax = false;
            if (isset($merchantId['min'])) {
                $this->addUsingAlias(AdminUserPeer::MERCHANT_ID, $merchantId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($merchantId['max'])) {
                $this->addUsingAlias(AdminUserPeer::MERCHANT_ID, $merchantId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::MERCHANT_ID, $merchantId, $comparison);
    }

    /**
     * Filter the query on the dob column
     *
     * Example usage:
     * <code>
     * $query->filterByDob('fooValue');   // WHERE dob = 'fooValue'
     * $query->filterByDob('%fooValue%'); // WHERE dob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dob The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByDob($dob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dob)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dob)) {
                $dob = str_replace('*', '%', $dob);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::DOB, $dob, $comparison);
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
     * @return AdminUserQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AdminUserPeer::PHONE, $phone, $comparison);
    }

    /**
     * Filter the query on the workmovil column
     *
     * Example usage:
     * <code>
     * $query->filterByWorkmovil('fooValue');   // WHERE workmovil = 'fooValue'
     * $query->filterByWorkmovil('%fooValue%'); // WHERE workmovil LIKE '%fooValue%'
     * </code>
     *
     * @param     string $workmovil The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByWorkmovil($workmovil = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($workmovil)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $workmovil)) {
                $workmovil = str_replace('*', '%', $workmovil);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::WORKMOVIL, $workmovil, $comparison);
    }

    /**
     * Filter the query on the pos_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPosId(1234); // WHERE pos_id = 1234
     * $query->filterByPosId(array(12, 34)); // WHERE pos_id IN (12, 34)
     * $query->filterByPosId(array('min' => 12)); // WHERE pos_id >= 12
     * $query->filterByPosId(array('max' => 12)); // WHERE pos_id <= 12
     * </code>
     *
     * @see       filterByQbcPos()
     *
     * @param     mixed $posId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function filterByPosId($posId = null, $comparison = null)
    {
        if (is_array($posId)) {
            $useMinMax = false;
            if (isset($posId['min'])) {
                $this->addUsingAlias(AdminUserPeer::POS_ID, $posId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($posId['max'])) {
                $this->addUsingAlias(AdminUserPeer::POS_ID, $posId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminUserPeer::POS_ID, $posId, $comparison);
    }

    /**
     * Filter the query by a related GroupdealsMerchants object
     *
     * @param   GroupdealsMerchants|PropelObjectCollection $groupdealsMerchants The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AdminUserQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGroupdealsMerchants($groupdealsMerchants, $comparison = null)
    {
        if ($groupdealsMerchants instanceof GroupdealsMerchants) {
            return $this
                ->addUsingAlias(AdminUserPeer::MERCHANT_ID, $groupdealsMerchants->getMerchantsId(), $comparison);
        } elseif ($groupdealsMerchants instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AdminUserPeer::MERCHANT_ID, $groupdealsMerchants->toKeyValue('PrimaryKey', 'MerchantsId'), $comparison);
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
     * @return AdminUserQuery The current query, for fluid interface
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
     * Filter the query by a related QbcPos object
     *
     * @param   QbcPos|PropelObjectCollection $qbcPos The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AdminUserQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByQbcPos($qbcPos, $comparison = null)
    {
        if ($qbcPos instanceof QbcPos) {
            return $this
                ->addUsingAlias(AdminUserPeer::POS_ID, $qbcPos->getId(), $comparison);
        } elseif ($qbcPos instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AdminUserPeer::POS_ID, $qbcPos->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByQbcPos() only accepts arguments of type QbcPos or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the QbcPos relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function joinQbcPos($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('QbcPos');

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
            $this->addJoinObject($join, 'QbcPos');
        }

        return $this;
    }

    /**
     * Use the QbcPos relation QbcPos object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   QbcPosQuery A secondary query class using the current class as primary query
     */
    public function useQbcPosQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinQbcPos($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'QbcPos', 'QbcPosQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   AdminUser $adminUser Object to remove from the list of results
     *
     * @return AdminUserQuery The current query, for fluid interface
     */
    public function prune($adminUser = null)
    {
        if ($adminUser) {
            $this->addUsingAlias(AdminUserPeer::USER_ID, $adminUser->getUserId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
