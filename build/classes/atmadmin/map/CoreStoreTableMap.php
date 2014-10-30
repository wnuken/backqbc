<?php



/**
 * This class defines the structure of the 'core_store' table.
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
class CoreStoreTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.CoreStoreTableMap';

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
        $this->setName('core_store');
        $this->setPhpName('CoreStore');
        $this->setClassname('CoreStore');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('store_id', 'StoreId', 'SMALLINT', true, 5, null);
        $this->addColumn('code', 'Code', 'VARCHAR', false, 32, null);
        $this->addForeignKey('website_id', 'WebsiteId', 'SMALLINT', 'core_website', 'website_id', true, 5, 0);
        $this->addForeignKey('group_id', 'GroupId', 'SMALLINT', 'core_store_group', 'group_id', true, 5, 0);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('sort_order', 'SortOrder', 'SMALLINT', true, 5, 0);
        $this->addColumn('is_active', 'IsActive', 'SMALLINT', true, 5, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CoreStoreGroup', 'CoreStoreGroup', RelationMap::MANY_TO_ONE, array('group_id' => 'group_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CoreWebsite', 'CoreWebsite', RelationMap::MANY_TO_ONE, array('website_id' => 'website_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CustomerEntity', 'CustomerEntity', RelationMap::ONE_TO_MANY, array('store_id' => 'store_id', ), 'SET NULL', 'CASCADE', 'CustomerEntitys');
        $this->addRelation('SalesFlatOrder', 'SalesFlatOrder', RelationMap::ONE_TO_MANY, array('store_id' => 'store_id', ), 'SET NULL', 'CASCADE', 'SalesFlatOrders');
        $this->addRelation('SalesFlatOrderItem', 'SalesFlatOrderItem', RelationMap::ONE_TO_MANY, array('store_id' => 'store_id', ), 'SET NULL', 'CASCADE', 'SalesFlatOrderItems');
    } // buildRelations()

} // CoreStoreTableMap
