<?php



/**
 * This class defines the structure of the 'core_website' table.
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
class CoreWebsiteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.CoreWebsiteTableMap';

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
        $this->setName('core_website');
        $this->setPhpName('CoreWebsite');
        $this->setClassname('CoreWebsite');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('website_id', 'WebsiteId', 'SMALLINT', true, 5, null);
        $this->addColumn('code', 'Code', 'VARCHAR', false, 32, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 64, null);
        $this->addColumn('sort_order', 'SortOrder', 'SMALLINT', true, 5, 0);
        $this->addColumn('default_group_id', 'DefaultGroupId', 'SMALLINT', true, 5, 0);
        $this->addColumn('is_default', 'IsDefault', 'SMALLINT', false, 5, 0);
        $this->addColumn('is_staging', 'IsStaging', 'BOOLEAN', true, 1, false);
        $this->addColumn('master_login', 'MasterLogin', 'VARCHAR', false, 40, null);
        $this->addColumn('master_password', 'MasterPassword', 'VARCHAR', false, 100, null);
        $this->addColumn('visibility', 'Visibility', 'VARCHAR', false, 40, null);
        $this->addColumn('is_visible', 'IsVisible', 'VARCHAR', false, 2, null);
        $this->addColumn('department', 'Department', 'VARCHAR', false, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CoreStoreGroup', 'CoreStoreGroup', RelationMap::ONE_TO_MANY, array('website_id' => 'website_id', ), 'CASCADE', 'CASCADE', 'CoreStoreGroups');
        $this->addRelation('CoreStore', 'CoreStore', RelationMap::ONE_TO_MANY, array('website_id' => 'website_id', ), 'CASCADE', 'CASCADE', 'CoreStores');
        $this->addRelation('CustomerEntity', 'CustomerEntity', RelationMap::ONE_TO_MANY, array('website_id' => 'website_id', ), 'SET NULL', 'CASCADE', 'CustomerEntitys');
    } // buildRelations()

} // CoreWebsiteTableMap
