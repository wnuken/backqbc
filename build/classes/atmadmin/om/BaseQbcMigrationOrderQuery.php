<?php


/**
 * Base class that represents a query for the 'qbc_migration_order' table.
 *
 *
 *
 * @method QbcMigrationOrderQuery orderById($order = Criteria::ASC) Order by the id column
 * @method QbcMigrationOrderQuery orderByAmmount($order = Criteria::ASC) Order by the ammount column
 * @method QbcMigrationOrderQuery orderByCreditsUsed($order = Criteria::ASC) Order by the credits_used column
 * @method QbcMigrationOrderQuery orderByNettoAmmount($order = Criteria::ASC) Order by the netto_ammount column
 * @method QbcMigrationOrderQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method QbcMigrationOrderQuery orderByPaymentMethod($order = Criteria::ASC) Order by the payment_method column
 * @method QbcMigrationOrderQuery orderByCreatedDatetime($order = Criteria::ASC) Order by the created_datetime column
 * @method QbcMigrationOrderQuery orderByDocumentNumber($order = Criteria::ASC) Order by the document_number column
 * @method QbcMigrationOrderQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method QbcMigrationOrderQuery orderByCouponStatus($order = Criteria::ASC) Order by the coupon_status column
 * @method QbcMigrationOrderQuery orderByCampaignSku($order = Criteria::ASC) Order by the campaign_sku column
 * @method QbcMigrationOrderQuery orderByCustomerId($order = Criteria::ASC) Order by the customer_id column
 * @method QbcMigrationOrderQuery orderByRedeemed($order = Criteria::ASC) Order by the redeemed column
 * @method QbcMigrationOrderQuery orderByExpiredDatetime($order = Criteria::ASC) Order by the expired_datetime column
 *
 * @method QbcMigrationOrderQuery groupById() Group by the id column
 * @method QbcMigrationOrderQuery groupByAmmount() Group by the ammount column
 * @method QbcMigrationOrderQuery groupByCreditsUsed() Group by the credits_used column
 * @method QbcMigrationOrderQuery groupByNettoAmmount() Group by the netto_ammount column
 * @method QbcMigrationOrderQuery groupByStatus() Group by the status column
 * @method QbcMigrationOrderQuery groupByPaymentMethod() Group by the payment_method column
 * @method QbcMigrationOrderQuery groupByCreatedDatetime() Group by the created_datetime column
 * @method QbcMigrationOrderQuery groupByDocumentNumber() Group by the document_number column
 * @method QbcMigrationOrderQuery groupByCode() Group by the code column
 * @method QbcMigrationOrderQuery groupByCouponStatus() Group by the coupon_status column
 * @method QbcMigrationOrderQuery groupByCampaignSku() Group by the campaign_sku column
 * @method QbcMigrationOrderQuery groupByCustomerId() Group by the customer_id column
 * @method QbcMigrationOrderQuery groupByRedeemed() Group by the redeemed column
 * @method QbcMigrationOrderQuery groupByExpiredDatetime() Group by the expired_datetime column
 *
 * @method QbcMigrationOrderQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QbcMigrationOrderQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QbcMigrationOrderQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QbcMigrationOrder findOne(PropelPDO $con = null) Return the first QbcMigrationOrder matching the query
 * @method QbcMigrationOrder findOneOrCreate(PropelPDO $con = null) Return the first QbcMigrationOrder matching the query, or a new QbcMigrationOrder object populated from the query conditions when no match is found
 *
 * @method QbcMigrationOrder findOneByAmmount(string $ammount) Return the first QbcMigrationOrder filtered by the ammount column
 * @method QbcMigrationOrder findOneByCreditsUsed(string $credits_used) Return the first QbcMigrationOrder filtered by the credits_used column
 * @method QbcMigrationOrder findOneByNettoAmmount(string $netto_ammount) Return the first QbcMigrationOrder filtered by the netto_ammount column
 * @method QbcMigrationOrder findOneByStatus(string $status) Return the first QbcMigrationOrder filtered by the status column
 * @method QbcMigrationOrder findOneByPaymentMethod(string $payment_method) Return the first QbcMigrationOrder filtered by the payment_method column
 * @method QbcMigrationOrder findOneByCreatedDatetime(string $created_datetime) Return the first QbcMigrationOrder filtered by the created_datetime column
 * @method QbcMigrationOrder findOneByDocumentNumber(int $document_number) Return the first QbcMigrationOrder filtered by the document_number column
 * @method QbcMigrationOrder findOneByCode(string $code) Return the first QbcMigrationOrder filtered by the code column
 * @method QbcMigrationOrder findOneByCouponStatus(string $coupon_status) Return the first QbcMigrationOrder filtered by the coupon_status column
 * @method QbcMigrationOrder findOneByCampaignSku(string $campaign_sku) Return the first QbcMigrationOrder filtered by the campaign_sku column
 * @method QbcMigrationOrder findOneByCustomerId(int $customer_id) Return the first QbcMigrationOrder filtered by the customer_id column
 * @method QbcMigrationOrder findOneByRedeemed(int $redeemed) Return the first QbcMigrationOrder filtered by the redeemed column
 * @method QbcMigrationOrder findOneByExpiredDatetime(string $expired_datetime) Return the first QbcMigrationOrder filtered by the expired_datetime column
 *
 * @method array findById(int $id) Return QbcMigrationOrder objects filtered by the id column
 * @method array findByAmmount(string $ammount) Return QbcMigrationOrder objects filtered by the ammount column
 * @method array findByCreditsUsed(string $credits_used) Return QbcMigrationOrder objects filtered by the credits_used column
 * @method array findByNettoAmmount(string $netto_ammount) Return QbcMigrationOrder objects filtered by the netto_ammount column
 * @method array findByStatus(string $status) Return QbcMigrationOrder objects filtered by the status column
 * @method array findByPaymentMethod(string $payment_method) Return QbcMigrationOrder objects filtered by the payment_method column
 * @method array findByCreatedDatetime(string $created_datetime) Return QbcMigrationOrder objects filtered by the created_datetime column
 * @method array findByDocumentNumber(int $document_number) Return QbcMigrationOrder objects filtered by the document_number column
 * @method array findByCode(string $code) Return QbcMigrationOrder objects filtered by the code column
 * @method array findByCouponStatus(string $coupon_status) Return QbcMigrationOrder objects filtered by the coupon_status column
 * @method array findByCampaignSku(string $campaign_sku) Return QbcMigrationOrder objects filtered by the campaign_sku column
 * @method array findByCustomerId(int $customer_id) Return QbcMigrationOrder objects filtered by the customer_id column
 * @method array findByRedeemed(int $redeemed) Return QbcMigrationOrder objects filtered by the redeemed column
 * @method array findByExpiredDatetime(string $expired_datetime) Return QbcMigrationOrder objects filtered by the expired_datetime column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcMigrationOrderQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQbcMigrationOrderQuery object.
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
            $modelName = 'QbcMigrationOrder';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QbcMigrationOrderQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QbcMigrationOrderQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QbcMigrationOrderQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QbcMigrationOrderQuery) {
            return $criteria;
        }
        $query = new QbcMigrationOrderQuery(null, null, $modelAlias);

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
     * @return   QbcMigrationOrder|QbcMigrationOrder[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QbcMigrationOrderPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QbcMigrationOrderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QbcMigrationOrder A model object, or null if the key is not found
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
     * @return                 QbcMigrationOrder A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, ammount, credits_used, netto_ammount, status, payment_method, created_datetime, document_number, code, coupon_status, campaign_sku, customer_id, redeemed, expired_datetime FROM qbc_migration_order WHERE id = :p0';
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
            $obj = new QbcMigrationOrder();
            $obj->hydrate($row);
            QbcMigrationOrderPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QbcMigrationOrder|QbcMigrationOrder[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QbcMigrationOrder[]|mixed the list of results, formatted by the current formatter
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
     * @return QbcMigrationOrderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QbcMigrationOrderPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QbcMigrationOrderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QbcMigrationOrderPeer::ID, $keys, Criteria::IN);
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
     * @return QbcMigrationOrderQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QbcMigrationOrderPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QbcMigrationOrderPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcMigrationOrderPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the ammount column
     *
     * Example usage:
     * <code>
     * $query->filterByAmmount(1234); // WHERE ammount = 1234
     * $query->filterByAmmount(array(12, 34)); // WHERE ammount IN (12, 34)
     * $query->filterByAmmount(array('min' => 12)); // WHERE ammount >= 12
     * $query->filterByAmmount(array('max' => 12)); // WHERE ammount <= 12
     * </code>
     *
     * @param     mixed $ammount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMigrationOrderQuery The current query, for fluid interface
     */
    public function filterByAmmount($ammount = null, $comparison = null)
    {
        if (is_array($ammount)) {
            $useMinMax = false;
            if (isset($ammount['min'])) {
                $this->addUsingAlias(QbcMigrationOrderPeer::AMMOUNT, $ammount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ammount['max'])) {
                $this->addUsingAlias(QbcMigrationOrderPeer::AMMOUNT, $ammount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcMigrationOrderPeer::AMMOUNT, $ammount, $comparison);
    }

    /**
     * Filter the query on the credits_used column
     *
     * Example usage:
     * <code>
     * $query->filterByCreditsUsed(1234); // WHERE credits_used = 1234
     * $query->filterByCreditsUsed(array(12, 34)); // WHERE credits_used IN (12, 34)
     * $query->filterByCreditsUsed(array('min' => 12)); // WHERE credits_used >= 12
     * $query->filterByCreditsUsed(array('max' => 12)); // WHERE credits_used <= 12
     * </code>
     *
     * @param     mixed $creditsUsed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMigrationOrderQuery The current query, for fluid interface
     */
    public function filterByCreditsUsed($creditsUsed = null, $comparison = null)
    {
        if (is_array($creditsUsed)) {
            $useMinMax = false;
            if (isset($creditsUsed['min'])) {
                $this->addUsingAlias(QbcMigrationOrderPeer::CREDITS_USED, $creditsUsed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($creditsUsed['max'])) {
                $this->addUsingAlias(QbcMigrationOrderPeer::CREDITS_USED, $creditsUsed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcMigrationOrderPeer::CREDITS_USED, $creditsUsed, $comparison);
    }

    /**
     * Filter the query on the netto_ammount column
     *
     * Example usage:
     * <code>
     * $query->filterByNettoAmmount(1234); // WHERE netto_ammount = 1234
     * $query->filterByNettoAmmount(array(12, 34)); // WHERE netto_ammount IN (12, 34)
     * $query->filterByNettoAmmount(array('min' => 12)); // WHERE netto_ammount >= 12
     * $query->filterByNettoAmmount(array('max' => 12)); // WHERE netto_ammount <= 12
     * </code>
     *
     * @param     mixed $nettoAmmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMigrationOrderQuery The current query, for fluid interface
     */
    public function filterByNettoAmmount($nettoAmmount = null, $comparison = null)
    {
        if (is_array($nettoAmmount)) {
            $useMinMax = false;
            if (isset($nettoAmmount['min'])) {
                $this->addUsingAlias(QbcMigrationOrderPeer::NETTO_AMMOUNT, $nettoAmmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nettoAmmount['max'])) {
                $this->addUsingAlias(QbcMigrationOrderPeer::NETTO_AMMOUNT, $nettoAmmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcMigrationOrderPeer::NETTO_AMMOUNT, $nettoAmmount, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE status = 'fooValue'
     * $query->filterByStatus('%fooValue%'); // WHERE status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMigrationOrderQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $status)) {
                $status = str_replace('*', '%', $status);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMigrationOrderPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the payment_method column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentMethod('fooValue');   // WHERE payment_method = 'fooValue'
     * $query->filterByPaymentMethod('%fooValue%'); // WHERE payment_method LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paymentMethod The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMigrationOrderQuery The current query, for fluid interface
     */
    public function filterByPaymentMethod($paymentMethod = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paymentMethod)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paymentMethod)) {
                $paymentMethod = str_replace('*', '%', $paymentMethod);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMigrationOrderPeer::PAYMENT_METHOD, $paymentMethod, $comparison);
    }

    /**
     * Filter the query on the created_datetime column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedDatetime('2011-03-14'); // WHERE created_datetime = '2011-03-14'
     * $query->filterByCreatedDatetime('now'); // WHERE created_datetime = '2011-03-14'
     * $query->filterByCreatedDatetime(array('max' => 'yesterday')); // WHERE created_datetime < '2011-03-13'
     * </code>
     *
     * @param     mixed $createdDatetime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMigrationOrderQuery The current query, for fluid interface
     */
    public function filterByCreatedDatetime($createdDatetime = null, $comparison = null)
    {
        if (is_array($createdDatetime)) {
            $useMinMax = false;
            if (isset($createdDatetime['min'])) {
                $this->addUsingAlias(QbcMigrationOrderPeer::CREATED_DATETIME, $createdDatetime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdDatetime['max'])) {
                $this->addUsingAlias(QbcMigrationOrderPeer::CREATED_DATETIME, $createdDatetime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcMigrationOrderPeer::CREATED_DATETIME, $createdDatetime, $comparison);
    }

    /**
     * Filter the query on the document_number column
     *
     * Example usage:
     * <code>
     * $query->filterByDocumentNumber(1234); // WHERE document_number = 1234
     * $query->filterByDocumentNumber(array(12, 34)); // WHERE document_number IN (12, 34)
     * $query->filterByDocumentNumber(array('min' => 12)); // WHERE document_number >= 12
     * $query->filterByDocumentNumber(array('max' => 12)); // WHERE document_number <= 12
     * </code>
     *
     * @param     mixed $documentNumber The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMigrationOrderQuery The current query, for fluid interface
     */
    public function filterByDocumentNumber($documentNumber = null, $comparison = null)
    {
        if (is_array($documentNumber)) {
            $useMinMax = false;
            if (isset($documentNumber['min'])) {
                $this->addUsingAlias(QbcMigrationOrderPeer::DOCUMENT_NUMBER, $documentNumber['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($documentNumber['max'])) {
                $this->addUsingAlias(QbcMigrationOrderPeer::DOCUMENT_NUMBER, $documentNumber['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcMigrationOrderPeer::DOCUMENT_NUMBER, $documentNumber, $comparison);
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
     * @return QbcMigrationOrderQuery The current query, for fluid interface
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

        return $this->addUsingAlias(QbcMigrationOrderPeer::CODE, $code, $comparison);
    }

    /**
     * Filter the query on the coupon_status column
     *
     * Example usage:
     * <code>
     * $query->filterByCouponStatus('fooValue');   // WHERE coupon_status = 'fooValue'
     * $query->filterByCouponStatus('%fooValue%'); // WHERE coupon_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $couponStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMigrationOrderQuery The current query, for fluid interface
     */
    public function filterByCouponStatus($couponStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($couponStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $couponStatus)) {
                $couponStatus = str_replace('*', '%', $couponStatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMigrationOrderPeer::COUPON_STATUS, $couponStatus, $comparison);
    }

    /**
     * Filter the query on the campaign_sku column
     *
     * Example usage:
     * <code>
     * $query->filterByCampaignSku('fooValue');   // WHERE campaign_sku = 'fooValue'
     * $query->filterByCampaignSku('%fooValue%'); // WHERE campaign_sku LIKE '%fooValue%'
     * </code>
     *
     * @param     string $campaignSku The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMigrationOrderQuery The current query, for fluid interface
     */
    public function filterByCampaignSku($campaignSku = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($campaignSku)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $campaignSku)) {
                $campaignSku = str_replace('*', '%', $campaignSku);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(QbcMigrationOrderPeer::CAMPAIGN_SKU, $campaignSku, $comparison);
    }

    /**
     * Filter the query on the customer_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerId(1234); // WHERE customer_id = 1234
     * $query->filterByCustomerId(array(12, 34)); // WHERE customer_id IN (12, 34)
     * $query->filterByCustomerId(array('min' => 12)); // WHERE customer_id >= 12
     * $query->filterByCustomerId(array('max' => 12)); // WHERE customer_id <= 12
     * </code>
     *
     * @param     mixed $customerId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMigrationOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerId($customerId = null, $comparison = null)
    {
        if (is_array($customerId)) {
            $useMinMax = false;
            if (isset($customerId['min'])) {
                $this->addUsingAlias(QbcMigrationOrderPeer::CUSTOMER_ID, $customerId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customerId['max'])) {
                $this->addUsingAlias(QbcMigrationOrderPeer::CUSTOMER_ID, $customerId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcMigrationOrderPeer::CUSTOMER_ID, $customerId, $comparison);
    }

    /**
     * Filter the query on the redeemed column
     *
     * Example usage:
     * <code>
     * $query->filterByRedeemed(1234); // WHERE redeemed = 1234
     * $query->filterByRedeemed(array(12, 34)); // WHERE redeemed IN (12, 34)
     * $query->filterByRedeemed(array('min' => 12)); // WHERE redeemed >= 12
     * $query->filterByRedeemed(array('max' => 12)); // WHERE redeemed <= 12
     * </code>
     *
     * @param     mixed $redeemed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMigrationOrderQuery The current query, for fluid interface
     */
    public function filterByRedeemed($redeemed = null, $comparison = null)
    {
        if (is_array($redeemed)) {
            $useMinMax = false;
            if (isset($redeemed['min'])) {
                $this->addUsingAlias(QbcMigrationOrderPeer::REDEEMED, $redeemed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($redeemed['max'])) {
                $this->addUsingAlias(QbcMigrationOrderPeer::REDEEMED, $redeemed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcMigrationOrderPeer::REDEEMED, $redeemed, $comparison);
    }

    /**
     * Filter the query on the expired_datetime column
     *
     * Example usage:
     * <code>
     * $query->filterByExpiredDatetime('2011-03-14'); // WHERE expired_datetime = '2011-03-14'
     * $query->filterByExpiredDatetime('now'); // WHERE expired_datetime = '2011-03-14'
     * $query->filterByExpiredDatetime(array('max' => 'yesterday')); // WHERE expired_datetime < '2011-03-13'
     * </code>
     *
     * @param     mixed $expiredDatetime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QbcMigrationOrderQuery The current query, for fluid interface
     */
    public function filterByExpiredDatetime($expiredDatetime = null, $comparison = null)
    {
        if (is_array($expiredDatetime)) {
            $useMinMax = false;
            if (isset($expiredDatetime['min'])) {
                $this->addUsingAlias(QbcMigrationOrderPeer::EXPIRED_DATETIME, $expiredDatetime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expiredDatetime['max'])) {
                $this->addUsingAlias(QbcMigrationOrderPeer::EXPIRED_DATETIME, $expiredDatetime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QbcMigrationOrderPeer::EXPIRED_DATETIME, $expiredDatetime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QbcMigrationOrder $qbcMigrationOrder Object to remove from the list of results
     *
     * @return QbcMigrationOrderQuery The current query, for fluid interface
     */
    public function prune($qbcMigrationOrder = null)
    {
        if ($qbcMigrationOrder) {
            $this->addUsingAlias(QbcMigrationOrderPeer::ID, $qbcMigrationOrder->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
