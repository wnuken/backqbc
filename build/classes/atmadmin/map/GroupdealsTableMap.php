<?php



/**
 * This class defines the structure of the 'groupdeals' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.atmadmin.map
 */
class GroupdealsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.GroupdealsTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('groupdeals');
        $this->setPhpName('Groupdeals');
        $this->setClassname('Groupdeals');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('groupdeals_id', 'GroupdealsId', 'INTEGER', true, null, null);
        $this->addColumn('product_id', 'ProductId', 'INTEGER', true, null, null);
        $this->addColumn('merchant_id', 'MerchantId', 'INTEGER', true, null, null);
        $this->addColumn('minimum_qty', 'MinimumQty', 'INTEGER', true, null, null);
        $this->addColumn('maximum_qty', 'MaximumQty', 'INTEGER', true, null, null);
        $this->addColumn('target_met_email', 'TargetMetEmail', 'INTEGER', true, null, null);
        $this->addColumn('coupon_barcode', 'CouponBarcode', 'LONGVARCHAR', true, null, null);
        $this->addColumn('coupon_merchant_address', 'CouponMerchantAddress', 'INTEGER', true, null, null);
        $this->addColumn('coupon_merchant_contact', 'CouponMerchantContact', 'INTEGER', true, null, null);
        $this->addColumn('coupon_expiration_date', 'CouponExpirationDate', 'DATE', false, null, null);
        $this->addColumn('coupon_price', 'CouponPrice', 'INTEGER', true, null, null);
        $this->addColumn('coupon_fine_print', 'CouponFinePrint', 'INTEGER', true, null, null);
        $this->addColumn('coupon_highlights', 'CouponHighlights', 'INTEGER', true, null, null);
        $this->addColumn('coupon_merchant_description', 'CouponMerchantDescription', 'INTEGER', true, null, null);
        $this->addColumn('coupon_business_hours', 'CouponBusinessHours', 'INTEGER', true, null, null);
        $this->addColumn('coupon_merchant_logo', 'CouponMerchantLogo', 'INTEGER', true, null, null);
        $this->addColumn('coupon_additional_info', 'CouponAdditionalInfo', 'LONGVARCHAR', true, null, null);
        $this->addColumn('position', 'Position', 'INTEGER', true, null, null);
        $this->addColumn('title_long', 'TitleLong', 'VARCHAR', true, 140, '');
        $this->addColumn('title_midium', 'TitleMidium', 'VARCHAR', true, 100, '');
        $this->addColumn('title_short', 'TitleShort', 'VARCHAR', true, 40, '');
        $this->addColumn('beneffits', 'Beneffits', 'LONGVARCHAR', true, null, null);
        $this->addColumn('deal_instructions', 'DealInstructions', 'VARCHAR', true, 4096, '');
        $this->addColumn('conditions', 'Conditions', 'LONGVARCHAR', true, null, null);
        $this->addColumn('edition_state', 'EditionState', 'INTEGER', true, 10, null);
        $this->addColumn('publication_state', 'PublicationState', 'INTEGER', true, 10, null);
        $this->addColumn('product_type', 'ProductType', 'INTEGER', true, 10, null);
        $this->addColumn('expiration_date', 'ExpirationDate', 'VARCHAR', false, 100, null);
        $this->addColumn('tcc', 'Tcc', 'INTEGER', true, 10, null);
        $this->addColumn('negociation_type', 'NegociationType', 'INTEGER', true, 10, null);
        $this->addColumn('agreement_type', 'AgreementType', 'INTEGER', true, 10, null);
        $this->addColumn('buys_per_user', 'BuysPerUser', 'INTEGER', true, 10, null);
        $this->addColumn('video_html5', 'VideoHtml5', 'VARCHAR', false, 4096, null);
        $this->addColumn('video_flash', 'VideoFlash', 'VARCHAR', false, 4096, null);
        $this->addColumn('reference', 'Reference', 'INTEGER', true, 10, null);
        $this->addColumn('payment_id', 'PaymentId', 'VARCHAR', true, 1024, '');
        $this->addColumn('boost_sales', 'BoostSales', 'INTEGER', false, 10, 0);
        $this->addColumn('locations', 'Locations', 'VARCHAR', true, 100, '');
        $this->addColumn('et_gain', 'EtGain', 'FLOAT', false, null, null);
        $this->addColumn('active_date', 'ActiveDate', 'TIMESTAMP', false, null, null);
        $this->addForeignKey('treasury_type', 'TreasuryType', 'INTEGER', 'treasury_types', 'id', false, 10, null);
        $this->addColumn('commercial_name_id', 'CommercialNameId', 'INTEGER', true, 10, null);
        $this->addColumn('orders_count', 'OrdersCount', 'INTEGER', false, 10, 0);
        $this->addColumn('active_offer', 'ActiveOffer', 'INTEGER', false, 1, 1);
        $this->addColumn('is_closed', 'IsClosed', 'INTEGER', false, 10, 0);
        $this->addColumn('qty_sold', 'QtySold', 'INTEGER', false, null, 0);
        $this->addColumn('init_stock', 'InitStock', 'INTEGER', false, 10, 0);
        $this->addColumn('with_personalized_coupons', 'WithPersonalizedCoupons', 'INTEGER', false, 5, 0);
        $this->addColumn('code_type', 'CodeType', 'INTEGER', false, 5, 0);
        $this->addColumn('general_nit', 'GeneralNit', 'INTEGER', false, 1, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('TreasuryTypes', 'TreasuryTypes', RelationMap::MANY_TO_ONE, array('treasury_type' => 'id', ), null, null);
    } // buildRelations()

} // GroupdealsTableMap
