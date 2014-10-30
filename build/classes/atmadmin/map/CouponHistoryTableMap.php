<?php



/**
 * This class defines the structure of the 'coupon_history' table.
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
class CouponHistoryTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.CouponHistoryTableMap';

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
        $this->setName('coupon_history');
        $this->setPhpName('CouponHistory');
        $this->setClassname('CouponHistory');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('history_id', 'HistoryId', 'INTEGER', true, 10, null);
        $this->addColumn('campaign_name', 'CampaignName', 'VARCHAR', true, 255, null);
        $this->addColumn('coupon_code', 'CouponCode', 'VARCHAR', true, 255, null);
        $this->addColumn('redemption_date', 'RedemptionDate', 'TIMESTAMP', false, null, null);
        $this->addColumn('value', 'Value', 'DECIMAL', true, 12, null);
        $this->addColumn('merchant_id', 'MerchantId', 'INTEGER', true, null, null);
        $this->addColumn('campaign_id', 'CampaignId', 'VARCHAR', false, 20, null);
        $this->addColumn('order_id', 'OrderId', 'VARCHAR', false, 20, null);
        $this->addColumn('item_id', 'ItemId', 'VARCHAR', false, 20, null);
        $this->addColumn('processed', 'Processed', 'INTEGER', false, 1, 0);
        $this->addColumn('unit', 'Unit', 'INTEGER', false, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CouponHistoryTableMap
