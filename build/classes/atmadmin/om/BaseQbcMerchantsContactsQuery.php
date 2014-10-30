<?php


/**
 * Base class that represents a query for the 'qbc_merchants_contacts' table.
 *
 *
 *
 * @method QbcMerchantsContactsQuery orderByContactId($order = Criteria::ASC) Order by the contact_id column
 * @method QbcMerchantsContactsQuery orderByMerchantsId($order = Criteria::ASC) Order by the merchants_id column
 * @method QbcMerchantsContactsQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method QbcMerchantsContactsQuery orderBySurname($order = Criteria::ASC) Order by the surname column
 * @method QbcMerchantsContactsQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method QbcMerchantsContactsQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method QbcMerchantsContactsQuery orderByJobTitle($order = Criteria::ASC) Order by the job_title column
 * @method QbcMerchantsContactsQuery orderByOfficeAddress($order = Criteria::ASC) Order by the office_address column
 * @method QbcMerchantsContactsQuery orderByCellPhone($order = Criteria::ASC) Order by the cell_phone column
 * @method QbcMerchantsContactsQuery orderByFirstContact($order = Criteria::ASC) Order by the first_contact column
 *
 * @method QbcMerchantsContactsQuery groupByContactId() Group by the contact_id column
 * @method QbcMerchantsContactsQuery groupByMerchantsId() Group by the merchants_id column
 * @method QbcMerchantsContactsQuery groupByName() Group by the name column
 * @method QbcMerchantsContactsQuery groupBySurname() Group by the surname column
 * @method QbcMerchantsContactsQuery groupByEmail() Group by the email column
 * @method QbcMerchantsContactsQuery groupByPhone() Group by the phone column
 * @method QbcMerchantsContactsQuery groupByJobTitle() Group by the job_title column
 * @method QbcMerchantsContactsQuery groupByOfficeAddress() Group by the office_address column
 * @method QbcMerchantsContactsQuery groupByCellPhone() Group by the cell_phone column
 * @method QbcMerchantsContactsQuery groupByFirstContact() Group by the first_contact column
 *
 * @method QbcMerchantsContactsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcMerchantsContactsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcMerchantsContactsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcMerchantsContactsQuery leftJoinGroupdealsMerchants($relationAlias = null) Adds a LEFT JOIN clause to the query using the GroupdealsMerchants relation
 * @method QbcMerchantsContactsQuery rightJoinGroupdealsMerchants($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GroupdealsMerchants relation
 * @method QbcMerchantsContactsQuery innerJoinGroupdealsMerchants($relationAlias = null) Adds a INNER JOIN clause to the query using the GroupdealsMerchants relation
 *
 * @method QbcMerchantsContacts findOne(PropelPDO $con = null) Return the first QbcMerchantsContacts matching the query
 * @method QbcMerchantsContacts findOneOrCreate(PropelPDO $con = null) Return the first QbcMerchantsContacts matching the query, or a new QbcMerchantsContacts object populated from the query conditions when no match is found
 *
 * @method QbcMerchantsContacts findOneByMerchantsId(int $merchants_id) Return the first QbcMerchantsContacts filtered by the merchants_id column
 * @method QbcMerchantsContacts findOneByName(string $name) Return the first QbcMerchantsContacts filtered by the name column
 * @method QbcMerchantsContacts findOneBySurname(string $surname) Return the first QbcMerchantsContacts filtered by the surname column
 * @method QbcMerchantsContacts findOneByEmail(string $email) Return the first QbcMerchantsContacts filtered by the email column
 * @method QbcMerchantsContacts findOneByPhone(string $phone) Return the first QbcMerchantsContacts filtered by the phone column
 * @method QbcMerchantsContacts findOneByJobTitle(string $job_title) Return the first QbcMerchantsContacts filtered by the job_title column
 * @method QbcMerchantsContacts findOneByOfficeAddress(string $office_address) Return the first QbcMerchantsContacts filtered by the office_address column
 * @method QbcMerchantsContacts findOneByCellPhone(string $cell_phone) Return the first QbcMerchantsContacts filtered by the cell_phone column
 * @method QbcMerchantsContacts findOneByFirstContact(boolean $first_contact) Return the first QbcMerchantsContacts filtered by the first_contact column
 *
 * @method array findByContactId(int $contact_id) Return QbcMerchantsContacts objects filtered by the contact_id column
 * @method array findByMerchantsId(int $merchants_id) Return QbcMerchantsContacts objects filtered by the merchants_id column
 * @method array findByName(string $name) Return QbcMerchantsContacts objects filtered by the name column
 * @method array findBySurname(string $surname) Return QbcMerchantsContacts objects filtered by the surname column
 * @method array findByEmail(string $email) Return QbcMerchantsContacts objects filtered by the email column
 * @method array findByPhone(string $phone) Return QbcMerchantsContacts objects filtered by the phone column
 * @method array findByJobTitle(string $job_title) Return QbcMerchantsContacts objects filtered by the job_title column
 * @method array findByOfficeAddress(string $office_address) Return QbcMerchantsContacts objects filtered by the office_address column
 * @method array findByCellPhone(string $cell_phone) Return QbcMerchantsContacts objects filtered by the cell_phone column
 * @method array findByFirstContact(boolean $first_contact) Return QbcMerchantsContacts objects filtered by the first_contact column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcMerchantsContactsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcMerchantsContactsQuery object.
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
            $modelName = 'QbcMerchantsContacts';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcMerchantsContactsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcMerchantsContactsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcMerchantsContactsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcMerchantsContactsQuery) {
            return $criteria;
        }
        $query = new QbcMerchantsContactsQuery(null, null, $modelAlias);

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
     * @return   QbcMerchantsContacts|QbcMerchantsContacts[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcMerchantsContactsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcMerchantsContacts A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByContactId($key, $con = null)
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
     * @return                 QbcMerchantsContacts A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT contact_id, merchants_id, name, surname, email, phone, job_title, office_address, cell_phone, first_contact FROM qbc_merchants_contacts WHERE contact_id = :p0';
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
            $obj = new QbcMerchantsContacts();
            $obj->hydrate($row);
            QbcMerchantsContactsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcMerchantsContacts|QbcMerchantsContacts[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcMerchantsContacts[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcMerchantsContactsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcMerchantsContactsPeer::CONTACT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcMerchantsContactsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcMerchantsContactsPeer::CONTACT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the contact_id column
     *
     * Example usage:
     * <code>
     * $query->filterByContactId(1234); // WHERE contact_id = 1234
     * $query->filterByContactId(array(12, 34)); // WHERE contact_id IN (12, 34)
     * $query->filterByContactId(array('min' => 12)); // WHERE contact_id >= 12
     * $query->filterByContactId(array('max' => 12)); // WHERE contact_id <= 12
     * </code>
     *
     * @param     mixed $contactId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsContactsQuery The current query, for fluid interface
     */
    public function filterByContactId($contactId = null, $comparison = null)
    {
        if (is_array($contactId)) {
            $useMinMax = false;
            if (isset($contactId['min'])) {
                $this->addUsingAlias(QbcMerchantsContactsPeer::CONTACT_ID, $contactId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contactId['max'])) {
                $this->addUsingAlias(QbcMerchantsContactsPeer::CONTACT_ID, $contactId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcMerchantsContactsPeer::CONTACT_ID, $contactId, $comparison);
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
     * @return QbcMerchantsContactsQuery The current query, for fluid interface
     */
    public function filterByMerchantsId($merchantsId = null, $comparison = null)
    {
        if (is_array($merchantsId)) {
            $useMinMax = false;
            if (isset($merchantsId['min'])) {
                $this->addUsingAlias(QbcMerchantsContactsPeer::MERCHANTS_ID, $merchantsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($merchantsId['max'])) {
                $this->addUsingAlias(QbcMerchantsContactsPeer::MERCHANTS_ID, $merchantsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcMerchantsContactsPeer::MERCHANTS_ID, $merchantsId, $comparison);
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
     * @return QbcMerchantsContactsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcMerchantsContactsPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the surname column
     *
     * Example usage:
     * <code>
     * $query->filterBySurname('fooValue');   // WHERE surname = 'fooValue'
     * $query->filterBySurname('%fooValue%'); // WHERE surname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $surname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsContactsQuery The current query, for fluid interface
     */
    public function filterBySurname($surname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($surname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $surname)) {
                $surname = str_replace('*', '%', $surname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMerchantsContactsPeer::SURNAME, $surname, $comparison);
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
     * @return QbcMerchantsContactsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcMerchantsContactsPeer::EMAIL, $email, $comparison);
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
     * @return QbcMerchantsContactsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcMerchantsContactsPeer::PHONE, $phone, $comparison);
    }

    /**
     * Filter the query on the job_title column
     *
     * Example usage:
     * <code>
     * $query->filterByJobTitle('fooValue');   // WHERE job_title = 'fooValue'
     * $query->filterByJobTitle('%fooValue%'); // WHERE job_title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jobTitle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsContactsQuery The current query, for fluid interface
     */
    public function filterByJobTitle($jobTitle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jobTitle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jobTitle)) {
                $jobTitle = str_replace('*', '%', $jobTitle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMerchantsContactsPeer::JOB_TITLE, $jobTitle, $comparison);
    }

    /**
     * Filter the query on the office_address column
     *
     * Example usage:
     * <code>
     * $query->filterByOfficeAddress('fooValue');   // WHERE office_address = 'fooValue'
     * $query->filterByOfficeAddress('%fooValue%'); // WHERE office_address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $officeAddress The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsContactsQuery The current query, for fluid interface
     */
    public function filterByOfficeAddress($officeAddress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($officeAddress)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $officeAddress)) {
                $officeAddress = str_replace('*', '%', $officeAddress);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMerchantsContactsPeer::OFFICE_ADDRESS, $officeAddress, $comparison);
    }

    /**
     * Filter the query on the cell_phone column
     *
     * Example usage:
     * <code>
     * $query->filterByCellPhone('fooValue');   // WHERE cell_phone = 'fooValue'
     * $query->filterByCellPhone('%fooValue%'); // WHERE cell_phone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cellPhone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsContactsQuery The current query, for fluid interface
     */
    public function filterByCellPhone($cellPhone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cellPhone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cellPhone)) {
                $cellPhone = str_replace('*', '%', $cellPhone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMerchantsContactsPeer::CELL_PHONE, $cellPhone, $comparison);
    }

    /**
     * Filter the query on the first_contact column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstContact(true); // WHERE first_contact = true
     * $query->filterByFirstContact('yes'); // WHERE first_contact = true
     * </code>
     *
     * @param     boolean|string $firstContact The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsContactsQuery The current query, for fluid interface
     */
    public function filterByFirstContact($firstContact = null, $comparison = null)
    {
        if (is_string($firstContact)) {
            $firstContact = in_array(strtolower($firstContact), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(QbcMerchantsContactsPeer::FIRST_CONTACT, $firstContact, $comparison);
    }

    /**
     * Filter the query by a related GroupdealsMerchants object
     *
     * @param   GroupdealsMerchants|PropelObjectCollection $groupdealsMerchants The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 QbcMerchantsContactsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGroupdealsMerchants($groupdealsMerchants, $comparison = null)
    {
        if ($groupdealsMerchants instanceof GroupdealsMerchants) {
            return $this
                ->addUsingAlias(QbcMerchantsContactsPeer::MERCHANTS_ID, $groupdealsMerchants->getMerchantsId(), $comparison);
        } elseif ($groupdealsMerchants instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(QbcMerchantsContactsPeer::MERCHANTS_ID, $groupdealsMerchants->toKeyValue('PrimaryKey', 'MerchantsId'), $comparison);
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
     * @return QbcMerchantsContactsQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   QbcMerchantsContacts $qbcMerchantsContacts Object to remove from the list of results
     *
     * @return QbcMerchantsContactsQuery The current query, for fluid interface
     */
    public function prune($qbcMerchantsContacts = null)
    {
        if ($qbcMerchantsContacts) {
            $this->addUsingAlias(QbcMerchantsContactsPeer::CONTACT_ID, $qbcMerchantsContacts->getContactId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
