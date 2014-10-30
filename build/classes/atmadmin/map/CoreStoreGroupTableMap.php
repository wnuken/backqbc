<?php



/**
 * This class defines the structure of the 'core_store_group' table.
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
class CoreStoreGroupTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.CoreStoreGroupTableMap';

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
        $this->setName('core_store_group');
        $this->setPhpName('CoreStoreGroup');
        $this->setClassname('CoreStoreGroup');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('group_id', 'GroupId', 'SMALLINT', true, 5, null);
        $this->addForeignKey('website_id', 'WebsiteId', 'SMALLINT', 'core_website', 'website_id', true, 5, 0);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('root_category_id', 'RootCategoryId', 'INTEGER', true, 10, 0);
        $this->addColumn('default_store_id', 'DefaultStoreId', 'SMALLINT', true, 5, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CoreWebsite', 'CoreWebsite', RelationMap::MANY_TO_ONE, array('website_id' => 'website_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CoreStore', 'CoreStore', RelationMap::ONE_TO_MANY, array('group_id' => 'group_id', ), 'CASCADE', 'CASCADE', 'CoreStores');
    } // buildRelations()

} // CoreStoreGroupTableMap
