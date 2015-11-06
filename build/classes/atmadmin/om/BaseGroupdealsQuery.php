<?php


/**
 * Base class that represents a query for the 'groupdeals' table.
 *
 *
 *
 * @method GroupdealsQuery orderByGroupdealsId($order = Criteria::ASC) Order by the groupdeals_id column
 * @method GroupdealsQuery orderByProductId($order = Criteria::ASC) Order by the product_id column
 * @method GroupdealsQuery orderByMerchantId($order = Criteria::ASC) Order by the merchant_id column
 * @method GroupdealsQuery orderByMinimumQty($order = Criteria::ASC) Order by the minimum_qty column
 * @method GroupdealsQuery orderByMaximumQty($order = Criteria::ASC) Order by the maximum_qty column
 * @method GroupdealsQuery orderByTargetMetEmail($order = Criteria::ASC) Order by the target_met_email column
 * @method GroupdealsQuery orderByCouponBarcode($order = Criteria::ASC) Order by the coupon_barcode column
 * @method GroupdealsQuery orderByCouponMerchantAddress($order = Criteria::ASC) Order by the coupon_merchant_address column
 * @method GroupdealsQuery orderByCouponMerchantContact($order = Criteria::ASC) Order by the coupon_merchant_contact column
 * @method GroupdealsQuery orderByCouponExpirationDate($order = Criteria::ASC) Order by the coupon_expiration_date column
 * @method GroupdealsQuery orderByCouponPrice($order = Criteria::ASC) Order by the coupon_price column
 * @method GroupdealsQuery orderByCouponFinePrint($order = Criteria::ASC) Order by the coupon_fine_print column
 * @method GroupdealsQuery orderByCouponHighlights($order = Criteria::ASC) Order by the coupon_highlights column
 * @method GroupdealsQuery orderByCouponMerchantDescription($order = Criteria::ASC) Order by the coupon_merchant_description column
 * @method GroupdealsQuery orderByCouponBusinessHours($order = Criteria::ASC) Order by the coupon_business_hours column
 * @method GroupdealsQuery orderByCouponMerchantLogo($order = Criteria::ASC) Order by the coupon_merchant_logo column
 * @method GroupdealsQuery orderByCouponAdditionalInfo($order = Criteria::ASC) Order by the coupon_additional_info column
 * @method GroupdealsQuery orderByPosition($order = Criteria::ASC) Order by the position column
 * @method GroupdealsQuery orderByTitleLong($order = Criteria::ASC) Order by the title_long column
 * @method GroupdealsQuery orderByTitleMidium($order = Criteria::ASC) Order by the title_midium column
 * @method GroupdealsQuery orderByTitleShort($order = Criteria::ASC) Order by the title_short column
 * @method GroupdealsQuery orderByBeneffits($order = Criteria::ASC) Order by the beneffits column
 * @method GroupdealsQuery orderByDealInstructions($order = Criteria::ASC) Order by the deal_instructions column
 * @method GroupdealsQuery orderByConditions($order = Criteria::ASC) Order by the conditions column
 * @method GroupdealsQuery orderByEditionState($order = Criteria::ASC) Order by the edition_state column
 * @method GroupdealsQuery orderByPublicationState($order = Criteria::ASC) Order by the publication_state column
 * @method GroupdealsQuery orderByProductType($order = Criteria::ASC) Order by the product_type column
 * @method GroupdealsQuery orderByExpirationDate($order = Criteria::ASC) Order by the expiration_date column
 * @method GroupdealsQuery orderByTcc($order = Criteria::ASC) Order by the tcc column
 * @method GroupdealsQuery orderByNegociationType($order = Criteria::ASC) Order by the negociation_type column
 * @method GroupdealsQuery orderByAgreementType($order = Criteria::ASC) Order by the agreement_type column
 * @method GroupdealsQuery orderByBuysPerUser($order = Criteria::ASC) Order by the buys_per_user column
 * @method GroupdealsQuery orderByVideoHtml5($order = Criteria::ASC) Order by the video_html5 column
 * @method GroupdealsQuery orderByVideoFlash($order = Criteria::ASC) Order by the video_flash column
 * @method GroupdealsQuery orderByReference($order = Criteria::ASC) Order by the reference column
 * @method GroupdealsQuery orderByPaymentId($order = Criteria::ASC) Order by the payment_id column
 * @method GroupdealsQuery orderByBoostSales($order = Criteria::ASC) Order by the boost_sales column
 * @method GroupdealsQuery orderByLocations($order = Criteria::ASC) Order by the locations column
 * @method GroupdealsQuery orderByEtGain($order = Criteria::ASC) Order by the et_gain column
 * @method GroupdealsQuery orderByActiveDate($order = Criteria::ASC) Order by the active_date column
 * @method GroupdealsQuery orderByTreasuryType($order = Criteria::ASC) Order by the treasury_type column
 * @method GroupdealsQuery orderByCommercialNameId($order = Criteria::ASC) Order by the commercial_name_id column
 * @method GroupdealsQuery orderByOrdersCount($order = Criteria::ASC) Order by the orders_count column
 * @method GroupdealsQuery orderByActiveOffer($order = Criteria::ASC) Order by the active_offer column
 * @method GroupdealsQuery orderByIsClosed($order = Criteria::ASC) Order by the is_closed column
 * @method GroupdealsQuery orderByQtySold($order = Criteria::ASC) Order by the qty_sold column
 * @method GroupdealsQuery orderByInitStock($order = Criteria::ASC) Order by the init_stock column
 * @method GroupdealsQuery orderByWithPersonalizedCoupons($order = Criteria::ASC) Order by the with_personalized_coupons column
 * @method GroupdealsQuery orderByCodeType($order = Criteria::ASC) Order by the code_type column
 * @method GroupdealsQuery orderByGeneralNit($order = Criteria::ASC) Order by the general_nit column
 *
 * @method GroupdealsQuery groupByGroupdealsId() Group by the groupdeals_id column
 * @method GroupdealsQuery groupByProductId() Group by the product_id column
 * @method GroupdealsQuery groupByMerchantId() Group by the merchant_id column
 * @method GroupdealsQuery groupByMinimumQty() Group by the minimum_qty column
 * @method GroupdealsQuery groupByMaximumQty() Group by the maximum_qty column
 * @method GroupdealsQuery groupByTargetMetEmail() Group by the target_met_email column
 * @method GroupdealsQuery groupByCouponBarcode() Group by the coupon_barcode column
 * @method GroupdealsQuery groupByCouponMerchantAddress() Group by the coupon_merchant_address column
 * @method GroupdealsQuery groupByCouponMerchantContact() Group by the coupon_merchant_contact column
 * @method GroupdealsQuery groupByCouponExpirationDate() Group by the coupon_expiration_date column
 * @method GroupdealsQuery groupByCouponPrice() Group by the coupon_price column
 * @method GroupdealsQuery groupByCouponFinePrint() Group by the coupon_fine_print column
 * @method GroupdealsQuery groupByCouponHighlights() Group by the coupon_highlights column
 * @method GroupdealsQuery groupByCouponMerchantDescription() Group by the coupon_merchant_description column
 * @method GroupdealsQuery groupByCouponBusinessHours() Group by the coupon_business_hours column
 * @method GroupdealsQuery groupByCouponMerchantLogo() Group by the coupon_merchant_logo column
 * @method GroupdealsQuery groupByCouponAdditionalInfo() Group by the coupon_additional_info column
 * @method GroupdealsQuery groupByPosition() Group by the position column
 * @method GroupdealsQuery groupByTitleLong() Group by the title_long column
 * @method GroupdealsQuery groupByTitleMidium() Group by the title_midium column
 * @method GroupdealsQuery groupByTitleShort() Group by the title_short column
 * @method GroupdealsQuery groupByBeneffits() Group by the beneffits column
 * @method GroupdealsQuery groupByDealInstructions() Group by the deal_instructions column
 * @method GroupdealsQuery groupByConditions() Group by the conditions column
 * @method GroupdealsQuery groupByEditionState() Group by the edition_state column
 * @method GroupdealsQuery groupByPublicationState() Group by the publication_state column
 * @method GroupdealsQuery groupByProductType() Group by the product_type column
 * @method GroupdealsQuery groupByExpirationDate() Group by the expiration_date column
 * @method GroupdealsQuery groupByTcc() Group by the tcc column
 * @method GroupdealsQuery groupByNegociationType() Group by the negociation_type column
 * @method GroupdealsQuery groupByAgreementType() Group by the agreement_type column
 * @method GroupdealsQuery groupByBuysPerUser() Group by the buys_per_user column
 * @method GroupdealsQuery groupByVideoHtml5() Group by the video_html5 column
 * @method GroupdealsQuery groupByVideoFlash() Group by the video_flash column
 * @method GroupdealsQuery groupByReference() Group by the reference column
 * @method GroupdealsQuery groupByPaymentId() Group by the payment_id column
 * @method GroupdealsQuery groupByBoostSales() Group by the boost_sales column
 * @method GroupdealsQuery groupByLocations() Group by the locations column
 * @method GroupdealsQuery groupByEtGain() Group by the et_gain column
 * @method GroupdealsQuery groupByActiveDate() Group by the active_date column
 * @method GroupdealsQuery groupByTreasuryType() Group by the treasury_type column
 * @method GroupdealsQuery groupByCommercialNameId() Group by the commercial_name_id column
 * @method GroupdealsQuery groupByOrdersCount() Group by the orders_count column
 * @method GroupdealsQuery groupByActiveOffer() Group by the active_offer column
 * @method GroupdealsQuery groupByIsClosed() Group by the is_closed column
 * @method GroupdealsQuery groupByQtySold() Group by the qty_sold column
 * @method GroupdealsQuery groupByInitStock() Group by the init_stock column
 * @method GroupdealsQuery groupByWithPersonalizedCoupons() Group by the with_personalized_coupons column
 * @method GroupdealsQuery groupByCodeType() Group by the code_type column
 * @method GroupdealsQuery groupByGeneralNit() Group by the general_nit column
 *
 * @method GroupdealsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GroupdealsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GroupdealsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GroupdealsQuery leftJoinTreasuryTypes($relationAlias = null) Adds a LEFT JOIN clause to the query using the TreasuryTypes relation
 * @method GroupdealsQuery rightJoinTreasuryTypes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TreasuryTypes relation
 * @method GroupdealsQuery innerJoinTreasuryTypes($relationAlias = null) Adds a INNER JOIN clause to the query using the TreasuryTypes relation
 *
 * @method Groupdeals findOne(PropelPDO $con = null) Return the first Groupdeals matching the query
 * @method Groupdeals findOneOrCreate(PropelPDO $con = null) Return the first Groupdeals matching the query, or a new Groupdeals object populated from the query conditions when no match is found
 *
 * @method Groupdeals findOneByProductId(int $product_id) Return the first Groupdeals filtered by the product_id column
 * @method Groupdeals findOneByMerchantId(int $merchant_id) Return the first Groupdeals filtered by the merchant_id column
 * @method Groupdeals findOneByMinimumQty(int $minimum_qty) Return the first Groupdeals filtered by the minimum_qty column
 * @method Groupdeals findOneByMaximumQty(int $maximum_qty) Return the first Groupdeals filtered by the maximum_qty column
 * @method Groupdeals findOneByTargetMetEmail(int $target_met_email) Return the first Groupdeals filtered by the target_met_email column
 * @method Groupdeals findOneByCouponBarcode(string $coupon_barcode) Return the first Groupdeals filtered by the coupon_barcode column
 * @method Groupdeals findOneByCouponMerchantAddress(int $coupon_merchant_address) Return the first Groupdeals filtered by the coupon_merchant_address column
 * @method Groupdeals findOneByCouponMerchantContact(int $coupon_merchant_contact) Return the first Groupdeals filtered by the coupon_merchant_contact column
 * @method Groupdeals findOneByCouponExpirationDate(string $coupon_expiration_date) Return the first Groupdeals filtered by the coupon_expiration_date column
 * @method Groupdeals findOneByCouponPrice(int $coupon_price) Return the first Groupdeals filtered by the coupon_price column
 * @method Groupdeals findOneByCouponFinePrint(int $coupon_fine_print) Return the first Groupdeals filtered by the coupon_fine_print column
 * @method Groupdeals findOneByCouponHighlights(int $coupon_highlights) Return the first Groupdeals filtered by the coupon_highlights column
 * @method Groupdeals findOneByCouponMerchantDescription(int $coupon_merchant_description) Return the first Groupdeals filtered by the coupon_merchant_description column
 * @method Groupdeals findOneByCouponBusinessHours(int $coupon_business_hours) Return the first Groupdeals filtered by the coupon_business_hours column
 * @method Groupdeals findOneByCouponMerchantLogo(int $coupon_merchant_logo) Return the first Groupdeals filtered by the coupon_merchant_logo column
 * @method Groupdeals findOneByCouponAdditionalInfo(string $coupon_additional_info) Return the first Groupdeals filtered by the coupon_additional_info column
 * @method Groupdeals findOneByPosition(int $position) Return the first Groupdeals filtered by the position column
 * @method Groupdeals findOneByTitleLong(string $title_long) Return the first Groupdeals filtered by the title_long column
 * @method Groupdeals findOneByTitleMidium(string $title_midium) Return the first Groupdeals filtered by the title_midium column
 * @method Groupdeals findOneByTitleShort(string $title_short) Return the first Groupdeals filtered by the title_short column
 * @method Groupdeals findOneByBeneffits(string $beneffits) Return the first Groupdeals filtered by the beneffits column
 * @method Groupdeals findOneByDealInstructions(string $deal_instructions) Return the first Groupdeals filtered by the deal_instructions column
 * @method Groupdeals findOneByConditions(string $conditions) Return the first Groupdeals filtered by the conditions column
 * @method Groupdeals findOneByEditionState(int $edition_state) Return the first Groupdeals filtered by the edition_state column
 * @method Groupdeals findOneByPublicationState(int $publication_state) Return the first Groupdeals filtered by the publication_state column
 * @method Groupdeals findOneByProductType(int $product_type) Return the first Groupdeals filtered by the product_type column
 * @method Groupdeals findOneByExpirationDate(string $expiration_date) Return the first Groupdeals filtered by the expiration_date column
 * @method Groupdeals findOneByTcc(int $tcc) Return the first Groupdeals filtered by the tcc column
 * @method Groupdeals findOneByNegociationType(int $negociation_type) Return the first Groupdeals filtered by the negociation_type column
 * @method Groupdeals findOneByAgreementType(int $agreement_type) Return the first Groupdeals filtered by the agreement_type column
 * @method Groupdeals findOneByBuysPerUser(int $buys_per_user) Return the first Groupdeals filtered by the buys_per_user column
 * @method Groupdeals findOneByVideoHtml5(string $video_html5) Return the first Groupdeals filtered by the video_html5 column
 * @method Groupdeals findOneByVideoFlash(string $video_flash) Return the first Groupdeals filtered by the video_flash column
 * @method Groupdeals findOneByReference(int $reference) Return the first Groupdeals filtered by the reference column
 * @method Groupdeals findOneByPaymentId(string $payment_id) Return the first Groupdeals filtered by the payment_id column
 * @method Groupdeals findOneByBoostSales(int $boost_sales) Return the first Groupdeals filtered by the boost_sales column
 * @method Groupdeals findOneByLocations(string $locations) Return the first Groupdeals filtered by the locations column
 * @method Groupdeals findOneByEtGain(double $et_gain) Return the first Groupdeals filtered by the et_gain column
 * @method Groupdeals findOneByActiveDate(string $active_date) Return the first Groupdeals filtered by the active_date column
 * @method Groupdeals findOneByTreasuryType(int $treasury_type) Return the first Groupdeals filtered by the treasury_type column
 * @method Groupdeals findOneByCommercialNameId(int $commercial_name_id) Return the first Groupdeals filtered by the commercial_name_id column
 * @method Groupdeals findOneByOrdersCount(int $orders_count) Return the first Groupdeals filtered by the orders_count column
 * @method Groupdeals findOneByActiveOffer(int $active_offer) Return the first Groupdeals filtered by the active_offer column
 * @method Groupdeals findOneByIsClosed(int $is_closed) Return the first Groupdeals filtered by the is_closed column
 * @method Groupdeals findOneByQtySold(int $qty_sold) Return the first Groupdeals filtered by the qty_sold column
 * @method Groupdeals findOneByInitStock(int $init_stock) Return the first Groupdeals filtered by the init_stock column
 * @method Groupdeals findOneByWithPersonalizedCoupons(int $with_personalized_coupons) Return the first Groupdeals filtered by the with_personalized_coupons column
 * @method Groupdeals findOneByCodeType(int $code_type) Return the first Groupdeals filtered by the code_type column
 * @method Groupdeals findOneByGeneralNit(int $general_nit) Return the first Groupdeals filtered by the general_nit column
 *
 * @method array findByGroupdealsId(int $groupdeals_id) Return Groupdeals objects filtered by the groupdeals_id column
 * @method array findByProductId(int $product_id) Return Groupdeals objects filtered by the product_id column
 * @method array findByMerchantId(int $merchant_id) Return Groupdeals objects filtered by the merchant_id column
 * @method array findByMinimumQty(int $minimum_qty) Return Groupdeals objects filtered by the minimum_qty column
 * @method array findByMaximumQty(int $maximum_qty) Return Groupdeals objects filtered by the maximum_qty column
 * @method array findByTargetMetEmail(int $target_met_email) Return Groupdeals objects filtered by the target_met_email column
 * @method array findByCouponBarcode(string $coupon_barcode) Return Groupdeals objects filtered by the coupon_barcode column
 * @method array findByCouponMerchantAddress(int $coupon_merchant_address) Return Groupdeals objects filtered by the coupon_merchant_address column
 * @method array findByCouponMerchantContact(int $coupon_merchant_contact) Return Groupdeals objects filtered by the coupon_merchant_contact column
 * @method array findByCouponExpirationDate(string $coupon_expiration_date) Return Groupdeals objects filtered by the coupon_expiration_date column
 * @method array findByCouponPrice(int $coupon_price) Return Groupdeals objects filtered by the coupon_price column
 * @method array findByCouponFinePrint(int $coupon_fine_print) Return Groupdeals objects filtered by the coupon_fine_print column
 * @method array findByCouponHighlights(int $coupon_highlights) Return Groupdeals objects filtered by the coupon_highlights column
 * @method array findByCouponMerchantDescription(int $coupon_merchant_description) Return Groupdeals objects filtered by the coupon_merchant_description column
 * @method array findByCouponBusinessHours(int $coupon_business_hours) Return Groupdeals objects filtered by the coupon_business_hours column
 * @method array findByCouponMerchantLogo(int $coupon_merchant_logo) Return Groupdeals objects filtered by the coupon_merchant_logo column
 * @method array findByCouponAdditionalInfo(string $coupon_additional_info) Return Groupdeals objects filtered by the coupon_additional_info column
 * @method array findByPosition(int $position) Return Groupdeals objects filtered by the position column
 * @method array findByTitleLong(string $title_long) Return Groupdeals objects filtered by the title_long column
 * @method array findByTitleMidium(string $title_midium) Return Groupdeals objects filtered by the title_midium column
 * @method array findByTitleShort(string $title_short) Return Groupdeals objects filtered by the title_short column
 * @method array findByBeneffits(string $beneffits) Return Groupdeals objects filtered by the beneffits column
 * @method array findByDealInstructions(string $deal_instructions) Return Groupdeals objects filtered by the deal_instructions column
 * @method array findByConditions(string $conditions) Return Groupdeals objects filtered by the conditions column
 * @method array findByEditionState(int $edition_state) Return Groupdeals objects filtered by the edition_state column
 * @method array findByPublicationState(int $publication_state) Return Groupdeals objects filtered by the publication_state column
 * @method array findByProductType(int $product_type) Return Groupdeals objects filtered by the product_type column
 * @method array findByExpirationDate(string $expiration_date) Return Groupdeals objects filtered by the expiration_date column
 * @method array findByTcc(int $tcc) Return Groupdeals objects filtered by the tcc column
 * @method array findByNegociationType(int $negociation_type) Return Groupdeals objects filtered by the negociation_type column
 * @method array findByAgreementType(int $agreement_type) Return Groupdeals objects filtered by the agreement_type column
 * @method array findByBuysPerUser(int $buys_per_user) Return Groupdeals objects filtered by the buys_per_user column
 * @method array findByVideoHtml5(string $video_html5) Return Groupdeals objects filtered by the video_html5 column
 * @method array findByVideoFlash(string $video_flash) Return Groupdeals objects filtered by the video_flash column
 * @method array findByReference(int $reference) Return Groupdeals objects filtered by the reference column
 * @method array findByPaymentId(string $payment_id) Return Groupdeals objects filtered by the payment_id column
 * @method array findByBoostSales(int $boost_sales) Return Groupdeals objects filtered by the boost_sales column
 * @method array findByLocations(string $locations) Return Groupdeals objects filtered by the locations column
 * @method array findByEtGain(double $et_gain) Return Groupdeals objects filtered by the et_gain column
 * @method array findByActiveDate(string $active_date) Return Groupdeals objects filtered by the active_date column
 * @method array findByTreasuryType(int $treasury_type) Return Groupdeals objects filtered by the treasury_type column
 * @method array findByCommercialNameId(int $commercial_name_id) Return Groupdeals objects filtered by the commercial_name_id column
 * @method array findByOrdersCount(int $orders_count) Return Groupdeals objects filtered by the orders_count column
 * @method array findByActiveOffer(int $active_offer) Return Groupdeals objects filtered by the active_offer column
 * @method array findByIsClosed(int $is_closed) Return Groupdeals objects filtered by the is_closed column
 * @method array findByQtySold(int $qty_sold) Return Groupdeals objects filtered by the qty_sold column
 * @method array findByInitStock(int $init_stock) Return Groupdeals objects filtered by the init_stock column
 * @method array findByWithPersonalizedCoupons(int $with_personalized_coupons) Return Groupdeals objects filtered by the with_personalized_coupons column
 * @method array findByCodeType(int $code_type) Return Groupdeals objects filtered by the code_type column
 * @method array findByGeneralNit(int $general_nit) Return Groupdeals objects filtered by the general_nit column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseGroupdealsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGroupdealsQuery object.
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
            $modelName = 'Groupdeals';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GroupdealsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GroupdealsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GroupdealsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GroupdealsQuery) {
            return $criteria;
        }
        $query = new GroupdealsQuery(null, null, $modelAlias);

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
     * @return   Groupdeals|Groupdeals[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GroupdealsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GroupdealsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Groupdeals A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByGroupdealsId($key, $con = null)
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
     * @return                 Groupdeals A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT groupdeals_id, product_id, merchant_id, minimum_qty, maximum_qty, target_met_email, coupon_barcode, coupon_merchant_address, coupon_merchant_contact, coupon_expiration_date, coupon_price, coupon_fine_print, coupon_highlights, coupon_merchant_description, coupon_business_hours, coupon_merchant_logo, coupon_additional_info, position, title_long, title_midium, title_short, beneffits, deal_instructions, conditions, edition_state, publication_state, product_type, expiration_date, tcc, negociation_type, agreement_type, buys_per_user, video_html5, video_flash, reference, payment_id, boost_sales, locations, et_gain, active_date, treasury_type, commercial_name_id, orders_count, active_offer, is_closed, qty_sold, init_stock, with_personalized_coupons, code_type, general_nit FROM groupdeals WHERE groupdeals_id = :p0';
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
            $obj = new Groupdeals();
            $obj->hydrate($row);
            GroupdealsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Groupdeals|Groupdeals[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Groupdeals[]|mixed the list of results, formatted by the current formatter
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
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GroupdealsPeer::GROUPDEALS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GroupdealsPeer::GROUPDEALS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the groupdeals_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGroupdealsId(1234); // WHERE groupdeals_id = 1234
     * $query->filterByGroupdealsId(array(12, 34)); // WHERE groupdeals_id IN (12, 34)
     * $query->filterByGroupdealsId(array('min' => 12)); // WHERE groupdeals_id >= 12
     * $query->filterByGroupdealsId(array('max' => 12)); // WHERE groupdeals_id <= 12
     * </code>
     *
     * @param     mixed $groupdealsId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByGroupdealsId($groupdealsId = null, $comparison = null)
    {
        if (is_array($groupdealsId)) {
            $useMinMax = false;
            if (isset($groupdealsId['min'])) {
                $this->addUsingAlias(GroupdealsPeer::GROUPDEALS_ID, $groupdealsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($groupdealsId['max'])) {
                $this->addUsingAlias(GroupdealsPeer::GROUPDEALS_ID, $groupdealsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::GROUPDEALS_ID, $groupdealsId, $comparison);
    }

    /**
     * Filter the query on the product_id column
     *
     * Example usage:
     * <code>
     * $query->filterByProductId(1234); // WHERE product_id = 1234
     * $query->filterByProductId(array(12, 34)); // WHERE product_id IN (12, 34)
     * $query->filterByProductId(array('min' => 12)); // WHERE product_id >= 12
     * $query->filterByProductId(array('max' => 12)); // WHERE product_id <= 12
     * </code>
     *
     * @param     mixed $productId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByProductId($productId = null, $comparison = null)
    {
        if (is_array($productId)) {
            $useMinMax = false;
            if (isset($productId['min'])) {
                $this->addUsingAlias(GroupdealsPeer::PRODUCT_ID, $productId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productId['max'])) {
                $this->addUsingAlias(GroupdealsPeer::PRODUCT_ID, $productId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::PRODUCT_ID, $productId, $comparison);
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
     * @param     mixed $merchantId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByMerchantId($merchantId = null, $comparison = null)
    {
        if (is_array($merchantId)) {
            $useMinMax = false;
            if (isset($merchantId['min'])) {
                $this->addUsingAlias(GroupdealsPeer::MERCHANT_ID, $merchantId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($merchantId['max'])) {
                $this->addUsingAlias(GroupdealsPeer::MERCHANT_ID, $merchantId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::MERCHANT_ID, $merchantId, $comparison);
    }

    /**
     * Filter the query on the minimum_qty column
     *
     * Example usage:
     * <code>
     * $query->filterByMinimumQty(1234); // WHERE minimum_qty = 1234
     * $query->filterByMinimumQty(array(12, 34)); // WHERE minimum_qty IN (12, 34)
     * $query->filterByMinimumQty(array('min' => 12)); // WHERE minimum_qty >= 12
     * $query->filterByMinimumQty(array('max' => 12)); // WHERE minimum_qty <= 12
     * </code>
     *
     * @param     mixed $minimumQty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByMinimumQty($minimumQty = null, $comparison = null)
    {
        if (is_array($minimumQty)) {
            $useMinMax = false;
            if (isset($minimumQty['min'])) {
                $this->addUsingAlias(GroupdealsPeer::MINIMUM_QTY, $minimumQty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minimumQty['max'])) {
                $this->addUsingAlias(GroupdealsPeer::MINIMUM_QTY, $minimumQty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::MINIMUM_QTY, $minimumQty, $comparison);
    }

    /**
     * Filter the query on the maximum_qty column
     *
     * Example usage:
     * <code>
     * $query->filterByMaximumQty(1234); // WHERE maximum_qty = 1234
     * $query->filterByMaximumQty(array(12, 34)); // WHERE maximum_qty IN (12, 34)
     * $query->filterByMaximumQty(array('min' => 12)); // WHERE maximum_qty >= 12
     * $query->filterByMaximumQty(array('max' => 12)); // WHERE maximum_qty <= 12
     * </code>
     *
     * @param     mixed $maximumQty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByMaximumQty($maximumQty = null, $comparison = null)
    {
        if (is_array($maximumQty)) {
            $useMinMax = false;
            if (isset($maximumQty['min'])) {
                $this->addUsingAlias(GroupdealsPeer::MAXIMUM_QTY, $maximumQty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maximumQty['max'])) {
                $this->addUsingAlias(GroupdealsPeer::MAXIMUM_QTY, $maximumQty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::MAXIMUM_QTY, $maximumQty, $comparison);
    }

    /**
     * Filter the query on the target_met_email column
     *
     * Example usage:
     * <code>
     * $query->filterByTargetMetEmail(1234); // WHERE target_met_email = 1234
     * $query->filterByTargetMetEmail(array(12, 34)); // WHERE target_met_email IN (12, 34)
     * $query->filterByTargetMetEmail(array('min' => 12)); // WHERE target_met_email >= 12
     * $query->filterByTargetMetEmail(array('max' => 12)); // WHERE target_met_email <= 12
     * </code>
     *
     * @param     mixed $targetMetEmail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByTargetMetEmail($targetMetEmail = null, $comparison = null)
    {
        if (is_array($targetMetEmail)) {
            $useMinMax = false;
            if (isset($targetMetEmail['min'])) {
                $this->addUsingAlias(GroupdealsPeer::TARGET_MET_EMAIL, $targetMetEmail['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($targetMetEmail['max'])) {
                $this->addUsingAlias(GroupdealsPeer::TARGET_MET_EMAIL, $targetMetEmail['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::TARGET_MET_EMAIL, $targetMetEmail, $comparison);
    }

    /**
     * Filter the query on the coupon_barcode column
     *
     * Example usage:
     * <code>
     * $query->filterByCouponBarcode('fooValue');   // WHERE coupon_barcode = 'fooValue'
     * $query->filterByCouponBarcode('%fooValue%'); // WHERE coupon_barcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $couponBarcode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByCouponBarcode($couponBarcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($couponBarcode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $couponBarcode)) {
                $couponBarcode = str_replace('*', '%', $couponBarcode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::COUPON_BARCODE, $couponBarcode, $comparison);
    }

    /**
     * Filter the query on the coupon_merchant_address column
     *
     * Example usage:
     * <code>
     * $query->filterByCouponMerchantAddress(1234); // WHERE coupon_merchant_address = 1234
     * $query->filterByCouponMerchantAddress(array(12, 34)); // WHERE coupon_merchant_address IN (12, 34)
     * $query->filterByCouponMerchantAddress(array('min' => 12)); // WHERE coupon_merchant_address >= 12
     * $query->filterByCouponMerchantAddress(array('max' => 12)); // WHERE coupon_merchant_address <= 12
     * </code>
     *
     * @param     mixed $couponMerchantAddress The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByCouponMerchantAddress($couponMerchantAddress = null, $comparison = null)
    {
        if (is_array($couponMerchantAddress)) {
            $useMinMax = false;
            if (isset($couponMerchantAddress['min'])) {
                $this->addUsingAlias(GroupdealsPeer::COUPON_MERCHANT_ADDRESS, $couponMerchantAddress['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($couponMerchantAddress['max'])) {
                $this->addUsingAlias(GroupdealsPeer::COUPON_MERCHANT_ADDRESS, $couponMerchantAddress['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::COUPON_MERCHANT_ADDRESS, $couponMerchantAddress, $comparison);
    }

    /**
     * Filter the query on the coupon_merchant_contact column
     *
     * Example usage:
     * <code>
     * $query->filterByCouponMerchantContact(1234); // WHERE coupon_merchant_contact = 1234
     * $query->filterByCouponMerchantContact(array(12, 34)); // WHERE coupon_merchant_contact IN (12, 34)
     * $query->filterByCouponMerchantContact(array('min' => 12)); // WHERE coupon_merchant_contact >= 12
     * $query->filterByCouponMerchantContact(array('max' => 12)); // WHERE coupon_merchant_contact <= 12
     * </code>
     *
     * @param     mixed $couponMerchantContact The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByCouponMerchantContact($couponMerchantContact = null, $comparison = null)
    {
        if (is_array($couponMerchantContact)) {
            $useMinMax = false;
            if (isset($couponMerchantContact['min'])) {
                $this->addUsingAlias(GroupdealsPeer::COUPON_MERCHANT_CONTACT, $couponMerchantContact['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($couponMerchantContact['max'])) {
                $this->addUsingAlias(GroupdealsPeer::COUPON_MERCHANT_CONTACT, $couponMerchantContact['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::COUPON_MERCHANT_CONTACT, $couponMerchantContact, $comparison);
    }

    /**
     * Filter the query on the coupon_expiration_date column
     *
     * Example usage:
     * <code>
     * $query->filterByCouponExpirationDate('2011-03-14'); // WHERE coupon_expiration_date = '2011-03-14'
     * $query->filterByCouponExpirationDate('now'); // WHERE coupon_expiration_date = '2011-03-14'
     * $query->filterByCouponExpirationDate(array('max' => 'yesterday')); // WHERE coupon_expiration_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $couponExpirationDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByCouponExpirationDate($couponExpirationDate = null, $comparison = null)
    {
        if (is_array($couponExpirationDate)) {
            $useMinMax = false;
            if (isset($couponExpirationDate['min'])) {
                $this->addUsingAlias(GroupdealsPeer::COUPON_EXPIRATION_DATE, $couponExpirationDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($couponExpirationDate['max'])) {
                $this->addUsingAlias(GroupdealsPeer::COUPON_EXPIRATION_DATE, $couponExpirationDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::COUPON_EXPIRATION_DATE, $couponExpirationDate, $comparison);
    }

    /**
     * Filter the query on the coupon_price column
     *
     * Example usage:
     * <code>
     * $query->filterByCouponPrice(1234); // WHERE coupon_price = 1234
     * $query->filterByCouponPrice(array(12, 34)); // WHERE coupon_price IN (12, 34)
     * $query->filterByCouponPrice(array('min' => 12)); // WHERE coupon_price >= 12
     * $query->filterByCouponPrice(array('max' => 12)); // WHERE coupon_price <= 12
     * </code>
     *
     * @param     mixed $couponPrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByCouponPrice($couponPrice = null, $comparison = null)
    {
        if (is_array($couponPrice)) {
            $useMinMax = false;
            if (isset($couponPrice['min'])) {
                $this->addUsingAlias(GroupdealsPeer::COUPON_PRICE, $couponPrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($couponPrice['max'])) {
                $this->addUsingAlias(GroupdealsPeer::COUPON_PRICE, $couponPrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::COUPON_PRICE, $couponPrice, $comparison);
    }

    /**
     * Filter the query on the coupon_fine_print column
     *
     * Example usage:
     * <code>
     * $query->filterByCouponFinePrint(1234); // WHERE coupon_fine_print = 1234
     * $query->filterByCouponFinePrint(array(12, 34)); // WHERE coupon_fine_print IN (12, 34)
     * $query->filterByCouponFinePrint(array('min' => 12)); // WHERE coupon_fine_print >= 12
     * $query->filterByCouponFinePrint(array('max' => 12)); // WHERE coupon_fine_print <= 12
     * </code>
     *
     * @param     mixed $couponFinePrint The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByCouponFinePrint($couponFinePrint = null, $comparison = null)
    {
        if (is_array($couponFinePrint)) {
            $useMinMax = false;
            if (isset($couponFinePrint['min'])) {
                $this->addUsingAlias(GroupdealsPeer::COUPON_FINE_PRINT, $couponFinePrint['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($couponFinePrint['max'])) {
                $this->addUsingAlias(GroupdealsPeer::COUPON_FINE_PRINT, $couponFinePrint['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::COUPON_FINE_PRINT, $couponFinePrint, $comparison);
    }

    /**
     * Filter the query on the coupon_highlights column
     *
     * Example usage:
     * <code>
     * $query->filterByCouponHighlights(1234); // WHERE coupon_highlights = 1234
     * $query->filterByCouponHighlights(array(12, 34)); // WHERE coupon_highlights IN (12, 34)
     * $query->filterByCouponHighlights(array('min' => 12)); // WHERE coupon_highlights >= 12
     * $query->filterByCouponHighlights(array('max' => 12)); // WHERE coupon_highlights <= 12
     * </code>
     *
     * @param     mixed $couponHighlights The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByCouponHighlights($couponHighlights = null, $comparison = null)
    {
        if (is_array($couponHighlights)) {
            $useMinMax = false;
            if (isset($couponHighlights['min'])) {
                $this->addUsingAlias(GroupdealsPeer::COUPON_HIGHLIGHTS, $couponHighlights['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($couponHighlights['max'])) {
                $this->addUsingAlias(GroupdealsPeer::COUPON_HIGHLIGHTS, $couponHighlights['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::COUPON_HIGHLIGHTS, $couponHighlights, $comparison);
    }

    /**
     * Filter the query on the coupon_merchant_description column
     *
     * Example usage:
     * <code>
     * $query->filterByCouponMerchantDescription(1234); // WHERE coupon_merchant_description = 1234
     * $query->filterByCouponMerchantDescription(array(12, 34)); // WHERE coupon_merchant_description IN (12, 34)
     * $query->filterByCouponMerchantDescription(array('min' => 12)); // WHERE coupon_merchant_description >= 12
     * $query->filterByCouponMerchantDescription(array('max' => 12)); // WHERE coupon_merchant_description <= 12
     * </code>
     *
     * @param     mixed $couponMerchantDescription The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByCouponMerchantDescription($couponMerchantDescription = null, $comparison = null)
    {
        if (is_array($couponMerchantDescription)) {
            $useMinMax = false;
            if (isset($couponMerchantDescription['min'])) {
                $this->addUsingAlias(GroupdealsPeer::COUPON_MERCHANT_DESCRIPTION, $couponMerchantDescription['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($couponMerchantDescription['max'])) {
                $this->addUsingAlias(GroupdealsPeer::COUPON_MERCHANT_DESCRIPTION, $couponMerchantDescription['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::COUPON_MERCHANT_DESCRIPTION, $couponMerchantDescription, $comparison);
    }

    /**
     * Filter the query on the coupon_business_hours column
     *
     * Example usage:
     * <code>
     * $query->filterByCouponBusinessHours(1234); // WHERE coupon_business_hours = 1234
     * $query->filterByCouponBusinessHours(array(12, 34)); // WHERE coupon_business_hours IN (12, 34)
     * $query->filterByCouponBusinessHours(array('min' => 12)); // WHERE coupon_business_hours >= 12
     * $query->filterByCouponBusinessHours(array('max' => 12)); // WHERE coupon_business_hours <= 12
     * </code>
     *
     * @param     mixed $couponBusinessHours The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByCouponBusinessHours($couponBusinessHours = null, $comparison = null)
    {
        if (is_array($couponBusinessHours)) {
            $useMinMax = false;
            if (isset($couponBusinessHours['min'])) {
                $this->addUsingAlias(GroupdealsPeer::COUPON_BUSINESS_HOURS, $couponBusinessHours['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($couponBusinessHours['max'])) {
                $this->addUsingAlias(GroupdealsPeer::COUPON_BUSINESS_HOURS, $couponBusinessHours['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::COUPON_BUSINESS_HOURS, $couponBusinessHours, $comparison);
    }

    /**
     * Filter the query on the coupon_merchant_logo column
     *
     * Example usage:
     * <code>
     * $query->filterByCouponMerchantLogo(1234); // WHERE coupon_merchant_logo = 1234
     * $query->filterByCouponMerchantLogo(array(12, 34)); // WHERE coupon_merchant_logo IN (12, 34)
     * $query->filterByCouponMerchantLogo(array('min' => 12)); // WHERE coupon_merchant_logo >= 12
     * $query->filterByCouponMerchantLogo(array('max' => 12)); // WHERE coupon_merchant_logo <= 12
     * </code>
     *
     * @param     mixed $couponMerchantLogo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByCouponMerchantLogo($couponMerchantLogo = null, $comparison = null)
    {
        if (is_array($couponMerchantLogo)) {
            $useMinMax = false;
            if (isset($couponMerchantLogo['min'])) {
                $this->addUsingAlias(GroupdealsPeer::COUPON_MERCHANT_LOGO, $couponMerchantLogo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($couponMerchantLogo['max'])) {
                $this->addUsingAlias(GroupdealsPeer::COUPON_MERCHANT_LOGO, $couponMerchantLogo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::COUPON_MERCHANT_LOGO, $couponMerchantLogo, $comparison);
    }

    /**
     * Filter the query on the coupon_additional_info column
     *
     * Example usage:
     * <code>
     * $query->filterByCouponAdditionalInfo('fooValue');   // WHERE coupon_additional_info = 'fooValue'
     * $query->filterByCouponAdditionalInfo('%fooValue%'); // WHERE coupon_additional_info LIKE '%fooValue%'
     * </code>
     *
     * @param     string $couponAdditionalInfo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByCouponAdditionalInfo($couponAdditionalInfo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($couponAdditionalInfo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $couponAdditionalInfo)) {
                $couponAdditionalInfo = str_replace('*', '%', $couponAdditionalInfo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::COUPON_ADDITIONAL_INFO, $couponAdditionalInfo, $comparison);
    }

    /**
     * Filter the query on the position column
     *
     * Example usage:
     * <code>
     * $query->filterByPosition(1234); // WHERE position = 1234
     * $query->filterByPosition(array(12, 34)); // WHERE position IN (12, 34)
     * $query->filterByPosition(array('min' => 12)); // WHERE position >= 12
     * $query->filterByPosition(array('max' => 12)); // WHERE position <= 12
     * </code>
     *
     * @param     mixed $position The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByPosition($position = null, $comparison = null)
    {
        if (is_array($position)) {
            $useMinMax = false;
            if (isset($position['min'])) {
                $this->addUsingAlias(GroupdealsPeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($position['max'])) {
                $this->addUsingAlias(GroupdealsPeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::POSITION, $position, $comparison);
    }

    /**
     * Filter the query on the title_long column
     *
     * Example usage:
     * <code>
     * $query->filterByTitleLong('fooValue');   // WHERE title_long = 'fooValue'
     * $query->filterByTitleLong('%fooValue%'); // WHERE title_long LIKE '%fooValue%'
     * </code>
     *
     * @param     string $titleLong The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByTitleLong($titleLong = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($titleLong)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $titleLong)) {
                $titleLong = str_replace('*', '%', $titleLong);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::TITLE_LONG, $titleLong, $comparison);
    }

    /**
     * Filter the query on the title_midium column
     *
     * Example usage:
     * <code>
     * $query->filterByTitleMidium('fooValue');   // WHERE title_midium = 'fooValue'
     * $query->filterByTitleMidium('%fooValue%'); // WHERE title_midium LIKE '%fooValue%'
     * </code>
     *
     * @param     string $titleMidium The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByTitleMidium($titleMidium = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($titleMidium)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $titleMidium)) {
                $titleMidium = str_replace('*', '%', $titleMidium);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::TITLE_MIDIUM, $titleMidium, $comparison);
    }

    /**
     * Filter the query on the title_short column
     *
     * Example usage:
     * <code>
     * $query->filterByTitleShort('fooValue');   // WHERE title_short = 'fooValue'
     * $query->filterByTitleShort('%fooValue%'); // WHERE title_short LIKE '%fooValue%'
     * </code>
     *
     * @param     string $titleShort The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByTitleShort($titleShort = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($titleShort)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $titleShort)) {
                $titleShort = str_replace('*', '%', $titleShort);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::TITLE_SHORT, $titleShort, $comparison);
    }

    /**
     * Filter the query on the beneffits column
     *
     * Example usage:
     * <code>
     * $query->filterByBeneffits('fooValue');   // WHERE beneffits = 'fooValue'
     * $query->filterByBeneffits('%fooValue%'); // WHERE beneffits LIKE '%fooValue%'
     * </code>
     *
     * @param     string $beneffits The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByBeneffits($beneffits = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($beneffits)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $beneffits)) {
                $beneffits = str_replace('*', '%', $beneffits);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::BENEFFITS, $beneffits, $comparison);
    }

    /**
     * Filter the query on the deal_instructions column
     *
     * Example usage:
     * <code>
     * $query->filterByDealInstructions('fooValue');   // WHERE deal_instructions = 'fooValue'
     * $query->filterByDealInstructions('%fooValue%'); // WHERE deal_instructions LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dealInstructions The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByDealInstructions($dealInstructions = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dealInstructions)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dealInstructions)) {
                $dealInstructions = str_replace('*', '%', $dealInstructions);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::DEAL_INSTRUCTIONS, $dealInstructions, $comparison);
    }

    /**
     * Filter the query on the conditions column
     *
     * Example usage:
     * <code>
     * $query->filterByConditions('fooValue');   // WHERE conditions = 'fooValue'
     * $query->filterByConditions('%fooValue%'); // WHERE conditions LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conditions The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByConditions($conditions = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conditions)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conditions)) {
                $conditions = str_replace('*', '%', $conditions);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::CONDITIONS, $conditions, $comparison);
    }

    /**
     * Filter the query on the edition_state column
     *
     * Example usage:
     * <code>
     * $query->filterByEditionState(1234); // WHERE edition_state = 1234
     * $query->filterByEditionState(array(12, 34)); // WHERE edition_state IN (12, 34)
     * $query->filterByEditionState(array('min' => 12)); // WHERE edition_state >= 12
     * $query->filterByEditionState(array('max' => 12)); // WHERE edition_state <= 12
     * </code>
     *
     * @param     mixed $editionState The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByEditionState($editionState = null, $comparison = null)
    {
        if (is_array($editionState)) {
            $useMinMax = false;
            if (isset($editionState['min'])) {
                $this->addUsingAlias(GroupdealsPeer::EDITION_STATE, $editionState['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($editionState['max'])) {
                $this->addUsingAlias(GroupdealsPeer::EDITION_STATE, $editionState['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::EDITION_STATE, $editionState, $comparison);
    }

    /**
     * Filter the query on the publication_state column
     *
     * Example usage:
     * <code>
     * $query->filterByPublicationState(1234); // WHERE publication_state = 1234
     * $query->filterByPublicationState(array(12, 34)); // WHERE publication_state IN (12, 34)
     * $query->filterByPublicationState(array('min' => 12)); // WHERE publication_state >= 12
     * $query->filterByPublicationState(array('max' => 12)); // WHERE publication_state <= 12
     * </code>
     *
     * @param     mixed $publicationState The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByPublicationState($publicationState = null, $comparison = null)
    {
        if (is_array($publicationState)) {
            $useMinMax = false;
            if (isset($publicationState['min'])) {
                $this->addUsingAlias(GroupdealsPeer::PUBLICATION_STATE, $publicationState['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($publicationState['max'])) {
                $this->addUsingAlias(GroupdealsPeer::PUBLICATION_STATE, $publicationState['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::PUBLICATION_STATE, $publicationState, $comparison);
    }

    /**
     * Filter the query on the product_type column
     *
     * Example usage:
     * <code>
     * $query->filterByProductType(1234); // WHERE product_type = 1234
     * $query->filterByProductType(array(12, 34)); // WHERE product_type IN (12, 34)
     * $query->filterByProductType(array('min' => 12)); // WHERE product_type >= 12
     * $query->filterByProductType(array('max' => 12)); // WHERE product_type <= 12
     * </code>
     *
     * @param     mixed $productType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByProductType($productType = null, $comparison = null)
    {
        if (is_array($productType)) {
            $useMinMax = false;
            if (isset($productType['min'])) {
                $this->addUsingAlias(GroupdealsPeer::PRODUCT_TYPE, $productType['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productType['max'])) {
                $this->addUsingAlias(GroupdealsPeer::PRODUCT_TYPE, $productType['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::PRODUCT_TYPE, $productType, $comparison);
    }

    /**
     * Filter the query on the expiration_date column
     *
     * Example usage:
     * <code>
     * $query->filterByExpirationDate('fooValue');   // WHERE expiration_date = 'fooValue'
     * $query->filterByExpirationDate('%fooValue%'); // WHERE expiration_date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expirationDate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByExpirationDate($expirationDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expirationDate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expirationDate)) {
                $expirationDate = str_replace('*', '%', $expirationDate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::EXPIRATION_DATE, $expirationDate, $comparison);
    }

    /**
     * Filter the query on the tcc column
     *
     * Example usage:
     * <code>
     * $query->filterByTcc(1234); // WHERE tcc = 1234
     * $query->filterByTcc(array(12, 34)); // WHERE tcc IN (12, 34)
     * $query->filterByTcc(array('min' => 12)); // WHERE tcc >= 12
     * $query->filterByTcc(array('max' => 12)); // WHERE tcc <= 12
     * </code>
     *
     * @param     mixed $tcc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByTcc($tcc = null, $comparison = null)
    {
        if (is_array($tcc)) {
            $useMinMax = false;
            if (isset($tcc['min'])) {
                $this->addUsingAlias(GroupdealsPeer::TCC, $tcc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tcc['max'])) {
                $this->addUsingAlias(GroupdealsPeer::TCC, $tcc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::TCC, $tcc, $comparison);
    }

    /**
     * Filter the query on the negociation_type column
     *
     * Example usage:
     * <code>
     * $query->filterByNegociationType(1234); // WHERE negociation_type = 1234
     * $query->filterByNegociationType(array(12, 34)); // WHERE negociation_type IN (12, 34)
     * $query->filterByNegociationType(array('min' => 12)); // WHERE negociation_type >= 12
     * $query->filterByNegociationType(array('max' => 12)); // WHERE negociation_type <= 12
     * </code>
     *
     * @param     mixed $negociationType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByNegociationType($negociationType = null, $comparison = null)
    {
        if (is_array($negociationType)) {
            $useMinMax = false;
            if (isset($negociationType['min'])) {
                $this->addUsingAlias(GroupdealsPeer::NEGOCIATION_TYPE, $negociationType['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($negociationType['max'])) {
                $this->addUsingAlias(GroupdealsPeer::NEGOCIATION_TYPE, $negociationType['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::NEGOCIATION_TYPE, $negociationType, $comparison);
    }

    /**
     * Filter the query on the agreement_type column
     *
     * Example usage:
     * <code>
     * $query->filterByAgreementType(1234); // WHERE agreement_type = 1234
     * $query->filterByAgreementType(array(12, 34)); // WHERE agreement_type IN (12, 34)
     * $query->filterByAgreementType(array('min' => 12)); // WHERE agreement_type >= 12
     * $query->filterByAgreementType(array('max' => 12)); // WHERE agreement_type <= 12
     * </code>
     *
     * @param     mixed $agreementType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByAgreementType($agreementType = null, $comparison = null)
    {
        if (is_array($agreementType)) {
            $useMinMax = false;
            if (isset($agreementType['min'])) {
                $this->addUsingAlias(GroupdealsPeer::AGREEMENT_TYPE, $agreementType['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agreementType['max'])) {
                $this->addUsingAlias(GroupdealsPeer::AGREEMENT_TYPE, $agreementType['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::AGREEMENT_TYPE, $agreementType, $comparison);
    }

    /**
     * Filter the query on the buys_per_user column
     *
     * Example usage:
     * <code>
     * $query->filterByBuysPerUser(1234); // WHERE buys_per_user = 1234
     * $query->filterByBuysPerUser(array(12, 34)); // WHERE buys_per_user IN (12, 34)
     * $query->filterByBuysPerUser(array('min' => 12)); // WHERE buys_per_user >= 12
     * $query->filterByBuysPerUser(array('max' => 12)); // WHERE buys_per_user <= 12
     * </code>
     *
     * @param     mixed $buysPerUser The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByBuysPerUser($buysPerUser = null, $comparison = null)
    {
        if (is_array($buysPerUser)) {
            $useMinMax = false;
            if (isset($buysPerUser['min'])) {
                $this->addUsingAlias(GroupdealsPeer::BUYS_PER_USER, $buysPerUser['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($buysPerUser['max'])) {
                $this->addUsingAlias(GroupdealsPeer::BUYS_PER_USER, $buysPerUser['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::BUYS_PER_USER, $buysPerUser, $comparison);
    }

    /**
     * Filter the query on the video_html5 column
     *
     * Example usage:
     * <code>
     * $query->filterByVideoHtml5('fooValue');   // WHERE video_html5 = 'fooValue'
     * $query->filterByVideoHtml5('%fooValue%'); // WHERE video_html5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $videoHtml5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByVideoHtml5($videoHtml5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($videoHtml5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $videoHtml5)) {
                $videoHtml5 = str_replace('*', '%', $videoHtml5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::VIDEO_HTML5, $videoHtml5, $comparison);
    }

    /**
     * Filter the query on the video_flash column
     *
     * Example usage:
     * <code>
     * $query->filterByVideoFlash('fooValue');   // WHERE video_flash = 'fooValue'
     * $query->filterByVideoFlash('%fooValue%'); // WHERE video_flash LIKE '%fooValue%'
     * </code>
     *
     * @param     string $videoFlash The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByVideoFlash($videoFlash = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($videoFlash)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $videoFlash)) {
                $videoFlash = str_replace('*', '%', $videoFlash);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::VIDEO_FLASH, $videoFlash, $comparison);
    }

    /**
     * Filter the query on the reference column
     *
     * Example usage:
     * <code>
     * $query->filterByReference(1234); // WHERE reference = 1234
     * $query->filterByReference(array(12, 34)); // WHERE reference IN (12, 34)
     * $query->filterByReference(array('min' => 12)); // WHERE reference >= 12
     * $query->filterByReference(array('max' => 12)); // WHERE reference <= 12
     * </code>
     *
     * @param     mixed $reference The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByReference($reference = null, $comparison = null)
    {
        if (is_array($reference)) {
            $useMinMax = false;
            if (isset($reference['min'])) {
                $this->addUsingAlias(GroupdealsPeer::REFERENCE, $reference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reference['max'])) {
                $this->addUsingAlias(GroupdealsPeer::REFERENCE, $reference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::REFERENCE, $reference, $comparison);
    }

    /**
     * Filter the query on the payment_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentId('fooValue');   // WHERE payment_id = 'fooValue'
     * $query->filterByPaymentId('%fooValue%'); // WHERE payment_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paymentId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByPaymentId($paymentId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paymentId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paymentId)) {
                $paymentId = str_replace('*', '%', $paymentId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::PAYMENT_ID, $paymentId, $comparison);
    }

    /**
     * Filter the query on the boost_sales column
     *
     * Example usage:
     * <code>
     * $query->filterByBoostSales(1234); // WHERE boost_sales = 1234
     * $query->filterByBoostSales(array(12, 34)); // WHERE boost_sales IN (12, 34)
     * $query->filterByBoostSales(array('min' => 12)); // WHERE boost_sales >= 12
     * $query->filterByBoostSales(array('max' => 12)); // WHERE boost_sales <= 12
     * </code>
     *
     * @param     mixed $boostSales The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByBoostSales($boostSales = null, $comparison = null)
    {
        if (is_array($boostSales)) {
            $useMinMax = false;
            if (isset($boostSales['min'])) {
                $this->addUsingAlias(GroupdealsPeer::BOOST_SALES, $boostSales['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boostSales['max'])) {
                $this->addUsingAlias(GroupdealsPeer::BOOST_SALES, $boostSales['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::BOOST_SALES, $boostSales, $comparison);
    }

    /**
     * Filter the query on the locations column
     *
     * Example usage:
     * <code>
     * $query->filterByLocations('fooValue');   // WHERE locations = 'fooValue'
     * $query->filterByLocations('%fooValue%'); // WHERE locations LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locations The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByLocations($locations = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($locations)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $locations)) {
                $locations = str_replace('*', '%', $locations);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::LOCATIONS, $locations, $comparison);
    }

    /**
     * Filter the query on the et_gain column
     *
     * Example usage:
     * <code>
     * $query->filterByEtGain(1234); // WHERE et_gain = 1234
     * $query->filterByEtGain(array(12, 34)); // WHERE et_gain IN (12, 34)
     * $query->filterByEtGain(array('min' => 12)); // WHERE et_gain >= 12
     * $query->filterByEtGain(array('max' => 12)); // WHERE et_gain <= 12
     * </code>
     *
     * @param     mixed $etGain The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByEtGain($etGain = null, $comparison = null)
    {
        if (is_array($etGain)) {
            $useMinMax = false;
            if (isset($etGain['min'])) {
                $this->addUsingAlias(GroupdealsPeer::ET_GAIN, $etGain['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($etGain['max'])) {
                $this->addUsingAlias(GroupdealsPeer::ET_GAIN, $etGain['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::ET_GAIN, $etGain, $comparison);
    }

    /**
     * Filter the query on the active_date column
     *
     * Example usage:
     * <code>
     * $query->filterByActiveDate('2011-03-14'); // WHERE active_date = '2011-03-14'
     * $query->filterByActiveDate('now'); // WHERE active_date = '2011-03-14'
     * $query->filterByActiveDate(array('max' => 'yesterday')); // WHERE active_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $activeDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByActiveDate($activeDate = null, $comparison = null)
    {
        if (is_array($activeDate)) {
            $useMinMax = false;
            if (isset($activeDate['min'])) {
                $this->addUsingAlias(GroupdealsPeer::ACTIVE_DATE, $activeDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($activeDate['max'])) {
                $this->addUsingAlias(GroupdealsPeer::ACTIVE_DATE, $activeDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::ACTIVE_DATE, $activeDate, $comparison);
    }

    /**
     * Filter the query on the treasury_type column
     *
     * Example usage:
     * <code>
     * $query->filterByTreasuryType(1234); // WHERE treasury_type = 1234
     * $query->filterByTreasuryType(array(12, 34)); // WHERE treasury_type IN (12, 34)
     * $query->filterByTreasuryType(array('min' => 12)); // WHERE treasury_type >= 12
     * $query->filterByTreasuryType(array('max' => 12)); // WHERE treasury_type <= 12
     * </code>
     *
     * @see       filterByTreasuryTypes()
     *
     * @param     mixed $treasuryType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByTreasuryType($treasuryType = null, $comparison = null)
    {
        if (is_array($treasuryType)) {
            $useMinMax = false;
            if (isset($treasuryType['min'])) {
                $this->addUsingAlias(GroupdealsPeer::TREASURY_TYPE, $treasuryType['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($treasuryType['max'])) {
                $this->addUsingAlias(GroupdealsPeer::TREASURY_TYPE, $treasuryType['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::TREASURY_TYPE, $treasuryType, $comparison);
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
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByCommercialNameId($commercialNameId = null, $comparison = null)
    {
        if (is_array($commercialNameId)) {
            $useMinMax = false;
            if (isset($commercialNameId['min'])) {
                $this->addUsingAlias(GroupdealsPeer::COMMERCIAL_NAME_ID, $commercialNameId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commercialNameId['max'])) {
                $this->addUsingAlias(GroupdealsPeer::COMMERCIAL_NAME_ID, $commercialNameId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::COMMERCIAL_NAME_ID, $commercialNameId, $comparison);
    }

    /**
     * Filter the query on the orders_count column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdersCount(1234); // WHERE orders_count = 1234
     * $query->filterByOrdersCount(array(12, 34)); // WHERE orders_count IN (12, 34)
     * $query->filterByOrdersCount(array('min' => 12)); // WHERE orders_count >= 12
     * $query->filterByOrdersCount(array('max' => 12)); // WHERE orders_count <= 12
     * </code>
     *
     * @param     mixed $ordersCount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByOrdersCount($ordersCount = null, $comparison = null)
    {
        if (is_array($ordersCount)) {
            $useMinMax = false;
            if (isset($ordersCount['min'])) {
                $this->addUsingAlias(GroupdealsPeer::ORDERS_COUNT, $ordersCount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordersCount['max'])) {
                $this->addUsingAlias(GroupdealsPeer::ORDERS_COUNT, $ordersCount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::ORDERS_COUNT, $ordersCount, $comparison);
    }

    /**
     * Filter the query on the active_offer column
     *
     * Example usage:
     * <code>
     * $query->filterByActiveOffer(1234); // WHERE active_offer = 1234
     * $query->filterByActiveOffer(array(12, 34)); // WHERE active_offer IN (12, 34)
     * $query->filterByActiveOffer(array('min' => 12)); // WHERE active_offer >= 12
     * $query->filterByActiveOffer(array('max' => 12)); // WHERE active_offer <= 12
     * </code>
     *
     * @param     mixed $activeOffer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByActiveOffer($activeOffer = null, $comparison = null)
    {
        if (is_array($activeOffer)) {
            $useMinMax = false;
            if (isset($activeOffer['min'])) {
                $this->addUsingAlias(GroupdealsPeer::ACTIVE_OFFER, $activeOffer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($activeOffer['max'])) {
                $this->addUsingAlias(GroupdealsPeer::ACTIVE_OFFER, $activeOffer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::ACTIVE_OFFER, $activeOffer, $comparison);
    }

    /**
     * Filter the query on the is_closed column
     *
     * Example usage:
     * <code>
     * $query->filterByIsClosed(1234); // WHERE is_closed = 1234
     * $query->filterByIsClosed(array(12, 34)); // WHERE is_closed IN (12, 34)
     * $query->filterByIsClosed(array('min' => 12)); // WHERE is_closed >= 12
     * $query->filterByIsClosed(array('max' => 12)); // WHERE is_closed <= 12
     * </code>
     *
     * @param     mixed $isClosed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByIsClosed($isClosed = null, $comparison = null)
    {
        if (is_array($isClosed)) {
            $useMinMax = false;
            if (isset($isClosed['min'])) {
                $this->addUsingAlias(GroupdealsPeer::IS_CLOSED, $isClosed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isClosed['max'])) {
                $this->addUsingAlias(GroupdealsPeer::IS_CLOSED, $isClosed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::IS_CLOSED, $isClosed, $comparison);
    }

    /**
     * Filter the query on the qty_sold column
     *
     * Example usage:
     * <code>
     * $query->filterByQtySold(1234); // WHERE qty_sold = 1234
     * $query->filterByQtySold(array(12, 34)); // WHERE qty_sold IN (12, 34)
     * $query->filterByQtySold(array('min' => 12)); // WHERE qty_sold >= 12
     * $query->filterByQtySold(array('max' => 12)); // WHERE qty_sold <= 12
     * </code>
     *
     * @param     mixed $qtySold The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByQtySold($qtySold = null, $comparison = null)
    {
        if (is_array($qtySold)) {
            $useMinMax = false;
            if (isset($qtySold['min'])) {
                $this->addUsingAlias(GroupdealsPeer::QTY_SOLD, $qtySold['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtySold['max'])) {
                $this->addUsingAlias(GroupdealsPeer::QTY_SOLD, $qtySold['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::QTY_SOLD, $qtySold, $comparison);
    }

    /**
     * Filter the query on the init_stock column
     *
     * Example usage:
     * <code>
     * $query->filterByInitStock(1234); // WHERE init_stock = 1234
     * $query->filterByInitStock(array(12, 34)); // WHERE init_stock IN (12, 34)
     * $query->filterByInitStock(array('min' => 12)); // WHERE init_stock >= 12
     * $query->filterByInitStock(array('max' => 12)); // WHERE init_stock <= 12
     * </code>
     *
     * @param     mixed $initStock The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByInitStock($initStock = null, $comparison = null)
    {
        if (is_array($initStock)) {
            $useMinMax = false;
            if (isset($initStock['min'])) {
                $this->addUsingAlias(GroupdealsPeer::INIT_STOCK, $initStock['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($initStock['max'])) {
                $this->addUsingAlias(GroupdealsPeer::INIT_STOCK, $initStock['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::INIT_STOCK, $initStock, $comparison);
    }

    /**
     * Filter the query on the with_personalized_coupons column
     *
     * Example usage:
     * <code>
     * $query->filterByWithPersonalizedCoupons(1234); // WHERE with_personalized_coupons = 1234
     * $query->filterByWithPersonalizedCoupons(array(12, 34)); // WHERE with_personalized_coupons IN (12, 34)
     * $query->filterByWithPersonalizedCoupons(array('min' => 12)); // WHERE with_personalized_coupons >= 12
     * $query->filterByWithPersonalizedCoupons(array('max' => 12)); // WHERE with_personalized_coupons <= 12
     * </code>
     *
     * @param     mixed $withPersonalizedCoupons The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByWithPersonalizedCoupons($withPersonalizedCoupons = null, $comparison = null)
    {
        if (is_array($withPersonalizedCoupons)) {
            $useMinMax = false;
            if (isset($withPersonalizedCoupons['min'])) {
                $this->addUsingAlias(GroupdealsPeer::WITH_PERSONALIZED_COUPONS, $withPersonalizedCoupons['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($withPersonalizedCoupons['max'])) {
                $this->addUsingAlias(GroupdealsPeer::WITH_PERSONALIZED_COUPONS, $withPersonalizedCoupons['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::WITH_PERSONALIZED_COUPONS, $withPersonalizedCoupons, $comparison);
    }

    /**
     * Filter the query on the code_type column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeType(1234); // WHERE code_type = 1234
     * $query->filterByCodeType(array(12, 34)); // WHERE code_type IN (12, 34)
     * $query->filterByCodeType(array('min' => 12)); // WHERE code_type >= 12
     * $query->filterByCodeType(array('max' => 12)); // WHERE code_type <= 12
     * </code>
     *
     * @param     mixed $codeType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByCodeType($codeType = null, $comparison = null)
    {
        if (is_array($codeType)) {
            $useMinMax = false;
            if (isset($codeType['min'])) {
                $this->addUsingAlias(GroupdealsPeer::CODE_TYPE, $codeType['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($codeType['max'])) {
                $this->addUsingAlias(GroupdealsPeer::CODE_TYPE, $codeType['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::CODE_TYPE, $codeType, $comparison);
    }

    /**
     * Filter the query on the general_nit column
     *
     * Example usage:
     * <code>
     * $query->filterByGeneralNit(1234); // WHERE general_nit = 1234
     * $query->filterByGeneralNit(array(12, 34)); // WHERE general_nit IN (12, 34)
     * $query->filterByGeneralNit(array('min' => 12)); // WHERE general_nit >= 12
     * $query->filterByGeneralNit(array('max' => 12)); // WHERE general_nit <= 12
     * </code>
     *
     * @param     mixed $generalNit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function filterByGeneralNit($generalNit = null, $comparison = null)
    {
        if (is_array($generalNit)) {
            $useMinMax = false;
            if (isset($generalNit['min'])) {
                $this->addUsingAlias(GroupdealsPeer::GENERAL_NIT, $generalNit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($generalNit['max'])) {
                $this->addUsingAlias(GroupdealsPeer::GENERAL_NIT, $generalNit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GroupdealsPeer::GENERAL_NIT, $generalNit, $comparison);
    }

    /**
     * Filter the query by a related TreasuryTypes object
     *
     * @param   TreasuryTypes|PropelObjectCollection $treasuryTypes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GroupdealsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTreasuryTypes($treasuryTypes, $comparison = null)
    {
        if ($treasuryTypes instanceof TreasuryTypes) {
            return $this
                ->addUsingAlias(GroupdealsPeer::TREASURY_TYPE, $treasuryTypes->getId(), $comparison);
        } elseif ($treasuryTypes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GroupdealsPeer::TREASURY_TYPE, $treasuryTypes->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByTreasuryTypes() only accepts arguments of type TreasuryTypes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TreasuryTypes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function joinTreasuryTypes($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TreasuryTypes');

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
            $this->addJoinObject($join, 'TreasuryTypes');
        }

        return $this;
    }

    /**
     * Use the TreasuryTypes relation TreasuryTypes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TreasuryTypesQuery A secondary query class using the current class as primary query
     */
    public function useTreasuryTypesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTreasuryTypes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TreasuryTypes', 'TreasuryTypesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Groupdeals $groupdeals Object to remove from the list of results
     *
     * @return GroupdealsQuery The current query, for fluid interface
     */
    public function prune($groupdeals = null)
    {
        if ($groupdeals) {
            $this->addUsingAlias(GroupdealsPeer::GROUPDEALS_ID, $groupdeals->getGroupdealsId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
