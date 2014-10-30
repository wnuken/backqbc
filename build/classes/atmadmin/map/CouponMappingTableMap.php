<?php



/**
 * This class defines the structure of the 'coupon_mapping' table.
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
class CouponMappingTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.CouponMappingTableMap';

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
        $this->setName('coupon_mapping');
        $this->setPhpName('CouponMapping');
        $this->setClassname('CouponMapping');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('mapping_id', 'MappingId', 'INTEGER', true, 10, null);
        $this->addColumn('coupon', 'Coupon', 'VARCHAR', true, 255, null);
        $this->addColumn('coupon_md5', 'CouponMd5', 'VARCHAR', true, 255, null);
        $this->addColumn('expiration_date', 'ExpirationDate', 'TIMESTAMP', false, null, null);
        $this->addColumn('customer_id', 'CustomerId', 'INTEGER', false, 10, null);
        $this->addColumn('can_send', 'CanSend', 'INTEGER', false, 1, 1);
        $this->addColumn('status', 'Status', 'INTEGER', false, null, 1);
        $this->addColumn('order_id', 'OrderId', 'INTEGER', false, 10, null);
        $this->addColumn('item_id', 'ItemId', 'INTEGER', false, 10, null);
        $this->addColumn('payed_for_return', 'PayedForReturn', 'INTEGER', false, 10, null);
        $this->addForeignKey('increment_id', 'IncrementId', 'VARCHAR', 'sales_flat_order', 'increment_id', false, 50, null);
        $this->addColumn('unit', 'Unit', 'INTEGER', false, 5, null);
        $this->addForeignKey('personalized_coupon', 'PersonalizedCoupon', 'INTEGER', 'personalized_coupons', 'id', false, 10, null);
        $this->addColumn('pos_number', 'PosNumber', 'VARCHAR', false, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SalesFlatOrder', 'SalesFlatOrder', RelationMap::MANY_TO_ONE, array('increment_id' => 'increment_id', ), 'CASCADE', null);
        $this->addRelation('PersonalizedCoupons', 'PersonalizedCoupons', RelationMap::MANY_TO_ONE, array('personalized_coupon' => 'id', ), 'SET NULL', null);
    } // buildRelations()

} // CouponMappingTableMap
