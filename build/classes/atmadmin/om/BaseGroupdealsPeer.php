<?php


/**
 * Base static class for performing query and update operations on the 'groupdeals' table.
 *
 *
 *
 * @package propel.generator.atmadmin.om
 */
abstract class BaseGroupdealsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'atmadmin';

    /** the table name for this class */
    const TABLE_NAME = 'groupdeals';

    /** the related Propel class for this table */
    const OM_CLASS = 'Groupdeals';

    /** the related TableMap class for this table */
    const TM_CLASS = 'GroupdealsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 49;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 49;

    /** the column name for the groupdeals_id field */
    const GROUPDEALS_ID = 'groupdeals.groupdeals_id';

    /** the column name for the product_id field */
    const PRODUCT_ID = 'groupdeals.product_id';

    /** the column name for the merchant_id field */
    const MERCHANT_ID = 'groupdeals.merchant_id';

    /** the column name for the minimum_qty field */
    const MINIMUM_QTY = 'groupdeals.minimum_qty';

    /** the column name for the maximum_qty field */
    const MAXIMUM_QTY = 'groupdeals.maximum_qty';

    /** the column name for the target_met_email field */
    const TARGET_MET_EMAIL = 'groupdeals.target_met_email';

    /** the column name for the coupon_barcode field */
    const COUPON_BARCODE = 'groupdeals.coupon_barcode';

    /** the column name for the coupon_merchant_address field */
    const COUPON_MERCHANT_ADDRESS = 'groupdeals.coupon_merchant_address';

    /** the column name for the coupon_merchant_contact field */
    const COUPON_MERCHANT_CONTACT = 'groupdeals.coupon_merchant_contact';

    /** the column name for the coupon_expiration_date field */
    const COUPON_EXPIRATION_DATE = 'groupdeals.coupon_expiration_date';

    /** the column name for the coupon_price field */
    const COUPON_PRICE = 'groupdeals.coupon_price';

    /** the column name for the coupon_fine_print field */
    const COUPON_FINE_PRINT = 'groupdeals.coupon_fine_print';

    /** the column name for the coupon_highlights field */
    const COUPON_HIGHLIGHTS = 'groupdeals.coupon_highlights';

    /** the column name for the coupon_merchant_description field */
    const COUPON_MERCHANT_DESCRIPTION = 'groupdeals.coupon_merchant_description';

    /** the column name for the coupon_business_hours field */
    const COUPON_BUSINESS_HOURS = 'groupdeals.coupon_business_hours';

    /** the column name for the coupon_merchant_logo field */
    const COUPON_MERCHANT_LOGO = 'groupdeals.coupon_merchant_logo';

    /** the column name for the coupon_additional_info field */
    const COUPON_ADDITIONAL_INFO = 'groupdeals.coupon_additional_info';

    /** the column name for the position field */
    const POSITION = 'groupdeals.position';

    /** the column name for the title_long field */
    const TITLE_LONG = 'groupdeals.title_long';

    /** the column name for the title_midium field */
    const TITLE_MIDIUM = 'groupdeals.title_midium';

    /** the column name for the title_short field */
    const TITLE_SHORT = 'groupdeals.title_short';

    /** the column name for the beneffits field */
    const BENEFFITS = 'groupdeals.beneffits';

    /** the column name for the deal_instructions field */
    const DEAL_INSTRUCTIONS = 'groupdeals.deal_instructions';

    /** the column name for the conditions field */
    const CONDITIONS = 'groupdeals.conditions';

    /** the column name for the edition_state field */
    const EDITION_STATE = 'groupdeals.edition_state';

    /** the column name for the publication_state field */
    const PUBLICATION_STATE = 'groupdeals.publication_state';

    /** the column name for the product_type field */
    const PRODUCT_TYPE = 'groupdeals.product_type';

    /** the column name for the expiration_date field */
    const EXPIRATION_DATE = 'groupdeals.expiration_date';

    /** the column name for the tcc field */
    const TCC = 'groupdeals.tcc';

    /** the column name for the negociation_type field */
    const NEGOCIATION_TYPE = 'groupdeals.negociation_type';

    /** the column name for the agreement_type field */
    const AGREEMENT_TYPE = 'groupdeals.agreement_type';

    /** the column name for the buys_per_user field */
    const BUYS_PER_USER = 'groupdeals.buys_per_user';

    /** the column name for the video_html5 field */
    const VIDEO_HTML5 = 'groupdeals.video_html5';

    /** the column name for the video_flash field */
    const VIDEO_FLASH = 'groupdeals.video_flash';

    /** the column name for the reference field */
    const REFERENCE = 'groupdeals.reference';

    /** the column name for the payment_id field */
    const PAYMENT_ID = 'groupdeals.payment_id';

    /** the column name for the boost_sales field */
    const BOOST_SALES = 'groupdeals.boost_sales';

    /** the column name for the locations field */
    const LOCATIONS = 'groupdeals.locations';

    /** the column name for the et_gain field */
    const ET_GAIN = 'groupdeals.et_gain';

    /** the column name for the active_date field */
    const ACTIVE_DATE = 'groupdeals.active_date';

    /** the column name for the treasury_type field */
    const TREASURY_TYPE = 'groupdeals.treasury_type';

    /** the column name for the commercial_name_id field */
    const COMMERCIAL_NAME_ID = 'groupdeals.commercial_name_id';

    /** the column name for the orders_count field */
    const ORDERS_COUNT = 'groupdeals.orders_count';

    /** the column name for the active_offer field */
    const ACTIVE_OFFER = 'groupdeals.active_offer';

    /** the column name for the is_closed field */
    const IS_CLOSED = 'groupdeals.is_closed';

    /** the column name for the qty_sold field */
    const QTY_SOLD = 'groupdeals.qty_sold';

    /** the column name for the init_stock field */
    const INIT_STOCK = 'groupdeals.init_stock';

    /** the column name for the with_personalized_coupons field */
    const WITH_PERSONALIZED_COUPONS = 'groupdeals.with_personalized_coupons';

    /** the column name for the code_type field */
    const CODE_TYPE = 'groupdeals.code_type';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Groupdeals objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Groupdeals[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GroupdealsPeer::$fieldNames[GroupdealsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('GroupdealsId', 'ProductId', 'MerchantId', 'MinimumQty', 'MaximumQty', 'TargetMetEmail', 'CouponBarcode', 'CouponMerchantAddress', 'CouponMerchantContact', 'CouponExpirationDate', 'CouponPrice', 'CouponFinePrint', 'CouponHighlights', 'CouponMerchantDescription', 'CouponBusinessHours', 'CouponMerchantLogo', 'CouponAdditionalInfo', 'Position', 'TitleLong', 'TitleMidium', 'TitleShort', 'Beneffits', 'DealInstructions', 'Conditions', 'EditionState', 'PublicationState', 'ProductType', 'ExpirationDate', 'Tcc', 'NegociationType', 'AgreementType', 'BuysPerUser', 'VideoHtml5', 'VideoFlash', 'Reference', 'PaymentId', 'BoostSales', 'Locations', 'EtGain', 'ActiveDate', 'TreasuryType', 'CommercialNameId', 'OrdersCount', 'ActiveOffer', 'IsClosed', 'QtySold', 'InitStock', 'WithPersonalizedCoupons', 'CodeType', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('groupdealsId', 'productId', 'merchantId', 'minimumQty', 'maximumQty', 'targetMetEmail', 'couponBarcode', 'couponMerchantAddress', 'couponMerchantContact', 'couponExpirationDate', 'couponPrice', 'couponFinePrint', 'couponHighlights', 'couponMerchantDescription', 'couponBusinessHours', 'couponMerchantLogo', 'couponAdditionalInfo', 'position', 'titleLong', 'titleMidium', 'titleShort', 'beneffits', 'dealInstructions', 'conditions', 'editionState', 'publicationState', 'productType', 'expirationDate', 'tcc', 'negociationType', 'agreementType', 'buysPerUser', 'videoHtml5', 'videoFlash', 'reference', 'paymentId', 'boostSales', 'locations', 'etGain', 'activeDate', 'treasuryType', 'commercialNameId', 'ordersCount', 'activeOffer', 'isClosed', 'qtySold', 'initStock', 'withPersonalizedCoupons', 'codeType', ),
        BasePeer::TYPE_COLNAME => array (GroupdealsPeer::GROUPDEALS_ID, GroupdealsPeer::PRODUCT_ID, GroupdealsPeer::MERCHANT_ID, GroupdealsPeer::MINIMUM_QTY, GroupdealsPeer::MAXIMUM_QTY, GroupdealsPeer::TARGET_MET_EMAIL, GroupdealsPeer::COUPON_BARCODE, GroupdealsPeer::COUPON_MERCHANT_ADDRESS, GroupdealsPeer::COUPON_MERCHANT_CONTACT, GroupdealsPeer::COUPON_EXPIRATION_DATE, GroupdealsPeer::COUPON_PRICE, GroupdealsPeer::COUPON_FINE_PRINT, GroupdealsPeer::COUPON_HIGHLIGHTS, GroupdealsPeer::COUPON_MERCHANT_DESCRIPTION, GroupdealsPeer::COUPON_BUSINESS_HOURS, GroupdealsPeer::COUPON_MERCHANT_LOGO, GroupdealsPeer::COUPON_ADDITIONAL_INFO, GroupdealsPeer::POSITION, GroupdealsPeer::TITLE_LONG, GroupdealsPeer::TITLE_MIDIUM, GroupdealsPeer::TITLE_SHORT, GroupdealsPeer::BENEFFITS, GroupdealsPeer::DEAL_INSTRUCTIONS, GroupdealsPeer::CONDITIONS, GroupdealsPeer::EDITION_STATE, GroupdealsPeer::PUBLICATION_STATE, GroupdealsPeer::PRODUCT_TYPE, GroupdealsPeer::EXPIRATION_DATE, GroupdealsPeer::TCC, GroupdealsPeer::NEGOCIATION_TYPE, GroupdealsPeer::AGREEMENT_TYPE, GroupdealsPeer::BUYS_PER_USER, GroupdealsPeer::VIDEO_HTML5, GroupdealsPeer::VIDEO_FLASH, GroupdealsPeer::REFERENCE, GroupdealsPeer::PAYMENT_ID, GroupdealsPeer::BOOST_SALES, GroupdealsPeer::LOCATIONS, GroupdealsPeer::ET_GAIN, GroupdealsPeer::ACTIVE_DATE, GroupdealsPeer::TREASURY_TYPE, GroupdealsPeer::COMMERCIAL_NAME_ID, GroupdealsPeer::ORDERS_COUNT, GroupdealsPeer::ACTIVE_OFFER, GroupdealsPeer::IS_CLOSED, GroupdealsPeer::QTY_SOLD, GroupdealsPeer::INIT_STOCK, GroupdealsPeer::WITH_PERSONALIZED_COUPONS, GroupdealsPeer::CODE_TYPE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('GROUPDEALS_ID', 'PRODUCT_ID', 'MERCHANT_ID', 'MINIMUM_QTY', 'MAXIMUM_QTY', 'TARGET_MET_EMAIL', 'COUPON_BARCODE', 'COUPON_MERCHANT_ADDRESS', 'COUPON_MERCHANT_CONTACT', 'COUPON_EXPIRATION_DATE', 'COUPON_PRICE', 'COUPON_FINE_PRINT', 'COUPON_HIGHLIGHTS', 'COUPON_MERCHANT_DESCRIPTION', 'COUPON_BUSINESS_HOURS', 'COUPON_MERCHANT_LOGO', 'COUPON_ADDITIONAL_INFO', 'POSITION', 'TITLE_LONG', 'TITLE_MIDIUM', 'TITLE_SHORT', 'BENEFFITS', 'DEAL_INSTRUCTIONS', 'CONDITIONS', 'EDITION_STATE', 'PUBLICATION_STATE', 'PRODUCT_TYPE', 'EXPIRATION_DATE', 'TCC', 'NEGOCIATION_TYPE', 'AGREEMENT_TYPE', 'BUYS_PER_USER', 'VIDEO_HTML5', 'VIDEO_FLASH', 'REFERENCE', 'PAYMENT_ID', 'BOOST_SALES', 'LOCATIONS', 'ET_GAIN', 'ACTIVE_DATE', 'TREASURY_TYPE', 'COMMERCIAL_NAME_ID', 'ORDERS_COUNT', 'ACTIVE_OFFER', 'IS_CLOSED', 'QTY_SOLD', 'INIT_STOCK', 'WITH_PERSONALIZED_COUPONS', 'CODE_TYPE', ),
        BasePeer::TYPE_FIELDNAME => array ('groupdeals_id', 'product_id', 'merchant_id', 'minimum_qty', 'maximum_qty', 'target_met_email', 'coupon_barcode', 'coupon_merchant_address', 'coupon_merchant_contact', 'coupon_expiration_date', 'coupon_price', 'coupon_fine_print', 'coupon_highlights', 'coupon_merchant_description', 'coupon_business_hours', 'coupon_merchant_logo', 'coupon_additional_info', 'position', 'title_long', 'title_midium', 'title_short', 'beneffits', 'deal_instructions', 'conditions', 'edition_state', 'publication_state', 'product_type', 'expiration_date', 'tcc', 'negociation_type', 'agreement_type', 'buys_per_user', 'video_html5', 'video_flash', 'reference', 'payment_id', 'boost_sales', 'locations', 'et_gain', 'active_date', 'treasury_type', 'commercial_name_id', 'orders_count', 'active_offer', 'is_closed', 'qty_sold', 'init_stock', 'with_personalized_coupons', 'code_type', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GroupdealsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('GroupdealsId' => 0, 'ProductId' => 1, 'MerchantId' => 2, 'MinimumQty' => 3, 'MaximumQty' => 4, 'TargetMetEmail' => 5, 'CouponBarcode' => 6, 'CouponMerchantAddress' => 7, 'CouponMerchantContact' => 8, 'CouponExpirationDate' => 9, 'CouponPrice' => 10, 'CouponFinePrint' => 11, 'CouponHighlights' => 12, 'CouponMerchantDescription' => 13, 'CouponBusinessHours' => 14, 'CouponMerchantLogo' => 15, 'CouponAdditionalInfo' => 16, 'Position' => 17, 'TitleLong' => 18, 'TitleMidium' => 19, 'TitleShort' => 20, 'Beneffits' => 21, 'DealInstructions' => 22, 'Conditions' => 23, 'EditionState' => 24, 'PublicationState' => 25, 'ProductType' => 26, 'ExpirationDate' => 27, 'Tcc' => 28, 'NegociationType' => 29, 'AgreementType' => 30, 'BuysPerUser' => 31, 'VideoHtml5' => 32, 'VideoFlash' => 33, 'Reference' => 34, 'PaymentId' => 35, 'BoostSales' => 36, 'Locations' => 37, 'EtGain' => 38, 'ActiveDate' => 39, 'TreasuryType' => 40, 'CommercialNameId' => 41, 'OrdersCount' => 42, 'ActiveOffer' => 43, 'IsClosed' => 44, 'QtySold' => 45, 'InitStock' => 46, 'WithPersonalizedCoupons' => 47, 'CodeType' => 48, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('groupdealsId' => 0, 'productId' => 1, 'merchantId' => 2, 'minimumQty' => 3, 'maximumQty' => 4, 'targetMetEmail' => 5, 'couponBarcode' => 6, 'couponMerchantAddress' => 7, 'couponMerchantContact' => 8, 'couponExpirationDate' => 9, 'couponPrice' => 10, 'couponFinePrint' => 11, 'couponHighlights' => 12, 'couponMerchantDescription' => 13, 'couponBusinessHours' => 14, 'couponMerchantLogo' => 15, 'couponAdditionalInfo' => 16, 'position' => 17, 'titleLong' => 18, 'titleMidium' => 19, 'titleShort' => 20, 'beneffits' => 21, 'dealInstructions' => 22, 'conditions' => 23, 'editionState' => 24, 'publicationState' => 25, 'productType' => 26, 'expirationDate' => 27, 'tcc' => 28, 'negociationType' => 29, 'agreementType' => 30, 'buysPerUser' => 31, 'videoHtml5' => 32, 'videoFlash' => 33, 'reference' => 34, 'paymentId' => 35, 'boostSales' => 36, 'locations' => 37, 'etGain' => 38, 'activeDate' => 39, 'treasuryType' => 40, 'commercialNameId' => 41, 'ordersCount' => 42, 'activeOffer' => 43, 'isClosed' => 44, 'qtySold' => 45, 'initStock' => 46, 'withPersonalizedCoupons' => 47, 'codeType' => 48, ),
        BasePeer::TYPE_COLNAME => array (GroupdealsPeer::GROUPDEALS_ID => 0, GroupdealsPeer::PRODUCT_ID => 1, GroupdealsPeer::MERCHANT_ID => 2, GroupdealsPeer::MINIMUM_QTY => 3, GroupdealsPeer::MAXIMUM_QTY => 4, GroupdealsPeer::TARGET_MET_EMAIL => 5, GroupdealsPeer::COUPON_BARCODE => 6, GroupdealsPeer::COUPON_MERCHANT_ADDRESS => 7, GroupdealsPeer::COUPON_MERCHANT_CONTACT => 8, GroupdealsPeer::COUPON_EXPIRATION_DATE => 9, GroupdealsPeer::COUPON_PRICE => 10, GroupdealsPeer::COUPON_FINE_PRINT => 11, GroupdealsPeer::COUPON_HIGHLIGHTS => 12, GroupdealsPeer::COUPON_MERCHANT_DESCRIPTION => 13, GroupdealsPeer::COUPON_BUSINESS_HOURS => 14, GroupdealsPeer::COUPON_MERCHANT_LOGO => 15, GroupdealsPeer::COUPON_ADDITIONAL_INFO => 16, GroupdealsPeer::POSITION => 17, GroupdealsPeer::TITLE_LONG => 18, GroupdealsPeer::TITLE_MIDIUM => 19, GroupdealsPeer::TITLE_SHORT => 20, GroupdealsPeer::BENEFFITS => 21, GroupdealsPeer::DEAL_INSTRUCTIONS => 22, GroupdealsPeer::CONDITIONS => 23, GroupdealsPeer::EDITION_STATE => 24, GroupdealsPeer::PUBLICATION_STATE => 25, GroupdealsPeer::PRODUCT_TYPE => 26, GroupdealsPeer::EXPIRATION_DATE => 27, GroupdealsPeer::TCC => 28, GroupdealsPeer::NEGOCIATION_TYPE => 29, GroupdealsPeer::AGREEMENT_TYPE => 30, GroupdealsPeer::BUYS_PER_USER => 31, GroupdealsPeer::VIDEO_HTML5 => 32, GroupdealsPeer::VIDEO_FLASH => 33, GroupdealsPeer::REFERENCE => 34, GroupdealsPeer::PAYMENT_ID => 35, GroupdealsPeer::BOOST_SALES => 36, GroupdealsPeer::LOCATIONS => 37, GroupdealsPeer::ET_GAIN => 38, GroupdealsPeer::ACTIVE_DATE => 39, GroupdealsPeer::TREASURY_TYPE => 40, GroupdealsPeer::COMMERCIAL_NAME_ID => 41, GroupdealsPeer::ORDERS_COUNT => 42, GroupdealsPeer::ACTIVE_OFFER => 43, GroupdealsPeer::IS_CLOSED => 44, GroupdealsPeer::QTY_SOLD => 45, GroupdealsPeer::INIT_STOCK => 46, GroupdealsPeer::WITH_PERSONALIZED_COUPONS => 47, GroupdealsPeer::CODE_TYPE => 48, ),
        BasePeer::TYPE_RAW_COLNAME => array ('GROUPDEALS_ID' => 0, 'PRODUCT_ID' => 1, 'MERCHANT_ID' => 2, 'MINIMUM_QTY' => 3, 'MAXIMUM_QTY' => 4, 'TARGET_MET_EMAIL' => 5, 'COUPON_BARCODE' => 6, 'COUPON_MERCHANT_ADDRESS' => 7, 'COUPON_MERCHANT_CONTACT' => 8, 'COUPON_EXPIRATION_DATE' => 9, 'COUPON_PRICE' => 10, 'COUPON_FINE_PRINT' => 11, 'COUPON_HIGHLIGHTS' => 12, 'COUPON_MERCHANT_DESCRIPTION' => 13, 'COUPON_BUSINESS_HOURS' => 14, 'COUPON_MERCHANT_LOGO' => 15, 'COUPON_ADDITIONAL_INFO' => 16, 'POSITION' => 17, 'TITLE_LONG' => 18, 'TITLE_MIDIUM' => 19, 'TITLE_SHORT' => 20, 'BENEFFITS' => 21, 'DEAL_INSTRUCTIONS' => 22, 'CONDITIONS' => 23, 'EDITION_STATE' => 24, 'PUBLICATION_STATE' => 25, 'PRODUCT_TYPE' => 26, 'EXPIRATION_DATE' => 27, 'TCC' => 28, 'NEGOCIATION_TYPE' => 29, 'AGREEMENT_TYPE' => 30, 'BUYS_PER_USER' => 31, 'VIDEO_HTML5' => 32, 'VIDEO_FLASH' => 33, 'REFERENCE' => 34, 'PAYMENT_ID' => 35, 'BOOST_SALES' => 36, 'LOCATIONS' => 37, 'ET_GAIN' => 38, 'ACTIVE_DATE' => 39, 'TREASURY_TYPE' => 40, 'COMMERCIAL_NAME_ID' => 41, 'ORDERS_COUNT' => 42, 'ACTIVE_OFFER' => 43, 'IS_CLOSED' => 44, 'QTY_SOLD' => 45, 'INIT_STOCK' => 46, 'WITH_PERSONALIZED_COUPONS' => 47, 'CODE_TYPE' => 48, ),
        BasePeer::TYPE_FIELDNAME => array ('groupdeals_id' => 0, 'product_id' => 1, 'merchant_id' => 2, 'minimum_qty' => 3, 'maximum_qty' => 4, 'target_met_email' => 5, 'coupon_barcode' => 6, 'coupon_merchant_address' => 7, 'coupon_merchant_contact' => 8, 'coupon_expiration_date' => 9, 'coupon_price' => 10, 'coupon_fine_print' => 11, 'coupon_highlights' => 12, 'coupon_merchant_description' => 13, 'coupon_business_hours' => 14, 'coupon_merchant_logo' => 15, 'coupon_additional_info' => 16, 'position' => 17, 'title_long' => 18, 'title_midium' => 19, 'title_short' => 20, 'beneffits' => 21, 'deal_instructions' => 22, 'conditions' => 23, 'edition_state' => 24, 'publication_state' => 25, 'product_type' => 26, 'expiration_date' => 27, 'tcc' => 28, 'negociation_type' => 29, 'agreement_type' => 30, 'buys_per_user' => 31, 'video_html5' => 32, 'video_flash' => 33, 'reference' => 34, 'payment_id' => 35, 'boost_sales' => 36, 'locations' => 37, 'et_gain' => 38, 'active_date' => 39, 'treasury_type' => 40, 'commercial_name_id' => 41, 'orders_count' => 42, 'active_offer' => 43, 'is_closed' => 44, 'qty_sold' => 45, 'init_stock' => 46, 'with_personalized_coupons' => 47, 'code_type' => 48, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = GroupdealsPeer::getFieldNames($toType);
        $key = isset(GroupdealsPeer::$fieldKeys[$fromType][$name]) ? GroupdealsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GroupdealsPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, GroupdealsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GroupdealsPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. GroupdealsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GroupdealsPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(GroupdealsPeer::GROUPDEALS_ID);
            $criteria->addSelectColumn(GroupdealsPeer::PRODUCT_ID);
            $criteria->addSelectColumn(GroupdealsPeer::MERCHANT_ID);
            $criteria->addSelectColumn(GroupdealsPeer::MINIMUM_QTY);
            $criteria->addSelectColumn(GroupdealsPeer::MAXIMUM_QTY);
            $criteria->addSelectColumn(GroupdealsPeer::TARGET_MET_EMAIL);
            $criteria->addSelectColumn(GroupdealsPeer::COUPON_BARCODE);
            $criteria->addSelectColumn(GroupdealsPeer::COUPON_MERCHANT_ADDRESS);
            $criteria->addSelectColumn(GroupdealsPeer::COUPON_MERCHANT_CONTACT);
            $criteria->addSelectColumn(GroupdealsPeer::COUPON_EXPIRATION_DATE);
            $criteria->addSelectColumn(GroupdealsPeer::COUPON_PRICE);
            $criteria->addSelectColumn(GroupdealsPeer::COUPON_FINE_PRINT);
            $criteria->addSelectColumn(GroupdealsPeer::COUPON_HIGHLIGHTS);
            $criteria->addSelectColumn(GroupdealsPeer::COUPON_MERCHANT_DESCRIPTION);
            $criteria->addSelectColumn(GroupdealsPeer::COUPON_BUSINESS_HOURS);
            $criteria->addSelectColumn(GroupdealsPeer::COUPON_MERCHANT_LOGO);
            $criteria->addSelectColumn(GroupdealsPeer::COUPON_ADDITIONAL_INFO);
            $criteria->addSelectColumn(GroupdealsPeer::POSITION);
            $criteria->addSelectColumn(GroupdealsPeer::TITLE_LONG);
            $criteria->addSelectColumn(GroupdealsPeer::TITLE_MIDIUM);
            $criteria->addSelectColumn(GroupdealsPeer::TITLE_SHORT);
            $criteria->addSelectColumn(GroupdealsPeer::BENEFFITS);
            $criteria->addSelectColumn(GroupdealsPeer::DEAL_INSTRUCTIONS);
            $criteria->addSelectColumn(GroupdealsPeer::CONDITIONS);
            $criteria->addSelectColumn(GroupdealsPeer::EDITION_STATE);
            $criteria->addSelectColumn(GroupdealsPeer::PUBLICATION_STATE);
            $criteria->addSelectColumn(GroupdealsPeer::PRODUCT_TYPE);
            $criteria->addSelectColumn(GroupdealsPeer::EXPIRATION_DATE);
            $criteria->addSelectColumn(GroupdealsPeer::TCC);
            $criteria->addSelectColumn(GroupdealsPeer::NEGOCIATION_TYPE);
            $criteria->addSelectColumn(GroupdealsPeer::AGREEMENT_TYPE);
            $criteria->addSelectColumn(GroupdealsPeer::BUYS_PER_USER);
            $criteria->addSelectColumn(GroupdealsPeer::VIDEO_HTML5);
            $criteria->addSelectColumn(GroupdealsPeer::VIDEO_FLASH);
            $criteria->addSelectColumn(GroupdealsPeer::REFERENCE);
            $criteria->addSelectColumn(GroupdealsPeer::PAYMENT_ID);
            $criteria->addSelectColumn(GroupdealsPeer::BOOST_SALES);
            $criteria->addSelectColumn(GroupdealsPeer::LOCATIONS);
            $criteria->addSelectColumn(GroupdealsPeer::ET_GAIN);
            $criteria->addSelectColumn(GroupdealsPeer::ACTIVE_DATE);
            $criteria->addSelectColumn(GroupdealsPeer::TREASURY_TYPE);
            $criteria->addSelectColumn(GroupdealsPeer::COMMERCIAL_NAME_ID);
            $criteria->addSelectColumn(GroupdealsPeer::ORDERS_COUNT);
            $criteria->addSelectColumn(GroupdealsPeer::ACTIVE_OFFER);
            $criteria->addSelectColumn(GroupdealsPeer::IS_CLOSED);
            $criteria->addSelectColumn(GroupdealsPeer::QTY_SOLD);
            $criteria->addSelectColumn(GroupdealsPeer::INIT_STOCK);
            $criteria->addSelectColumn(GroupdealsPeer::WITH_PERSONALIZED_COUPONS);
            $criteria->addSelectColumn(GroupdealsPeer::CODE_TYPE);
        } else {
            $criteria->addSelectColumn($alias . '.groupdeals_id');
            $criteria->addSelectColumn($alias . '.product_id');
            $criteria->addSelectColumn($alias . '.merchant_id');
            $criteria->addSelectColumn($alias . '.minimum_qty');
            $criteria->addSelectColumn($alias . '.maximum_qty');
            $criteria->addSelectColumn($alias . '.target_met_email');
            $criteria->addSelectColumn($alias . '.coupon_barcode');
            $criteria->addSelectColumn($alias . '.coupon_merchant_address');
            $criteria->addSelectColumn($alias . '.coupon_merchant_contact');
            $criteria->addSelectColumn($alias . '.coupon_expiration_date');
            $criteria->addSelectColumn($alias . '.coupon_price');
            $criteria->addSelectColumn($alias . '.coupon_fine_print');
            $criteria->addSelectColumn($alias . '.coupon_highlights');
            $criteria->addSelectColumn($alias . '.coupon_merchant_description');
            $criteria->addSelectColumn($alias . '.coupon_business_hours');
            $criteria->addSelectColumn($alias . '.coupon_merchant_logo');
            $criteria->addSelectColumn($alias . '.coupon_additional_info');
            $criteria->addSelectColumn($alias . '.position');
            $criteria->addSelectColumn($alias . '.title_long');
            $criteria->addSelectColumn($alias . '.title_midium');
            $criteria->addSelectColumn($alias . '.title_short');
            $criteria->addSelectColumn($alias . '.beneffits');
            $criteria->addSelectColumn($alias . '.deal_instructions');
            $criteria->addSelectColumn($alias . '.conditions');
            $criteria->addSelectColumn($alias . '.edition_state');
            $criteria->addSelectColumn($alias . '.publication_state');
            $criteria->addSelectColumn($alias . '.product_type');
            $criteria->addSelectColumn($alias . '.expiration_date');
            $criteria->addSelectColumn($alias . '.tcc');
            $criteria->addSelectColumn($alias . '.negociation_type');
            $criteria->addSelectColumn($alias . '.agreement_type');
            $criteria->addSelectColumn($alias . '.buys_per_user');
            $criteria->addSelectColumn($alias . '.video_html5');
            $criteria->addSelectColumn($alias . '.video_flash');
            $criteria->addSelectColumn($alias . '.reference');
            $criteria->addSelectColumn($alias . '.payment_id');
            $criteria->addSelectColumn($alias . '.boost_sales');
            $criteria->addSelectColumn($alias . '.locations');
            $criteria->addSelectColumn($alias . '.et_gain');
            $criteria->addSelectColumn($alias . '.active_date');
            $criteria->addSelectColumn($alias . '.treasury_type');
            $criteria->addSelectColumn($alias . '.commercial_name_id');
            $criteria->addSelectColumn($alias . '.orders_count');
            $criteria->addSelectColumn($alias . '.active_offer');
            $criteria->addSelectColumn($alias . '.is_closed');
            $criteria->addSelectColumn($alias . '.qty_sold');
            $criteria->addSelectColumn($alias . '.init_stock');
            $criteria->addSelectColumn($alias . '.with_personalized_coupons');
            $criteria->addSelectColumn($alias . '.code_type');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GroupdealsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GroupdealsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GroupdealsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GroupdealsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Groupdeals
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GroupdealsPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return GroupdealsPeer::populateObjects(GroupdealsPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GroupdealsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GroupdealsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GroupdealsPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Groupdeals $obj A Groupdeals object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getGroupdealsId();
            } // if key === null
            GroupdealsPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Groupdeals object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Groupdeals) {
                $key = (string) $value->getGroupdealsId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Groupdeals object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GroupdealsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Groupdeals Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GroupdealsPeer::$instances[$key])) {
                return GroupdealsPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (GroupdealsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GroupdealsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to groupdeals
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = GroupdealsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GroupdealsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GroupdealsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GroupdealsPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Groupdeals object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GroupdealsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GroupdealsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GroupdealsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GroupdealsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GroupdealsPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related TreasuryTypes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinTreasuryTypes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GroupdealsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GroupdealsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GroupdealsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GroupdealsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GroupdealsPeer::TREASURY_TYPE, TreasuryTypesPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Groupdeals objects pre-filled with their TreasuryTypes objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Groupdeals objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinTreasuryTypes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GroupdealsPeer::DATABASE_NAME);
        }

        GroupdealsPeer::addSelectColumns($criteria);
        $startcol = GroupdealsPeer::NUM_HYDRATE_COLUMNS;
        TreasuryTypesPeer::addSelectColumns($criteria);

        $criteria->addJoin(GroupdealsPeer::TREASURY_TYPE, TreasuryTypesPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GroupdealsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GroupdealsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GroupdealsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GroupdealsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = TreasuryTypesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = TreasuryTypesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TreasuryTypesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    TreasuryTypesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Groupdeals) to $obj2 (TreasuryTypes)
                $obj2->addGroupdeals($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GroupdealsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GroupdealsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GroupdealsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GroupdealsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GroupdealsPeer::TREASURY_TYPE, TreasuryTypesPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of Groupdeals objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Groupdeals objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GroupdealsPeer::DATABASE_NAME);
        }

        GroupdealsPeer::addSelectColumns($criteria);
        $startcol2 = GroupdealsPeer::NUM_HYDRATE_COLUMNS;

        TreasuryTypesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + TreasuryTypesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GroupdealsPeer::TREASURY_TYPE, TreasuryTypesPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GroupdealsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GroupdealsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GroupdealsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GroupdealsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined TreasuryTypes rows

            $key2 = TreasuryTypesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = TreasuryTypesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TreasuryTypesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    TreasuryTypesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Groupdeals) to the collection in $obj2 (TreasuryTypes)
                $obj2->addGroupdeals($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(GroupdealsPeer::DATABASE_NAME)->getTable(GroupdealsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGroupdealsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGroupdealsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \GroupdealsTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return GroupdealsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Groupdeals or Criteria object.
     *
     * @param      mixed $values Criteria or Groupdeals object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GroupdealsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Groupdeals object
        }

        if ($criteria->containsKey(GroupdealsPeer::GROUPDEALS_ID) && $criteria->keyContainsValue(GroupdealsPeer::GROUPDEALS_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.GroupdealsPeer::GROUPDEALS_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(GroupdealsPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Groupdeals or Criteria object.
     *
     * @param      mixed $values Criteria or Groupdeals object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GroupdealsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GroupdealsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GroupdealsPeer::GROUPDEALS_ID);
            $value = $criteria->remove(GroupdealsPeer::GROUPDEALS_ID);
            if ($value) {
                $selectCriteria->add(GroupdealsPeer::GROUPDEALS_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GroupdealsPeer::TABLE_NAME);
            }

        } else { // $values is Groupdeals object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GroupdealsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the groupdeals table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GroupdealsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GroupdealsPeer::TABLE_NAME, $con, GroupdealsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GroupdealsPeer::clearInstancePool();
            GroupdealsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Groupdeals or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Groupdeals object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(GroupdealsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GroupdealsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Groupdeals) { // it's a model object
            // invalidate the cache for this single object
            GroupdealsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GroupdealsPeer::DATABASE_NAME);
            $criteria->add(GroupdealsPeer::GROUPDEALS_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GroupdealsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GroupdealsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GroupdealsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Groupdeals object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Groupdeals $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GroupdealsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GroupdealsPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(GroupdealsPeer::DATABASE_NAME, GroupdealsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Groupdeals
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GroupdealsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GroupdealsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GroupdealsPeer::DATABASE_NAME);
        $criteria->add(GroupdealsPeer::GROUPDEALS_ID, $pk);

        $v = GroupdealsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Groupdeals[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GroupdealsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GroupdealsPeer::DATABASE_NAME);
            $criteria->add(GroupdealsPeer::GROUPDEALS_ID, $pks, Criteria::IN);
            $objs = GroupdealsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGroupdealsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGroupdealsPeer::buildTableMap();

