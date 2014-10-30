<?php


/**
 * Base class that represents a query for the 'qbc_merchants_locations' table.
 *
 *
 *
 * @method QbcMerchantsLocationsQuery orderByLocationId($order = Criteria::ASC) Order by the location_id column
 * @method QbcMerchantsLocationsQuery orderByCommercialNameId($order = Criteria::ASC) Order by the commercial_name_id column
 * @method QbcMerchantsLocationsQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method QbcMerchantsLocationsQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method QbcMerchantsLocationsQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method QbcMerchantsLocationsQuery orderByMobilePhone($order = Criteria::ASC) Order by the mobile_phone column
 * @method QbcMerchantsLocationsQuery orderByImage($order = Criteria::ASC) Order by the image column
 * @method QbcMerchantsLocationsQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method QbcMerchantsLocationsQuery orderByContactName($order = Criteria::ASC) Order by the contact_name column
 * @method QbcMerchantsLocationsQuery orderByGoogleMapLat($order = Criteria::ASC) Order by the google_map_lat column
 * @method QbcMerchantsLocationsQuery orderByGoogleMapLog($order = Criteria::ASC) Order by the google_map_log column
 * @method QbcMerchantsLocationsQuery orderByServiceHour($order = Criteria::ASC) Order by the service_hour column
 *
 * @method QbcMerchantsLocationsQuery groupByLocationId() Group by the location_id column
 * @method QbcMerchantsLocationsQuery groupByCommercialNameId() Group by the commercial_name_id column
 * @method QbcMerchantsLocationsQuery groupByAddress() Group by the address column
 * @method QbcMerchantsLocationsQuery groupByCity() Group by the city column
 * @method QbcMerchantsLocationsQuery groupByPhone() Group by the phone column
 * @method QbcMerchantsLocationsQuery groupByMobilePhone() Group by the mobile_phone column
 * @method QbcMerchantsLocationsQuery groupByImage() Group by the image column
 * @method QbcMerchantsLocationsQuery groupByStatus() Group by the status column
 * @method QbcMerchantsLocationsQuery groupByContactName() Group by the contact_name column
 * @method QbcMerchantsLocationsQuery groupByGoogleMapLat() Group by the google_map_lat column
 * @method QbcMerchantsLocationsQuery groupByGoogleMapLog() Group by the google_map_log column
 * @method QbcMerchantsLocationsQuery groupByServiceHour() Group by the service_hour column
 *
 * @method QbcMerchantsLocationsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcMerchantsLocationsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcMerchantsLocationsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcMerchantsLocationsQuery leftJoinQbcMerchantsCommercialNames($relationAlias = null) Adds a LEFT JOIN clause to the query using the QbcMerchantsCommercialNames relation
 * @method QbcMerchantsLocationsQuery rightJoinQbcMerchantsCommercialNames($relationAlias = null) Adds a RIGHT JOIN clause to the query using the QbcMerchantsCommercialNames relation
 * @method QbcMerchantsLocationsQuery innerJoinQbcMerchantsCommercialNames($relationAlias = null) Adds a INNER JOIN clause to the query using the QbcMerchantsCommercialNames relation
 *
 * @method QbcMerchantsLocations findOne(PropelPDO $con = null) Return the first QbcMerchantsLocations matching the query
 * @method QbcMerchantsLocations findOneOrCreate(PropelPDO $con = null) Return the first QbcMerchantsLocations matching the query, or a new QbcMerchantsLocations object populated from the query conditions when no match is found
 *
 * @method QbcMerchantsLocations findOneByCommercialNameId(int $commercial_name_id) Return the first QbcMerchantsLocations filtered by the commercial_name_id column
 * @method QbcMerchantsLocations findOneByAddress(string $address) Return the first QbcMerchantsLocations filtered by the address column
 * @method QbcMerchantsLocations findOneByCity(string $city) Return the first QbcMerchantsLocations filtered by the city column
 * @method QbcMerchantsLocations findOneByPhone(string $phone) Return the first QbcMerchantsLocations filtered by the phone column
 * @method QbcMerchantsLocations findOneByMobilePhone(string $mobile_phone) Return the first QbcMerchantsLocations filtered by the mobile_phone column
 * @method QbcMerchantsLocations findOneByImage(string $image) Return the first QbcMerchantsLocations filtered by the image column
 * @method QbcMerchantsLocations findOneByStatus(boolean $status) Return the first QbcMerchantsLocations filtered by the status column
 * @method QbcMerchantsLocations findOneByContactName(string $contact_name) Return the first QbcMerchantsLocations filtered by the contact_name column
 * @method QbcMerchantsLocations findOneByGoogleMapLat(string $google_map_lat) Return the first QbcMerchantsLocations filtered by the google_map_lat column
 * @method QbcMerchantsLocations findOneByGoogleMapLog(string $google_map_log) Return the first QbcMerchantsLocations filtered by the google_map_log column
 * @method QbcMerchantsLocations findOneByServiceHour(string $service_hour) Return the first QbcMerchantsLocations filtered by the service_hour column
 *
 * @method array findByLocationId(int $location_id) Return QbcMerchantsLocations objects filtered by the location_id column
 * @method array findByCommercialNameId(int $commercial_name_id) Return QbcMerchantsLocations objects filtered by the commercial_name_id column
 * @method array findByAddress(string $address) Return QbcMerchantsLocations objects filtered by the address column
 * @method array findByCity(string $city) Return QbcMerchantsLocations objects filtered by the city column
 * @method array findByPhone(string $phone) Return QbcMerchantsLocations objects filtered by the phone column
 * @method array findByMobilePhone(string $mobile_phone) Return QbcMerchantsLocations objects filtered by the mobile_phone column
 * @method array findByImage(string $image) Return QbcMerchantsLocations objects filtered by the image column
 * @method array findByStatus(boolean $status) Return QbcMerchantsLocations objects filtered by the status column
 * @method array findByContactName(string $contact_name) Return QbcMerchantsLocations objects filtered by the contact_name column
 * @method array findByGoogleMapLat(string $google_map_lat) Return QbcMerchantsLocations objects filtered by the google_map_lat column
 * @method array findByGoogleMapLog(string $google_map_log) Return QbcMerchantsLocations objects filtered by the google_map_log column
 * @method array findByServiceHour(string $service_hour) Return QbcMerchantsLocations objects filtered by the service_hour column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcMerchantsLocationsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcMerchantsLocationsQuery object.
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
            $modelName = 'QbcMerchantsLocations';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcMerchantsLocationsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcMerchantsLocationsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcMerchantsLocationsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcMerchantsLocationsQuery) {
            return $criteria;
        }
        $query = new QbcMerchantsLocationsQuery(null, null, $modelAlias);

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
     * @return   QbcMerchantsLocations|QbcMerchantsLocations[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcMerchantsLocationsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcMerchantsLocationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcMerchantsLocations A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByLocationId($key, $con = null)
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
     * @return                 QbcMerchantsLocations A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT location_id, commercial_name_id, address, city, phone, mobile_phone, image, status, contact_name, google_map_lat, google_map_log, service_hour FROM qbc_merchants_locations WHERE location_id = :p0';
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
            $obj = new QbcMerchantsLocations();
            $obj->hydrate($row);
            QbcMerchantsLocationsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcMerchantsLocations|QbcMerchantsLocations[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcMerchantsLocations[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcMerchantsLocationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcMerchantsLocationsPeer::LOCATION_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcMerchantsLocationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcMerchantsLocationsPeer::LOCATION_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the location_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLocationId(1234); // WHERE location_id = 1234
     * $query->filterByLocationId(array(12, 34)); // WHERE location_id IN (12, 34)
     * $query->filterByLocationId(array('min' => 12)); // WHERE location_id >= 12
     * $query->filterByLocationId(array('max' => 12)); // WHERE location_id <= 12
     * </code>
     *
     * @param     mixed $locationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsLocationsQuery The current query, for fluid interface
     */
    public function filterByLocationId($locationId = null, $comparison = null)
    {
        if (is_array($locationId)) {
            $useMinMax = false;
            if (isset($locationId['min'])) {
                $this->addUsingAlias(QbcMerchantsLocationsPeer::LOCATION_ID, $locationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($locationId['max'])) {
                $this->addUsingAlias(QbcMerchantsLocationsPeer::LOCATION_ID, $locationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcMerchantsLocationsPeer::LOCATION_ID, $locationId, $comparison);
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
     * @see       filterByQbcMerchantsCommercialNames()
     *
     * @param     mixed $commercialNameId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsLocationsQuery The current query, for fluid interface
     */
    public function filterByCommercialNameId($commercialNameId = null, $comparison = null)
    {
        if (is_array($commercialNameId)) {
            $useMinMax = false;
            if (isset($commercialNameId['min'])) {
                $this->addUsingAlias(QbcMerchantsLocationsPeer::COMMERCIAL_NAME_ID, $commercialNameId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commercialNameId['max'])) {
                $this->addUsingAlias(QbcMerchantsLocationsPeer::COMMERCIAL_NAME_ID, $commercialNameId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcMerchantsLocationsPeer::COMMERCIAL_NAME_ID, $commercialNameId, $comparison);
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
     * @return QbcMerchantsLocationsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcMerchantsLocationsPeer::ADDRESS, $address, $comparison);
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
     * @return QbcMerchantsLocationsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcMerchantsLocationsPeer::CITY, $city, $comparison);
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
     * @return QbcMerchantsLocationsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcMerchantsLocationsPeer::PHONE, $phone, $comparison);
    }

    /**
     * Filter the query on the mobile_phone column
     *
     * Example usage:
     * <code>
     * $query->filterByMobilePhone('fooValue');   // WHERE mobile_phone = 'fooValue'
     * $query->filterByMobilePhone('%fooValue%'); // WHERE mobile_phone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mobilePhone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsLocationsQuery The current query, for fluid interface
     */
    public function filterByMobilePhone($mobilePhone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mobilePhone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mobilePhone)) {
                $mobilePhone = str_replace('*', '%', $mobilePhone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMerchantsLocationsPeer::MOBILE_PHONE, $mobilePhone, $comparison);
    }

    /**
     * Filter the query on the image column
     *
     * Example usage:
     * <code>
     * $query->filterByImage('fooValue');   // WHERE image = 'fooValue'
     * $query->filterByImage('%fooValue%'); // WHERE image LIKE '%fooValue%'
     * </code>
     *
     * @param     string $image The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsLocationsQuery The current query, for fluid interface
     */
    public function filterByImage($image = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($image)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $image)) {
                $image = str_replace('*', '%', $image);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMerchantsLocationsPeer::IMAGE, $image, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus(true); // WHERE status = true
     * $query->filterByStatus('yes'); // WHERE status = true
     * </code>
     *
     * @param     boolean|string $status The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsLocationsQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (is_string($status)) {
            $status = in_array(strtolower($status), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(QbcMerchantsLocationsPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the contact_name column
     *
     * Example usage:
     * <code>
     * $query->filterByContactName('fooValue');   // WHERE contact_name = 'fooValue'
     * $query->filterByContactName('%fooValue%'); // WHERE contact_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsLocationsQuery The current query, for fluid interface
     */
    public function filterByContactName($contactName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contactName)) {
                $contactName = str_replace('*', '%', $contactName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMerchantsLocationsPeer::CONTACT_NAME, $contactName, $comparison);
    }

    /**
     * Filter the query on the google_map_lat column
     *
     * Example usage:
     * <code>
     * $query->filterByGoogleMapLat('fooValue');   // WHERE google_map_lat = 'fooValue'
     * $query->filterByGoogleMapLat('%fooValue%'); // WHERE google_map_lat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $googleMapLat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsLocationsQuery The current query, for fluid interface
     */
    public function filterByGoogleMapLat($googleMapLat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($googleMapLat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $googleMapLat)) {
                $googleMapLat = str_replace('*', '%', $googleMapLat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMerchantsLocationsPeer::GOOGLE_MAP_LAT, $googleMapLat, $comparison);
    }

    /**
     * Filter the query on the google_map_log column
     *
     * Example usage:
     * <code>
     * $query->filterByGoogleMapLog('fooValue');   // WHERE google_map_log = 'fooValue'
     * $query->filterByGoogleMapLog('%fooValue%'); // WHERE google_map_log LIKE '%fooValue%'
     * </code>
     *
     * @param     string $googleMapLog The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsLocationsQuery The current query, for fluid interface
     */
    public function filterByGoogleMapLog($googleMapLog = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($googleMapLog)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $googleMapLog)) {
                $googleMapLog = str_replace('*', '%', $googleMapLog);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMerchantsLocationsPeer::GOOGLE_MAP_LOG, $googleMapLog, $comparison);
    }

    /**
     * Filter the query on the service_hour column
     *
     * Example usage:
     * <code>
     * $query->filterByServiceHour('fooValue');   // WHERE service_hour = 'fooValue'
     * $query->filterByServiceHour('%fooValue%'); // WHERE service_hour LIKE '%fooValue%'
     * </code>
     *
     * @param     string $serviceHour The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMerchantsLocationsQuery The current query, for fluid interface
     */
    public function filterByServiceHour($serviceHour = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($serviceHour)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $serviceHour)) {
                $serviceHour = str_replace('*', '%', $serviceHour);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMerchantsLocationsPeer::SERVICE_HOUR, $serviceHour, $comparison);
    }

    /**
     * Filter the query by a related QbcMerchantsCommercialNames object
     *
     * @param   QbcMerchantsCommercialNames|PropelObjectCollection $qbcMerchantsCommercialNames The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 QbcMerchantsLocationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByQbcMerchantsCommercialNames($qbcMerchantsCommercialNames, $comparison = null)
    {
        if ($qbcMerchantsCommercialNames instanceof QbcMerchantsCommercialNames) {
            return $this
                ->addUsingAlias(QbcMerchantsLocationsPeer::COMMERCIAL_NAME_ID, $qbcMerchantsCommercialNames->getCommercialNameId(), $comparison);
        } elseif ($qbcMerchantsCommercialNames instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(QbcMerchantsLocationsPeer::COMMERCIAL_NAME_ID, $qbcMerchantsCommercialNames->toKeyValue('PrimaryKey', 'CommercialNameId'), $comparison);
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
     * @return QbcMerchantsLocationsQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   QbcMerchantsLocations $qbcMerchantsLocations Object to remove from the list of results
     *
     * @return QbcMerchantsLocationsQuery The current query, for fluid interface
     */
    public function prune($qbcMerchantsLocations = null)
    {
        if ($qbcMerchantsLocations) {
            $this->addUsingAlias(QbcMerchantsLocationsPeer::LOCATION_ID, $qbcMerchantsLocations->getLocationId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
