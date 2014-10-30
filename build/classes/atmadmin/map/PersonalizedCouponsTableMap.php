<?php



/**
 * This class defines the structure of the 'personalized_coupons' table.
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
class PersonalizedCouponsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.PersonalizedCouponsTableMap';

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
        $this->setName('personalized_coupons');
        $this->setPhpName('PersonalizedCoupons');
        $this->setClassname('PersonalizedCoupons');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addColumn('code', 'Code', 'VARCHAR', true, 255, null);
        $this->addColumn('groupdeals_id', 'GroupdealsId', 'INTEGER', false, 10, null);
        $this->addColumn('status', 'Status', 'INTEGER', false, 10, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CouponMapping', 'CouponMapping', RelationMap::ONE_TO_MANY, array('id' => 'personalized_coupon', ), 'SET NULL', null, 'CouponMappings');
    } // buildRelations()

} // PersonalizedCouponsTableMap
