<?php



/**
 * This class defines the structure of the 'customer_entity' table.
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
class CustomerEntityTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.CustomerEntityTableMap';

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
        $this->setName('customer_entity');
        $this->setPhpName('CustomerEntity');
        $this->setClassname('CustomerEntity');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('entity_id', 'EntityId', 'INTEGER', true, 10, null);
        $this->addColumn('entity_type_id', 'EntityTypeId', 'SMALLINT', true, 5, 0);
        $this->addColumn('attribute_set_id', 'AttributeSetId', 'SMALLINT', true, 5, 0);
        $this->addForeignKey('website_id', 'WebsiteId', 'SMALLINT', 'core_website', 'website_id', false, 5, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 255, null);
        $this->addColumn('group_id', 'GroupId', 'SMALLINT', true, 5, 0);
        $this->addColumn('increment_id', 'IncrementId', 'VARCHAR', false, 50, null);
        $this->addForeignKey('store_id', 'StoreId', 'SMALLINT', 'core_store', 'store_id', false, 5, 0);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('is_active', 'IsActive', 'SMALLINT', true, 5, 1);
        $this->addColumn('disable_auto_group_change', 'DisableAutoGroupChange', 'SMALLINT', true, 5, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CoreStore', 'CoreStore', RelationMap::MANY_TO_ONE, array('store_id' => 'store_id', ), 'SET NULL', 'CASCADE');
        $this->addRelation('CoreWebsite', 'CoreWebsite', RelationMap::MANY_TO_ONE, array('website_id' => 'website_id', ), 'SET NULL', 'CASCADE');
        $this->addRelation('SalesFlatOrder', 'SalesFlatOrder', RelationMap::ONE_TO_MANY, array('entity_id' => 'customer_id', ), 'SET NULL', 'CASCADE', 'SalesFlatOrders');
    } // buildRelations()

} // CustomerEntityTableMap
